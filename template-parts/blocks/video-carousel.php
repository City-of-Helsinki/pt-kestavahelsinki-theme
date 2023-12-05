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

      <div class="item">
      <iframe style='position:absolute;top:0;bottom:0;left:0;right:0;width:100%;height:100%;' allowfullscreen='true' allow='autoplay' scrolling='no' src="<?php echo $video; ?>"></iframe>
      </div>


    <?php endforeach; ?>
  </div>

  <div id="sync2" class="owl-carousel owl-theme">

   <?php foreach( $rows as $row ) :
    $video = $row['video'];
    ?>

      <div class="item">
      <iframe style='position:absolute;top:0;bottom:0;left:0;right:0;width:100%;height:100%;z-index:-1;' allowfullscreen='true' allow='autoplay' controls='0' scrolling='no' src="<?php echo $video; ?>"></iframe>
      </div>

  <?php endforeach; ?>
</div>
</section>

<?php endif; ?>
