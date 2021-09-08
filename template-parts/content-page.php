<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bulmascores
 */

?>
<section class="hero alignfull" style="background-color: #00D7A7;height: 600px;margin: 0;padding: 0;">
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
			

<section class="hero alignfull wave-bottom bc-vihrea" style="background-image:url('<?= get_the_post_thumbnail_url( $post->ID, 'hero-image' ) ?>'); height: 600px;padding: 0;margin: 0;">
</section>
			</section>

<div class="container">
	<section>
		<?php the_content(); ?>
	</section>
</div>
