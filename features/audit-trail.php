<?php include "../includes/header.php"; ?>
<style>
    .fullsection{padding: 60px}
</style>
    <div class="pagetitle">
        <div class="container">
             <h1>Trouble Free Audit Trails</h1>
            <!--<h5>Find out what eZee PMS can do for your hotel</h5>-->
        </div>
    </div>
    
    <div class="page_container" style="padding-bottom:0; padding-top: 0;">
        
        <div class="fullsection graybg featureset" id="1">
            <div class="container text-center">
                <p>Another significant aspect of hotel management is audit trail records. Giving you complete details of each activity at your property, eZee Absolute offers automated as well as manual audit trails viz. night audit, transaction audit trails and more.</p>
                <br />
                <h2 style="margin-bottom: 20px;">Transaction Audit Trails</h2>
                <div class="text-center">
                    <img src="../images/transation-audit.png" alt="Transaction Audit Trails" class="audit-img" style="margin-bottom: -30px;" />
                </div>
                <br />
                <p>Every transaction in the system is tracked and stored in the logs. You can view each operation performed on the transaction, check which user triggered the transaction along with precise date and time. This keeps your staff updated with the booking process and increases accountability among staff.</p>
            </div>
        </div>
          
        <div class="fullsection featureset blck-trail" id="2">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Block Room Audit Trails</h2>
                        <p>The system maintains blocked room logs and performs real-time inventory update with a reasons for blocking the room while keeping the front desk updated with the status of rooms.</p>
                    </div>
                    <div class="col-sm-6">
                        <br />
                        <img src="../images/blockroom-audit.png" class="audit-img" alt="Block Room Audit Trails" />
                    </div>
                </div>
                
            </div>
        </div>
         
        <div class="fullsection graybg featureset" id="3">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 text-center">
                        <img src="../images/night-audit.png" class="audit-img" alt="Night Audit - Audit Trails" />
                    </div>
                    <div class="col-sm-6">
                        <br />
                        <h2>Night Audit - Audit Trails</h2>
                        <p>Night Audit is pretty crucial operation when it comes to running a hotel business. Thus, property owners need to ensure that night-audit is accurately performed on a daily basis by the hotel staff. Moreover, if your staff is working in shift; then it is essential to maintain logs recording which staff member carried the Night Audit and at the time of the audit taking place.</p>
                    </div>
                </div>
                
            </div>
        </div>

        <div class="fullsection featureset blck-trail" id="2">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Contact Audit Trails</h2>
                        <p>These audit trails in the online hotel management system will keep track of several operations performed on guest, travel agent and company databases. Besides that, these trails will also include logs of blacklist and whitelist guests.</p>
                    </div>
                    <div class="col-sm-6">
                        <br />
                        <img src="../images/contact-audit-trails.png" class="audit-img" alt="Contact Audit Trails" />
                    </div>
                </div>
                
            </div>
        </div>
         
        <div class="fullsection featureset" id="4">
            <div class="container text-center">
                <h2 style="margin-bottom: 20px;">Update Rate Audit Trails</h2>
                <div class="text-center">
                    <img src="../images/update-rate-audit.png" class="audit-img trnAud" alt="Update Rate Audit Trails" />
                </div>
                <br />
                <p>Rate changes in the system are stored in dedicated logs with date and time of the update along with the user details.</p>
            </div>
        </div>
         
        <div class="fullsection graybg featureset setting-audit" id="5">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 text-center">
                        <img src="../images/setting-audit.png" class="audit-img" alt="Settings Audit Trails" />
                    </div>
                    <div class="col-sm-6">
                        <h2>In-depth Audit Setting</h2>
                        <p>If any user edits the basic property settings, the settings log will give you the details of who made the changes in the system, at what time and from which IP address.</p>
                    </div>
                </div>
            </div>
        </div>
         
        <div class="fullsection featureset ip-config" id="6">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>IP Configuration for Audit Trails</h2>
                        <p>Mostly for security concerns, a majority of hotels provide limited access to their staff for accessing front office. As eZee hotel software also stores IP Configuration log, you can give access to users according to their local machine IP configuration.</p>
                    </div>
                    <div class="col-sm-6">
                        <img src="../images/ip-config.png" class="audit-img" alt="IP Configuration Audit Trails" />
                    </div>
                </div>
            </div>
        </div>
        <?php include '../includes/footer-features.php' ?>
    </div>

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
        
        var locatHash = window.location.hash;
        if(locatHash != ""){
            $('html, body').animate({scrollTop : $(locatHash).offset().top - 70},1500);
        }
    });
</script>