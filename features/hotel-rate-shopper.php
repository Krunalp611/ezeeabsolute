<?php include '../includes/header.php'; ?>
<style type="text/css">
.rate_shopper .cta_wrap h2 {
    width: 100%;
    margin: 0 auto 30px !important;
    text-align: center;
}
.rate_shopper .cta_wrap .col-md-3 {
    width: 100%;
    margin: 0 auto  !important;
    text-align: center;
}



     @media(max-width: 767px)
    {
        .offcanvas {
    z-index: -1 !important;
    }   
    }
    @media(max-width: 500px)
    {
    #featurepages .modal{
    padding-right: 0px!important;
    }
    .btn-lg
    {
        white-space: normal;
    }

    .rate_shopper .cta_wrap .btn-info
    {
        white-space: normal;
    }   
    }
    .pagetitle h1 { margin-bottom: 10px; }
    .pagetitle h5 { color: #FFF; margin: 0; text-align: center; }
    .cta_wrap .btn-info { font-size: 18px; }
    .modal-backdrop{z-index: 1000;}
    .modal.in .modal-dialog{
        z-index: 1000000;
        position: relative;
    }
    .modal-content{z-index: 100;}
    .btn-submit
    {
padding: 15px 22px;
    background: #3e4154;
    border: #3e4154;
    float: none;
    }
    button#form-submit-button
    {
        float: none;
    }
    .cta-section .cta-outer .cta-right a{margin-top: 0px; border: 2px solid transparent;}
    .cta-section .cta-outer .btn{padding: 10px 23px;}
    .cta-section .cta-outer .btn:hover,
    .cta-section .cta-outer .btn:focus{transform: inherit; color: #fff; border: 2px solid #fff;color: #4965f9;}
    button#form-submit-button{min-height: initial;}
    .btn-submit {
        margin-top: 15px;
        padding: 10px 22px!important;
        background: #3e4154!important;
        border: #3e4154 !important;
        border-radius: 4px !important;
    }
    #featurepages .txt-input { margin-bottom: 10px; }
    .btn-submit:hover {
        background: #3e4154!important;
        border: #3e4154!important;
    }
    .modal-footer { text-align: center;}
    #featurepages .modal-header {
    background: #3E58E4;
    }
    #featurepages input#EmailAddress
    {
            border: 0px;
    height: 30px;
    background: none;
    padding-right: 30px;
    border-bottom: 2px solid #E2DEE3;
    width: 100%;
    outline: 0;
    float: none;
    }
    #featurepages .modal
    {
        background-color: rgba(0, 0, 0, 0.56);
    }
    .modal-backdrop
    {
        display: none;
    }
    #featurepages .modal-dialog
    {
        width:400px;
        margin: 30px auto 0;
    }
    .outer
    {
        position: inherit;
    }
    #featurepages .modal-content
    {
        border:none;
    }
    .txt_label.focused
    {
            color: #3e58e4!important;
    }
    input.parsley-success, select.parsley-success, textarea.parsley-success
    {
        color:#000!important;
        background-color: #fff!important;
    }

</style>

<div class="pagetitle">
    <div class="container">
        <h1>Analyze & Go Beyond Your Competitors</h1>
        <h5>Using eZee’s Rate Shopper Tool</h5>
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
            url: "https://www.ezeereservation.com/featurepage/hotel-rate-shopper.php",
            success: function(msg){
                jQuery("#featurepages").html(msg );
                
                setTimeout(function(){
                    var locatHash = window.location.hash;
                    if(locatHash != ""){
                        $('html, body').animate({scrollTop : $(locatHash).offset().top - 70},1500);
                    }
                }, 500);
                
                function playSlide(){
                    setTimeout(function(){
                        var playsimg = $('.imgClr_slide'),
                            indiNav = $('.imgClr_nav');
                        
                        if(playsimg.find('.clred_img:last-child').hasClass('active')){
                            playsimg.find('.clred_img').removeClass('active')
                            playsimg.find('.clred_img:first-child').addClass('active');  
                        }else{
                            playsimg.find('.clred_img.active').removeClass('active').next().addClass('active');
                        }
                        
                        if(indiNav.find('.clrIndicator:last-child').hasClass('active')){
                            indiNav.find('.clrIndicator').removeClass('active')
                            indiNav.find('.clrIndicator:first-child').addClass('active');  
                        }else{
                            indiNav.find('.clrIndicator.active').removeClass('active').next().addClass('active');
                        }
                        playSlide();
                    }, 4000);
                }
                $(function(){
                    playSlide();
                    $('.clrIndicator').on('click', function(){
                        var imgId = $(this).attr('id');
                        $('.clrIndicator').removeClass('active');
                        $(this).addClass('active');
                        $('.imgClr_slide').find('.clred_img').removeClass('active');
                        $('.imgClr_slide').find('[data-img="' + imgId + '"]').addClass('active');
                    });
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
