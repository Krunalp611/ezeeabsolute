<?php
ob_start();

/*ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/

define('IN_SITE', 	true);

include_once("includes/common.php");
include_once($physical_path['class']. "PHPMailerV2/sendmailsmtp.php");

global $logs;

$ObjSmtpSendmail = new sendmailsmtp();

/*********************** Added By Chaitali Patel on 18 May 2012 ****************************/

$urlParts = parse_url($_SERVER['HTTP_REFERER']);

$cmpStr = $urlParts['scheme']."://".$urlParts['host'];

$fdcallback = array('http://ezeeabsolute.com','http://www.ezeeabsolute.com');

//
/*******************************************************************************************/

$ins_date = date('Y-m-d');
$frommail = 'noreply@ezeetechnosys.com';
$to=" ";
$ct = '';
$st = '';
$comment = '';
$email = '';
$email = trim($_POST['email']);
$name = '';
$name = cleanString(ucwords($_POST['fname']));
$company = '';
#SMS Trigger
$smstrigger_countrylist = Sms_Trigger_Country_List();
//Utm Details
$utm_source = trim($_POST['utm_source']);
$utm_campaign = trim($_POST['utm_campaign']);

$company = cleanString(trim($_POST['company']));
if(in_array($_SERVER['HTTP_REFERER'],$fdcallback) || in_array($cmpStr,$fdcallback))
{
	$fromsite='eZee Frontdesk';
	$to = 'ea@ezeetechnosys.com';
	$site = "FD.com:Callback";
	$source_ary = array("FD.com:Callback");
	$cphone = $_POST['phone'];
	$feedback = cleanString(trim($_POST['feedback']));
	$ct = $_POST['city'];
	$st = $_POST['state'];
	$product = 'FD';
	$logs->logIt('####<<<<<<<<<<<< eZee Frontdesk Starts >>>>>>>>>>>>####');
}
else
{
//$fromsite='eZee Absolute';
	echo "Your request has not been sent,Please retry again.<br/><a href='javascript: history.go(-1)'>Go Back</a>";	
	$redirect_url=$cmpStr;
//	ob_clean();
//	header('location: '.$redirect_url);
	exit();	
}

if(intval(trim($_POST['country']) > 0))
{
		// Get the country name from the ID
		$countryname = Get_Country_Name($_POST['country']);
}	
else // when it's a text (name of country)
{
		$countryname = stripslashes($_POST['country']);
		$countryid=Show_Country_Id(trim($_POST['country']));//Added by Chaitali Patel
}
$resel = 0;
$accessKey = 'u$ra19bd5bebd63186c58f99d34df3f579b';
$secretKey = '6682b0702fe93588242659c2c55e9dd4d5998452';
$api_url_base = 'https://api.leadsquared.com/v2/LeadManagement.svc';
$mxcprospectid = $_POST['MXCProspectId'];
$updateurl = $api_url_base . '/Lead.Update?accessKey=' . $accessKey . '&secretKey=' . $secretKey .'&leadId=' . $mxcprospectid .'&postUpdatedLead=true';
$createurl = $api_url_base . '/Lead.Create?accessKey=' . $accessKey . '&secretKey=' . $secretKey;
$leadcheck =  $api_url_base . '/Leads.GetById?accessKey=' . $accessKey . '&secretKey=' . $secretKey .'&id=' . $mxcprospectid;
$emailcheck =  $api_url_base . '/Leads.GetByEmailaddress?accessKey=' . $accessKey . '&secretKey=' . $secretKey .'&emailaddress=' . $_POST['email'];
$api_url_activity = 'https://api.leadsquared.com/v2/ProspectActivity.svc';
$leadactivity =  $api_url_activity . '/Create?accessKey=' . $accessKey . '&secretKey=' . $secretKey;
//"ActivityDateTime": "'.date('Y-m-d h:i:s').'"
$data_string = '[
					{"Attribute":"FirstName", "Value": "'.$name.'"},
					{"Attribute":"EmailAddress", "Value": "'.$email.'"},
					{"Attribute":"Phone", "Value": "'.$cphone.'"},
					{"Attribute":"SourceMedium", "Value": "'.$site.'"},
					{"Attribute":"mx_IP_Address", "Value": "'.$_SERVER['REMOTE_ADDR'].'"},
					{"Attribute":"mx_Product_Name", "Value": "'.$product.'"},
					{"Attribute":"mx_Trigger_AR", "Value": "'.$site.'"},
					';
