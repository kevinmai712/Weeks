<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package awps
 */

?>

	</div><!-- #content -->


	<?php if( is_page( 'contact' ) || is_page( 'contact-us' ) ) : ?>
	<style>
	    /*#footer-site {
	       display: none;
	    }*/
	</style>
<?php endif; ?>

<?php
	/* REGULAR CALL TO ACTION */
	$calltoaction['url'] = get_template_directory_uri();
	$calltoaction['text'] = "Contact us today to schedule service";
	$calltoaction['background'] = $calltoaction['url'] . '/assets/dist/images/Interior-CTA.jpg';

	Timber::render('./assets/src/components/callToAction/callToAction.twig', $calltoaction);

	/* MOBILE CALL TO ACTION */
	$mobilecalltoaction['phone'] = "(281) 738-1362 ";
	Timber::render('./assets/src/components/callToAction/mobileCallToAction.twig', $mobilecalltoaction);

	/* POPUP FORM */
	$popupForm['formshortcode'] = do_shortcode('[contact-form-7 id="10" title="Schedule Service Form"]');
	$popupForm['url'] = get_template_directory_uri();
	Timber::render('./assets/src/components/popupForm/popupForm.twig', $popupForm);


?>

	<footer id="footer-site">
		<div class="container">
			<div class="inner">
				<div class="client-details">
					<img class="footer-logo" src="<?php echo get_template_directory_uri();?>/assets/dist/images/logo-white.png" alt="Weeks Service Company Logo">
					<div class="location1">
						<a href="https://www.google.com/maps/place/Weeks+Service+Company/@29.4956997,-95.0851992,17z/data=!4m13!1m7!3m6!1s0x864082c87c976fed:0x9c9bc4074b982f6c!2s1306+TX-3,+League+City,+TX+77573!3b1!8m2!3d29.495695!4d-95.0830105!3m4!1s0x0:0x9210129361a625fc!8m2!3d29.4953902!4d-95.08334" target="_blank">
						<span>1306 Hwy 3 South</span>
						<span>League City, Texas 77573</span>
						</a>
						<span class="phonenumber"><i class="fas fa-phone"></i> <a href="tel:2817381362">(281) 738-1362 </a></span>
					</div>
					<hr>
					<div class="location2">
						<span>License: TACL 109772C, RMP 43756, TECEL 17036</span>
					</div>
					
				</div>
				<div class="services">
					<h3>Menu</h3>
					<?php 
						wp_nav_menu( array( 
							'footer' => 'footer', 
							'container_class' => 'footerMenu' ) );
					?>
				</div>
				<div class="footer-hours">
					<h3>Hours</h3>
					<ul>
					<li><b>Monday-Friday</b></li>
					<li>7am - 6pm</li>
					<li><b>Saturday</b></li>
					<li>7:30am - 4pm</li>
					<li><b>Sunday</b></li>
					<li>Close</li>
				</div>
				<div class="expertise">
					<a href="https://www.expertise.com/tx/league-city/hvac#WeeksServiceCompany" target="_blank">
					<img class="footer-logo" src="<?php echo get_template_directory_uri();?>/assets/dist/images/expertise.webp" alt="">
					</a>
				</div>
			</div>
			<div class="social-icons">
				<a class="facebook-icon" href="https://www.facebook.com/WeeksService/" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a>
				<a class="twitter-icon" href="https://twitter.com/WeeksService " target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter"></i></a>
			</div>
			<div class="copyright">
				<span>© <?php echo date('Y'); ?>, Weeks Service Company, All Rights Reserved</span>
				<span>Built with <i class="fas fa-heart"></i> by <a href="https://vitalstorm.com/" target="_blank" rel="noopener noreferrer">VitalStorm.</a></span>
			</div>
		</div>
		<!-- Podium Chat -->
		<script defer src="https://connect.podium.com/widget.js#API_TOKEN=e6845730-767e-49da-807a-db13edff791d" id="podium-widget" data-api-token="e6845730-767e-49da-807a-db13edff791d"></script>
	</footer>
</div><!-- #page -->
<?php wp_footer(); ?>

<script src="https://kit.fontawesome.com/66b0a2fba7.js"></script>
</body>
</html>
