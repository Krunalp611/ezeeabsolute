<?php include '../includes/header.php' ?>
    <div class="pagetitle">
        <div class="container">
             <h1>Ready Plug & Play Widgets</h1>
        </div>
    </div>
    <div class="page_container ftcontainer">
    <div id="featurepages"></div>
    <div class="feature_wrap" style="padding:40px 0; display: inline-block; width: 100%; margin-top: 40px; border-top: 1px solid #ddd;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <div class="iframe-cnt">
                            <h3 class="head_txt">Easily Accept Online Bookings from your Website</h3>
                            <p>All eZee aims is to simplify &amp; standardize your business. Confirming that we have already established Plugin extensions for a majority of the Content Management Systems, we streamline the process of receiving online bookings from your website.</p>
                            <br>
                            <p>
                                <a href="https://ezeereservation.com/wordpress.php" class="btn btn-primary wj-link">WordPress Plugin for Hotel Booking Engine</a>
                                <a href="https://ezeereservation.com/joomla.php" class="btn btn-primary wj-link">Joomla! Plugin for Hotel Booking Engine</a>
                                <a href="https://ezeereservation.com/wix.php" class="btn btn-primary wj-link">Wix Plugin for Hotel Booking Engine</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include '../includes/footer-features.php' ?>
    </div>

<script>
    jQuery(function(){
        
        jQuery.ajax({
            type: "GET",
            crossdomain : true,
            url: "https://www.ezeereservation.com/featurepage/ready-plug-play.php",
            success: function(msg){
                jQuery("#featurepages").html(msg );
                
                setTimeout(function(){
                    var locatHash = window.location.hash;
                    if(locatHash != ""){
                        $('html, body').animate({scrollTop : $(locatHash).offset().top - 70},1500);
                    }
                }, 500);
           
            }
        });
        
    });
 
</script>

<?php include "../includes/footer.php"; ?>
<script>
    $(function() {
            /*$('a[href*=#]:not([href=#])').click(function() {
                if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                    if (target.length) {
                        $('html,body').animate({
                            scrollTop: target.offset().top - 70
                        }, 800);
                        return false;
                    }
                }
            });*/
            /*var locatHash = window.location.hash;
            if(locatHash != ""){
                $('html, body').animate({scrollTop : $(locatHash).offset().top - 70},1500);
            }*/

        });
</script>