if($utm_source != '')
{
	$data_string .= ',{"Attribute":"Source", "Value": "'.$utm_source.'"}';
}
if($utm_campaign != '')
{
	$data_string .= ',{"Attribute":"SourceCampaign", "Value": "'.$utm_campaign.'"}';
}

$data_string .= ']';
				


			//Function Autoresponder is used to Generate Trigger Auto Responder Activity Through Which Auto Email is Sent
				function autoresponder($emailadd,$lead_activity)
				{
					global $logs;

					//echo "3"."E".$emailadd."A".$lead_activity;
					$autoResponder_string = '{

												"EmailAddress" : "'.$emailadd.'",
												"ActivityEvent" : 210,
												"ActivityNote" : "Trigger Auto Responder"	
											 }';
					//var_dump($autoResponder_string);

					try
					 	{
							//echo "3.4";
							$curltrigger = curl_init($lead_activity);

							curl_setopt($curltrigger, CURLOPT_CUSTOMREQUEST, "POST");
							curl_setopt($curltrigger, CURLOPT_RETURNTRANSFER, 1) ;
							curl_setopt($curltrigger, CURLOPT_HEADER, 0);
							curl_setopt($curltrigger, CURLOPT_POSTFIELDS, $autoResponder_string);
							curl_setopt($curltrigger, CURLOPT_SSL_VERIFYPEER, false);
							curl_setopt($curltrigger, CURLOPT_HTTPHEADER, array(
																				 'Content-type:application/json',
																				 'Content-Length:'.strlen($autoResponder_string)
																				));
							$curltrigger_response = curl_exec($curltrigger);
							// echo "3.5";
							// echo"<pre>";
							// print_r($curltrigger_response);
							// echo"</pre>";

							//$logs->logIt('====================TRIGGER AUTO RESPONDER ACTIVITY IS GENERATED====================');
							$logs->logIt('TRIGGER AR');

							curl_close($curltrigger);

											 	
						 }catch (Exception $e)
						  {
						 	curl_close($curltrigger);
						  }						 

				}	

				//Function SmsTrigger is used to Generate Trigger SMS Event Through Which SMS is Sent to Visitor
				function SmsTrigger($emailadd,$lead_activity)
				{
					//echo "Entered in sms trigger"."<br>E".$emailadd."<br>U".$lead_activity;
					$smsTrigger_string = '{
											"EmailAddress" : "'.$emailadd.'",
											"ActivityEvent" : 217,
											"ActivityNote" : "Trigger SMS" 

						  				  }';

							//var_dump($smsTrigger_string);
						   
						   try 
						   {
						   	   global $logs;

							   $curl_smstrigger = curl_init($lead_activity);

							   curl_setopt($curl_smstrigger, CURLOPT_CUSTOMREQUEST, "POST");
							   curl_setopt($curl_smstrigger, CURLOPT_RETURNTRANSFER, 1) ;
							   curl_setopt($curl_smstrigger, CURLOPT_HEADER, 0);
							   curl_setopt($curl_smstrigger, CURLOPT_POSTFIELDS, $smsTrigger_string);
							   curl_setopt($curl_smstrigger, CURLOPT_SSL_VERIFYPEER, false);
							   curl_setopt($curl_smstrigger, CURLOPT_HTTPHEADER, array(
							   															 'Content-Type:application/json',
							   															 'Content-Length:'.strlen($smsTrigger_string)			

							   															));

							   $curl_smstrigger_response = curl_exec($curl_smstrigger);

							  // $logs->logIt('===+++=== SMS IS TRIGGERED ===+++===');
							   $logs->logIt('TRIGGER SMS');

							   	// echo "<br>SMS Triggered</br>";
							   	// echo"<pre>";
							   	// print_r($curl_smstrigger_response);
							   	// echo"</pre>";
							   curl_close($curl_smstrigger);
							   	
						   } catch (Exception $e) {
						   		curl_close($curl_smstrigger);
						   }
				}

	

