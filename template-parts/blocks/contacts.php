 <?php

/**
 * Editor Card Template.
*/

$className = 'contact';
if( !empty($block['className']) ) {
  $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
  $className .= ' align' . $block['align'];
}

$title = get_field('contact_title');
?>





<?php
if( have_rows('contacts') ): ?>
  <section class="section contact">
    <div class="container">
      <h2 class="section-title"><?php echo $title; ?></h2>
      <div class="columns is-multiline">
        <?php while( have_rows('contacts') ) : the_row(); ?>
          <?php
          $etunimi = get_sub_field('etunimi');
          $sukunimi = get_sub_field('sukunimi');
          $titteli = get_sub_field('titteli');
          $puhnro = get_sub_field('puhnro');
          $sahkoposti = get_sub_field('sahkoposti');
          ?>

          <div class="column is-3 is-12-mobile content">
            <h4><?php echo $etunimi; ?><br/><?php echo $sukunimi; ?></h4>
            <p><?php echo $titteli; ?></p>
            <p><?php echo $sahkoposti; ?></p>
            <p><?php echo $puhnro; ?></p>
          </div>

        <?php endwhile; ?>
      </div>
    </div>
  </section>
<?php endif; ?>
