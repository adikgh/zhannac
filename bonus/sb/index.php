<? include "../../config/core.php";

	if ($_GET['v'] == 1) {
		$v = 'CChtw4y6MW0';
		$name = 'Эрозия кезде тапсыру керек негізгі 3 анализ';
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
   $whatsapp = 'https://wa.me/77757085552';
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


<? include "../../block/footer.php"; ?>