if($mxcprospectid != '')
{
	try
	{
		$curlEmailCheck = curl_init($emailcheck);
		curl_setopt($curlEmailCheck, CURLOPT_CUSTOMREQUEST, "GET");
		curl_setopt($curlEmailCheck, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curlEmailCheck, CURLOPT_HEADER, 0);
		//curl_setopt($curlLeadCheck, CURLOPT_POSTFIELDS, $Leaddata_string);
		curl_setopt($curlEmailCheck, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($curlEmailCheck, CURLOPT_HTTPHEADER, array(
													'Content-Type:application/json'
													//'Content-Length:'.strlen($Leaddata_string)
													));
   
		$Emailcheck_response = curl_exec($curlEmailCheck);
		$email_array =json_decode($Emailcheck_response, true);
		$ProspectID = $email_array[0]['ProspectID'];
		$SourceMedium = $email_array[0]['SourceMedium'];
		
		curl_close($curlEmailCheck);

		$utm_src="";
		if($utm_source != '')
		{
			$utm_src="| Utm_Source:".$utm_source;
		}
		$utm_cmp="";
		if($utm_campaign != '')
		{
			$utm_cmp="| Utm_Campaign:".$utm_campaign;
		}

		$leadActivity_string = '{
				"RelatedProspectId": "'.$ProspectID.'",
				"ActivityEvent": 203,
				"ActivityNote": "From:'.$site.' | Details:'.$name.' | '.$_POST['email'].' | '.$cphone.' '.$utm_src.' '.$utm_cmp.'"
				
			}';
	
		if($Emailcheck_response != "[]")
	    {
	        try
	            {
					$leadactivitycurl = curl_init($leadactivity);
					curl_setopt($leadactivitycurl, CURLOPT_CUSTOMREQUEST, "POST");
					curl_setopt($leadactivitycurl, CURLOPT_RETURNTRANSFER, 1);
					curl_setopt($leadactivitycurl, CURLOPT_HEADER, 0);
					curl_setopt($leadactivitycurl, CURLOPT_POSTFIELDS, $leadActivity_string);
					curl_setopt($leadactivitycurl, CURLOPT_SSL_VERIFYPEER, false);
					curl_setopt($leadactivitycurl, CURLOPT_HTTPHEADER, array(
									                                         'Content-Type:application/json',
									                                          'Content-Length:'.strlen($leadActivity_string)
									                                          ));				            
									           
					$leadactivity_response = curl_exec($leadactivitycurl);

					$leadactivity_array = json_decode($leadactivity_response, true);
					$leadactivity_status = $leadactivity_array['Status'];
					$leadactivity_message = $leadactivity_array['Message']['Id'];
					
					$logs->logIt('CASE 1 : MXCProspectId & EmailId Both Are Exist');
					$logs->logIt('Lead.Activity : [Name] -> '.$name.' [Email] -> '.$email.' [AccessKey] -> '.$accessKey.' [Prospectid] -> '.$ProspectID.' [SourceMedium] -> '.$site);
					$logs->logIt('Response From LS : [Status] -> '.$leadactivity_status.' [Message] -> [Id] -> '.$leadactivity_message);
					
					if($leadactivity_status == "Success")
					{
						$triar_cu1 = updateTriggerAr($ProspectID,$site);
						if($triar_cu1 == "Success")
						{
							autoresponder($email,$leadactivity);		
						}	
					} 
					if(!in_array($countryname, $smstrigger_countrylist))
					{
					   	SmsTrigger($email,$leadactivity);
					}	
					curl_close($leadactivitycurl);

	                		
	            }catch (Exception $e) {
	            	$logs->logIt('CASE 1 : MXCProspectId & EmailId Both Are Exist Exception ->'.$e);
	            	curl_close($leadactivitycurl);
	                		
	                	}

	    }
	    else
	    {
	        try
	            {
	                $curl = curl_init($updateurl);
										           
					curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
					curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
					curl_setopt($curl, CURLOPT_HEADER, 0);
					curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
					curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
					curl_setopt($curl, CURLOPT_HTTPHEADER, array(
										                            'Content-Type:application/json',
					   												'Content-Length:'.strlen($data_string)
										                         ));
					          
					$json_response = curl_exec($curl);


					$curl_array = json_decode($json_response, true);
					$curl_status = $curl_array['Status'];
					$curl_msg = $curl_array['Message']['AffectedRows'];
					
					$logs->logIt('CASE 2 : MXCProspectId Is Exist & EmailId Is Not Exist');
					$logs->logIt('Lead.Update : [Name] -> '.$name.' [Email] -> '.$email.' [AccessKey] -> '.$accessKey.' [MXCProspectId] -> '.$mxcprospectid.' [SourceMedium] -> '.$site.' [Phone] -> '.$cphone.' [Utm_Source] -> '.$utm_source.' [Utm_Campaign] -> '.$utm_campaign);
					$logs->logIt('Response From LS : [Status] -> '.$curl_status.' [Message] -> [AffectedRows] -> '.$curl_msg);
					
					if($curl_status == "Success")
					{
						autoresponder($email,$leadactivity);
					}	
					if(!in_array($countryname, $smstrigger_countrylist))
					{
						SmsTrigger($email,$leadactivity);
					}
											    
					curl_close($curl);
	                		
	        	}catch (Exception $e) {
	        		$logs->logIt('CASE 2 : MXCProspectId Is Exist & EmailId Is Not Exist Exception ->'.$e);
	        		curl_close($curl);
	                		
	                	}

	    }	

		
	}catch (Exception $e) {
		$logs->logIt('First Main Case Email Check Exception ->'.$e);
		curl_close($curlEmailCheck);

		
	}
	
}
else
{
	try
		{	
			$curlEmailCheck = curl_init($emailcheck);
			curl_setopt($curlEmailCheck, CURLOPT_CUSTOMREQUEST, "GET");
			curl_setopt($curlEmailCheck, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($curlEmailCheck, CURLOPT_HEADER, 0);
			//curl_setopt($curlLeadCheck, CURLOPT_POSTFIELDS, $Leaddata_string);
			curl_setopt($curlEmailCheck, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($curlEmailCheck, CURLOPT_HTTPHEADER, array(
																'Content-Type:application/json'
																//'Content-Length:'.strlen($Leaddata_string)
															  ));
   
			$Emailcheck_response = curl_exec($curlEmailCheck);
			$email_array =json_decode($Emailcheck_response, true);
			
			$ProspectID = $email_array[0]['ProspectID'];
			$SourceMedium = $email_array[0]['SourceMedium'];
	 
			curl_close($curlEmailCheck);

			$utm_src="";
			if($utm_source != '')
			{
				$utm_src="| Utm_Source:".$utm_source;
			}
			$utm_cmp="";
			if($utm_campaign != '')
			{
				$utm_cmp="| Utm_Campaign:".$utm_campaign;
			}
	
			$emailActivity_string = '
                    {
                        "RelatedProspectId": "'.$ProspectID.'",
                        "ActivityEvent": 203,
                        "ActivityNote": "From:'.$site.' Details:'.$name.' | '.$email.' | '.$cphone.' '.$utm_src.' '.$utm_cmp.'"
                        
                    }
                ';
    		if($Emailcheck_response != "[]")
    		{	

   			 try
				{	
					$leadactivitycurl = curl_init($leadactivity);
           
          			curl_setopt($leadactivitycurl, CURLOPT_CUSTOMREQUEST, "POST");
           		    curl_setopt($leadactivitycurl, CURLOPT_RETURNTRANSFER, 1);
       			    curl_setopt($leadactivitycurl, CURLOPT_HEADER, 0);
    		        curl_setopt($leadactivitycurl, CURLOPT_POSTFIELDS, $emailActivity_string);
    		        curl_setopt($leadactivitycurl, CURLOPT_SSL_VERIFYPEER, false);
    		        curl_setopt($leadactivitycurl, CURLOPT_HTTPHEADER, array(
                                                        						'Content-Type:application/json',
                                                        						'Content-Length:'.strlen($emailActivity_string)
                                                        					));
           
            		$leadactivity_response = curl_exec($leadactivitycurl);
          
           		    $leadactivity_array = json_decode($leadactivity_response, true);
             		$leadactivity_status = $leadactivity_array['Status'];
            		$leadactivity_message = $leadactivity_array['Message']['Id'];

            		$logs->logIt('CASE 3 : MXCProspectId Is Not Exist & EmailId Is Exist');
					$logs->logIt('Lead.Activity : [Name] -> '.$name.' [Email] -> '.$email.' [AccessKey] -> '.$accessKey.' [ProspectId] -> '.$ProspectID.' [SourceMedium] -> '.$site);
					$logs->logIt('Response From LS : [Status] -> '.$leadactivity_status.' [Message] -> [Id] -> '.$leadactivity_message);
           			
           			if($leadactivity_status == "Success")
            		{
            			$triar_cu3 = updateTriggerAr($ProspectID,$site);
            			if($triar_cu3 == "Success")
            			{
            				autoresponder($email,$leadactivity);	
            			}	
            		}
            		if(!in_array($countryname, $smstrigger_countrylist))
            		{
            			SmsTrigger($email,$leadactivity);
            		}		
	 				
            		curl_close($leadactivitycurl);

		
				}catch (Exception $e) {
					$logs->logIt('CASE 3 : MXCProspectId Is Not Exist & EmailId Is Exist Exception ->'.$e);
					curl_close($leadactivitycurl);
		
									  }
			}
    else
    {
    	try
     	{	
     		$curl_createlead = curl_init($createurl);

			curl_setopt($curl_createlead, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($curl_createlead, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($curl_createlead, CURLOPT_HEADER, 0);
			curl_setopt($curl_createlead, CURLOPT_POSTFIELDS, $data_string);
			curl_setopt($curl_createlead, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($curl_createlead, CURLOPT_HTTPHEADER, array(
																	 'Content-Type:application/json',
																	 'Content-Length:'.strlen($data_string)		

																		));
			$curl_createlead_response = curl_exec($curl_createlead);

			$cl_response_ary = json_decode($curl_createlead_response, true);
            $cl_status = $cl_response_ary['Status'];
            $cl_msg = $cl_response_ary['Message']['Id'];
            
            $logs->logIt('CASE 4 : MXCProspectId & EmailId Both Are Not Exist');
			$logs->logIt('Lead.Create : [Name] -> '.$name.' [Email] -> '.$email.' [AccessKey] -> '.$accessKey.' [SourceMedium] -> '.$site.' [Phone] -> '.$cphone.' [Utm_Source] -> '.$utm_source.' [Utm_Campaign] -> '.$utm_campaign);
			$logs->logIt('Response From LS : [Status] -> '.$cl_status.' [Message] -> [Id] -> '.$cl_msg);

			if($cl_status == "Success")
            {
            	autoresponder($email,$leadactivity);
            }	

            if(!in_array($countryname, $smstrigger_countrylist))
            {
            	SmsTrigger($email,$leadactivity);
            }	

			curl_close($curl_createlead);
    		
    	}catch (Exception $e) {
    		$logs->logIt('CASE 4 : MXCProspectId & EmailId Both Are Not Exist Exception ->'.$e);
    		curl_close($curl_createlead);
    	}
    }           
		
	} catch (Exception $e) {
		$logs->logIt('Second Main Case Email Check Exception ->'.$e);
		curl_close($curlEmailCheck);
		
	}
}

if(strcmp($fromsite,"eZee Frontdesk") == 0)
{
		
		$date = date("j F, Y, g:i a");
		//$ipaddress = $_SERVER['REMOTE_ADDR'];
		
		// Get the location information from the IP address
		$client_ip_address_text = '';
		include_once("includes/ip2location_finder.php"); // REMEMBER: using 'require_once' can give you a fatal error when the file is not available
		
		// We got some response
		if(is_array($ip2location_data) && !empty($ip2location_data))
		{
			// When it's a TIMEOUT
			if($ip2location_data['RESPONSE'] == 'TIMEOUT')
			{
				$client_ip_address_text = 'Client IP Address: '.$_SERVER['REMOTE_ADDR'].' Country: '.$ip2location_data['RESPONSE'].' City: '.$ip2location_data['RESPONSE'];
				$ip_address_country=$ip2location_data['RESPONSE'];
				$ip_address_city=$ip2location_data['RESPONSE'];
			}
			else
			{
				$client_ip_address_text = 'Client IP Address: '.$_SERVER['REMOTE_ADDR'].' Country: '.$ip2location_data['countryname'].' City: '.$ip2location_data['city'];
				$ip_address_country=$ip2location_data['countryname'];
				$ip_address_city=$ip2location_data['city'];
			}
		}
		else
		{
			$client_ip_address_text = 'Client IP Address: '.$_SERVER['REMOTE_ADDR'].' Country: NA City: NA';
			$ip_address_country='NA';
			$ip_address_city='NA';
		}
		
		
		$subject=" ";
		$body=" ";
		$headers=" ";
			
		$name				= $_POST['fname'];
		$phone				= $_POST['phone'];
		$email				= $_POST['email'];
		
		//INITIALIZE POST VALUES
		$data = $_POST;
       
		
		// CALL THE PHP VALIDATION FUNCTION
		$validation = validationofPage($data);
				
		if($validation['status'] == false)
		{
				
			// echo $validation['message'];	
			$error_code = $validation['code'];
		
			// $redirect_url = $_SERVER['HTTP_REFERER']."?e=".$error_code;
			
			$redirect_url = "?e=".$error_code;
			
			// $redirect_url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."?e=".$error_code; HAVE TO REMOVE COMMENT OVER HERE.
			
			// Redirect the user to the form with an error code
			ob_clean();
			//header('location: http://websrv/ezeeabsolute/'.$redirect_url);
			header('location:'.$_SERVER['HTTP_REFERER'].$redirect_url);
			exit();
			
			
		}
		else
		{
		
			if(intval(trim($_POST['country']) > 0))
			{
				// Get the country name from the ID
				$countryname = Get_Country_Name($_POST['country']);
			}	
			else // when it's a text (name of country)
			{
				$countryname = stripslashes($_POST['country']);
				$countryid=Show_Country_Id(trim($_POST['country']));//Added by Chaitali Patel  ON 4th FEB 2013
			}
	
			$state='';
			$city='';
			if($_POST['city']!='')
			{
				$city=$_POST['city'];
			}
			if($_POST['state']!='')
			{
				$state=$_POST['state'];
			}
	//*******************************************	CODE ADDED BY CHAITALI PATEL ON 4th FEB 2013 FOR INSERT LEADS INFORMATION INTO lead_mgmt TABLE. *********************************/
	$insLead=lead_mgmt_insert($name,$email,$phone,$city,$state,$countryid,'',$company,'2',0,'51',$feedback,$_SERVER['REMOTE_ADDR'],$ip_address_country,$ip_address_city);
	//******************************************************			 Over lead_mgnmt 		***************************************************************************************/		
		
		$logs->logIt('####<<<<<<<<<< Inserted In CRM >>>>>>>>>>####'.'Email'.$email);
		$logs->logIt('####<<<<<<<<<<<< eZee Frontdesk Ends >>>>>>>>>>>>####');


		$ins_date=date("Y-m-d");
		$sql = "INSERT INTO contactinfo (sitename,contact_name,company_name,city,state,country,phone,email,comment,inserteddate) "
				 . " VALUES ( "
				 . " '". addslashes($fromsite)."' , "
				 . " '". addslashes($name) ."' , "
				 . " '". addslashes($company) ."' , "
				 . " '". addslashes($city) ."' , "		
				 . " '". addslashes($state)."' , "
				 . " '". addslashes($countryname) ."' , "
				. " '".  addslashes($phone) ."',"
				. " '".  addslashes($email) ."',"
				. " '".  addslashes($feedback) ."',"
				. " '".  addslashes($ins_date) ."')";
		$rs=mysql_query($sql);
	if(trim($company)=='')
		{
			$title_str=" | ".$name;
		}
		else
		{
	
			$title_str=" | ".$company;
		}	
		$subject = "Request a call back - eZee Frontdesk  - ".$_POST['fname']; 				
		//$to  = 'flora@ezeetechnosys.com';
		//$to  = 'viken@ezeetechnosys.com';
		/*if(strtolower(trim($_POST['country']))=='malaysia')
		{
			//$to = 'sales@ezeetechnosys.com,vipul@ezeetechnosys.com,sales@ezeetechnosys.com.my';
			$to .= ',sales@ezeetechnosys.com.my';
		}
		else if(strtolower(trim($_POST['country'])) == 'indonesia')
		{
			$to .= ',indonesia@ezeetechnosys.com';
		}	
		else
		{
			//$to  = 'sales@ezeetechnosys.com,vipul@ezeetechnosys.com';
			if($countryid == '99')
			{
				$to .= ',salesindia@ezeetechnosys.com';
			}
		}*/
		
//$to  = 'sales@ezeetechnosys.com, vipul@ezeetechnosys.com,viken@ezeetechnosys.com';		
										
		# Message body				
		$body .= "<table border=0 cellspacing=0 cellpadding=0 style='border: 2px solid #e7e7e7' width=60%>
					<tr>
					  <td colspan=3 align=center style='background:#0862ce; padding-top:10px; padding-bottom: 10px; border-bottom: 2px solid #e7e7e7;'>
						<font face='Verdana' color='#ffffff' size='2.5'><b>Request a call back - eZee Frontdesk</b></font></td></tr>
					<tr>
					  <td colspan=3 align=left style='background:#d3d9e2; padding-top:2px; padding-left:5px; padding-bottom: 2px; border-bottom: 1px solid #e7e7e7;'>
						<font face='Arial' color='#000000' size='2'><b>General Information</b></font></td>
					</tr>";

					if($name != '')
					{
						$body .= "<tr>
					  	<td width=20% style='background:#ffffff; padding-top:2px; padding-bottom: 2px; padding-left: 12px; border-bottom: 2px solid #e7e7e7; border-right: 2px 											solid #e7e7e7'><font face='Verdana' color='#000000' size='2'>Name </font></td>
					  	<td colspan='2' align=bottom width=80% style='background:#ffffff; padding-top:2px; padding-bottom: 2px; padding-left: 12px; border-bottom: 2px solid 
									#e7e7e7;'><font face='Verdana' color='#000000' size='2'>".$name."</font></td>
						</tr>";	
					}
		

		if($phone != '')
		{
			$body .= "<tr>
					  <td  style='background:#f6f6f6; padding-top:2px; padding-bottom: 2px; padding-left: 12px; border-bottom: 2px solid #e7e7e7; border-right: 2px 											solid #e7e7e7'><font face='Verdana' color='#000000' size='2'>Phone </font></td>
					  <td colspan='2' align=bottom  style='background:#f6f6f6; padding-top:2px; padding-bottom: 2px; padding-left: 12px; border-bottom: 2px solid 
									#e7e7e7;'><font face='Verdana' color='#000000' size='2'>".$phone."</font></td>
					</tr>";
		}	

		if($email != '')
		{
			$body .= "<tr>
					  <td  style='background:#ffffff; padding-top:2px; padding-bottom: 2px; padding-left: 12px; border-bottom: 2px solid #e7e7e7; border-right: 2px 											solid #e7e7e7'><font face='Verdana' color='#000000' size='2'>Email </font></td>
					  <td colspan='2' align=bottom  style='background:#ffffff; padding-top:2px; padding-bottom: 2px; padding-left: 12px; border-bottom: 2px solid 
									#e7e7e7;'><font face='Verdana' color='#000000' size='2'>".$email."</font></td>
					  </tr>";
		}

		
		$body .= "<tr>
					  <td  style='background:#f6f6f6; padding-top:2px; padding-bottom: 2px; padding-left: 12px; border-bottom: 2px solid #e7e7e7; border-right: 2px 											solid #e7e7e7'><font face='Verdana' color='#000000' size='2'>IP Address</font></td>
					  <td colspan='2' align=bottom  style='background:#f6f6f6; padding-top:2px; padding-bottom: 2px; padding-left: 12px; border-bottom: 2px solid 
									#e7e7e7;'><font face='Verdana' color='#000000' size='2'>".$client_ip_address_text."</font></td>
					</tr>
				  </table>";											
		
		
		//echo "<br>To".$to."<br>Subject".$subject."<br>Body".$body."<br>Frommail".$frommail."<br>Fromsite".$fromsite;
		//exit;
		// To send HTML mail, the Content-type header must be set			
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= 'From: eZee Frontdesk <noreply@ezeetechnosys.com>'."\r\n";
		$headers .= 'Bcc:kishan@ezeetechnosys.com'."\r\n";

		if($_SERVER['HTTP_HOST']!='localhost')
		{
			mail($to, $subject, wordwrap($body,70), $headers);
			//$mailsend = $ObjSmtpSendmail->sendSMTPMail($to,$subject,$body,$frommail,$fromsite,'','','');
			$flag="true";
		}	
		//$flag="true";
		if($flag == "true")
		{
			header("location: http://www.ezeeabsolute.com/callresponse.php");
			exit();
		}
	}

	
}

// PHP VALIDATION FUNCTION.
	function validationofPage($data)
	{
	
		if(is_array($data) && !empty($data))
		{
			if(trim($data['fname'])=='')
			{
				$code='yourname';
				$status=false;
				$message="Please enter your name";
			}
			elseif(trim(strlen($data['fname'])) > 100)
			{
				$code='name';
				$status=false;
				$message="Your name cannot exceed 100 characters";
			}			
			elseif(trim($data['company'])== -1)
			{
				$code='company';
				$status=false;
				$message="Please select your business type";
			}
			elseif(trim($data['country']) == -1)
			{
				$code = 'country';
				$status = false;
				$message = "Please select contry";
			}
			elseif(trim($data['email']) == '')
			{
				$code = 'emailblank';
				$status = false;
				$message = "Please enter your email address";
			}
			elseif(!preg_match('/^([a-zA-Z0-9_\.-]+)@([\da-zA-Z\.-]+)\.([a-zA-Z\.]{2,6})$/',trim($data['email']))) // Check if it's a proper email ID
			{
				$code = 'emailvalid';
				$status = false;
				$message = "Please enter a valid email ID";
			}
			elseif(trim(strlen($data['email'])) > 100)
			{
				$code = 'emailvalid1';
				$status = false;
				$message = "Your email address cannot exceed 100 characters";
			}
			else
			{
				$code = 'Success';
				$status = true;
				$message = "Success";
			}
			
		}
		else
		{
			$code = 'No data to validate';
			$status = false;
			$message = "No data to validate";
		}
		
		
		/*elseif(!preg_match('/^[a-zA-Z0-9\s]*$/',trim($data['name'])))
			{
				$code = 'contactname';
				$status = false;
				$message = "Please enter string only in your name";
			}*/
		$return['code']		= $code;
		$return['status']	= $status;
		$return['message']	= $message;

		return $return;
}

?>