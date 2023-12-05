 <?php

/**
 * Image CTA-2 Template.
*/

// Create id attribute allowing for custom "anchor" value.
$id = 'imagecta2-' . $block['id'];
if( !empty($block['anchor']) ) {
  $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'image-cta2';
if( !empty($block['className']) ) {
  $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
  $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$content = get_field('content');
$image = get_field('image');
$sdg = get_field('sdg');
$link = get_field('link');
$button_text = get_field('button_text') ? get_field('button_text') : 'Lue lisää';
$text_side = get_field('text_side');
$side = $text_side === 'text-right' ? 'reverse' : '';


$color = (get_field('color_pick') === 'green') ? 'green' : ((get_field('color_pick') === 'yellow') ? 'yellow' : ((get_field('color_pick') === 'dark-grey') ? 'dark-grey' : ((get_field('color_pick') === 'light-turqoise2') ? 'light-turqoise2' : ((get_field('color_pick') === 'light-blue') ? 'light-blue' : 'pink'))));
?>


<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
  <div class="container">
    <div class="columns">
      <div class="column is-relative">
        <div class="columns is-vcentered <?php echo $side; ?>">
          <div class="column articleimg">
            <div class="image is-3by2">
              <img src="<?php echo $image; ?>" alt="">
              </div>
              <?php if( !empty(get_field('sdg'))) {?>
              <div class="image is-sdg">
              <img src="<?php echo $sdg; ?>" alt="">
              </div>
              <?php } ?>
          </div>
          <div class="column is-4 <?php echo $text_side.' '. $color; ?> overlapping2">
          <div class="text"style="position: relative;top:5%%;">
            <?php echo $content;  ?>
            <a href="<?php echo $link; ?>" class="button"><?php echo $button_text; ?></a>
          </a>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
