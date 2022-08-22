<?php include '../includes/header.php' ?>
<style>
    .page_wrapper{
        display: inline-block;
        width: 100%;
        padding-bottom: 40px;
    }
</style>
    <div class="pagetitle">
        <div class="container">
            <h1>Hotel Rate Management Made Easier with eZee's Cloud Solutions</h1>
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
            url: "https://www.ezeereservation.com/featurepage/hotel-rate-management.php",
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