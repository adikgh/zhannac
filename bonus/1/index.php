<? include "../../config/core.php";

   // _VN4DzP17T4




   // $site_set['header'] = false;
   // $site_set['footer'] = false;
   // $site_set['swiper'] = true;
   $site_set['plyr'] = true;
   $css = ['bonus'];
   // $js = ['course/mamapro'];
?>
<? include "../../block/header.php"; ?>

   <div class="">
      <div class="bl_c">
         <div class="bonus">
            <h4 class="bonus_name">Еңбектеуге қажетті рефлекстер</h4>
            <div class="bonus_c">
               <div class="bonus_l">
                  <div class="player_o7" data-plyr-provider="youtube" data-plyr-embed-id="_VN4DzP17T4"></div>
               </div>
            </div>

         </div>
      </div>
   </div>

<? include "../../block/footer.php"; ?>

   <script>
      const player_o7 = new Plyr(".player_o7", {
         fullscreen: {iosNative: true},
         controls: ['play-large', 'play', 'progress', 'current-time',  'fullscreen'],
         poster: '/assets/img/result/chrome_0oD9KqL9vH.jpg',
      });
   </script>

   <div class="oko">
      <div class="oko_a oko_close"></div>
      <div class="oko_s">
         <div class="menuc_cb">
            <div class="btn btn_dd2 oko_close"><i class="fal fa-times"></i></div>
         </div>
         <div class="bl_c">
            <div class="oko_sc">
               <div class="oko_s_name">Төлеу үшін KASPI GOLD картаға аударыңыз</div>
               <img class="lazy_card copy" onclick="copytext('87751582627')" data-src="/assets/img/card/moldir_kaspi.png" />
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