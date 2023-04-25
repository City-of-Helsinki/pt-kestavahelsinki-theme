 <?php

/**
 * SDG List Template.
*/


?>

<div class="sdg-list alignwide">
  <div class="grid">
    <button onclick="toggleBox(0)"><img src="https://kestavyys.hel.fi/wp-content/uploads/2021/04/Tavoite-1.png"></button>
    <button onclick="toggleBox(1)"><img src="https://kestavyys.hel.fi/wp-content/uploads/2021/04/Tavoite-2.png"></button></button>
    <button onclick="toggleBox(2)"><img src="https://kestavyys.hel.fi/wp-content/uploads/2021/04/Tavoite-3.png"></button></button>
    <button onclick="toggleBox(3)"><img src="https://kestavyys.hel.fi/wp-content/uploads/2021/04/Tavoite-4.png"></button></button>
    <button onclick="toggleBox(4)"><img src="https://kestavyys.hel.fi/wp-content/uploads/2021/04/Tavoite-5.png"></button></button>
    <button onclick="toggleBox(5)"><img src="https://kestavyys.hel.fi/wp-content/uploads/2021/04/Tavoite-6.png"></button></button>
    <button onclick="toggleBox(6)"><img src="https://kestavyys.hel.fi/wp-content/uploads/2021/04/Tavoite-7.png"></button></button>
    <button onclick="toggleBox(7)"><img src="https://kestavyys.hel.fi/wp-content/uploads/2021/04/Tavoite-8.png"></button></button>
    <button onclick="toggleBox(8)"><img src="https://kestavyys.hel.fi/wp-content/uploads/2021/04/Tavoite-9.png"></button></button>
    <button onclick="toggleBox(9)"><img src="https://kestavyys.hel.fi/wp-content/uploads/2021/04/Tavoite-10.png"></button></button>
    <button onclick="toggleBox(10)"><img src="https://kestavyys.hel.fi/wp-content/uploads/2021/04/Tavoite-11.png"></button></button>
    <button onclick="toggleBox(11)"><img src="https://kestavyys.hel.fi/wp-content/uploads/2021/04/Tavoite-12.png"></button></button>
    <button onclick="toggleBox(12)"><img src="https://kestavyys.hel.fi/wp-content/uploads/2021/04/Tavoite-13.png"></button></button>
    <button onclick="toggleBox(13)"><img src="https://kestavyys.hel.fi/wp-content/uploads/2021/04/Tavoite-14.png"></button></button>
    <button onclick="toggleBox(14)"><img src="https://kestavyys.hel.fi/wp-content/uploads/2021/04/Tavoite-15.png"></button></button>
    <button onclick="toggleBox(15)"><img src="https://kestavyys.hel.fi/wp-content/uploads/2021/04/Tavoite-16.png"></button></button>
    <button onclick="toggleBox(16)"><img src="https://kestavyys.hel.fi/wp-content/uploads/2021/04/Tavoite-17.png"></button></button>
  </div>

  <div class="box-container">
    <div class="box" id="box1"><?php the_field('ei_koyhyytta');?></div>
    <div class="box" id="box2"><?php the_field('ei_nalkaa');?></div>
    <div class="box" id="box3"><?php the_field('terveytta_ja_hyvinvointia');?></div>
    <div class="box" id="box4"><?php the_field('hyva_koulutus');?></div>
    <div class="box" id="box5"><?php the_field('sukupuolten_tasaarvo');?></div>
    <div class="box" id="box6"><?php the_field('puhdas_vesi_ja_sanitaatio');?></div>
    <div class="box" id="box7"><?php the_field('edullista_ja_puhdasta_energiaa');?></div>
    <div class="box" id="box8"><?php the_field('ihmisarvoista_tyota_ja_talouskasvua');?></div>
    <div class="box" id="box9"><?php the_field('kestavaa_teollisuutta');?></div>
    <div class="box" id="box10"><?php the_field('eriarvoisuuden_vahentaminen');?></div>
    <div class="box" id="box11"><?php the_field('kestavat_kaupungit');?></div>
    <div class="box" id="box12"><?php the_field('vastuullista_kuluttamista');?></div>
    <div class="box" id="box13"><?php the_field('ilmastotekoja');?></div>
    <div class="box" id="box14"><?php the_field('vedenalainen_elama');?></div>
    <div class="box" id="box15"><?php the_field('maanpaallinen_elama');?></div>
    <div class="box" id="box16"><?php the_field('rauha_ja_oikeudenmukaisuus');?></div>
    <div class="box" id="box17"><?php the_field('yhteistyo_ja_kumppanuus');?></div>
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