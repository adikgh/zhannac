<? include "../../config/core.php";

	if ($_GET['v'] == 1) {
		$v = '6N2v_RKpi50';
		$name = 'Эрозияны қалай анықтаймыз';
	}
	else if ($_GET['v'] == 2) {
		$v = '';
		$name = '';
	}
	else if ($_GET['v'] == 3) {
		$v = '';
		$name = '';
	}


   // $site_set['header'] = false;
   // $site_set['footer'] = false;
   // $site_set['swiper'] = true;
   $site_set['plyr'] = true;
   $css = ['bonus'];
   // $js = ['course/mamapro'];

   // $site_set['header'] = false;
   // $site_set['footer'] = false;
   // $site_set['swiper'] = true;
   $site_set['plyr'] = true;
   $site_set['swiper'] = true;
   $css = ['ln', 'bonus'];
   $js = ['ln'];

   // 
   $whatsapp = 'https://wa.me/77475280899';
   $wh_txt1 = 'Мен чекті жібергім келеді ..';
   $wh_txt2 = 'Бөліп төлегім келеді ..';
?>
<? include "../../block/header.php"; ?>

   <div class="">
      <div class="bl_c">
         <div class="bonus">
            <h1 class="bonus_name"><?=$name?></h1>
            <div class="bonus_c">
               <div class="bonus_l">
                  <div class="player_o7" data-plyr-provider="youtube" data-plyr-embed-id="<?=$v?>"></div>
               </div>
            </div>

         </div>
      </div>
   </div>

   <div class="" <?=($_GET['v']?'ooi':'')?>>
   
      <!--  -->
      <div class="blo3 blo35">
         <div class="bl_c">
            <div class="blo3p">
               <div class="head_c txt_c">
                  <h1>Курс кімге арналған</h1>
                  <!-- <p>1 жасқа дейінгі сәбиі бар аналарға</p> -->
               </div>
               <div class="blo3_c">
                  <div class="blo3_i">Эрозиясы бар, бірақ уже күйдіріп қойсаңыз, дұрыс жасадым ба, қайта шықпайма деп ойланып жүрсеңіз;</div>
                  <div class="blo3_i">Эрозиясы бар, анықталған, бірақ қалай емдетеріңізді білмей жүрсеңіз;</div>
                  <div class="blo3_i">Эрозиясы бар, бірақ аяғыңыз ауыр. Балаға қаншалықты зиян екенін білмейсіз, бір кеңес керек болса;</div>
                  <div class="blo3_i">Эроизияңыз асқынып,  эндометриоз, дисплазия деген диагноздар қойылса бұл курс сізге пайдалы болады.</div>
                  <div class="blou_tb">
                     <div class="blo5_bb">
                        <a class="btn" href="#price">Алғым келеді</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <!--  -->
      <div class="blo5">
         <div class="bl_c">
            <div class="head_c txt_c">
               <h1>Курс бағдарламасы</h1>
            </div>
            <div class="blo5_cc">

               <div class="blo5_cci">
                  <div class="blo5_ccl">
                     <li>Эрозия деген не? Түрлері қандай?</li>
                     <li>Таза жатыр мойны қандай болады?</li>
                     <li>Эндоцервистит. Қалай анықтаймыз?</li>
                     <li>Эктоприон. Қалай анықтаймыз? Қандай анализ тапсырамыз?</li>
                     <li>Жүктілік кезіндегі эрозияны емдеу</li>
                     <li>Дисплазия түрлері, қалай анықтайды? Қалай емдейміз?</li>
                     <li>Қынаптағы қышу, ашыну.</li>
                     <li>Кольпит</li>
                     <li>Вульвовагинит</li>
                     <li>Полип</li>
                     <li>Эрозияны күйдіргенде не болады?</li>
                     <li>Эрозия асқынып қатерлі ісікке айналғанда не істейміз?</li>
                     <li>Конизация әдісі</li>
                     <li>Азотпен күйдіру, қатыру. Неге нәтиже бермейді?</li>
                     <li>Бактериальный вагиноз</li>
                  </div>
               </div>
               
            </div>
   
            <div class="blo5_bb">
               <a class="btn" href="#price">Қатысқым келеді</a>
            </div>
   
         </div>
      </div>


      <!--  -->
      <div class="blo8" id="price">
         <div class="bl_c">
            <div class="head_c txt_c">
               <h1>Курс бағасы</h1>
            </div>
            <div class="blo8_c ">
               <div class="blo8_ci blo8_c78 blo8_c_mrf">
                  <div class="blo8_cin txt_c">Әрқайсысының ЕМІ де берілген.</div>
                  <div class="blo8_cin txt_c">Доступ 2 айға беріледі</div>

                  <div class="blo8_cip ">
                     <div class="blo8_cipo ">
                        <div class="blo8_cipoi">20 000 тенге</div>
                        <div class="blo8_cipoi blo8_cipoi_mrf">9 999 тенге</div>
                     </div>
                     <div class="blo8_cip_btn">
                        <div class="btn btn_ukl" data-price="20 000" data-price2="9 999">Төлем жасаймын</div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>


<? include "../../block/footer.php"; ?>

   <div class="oko">
      <div class="oko_a oko_close"></div>
      <div class="oko_s">
         <div class="menuc_cb">
            <div class="btn btn_dd2 oko_close"><i class="fal fa-times"></i></div>
         </div>
         <div class="bl_c">
            <div class="oko_sc">
               <div class="oko_s_name">Төлеу үшін KASPI GOLD картаға аударыңыз</div>
               <img class="lazy_card copy" onclick="copytext('87023405451')" data-src="/assets/img/card/kaspi gold pr.png" />
               <div class="oko_s_s">Нөмірді көшіру үшін, картаны басыңыз</div>
               <div class="oko_s_p">Ватсапқа чек жіберіңіз</div>
               <a href="<?=$whatsapp?>?text=<?=$wh_txt1?>" target="_blank" class="btn btn_cl">Жіберу</a>
            </div>
         </div>
      </div>
   </div>

   <script>
      $('html').on('click', '.plyr__control', function(){
         setTimeout(function () { 
            $('.ooi').addClass('ooi2');
         }, 15000)
      })
   </script>