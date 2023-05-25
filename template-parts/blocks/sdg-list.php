<?php

/**
 * SDG List Template.
*/


?>

<div class="sdg-list alignwide">
  <div class="grid">
    <button onclick="toggleBox(0)"><img src="<?php pll_e('SDG-1-image') ?>"></button>
    <button onclick="toggleBox(1)"><img src="<?php pll_e('SDG-2-image') ?>"></button>
    <button onclick="toggleBox(2)"><img src="<?php pll_e('SDG-3-image') ?>"></button>
    <button onclick="toggleBox(3)"><img src="<?php pll_e('SDG-4-image') ?>"></button>
    <button onclick="toggleBox(4)"><img src="<?php pll_e('SDG-5-image') ?>"></button>
    <button onclick="toggleBox(5)"><img src="<?php pll_e('SDG-6-image') ?>"></button>
    <button onclick="toggleBox(6)"><img src="<?php pll_e('SDG-7-image') ?>"></button>
    <button onclick="toggleBox(7)"><img src="<?php pll_e('SDG-8-image') ?>"></button>
    <button onclick="toggleBox(8)"><img src="<?php pll_e('SDG-9-image') ?>"></button>
    <button onclick="toggleBox(9)"><img src="<?php pll_e('SDG-10-image') ?>"></button>
    <button onclick="toggleBox(10)"><img src="<?php pll_e('SDG-11-image') ?>"></button>
    <button onclick="toggleBox(11)"><img src="<?php pll_e('SDG-12-image') ?>"></button>
    <button onclick="toggleBox(12)"><img src="<?php pll_e('SDG-13-image') ?>"></button>
    <button onclick="toggleBox(13)"><img src="<?php pll_e('SDG-14-image') ?>"></button>
    <button onclick="toggleBox(14)"><img src="<?php pll_e('SDG-15-image') ?>"></button>
    <button onclick="toggleBox(15)"><img src="<?php pll_e('SDG-16-image') ?>"></button>
    <button onclick="toggleBox(16)"><img src="<?php pll_e('SDG-17-image') ?>"></button>
  </div>

  <div class="box-container alignwide">
    <div class="box">
      <div class="sdg-title">
        <h1><?php pll_e('SDG-1') ?></h1>
        <span class="circle-<?php echo get_field('circle_color')?>"></span>
      </div>
      <div class="box-1" id="box1"><?php the_field('ei_koyhyytta1');?></div>
      <div class="box-2" id="box1"><?php the_field('ei_koyhyytta2');?></div>
    </div>
    <div class="box">
      <div class="sdg-title">
        <h1><?php pll_e('SDG-2') ?></h1>
        <span class="circle-<?php echo get_field('circle_color_kopioi2')?>"></span>
      </div>
      <div class="box-1" id="box2"><?php the_field('ei_nalkaa1');?></div>
      <div class="box-2" id="box2"><?php the_field('ei_nalkaa2');?></div>
    </div>
    <div class="box">
      <div class="sdg-title">
        <h1><?php pll_e('SDG-3') ?></h1>
        <span class="circle-<?php echo get_field('circle_color_kopioi3')?>"></span>
      </div>
      <div class="box-1" id="box3"><?php the_field('terveytta_ja_hyvinvointia1');?></div>
      <div class="box-2" id="box3"><?php the_field('terveytta_ja_hyvinvointia2');?></div>
    </div>
    <div class="box">
      <div class="sdg-title">
        <h1><?php pll_e('SDG-4') ?></h1>
        <span class="circle-<?php echo get_field('circle_color_kopioi4')?>"></span>
      </div>
      <div class="box-1" id="box4"><?php the_field('hyva_koulutus1');?></div>
      <div class="box-2" id="box4"><?php the_field('hyva_koulutus2');?></div>
    </div>
    <div class="box">
      <div class="sdg-title">
        <h1><?php pll_e('SDG-5') ?></h1>
        <span class="circle-<?php echo get_field('circle_color_kopioi5')?>"></span>
      </div>
      <div class="box-1" id="box5"><?php the_field('sukupuolten_tasaarvo1');?></div>
      <div class="box-2" id="box5"><?php the_field('sukupuolten_tasaarvo2');?></div>
    </div>
    <div class="box">
      <div class="sdg-title">
        <h1><?php pll_e('SDG-6') ?></h1>
        <span class="circle-<?php echo get_field('circle_color_kopioi6')?>"></span>
      </div>
      <div class="box-1" id="box6"><?php the_field('puhdas_vesi_ja_sanitaatio1');?></div>
      <div class="box-2" id="box6"><?php the_field('puhdas_vesi_ja_sanitaatio2');?></div>
    </div>
    <div class="box">
      <div class="sdg-title">
        <h1><?php pll_e('SDG-7') ?></h1>
        <span class="circle-<?php echo get_field('circle_color_kopioi7')?>"></span>
      </div>
      <div class="box-1" id="box7"><?php the_field('edullista_ja_puhdasta_energiaa1');?></div>
      <div class="box-2" id="box7"><?php the_field('edullista_ja_puhdasta_energiaa2');?></div>
    </div>
    <div class="box">
      <div class="sdg-title">
        <h1><?php pll_e('SDG-8') ?></h1>
        <span class="circle-<?php echo get_field('circle_color_kopioi8')?>"></span>
      </div>
      <div class="box-1" id="box8"><?php the_field('ihmisarvoista_tyota_ja_talouskasvua1');?></div>
      <div class="box-2" id="box8"><?php the_field('ihmisarvoista_tyota_ja_talouskasvua2');?></div>
    </div>
    <div class="box">
      <div class="sdg-title">
        <h1><?php pll_e('SDG-9') ?></h1>
        <span class="circle-<?php echo get_field('circle_color_kopioi9')?>"></span>
      </div>
      <div class="box-1" id="box9"><?php the_field('kestavaa_teollisuutta1');?></div>
      <div class="box-2" id="box9"><?php the_field('kestavaa_teollisuutta2');?></div>
    </div>
    <div class="box">
      <div class="sdg-title">
        <h1><?php pll_e('SDG-10') ?></h1>
        <span class="circle-<?php echo get_field('circle_color_kopioi10')?>"></span>
      </div>
      <div class="box-1" id="box10"><?php the_field('eriarvoisuuden_vahentaminen1');?></div>
      <div class="box-2" id="box10"><?php the_field('eriarvoisuuden_vahentaminen2');?></div>
    </div>
    <div class="box">
      <div class="sdg-title">
        <h1><?php pll_e('SDG-11') ?></h1>
        <span class="circle-<?php echo get_field('circle_color_kopioi11')?>"></span>
      </div>
      <div class="box-1" id="box11"><?php the_field('kestavat_kaupungit1');?></div>
      <div class="box-2" id="box11"><?php the_field('kestavat_kaupungit2');?></div>
    </div>
    <div class="box">
      <div class="sdg-title">
        <h1><?php pll_e('SDG-12') ?></h1>
        <span class="circle-<?php echo get_field('circle_color_kopioi12')?>"></span>
      </div>
      <div class="box-1" id="box12"><?php the_field('vastuullista_kuluttamista1');?></div>
      <div class="box-2" id="box12"><?php the_field('vastuullista_kuluttamista2');?></div>
    </div>
    <div class="box">
      <div class="sdg-title">
        <h1><?php pll_e('SDG-13') ?></h1>
        <span class="circle-<?php echo get_field('circle_color_kopioi13')?>"></span>
      </div>
      <div class="box-1" id="box13"><?php the_field('ilmastotekoja1');?></div>
      <div class="box-2" id="box13"><?php the_field('ilmastotekoja2');?></div>
    </div>
    <div class="box">
      <div class="sdg-title">
        <h1><?php pll_e('SDG-14') ?></h1>
        <span class="circle-<?php echo get_field('circle_color_kopioi14')?>"></span>
      </div>
      <div class="box-1" id="box14"><?php the_field('vedenalainen_elama1');?></div>
      <div class="box-2" id="box14"><?php the_field('vedenalainen_elama2');?></div>
    </div>
    <div class="box">
      <div class="sdg-title">
        <h1><?php pll_e('SDG-15') ?></h1>
        <span class="circle-<?php echo get_field('circle_color_kopioi15')?>"></span>
      </div>
      <div class="box-1" id="box15"><?php the_field('maanpaallinen_elama1');?></div>
      <div class="box-2" id="box15"><?php the_field('maanpaallinen_elama2');?></div>
    </div>
    <div class="box">
      <div class="sdg-title">
        <h1><?php pll_e('SDG-16') ?></h1>
        <span class="circle-<?php echo get_field('circle_color_kopioi16')?>"></span>
      </div>
      <div class="box-1" id="box16"><?php the_field('rauha_ja_oikeudenmukaisuus1');?></div>
      <div class="box-2" id="box16"><?php the_field('rauha_ja_oikeudenmukaisuus2');?></div>    
    </div>
    <div class="box">
      <div class="sdg-title">
        <h1><?php pll_e('SDG-17') ?></h1>
        <span class="circle-<?php echo get_field('circle_color_kopioi17')?>"></span>
      </div>
      <div class="box-1" id="box17"><?php the_field('yhteistyo_ja_kumppanuus1');?></div>
      <div class="box-2" id="box17"><?php the_field('yhteistyo_ja_kumppanuus2');?></div>
    </div>
  </div>
  
  <script>
    function toggleBox(index) {
      var boxes = document.querySelectorAll(".box");
      for (var i = 0; i < boxes.length; i++) {
        boxes[i].classList.remove("active");
      }
      boxes[index].classList.add("active");
    }
  </script>
</div>