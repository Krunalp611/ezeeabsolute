<?php include "../includes/header.php"; 
$countryFrmIP = 'India';
if ($countryFrmIP == "India") {

} elseif( $countryFrmIP == 'Malaysia' ){
   
}
else
{

// Before live remove these comments

header("location:faqs.php");
 
?>


<script type="text/javascript">
  window.location.href='https://www.ezeeabsolute.com/index.php';
</script>
<?php
  exit();
}
 
?>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300&display=swap" rel="stylesheet">

<section class="fblMain">
    <div class="pagetitle">
        <div class="container">
            <div class="pagetitleInner">
                <a class="fblLogo" href="https://www.ezeeabsolute.com/ota-support-for-hotels"><img src="<?php echo $servername; ?>images/ezee-logo.png" alt="Online Hotel Management System"><span class="header-logo"><span>eZee Absolute</span><small>Online Hotel Management System</small></span></a>
                <div class="pagetitleContent">
                    <h1>FAQs</h1>
                    <p>Find the answers to the commonly asked questions on Hello eZee</p>
                </div>
            </div>
            
        </div>
    </div>
      
    <div class="page_container faqOuter">
      <div class="container">

        <div class="faqs_container">
            <div class="col-md-3">
                <div class="quecat">
                    <a href="javascript:void(0);" class="fselected" data-cat="cat1">Overview</a>
                    <a href="javascript:void(0);" data-cat="cat2">Getting Started</a>
                    <a href="javascript:void(0);" data-cat="cat3">Pricing</a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="faqCat-title">Overview</div>
                <ul class="faqs faqcatwise" itemscope itemtype="https://schema.org/FAQPage">

                    <!-- category 1 -->
                    <li style="display:none;" data-faq="cat1" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <div class="faqque" itemprop="name">What if Hello eZee experts are unable to solve my queries?</div>
                        <div class="faqans" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <p itemprop="text">Hello eZee has a panel of hospitality experts with more than 15 years of industry experience. They will assist you with all your queries. However, if they encounter any complex questions, you will be guided towards a subject matter expert or the right contact for further assistance.</p>
                        </div>
                    </li>
                    <li style="display:none;" data-faq="cat1" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <div class="faqque" itemprop="name">Do you provide support for all queries related to the hotel industry?</div>
                        <div class="faqans" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <p itemprop="text">As of now, Hello eZee assists with all queries related to OTA and metasearch bookings like rate disparity, guest no show, cancellations, OTA registration, payments, invoices, extranet listing of your property, extra commission, overbooking and more.</p>
                        </div>
                    </li>
                    <li style="display:none;" data-faq="cat1" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <div class="faqque" itemprop="name">Do you provide any other services or solutions other than Hello eZee?</div>
                        <div class="faqans" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <p itemprop="text">Besides our OTA help center, Hello eZee, our solutions include on-premise and cloud-based hotel software, on-premise and cloud-based restaurant POS system, hotel booking engine, channel manager, hotel revenue management software, revenue management and marketing services and several other products. You can explore them <a href="https://ezeetechnosys.com/hospitality-solutions.php" target="_blank" rel="noopener">here</a>.</p>
                        </div>
                    </li>
                    <li style="display:none;" data-faq="cat1" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <div class="faqque" itemprop="name">Is Hello eZee exclusive for eZee customers only?</div>
                        <div class="faqans" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <p itemprop="text">Not at all. Hello eZee is a help center designed for all property owners across India that cater to all queries related to OTAs and metasearch engines.</p>
                        </div>
                    </li>

                    <!-- category 2 -->
                    <li style="display:none;" data-faq="cat2" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <div class="faqque" itemprop="name">What is the process for placing a call?</div>
                        <div class="faqans" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <p itemprop="text">Placing a call with Hello eZee is as easy as ABC. You can call us directly on <a href="tel:+919313922031">+919313922031</a> or <a href="<?php echo $servername ?>ota-support-for-hotels">sign up</a> requesting a callback, after which our experts will call you back.</p>
                        </div>
                    </li>
                    <li style="display:none;" data-faq="cat2" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <div class="faqque" itemprop="name">How long does it take for the experts to call back after I have signed up?</div>
                        <div class="faqans" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <p itemprop="text">Once you have signed up and requested a callback, our experts will get notified about your query. Once an expert is assigned to assist you, you will receive a callback as early as possible.</p>
                        </div>
                    </li>
                    <li style="display:none;" data-faq="cat2" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <div class="faqque" itemprop="name">Will your experts ask for access to my property’s confidential information?</div>
                        <div class="faqans" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <p itemprop="text">Definitely not! Our experts will provide you with answers and clear your doubts regarding OTA bookings, rate disparity, overbookings and more. Any queries that require access to your confidential data will be forwarded to subject matter experts or the right contact who will assist you further.</p>
                        </div>
                    </li>
                    <li style="display:none;" data-faq="cat2" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <div class="faqque" itemprop="name">How many calls can I request from Hello eZee?</div>
                        <div class="faqans" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <p itemprop="text">You can request as many calls as you need for assistance from Hello eZee. Our experts will try to address as many questions as they can.</p>
                        </div>
                    </li>

                    <!-- category 3 -->
                    <li style="display:none;" data-faq="cat3" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <div class="faqque" itemprop="name">Do I have to pay for the consultation?</div>
                        <div class="faqans" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <p itemprop="text">Absolutely not! Our hotel experts provide consultation free of charge.</p>
                        </div>
                    </li>
                    <li style="display:none;" data-faq="cat3" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <div class="faqque" itemprop="name">Are there any hidden commissions or charges for Hello eZee?</div>
                        <div class="faqans" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <p itemprop="text">No, there are no hidden commissions or charges for Hello eZee.</p>
                        </div>
                    </li>

                </ul>
            </div>
        </div>

      </div>

    </div>

    <div class="fblctaSection">
        <div class="container">
        <div class="fblctaInner">
        <div class="fblctaContent"><h2><span>Got the answers you were looking for?</span></h2></div>
        <div class="fblctaButton"><a href="<?php echo $servername; ?>ota-support-for-hotels" class="btn btn-primary btn-white btn-lg claimbtn">Request a Free Consultation Now</a></div>
        </div>
        </div>
        <div class="patterns"><span></span><span></span><span></span></div>
    </div>
    <!-- End: fblctaSection -->

    <footer class="fblFooter">
        <div class="container">
            <div class="copy-text">eZee Absolute &copy; 2010 - <?php echo date('Y') ?>. All Rights Reserved.</div>
        </div>
    </footer> <!-- End: fblFooter -->

