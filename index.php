<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package awps
 */

get_header(); ?>
<?php
	//Get featured blog
	$args = array(
  'posts_per_page' => 1,
  'post_type' => 'post',
  'orderby' => 'date',
  'order' => 'DESC',
);
$loop = new WP_Query( $args );




?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
<div class="featuredBlogSection" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/dist/images/Blogs.jpg)">
	<div class="container">
		<div class="inner">
			<h1>Our Blogs</h1>
			<div class="featuredBlogPost">
				<h2>Latest Post</h2>
				<hr>
				<span class="postDate"><?php echo get_the_date(); ?></span>
				<h3><?php echo the_title(); ?></h3>
				<p><?php echo get_the_excerpt(); ?></p>
				<a class="postLink" href="<?php echo get_post_permalink();?>">Read More</a>
			</div>
		</div>
	</div>
</div>
<?php endwhile; ?>

<div class="container blog-container">

	<div class="">

		<div class="">

			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">
					<?php
					//Get featured blog
						$args = array(
					  'posts_per_page' => 3,
					  'post_type' => 'post',
					  'orderby' => 'date',
					  'order' => 'DESC',
					  //Featured category only
					  'cat' => 3
					);
					$loop = new WP_Query( $args );
					?>
					<div class="featuredPosts">
						<div class="featuredPostsHeader">
							<h2>Featured Posts</h2>
							<hr class="lastestPostsLine">
							
						</div>
						<div class="innerPosts">
							<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
								<div class="featuredPost">
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

					


				</main><!-- #main -->
			</div><!-- #primary -->

		</div><!-- .col- -->



	</div><!-- .row -->

</div><!-- .container -->
<div class="container recentPostsContainer">
	<div class="recentPostsInner">
		<div class="recentPostsHeader">
			<h2>Recent Posts</h2>
			<hr class="lastestPostsLine">
			<a href="<?php echo home_url(); ?>/blogs/all-blogs">View all</a>
		</div>
		<div class="recentPosts">
		<?php
		//Get featured blog
			$args = array(
			'posts_per_page' => 3,
			'post_type' => 'post',
			'orderby' => 'date',
			'order' => 'DESC'
			);
			$loop = new WP_Query( $args );
		?>

		<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
		<div class="recentPost">
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
</div>
<div class="newsletterSection" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/dist/images/Blogs-Newsletter.jpg)">
	<div class="inner container">
		<div class="leftSection">
			<h2>Subscribe now!</h2>
			<?php echo do_shortcode('[contact-form-7 id="11" title="Newsletter signup"]');?>
		</div>
		<div class="rightSection">
			<h2>Never miss a post.</h2>
			<p><?php echo the_field('newsletter_copy', 18); ?></p>
		</div>
	</div>
</div>


<?php
get_footer();
