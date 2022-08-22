<?php include "includes/header.php"; ?>
<style type="text/css">
.thankyouBody .tyProd.tyfd:before {background-position: -68px 0;}
.thankyouBody .tyProd.tyeb:before {background-position: -135px 0;}
.thankyouBody .tyProd.tyeo:before {background-position: -548px 0;}
.thankyouBody .tyProd.tyea:before {background-position: 0 0;}
.thankyouBody .tyProd.tyer:before {background-position: -204px 0;}
.thankyouBody .tyProd.tyec:before {background-position: -272px 0;}
.thankyouBody .tyProd.tyei:before {background-position: -340px 0;}
.thankyouBody .tyProd.tyfb:before {background-position: -408px 0;}
.thankyouBody .tyProd.tyat:before {background-position: -476px 0;}
.thankyouBody .tyProd.typp:before {background-position: -68px 0;}
.thankyouBody .tyProd.tyorm:before {background-position: -617px 0;}
</style>

<section class="tySection">
    
    <div class="page_container thankyouPage">
        
        <div class="container">
            <div class="tyOuter">

                <header class="pageHeading">
                    <h1>Thank you! <span>We look forward to growing together.</span></h1>
                    <h4>What next?</h4>
                    <ol class="tyList">
                        <li>We'll call you or drop an email to get details for your Airbnb listing.</li>
                        <li>If you're not using eZee Centrix channel manager, we'll guide you towards the next step by giving you a good overview.</li>
                        <li>You then start managing your Airbnb listing and bookings through our vacation rental channel manager.</li>
                        <li>Don't miss out to download our FREE hotel channel manager mobile app.</li>
                    </ol>
                </header>
                

                <div class="tyContainer">
                        
                        <div class="tyBox">
                            <section class="tyContent"> 

                                <div id="proads" class="swipegallery"></div>

                                <section class="tyFooter tyFooterApp">
                                    <div class="tyFooter-block tyFooter-blockApp">
                                        <div class="tyFooter-blockAppinner">
                                            <div class="tyFooter-blockContent">
                                                <h2>Enjoy FREE access to our hotel channel manager mobile app!</h2>
                                                <p>Manage all your Inventory distribution operations on-the-go.</p>
                                                <div class="app-download-content">
                                                    <a href="https://play.google.com/store/apps/details?id=com.ezeetechnosys.absolute&hl=en" target="_blank" rel="noopener" class="appBannerBtn appBtn-android">
                                                        <img src="images/icn_playstore.png" alt="Google Play Store">
                                                        <span><em>Download on the</em> Google Play</span>
                                                    </a>
                                                    <a href="https://apps.apple.com/in/app/ezee-absolute/id1162554088?ign-mpt=uo%3D4" target="_blank" rel="noopener" class="appBannerBtn appBtn-ios">
                                                        <img src="images/icn_apple-white.png" alt="Apple Store">
                                                        <span><em>Download on the</em> App Store</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                
                            </section>
                            
                        </div>
                    
                </div>

            </div>
        </div>
        <div id="tyPattern1"></div>

    </div>

</section>

<?php include "includes/footer.php"; ?>

<script>
    jQuery(function(){

        $("body").addClass("thankyouBody");
        
        jQuery.ajax({
            type: "GET",
            crossdomain : true,
            // url: "https://www.ezeecentrix.com/productads/ezeeproducts.php",
            url: "https://www.ezeecentrix.com/productads/absolute.php",
            // url: "http://websrv/ezeecentrix/productads/absolute.html",
            async:false,
            success: function(msg){
                jQuery("#proads").html(msg );
                
            }
        });
    });
</script>
