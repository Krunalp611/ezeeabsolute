<?php include "../includes/header.php"; ?>
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
.fblFooter {
    padding: 15px 0;
    background: #efefef;
    text-align: center;
    border-top: 1px solid #e6e6e6;
}
</style>

<section class="tySection">
    
    <div class="page_container thankyouPage">
        
        <div class="container">
            <div class="tyOuter">

                <header class="pageHeading">
                    <h1>Thank you! <span>We look forward to growing together.</span></h1>
                    <h4>What next?</h4>
                    <ol class="tyList">
                        <li>Our experts will call you back shortly to understand your queries.</li>
                        <li>You will be provided with assistance to resolve your doubts.</li>
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
                                                <h2>Enjoy FREE access to our hotel management mobile app!</h2>
                                                <p>Manage all your hotel operations on-the-go at the ease of your fingertip.</p>
                                                <div class="app-download-content">
                                                    <a href="https://play.google.com/store/apps/details?id=com.ezeetechnosys.absolute&hl=en" target="_blank" rel="noopener" class="appBannerBtn appBtn-android">
                                                        <img src="<?php echo $servername; ?>images/icn_playstore.png" alt="Google Play Store">
                                                        <span><em>Download on the</em> Google Play</span>
                                                    </a>
                                                    <a href="https://apps.apple.com/in/app/ezee-absolute/id1162554088?ign-mpt=uo%3D4" target="_blank" rel="noopener" class="appBannerBtn appBtn-ios">
                                                        <img src="<?php echo $servername; ?>images/icn_apple-white.png" alt="Apple Store">
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

<?php include "../includes/footer.php"; ?>

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
