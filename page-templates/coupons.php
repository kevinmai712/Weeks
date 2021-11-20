<?php
/**
 * Template Name: Coupons Page
 *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/
 *
 * @package awps
 */

get_header();

$couponsInfo  = array();
$couponsInfo['url'] = get_template_directory_uri();
$couponsInfo['homeUrl'] = home_url();

$args = array(
    'post_type' => 'coupons_items',
    'posts_per_page' => -1,
    'orderby' => array(
        'date' => 'DESC'
    )
);


$couponsInfo['copy'] = get_field("text");
$couponsInfo['disclaimer'] = get_field("disclaimer");
$couponsInfo['coupons'] = Timber::get_posts($args);

Timber::render('./assets/src/components/couponsPage/couponsPage.twig', $couponsInfo);

 ?>

 
<?php get_footer(); ?>
