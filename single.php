<?php


function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' Views';
}
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}

// Remove issues with prefetching adding extra views
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);




get_header(); ?>
<div id="thumbnail-background" style="background: url(<?php echo get_the_post_thumbnail_url()?>)"></div>
<div class="container single-container">
	<div class="row">
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
                <?php
                /* Start the Loop */
                while ( have_posts() ) :
                    the_post();

                    setPostViews(get_the_ID());

                    get_template_part( 'views/singlesLayout', get_post_format() );

                    the_post_navigation();
                endwhile;
                ?>
            </main><!-- #main -->
        </div><!-- #primary -->
	</div><!-- .row -->
</div><!-- .container -->
<?php
get_footer();
