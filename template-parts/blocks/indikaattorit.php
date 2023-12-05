 <?php

/**
 * Indikaattorit card Template.
*/

$className = 'indikaattorit';
if( !empty($block['className']) ) {
  $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
  $className .= ' align' . $block['align'];
}

$image = get_field('image');
$link = get_field('link');
$button_text = get_field('button_text');
$content = get_field('content');
$color = (get_field('color_pick') === 'green') ? 'green' :
((get_field('color_pick') === 'dark-yellow') ? 'dark-yellow' :
  ((get_field('color_pick') === 'dark-grey') ? 'dark-grey' :
    ((get_field('color_pick') === 'light-turqoise') ? 'light-turqoise' :
      ((get_field('color_pick') === 'blue') ? 'blue' :
        ((get_field('color_pick') === 'pink') ? 'pink' : '')))));

        ?>


        <section class="section indikaattorit alignfull">
          <div class="container <?php echo $color; ?> section">
            <div class="columns section is-vcentered is-multiline">
              <a class="" href="<?php echo $link; ?>">
                <?php if( !empty(get_field('image'))) {?>
                  <figure class="image is-1by1">
                    <img class="is-square" src="<?php echo $image; ?>" alt="">
                  </figure>
                <?php } ?>
              </a>
              <div class="text column is-8">
                <?php echo $content; ?>
              </div>
              <div class="column">
                <a href="<?php echo $link; ?>" class="button"><?php echo $button_text; ?></a>
              </div>
            </div>
          </div>
        </section>
