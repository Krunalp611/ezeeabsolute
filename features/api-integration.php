<?php include '../includes/header.php' ?>    
<style>
    .inr_head.inr_head_big.api-bnr{
        display: none;
    }
    .featurepages .api-bnr.inr_head_big h2{
        color: #fff !important;
    }
</style>
    <div class="pagetitle pagetitle-big api-integration-bg">
        <img src="https://ezeereservation.com/images/banners/api-bnr.jpg" alt="Reservation Center" class="ptbg">
        <div class="container bnr-txt-pos">
            <h1>API Integration</h1>
            <p>Extend the functionality of your website with eZee Booking Engine API</p>
        </div>
    </div>
    <div class="page_container ftcontainer api-integration-page">
    <div id="featurepages"></div>
    <?php include '../includes/footer-features.php' ?> 
    </div>

<script>
    jQuery(function(){
        
        jQuery.ajax({
            type: "GET",
            crossdomain : true,
            url: "https://www.ezeereservation.com/featurepage/api-integration.php",
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
    $(function() {
            

        });
    
</script>

<?php include "../includes/footer.php"; ?>