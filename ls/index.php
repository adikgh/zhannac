<? include "../config/core.php";

   
	$site_name = 'link';
   $site_set['header'] = false;
   $site_set['footer'] = false;
   $css = ['ls'];
?>
<? include "../block/header.php"; ?>
<? unset($_SESSION['loader']); ?>


   <div class="lbl1">
      <div class="lbl1_t">
         <div class="lbl1_tc">
            <div class="lazy_img" data-src="/assets/img/bag/L18A8502.jpg"></div>
         </div>
      </div>
      <div class="bl_c">
         <div class="lbl1_c">
            <div class="lbl1_cm">
               <div class="lbl1_cmc">
                  <div class="lbl1_cmh">Жанна</div>
                  <div class="lbl1_cmp">10 жылдық <br> тәжірибелі дәрігер</div>
               </div>
               <div class="lbl1_cmc" id="top">
                  <a href="#top" class="btn btn_clm btn_dd lbl1_cm_btn"><i class="fal fa-long-arrow-down"></i></a>
                  <div class="lbl1_cmh lbl1_cmh2">Торемурат</div>
               </div>
            </div>
            <div class="lbl1_cb" id="top2">
               <div class="lbl1_cbc">
                  <? if ($site['instagram']): ?>
                     <a href="https://instagram.com/<?=$site['instagram']?>">
                        <i class="fab fa-instagram"></i>
                        <span>Instagram</span>
                     </a>
                  <? endif ?>
                  <? if ($site['tiktok']): ?>
                     <a href="https://tiktok.com/<?=$site['tiktok']?>">
                        <div class="lazy_img" data-src="/assets/img/icons/Tiktok-icon-on-transparent-background-PNG.png"></div>
                        <span>Tik-Tok</span>
                     </a>
                  <? endif ?>
                  <? if ($site['youtube']): ?>
                     <a href="https://youtube.com/<?=$site['youtube']?>">
                        <i class="fab fa-youtube"></i>
                        <span>You Tube</span>
                     </a>
                  <? endif ?>
                  <? if ($site['telegram']): ?>
                     <a href="https://t.me/<?=$site['telegram']?>">
                        <i class="fab fa-telegram"></i>
                        <span>Telegram</span>
                     </a>
                  <? endif ?>
               </div>
               <div class="lbl1_cbs">
                  <i class="fal fa-info-circle"></i>
                  <span>Әлеуметтік желіме жазылуды ұмытпаңыз</span>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="lbl10" style="margin-top: -80px">
      <div class="bl_c">
         <div class="head_c">
            <h3>Танымал</h3>
            <h3>курстарым</h3>
         </div>
         <div class="lbl10_c">
            <div class="lbl10_cm">
               <a class="lbl10_cml" target="_blank" href="/fitnessabi/">
                  <div class="lbl10_cmle">
                     <div class="lazy_img" data-src="/assets/uploads/course/L18A8254.jpg"></div>
                  </div>
                  <div class="lbl10_cmlb">
                     <div class="lbl10_cmlbh">Курс 1</div>
                     <div class="btn btn_dd btn_clm" ><i class="fal fa-long-arrow-down"></i></div>
                  </div>
               </a>
               <a class="lbl10_cml" target="_blank" href="#">
                  <div class="lbl10_cmle">
                     <div class="lazy_img" data-src="/assets/uploads/course/L18A8289.jpg"></div>
                  </div>
                  <div class="lbl10_cmlb">
                     <div class="lbl10_cmlbh">Курс 2</div>
                     <div class="btn btn_dd btn_clm"><i class="fal fa-long-arrow-down"></i></div>
                  </div>
               </a>
            </div>
            <div class="lbl10_cb">
               <a class="btn btn_clm" href="#/projects/">Барлық жобаларымды қарау</a>
               <a class="btn btn_back3" href="/">Білім беру платформама өту</a>
            </div>
         </div>
      </div>
   </div>

   <div class="lbl5">
      <div class="bl_c">
         <div class="head_c">
            <h3>Орталықтың</h3>
            <h3>қызметтері</h3>
         </div>
         <div class="lbl5_c">
            <div class="lbl5_i">
               <div class="lbl5_ih">Кеңес алу</div>
               <div class="lbl5_it">
                  <i class="fal fa-clock"></i>
                  <span>Онлайн - 1 сағат</span>
               </div>
               <div class="lbl5_ic">
                  <div class="lbl5_ici">- Лист 1</div>
                  <div class="lbl5_ici">- Лист 2</div>
               </div>
               <div class="lbl5_ip">
                  <span>Бағасы:</span>
                  <p>20 000 тг</p>
               </div>
               <div class="btn btn_clm">Жазылу</div>
            </div>
            <div class="lbl5_i">
               <div class="lbl5_ih">Осмотр</div>
               <div class="lbl5_ic">
                  <div class="lbl5_ici">- Лист 1</div>
                  <div class="lbl5_ici">- Лист 2</div>
               </div>
               <div class="lbl5_ip">
                  <span>Бағасы:</span>
                  <p>30 000 тг</p>
               </div>
               <div class="btn btn_clm">Жазылу</div>
            </div>
            <div class="lbl5_i">
               <div class="lbl5_ih">Толық офлайн қаралу</div>
               <div class="lbl5_it">
                  <i class="fal fa-clock"></i>
                  <span>Офлайн - 1 ай</span>
               </div>
               <div class="lbl5_ic">
                  <div class="lbl5_ici">- Лист 1</div>
                  <div class="lbl5_ici">- Лист 2</div>
               </div>
               <div class="lbl5_ip">
                  <span>Бағасы:</span>
                  <p>80 000 тг</p>
               </div>
               <div class="btn btn_clm">Жазылу</div>
            </div>
            <div class="lbl5_i">
               <div class="lbl5_ih">Жеке монторлық</div>
               <div class="lbl5_it">
                  <i class="fal fa-clock"></i>
                  <span>3 ай</span>
               </div>
               <div class="lbl5_ic">
                  <div class="lbl5_ici">- Лист 1</div>
                  <div class="lbl5_ici">- Лист 2</div>
               </div>
               <div class="lbl5_ip">
                  <span>Бағасы:</span>
                  <p>500 000 тг</p>
               </div>
               <div class="btn btn_clm">Жазылу</div>
            </div>
         </div>
      </div>
   </div>

   <div class="lbl12">
      <div class="bl_c">
         <div class="head_c">
            <h3>Менімен</h3>
            <h3>байланысу</h3>
         </div>
         <div class="lbl12_c">
            <a href="https://wa.me/<?=$site['whatsapp']?>" class="btn btn_whatsapp">
               <i class="fab fa-whatsapp"></i>
               <span>Whatsapp-ма жазу</span>
            </a>
            <a href="tel:<?=$site['phone']?>" class="btn btn_clm">
               <i class="far fa-phone-alt"></i>
               <span>Қоңырау шалу</span>
            </a>
         </div>
      </div>
   </div>
   
   <div class="lbl12">
      <div class="bl_c">
         <div class="lbl12_c">
            <p>Егер сізге Instagram арқылы байланысқан <br> ыңғайлы болса, direct-ме жазыңыз</p>
            <a href="https://instagram.com/<?=$site['instagram']?>" class="btn btn_cm">
               <i class="fab fa-instagram"></i>
               <span>Instagram-ма жазу</span>
            </a>
         </div>
      </div>
   </div>

   <footer class="footer">
      <div class="bl_c">
         <div class="footer_b">
            <div class="footer_br">
               <a href="https://gprog.kz" target="_blank" class="gprog_bl">
                  <span>#gprog-та</span>
                  <div class="gprog_heart"><i class="fas fa-heart"></i></div>
                  <span>жасалған</span>
                  <div class="gprog_ab">
                     <div class="gprog_lg"><div class="lazy_img" data-src="https://gprog.kz/assets/img/logo/logo_tr_1200.png"></div></div>
                     <div class="gprog_h">G prog</div>
                     <div class="gprog_p">Бізбен өз онлайн мектебіңді аш!</div>
                  </div>
               </a>
            </div>
         </div>
      </div>
   </footer>

<? include "../block/footer.php"; ?>