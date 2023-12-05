 <?php

/**
 * Select articles Template.
*/

// Create id attribute allowing for custom "anchor" value.
$id = 'articles-' . $block['id'];
if( !empty($block['anchor']) ) {
  $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'articles';
if( !empty($block['className']) ) {
  $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
  $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$color = (get_field('color_pick') === 'green') ? 'green' :
((get_field('color_pick') === 'yellow') ? 'yellow' :
((get_field('color_pick') === 'dark-grey') ? 'dark-grey' :
((get_field('color_pick') === 'light-turqoise2') ? 'light-turqoise2' :
((get_field('color_pick') === 'light-blue') ? 'light-blue' :
((get_field('color_pick') === 'pink') ? 'pink' : '')))));
?>


<?php

if( have_rows('articles') ): ?>

<section class="section latest alignfull <?php echo $color; ?>">
    <div class="container">
      <h2 class="section-title"><?php echo get_field('title'); ?></h2>
      <div class="columns is-flex is-multiline">
      <?php while( have_rows('articles') ) : the_row(); ?>
          <?php
          $image = get_sub_field('image');
          $link = get_sub_field('link');
          $articletitle = get_sub_field('articletitle');
          $ingressi = get_sub_field('ingressi');
          ?>

          <a href="<?php echo $link; ?>" class="column is-4 is-12-mobile">
            <figure class="image is-3by2">
              <img class="is-square" src="<?php echo $image; ?>" alt="">
            </figure>
            <div class="news-content">
              <h3 class="title is-4 is-medium"><?php echo $articletitle; ?></h3>
              <p class="excerpt"><?php echo wp_trim_words($ingressi, 10, '...' ); ?></p></div>
            <div class="hds-icon hds-icon--size-l hds-icon--arrow-right"></div>
          </a>
          <?php endwhile; ?>
      </div>
    </div>
  </section>
<?php endif; ?>
