<?php
/**
 * Template Name: Careers Page
 *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/
 *
 * @package awps
 */

get_header();

$careersInfo  = array();
$careersInfo['copy'] = get_field("copy");
$careersInfo = get_categories($args_cat);


$careersInfo['title'] = get_field("careers_title");
$careersInfo['review_text'] = get_field("careers_text");
$careersInfo['careers_author'] = get_field("author");
$careersInfo['careers'] = Timber::get_posts($args);
$careersInfo['careers_link'] = get_field("careers_link");
$careersInfo['careers_location'] = get_field("careers_location");
$careersInfo['careerForm'] =  '[contact-form-7 id="8232" title="Careers Form Main"]';

?>

<header id="careers-header" class="a">
  <div class="container">
    <div class="inner">
      <div class="careersText">
        <p><?php echo get_field("copy");?></p>
        <span class="jobpopupbtn">Apply Now</span>
      </div>
    </div>
    <div class="form-wrapper">
        <div id="post-career">
        <h2>Plumbing</h2>
            <div class="inner-post">  
                <?php $args = array(
                    'post_type' => 'careers',
                    'category_name' => 'plumbing-careers',
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'order' => 'DESC',
                );
                $loop = new WP_Query( $args );
                ?>   
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <div class="career-post">
                        <h4><?php echo get_field("careers_title");?></h4>
                        <hr>
                        <div class="careerText">
                            <p class="careerLocation">Location: <?php echo get_field("careers_location");?></p>
                            <p>We are looking for an experienced <?php echo get_field("careers_title");?> to join our team.</p>
                        </div>
                        <a href="<?php echo get_field("careers_link");?>" class="careerLink">Read More</a>
                    </div>
                <?php endwhile;?>
            </div>
        </div>

        <div id="post-career">
        <h2>HVAC</h2>
            <div class="inner-post">  
                <?php $args = array(
                    'post_type' => 'careers',
                    'category_name' => 'hvac-careers',
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'order' => 'DESC',
                );
                $loop = new WP_Query( $args );
                ?>   
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <div class="career-post">
                        <h4><?php echo get_field("careers_title");?></h4>
                        <hr>
                        <div class="careerText">
                            <p class="careerLocation">Location: <?php echo get_field("careers_location");?></p>
                            <p>We are looking for an experienced <?php echo get_field("careers_title");?> to join our team.</p>
                        </div>
                        <a href="<?php echo get_field("careers_link");?>" class="careerLink">Read More</a>
                    </div>
                <?php endwhile;?>
            </div>
        </div>

        <div id="post-career">
        <h2>Electrical</h2>
            <div class="inner-post">  
                <?php $args = array(
                    'post_type' => 'careers',
                    'category_name' => 'electrical-careers',
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'order' => 'DESC',
                );
                $loop = new WP_Query( $args );
                ?>   
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <div class="career-post">
                        <h4><?php echo get_field("careers_title");?></h4>
                        <hr>
                        <div class="careerText">
                            <p class="careerLocation">Location: <?php echo get_field("careers_location");?></p>
                            <p>We are looking for an experienced <?php echo get_field("careers_title");?> to join our team.</p>
                        </div>
                        <a href="<?php echo get_field("careers_link");?>" class="careerLink">Read More</a>
                    </div>
                <?php endwhile;?>
            </div>
        </div>
        <div id="post-career">
        <h2>Customer Service</h2>
            <div class="inner-post">  
                <?php $args = array(
                    'post_type' => 'careers',
                    'category_name' => 'customer-service-careers',
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'order' => 'DESC',
                );
                $loop = new WP_Query( $args );
                ?>   
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <div class="career-post">
                        <h4><?php echo get_field("careers_title");?></h4>
                        <hr>
                        <div class="careerText">
                            <p class="careerLocation">Location: <?php echo get_field("careers_location");?></p>
                            <p>We are looking for an experienced <?php echo get_field("careers_title");?> to join our team.</p>
                        </div>
                        <a href="<?php echo get_field("careers_link");?>" class="careerLink">Read More</a>
                    </div>
                <?php endwhile;?>
            </div>
        </div>
    </div>
    <div class="popup-job-form">
        <span class="close-job-form"><i class="fas fa-times-circle" aria-hidden="true"></i></span>
        <h2>Apply Now:</h2>
        <?php echo do_shortcode("[contact-form-7 id='5948' title='Careers Form Main']"); ?>
    </div>
  </div>
</header>

<?php get_footer(); ?>
