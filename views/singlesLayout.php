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
	<header class="singles-header">
		<div class="post-info">
			<a href="<?php echo home_url(); ?>/blog" class="back"><i class="far fa-arrow-left"></i></a>
			<?php
				if ( is_single() ) :
					the_title( '<h1 class="singles-title">', '</h1>' );
				else :
					the_title( '<h2 class="singles-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;
			?>
			<p class="author">by <?php echo get_the_author();?></p>
			<hr>
			<div class="postDate"><?php echo get_the_date(); ?></div>
		</div>
	</header><!-- .entry-header -->
	<div class="singles-content">
		<?php
			the_content(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. */
						__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'awps' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				)
			);

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'awps' ),
					'after'  => '</div>',
				)
			);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php //Awps\Core\Tags::entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
