<?php include '../includes/header.php' ?>
    <style>
        .model_cnt .feature_wrap:last-child{padding-top: 0 !important;}
</style>
    <div class="pagetitle">
        <div class="container">
            <h1>Perks of Acquiring eZee Booking Software</h1>
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
            url: "https://www.ezeereservation.com/featurepage/perks.php",
            success: function(msg){
                jQuery("#featurepages").html(msg );
                
                setTimeout(function(){
                    var locatHash = window.location.hash;
                    if(locatHash != ""){
                        $('html, body').animate({scrollTop : $(locatHash).offset().top - 70},1500);
                    }
                });
            }
        });
        
    });
</script>
<?php include "../includes/footer.php"; ?>