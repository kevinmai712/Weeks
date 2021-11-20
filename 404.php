<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package awps
 */

get_header(); ?>

<div class="wrap404" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/dist/images/404.jpg)">
	<span class="number">404</span>	
<h1><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'awps' ); ?></h1>
<a href="<?php echo home_url(); ?>" class="buttonstyle">Go back home</a>
</div>


<?php
get_footer();
