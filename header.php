<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package awps
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title(''); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
	<script
	src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
	integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
	crossorigin="anonymous"></script>

  	<link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
	<link rel="manifest" href="favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-118640663-1"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-118640663-1');
	</script>
	<!-- Thank You Redirect -->
	<script>
	document.addEventListener( 'wpcf7mailsent', function( event ) {
	location = 'https://weeksservicecompany.com/thank-you/';
	}, false );
	</script>

</head>

<body <?php body_class(); ?>>
<div id="page" class="site" <?php //echo ! is_customize_preview() ?: 'style="padding: 0 40px;"'; ?>>
<!-- #mainheader -->
<span class="darkoverlay"></span>
<div id="nano" class="nano"></div>

<?php
	 $menumobile = array();
	 $menumobile['menumobile'] = new Timber\Menu( 'primary' );
	 $menumobile['phone'] = '(281) 738-1362';

	 $menumobile['facebook'] = 'https://www.facebook.com/WeeksService/';
	 $menumobile['twitter'] = 'https://twitter.com/WeeksService';
	 $menumobile['instagram'] = 'https://www.instagram.com/';
	 $menumobile['linkedin'] = 'https://www.linkedin.com/';
	 $menumobile['google'] = 'https://www.google.com/';

	 $menumobile['url'] = get_template_directory_uri();

	 $menumobile['thermostaticon'] = '/assets/dist/images/icons/thermostats.png';
	 $menumobile['coolingicon'] = '/assets/dist/images/icons/cooling.png';
	 $menumobile['heatingicon'] = '/assets/dist/images/icons/heating.png';
	 $menumobile['airqualityicon'] = '/assets/dist/images/icons/air-quality.png';
	 $menumobile['darkMode'] = false;
	 //Timber::render('./assets/src/components/nav/nav_2.twig', $menumobile);
	
	 Timber::render('./assets/src/components/nav/navMobile.twig', $menumobile);

?>

<!-- HEADER COMPONENT -->
<header id="mainheader" class="site-header" role="banner">
		<?php
			//Responsive Normal Menu
				//Option 1
				$headerdetails = array();
				// Selects the primary menu through wordpress
				$headerdetails['menu'] = new Timber\Menu( 'primary' );
				// Company Phone number
				$headerdetails['phone'] = '(281) 738-1362';
				// Company Logo Image Name
				$headerdetails['logoWhite'] = 'logo.png';
				$headerdetails['logoColor'] = 'logo.png';
				// Social Urls
				$headerdetails['facebook'] = 'https://www.facebook.com/WeeksService/';
				$headerdetails['twitter'] = 'https://twitter.com/WeeksService';
				$headerdetails['instagram'] = 'https://www.instagram.com/';
				$headerdetails['linkedin'] = 'https://www.linkedin.com/';
				$headerdetails['google'] = 'https://www.google.com/';

				// Do not edit this, this is just so that we can grab the url of the site
				$headerdetails['url'] = get_template_directory_uri();
				$headerdetails['homeUrl'] = home_url();

				$headerdetails['post'] = new Timber\Post();

				$headerdetails['darkMode'] = false;
				$headerdetails['lightMode'] = true;
				$headerdetails['page_hero_image'] = get_field("page_hero_image");
				$headerdetails['careers_subheading'] = get_field("careers_subheading");
				// Pulls the content from opt(x) header
				// #1 navbar_op1.twig
							// Normal Navigation
				// #2 navbar_op2.twig
							// Hamburger Menu Navigation
				Timber::render('./assets/src/components/headers/header_a.twig', $headerdetails);
		?>
</header>
	<div id="content" class="site-content">
