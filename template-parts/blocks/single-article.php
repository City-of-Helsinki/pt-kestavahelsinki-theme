 <?php

/**
 * Single article Template.
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
$image = get_field('image');
$link = get_field('link');
$articletitle = get_field('articletitle');
$ingressi = get_field('ingressi');
$button_text = get_field('button_text')
?>


<section class="section latest alignfull <?=$color; ?>">
    <div class="container">
      <h2 class="section-title"><?= get_field('title'); ?></h2>
        <div class="article-content">
        <a href="<?= $link ?>" class="column is-4 is-12-mobile">
            <figure class="image is-3by2">
            <img class="is-square" src="<?= $image ?>" alt="">
            </figure>
        </a>
        <div class="text">
              <h3 class="title"><?= $articletitle ?></h3>
              <p class="excerpt"><?=$ingressi?></p>    
        </div>
        <a href="<?= $link; ?>" class="button"><?= $button_text ?></a>
          </div>
        </a>
    </div>
  </section>

