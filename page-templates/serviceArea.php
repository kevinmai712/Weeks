<?php
/**
 * Template Name: Service Area Page
 *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/
 *
 * @package awps
 */

get_header();

$serviceAreaInfo  = array();
$serviceAreaInfo["copy"] = get_field("intro_blurb");
$serviceAreaInfo["repeater"] = get_field('service_area_locations'); 
$serviceAreaInfo["map"] = 'https://www.google.com/maps/d/embed?mid=1msghPjxStv9t290TtpebYGb7esSG70Kd'; 


Timber::render('./assets/src/components/serviceArea/serviceArea.twig', $serviceAreaInfo);

?>


<?php get_footer(); ?>
