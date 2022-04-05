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
$video = get_field('video');


?>


<section class="<?php echo esc_attr($className); ?> wave-top bc-valkoinen" style="background-color: #F5A3C7;height:610px;">
  <div class="container">
    <div class="hero-box desktop-only">
    <div style='position:relative;width:788px;height:437px;background-color:#ececec;right:15px;'><iframe style='position:absolute;top:0;bottom:0;left:0;right:0;width:100%;height:100%;' allowfullscreen='true' allow='autoplay' scrolling='no' src="<?= $video; ?>"></iframe></div>
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
      <div style='background-color:#ececec;right:8px;'><iframe style='' allowfullscreen='true' allow='autoplay' scrolling='no' src="<?= $video; ?>"></iframe></div>
    </div>
    <div class="text">
    <?= $text; ?>
    </div>
  </div>
</section>



