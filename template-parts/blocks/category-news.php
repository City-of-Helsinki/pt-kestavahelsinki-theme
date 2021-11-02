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
  <section id="uutiset" class="section latest alignfull <?= $color; ?>" data-amount="<?php echo $amount; ?>">
    <div class="container">
      <h2 class="section-title"><?= $title ?></h2>
      <div class="columns is-multiline">

        <?php while ($query->have_posts()) : $query->the_post(); ?>

          <?php get_template_part( 'template-parts/blocks/category-news', 'content' ); ?>

        <?php endwhile; wp_reset_postdata(); ?> 
      </div>

      <?php if(is_front_page()): ?>
        <a href="<?php echo network_site_url(); ?><?php pll_e('/uutiset');?>" style="margin-left: 0; margin-top: 0;" class="button"><?php pll_e('Kaikki uutiset'); ?></a>
      <?php endif; ?>

      <?php if(is_page("uutiset")): ?>
        <button class="load-more button"><?php pll_e('Lataa lisää'); ?></button>
      <?php endif; ?>

    </div>
  </section>
<?php endif; ?>



