<?php
/**
 * Template Name: Reviews Page
 *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/
 *
 * @package awps
 */

get_header();

$reviewsInfo  = array();
$reviewsInfo['url'] = get_template_directory_uri();
$couponsInfo['homeUrl'] = home_url();

$args = array(
    'post_type' => 'reviews',
    'posts_per_page' => -1,
    'orderby' => array(
        'date' => 'DESC'
    )
);

$reviewsInfo['intro_blurb'] = get_field("intro_blurb");

$reviewsInfo['title'] = get_field("review_title");
$reviewsInfo['review_text'] = get_field("review_text");
$reviewsInfo['review_author'] = get_field("author");
$reviewsInfo['reviews'] = Timber::get_posts($args);

Timber::render('./assets/src/components/reviewsPage/reviewsPage.twig', $reviewsInfo);

 ?>

 
<?php get_footer(); ?>
