<?php
/**
 * Template Name: Front Page
 *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/
 *
 * @package awps
 */
get_header(); ?>

<!-- HERO COMPONENT -->
<?php
$herodetails['url'] = get_template_directory_uri();
// Assets
$herodetails['heroImage'] = '/assets/dist/images/Homepage-Hero.jpg';

$herodetails['heroHeader1'] = get_field('slider1')['slider_header'];
$herodetails['heroMessage1'] = get_field('slider1')['slider_text'];

$herodetails['heroHeader2'] = get_field('slider2')['slider2_header'];
$herodetails['heroMessage2'] = get_field('slider2')['slider2_text'];

$herodetails['heroHeader3'] = get_field('slider3')['slider3_header'];
$herodetails['heroMessage3'] = get_field('slider3')['slider3_text'];
Timber::render('./assets/src/components/hero/hero_A.twig', $herodetails);
?>

<!-- SCHEDULE FORM COMPONENT -->
<?php
$formdetails['url'] = get_template_directory_uri();
$formdetails['shortcode'] = do_shortcode('[contact-form-7 id="10" title="Schedule Service Form"]');

Timber::render('./assets/src/components/scheduleForm/form_A.twig', $formdetails);
?>

<?php
  $about['url'] = get_template_directory_uri();
  $about['homeUrl'] = home_url();


  //about_B info
  $about['title2'] = "Red Carpet Treatment";
  $about['description'] = get_field('about_blurb');

  $about['aboutUrl'] = $about['homeUrl'] . '/about-us';
  //icons
  $about['plumbing'] = $about['url'] . '/assets/dist/svg/plumbing.svg';
  $about['repairs'] = $about['url'] . '/assets/dist/svg/repairs.svg';
  $about['draincleaning'] = $about['url'] . '/assets/dist/svg/drain-cleaning.svg';
  $about['waterheater'] = $about['url'] . '/assets/dist/svg/water-heater.svg';



  $about['icon1url'] = $about['homeUrl'] . '/air-conditioning';
  $about['icon2url'] = $about['homeUrl'] . '/electrical';
  $about['icon3url'] = $about['homeUrl'] . '/heating';
  $about['icon4url'] = $about['homeUrl'] . '/plumbing';

  

  Timber::render('./assets/src/components/about/about_B.twig', $about);
 ?>


 <?php
  //USP Section
  $uspSection['coupon_offer'] = get_field("usp_section")['coupon_text'];
  $uspSection['coupon_service'] = get_field("usp_section")['coupon_type'];

  $uspSection['formShortcode'] = do_shortcode('[contact-form-7 id="11" title="Newsletter signup"]');

  $uspSection['uspTitle'] = get_field("usp_section")['usp_header'];
  $uspSection['uspText'] = get_field("usp_section")['usp_text'];
  $uspSection['uspLink'] = get_field("usp_section")['homepage_coupon_link'];

  Timber::render('./assets/src/components/couponSelection/couponSelection_B.twig', $uspSection);
  ?>





  <?php
    // post identification here
    $postID = 1;

    $blogSpotlight['post'] = new Timber\Post($postID);
    $blogSpotlight['svg'] =  get_template_directory_uri() . '/assets/dist/svg/shape2.svg';
    //Timber::render('./assets/src/components/blogSpotlight/blogSpotlight_A.twig', $blogSpotlight);
  ?>

  <?php
  //Map Section
  $mapSection["homeUrl"] = home_url();


  $mapSection['title'] = 'About us';
  $mapSection['text'] = get_field('map_section');

  $mapSection['map'] = 'https://www.google.com/maps/d/embed?mid=1msghPjxStv9t290TtpebYGb7esSG70Kd';

  $mapSection['serviceArea'] = $mapSection["homeUrl"] . '/service-area';
  $mapSection['background'] = get_template_directory_uri() . '/assets/dist/images/map_bg.png';


  $args = array(
  // Get post type project
  'post_type' => 'locations',
  // Get all posts
  'posts_per_page' => -1,
  // Order by post date
  'orderby' => array(
      'date' => 'DESC'
  ));

  $mapSection['locationList'] = Timber::get_posts( $args );


  Timber::render('./assets/src/components/mapSection/mapSection_A.twig', $mapSection);
  ?>

  <?php
    // post identification here
    $reviewDetails['card_1_review'] = get_field('review')['review_text'];
    $reviewDetails['card_1_Name'] = get_field('review')['review_by'];

   $reviewDetails['reviewUrl'] = '/reviews';

    $reviewDetails['background'] = get_template_directory_uri() . "/assets/dist/images/Homepage-Testimonials.jpg";

    Timber::render('./assets/src/components/reviews/reviews_B.twig', $reviewDetails);
  ?>









<?php get_footer();?>
