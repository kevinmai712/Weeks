<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package awps
 */

get_header(); ?>

<div class="container defaultPage">

	<div class="row">

		<div class="inner">

			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">

					<?php
					/* ACF GET FIELDS */
					$pageHeading = get_field("page_heading");
					$pageImage = get_field("page_image");
					$pageSubheading = get_field("page_subheading");




					?>
					<?php if($pageHeading):?>
					<div class="pageHeading">
						<?php echo $pageHeading; ?>
						<div class="scheduleBtn">
							<a href="#" class="popupbtn">Schedule Service</a>
						</div>
					</div>
					<div class="pageSubheading">
						<div class="pageImage" style='background: url(<?php echo $pageImage["url"];?>)'>
						</div>
						<div class="subheadingText">
							<?php echo $pageSubheading; ?>
						</div>

					</div>
				<?php endif; ?>

					<div class="pageContent">
						<?php
						/* Start the Loop */
						while ( have_posts() ) :
							the_post();

							get_template_part( 'views/content', 'page' );


						endwhile;

						?>
					</div>




				</main><!-- #main -->
			</div><!-- #primary -->

		</div><!-- .col- -->

		<div class="col-sm-4">
			<?php //get_sidebar(); ?>
		</div><!-- .col- -->

	</div><!-- .row -->

</div><!-- .container -->

<?php
get_footer();
