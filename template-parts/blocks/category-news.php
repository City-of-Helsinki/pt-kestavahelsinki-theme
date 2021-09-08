 <?php

/**
 * Category Newas Template.
*/

// Create id attribute allowing for custom "anchor" value.
$id = 'news-' . $block['id'];
if( !empty($block['anchor']) ) {
  $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'news';
if( !empty($block['className']) ) {
  $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
  $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$title = get_field('title');
$image = get_field('image');
$link = get_field('link');
$amount = get_field('amount') ? get_field('amount') : 3;
$button_text = get_field('button_text') ? : 'Lue lisää';

$cat = get_field('select_category');

$color = (get_field('color_pick') === 'green') ? 'green' : 
((get_field('color_pick') === 'yellow') ? 'yellow' : 
  ((get_field('color_pick') === 'dark-grey') ? 'dark-grey' : 
    ((get_field('color_pick') === 'light-turqoise2') ? 'light-turqoise2' : 
      ((get_field('color_pick') === 'light-blue') ? 'light-blue' :
        ((get_field('color_pick') === 'pink') ? 'pink' : '')))));

$args = array(
  'posts_per_page' => $amount,
);

if ($cat) {
 $args['cat'] = $cat;
}


$query = new WP_Query($args);

if ($query->have_posts()) :
  global $post;
  ?> 
  <section id="uutiset" class="section latest alignfull <?= $color; ?>">
    <div class="container">
      <h2 class="section-title"><?= $title ?></h2>
      <div class="columns is-multiline">
        <?php while ($query->have_posts()) : 
          $query->the_post(); 
          $ingressi = get_the_excerpt($post->ID);
          ?>

          <a href="<?php the_permalink(); ?>" class="column is-4 is-12-mobile">
            <div class="element">
              <figure class="image is-3by2">
                <?php if (has_post_thumbnail()) : ?>
                 <img class="is-square" src="<?= get_the_post_thumbnail_url( $post->ID, 'large' ); ?>" alt="">
               <?php else : ?>
                <img class="is-square" src="https://kestava.helsinki/content/uploads/2021/05/pictureplaceholder3_2_M.png" alt="">
              <?php endif; ?>
            </figure>
            <div class="news-content">
              <p class="date"><?= get_the_date('d.m.Y'); ?></p>
              <h3 class="title is-4 is-medium"><?php the_title(); ?></h3>
              <p class="excerpt"><?php echo wp_trim_words($ingressi, 11, '...' ); ?></p></div>
              <div class="hds-icon hds-icon--size-l hds-icon--arrow-right"></div>
            </div>
          </a>
        <?php endwhile; wp_reset_postdata(); ?> 
      </div>
    </div>
  </section>
<?php endif; ?>



