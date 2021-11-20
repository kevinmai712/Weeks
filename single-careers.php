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
<header id="jobs-header" class="a">
  <div class="container">
    <div class="inner">
      <div class="jobsText">
        <h2>{{job_title}}</h2>
        <span id="job_pindrop"> {{job_location}}</span> <span id="job_duration_icon">{{job_duration}}</span>
        <p>{{copy}}</p>
      </div>
    </div>
    <div class="form-wrapper">
        <h2>Apply Now</h2>
        {{ function('do_shortcode', careerForm) }}
    </div>
  </div>
</header>
<?php
get_footer();
