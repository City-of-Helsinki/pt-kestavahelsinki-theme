 <?php

/**
 * Video-carousel Block Template.
*/


?>

<?php 

$rows = get_field('videos');
if( $rows ) : ?>

  <section class="editor-slider alignwide" style="width:920px;">
   <div id="sync1" class="owl-carousel owl-theme">

     <?php foreach( $rows as $row ) :
      $video = $row['video']; 
      ?>

      <div class="item-video"><a class="owl-video" href="<?= $video; ?>"></a></div>


    <?php endforeach; ?>
  </div>

  <div id="sync2" class="owl-carousel owl-theme">

   <?php foreach( $rows as $row ) :
    $video = $row['video']; 
    ?>

    <div class="item-video"><a class="owl-video" href="<?= $video; ?>"></a></div>

  <?php endforeach; ?>
</div>
</section>

<?php endif; ?>