<?php
/**
 * Template part for displaying content
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package awps
 */
?>
	<header id="internalChildHeader">
				<div class="container">
					<div class="inner">
						<div class="headline">
							<span class="additional">Trusted</span>
							<?php the_title( '<h2 class="singles-title">', '</h2>' ); ?>
							<p>The Most Tursted <?php the_title() ?> Service in Dallas Fort Worth. We offer the best or nothing. Call us today to get your service started.</p>
						</div>
						<div class="internal-action">
							<div class="btn-row">
								<a href="/">Call for service <i class="fas fa-long-arrow-right"></i></a>
							</div>
							<div class="btn-row">
								<a href="/">Schedule for service <i class="fas fa-long-arrow-right"></i></a>
							</div>
							<div class="btn-row">
								<a href="/">Coupons <i class="fas fa-long-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
	</header><!-- .entry-header -->

	<div id="internalChildContent">
		<div class="container">
			<div class="inner">
				<div class="content">
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
			</div>
		</div>
	</div><!-- .entry-content -->
