 <?php

/**
 * Video-carousel Block Template.
*/


?>

<?php 

$rows = get_field('videos');
if( $rows ) : ?>

  <section class="alignwide" style="width:920px;margin:auto;">

  
   <div id="sync1" class="owl-carousel owl-theme">

     <?php foreach( $rows as $row ) :
      $video = $row['video']; 
      ?>

      <div class="item">
      <iframe allowfullscreen='true' allow='autoplay' scrolling='no' src="<?= $video; ?>"></iframe>
      </div>


    <?php endforeach; ?>
  </div>

  <div id="sync2" class="owl-carousel owl-theme">
   <?php foreach( $rows as $row ) :
    $video = $row['video']; ?>
    <div class="item">
    <iframe allowfullscreen='true' allow='autoplay' scrolling='no' src="<?= $video; ?>"></iframe>
    </div>

  <?php endforeach; ?>
</div>
</section>

<?php endif; ?>