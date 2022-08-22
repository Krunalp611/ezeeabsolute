<?php include "../includes/header.php"; ?>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300&display=swap" rel="stylesheet">
<section class="fblMain">

	<section class="fblHerosection">
		<div class="container">
			<div class="fblHerosectionInner">
				<div class="fblHeroContent">
					<a class="fblLogo" href="https://www.ezeeabsolute.com/"><img src="<?php echo $servername; ?>images/ezee-logo.png" alt="Online Hotel Management System"><span class="header-logo"><span>eZee Absolute</span><small>Online Hotel Management System</small></span></a>
					<h1 class="fblHeroTitle">UP Your Hotel’s <br><span class="typed">Direct Bookings</span></h1>
					<p class="fblHeroSubtitle">With Google’s Free Hotel Booking Links</p>
					<p class="fblHeroText">eZee joins forces with Google to help hotels avail this program seamlessly.</p>
					<div class="fblContact">
						Call / WhatsApp on <a href="tel:+918849350811">+91 88493 50811</a> for more details.
					</div>
				</div>
				<div class="fblHeroFormsection">
					<h2 class="fblHeroFormTitle">Avail Your Free Booking Links</h2>
					<div id="fblHeroForm" class="generalForm fblHeroForm citySelectionForm">
						<!--[if lte IE 8]>
						<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
						<![endif]-->
						<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
						<script>
						hbspt.forms.create({
						portalId: "502973",
						formId: "2ef4d427-9e58-48ed-b81c-8d17934dfeb5",
						css: "",
						target: '.fblHeroForm',
                        onFormReady($form){
                            $( ".citySelectionForm div[class*='_cities']" ).css('display','none');
                        }
						});
						</script>
					</div>
				</div>
			</div>
		</div>
		<div class="fblHerosectionPattern"></div>
	</section>
	<!-- End: fblHerosection -->

	<section class="fblFeatureHeadsection">
		<div class="container">
			<div class="fblFHInner">
				<div class="fblFHMedia fblFHMediaImg">
					<img src="<?php echo $servername ?>images/fbl-img.png" alt="Google Free Booking Link">
				</div>
				<header class="fblFHContent">
					<h2>What are Google Free Hotel Booking Links?</h2>
					<p>Google announced the launch of <a href="https://blog.google/products/travel/more-choice-travelers-free-hotel-booking-links/" target="_blank" rel="noopener">Free Hotel Booking Links</a>, which will allow hotels to display their direct booking rates and availability on Google Hotel (Meta) Search and Google Maps. Because of these free booking links, bookers will be able to compare a property’s room rates across various platforms, and take further actions to book their stay.</p>
				</header>
			</div>
		</div>
	</section>
	<!-- End: fblFeatureHeadsection -->

	<section class="fblIntegration">
		<div class="container">
			<div class="fblIntegrationInner">
				<div class="fblIntegrationImg">
					<img src="<?php echo $servername ?>images/fbl-program.png" alt="Google’s Key Integration Partner">
				</div>
				<div class="fblIntegrationContent">
					<h2>Google Chooses eZee as an Integration Partner for this Program</h2>
					<p>eZee’s role here is to onboard its existing customers and all future customers onto the platform, unlocking a myriad of commission-free booking opportunities for the properties.</p>
					<p>Our booking engine, eZee Reservation helps you acquire direct bookings from Google, without any hassles. Because we are authorized Google Free Booking Link integration partner, we get your direct rates positioned at the top of your Google Meta Search listing.</p>
					<div class="fblBtnOuter">
						<a href="#fblHeroForm" class="btn btn-primary claimbtn">Get Started With FBL</a>
						<a href="<?php echo $servername; ?>bookingengine.php" target="_blank" class="btn btn-secondary">Explore eZee Booking Engine</a>
					</div>
				</div>
			</div>
			<div class="fblIntegrationPattern"></div>
		</div>
	</section> <!-- End: fblIntegration -->

	<?php /*
	<section class="fblBenefits">
		<div class="container">
			<div class="fblBenefitsOuter">
				<div class="fblBenefitsHead">
					<h2>Benefits of Google Free Booking Links for Hoteliers</h2>
					<p>In these uncertain times, Google has up the game for hotels to expand their reach online, get more exposure among the travelers and gain a competitive edge.</p>
				</div>
				<div class="fblBenefitsInner">
					<div class="fblBenefitsBox">
						<img class="fblBenefitsBoxImg" src="<?php echo $servername ?>images/icons/icons-direct-booking.png" alt="Higher direct bookings">
						<h3 class="fblBenefitsBoxTitle">Higher direct bookings</h3>
					</div>
					<div class="fblBenefitsBox">
						<img class="fblBenefitsBoxImg" src="<?php echo $servername ?>images/icons/icons-booking-commissions.png" alt="Lower booking commissions than OTAs">
						<h3 class="fblBenefitsBoxTitle">Lower booking commissions than OTAs</h3>
					</div>
					<div class="fblBenefitsBox">
						<img class="fblBenefitsBoxImg" src="<?php echo $servername ?>images/icons/icons-googlemap.png" alt="Better reach on Google Hotel Search and Google Maps">
						<h3 class="fblBenefitsBoxTitle">Better reach on Google Hotel Search and Google Maps</h3>
					</div>
				</div>
				<p class="fblBenefitsBtm">For travelers, the free booking links will provide them with an improved booking experience, allowing them to search for stays and book them without having to browse different sites.</p>
			</div>
			
		</div>
	</section> <!-- End: fblBenefits -->
	*/ ?>

	<section class="fblHow">
		<div class="container">
			<div class="fblHowInner">
				<div class="fblHowContent">
					<h2>How Do Google’s Free Hotel Search Listings Work?</h2>
					<p>With this product, Google allows you to display your direct rates and availability on the meta search and Google Business Listing. Here is how it works.</p>
					<a href="#fblHeroForm" class="btn btn-primary claimbtn">Enroll For Google FBL</a>
				</div>
				<div class="fblHowImg">

					<img class="fblHowImage" src="<?php echo $servername; ?>images/free_hotel_booking_links.gif" alt="Google Free Booking Link">

					<?php /*
					<div id="fblslides" class="fblslider owl-carousel owl-theme">

<?php if ( $countryFrmIP == 'India') { ?> 

<div class="slide">
	<div class="fblslidesImgTxt">Step 1: Search for BRG Budget Stay on Google</div>
	<img src="<?php echo $servername; ?>images/fblSliderIndiaImg01.png" alt="Google Free Booking Link">
</div>
<div class="slide">
	<div class="fblslidesImgTxt">Step 2: In the Google Business Listing, click on "Check Availability" or "View more rates"</div>
	<img src="<?php echo $servername; ?>images/fblSliderIndiaImg02.png" alt="Google Free Booking Link">
</div>
<div class="slide">
	<div class="fblslidesImgTxt">Step 3: Your Google FBL will be visible here.</div>
	<img src="<?php echo $servername; ?>images/fblSliderIndiaImg03.png" alt="Google Free Booking Link">
</div>

<?php }else{ ?>

<div class="slide">
	<div class="fblslidesImgTxt">Step 1: Search for Strabon Hotel on Google</div>
	<img src="<?php echo $servername; ?>images/fblSliderInterImg01.png" alt="Google Free Booking Link">
</div>
<div class="slide">
	<div class="fblslidesImgTxt">Step 2: In the Google Business Listing, click on "Check Availability" or "View more rates"</div>
	<img src="<?php echo $servername; ?>images/fblSliderInterImg02.png" alt="Google Free Booking Link">
</div>
<div class="slide">
	<div class="fblslidesImgTxt">Step 3: Your Google FBL will be visible here.</div>
	<img src="<?php echo $servername; ?>images/fblSliderInterImg03.png" alt="Google Free Booking Link">
</div>

<?php } ?>

					</div>
*/ ?>

				</div>
			</div>
		</div>
	</section> <!-- End: fblHow -->

	<section class="fblHow" style="background-color: #f5f5f5">
		<div class="container">
			<div class="fblHowInner">
				<div class="fblHowContent">
					<h2>How to check for FBL?</h2>
					<p>Does your property have free booking links?</p>
					<a href="check-your-hotel.php" class="btn btn-primary">Here’s how to check</a>
				</div>
				
			</div>
		</div>
	</section> 
	<section class="trialReviews">
		<div class="container">
			<div class="trialReviewsOuter">
				<h2>How are eZee Customers Benefiting from Free Booking Links?</h2>
				<div id="trialReviews" class="trialReviews-inner">

					<div class="trialReviews-block">
						<div class="trialReviewsContent">
							<p class="trialReviews-text">We have had an excellent experience with Google’s organic placements so far. In February 2021 itself, we saw a minimum of 10% increase in direct bookings. We definitely recommend enrolling for this program through eZee.</p>
							<footer class="trialReviews-user">
								<div class="trialReviewsTxt">
									<h4>Pankaj Barad,<span> <a href="https://www.brgbudgetstay.com/" target="_blank">BRG Budget Stay</a>, India</span></h4>
								</div>
							</footer>
						</div>
						<div class="trialReviewsImage">
							<a href="https://www.brgbudgetstay.com/" target="_blank"><img src="<?php echo $servername ?>images/testimonials/brgbudgetstay.png" alt="BRG Budget Stay"></a>
							<div class="fblTestiStats">
								Direct bookings received from Google Free Booking Links program: <strong>161</strong>
							</div>
						</div>
					</div>

					<div class="trialReviews-block">
						<div class="trialReviewsContent">
							<p class="trialReviews-text">We have been able to generate direct revenue from the FBL. We are expecting the FBL to represent at least 9-10% of total revenue of 2021. eZee has found a way to generate more revenue and commission-free bookings in these unstable circumstances. It is great that eZee remains on top of the line with such new channel sources, which other vendors fail at.</p>
							<footer class="trialReviews-user">
								<div class="trialReviewsTxt">
									<h4>Liliana León,<span> <a href="https://www.thestrabon.com/" target="_blank">The Strabon Hotel Tulum</a>, Mexico</span></h4>
								</div>
							</footer>
						</div>
						<div class="trialReviewsImage">
							<a href="https://www.thestrabon.com/" target="_blank"><img src="<?php echo $servername ?>images/testimonials/thestrabon.png" alt="The Strabon Hotel Tulum"></a>
							<div class="fblTestiStats">
								Direct bookings received from Google Free Booking Links program: <strong>14</strong>
							</div>
						</div>
					</div>

					<div class="trialReviews-block">
						<div class="trialReviewsContent">
							<p class="trialReviews-text">This program by Google is going to bring in amazing opportunities for the hotels and accommodation providers. I appreciate eZee’s enthusiasm here, as they are always up and running with such initiatives.</p>
							<footer class="trialReviews-user">
								<div class="trialReviewsTxt">
									<h4>Kalpesh Gajjar,<span> <a href="http://www.stayinn.us/" target="_blank">Stay Inn</a>, USA</span></h4>
								</div>
							</footer>
						</div>
						<div class="trialReviewsImage">
							<a href="http://www.stayinn.us/" target="_blank"><img src="<?php echo $servername ?>images/testimonials/stayinn.png" alt="Stay Inn"></a>
							<div class="fblTestiStats">
								Direct bookings received from Google Free Booking Links program: <strong>7</strong>
							</div>
						</div>
					</div>

					<div class="trialReviews-block">
						<div class="trialReviewsContent">
							<p class="trialReviews-text">Free Hotel booking links have improved our positioning and exposure in our clients' mobile searches. We experienced excellent results in sales, establishing growth of 18%. We consider this as an essential tool to increase sales and are expanding the service for our two hotels in the chain.</p>
							<footer class="trialReviews-user">
								<div class="trialReviewsTxt">
									<h4>Alfredo Sanz,<span> <a href="https://www.paradores.com.ar/hotel/es/index.html" target="_blank">Hotel Austral Viedma</a>, Argentina</span></h4>
								</div>
							</footer>
						</div>
						<div class="trialReviewsImage">
							<a href="https://www.paradores.com.ar/hotel/es/index.html" target="_blank"><img src="<?php echo $servername ?>images/testimonials/hotelaustralviedma.png" alt="Hotel Austral Viedma"></a>
							<div class="fblTestiStats">
								Direct bookings received from Google Free Booking Links program: <strong>14</strong>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>
	<!-- End: trialReviews -->

	<section class="fblprocess">
		<div class="container">
			<div class="fblprocessOuter">
				<div class="fblprocessHead">
					<h2>How To Enroll For Google FBL With eZee?</h2>
					<p>Hotels can enroll for the Free Booking Link program only through Google’s authorized integration partners. Being an eZee Reservation booking engine user is mandatory to avail the benefits of this program. Here is how you can enroll.</p>
				</div>
				<div class="fblprocessInner">
					<ul>
						<li><strong>Step 1:</strong> You <a href="#fblHeroForm" class="claimbtn">fill the form</a> to enroll for FBL.</li>
						<li><strong>Step 2:</strong> If you are an existing eZee Reservation user, we will push your rates and availability directly to Google.</li>
						<li><strong>Step 3:</strong> If you are not an existing eZee Reservation user, our team will contact you and get you onboarded with our booking engine.</li>
						<li><strong>Step 4:</strong> You start receiving direct, commission-free bookings from Google.</li>
					</ul>
				</div>
			</div>
		</div>
	</section> <!-- End: fblprocess -->

	<section class="fblBEsection">
		<div class="container">
			<div class="fblBEsectionInner">
				<div class="fblBEsectionContent">
					<h2>Get Your Property on Google Free Booking Links in 1 STEP</h2>
					<p>Sign up for eZee Reservation booking engine starting at 
