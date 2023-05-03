<?php

/**
 * SDG List Template.
*/


?>

<div class="sdg-list alignwide">
  <div class="grid">
    <button onclick="toggleBox(0)"><img src="https://kestavyys.hel.fi/content/uploads/2021/04/Tavoite-1.png"></button>
    <button onclick="toggleBox(1)"><img src="https://kestavyys.hel.fi/content/uploads/2021/04/Tavoite-2.png"></button>
    <button onclick="toggleBox(2)"><img src="https://kestavyys.hel.fi/content/uploads/2021/04/Tavoite-3.png"></button>
    <button onclick="toggleBox(3)"><img src="https://kestavyys.hel.fi/content/uploads/2021/04/Tavoite-4.png"></button>
    <button onclick="toggleBox(4)"><img src="https://kestavyys.hel.fi/content/uploads/2021/04/Tavoite-5.png"></button>
    <button onclick="toggleBox(5)"><img src="https://kestavyys.hel.fi/content/uploads/2021/04/Tavoite-6.png"></button>
    <button onclick="toggleBox(6)"><img src="https://kestavyys.hel.fi/content/uploads/2021/04/Tavoite-7.png"></button>
    <button onclick="toggleBox(7)"><img src="https://kestavyys.hel.fi/content/uploads/2021/04/Tavoite-8.png"></button>
    <button onclick="toggleBox(8)"><img src="https://kestavyys.hel.fi/content/uploads/2021/04/Tavoite-9.png"></button>
    <button onclick="toggleBox(9)"><img src="https://kestavyys.hel.fi/content/uploads/2021/04/Tavoite-10.png"></button>
    <button onclick="toggleBox(10)"><img src="https://kestavyys.hel.fi/content/uploads/2021/04/Tavoite-11.png"></button>
    <button onclick="toggleBox(11)"><img src="https://kestavyys.hel.fi/content/uploads/2021/04/Tavoite-12.png"></button>
    <button onclick="toggleBox(12)"><img src="https://kestavyys.hel.fi/content/uploads/2021/04/Tavoite-13.png"></button>
    <button onclick="toggleBox(13)"><img src="https://kestavyys.hel.fi/content/uploads/2021/04/Tavoite-14.png"></button>
    <button onclick="toggleBox(14)"><img src="https://kestavyys.hel.fi/content/uploads/2021/04/Tavoite-15.png"></button>
    <button onclick="toggleBox(15)"><img src="https://kestavyys.hel.fi/content/uploads/2021/04/Tavoite-16.png"></button>
    <button onclick="toggleBox(16)"><img src="https://kestavyys.hel.fi/content/uploads/2021/04/Tavoite-17.png"></button>
  </div>

  <div class="box-container alignwide">
    <div class="box">
      <div class="sdg-title">
        <h1>SDG-tavoite 1: Ei köyhyyttä</h1>
        <span class="circle-<?php echo get_field('circle_color')?>"></span>
      </div>
      <div class="box-1" id="box1"><?php the_field('ei_koyhyytta1');?></div>
      <div class="box-2" id="box1"><?php the_field('ei_koyhyytta2');?></div>
    </div>
    <div class="box">
      <div class="sdg-title">
        <h1>SDG-tavoite 2: Ei nälkää</h1>
        <span class="circle-<?php echo get_field('circle_color_kopioi2')?>"></span>
      </div>
      <div class="box-1" id="box2"><?php the_field('ei_nalkaa1');?></div>
      <div class="box-2" id="box2"><?php the_field('ei_nalkaa2');?></div>
    </div>
    <div class="box">
      <div class="sdg-title">
        <h1>SDG-tavoite 3: Terveyttä ja hyvinvointia</h1>
        <span class="circle-<?php echo get_field('circle_color_kopioi3')?>"></span>
      </div>
      <div class="box-1" id="box3"><?php the_field('terveytta_ja_hyvinvointia1');?></div>
      <div class="box-2" id="box3"><?php the_field('terveytta_ja_hyvinvointia2');?></div>
    </div>
    <div class="box">
      <div class="sdg-title">
        <h1>SDG-tavoite 4: Hyvä koulutus</h1>
        <span class="circle-<?php echo get_field('circle_color_kopioi4')?>"></span>
      </div>
      <div class="box" id="box4"><?php the_field('hyva_koulutus1');?></div>
      <div class="box" id="box4"><?php the_field('hyva_koulutus2');?></div>
    </div>
    <div class="box">
      <div class="sdg-title">
        <h1>SDG-tavoite 5: Sukupuolten tasa-arvo</h1>
        <span class="circle-<?php echo get_field('circle_color_kopioi5')?>"></span>
      </div>
      <div class="box-1" id="box5"><?php the_field('sukupuolten_tasaarvo1');?></div>
      <div class="box-2" id="box5"><?php the_field('sukupuolten_tasaarvo2');?></div>
    </div>
    <div class="box">
      <div class="sdg-title">
        <h1>SDG-tavoite 6: Puhdas vesi ja sanitaatio</h1>
        <span class="circle-<?php echo get_field('circle_color_kopioi6')?>"></span>
      </div>
      <div class="box-1" id="box6"><?php the_field('puhdas_vesi_ja_sanitaatio1');?></div>
      <div class="box-2" id="box6"><?php the_field('puhdas_vesi_ja_sanitaatio2');?></div>
    </div>
    <div class="box">
      <div class="sdg-title">
        <h1>SDG-tavoite 7: Edullista ja puhdasta energiaa</h1>
        <span class="circle-<?php echo get_field('circle_color_kopioi7')?>"></span>
      </div>
      <div class="box-1" id="box7"><?php the_field('edullista_ja_puhdasta_energiaa1');?></div>
      <div class="box-2" id="box7"><?php the_field('edullista_ja_puhdasta_energiaa2');?></div>
    </div>
    <div class="box">
      <div class="sdg-title">
        <h1>SDG-tavoite 8: Ihmisarvoista työtä ja talouskasvua</h1>
        <span class="circle-<?php echo get_field('circle_color_kopioi8')?>"></span>
      </div>
      <div class="box-1" id="box8"><?php the_field('ihmisarvoista_tyota_ja_talouskasvua1');?></div>
      <div class="box-2" id="box8"><?php the_field('ihmisarvoista_tyota_ja_talouskasvua2');?></div>
    </div>
    <div class="box">
      <div class="sdg-title">
        <h1>SDG-tavoite 9: Kestävää teollisuutta, innovaatioita ja infrastruktuureja</h1>
        <span class="circle-<?php echo get_field('circle_color_kopioi9')?>"></span>
      </div>
      <div class="box-1" id="box9"><?php the_field('kestavaa_teollisuutta1');?></div>
      <div class="box-2" id="box9"><?php the_field('kestavaa_teollisuutta2');?></div>
    </div>
    <div class="box">
      <div class="sdg-title">
        <h1>SDG-tavoite 10: Eriarvoisuuden vähentäminen</h1>
        <span class="circle-<?php echo get_field('circle_color_kopioi10')?>"></span>
      </div>
      <div class="box-1" id="box10"><?php the_field('eriarvoisuuden_vahentaminen1');?></div>
      <div class="box-2" id="box10"><?php the_field('eriarvoisuuden_vahentaminen2');?></div>
    </div>
    <div class="box">
      <div class="sdg-title">
        <h1>SDG-tavoite 11: Kestävät kaupungit ja yhteisöt</h1>
        <span class="circle-<?php echo get_field('circle_color_kopioi11')?>"></span>
      </div>
      <div class="box-1" id="box11"><?php the_field('kestavat_kaupungit1');?></div>
      <div class="box-2" id="box11"><?php the_field('kestavat_kaupungit2');?></div>
    </div>
    <div class="box">
      <div class="sdg-title">
        <h1>SDG-tavoite 12: Vastuullista kuluttamista</h1>
        <span class="circle-<?php echo get_field('circle_color_kopioi12')?>"></span>
      </div>
      <div class="box-1" id="box12"><?php the_field('vastuullista_kuluttamista1');?></div>
      <div class="box-2" id="box12"><?php the_field('vastuullista_kuluttamista2');?></div>
    </div>
    <div class="box">
      <div class="sdg-title">
        <h1>SDG-tavoite 13: Ilmastotekoja</h1>
        <span class="circle-<?php echo get_field('circle_color_kopioi13')?>"></span>
      </div>
      <div class="box-1" id="box13"><?php the_field('ilmastotekoja1');?></div>
      <div class="box-2" id="box13"><?php the_field('ilmastotekoja2');?></div>
    </div>
    <div class="box">
      <div class="sdg-title">
        <h1>SDG-tavoite 14: Vedenalainen elämä</h1>
        <span class="circle-<?php echo get_field('circle_color_kopioi14')?>"></span>
      </div>
      <div class="box-1" id="box14"><?php the_field('vedenalainen_elama1');?></div>
      <div class="box-2" id="box14"><?php the_field('vedenalainen_elama2');?></div>
    </div>
    <div class="box">
      <div class="sdg-title">
        <h1>SDG-tavoite 15: Maanpäällinen elämä</h1>
        <span class="circle-<?php echo get_field('circle_color_kopioi15')?>"></span>
      </div>
      <div class="box-1" id="box15"><?php the_field('maanpaallinen_elama1');?></div>
      <div class="box-2" id="box15"><?php the_field('maanpaallinen_elama2');?></div>
    </div>
    <div class="box">
      <div class="sdg-title">
        <h1>SDG-tavoite 16: Rauha, oikeudenmukaisuus ja hyvä hallinto</h1>
        <span class="circle-<?php echo get_field('circle_color_kopioi16')?>"></span>
      </div>
      <div class="box-1" id="box16"><?php the_field('rauha_ja_oikeudenmukaisuus1');?></div>
      <div class="box-2" id="box16"><?php the_field('rauha_ja_oikeudenmukaisuus2');?></div>    
    </div>
    <div class="box">
      <div class="sdg-title">
        <h1>SDG-tavoite 17: Yhteistyö ja kumppanuus</h1>
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