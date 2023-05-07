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

   <div class="<?=($_GET['v']?'ooi':'')?>" >
   
      <!--  -->
      <div class="blo3 blo35">
         <div class="bl_c">
            <div class="blo3p">
               <div class="head_c txt_c">
                  <h1>Эрозияны анықтауға көмектесетін чек-ап сабағы кімдерге арналған</h1>
                  <!-- <p>1 жасқа дейінгі сәбиі бар аналарға</p> -->
               </div>
               <div class="blo3_c">
                  <div class="blo3_i">Эрозиясы бар, қалай емдеуді, неден бастауды білмей жүрсеңіз</div>
                  <div class="blo3_i">Эрозиясын күйдіртіп, бірақ қайтадан шықты. Екінші рет қалай емдеймін деп басыңыз қатса</div>
                  <div class="blo3_i">Эрозияны емдетіп жүрмін, анализ тапсырдым. Бірақ гинекологтар  дұрыс нәрсе айтып жатыр ма деген күмәніңіз болса</div>
                  <div class="blo3_i">Эрозиям жоқ, бірақ анализдер тапсырып, денсаулығымды бір тексергім келеді десеңіз</div>
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
      <div class="blo8" id="price">
         <div class="bl_c">
            <div class="head_c txt_c">
               <h1>Бұл чек-ап сабағы сіздерге арналады</h1>
            </div>
            <div class="blo8_c">
               <div class="blo8_ci blo8_c78">
                  <div class="blo8_cin txt_c">Уақыт өткізбей, күшіңізді зая кетірмей, бар болғаны 1500 теңгеге неден бастауды біліңіз</div>
                  <div class="blo8_cip">
                     <div class="blo8_cipo">
                        <div class="blo8_cipoi">1 500 тенге</div>
                     </div>
                     <div class="blo8_cip_btn">
                        <div class="btn btn_ukl" data-price="1 500" data-price2="0">Төлем жасаймын</div>
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

   <!-- <script>
      const player_o7 = new Plyr(".player_o7", {
         fullscreen: {iosNative: true},
         controls: ['play-large', 'play', 'progress', 'current-time',  'fullscreen'],
         poster: '/assets/img/result/chrome_0oD9KqL9vH.jpg',
      });
   </script> -->