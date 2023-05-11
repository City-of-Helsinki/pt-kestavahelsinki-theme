 <?php

/**
 * Hero Block Template.
*/

// Create id attribute allowing for custom "anchor" value.
$id = 'hero-' . $block['id'];
if( !empty($block['anchor']) ) {
  $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'hero';
if( !empty($block['className']) ) {
  $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
  $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$text = get_field('text');
$image = get_field('image');


?>


<section class="<?php echo esc_attr($className); ?> wave-top bc-valkoinen" style="height:650px;">
  <div class="container">
    <div class="hero-box desktop-only">
    <div class="img-container">
      <img alt="" src="<?= $image ?>">
    </div>
    <div class="text">
    <?= $text; ?>
    </div>
    </div>
  </div>
</div>
</section>
<section class="section mobile-hero mobile-only">
  <div class="container hero-box">
    <div class="hero-box__videowrapper">
    <div class="img-container">
      <img alt="" src="<?= $image ?>">
    </div>
    </div>
    <div class="text">
    <?= $text; ?>
    </div>
  </div>
</section>



