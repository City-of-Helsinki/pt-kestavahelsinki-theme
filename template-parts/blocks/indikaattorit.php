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
          <div class="container <?=$color; ?> section ">
            <div class="columns section is-vcentered is-multiline">
              <a class="" href="<?= $link ?>">
                <?php if( !empty(get_field('image'))) {?>
                  <figure class="image is-1by1">
                    <img class="is-square" src="<?= $image ?>" alt="">
                  </figure>
                <?php } ?>
              </a>
              <div class="text column is-8">
                <?= $content; ?>
              </div>
              <div class="column">
                <a href="<?= $link; ?>" class="button"><?= $button_text ?></a>
              </div>
            </div>
          </div>
        </section>




