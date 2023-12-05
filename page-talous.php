<?php
/**
 * Template Name: Talous
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bulmascores
 */

get_header(); ?>

<div id="primary" class="mt-2 mb-2">

	<div class="container">
		<?php
		if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
		}
		?>
	</div>
	<section class="hero alignfull" style="background-color: #9FC9EB;height: 600px;margin: 0;padding: 0;">
<div class="container">
	<section class="section">
		<header class="entry-header">
			<?php the_title( '<h1 class="section-title is-1">', '</h1>' ); ?>
			<div class="ote">
				<?php
				if (get_field('ingressi')) {
					echo get_field('ingressi');
				}
				?>
			</div>
		</header><!-- .entry-header -->
	</section>
</div>


<section class="hero alignfull wave-bottom bc-sininen" style="background-image:url('<?php echo get_the_post_thumbnail_url( $post->ID, 'hero-image' ); ?>'); height: 600px;padding: 0;margin: 0;">
</section>
			</section>



				<div class="entry-content mb-2">
				</section>
					<?php
					the_content( sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'bulmascores' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					) );

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bulmascores' ),
						'after'  => '</div>',
					) );
					?>

					<?php

	if( have_rows('sinua_voisi_kiinnostaa') ): ?>
		<section class="section related">
			<div class="container">
				<h2 class="section-title is-2"><?php _e('Sinua voisi kiinnostaa') ?></h2>
				<div class="columns is-multiline">
					<?php while( have_rows('sinua_voisi_kiinnostaa') ) : the_row();

						$title = get_sub_field('otsikko');
						$link = get_sub_field('linkki');

						$target = get_sub_field() ? "_blank" : "";
						?>
						<div class="column is-6 is-12-mobile">
							<h4 class="related-title is-medium">
								<a target="<?php echo $target;  ?>" href="<?php echo $link; ?>">
									<?php echo $title; ?>
								</a>
							</h4>
							<div class="hds-icon hds-icon--size-l hds-icon--arrow-right"></div>
						</div>

					<?php endwhile; ?>
				</div>
			</div>
		</section>
	<?php endif; ?>

				</div><!-- .entry-content -->

			</main><!-- #main -->


		</div>
	</div>
</div><!-- #primary -->




<?php
get_footer();
