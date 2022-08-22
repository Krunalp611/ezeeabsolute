<?php include '../includes/header.php' ?>
   <style>
       .page_wrapper, .page_container{
           padding-top: 0px;
       }
       .model_cnt{
           margin-top: 0px !important;
       }
       .sms-bnr img { margin: 0 auto;}

</style>
    <div class="pagetitle">
        <div class="container">
             <h1>SMS Alerts for All Bookings</h1>
        </div>
    </div>
    <div class="page_container ftcontainer">
    <div id="featurepages"></div>
        <?php include '../includes/footer-features.php' ?>
    </div>

<script>
    jQuery(function(){
        
        jQuery.ajax({
            type: "GET",
            crossdomain : true,
            url: "https://www.ezeereservation.com/featurepage/sms-alert-booking.php",
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
<script type="text/javascript">
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
            var locatHash = window.location.hash;
            if(locatHash != ""){
                $('html, body').animate({scrollTop : $(locatHash).offset().top - 70},1500);
            }

        });
</script>