</section>


<style>
.fblMain .pagetitle {
    padding: 30px 0;
}
.fblMain .page_container.faqOuter {
    min-height: initial;
    padding: 60px 0;
}
.fblMain .pagetitle h1 {margin: 60px auto 5px;}
.fblLogo,
.fblLogo:hover,
.fblLogo:active,
.fblLogo:focus { 
    position: relative;
    top: 0;
    font-size: 18px;
    line-height: 20px;
    color: #FFF;
    padding: 0;
    display: block;
    margin: 0 auto;
    max-width: fit-content;
}
.fblLogo .header-logo { display: inline-block; font-size: 28px; margin: 0 0 0 6px; vertical-align: middle; }
.fblLogo .header-logo span { font-size: 27px; }
.fblLogo .header-logo small { display: block; color: #98dcff; font-size: 11px; letter-spacing: 0.01em;}
.fblctaSection { position: relative; background: #4965f9; color: #FFF; padding: 40px 0 45px; background: #4965f9; background: -moz-linear-gradient(-45deg, #4965f9 0%, #4eb1e0 100%); background: -webkit-linear-gradient(-45deg, #4965f9 0%, #4eb1e0 100%); background: linear-gradient(135deg, #4965f9 0%, #4eb1e0 100%); filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#4965f9', endColorstr='#4eb1e0', GradientType=1); overflow: hidden; }
.fblctaSection .patterns span { position: absolute; }
.fblctaSection .patterns span:nth-child(1) { width: 470px; height: 290px; left: -180px; top: -270px; -webkit-transform: rotate(75deg); transform: rotate(75deg); background: -moz-linear-gradient(-360deg, rgba(0, 0, 0, 0) 30%, rgba(0, 0, 0, 0.04) 100%); background: -webkit-linear-gradient(-360deg, rgba(0, 0, 0, 0) 30%, rgba(0, 0, 0, 0.04) 100%); background: linear-gradient(-360deg, rgba(0, 0, 0, 0) 3%, rgba(0, 0, 0, 0.04) 100%); filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#a6000000', GradientType=1); }
.fblctaSection .patterns span:nth-child(2) { width: 240px; height: 560px; right: 10%; top: -380px; -webkit-transform: rotate(75deg); transform: rotate(75deg); background: -moz-linear-gradient(-120deg, rgba(0, 0, 0, 0) 30%, rgba(0, 0, 0, 0.04) 100%); background: -webkit-linear-gradient(-120deg, rgba(0, 0, 0, 0) 30%, rgba(0, 0, 0, 0.04) 100%); background: linear-gradient(-120deg, rgba(0, 0, 0, 0) 3%, rgba(0, 0, 0, 0.04) 100%); filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#a6000000', GradientType=1); }
.fblctaSection .patterns span:nth-child(3) { width: 180px; height: 400px; right: 50%; bottom: -350px; -webkit-transform: rotate(41deg); transform: rotate(41deg); background: -moz-linear-gradient(-27deg, rgba(0, 0, 0, 0) 30%, rgba(0, 0, 0, 0.04) 100%); background: -webkit-linear-gradient(-27deg, rgba(0, 0, 0, 0) 30%, rgba(0, 0, 0, 0.04) 100%); background: linear-gradient(-27deg, rgba(0, 0, 0, 0) 3%, rgba(0, 0, 0, 0.04) 100%); filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#a6000000', GradientType=1); }
.fblctaInner { display: flex; align-items: center; justify-content: center; position: relative; z-index: 1; }
.fblctaButton { text-align: right; margin: 0 0 0 50px; }
.clctaDiv { width: 50%; padding: 0 30px; text-align: center; }
.fblctaSection h2 { font-size: 24px; font-weight: 400; line-height: 1.4; margin: 0; }
.fblctaSection h2 span { display: block; font-size: 34px; font-weight: 600; }
.fblctaInner .btn { font-weight: 600; padding: 15px 30px; line-height: 1; }
.fblFooter {
    padding: 15px 0;
    background: #efefef;
    text-align: center;
    border-top: 1px solid #e6e6e6;
}

@media(max-width: 1199px) {
    .fblctaInner {flex-direction: column; text-align: center;}
    .fblctaButton { text-align: center; margin: 20px auto 0;}
}

@media(max-width: 767px) {
    .fblctaSection h2 span {font-size: 32px;}
}

@media(max-width: 640px) {
    .fblctaSection h2 span {font-size: 28px; line-height: 1.3;}
    .fblctaInner .btn {padding: 15px;}
}

</style>
<?php include "../includes/footer.php"; ?>
<script>
    $(function(){
        if($("section").hasClass("fblMain")){
            $("body").addClass("fblBody");
        }

        $('.faqcatwise').find('li').hide();
        $('.faqcatwise').find('li[data-faq="cat1"]').show();

        /*$('.faqque').on('click', function(){
            $(this).next('.faqans').toggle();
            $(this).parents('li').toggleClass('shdw-more');
        });

        $('.quecat a').on('click', function(){
            var faqTitle = $(this).text();
            $('.faqCat-title').text(faqTitle);
        });
        

        $('.faqcatwise').find('li').hide();
        $('.faqcatwise').find('li[data-faq="cat1"]').show();
        $('.quecat').find('a').each(function(){
            $(this).on('click', function(){
                $('.quecat').find('a').removeClass('fselected');
                $(this).addClass('fselected');
                var ccat = $(this).attr('data-cat');
                if(ccat == "all"){
                    $('.faqcatwise').find('li').show();
                }else{
                    $('.faqcatwise').find('li').hide();
                    $('.faqcatwise').find('li[data-faq='+ccat+']').show();
                }
            });
        });*/
    });
</script>
