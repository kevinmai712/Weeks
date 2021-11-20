<?php
/**
 * Template Name: All Blogs
 *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/
 *
 * @package awps
 */
get_header(); ?>

<?php
    //Get featured blog
        $args = array(
        'posts_per_page' => -1,
        'post_type' => 'post',
        'orderby' => 'date',
        'order' => 'DESC'
    );
    $loop = new WP_Query( $args );
?>

<div class="container allBlogs">
    <div class="search">
    <h2>Looking for something specific?</h2>
    <?php echo get_search_form();?></div>
    <div class="innerPosts">
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="post">
                <a href="<?php echo get_post_permalink();?>">
                    <div class="postThumbnail" style="background-image: url(<?php echo get_the_post_thumbnail_url();?>)">
                        <div class="postContent">
                            <h4><?php echo the_title();?></h4>
                            <hr>
                        </div>
                    </div>
                </a>
            </div>
        <?php endwhile;?>
    </div>
</div>




<?php get_footer();?>