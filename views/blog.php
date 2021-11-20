<?php
/**
 * Template part for displaying content
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package awps
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-meta">
		<?php
		Awps\Core\Tags::posted_on();
		?>
	</div><!-- .entry-meta -->
	<div class="thumbnail">
		<img src="<?php echo get_the_post_thumbnail_url()?> " alt="post-<?php the_ID(); ?> thumbnail">
	</div>
	<header class="entry-header">
		<?php
			if ( is_single() ) :
				the_title( '<h1 class="blog-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;

			if ( 'post' === get_post_type() ) :
		?>
		<?php
			endif;
		?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		$content = get_the_content();
		$content = strip_tags($content);
		echo substr($content, 0, 200) . '...';
		?>
	</div><!-- .entry-content -->

	<div class="readmore">
		<a href="<?php echo get_post_permalink() ?>">Read more <i class="far fa-long-arrow-right"></i></a>
	</div>

</article><!-- #post-## -->
