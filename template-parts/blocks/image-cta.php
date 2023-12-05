 <?php

/**
 * Image CTA Template.
*/

// Create id attribute allowing for custom "anchor" value.
$id = 'imagecta-' . $block['id'];
if( !empty($block['anchor']) ) {
  $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'image-cta';
if( !empty($block['className']) ) {
  $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
  $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$content = get_field('content');
$image = get_field('image');
$link = get_field('link');
$button_text = get_field('button_text') ? get_field('button_text') : 'Lue lisää';
$text_side = get_field('text_side');
$side = $text_side === 'text-right' ? 'reverse' : '';

$color = (get_field('color_pick') === 'green') ? 'green' : ((get_field('color_pick') === 'yellow') ? 'yellow' : 'pink');
?>


<section id="<?php echo esc_attr($id); ?>" class="section <?php echo esc_attr($className); ?>">
  <div class="container">
    <div class="columns">
      <div class="column is-relative">
        <div class="columns is-vcentered <?php echo $side; ?>">
          <div class="column is-8-tablet">
            <div class="image is-3by2">
              <img src="<?php echo $image; ?>" alt="">
            </div>
          </div>
          <div class="column is-4 is-5-tablet <?php echo $text_side.' '. $color; ?> overlapping">
            <?php echo $content;  ?>
            <a href="<?php echo $link; ?>" class="button"><?php echo $button_text; ?></a>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
