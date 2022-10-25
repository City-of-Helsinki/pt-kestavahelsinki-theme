<?php
$ingressi = get_the_excerpt($postID);

if (get_field('rss_url', $post->ID)) {
  $link = get_field('rss_url', $post->ID);
} else {
  $link = get_the_permalink($post->ID);
}

?>

<a href="<?= $link ?>" class="column is-4 is-12-mobile">
  <div class="element">
    <figure class="image is-3by2">
      <?php if (has_post_thumbnail()) : ?>
       <img class="is-square" src="<?= get_the_post_thumbnail_url( $post->ID, 'large' ); ?>" alt="">
     <?php else : ?>
      <img class="is-square" src="https://kestava.helsinki/content/uploads/2021/05/pictureplaceholder3_2_M.png" alt="">
    <?php endif; ?>
  </figure>
  <div class="news-content">
    <p class="date"><?= get_the_date('d.m.Y'); ?></p>
    <h3 class="title is-4 is-medium"><?php the_title(); ?></h3>
    <p class="excerpt"><?php echo wp_trim_words($ingressi, 11, '...' ); ?></p></div>
    <div class="hds-icon hds-icon--size-l hds-icon--arrow-right"></div>
  </div>
</a>
