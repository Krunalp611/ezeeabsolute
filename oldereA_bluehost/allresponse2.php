<?php
	$conname = isset($_REQUEST['conname']) ? $_REQUEST['conname'] : '';
	$company = isset($_REQUEST['company']) ? $_REQUEST['company'] : '';
	$conemail = isset($_REQUEST['conemail']) ? $_REQUEST['conemail'] : '';
	$conphone = isset($_REQUEST['conphone']) ? $_REQUEST['conphone'] : '';
	$country = isset($_REQUEST['country']) ? $_REQUEST['country'] : '';
?>

<?php include "includes/header.php"; ?>
<style type="text/css">
	.popup-wrap, li.ezeeUltimate{display: none !important}
	.freetriallink, .blck-out{display: none !important;}
	.thank-cnt{font-size: 18px; margin-top: 0;}
	.share-bnr{width: 100%; padding: 40px 0; margin-top: 0px;}
	.share-bnr .addthis_sharing_toolbox .at-icon-wrapper{height: 92px !important; width: 92px !important; padding: 10px;}
	.at-share-tbx-element.addthis_32x32_style .at-share-btn{max-height: 92px !important; max-width: 92px !important;}
	.share-bnr .addthis_sharing_toolbox .at-icon-wrapper svg{height: 72px !important; width: 72px !important;}
	.share-inner-bnr{padding: 60px 15px; background-color: #f8f8f8; border: 1px solid #ddd;}
	.share-inner-bnr h3{margin-top: 0;}
	.popOpen-click{display: none!important;}
	.ultiThank-form{max-width: 540px; margin: 0 auto; padding: 20px; border: 1px solid #ddd; margin-top: 10px;}
	.ultiThank-form .frmicolbl{margin-bottom: 0;}
	.ultiThank-form .frmicolbl .form-group:last-child{margin-bottom: 0;}
	.ultiThank-form .radio-inline{padding-left: 0;}
	.ultiThank-form .radio-inline label{font-size: 14px; background: none; border-right: 0; color: #000; height: inherit; position: relative; font-weight: 300; padding: 0 10px; margin-bottom: 0;}
    .ultiThank-form .form-group, .ultiThank-form .btn, .ultiThank-form .form-control{max-width:540px;}
	.ultiThank-form .txtar label{ height:100%;margin-top: 0; border-top: 1px solid #ccc; border-bottom: 1px solid #ccc;}
    .fieldinfo{font-size:12px; line-height: 1;display: block;padding-bottom:20px;color: #666; text-align: left;}
    .frmicolbl .form-group.fieldnote{margin-bottom: 0;}
    .ultiThank-form .parsley-required{max-width:540px; padding-left: 60px;}
    .ultiThank-form .radio-inline .parsley-required{}
    

@media (max-width: 767px){
    .share-bnr .addthis_sharing_toolbox .at-icon-wrapper{height: 62px !important; width: 62px !important; padding: 10px;}
    .at-share-tbx-element.addthis_32x32_style .at-share-btn{height: 62px !important; width: 62px !important;}
    .share-bnr .addthis_sharing_toolbox .at-icon-wrapper svg {height: 42px !important; width: 42px !important;}
    .thank-cnt{font-size: 18px; margin-top: 0;}
    .share-bnr{padding: 10px 0;}
    .share-inner-bnr h3{font-size: 21px;}
    .share-inner-bnr{padding: 30px 15px;}
    .page_container{min-height: inherit;}
}
@media (max-width: 400px){
    .thank-cnt{font-size: 16px;}
    .share-inner-bnr h3{font-size: 20px;}
    .share-inner-bnr{padding: 30px 15px;}
    .share-bnr{padding: 0;}
    .share-bnr .addthis_sharing_toolbox .at-icon-wrapper{height: 42px !important; width: 42px !important; padding: 10px;}
    .at-share-tbx-element.addthis_32x32_style .at-share-btn{height: 42px !important; width: 42px !important;}
    .share-bnr .addthis_sharing_toolbox .at-icon-wrapper svg {height: 22px !important; width: 22px !important;}
}
</style>
<div class="pagetitle">
     <div class="container">
          <h1>You are almost there</h1>
          <p>Before we meet, we would like to be a little more acquainted with you</p>
     </div>
</div>
<div class="page_container">
     <div class="container text-center">
           <!-- <h3 style="color:#000; font-weight: 300; margin-top: 45px; font-size: 25px;">What happens now?</h3>
          <p>An eZee team member will be in contact with you within the next business day to guide you through the 10 minutes enrollment process.</p> -->

          <div class="ultiThank-form">
          	<form name="frmInfo" action="http://ezeesupport.com/webfrm/ulitmate-moreinforesp.php" method="post" class="forms frmicolbl fomsg" role="form"  data-parsley-validate>
                <input name="robot" type="text" id="robot" class="hidden">
                <div class="form-group">
                	Do you have your Hotel Website?<br />
                	<div class="radio-inline">
				        <label>
				        	<input type="radio" name="hotelSite" value="Yes"> Yes
				        </label>
				     </div>
				     <div class="radio-inline">
				        <label>
				        	<input type="radio" name="hotelSite" value="No"> No
				        </label>
				     </div>
                    <!-- <input type="text" class="form-control" name="conname" data-flabel="v-Name" placeholder="Name" required> -->
                </div>
                 <div class="form-group hotelwebsite" style="display:none;">
                    <label for="siteurl"><i class="fa fa-code"></i> <span class="req">*</span></label>
                    <input type="text" class="form-control" name="siteurl" id="siteurl" data-flabel="v-siteurl" placeholder="Website Url" data-parsley-required-message="Enter your website url">
                </div>
                <div class="form-group txtar fieldnote">
                    <label for="techno"><i class="fa fa-code-fork"></i></label>
                    <textarea class="form-control" id="technologyused" name="technologyused" rows="3" placeholder="Technology used in your property" data-flabel="v-techno"  data-parsley-required-message="Enter technology used in your property"></textarea>
                    
                </div>
                <span class="fieldinfo">Example: Booking engine from Green Technologies / Cloud PMS from Hotel-Tech</span>
                <div class="form-group txtar fieldnote">
                  	<label for="require"><i class="fa fa-check-square-o"></i></label>
                    <textarea id="imrequirements" class="form-control" name="imrequirements" rows="3" data-flabel="v-require" placeholder="Immediate Requirements"  data-parsley-required-message="Enter your immediate requirements"></textarea>
                </div>
                <span class="fieldinfo">Example: I want to implement the Cloud PMS at the earliest</span>
                <div class="form-group txtar">
                  	<label for="comment"><i class="fa fa-comments-o"></i></label>
                    <textarea id="comments" class="form-control" name="comments" rows="3" data-flabel="v-comment" placeholder="Question / Comments"></textarea>
                </div>
                
                <div class="form-group">
                    <div class="text-center utm"></div>
                    <input class="btn btn-default btn-lg" type='submit' id='submit' name="submit" value='Get started now!'>
                    <input type="hidden" value="<?php echo $countryFrmIP; ?>" name="countryFrmIP" id="countryFrmIP"/>
                    <input name="MXCProspectId" value="" type="hidden">
					<input name="conname" type="hidden" value="<?php echo $conname; ?>">
					<input name="company" type="hidden" value="<?php echo $company; ?>">
					<input name="conemail" type="hidden" value="<?php echo $conemail; ?>">
					<input name="conphone" type="hidden" value="<?php echo $conphone; ?>">
					<input name="country" type="hidden" value="<?php echo $country; ?>">
                </div>
            </form>
        </div>

        <div class="share-bnr text-center">
            <div class="share-inner-bnr">
              <h3>While you are waiting, how about you show us some love and tell your friends about us?</h3><br />
              <div class="addthis_sharing_toolbox" data-title="I found the perfect deal- check it out!" data-url="http://www.ezeeabsolute.com/ezee-ultimate.php?utm_source=eZee%20Ultimate&utm_campaign=eZee%20Ultimate"></div>
            </div>
        </div>
     </div>
     <!-- <div class="share-bnr">
          <div class="container text-center">
            
          </div>
     </div> -->
</div>



<?php include "includes/footer.php"; ?>
<script src="js/parsley.min.js"></script>
<script>
$(function(){

    setTimeout(function(){
        $('input[name=MXCProspectId]').val(MXCProspectId);
    },2000);

    $('input[name=hotelSite]').prop('checked',false);
     $('input[name=hotelSite]').on('click',function(){
         if($(this).val() == "Yes"){
             $('.hotelwebsite').show();
             $('[name=siteurl]').attr('required',true);
         }else{
             $('.hotelwebsite').hide();
             $('[name=siteurl]').removeAttr('required');
         }
     });
});
</script>

<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-570b5b97c8bd6eb8"></script>