<?php if ( $countryFrmIP == 'India') { ?> 
<strong>₹999/month*</strong>
<?php }else{ ?>
<strong>$15/month*</strong>
<?php } ?>
					 and get your property visible on the Google FBL in no time.</p>
					<a href="<?php echo $servername?>bookingengine.php" class="btn btn-white btn-lg">Sign up for eZee Reservation</a>
					<p class="fblBEsectionNote">*We will configure your hotel’s booking engine and get you listed in the FBL; which will help you acquire direct, commission-free bookings.</p>
					
				</div>
			</div>
		</div>
	</section> <!-- End: fblBEsection -->


	<?php /*
	<section class="fblctaFaq">
		<div class="container">
			<div class="fblctaFaqInner">
				<div class="fblctaFaqContent">
					<h2>Frequently Asked Questions</h2>
					<p>We know you might have many questions about FBL and eZee’s association with Google for this program. We have answered most of them.</p>
				</div>
				<div class="fblctaFaqBtn">
					<a href="<?php echo $servername ?>google-free-booking-link/faqs.php" class="btn btn-primary btn-lg">Go to FAQs</a>
				</div>
			</div>
		</div>
	</section> <!-- End: fblctaFaq -->
	*/?>

	<section class="fblFaqsection">
		<div class="container">
			<div class="fblFaqsectionHead">
				<h2>Frequently Asked Questions</h2>	
				<p>We know you might have many questions about FBL and eZee’s association with Google for this program. We have answered most of them.</p>
			</div>
			
			<div class="faqs_container">
            <div class="col-md-3">
                <div class="quecat">
                    <a href="javascript:void(0);" class="fselected" data-cat="cat1">Getting Started with Free Booking Links</a>
                    <a href="javascript:void(0);" data-cat="cat2">Bookings from Google</a>
                    <a href="javascript:void(0);" data-cat="cat3">FBL Pricing</a>
                    <a href="javascript:void(0);" data-cat="cat4">Working with FBL</a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="faqCat-title">Getting Started with Free Booking Links</div>
                <ul class="faqs faqcatwise"  itemscope itemtype="https://schema.org/FAQPage">

                    <!-- category 1 -->
                    <li style="display:none;" data-faq="cat1" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <div class="faqque" itemprop="name">What do I need to do to enable free hotel booking links for my property?</div>
                        <div class="faqans" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <p itemprop="text">All you need to do is fill the form and we will enroll you for the program. This program is available only through Google’s authorized integration partners, of which eZee is one. You will need an active subscription to eZee Reservation booking engine and a Google Business Listing of your property.</p>
                        </div>
                    </li>
                    <li style="display:none;" data-faq="cat1" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <div class="faqque" itemprop="name">How long will it take for my free booking links to be live?</div>
                        <div class="faqans" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <p itemprop="text">Once you enroll for FBL with eZee, your organic placement will be live on Google in 7-10 working days.</p>
                        </div>
                    </li>
                    <li style="display:none;" data-faq="cat1" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <div class="faqque" itemprop="name">Do I need to have an active Google Hotel Ads (GHA) campaign to enroll for FBL (Free Booking Link)?</div>
                        <div class="faqans" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <p itemprop="text">You don’t need to have an active GHA campaign to enroll for the FBL program. But, it is highly recommended that you do, to benefit most from both platforms.</p>
                        </div>
                    </li>
                    <li style="display:none;" data-faq="cat1" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <div class="faqque" itemprop="name">What if my Booking Engine does not have integration with Google FBL (Free Booking Link)?</div>
                        <div class="faqans" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <p itemprop="text">You can ask your booking engine vendor to approach Google for this program, or ask them to get in touch with us. On the other hand, you can always avail eZee booking engine for your property.</p>
                        </div>
                    </li>

                    <!-- category 2 -->
                    <li style="display:none;" data-faq="cat2" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <div class="faqque" itemprop="name">Will I be notified with bookings I receive from free booking links?</div>
                        <div class="faqans" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <p itemprop="text">Yes, just how you are notified of direct bookings from other sources, you will be alerted as soon as you receive bookings from Google FBL.</p>
                        </div>
                    </li>
                    <li style="display:none;" data-faq="cat2" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <div class="faqque" itemprop="name">Do I need an active payment gateway integration to receive bookings from FBL (Free Booking Link)?</div>
                        <div class="faqans" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <p itemprop="text">While it is not mandatory for you to have an active payment gateway integration, it is highly recommended to have one. On the other hand, you can also enable pay@hotel facility at your property.</p>
                        </div>
                    </li>

                    <!-- category 3 -->
                    <li style="display:none;" data-faq="cat3" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <div class="faqque" itemprop="name">Are Google’s hotel booking links free of cost?</div>
                        <div class="faqans" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <p itemprop="text">Yes, the Google FBL program is free-of-cost.</p>
                        </div>
                    </li>
                    <li style="display:none;" data-faq="cat3" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <div class="faqque" itemprop="name">Are there any hidden commission charges for free booking links?</div>
                        <div class="faqans" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <p itemprop="text">No, there are no hidden commission charges in FBL.</p>
                        </div>
                    </li>
                    <li style="display:none;" data-faq="cat3" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <div class="faqque" itemprop="name">How many bookings can I expect from the free search listing?</div>
                        <div class="faqans" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <p itemprop="text">It depends on your organic placement’s positioning in the price list. The higher your position is, the more bookings you will receive. However, our customers have been receiving a good number of bookings per month from FBL.</p>
                        </div>
                    </li>

                    <!-- category 4 -->
                    <li style="display:none;" data-faq="cat4" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <div class="faqque" itemprop="name">How will my rates and availability be pushed on Google?</div>
                        <div class="faqans" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <p itemprop="text">You can enroll for the FBL platform only through a Google authorized integration partner (like eZee). Your vendor will push your direct rates and availability on Google through the booking engine.</p>
                        </div>
                    </li>
                    <li style="display:none;" data-faq="cat4" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <div class="faqque" itemprop="name">Can I disable free booking links at any time?</div>
                        <div class="faqans" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <p itemprop="text">Yes. Contact your FBL platform enabler (like eZee) and confirm that you wish to disable FBL for your property. However, it is recommended that you do not disable it for it is free of charge and would benefit you with visibility.</p>
                        </div>
                    </li>
                    <li style="display:none;" data-faq="cat4" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <div class="faqque" itemprop="name">Can a hotel connect to FBL directly?</div>
                        <div class="faqans" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <p itemprop="text">No. You can connect or enroll only through Google’s authorized FBL integration partner.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
		</div>
	</section> <!-- End: fblFaqsection -->

	<div class="fblctaSection">
		<div class="container">
		<div class="fblctaInner">
		<div class="fblctaContent"><h2>It’s time to reduce your OTA commissions <span>Get your Google FBL campaign started</span></h2></div>
		<div class="fblctaButton"><a href="#fblHeroForm" class="btn btn-primary btn-white btn-lg claimbtn">Sign me up</a></div>
		</div>
		</div>
		<div class="patterns"><span></span><span></span><span></span></div>
	</div>
	<!-- End: fblctaSection -->

	<footer class="fblFooter">
		<div class="container">
			<div class="copy-text">eZee Absolute &copy; 2010 - <?php echo date('Y') ?>. All Rights Reserved.</div>
		</div>
	</footer> <!-- End: fblFooter -->


