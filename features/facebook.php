<?php include '../includes/header.php' ?>
   <style>
       .page_wrapper{padding-bottom: 40px; display: inline-block; width: 100%;}
       .page_wrapper, .page_container{
           padding-top: 0px;
       }
       .model_cnt{
           margin-top: 0px !important;
       }
</style>
    <div class="pagetitle">
        <div class="container">
             <h1>Sale Through Your Facebook Fan Page!</h1>
            <!--<h5>Find out what eZee PMS can do for your hotel</h5>-->
        </div>
    </div>
<div class="page_container ftcontainer facebook-page">
    <div id="featurepages"></div>
        <?php include '../includes/footer-features.php' ?>
    </div>

<script>
    jQuery(function(){
        
        jQuery.ajax({
            type: "GET",
            crossdomain : true,
            url: "https://www.ezeereservation.com/featurepage/facebook.php",
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