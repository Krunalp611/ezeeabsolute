<?php include "../includes/header.php"; ?>
    <div class="pagetitle pagetitle-big be-title">
        <img src="../images/reporting.jpg" alt="" class="ptbg">
        <div class="container report-bnr-txt">
            <h1>Analytics and Reporting</h1>
            <!--<h5>Reports and statistics, all the important information right at your fingertips</h5>-->
        </div>
    </div>
    <!--<div class="pagetitle">
        <div class="container">
             <h1>Analytics and Reporting</h1>
            <h5>Find out what eZee PMS can do for your hotel</h5>
        </div>
    </div>-->
    
    <div class="page_container" style="padding-bottom:0;">
        <div class="container" id="fcontent">
            <p class="text-center">eZee Absolute covers a wide range of reports offering insights into all aspects of your hotel operations, from occupancy and housekeeping to channel distribution and analysis; we have it all!</p>
        </div>
         
        <div class="fullsection featureset" id="1">
            <div class="container">
                <h2 class="text-center">Elaborate and Significant Analytics</h2>
                <div class="text-center">
                    <img src="../images/rich-analytics.png" class="audit-img" alt="Rich Analytics">
                </div>
                <p class="text-center">Along with multitude of detailed reports presented with self explanatory charts and graphs, this rich analytical aspect of eZee hotel software also lets you export the printer friendly reports to spreadsheets.</p>
                    
            </div>
        </div>
          
        <div class="fullsection graybg featureset detail-sale" id="2">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 text-center">
                        <img src="../images/consolidate-report.png" class="audit-img" alt="Consolidate Report for Chain of Hotels (CRS)" />
                    </div>
                    <div class="col-sm-6">
                        <h2>Consolidated Report for Chain of Hotels (CRS)</h2>
                        <p>Combining all your chain properties, the phenomenal CRS function allows you to access and manage all your reports from a single PMS panel.</p>
                    </div>
                </div>
            </div>
        </div>
         
        <div class="fullsection featureset detail-sale" id="3">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Clear Guest Reports</h2>
                        <p>Get daily reports of reservation, guest arrival, check-in, guest check-out, etc at the end of the day. Using that, analyse your day-to-day bookings and form strategies to widen your clientele.</p>
                    </div>
                    <div class="col-sm-6 text-center">
                        <img src="../images/guest-reports.png" class="audit-img" alt="Clear Guest Reports" />
                    </div>
                </div>
            </div>
        </div>
        
        <div class="fullsection graybg featureset detail-sale" id="4">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 text-center">
                        <img src="../images/detailed-sales-report.png" class="audit-img" alt="Detailed Sales Report" />
                    </div>
                    <div class="col-sm-6">
                        <h2>Detailed Sales Report</h2>
                        <p>Containing numerous reports such as Travel Agent commission reports, revenue reports, miscellaneous sales, and more; eZee Absolute helps you with your property’s expense management and revenue calculation.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="fullsection featureset" id="5">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-ceter">
                        <h2 class="text-center">Audit Reports</h2>
                        <br />
                        <div class="text-center">
                            <img src="../images/control-report.jpg" alt="Audit Reports" class="audit-img trnAud">
                        </div>
                        <br />
                        <p class="text-center">Keep track of all the audit trails and changes made by the staff with reports on voids, change in rates, no-shows, reservation changes, change in room charges and many more. In addition, you can assign specific access rights to staff with user rights function, getting a greater control over your business.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="fullsection graybg featureset detail-sale" id="6">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 text-center">
                        <img src="../images/housekeeping-mgnt.png" class="audit-img" alt="Housekeeping Management" />
                    </div>
                    <div class="col-sm-6">
                        <h2>Housekeeping Management</h2>
                        <p>Easily generate reports of arrival list, departure list, maintenance work order, housekeeping room assignment lists and other important reports for your housekeeping staff. In addition, reports on guest check-in time, check-out time and guest preferences allow the staff to work more efficiently.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="fullsection featureset detail-sale" id="7">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Tax and Accounting Reports</h2>
                        <p>Get access to accounting reports such as daily receipts, city ledger, guest ledger, advance deposit ledger, invoice list and tax reports.</p>
                    </div>
                    <div class="col-sm-6 text-center">
                        <img src="../images/accounting-reports.png" class="audit-img" alt="Tax and Accounting Reports" />
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