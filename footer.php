<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bulmascores
 */

$current_language = pll_current_language();
?>

</div><!-- #content -->

<footer class="footer wave-bottom bc-valkoinen">
	<div class="container">
		<div class="content">
			<?php
				if ( have_rows('footer', 'options') ) {
					while ( have_rows('footer', 'options') ) {
						the_row();

						if ( $current_language === 'fi' ) {
							echo get_sub_field( 'footer_fi' );
						} else if ( $current_language === 'en' ) {
							echo get_sub_field( 'footer_en');
						} else {
							echo get_sub_field( 'footer_sv' );
						}
					}
				}
			?>
	    </div>

	    <?php if ( have_rows('footer_links', 'options') ) : ?>
			<div class="columns is-vcentered">
				<div class="container">
					<figure class="image">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/HELSINKI_Tunnus_VALKOINEN.png" alt="Footer logo">
		            </figure>

					<div class="footer-info">
						<span>&copy; <?php pll_e('Helsingin kaupunki'); ?>, <?php echo date("Y"); ?></span>

						<?php
							while ( have_rows('footer_links', 'options') ) {
								the_row();

								if ( $current_language == 'fi' ) {
									echo '<a href="' . get_sub_field('linkki') . '">' . get_sub_field('otsikko') . '</a>';
								} else if ( $current_language == 'en' ) {
									echo '<a href="' . get_sub_field('linkki_en') . '">' . get_sub_field('otsikko_en') . '</a>';
								} else {
									echo '<a href="' . get_sub_field('linkki_sv') . '">' . get_sub_field('otsikko_sv') . '</a>';
								}
							}
						?>
					</div>
				</div>
			</div>
		<?php endif; ?>
	</div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
