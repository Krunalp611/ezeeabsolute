<?php include '../includes/header.php' ?>
<style>

.page_wrapper {
    width: 100%;
    display: inline-block;
    padding: 0px 0px;
    background: #fff;
    position: relative;
    z-index: 3;
}
.easy_nav {
    max-width: 580px;
    width: 100%;
    display: inline-block;
}
.head_txt {
    color: #00bcd4;
    margin: 0px;
    margin-bottom: 10px;
    position: relative;
    font-size: 32px;
}
.model_cnt .feature_wrap {
    display: inline-block;
    margin-bottom: -7px;
    width: 100%;
    padding: 60px 0;
    border-bottom: 1px solid #eee;
    position: relative;
}
.twoclick_wrap {
    position: relative;
    height: 500px;
}
.fea_bg {
    background: #f8f8f8;
}
.twoclick_bg {
    width: 50%;
    height: 500px;
    position: absolute;
    left: 0px;
    top: 0px;
    background-image: url(https://www.ezeereservation.com/images/feature_icon/booking_process/two_click_bg.jpg);
    background-size: cover;
}
.clean_img {
    max-width: 795px;
    width: 100%;
    display: inline-block;
}
.fea_txt_present {
    display: inline-block;
    vertical-align: middle;
}
.clear_rate_bg, .mail_track_bg {
    background: #f8f8f8;
}
.imgClr_slide img{
    max-width: 570px;
    width: 100%;
    border-radius: 4px;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.40);
    opacity: 0;
    position: absolute;
    z-index: 3;
    top: 60px; left: 0; right: 0;
    margin: 0 auto;
    transition: all ease 1s;
}
img.hidimg{
    visibility: hidden;
    max-width: 570px;
    width: 100%;
    z-index: 2
}
.clred_img.active{display: inline-block; opacity: 1 !important;}
.imgClr_nav{margin-bottom: 30px;}
.imgClr_nav .clrIndicator{
    height: 30px;
    width: 30px;
    position: relative;
    cursor: pointer;
    display: inline-block;
    border-radius: 50%;
}
.imgClr_nav .clrIndicator:after{
    content: '';
    height: 22px;
    width: 22px;
    border: 2px solid #fff;
    position: absolute;
    top: 50%;
    left: 50%;
    margin-top: -11px;
    margin-left: -11px;
    display: none;
    border-radius: 50%;
}
.imgClr_nav .clrIndicator:before{
    content: '';
    height: 0; width: 0;
    position: absolute;
    bottom: -16px;
    left: 50%;
    margin-left: -10px;
    border-top: 10px solid #000;
    border-left: 10px solid rgba(0, 0, 0, 0);
    border-bottom: 10px solid rgba(0, 0, 0, 0);
    border-right: 10px solid rgba(0, 0, 0, 0);
    display: none;
}
.imgClr_nav .clrIndicator.active:after{display: block;}
.imgClr_nav .clrIndicator.active:before{display: block;}
.imgClr_nav .clrIndicator + .clrIndicator{margin-left: 20px;}
#clr1{background: #90B672;}
#clr2{background: #AD8139;}
#clr3{background: #3C3D3C;}

#clr1:before{border-top-color: #90B672;}
#clr2:before{border-top-color: #AD8139;}
#clr3:before{border-top-color: #3C3D3C;}
.theme-img{
    position: absolute;
    height: 415px;
    width: 50%;
    left: 0px;
    text-align: center;
}
.theme-img img{max-width: 680px; width: 100%;}
.sub_feature {
    display: inline-block;
    width: 100%;
    position: relative;
    padding-left: 25px;
    margin-bottom: 5px;
}
.sub_feature h4 {
    font-weight: bold;
    margin: 0px;
    margin-top: 10px;
}
.sub_feature p {
    margin-bottom: 10px;
    margin-top: 10px;
}
.sub_feature h4 i {
    position: absolute;
    left: 5px;
    top: 13px;
    font-size: 13px;
}
.personal_brand {
    min-height: 485px;
}
.imgClr_slide img {
    max-width: 570px;
    width: 100%;
    border-radius: 4px;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.40);
    opacity: 0;
    position: absolute;
    z-index: 3;
    top: 60px;
    left: 0;
    right: 0;
    margin: 0 auto;
    transition: all ease 1s;
}
    .inr_head {display: none;}
    .fea_txt_present .btn-primary{border-color: #3E4154 !important; color: #fff !important; background-color: #3E4154 !important; border-width: 2px;}
</style>
    <div class="pagetitle">
            <div class="container">
                 <h1>Easy Booking Process</h1>
                <!--<h5>Find out what eZee PMS can do for your hotel</h5>-->
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
            url: "https://www.ezeereservation.com/featurepage/booking-process.php",
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
