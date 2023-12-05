 <?php

/**
 * Editor Card Template.
*/

$className = 'editor-card';
if( !empty($block['className']) ) {
  $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
  $className .= ' align' . $block['align'];
}

$content = get_field('content');
$color = (get_field('color_pick') === 'green') ? 'green' :
((get_field('color_pick') === 'yellow') ? 'yellow' :
((get_field('color_pick') === 'dark-grey') ? 'dark-grey' :
((get_field('color_pick') === 'light-turqoise2') ? 'light-turqoise2' :
((get_field('color_pick') === 'light-blue') ? 'light-blue' :
((get_field('color_pick') === 'pink') ? 'pink' : '')))));

?>


<section class="section <?php echo esc_attr($className); ?> <?php echo $color; ?>">
  <div class="content">
    <?php echo $content; ?>
  </div>
</section>