</section>
<!-- End: fblMain -->

<?php include "../includes/footer.php"; ?>
<script src="<?php echo $servername; ?>js/citySelectionForm.js"></script>
<style>
.pathSVG { position: absolute; height: 130px; left: 0; top: 100%; z-index: -1; }
.clFeaturebox:nth-of-type(even) .clFeatureboxInner .pathSVG { transform: scale(.8, -1); }
.pathLine { fill: none; stroke: #aaafcb; stroke-width: 3px; stroke-dasharray: 10; }
.fblLogo,
.fblLogo:hover,
.fblLogo:active,
.fblLogo:focus { position: absolute; top: 0; font-size: 18px; line-height: 20px; color: #4965f9; padding: 0; display: inline-block; margin: 0; }
.fblLogo .header-logo { display: inline-block; font-size: 28px; margin: 0 0 0 6px; vertical-align: middle; }
.fblLogo .header-logo span { font-size: 26px; }
.fblLogo .header-logo small { display: block; color: #4b4f65; font-size: 11px; }
#header-section { display: none; }
.clFeatureboxMain { position: relative; }
.secload { -webkit-transition: opacity 0.5s; transition: opacity 0.5s; opacity: 0; }
.secload.changed { opacity: 1 }
#topnav .header-logo { color: #4965f9; }
#topnav .header-logo small { color: #4b4f65; }
#topnav .navbar-abs .navbar-nav li a { color: #4b4f65; }
.fblBody h2 {font-family: 'Open Sans',sans-serif,serif;}
.fblBody .absOuter {
    margin-top: 0;
}
.fblBody .fblMain { 
	position: relative;
	overflow-x: hidden;
}
.fblHerosection {
    position: relative;
    padding: 30px 0 30px;
    margin: 0;
    min-height: 540px;
    background: #4965f9;
    background: -moz-linear-gradient(to bottom, #314ac7 40%, #3ea1d0 100%);
    background: -webkit-linear-gradient(to bottom, #314ac7 40%, #3ea1d0 100%);
    background: linear-gradient(to bottom, #314ac7 40%, #3ea1d0 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#314ac7', endColorstr='#4eb1e0', GradientType=0);
    background: none;
}
.fblHerosectionPattern {
	position: absolute;
	right: -280px;
	top: -220px;
	width: 50%;
	height: 100%;
	border-radius: 0 0 0 50px;
	transform-origin: center;
	transform: rotate(26deg) scale(1.3);
	overflow: hidden;
	background: #4965f9;
	background: -moz-linear-gradient(to bottom, #3e55cc 40%, #3ea1d0 100%);
	background: -webkit-linear-gradient(to bottom, #3e55cc 40%, #3ea1d0 100%);
	background: linear-gradient(to bottom, #3e55cc 40%, #3ea1d0 100%);
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#3e55cc', endColorstr='#4eb1e0', GradientType=0);
}
.fblHerosection .container { position: relative; z-index: 1; }
.fblHerosectionInner {
	display: flex;
	justify-content: space-between;
}
.fblHeroContent { 
	width: 50%; 
	padding: 0;
}
.fblHeroTitle {
    font-size: 54px;
    font-weight: 700;
    line-height: 1.2;
    margin: 160px 0 20px;
}
.fblHeroTitle span {
	color: #4965f9;
}
.fblHeroSubtitle { 
	font-size: 26px;
    font-weight: 600;
    line-height: 1.5;
    color: #626576;
    margin: 0;
    position: relative;
}
.fblHeroText {
    margin: 20px 0 0;
    line-height: 1.6;
    font-size: 14px;
    width: auto;
    max-width: fit-content;
    background: #fff8e1;
    border: 1px solid #f7eed6;
    padding: 10px;
    border-radius: 4px;
    color: #9a6e13;
    box-shadow: 2px 4px 10px 0px rgb(154 118 0 / 10%);
}

.fblHeroSubtitle span { position: relative; padding: 0 0 0 20px; margin: 0 0 0 10px; }
.fblHeroSubtitle span:first-of-type { margin-left: 0; }
.fblHeroSubtitle span:before { content: "\f00c"; position: absolute; left: 0; top: 0; font-family: fontAwesome; font-size: 14px; font-weight: 400; color: #10cea1; }
.fblHeroFormsection { position: relative; z-index: 1; width: 350px; background: #FFF; border-radius: 6px; box-shadow: 0 14px 60px -10px rgba(0, 0, 0, 0.5); padding: 30px; min-height: 400px;}
.generalForm.fblHeroForm {  padding: 0; min-height: initial;}
.fblHeroFormTitle { font-size: 18px; font-weight: 600; text-align: center; margin: -30px -30px 30px; background: #eef0f9; padding: 15px 20px;
    border-radius: 6px 6px 0 0; color: #1f1f1f;}
.clFeaturesection { position: relative; }
.fblFeatureHeadsection {margin: 40px auto 40px; }
.fblFHInner {display: flex; align-items: center; justify-content: center;}
.fblFHMedia {position: relative; width: 480px; margin: 0 50px 0 0; box-shadow: 0 8px 30px -4px rgba(0, 0, 0, 0.28); background: #FFF; padding: 10px; border-radius: 6px;}
.fblFHMedia.fblFHMediaImg {background: none; box-shadow: none; padding: 0;}
.fblFHMedia img {max-width: 100%;}
.fblFHMedia iframe { width: 100%; height: 260px; margin: 0; padding: 0; display: inline-block; vertical-align: middle;}
.fblFHContent {
    width: calc(100% - 530px);
    background: #ffffff;
    margin: 0;
}
.fblFeatureHeadsection h2 { font-size: 30px; font-weight: 700; margin: 0 auto; }
.fblFeatureHeadsection p { font-size: 16px; line-height: 2; margin: 15px 0 0; color: #6b6d77; }
.clFeaturebox { position: relative; padding: 60px 0; }
.clFeatureboxInner { position: relative; z-index: 1; display: flex; justify-content: center; align-items: center; padding: 40px 0; }
.clFeaturebox.clFeaturebox6 .clFeatureboxInner { padding-bottom: 0; }
.clFeatureboxInner:after { content: ""; position: absolute; background: url('<?php echo $servername; ?>images/icons/pathline.svg') no-repeat 0 0; background-size: contain; width: 723px; height: 192px; display: block; bottom: -35%; left: 80px; z-index: -1; transform: scale(0.7); transform-origin: left bottom; opacity: 0.6; }
.clFeaturebox:nth-of-type(even) .clFeatureboxInner:after { left: 130px; bottom: 0; transform: scale(0.6, -0.7); transform-origin: left bottom; }
.clFeaturebox.clFeaturebox6:nth-of-type(even) .clFeatureboxInner:after { display: none; }
.clFeatureImg { width: 350px; text-align: center; margin: 0 100px 0 0; position: relative; }
.clFeatureImg img { max-width: 100%; }
.clFeatureImg:before { content: ""; width: 350px; height: 290px; display: block; background: url(https://www.ezeeabsolute.com/images/icons/inner-sprite.png) no-repeat -590px 0px; transform: translate(0px, 0px); }
.clFeatureImg.clImg-contactless-booking:before, .clFeatureImg.clImg-contactless-departure:before, .clFeatureImg.clImg-contactless-arrival:before, .clFeatureImg.clImg-contactless-prearrival:before, .clFeatureImg.clImg-contactless-stay:before, .clFeatureImg.clImg-contactless-departure-engagement:before { content: ""; display: none; }
.clFeatureContent { width: 50%; }
.clFeatureTitle { font-size: 30px; font-weight: 700; line-height: 1.3em; margin: 0 0 30px; position: relative; background: #FFF; }
.clstepLabel { position: relative; left: 0; top: 0; font-size: 24px; font-weight: 700; line-height: 1; color: #10cea1; opacity: 0.8; text-transform: uppercase; display: block; transition: all 0.3s ease; margin: 0 0 5px; }
.clstepList { margin: 30px 0 0; padding: 0 0 0 20px; background: #FFF; }
.clstepList li { position: relative; font-size: 16px; line-height: 1.8em; margin: 15px 0 0; padding: 0; }
.clstepList li:first-of-type { margin-top: 0; }
ul.clstepSublist { margin: 20px 0; padding: 0 0 0 25px; list-style: circle; list-style-position: outside; }
ul.clstepSublist li { margin: 10px 0 0; font-size: 15px; line-height: 1.4em; }
.clBtnouter { margin: 20px 0 0; }
.clBtnouter .btn { padding: 15px 20px; line-height: 1; font-size: 16px; font-weight: 600; }
.clBtnouter .btn:after { content: "\f061"; font-family: FontAwesome; margin: 0 0 0 10px; transform: translateX(0px); display: inline-block; position: relative; display: none; }
.clFeaturebox:nth-of-type(even) .clFeatureboxInner { flex-direction: row-reverse; }
.clFeaturebox:nth-of-type(even) .clFeatureImg { margin: 0 0 0 100px; }
.clFeaturebox:nth-of-type(even) { }
.fblctaSection { position: relative; background: #4965f9; color: #FFF; padding: 40px 0 45px; background: #4965f9; background: -moz-linear-gradient(-45deg, #4965f9 0%, #4eb1e0 100%); background: -webkit-linear-gradient(-45deg, #4965f9 0%, #4eb1e0 100%); background: linear-gradient(135deg, #4965f9 0%, #4eb1e0 100%); filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#4965f9', endColorstr='#4eb1e0', GradientType=1); overflow: hidden; }
.fblctaSection .patterns span { position: absolute; }
.fblctaSection .patterns span:nth-child(1) { width: 470px; height: 290px; left: -180px; top: -270px; -webkit-transform: rotate(75deg); transform: rotate(75deg); background: -moz-linear-gradient(-360deg, rgba(0, 0, 0, 0) 30%, rgba(0, 0, 0, 0.04) 100%); background: -webkit-linear-gradient(-360deg, rgba(0, 0, 0, 0) 30%, rgba(0, 0, 0, 0.04) 100%); background: linear-gradient(-360deg, rgba(0, 0, 0, 0) 3%, rgba(0, 0, 0, 0.04) 100%); filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#a6000000', GradientType=1); }
.fblctaSection .patterns span:nth-child(2) { width: 240px; height: 560px; right: 10%; top: -380px; -webkit-transform: rotate(75deg); transform: rotate(75deg); background: -moz-linear-gradient(-120deg, rgba(0, 0, 0, 0) 30%, rgba(0, 0, 0, 0.04) 100%); background: -webkit-linear-gradient(-120deg, rgba(0, 0, 0, 0) 30%, rgba(0, 0, 0, 0.04) 100%); background: linear-gradient(-120deg, rgba(0, 0, 0, 0) 3%, rgba(0, 0, 0, 0.04) 100%); filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#a6000000', GradientType=1); }
.fblctaSection .patterns span:nth-child(3) { width: 180px; height: 400px; right: 50%; bottom: -350px; -webkit-transform: rotate(41deg); transform: rotate(41deg); background: -moz-linear-gradient(-27deg, rgba(0, 0, 0, 0) 30%, rgba(0, 0, 0, 0.04) 100%); background: -webkit-linear-gradient(-27deg, rgba(0, 0, 0, 0) 30%, rgba(0, 0, 0, 0.04) 100%); background: linear-gradient(-27deg, rgba(0, 0, 0, 0) 3%, rgba(0, 0, 0, 0.04) 100%); filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#a6000000', GradientType=1); }
.fblctaInner { display: flex; align-items: center; justify-content: center; position: relative; z-index: 1; }
.fblctaButton { width: 200px; text-align: right; margin: 0 0 0 50px; }
.clctaDiv { width: 50%; padding: 0 30px; text-align: center; }
.fblctaSection h2 { font-size: 24px; font-weight: 400; line-height: 1.4; margin: 0; }
.fblctaSection h2 span { display: block; font-size: 34px; font-weight: 600; }
.fblctaInner .btn { font-weight: 600; padding: 15px 30px; line-height: 1; }
.covidSection { position: relative; }
.covidInner { box-shadow: 0 10px 30px -5px rgba(0, 0, 0, 0.14); background: #FFF; margin: 20px auto 80px; width: 70%; text-align: center; padding: 40px; border-radius: 10px; }
.covidContent h2 { font-size: 26px; font-weight: 700; margin: 0 0 20px; }
.covidContent p { font-size: 16px; line-height: 2; margin: 0; }
.covidContent h2 span { display: block; font-size: 20px; font-weight: 600; color: #bbbcc1; }
.covidContent .btn { margin: 20px 0 0; padding: 15px 20px; line-height: 1; font-size: 16px; font-weight: 600; }
.generalForm .hs-form-field { margin: 13px 0 28px; }
.hs_error_rollup .hs-error-msgs { padding: 0; }
.hs_error_rollup .hs-error-msgs label { font-size: 11px; padding: 6px 10px; border-radius: 3px; }
.generalForm .hs-form-field .hs-error-msgs { padding: 0; }
.generalForm .hs-form-field .hs-error-msgs label {font-size: 11px; letter-spacing: 0.03em;}
.generalForm .hs-form-field.hs-fieldtype-booleancheckbox .hs-error-msg {padding-top: 0;}
.generalForm .hs-submit { margin: 20px 0 0; }
.generalForm .hs-submit .hs-button { font-weight: 600; font-size: 16px; }
.hs_error_rollup {position: relative;z-index: 3;}
.generalForm .hs-form-field.hs-fieldtype-booleancheckbox { margin-bottom: 0; }
.faqSection-listing .faqs ol li { list-style: decimal; padding: 5px; }
.fblBody .faqSection {
    /*border-top: 1px solid #eaeaea;*/
    padding: 60px 0;
}
.fblBody .faqSection h2 {
	font-size: 30px;
	font-weight: 700;
}
.fblBody .faqSection h2:after {
	display: none;
}

.trialReviews{
	position:relative;
	padding:60px 0 80px;
	text-align:center;
	background: #4965f9;
	background: -moz-linear-gradient(45deg,  #4965f9 0%, #4eb1e0 80%);
	background: -webkit-linear-gradient(45deg,  #4965f9 0%,#4eb1e0 80%);
	background: linear-gradient(45deg,  #4965f9 0%,#4eb1e0 80%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#4965f9', endColorstr='#4eb1e0',GradientType=1 );
}
.trialReviewsOuter{position:relative;}
.trialReviewsOuter:before{content:"\f10d";font-family:fontAwesome;font-size:120px;color:rgb(0 0 0 / 5%);position:absolute;top:90px;left:30px;}
.trialReviews .container{position:relative;z-index:1;}
.trialReviews-block {
    max-height: 400px;
    display: flex;
    flex-wrap: wrap;
    width: 100%;
}
.trialReviewsContent {
    text-align: left;
    width: calc(100% - 275px);
}
.trialReviewsImage {
    width: 220px;
    margin: 0 5px 0 50px;
}
.trialReviewsImage img {
	border: 1px solid #eaeaea;
	box-shadow: 0px 5px 10px -4px rgb(0 0 0 / 10%);
}
.fblTestiStats {
    font-size: 16px;
    line-height: 1.5;
    margin: 30px 0px 0 0;
    background: #fffae8;
    border: 1px solid #f3eede;
    color: #82520a;
    padding: 10px;
    border-radius: 4px;
}
.fblTestiStats strong {
    display: block;
    font-size: 26px;
}
#trialReviews{position:relative;background:#FFF;width:80%;padding:40px 40px 50px;margin:0 auto;box-shadow:0 5px 20px -4px rgba(0,0,0,0.2);border-radius:10px;}
#trialReviews.owl-carousel .owl-wrapper-outer{max-height:400px;z-index:1;}
#trialReviews.owl-carousel .owl-wrapper{max-height:400px;overflow:hidden;}
#trialReviews.owl-carousel .owl-item{max-height:400px;overflow:hidden;}
.trialReviews h2{font-size:32px;font-weight:700;margin:0 0 40px;position:relative;letter-spacing:0.01em; color: #FFF;}

.trialReviews-ratings{margin:0 auto 5px; display: none;}
.trialReviews-ratings em{font-size:18px;margin:0 5px 0 0;color:#f1b400;vertical-align:top;}
.trialReviews-title{font-size:22px;font-weight:600;margin:0 0 15px;}
#trialReviews.owl-theme .owl-controls{display:block;margin:0 auto;position:absolute;left:0;right:0;top:0;height:100%;}
.owl-pagination{position:absolute;left:0;right:0;bottom:5px;}
#trialReviews.owl-theme .owl-controls .owl-page span{width:10px;height:10px;margin:3px;background:transparent;border:2px solid currentColor;transition:all 0.5s ease;}
#trialReviews.owl-theme .owl-controls .owl-page.active span,
#trialReviews.owl-theme .owl-controls.clickable .owl-page:hover span{border-color:#4965f9;transform:scale(1.4);}
#trialReviews.owl-theme .owl-controls .owl-buttons div{top:0;opacity:1;padding:0;margin:0;height:100%;font-size:0;transition:all 0.3s ease;background:transparent;line-height:100%;display:flex;align-items:center;}
#trialReviews.owl-theme .owl-controls .owl-buttons div:before{content:"";font-family:fontAwesome;font-size:20px;width:50px;height:50px;line-height:50px;background:rgba(73,101,249,.8);border-radius:50%;display:block;transition:all 0.3s ease;}
#trialReviews.owl-theme .owl-controls .owl-buttons div.owl-prev{left:-20px;}
#trialReviews.owl-theme .owl-controls .owl-buttons div.owl-next{right:-20px;}
#trialReviews.owl-theme .owl-controls .owl-buttons div.owl-prev:before{content:"\f060";transform:scale(0) translateX(50px);}
#trialReviews.owl-theme .owl-controls .owl-buttons div.owl-prev:hover:before{transform:scale(1) translateX(0px);}
#trialReviews.owl-theme .owl-controls .owl-buttons div.owl-next:before{content:"\f061";transform:scale(0) translateX(-50px);}
#trialReviews.owl-theme .owl-controls .owl-buttons div.owl-next:hover:before{transform:scale(1) translateX(0px);}
p.trialReviews-text{
	margin: 0;
	font-size: 22px;
	font-weight: 400;
	line-height: 1.6;
	color: #5a5e65;
}
.trialReviews-user{
    font-size: 18px;
    font-weight: 600;
    line-height: 1;
    margin: 30px 0 0;
    display: flex;
    flex-flow: row;
    justify-content: flex-start;
    align-items: center;
    text-align: left;
}
.trialReviewsTxt{font-size:18px;margin:0; position: relative;}
.trialReviewsTxt:before {    
	content: "";
    width: 40px;
    height: 4px;
    background: #ffc252;
    display: block;
    margin: 0 0 15px;
    border-radius: 10px;
    overflow: hidden;
}
.trialReviewsTxt h4{
    font-size: 22px;
    font-weight: 600;
    line-height: 1.2em;
    position: relative;
}
.trialReviewsTxt span {
    display: block;
    font-size: 16px;
    line-height: 1.2;
    margin: 10px 0 0;
    color: #a8aab7;
    font-weight: 400;
    letter-spacing: 0.01em;
}
.trialReviewsTxt span a {
    color: #a8aab7;
    transition: color 0.3s ease;
}
.trialReviewsTxt span a:hover,
.trialReviewsTxt span a:focus {
    color: #333;
}
.tiralReviewsImg{width:80px;margin:0 20px 0;}
.tiralReviewsImg .trI{width:80px;height:80px;background:url(https://www.ezeeabsolute.com/images/icons/freetrial-sprite.png) no-repeat -578px -1052px;display:block;border-radius:50%;}
.tiralReviewsImg .trI.trI-capterra{background-position:-280px -704px;border-radius:0;}
.tiralReviewsImg .trI.trI-googlereview{background-position:-378px -704px;}


.fblIntegration {
	position: relative;
	z-index: 1;
    padding: 40px 0 60px;
}
.fblIntegration:after {
    content: "";
    position: absolute;
    left: -280px;
    top: 0;
    width: 500px;
    height: 500px;
    border-radius: 0 50px;
    transform-origin: center;
    transform: rotate(45deg) scale(1.3);
    overflow: hidden;
    background: #4965f9;
    background: -moz-linear-gradient(to right, #3e55cc 40%, #3ea1d0 100%);
    background: -webkit-linear-gradient(to right, #3e55cc 40%, #3ea1d0 100%);
    background: linear-gradient(to right, #3e55cc 40%, #3ea1d0 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#3e55cc', endColorstr='#4eb1e0', GradientType=0);
    z-index: -1;
}
.fblIntegrationInner {
    display: flex;
    flex-direction: row-reverse;
    align-items: center;
    flex-wrap: wrap;
}
.fblIntegrationImg {
    margin-left: 50px;
	width: calc(30% - 50px);
}
.fblIntegrationContent {
    background: #FFF;
    padding: 30px;
    box-shadow: 0px 9px 40px -4px rgb(0 0 0 / 10%);
    border-radius: 10px;
    width: 70%;
}
.fblIntegrationContent h2 {
    font-size: 30px;
    font-weight: 700;
}
.fblIntegrationContent p {
    font-size: 16px;
    line-height: 2;
    margin: 0 0 15px;
}
.fblIntegrationContent p:last-child {
	margin-bottom: 0;
}
.fblBtnOuter {
	margin: 30px 0 0;
}
.fblBtnOuter .btn {
	font-size: 16px;
	font-weight: 600;
	padding: 12px 20px;
}
.fblBtnOuter .btn.btn-secondary {
    border: 1px solid #cbcbda;
    background: #FFF;
    box-shadow: none;
    color: #4965f9;
}
.fblBtnOuter .btn.btn-secondary:hover,
.fblBtnOuter .btn.btn-secondary:focus {
	color: #4965f9;
	box-shadow: 0px 2px 5px rgb(0 0 0 / 15%);
}
.fblBtnOuter .btn:not(:last-of-type) {
	margin: 0 10px 0 0;
}
.fblBenefits {
    padding: 60px 0;
}
.fblBenefitsHead {
    margin: 0 auto 40px;
    width: 80%;
    text-align: center;
}
.fblBenefitsHead h2 {
    margin: 0 0 10px;
    text-align: center;
    font-size: 32px;
    font-weight: 700;
}
.fblBenefitsHead p {
    margin: 0;
    font-size: 16px;
}
.fblBenefitsBtm {
    font-size: 16px;
    margin: 40px auto 0;
    width: 80%;
}
.fblBenefitsOuter {
	margin: 0 auto;
	text-align: center;
}
.fblBenefitsInner {
    display: flex;
    flex-wrap: wrap;
    margin: 30px auto;
}
.fblBenefitsBox {
	width: calc(33.33% - 40px);
	background: #FFF;
	color: #333;
	padding: 20px;
	margin: 20px;
	border-radius: 6px;
	display: flex;
	flex-wrap: wrap;
	flex-flow: row;
	align-items: center;
	text-align: center;
	flex-direction: column;
	border: 1px solid #efefef;
	box-shadow: 0px 5px 10px -2px rgb(0 0 0 / 10%);
}
.fblBenefitsBoxTitle {
    margin: 0;
    font-size: 18px;
    line-height: 1.4;
    font-weight: 600;
}
.fblBenefitsBoxImg {
	max-width: 100%;
	max-height: 100px;
	margin: 0 auto 20px;
	text-align: center;
}
.fblHow {
	position: relative;
    padding: 80px 0;
	background: #f5f7f9;
	background: -moz-linear-gradient(top,  #f5f7f9 0%, #ffffff 20%);
	background: -webkit-linear-gradient(top,  #f5f7f9 0%,#ffffff 20%);
	background: linear-gradient(to bottom,  #f5f7f9 0%,#ffffff 20%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f5f7f9', endColorstr='#ffffff',GradientType=0 );
	background: #FFF;
}
.fblHowInner {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    flex-direction: column;
    text-align: center;
}
.fblHowContent {
    width: 80%;
    margin: 0 auto;
}
.fblHowImg {
	width: 80%;
	margin: 60px auto 0;
	text-align: center;
}
.fblHowImg img.fblHowImage {
	max-width: 100%;
}
.fblHowImg #fblslides .owl-wrapper-outer {
    box-shadow: 0 3px 6px 0px rgb(0 0 0 / 10%);
    background: #FFF;
    border-radius: 10px;
}
.fblHowImg .owl-pagination {
	position: relative;
	bottom: 0;
}
.fblHowImg #fblslides .owl-controls .owl-buttons div{top:0;opacity:1;padding:0;margin:0;height:100%;font-size:0;transition:all 0.3s ease;background:transparent;line-height:100%;display:flex;align-items:center;}
.fblHowImg #fblslides .owl-controls .owl-buttons div:before{content:"";font-family:fontAwesome;font-size:20px;width:50px;height:50px;line-height:50px;background:rgba(73,101,249,.8);border-radius:50%;display:block;transition:all 0.3s ease;}
.fblHowImg #fblslides .owl-controls .owl-buttons div.owl-prev{left:-20px;}
.fblHowImg #fblslides .owl-controls .owl-buttons div.owl-next{right:-20px;}
.fblHowImg #fblslides .owl-controls .owl-buttons div.owl-prev:before{content:"\f060";transform:scale(0) translateX(50px);}
.fblHowImg #fblslides .owl-controls .owl-buttons div.owl-prev:hover:before{transform:scale(1) translateX(0px);}
.fblHowImg #fblslides .owl-controls .owl-buttons div.owl-next:before{content:"\f061";transform:scale(0) translateX(-50px);}
.fblHowImg #fblslides .owl-controls .owl-buttons div.owl-next:hover:before{transform:scale(1) translateX(0px);}
.fblslidesImgTxt {
    background: #383d54;
    background: #1aaa42;
    color: #FFF;
    position: absolute;
    width: 50%;
    left: 0;
    top: 10px;
    padding: 10px 20px;
    font-size: 18px;
    font-weight: 600;
    line-height: 1.6;
    border-radius: 0 6px 6px 0;
    text-align: left;
    box-shadow: 0px 5px 13px -2px rgb(0 0 0 / 30%);
}
.fblHowImg #fblslides .owl-wrapper-outer img {
    max-height: 600px;
}


.fblHowContent h2 {
    font-size: 32px;
    font-weight: 700;
    line-height: 1.2;
}
.fblHowContent p {
    font-size: 16px;
    line-height: 1.8;
}
.fblHowContent .btn {
	font-size: 16px;
	font-weight: 600;
	padding: 12px 20px;
	margin: 15px 0 0;
}
.fblprocess {
    padding: 80px 0;
}
.fblprocessHead {
	width: 80%;
	margin: 0 auto 60px;
    text-align: center;
}
.fblprocessHead h2 {
    font-size: 32px;
    font-weight: 700;
    margin: 0 auto 20px;
}
.fblprocessHead p {
    margin: 0;
    font-size: 16px;
    line-height: 1.8;
}
.fblprocessInner ul {
	width: 60%;
    list-style: none;
    margin: 0 auto;
    padding: 0;
    max-width: fit-content;
}
.fblprocessInner ul li {
    font-size: 18px;
    font-weight: 400;
    line-height: 1.6;
    margin: 0 0 30px;
    position: relative;
    padding: 0 0 0 80px;
}
.fblprocessInner ul li a {
    color: #333;
    box-shadow: 0 1px 0 #333;
    transition: all 0.3s ease;
}
.fblprocessInner ul li a:hover {
    color: #4965F9;
    box-shadow: 0 1px 0 #4965F9;
}
.fblprocessInner ul li:last-child {
	margin-bottom: 0;
}
.fblprocessInner ul li strong {
    position: absolute;
    left: 0;
    top: 2px;
    background: #10cea1;
    padding: 3px 8px;
    font-size: 14px;
    color: #FFF;
    border-radius: 4px;
}
.fblprocessInner ul li strong:after {
    content: "";
    width: 0;
    height: 0;
    border-left: 10px solid #10cea1;
    border-top: 14px solid transparent;
    border-bottom: 14px solid transparent;
    position: absolute;
    right: -9px;
    top: 0;
    z-index: 1;
    display: block;
}
.fblctaFaqInner {
    text-align: center;
    margin: 0 auto 80px;
    width: 60%;
    background: #FFF;
    box-shadow: 0 10px 20px 0px rgb(0 0 0 / 10%);
    padding: 40px;
}
.fblctaFaq h2 {
    font-size: 30px;
    font-weight: 600;
    margin: 0 auto 20px;
}
.fblctaFaq p {
    font-size: 16px;
    margin: 0;
}
.fblctaFaqBtn {
    margin: 30px auto 0;
}
.fblctaFaqBtn .btn {
	font-weight: 600px;
}
.fblFooter {
    padding: 15px 0;
    background: #efefef;
    text-align: center;
    border-top: 1px solid #e6e6e6;
}
.fblBEsection {
    padding: 60px 0;
    background: #4965f9;
    background: -moz-linear-gradient(left,#4965f9 0%,#4eb1e0 100%);
    background: -webkit-linear-gradient(left,#4965f9 0%,#4eb1e0 100%);
    background: linear-gradient(to right,#4965f9 0%,#4eb1e0 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#4965f9',endColorstr='#4eb1e0',GradientType=1);
    color: #FFF;
}
.fblBEsectionInner {

}
.fblBEsectionContentImg {
    width: 40%;
    text-align: right;
}
.fblBEsectionContentImg img {
    max-width: 100%;
    max-height: 350px;
}
.fblBEsectionContent {
	text-align: center;
}
.fblBEsectionContent h2 {
    font-size: 36px;
    font-weight: 700;
    line-height: 1.2;
    margin: 0 0 20px;
}
.fblBEsectionContent p {
    font-size: 18px;
    line-height: 1.6;
    margin: 0 0 20px;
}
.fblBEsectionContent p strong {
    color: #ff0;
}
.fblBEsectionContent p.fblBEsectionNote {
    font-size: 13px;
    line-height: 1.4;
    font-style: italic;
    letter-spacing: 0.02em;
    margin: 0 auto;
    width: 40%;
}
.fblBEsectionContent .btn {
	margin: 30px 0 20px;
	font-weight: 600;
}
.fblFaqsection {
    padding: 60px 0;
}
.fblFaqsectionHead {
    text-align: center;
    margin: 0 auto 80px;
}
.faqCat-title {
	font-size: 24px;
	font-weight: 600;
}
.fblFaqsectionHead h2 {
    font-size: 36px;
    font-weight: 700;
    margin: 0 0 10px;
}
.fblFaqsectionHead p {
    margin: 0;
    font-size: 16px;
}
.typed-cursor {
	color: #333;
	opacity: 1;
	animation: blink .7s infinite;
}
.fblContact {
    position: relative;
    margin: 20px 0 0;
    font-size: 16px;
    font-weight: 600;
    line-height: 1.6;
    letter-spacing: 0.03em;

}
.fblContact:before {
    content: "";
    width: 24px;
    height: 24px;
    display: inline-block;
    background: url(../images/icons/whatsapp-icon.png) no-repeat 0 0;
    background-size: cover;
    vertical-align: top;
}
.fblContact a {
	color: #333;
	text-decoration: none;
	transition: all 0.3s ease;
}
.fblContact a:hover,
.fblContact a:focus {
	color: #4965F9;
	text-decoration: none;
}







/* Media query */
@media(min-width:1400px) {
    .fblHerosectionPattern { right: -270px; }
}
@media(min-width:1600px) {
    .fblHerosectionPattern { right: -300px; }
    #header-section { max-width: 1400px; margin-left: auto; margin-right: auto; }
}
/* End: 1600 */


@media(max-width:1200px) {


}
/* End: 1200 */

@media(max-width:1199px) {
	.fblHeroTitle {font-size: 34px; margin-top: 130px;}
	.fblIntegrationImg img {max-width: 100%;}
	.fblHeroSubtitle { font-size: 20px; }
    .fblFeatureHeadsection { margin: 80px 0 40px; }
    .fblFHMedia { width: 400px; }
    .fblFHContent { width: calc(100% - 450px); }
    .clFeaturebox.clFeaturebox1 { padding-top: 40px; }
    .fblFeatureHeadsection h2 { font-size: 30px; }
    .fblFeatureHeadsection p { font-size: 15px; }
    .fblHerosectionPattern { right: -220px; }
    .covidInner { width: 90%; }
    .fblHerosection { padding-bottom: 0; }
    .clFeatureboxInner:after { transform: scale(0.6, 0.5); bottom: -20%; }
    .clFeaturebox:nth-of-type(even) .clFeatureboxInner:after { transform: scale(0.6, -0.5); }
    .fblctaSection h2 span { font-size: 32px; }
    .fblctaButton { margin-left: 30px; }
    .ResourceBox { width: calc(50% - 10px); margin: 0 0 10px 10px; }
    .ResourceBox:nth-of-type(2n+1) { margin-left: 0; }
    .clProductbox:nth-of-type(3n+1) { margin-left: 0; }
    .clProductbox { margin-left: 30px; }
    .clProductbox a { padding: 80px 30px 30px; flex-direction: column; justify-content: center; }
    .clProductImg { left: 0; right: 0; margin: 0 auto; top: -40px; }
    .clProductTitle { text-align: center; }
    .clProductHead { margin-bottom: 80px; }
    .fblHeroSubtitle:after {transform: scale(0.6);bottom: -50px;right: -150px;}
    .clOtherctaContent { width: 60%; }
    .clOtherctaContent h2 { font-size: 28px; }
    .fblBenefitsHead,
    .fblHowContent,
    .fblprocessHead { width: 100%; }
    #trialReviews {width: 100%;}
    p.trialReviews-text {font-size: 20px;}
    .trialReviewsTxt h4 {font-size: 20px;}
    .fblTestiStats {font-size: 18px;}
    .fblprocessInner ul {width: 70%;}
    .fblBEsectionContent p.fblBEsectionNote { width: 60%; }
    .fblBEsectionContent h2,
    .fblFaqsectionHead h2,
    .fblprocessHead h2 {font-size: 30px;}
    .fblFaqsectionHead {margin-bottom: 60px;}
    .fblHowImg {width: 100%;}
    .fblIntegration {padding: 60px 0 60px;}
    .fblHow {padding: 60px 0;}


}
/* End: 1199 */
@media(max-width:991px) {
	.fblHerosectionPattern { top: auto; transform: rotate(80deg) scale(1.3); bottom: -15%; width: 35%; height: 90%; right: 0; left: 0; margin: 0 auto; border-radius: 50px; opacity: 0.8;}
    .fblHerosection { padding: 20px 0 0px; min-height: initial; }
    .fblHeroTitle { margin-top: 20px; }
    .clFeatureboxInner, .clFeaturebox:nth-of-type(even) .clFeatureboxInner { flex-direction: column; padding: 0; }
    .clFeatureImg { margin: 0 auto 50px; }
    .clFeatureContent { width: 90%; }
    .clFeatureboxInner:after, .clFeaturebox:nth-of-type(even) .clFeatureboxInner:after { display: none; }
    .fblctaInner { flex-direction: column; }
    .fblctaButton { width: initial; margin: 30px auto 0; text-align: center; }
    .fblctaSection h2 { text-align: center; font-size: 22px; }
    .fblctaSection h2 span { font-size: 30px; }
    .fblHerosectionInner { flex-direction: column; }
    .fblHeroContent { width: 92%; margin: 0 auto; text-align: center; }
    .fblLogo, .fblLogo:hover, .fblLogo:active, .fblLogo:focus { position: relative; margin: 0 auto 30px; }
    .fblHeroFormsection { margin: 60px auto 0; }
    #topnav .header-logo { color: #FFF; }
    #topnav .header-logo small { color: #98dcff; }
    .clFeaturebox:nth-of-type(even) .clFeatureboxInner:before, .clFeatureboxInner:before { content: ""; position: absolute; left: 0; right: 0; width: 100px; height: 2px; background: #10cea1; bottom: -40px; margin: 0 auto; display: block; transform: translateX(10px); opacity: 0.5; }
    .clFeaturebox:nth-of-type(even) .clFeatureboxInner:after, .clFeatureboxInner:after { left: 0; right: 0; width: 100px; height: 2px; background: #ffc252; bottom: -35px; margin: 0 auto; display: block; transform: scaleY(1) scaleX(1) translateX(-10px); opacity: 0.5; }
    .clFeaturebox.clFeaturebox6 .clFeatureboxInner:before { display: none; }
    .clFeaturebox:nth-of-type(even) .clFeatureImg, .clFeatureImg { width: initial; margin: 0 auto 30px; text-align: center; }
    .clFeaturebox { padding: 40px 0; }
    .covidSection { border-top: 1px solid #f3f3f3; padding: 40px 0 45px; }
    .covidInner { width: 100%; margin: 0; background: none; box-shadow: none; padding: 0; }
    .clFeaturebox.clFeaturebox6 .clstepList { margin-bottom: 0; }
    .clProductbox:nth-of-type(3n+1) { margin-left: auto; margin-top: 0; }
    .clProductbox { margin: 80px auto 0; width: 100%; max-width: 320px; }
    .clProductsInner { flex-direction: column; }
    .fblFeatureHeadsection { margin: 60px 0 0; background: #FFF;}
    .fblFHInner { flex-direction: column; }
    .fblFHMedia { width: 480px; margin: 0 auto 0; }
    .fblFHContent { width: 100%; text-align: center; padding: 0; margin: -30px 0 40px; }
    .fblHeroSubtitle:after { display: none; }
    .clOtherctaInner { flex-direction: column; }
    .clOtherctaImg { width: initial; margin: 0 auto 30px; }
    .clOtherctaContent { width: initial; margin: 0 15px; text-align: center; }
    .clOthercta { padding: 40px 0 50px; }
    /*.fblHeroTitle span {display: block;}*/
    .fblHeroText { width: 70%; margin: 20px auto 0; }
    .fblIntegrationInner {background: #FFF; box-shadow: 0px 9px 40px -4px rgb(0 0 0 / 10%); border-radius: 10px; padding: 40px;}
    .fblIntegrationImg {width: 100%; margin: 0 auto 50px; text-align: center;}
    .fblIntegrationContent { padding: 0; box-shadow: none; border-radius: initial; width: 100%;}
    .fblBenefitsHead h2,
    .fblHowContent h2 {font-size: 30px;}
    .fblBenefitsBox {margin: 10px; width: calc(33.33% - 20px);}
    .fblBenefitsBtm {width: 100%; margin-top: 30px;}
    .fblBenefitsHead h2 {font-size: 28px;}
    .fblHow {padding: 60px 0;}
    .fblprocessInner ul {width: 90%;}
    .fblBEsectionContent p.fblBEsectionNote {width: 100%;}
    .fblContact {font-size: 14px; margin: 20px auto 0; max-width: fit-content;}
    .fblIntegration {z-index: initial; padding: 40px 0 40px;}


}
/* End: 991 */


@media(max-width:767px) {
    .fblHeroTitle { font-size: 34px; margin:20px 0 20px; }
    .fblHeroSubtitle { font-size: 20px; }
    .fblFeatureHeadsection h2 { font-size: 26px; }
    .clFeatureTitle { font-size: 26px; }
    .clstepLabel { font-size: 20px; }
    .Resourcehead h2 { font-size: 26px; }
    .Resourcesection { padding: 50px 0; }
    .fblctaSection { padding: 30px 0 35px; }
    .clProductHead h2 { font-size: 26px; }
    .clProducts { padding: 50px 0; }
    .clProductTitle span { margin-top: 8px; }
    .clOtherctaImg img { max-height: 250px; }
    .fblHeroContent { width: 100%; }
    .fblIntegration {padding: 60px 0 20px;}
    .fblBenefitsBox { margin: 15px; width: 100%; }
    .fblBenefitsHead h2, 
    .fblHowContent h2 {line-height: 1.4; font-size: 28px;}
    .trialReviewsContent { width: 100%; text-align: center; }
    .trialReviewsImage {margin: 40px auto 0; width: auto;}
    .trialReviews h2 {line-height: 1.3;}
    #trialReviews {padding: 30px 30px 50px;}
    .trialReviewsTxt { margin: 0 auto; }
    .trialReviewsTxt:before {margin: 0 auto 15px;}
    .trialReviewsTxt h4 {font-size: 20px; text-align: center;}
    .trialReviews-block,
    #trialReviews.owl-carousel .owl-item,
    #trialReviews.owl-carousel .owl-wrapper,
    #trialReviews.owl-carousel .owl-wrapper-outer {max-height: initial;}
    p.trialReviews-text {font-size: 17px;}
    .trialReviews h2 {font-size: 28px;}
    .trialReviews {padding: 40px 0 60px;}
    .fblprocess {padding: 60px 0;}
    .fblBEsectionContent h2, .fblFaqsectionHead h2, .fblprocessHead h2 {font-size: 28px;}
    .fblprocessInner ul {width: 100%;}
    .fblIntegrationImg img {max-height: 200px;}
    .fblIntegrationImg {margin-bottom: 30px;}
    .fblIntegrationContent h2 {font-size: 26px;}
    .fblIntegration:after {display: none;}
    .fblIntegration {background: #f5f7f9; padding: 40px 0 60px;}
    .fblIntegrationInner {padding: 0 10px; background: none; box-shadow: none;}
    .fblIntegrationContent {background: none;}
    .fblFHMedia.fblFHMediaImg {width: 100%;}
    .fblHow {padding: 40px 0; background: #FFF;}



}
/* End: 767 */


@media(max-width:640px) {
    .fblHeroSubtitle { font-size: 20px; }
    .fblFeatureHeadsection h2 { font-size: 24px; }
    .clFeatureTitle { font-size: 24px; }
    .clstepList li { line-height: 1.6em; }
    .covidContent p { font-size: 15px; }
    .fblctaSection { padding: 30px 0 40px; }
    .fblHerosection { padding-bottom: 20px; }
    .fblHeroContent { width: 100%; }
    .clOtherctaContent h2 {font-size: 24px;}
    .fblFeatureHeadsection {margin-top: 40px;}
    .fblIntegration {padding: 40px 0;}
    .fblBenefitsHead h2, .fblHowContent h2 {font-size: 24px;}
    .fblBEsectionContent h2, .fblFaqsectionHead h2, .fblprocessHead h2 {font-size: 26px;}



}
/* End: 640 */

@media(max-width:580px) {
    .fblHeroTitle { font-size: 26px; }
    .fblHeroSubtitle { font-size: 18px;}
    .fblHeroFormsection { width: 100%; max-width: 400px; }
    .fblctaSection h2 { font-size: 20px; }
    .fblctaSection h2 span { font-size: 28px; }
    .Resourcehead h2 { font-size: 24px; }
    .ResourceBox { width: 100%; margin: 20px 0 0; }
    .ResourceBox:nth-of-type(1) { margin-top: 0; }
    .fblHerosectionPattern { width: 65%; }
    .fblFHMedia { width: 90%; }
    .fblFeatureHeadsection {margin-top: 40px;}
    .clOtherctaContent h2 { font-size: 22px; }
    .clOtherctaContent p { font-size: 15px; line-height: 1.8; }
    .clOtherctaContent { margin: 0 10px; }
    .clOtherctaContent .btn { border-radius: 6px; padding: 14px 20px; }
    .clOtherctaImg img { max-height: 180px; }
    .fblHeroText {width: 90%;}
    .fblIntegrationContent {text-align: center;}
    .fblBtnOuter .btn {display: block;}
    .fblBtnOuter .btn:not(:last-of-type) {margin: 0 0 15px;}
    .fblBenefits {padding: 40px 0;}
    .fblBEsectionContent h2 {font-size: 26px;}
    .fblFaqsectionHead h2, .fblprocessHead h2 {font-size: 24px;}
    .fblprocess {padding: 40px 0;}
    .fblprocessInner ul li {font-size: 16px;}
    .fblBEsection {padding: 40px 0;}
    .fblBEsectionContent .btn {margin: 20px 0 20px;}
    .fblBEsectionContent p {font-size: 15px;}
    .fblFaqsection {padding: 40px 0;}
    .faqque {font-size: 16px;}
    



}
/* End: 580 */


@media(max-width:479px) {
    .fblHeroTitle { font-size: 25px; line-height: 1.5em; }
    .fblHeroSubtitle { font-size: 15px; line-height: 1.4; }
    .fblHerosection { padding-bottom: 30px; }
    .clFeatureTitle { font-size: 22px; }
    .clstepLabel { font-size: 16px; }
    .covidContent h2 { font-size: 22px; }
    .fblctaSection h2 { font-size: 24px; font-weight: 600; }
    .fblctaSection h2 span { font-size: inherit; display: inline; }
    .clstepList li { margin-top: 10px; }
    .clBtnouter .btn { padding: 10px 15px; line-height: 1.4; }
    .fblctaSection h2 { letter-spacing: normal; }
    .clFeatureContent { width: initial; margin: 0 10px; }
    .clFeaturebox:nth-of-type(even) .clFeatureImg, .clFeatureImg { margin: 0 10px 30px; }
    .Resourcehead h2 { font-size: 22px; }
    .Resourcehead p { font-size: 14px; margin-top: 10px; }
    .Resourcesection { padding: 30px 0; }
    .ResourceBtnouter { margin-top: 30px; }
    .clProductBtnouter .btn { padding: 15px; }
    .fblFHMedia { width: 100%; padding: 6px; }
    .fblFHMedia iframe {border-radius: 3px;}
    .fblFHContent { width: 100%; }
    .fblFeatureHeadsection h2 { font-size: 22px; }
    .generalForm .hs-submit .hs-button {font-size: 15px;}
    .fblFeatureHeadsection {margin-top: 20px;}
    .clOthercta { padding: 30px 0 40px; }
    .fblHeroTitle span {display: inline-block;}
    .fblHeroText {width: 100%; font-size: 13px; padding: 5px;}
    .fblFHContent {margin: 0 0 30px;}
    .fblIntegrationContent {text-align: center;}
    .fblBtnOuter .btn {display: block;}
    .fblBenefitsBox {margin: 15px 5px;}
    .fblHow {padding: 40px 0;}
    .fblHowImg {margin-top: 40px;}
    .trialReviews h2 {font-size: 24px;}
    #trialReviews {padding: 20px 20px 50px;}
    .fblFaqsectionHead {margin-bottom: 40px;}


}
/* End: 479 */

@media(max-width:360px) {
	.fblFHMedia iframe {border-radius: 3px; height: 180px;}
	.fblFeatureHeadsection h2 { font-size: 20px; }
	.fblHeroFormTitle {font-size: 16px;}
}
@media(max-width:349px) {
    .generalForm .hs-submit .hs-button { font-size: 14px; font-weight: 700; padding: 12px 5px; }
    .fblHeroFormsection { padding: 30px 20px; }
    .fblHeroFormTitle { margin: -30px -20px 30px; }
    .clOtherctaContent h2 { font-size: 20px; }
    .clOtherctaContent .btn { font-size: 15px; padding: 14px; }
    .fblIntegrationContent h2 {font-size: 24px;}
    .fblIntegrationInner {padding: 0;}
    .fblBenefitsHead {margin-bottom: 30px;}

}

/* End: 349 */
@media(max-width:320px) {
    .fblHeroTitle { font-size: 22px; }
    
}

</style>

<script src="<?php echo $servername?>js/typed.min.js"></script>
<script>
$(function(){
	if($("section").hasClass("fblMain")){
		$("body").addClass("fblBody");
		$("#topBar").hide();

	}

	$('.claimbtn').on('click', function(event){
	    event.preventDefault();
	    $('html, body').animate({
	        scrollTop: $( $.attr(this, 'href') ).offset().top - 170
	    }, 500);
	});

	/* typed script */
    $(".typed").typed({
        strings: [
            "Direct Bookings",
            "Visibility",
            "Revenue"
        ],
        loop: "infinite",
        typeSpeed: 50,
        backDelay: 2000
    });

	// Testimonials
	$('#trialReviews').owlCarousel({
	    autoPlay : 9000,
	    items: 1,
	    navigation: true,
	    singleItem: true
	 });


    $('#fblslides').owlCarousel({
		autoPlay : 7000,
		lazyLoad: true,
		items: 1,
	    navigation: true,
	    singleItem: true
	});

	// FAQ
	$('.faqque').on('click', function(){
        $(this).next('.faqans').toggle();
        $(this).parents('li').toggleClass('shdw-more');
    });

    $('.quecat a').on('click', function(){
        var faqTitle = $(this).text();
        $('.faqCat-title').text(faqTitle);
    });
    
    $('.faqcatwise').find('li').hide();
    $('.faqcatwise').find('li[data-faq="cat1"]').show();
    $('.quecat').find('a').each(function(){
        $(this).on('click', function(){
            $('.quecat').find('a').removeClass('fselected');
            $(this).addClass('fselected');
            var ccat = $(this).attr('data-cat');
            if(ccat == "all"){
                $('.faqcatwise').find('li').show();
            }else{
                $('.faqcatwise').find('li').hide();
                $('.faqcatwise').find('li[data-faq='+ccat+']').show();
            }
        });
    });
	
});
$(window).load(function() {
    createCookie('absexitpopup','clicked',3);
    createCookie('abstopBar','clicked',30);
});
</script>