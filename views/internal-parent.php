<?php
/**
 * Template part for displaying content
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package awps
 */
?>
	<header id="internalHeader">
				<div class="container">
					<div class="inner">
						<div class="headline">
							<?php the_title( '<h2 class="singles-title">', '</h2>' ); ?>
							<p>The Most Tursted <?php the_title() ?> Service in Dallas Fort Worth</p>
						</div>
					</div>
				</div>
	</header><!-- .entry-header -->

	<div id="internalContent">
		<div class="container">
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
		</div>
	</div><!-- .entry-content -->
