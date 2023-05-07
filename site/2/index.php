<? include "../../config/core.php";



   // 
   $site_set['header'] = false;
   $site_set['swiper'] = true;
   $site_set['plyr'] = true;
   // $site_set['footer'] = false;
   $css = ['course/mamapro'];
   $js = ['course/mamapro'];

   $whatsapp = 'https://wa.me/77750055123';
   $wh_txt1 = 'Хочу отправить чек ..';
   $wh_txt2 = 'Хотелось оплатить на рассрочку ..';
?>
<? include "../../block/header.php"; ?>

   <? if ($_GET['edit']): ?>
      <div class="header dsp_n">
         1) Оффер
         2) Что такое ???-массаж
         3) Для кого курс
         4) Об авторе
         5) Программа курса
         6) Ваш результат спустя ? недели
         7) Отзывы
         8) Тарифы
         9) Часто задаваемые вопросы
      </div>
   <? endif ?>

   <div class="blo1">
      <div class="bl_c">
         <div class="blo1_c">
            <div class="blo1_ts">
               <div class="blo1_tsi">Мама Pro</div>
               <div class="blo1_tsi">
                  <span>Страт курса:</span>
                  <p>1 август</p>
               </div>
               <div class="blo1_tsi">
                  <span>Длительность:</span>
                  <p>120 дней</p>
               </div>
            </div>
            <div class="blo1_t">
               <h1 class="blo1_tof">Создайте здоровое будущее для ребёнка за 1 месяц с помощью моторного онтогенеза</h1>
               <div class="blo1_tb">
                  <a class="btn" href="#price">Хочу на курс</a>
               </div>
            </div>
            <div class="blo1_s">
               <div class="blo1_ss lazy_img" data-src="/assets/img/bag/ssas3.png"></div>
               <div class="blo1_sa">
                  <div class="blo1_sac">
                     <div class="blo1_sacp">Бимурзакызы Нурбану <i class="fas fa-badge-check"></i></div>
                     <p>Со мной легко научитесь <br> безопасно заниматься с малышом</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="blo3">
      <div class="bl_c">
         <div class="head_c txt_c">
            <h4>Курс подойдет вам</h4>
         </div>
         <div class="blo3_c">
            <div class="blo3_i">
               <i class="fas fa-badge-check"></i>
               <p>Если вы мама которая хочет создать здоровое будущее для своего ребёнка</p>
            </div>
            <div class="blo3_i">
               <i class="fas fa-badge-check"></i>
               <p>Если вы хотите узнать о самых эффективных методах коррекции движении малыша и  помочь освоить навыки</p>
            </div>
            <div class="blo3_i">
               <i class="fas fa-badge-check"></i>
               <p>Если вашему малышу поставили диагнозы гипертонус, гипотонус, привычный наклон головы, дистония</p>
            </div>
            <div class="blo3_i">
               <i class="fas fa-badge-check"></i>
               <p>Не знаете как заниматься с малышом без вреда для него</p>
            </div>
            <div class="blo3_i">
               <i class="fas fa-badge-check"></i>
               <p>Хотите получить ответы по всем вопросам касательно здоровья и ухода за малышом</p>
            </div>
            <div class="blo1_tb">
               <a class="btn" href="#price">Хочу на курс</a>
            </div>
         </div>
      </div>
   </div>

   <div class="blo2">
      <div class="blo2a lazy_img" data-src="/assets/img/bag/IMG_6756 - 2.jpg"></div>
      <div class="bl_c">
         <div class="head_c">
            <h4>Моя миссия</h4>
            <p></p>
         </div>
         <div class="blo2_c">
            <div>Я показываю родителям как ухаживать за малышом, оценивать их двигательное развитие, даю безопасные, работающие техники для развития навыков ребёнка.</div>
            <div>Тем самым помогаю оградить ваших детей от вредных упражнений, гаджетов, советов. Обучая родителей, я хочу создавать здоровое будущее для детей.</div>
            <div>Ведь развивая движения малыша, мы развиваем его интеллект и уверенность в себе. Такие дети становятся безусловными лидерами.</div>
            <a class="btn btn_back" href="#price">Хочу на курс</a>
         </div>
      </div>
   </div>

   <? include "../program.php"; ?>

   <div class="blo4">
      <div class="bl_c">
         <div class="head_c txt_c">
            <h4>Бимурзакызы Нурбану</h4>
            <p>Автор и создатель курса</p>
         </div>
         <div class="blo4_c">

            <div class="blo4_tu">
               <div class="lazy_img" data-src="/assets/img/bag/IMG_6772 - 2.jpg"></div>
               <div class="lazy_img lazy_img2" data-src="/assets/img/bag/chrome_tH7667DNS5.png"></div>
               <div class="blo4_t">
                  <div class="blo4_tc">
                     <p>Я педиатр в первую очередь заинтересована здоровьем вашего ребёнка, учу мам заботиться о малыше основываясь на доказательной медицине.</p>
                  </div>
               </div>
            </div>

            <ul class="blo4_ul">
               <li>
                  <i class="fas fa-badge-check"></i>
                  <span>Педиатр | двигательный терапевт</span>
               </li>
               <li>
                  <i class="fas fa-badge-check"></i>
                  <span>Веду блог про гармоничное развитие малыша</span>
               </li>
               <li>
                  <i class="fas fa-badge-check"></i>
                  <span>Более 3-х лет помогаю малышам безопасно освоить важные навыки в первом году жизни</span>
               </li>
               <li>
                  <i class="fas fa-badge-check"></i>
                  <span>Использую безопасные, физиологичные методы в занятиях</span>
               </li>
               <li>
                  <i class="fas fa-badge-check"></i>
                  <span>Со мной каждая мама будет уверена в своих действиях</span>
               </li>
            </ul>
         
         </div>
      </div>
   </div>
   
   <div class="blo8" id="price">
      <div class="bl_c">
         <div class="head_c txt_c">
            <h4>Тарифы</h4>
         </div>
         <div class="blo8_c">
            <div class="blo8_ci ">
               <div class="blo8_cin">Базовый (Я РОДИЛСЯ)</div>
               <div class="blo8_ciq">
                  <div class="blo8_ciqi blo8_ciqi_act" data-name="Базовый (Я РОДИЛСЯ)">0-4 месяцев</div>
                  <div class="blo8_ciqi" data-name="Базовый (ПОКОРЯЮ ПОЛ)">4-8 месяцев</div>
                  <div class="blo8_ciqi" data-name="Базовый (ПЕРВЫЕ ШАГИ)">8-12 месяцев</div>
               </div>
               <ul class="blo8_ciс">
                  <li><i class="fal fa-plus"></i><span>Модуль 1. Теория и про уход</span></li>
                  <li><i class="fal fa-plus"></i><span>Модуль 2. Рефлексы</span></li>
                  <li><i class="fal fa-plus"></i><span>Модуль 3. Диагностика</span></li>
                  <li><i class="fal fa-plus"></i><span>Модуль 4. Массаж</span></li>
                  <li><i class="fal fa-plus"></i><span>Модуль 5. Пассивная гимнастика и фитбол</span></li>
                  <li><i class="fal fa-plus"></i><span>Модуль 8. Педиатрия</span></li>
                  <li><i class="fal fa-plus"></i><span>Без обратной связи</span></li>
                  <li><i class="fal fa-plus"></i><span>Без консультации</span></li>
                  <li><i class="fal fa-plus"></i><span>Доступ к урокам 4 месяца</span></li>
               </ul>
               <!-- <div class="form_im form_im_toggle">
                  <div class="form_span">Я участница марафона</div>
                  <input type="checkbox" class="price_inp" data-val="">
                  <div class="form_im_toggle_btn2 btn_mrf"></div>
               </div> -->
               <div class="blo8_cip">
                  <div class="blo8_cipo">
                     <div class="blo8_cipoi">19 900 тенге</div>
                     <div class="blo8_cipoi blo8_cipoi_mrf">45 550 тенге</div>
                  </div>
                  <div class="blo8_cip_btn">
                     <div class="btn btn_ukl" data-price="19 950" data-price2="45 550">Оплатить тариф</div>
                     <div class="btn btn_cm btn_ukl" data-price="5 000">Забронировать место
                        <div class="blo8_cip_btna">за 5 000 тг.</div>
                     </div>
                  </div>
               </div>
               <div class="blo8_cip blo8_cip2">
                  <span>В расрочку</span>
                  <div class="blo8_cipo">
                     <div class="blo8_cipoi">22 900 тенге</div>
                     <div class="blo8_cipoi blo8_cipoi_mrf">53 550 тенге</div>
                  </div>
                  <div class="blo8_cip_btn">
                     <a class="btn btn_cl" href="<?=$whatsapp?>" target="_blank">
                        <div class="kaspi_red_card lazy_img" data-src="/assets/img/card/b1c734d74503c1e6617e89a8da356966.png"></div>
                        <sp>Оплатить в рассрочку</sp>
                     </a>
                  </div>
               </div>
            </div>

            <div class="blo8_ci blo8_c78">
               <div class="blo8_cin">Профи (Я РОДИЛСЯ)</div>
               <div class="blo8_ciq">
                  <div class="blo8_ciqi blo8_ciqi_act" data-name="Профи (Я РОДИЛСЯ)">0-4 месяцев</div>
                  <div class="blo8_ciqi" data-name="Профи (ПОКОРЯЮ ПОЛ)">4-8 месяцев</div>
                  <div class="blo8_ciqi" data-name="Профи (ПЕРВЫЕ ШАГИ)">8-12 месяцев</div>
               </div>
               <ul class="blo8_ciс">
                  <li><i class="fal fa-plus"></i><span>Доступ ко всем 10 модулям</span></li>
                  <li><i class="fal fa-plus"></i><span>Обратная связь</span></li>
                  <li><i class="fal fa-plus"></i><span>Моя консультация и поддержка</span></li>
                  <li><i class="fal fa-plus"></i><span>Индивидуальный осмотр малыша</span></li>
                  <li><i class="fal fa-plus"></i><span>Проверка результатов 1 раз в месяц</span></li>
                  <li><i class="fal fa-plus"></i><span>Доступ к урокам 4 месяца</span></li>
               </ul>
               <div class="form_im form_im_toggle">
                  <div class="form_span">Я участница марафона</div>
                  <input type="checkbox" class="price_inp" data-val="">
                  <div class="form_im_toggle_btn2 btn_mrf"></div>
               </div>
               <div class="blo8_cip">
                  <div class="blo8_cipo">
                     <div class="blo8_cipoi">61 000 тенге</div>
                     <div class="blo8_cipoi blo8_cipoi_mrf">53 000 тенге</div>
                  </div>
                  <div class="blo8_cip_btn">
                     <div class="btn btn_ukl" data-price="61 000" data-price2="53 000">Оплатить тариф</div>
                     <div class="btn btn_cm btn_ukl" data-price="5 000">Забронировать место
                        <div class="blo8_cip_btna">за 5 000 тг.</div>
                     </div>
                  </div>
               </div>
               <div class="blo8_cip blo8_cip2">
                  <span>В расрочку</span>
                  <div class="blo8_cipo">
                     <div class="blo8_cipoi">70 000 тенге</div>
                     <div class="blo8_cipoi blo8_cipoi_mrf">61 000 тенге</div>
                  </div>
                  <div class="blo8_cip_btn">
                     <a class="btn btn_cl" href="<?=$whatsapp?>" target="_blank">
                        <div class="kaspi_red_card lazy_img" data-src="/assets/img/card/b1c734d74503c1e6617e89a8da356966.png"></div>
                        <sp>Оплатить в рассрочку</sp>
                     </a>
                  </div>
               </div>
            </div>

         </div>
      </div>
   </div>

   <div class="blo7">
      <div class="bl_c">
         <div class="head_c txt_c">
            <h4>Результаты</h4>
         </div>
         <div class="blo7_c">
            <div class="swiper blo7_Swiper">
               <div class="swiper-wrapper">
                  <div class="swiper-slide">
                     <div class="lz_o7" data-src="/assets/img/result/result1.jpeg"></div>
                  </div>
                  <div class="swiper-slide">
                     <div class="lz_o7" data-src="/assets/img/result/result2.jpeg"></div>
                  </div>
                  <div class="swiper-slide">
                     <div class="lz_o7" data-src="/assets/img/result/result3.jpeg"></div>
                  </div>
                  <div class="swiper-slide">
                     <div class="player_o7" data-plyr-provider="youtube" data-plyr-embed-id="J5L3RRpjdro"></div>
                  </div>
               </div>
               <div class="swiper-pagination o7_pagination"></div>
            </div>
         </div>
      </div>
   </div>

   <? $bl = db::query("SELECT * FROM `word_blocks` WHERE name = 'quiz1'"); ?>
   <? if (mysqli_num_rows($bl)): ?>
      <div class="blo10">
         <div class="bl_c">
            <div class="head_c txt_c">
               <h4>Часто задаваемые <br> вопросы</h4>
            </div>
            <div class="faq">
               <? while ($bl_d = mysqli_fetch_assoc($bl)): ?>
                  <div class="faq-a">
                     <div class="faq-ah">
                        <div class="faq-arrow"><i class="fal fa-plus"></i></div>
                        <div class="faq-heading"><?=$bl_d['txt1_ru']?></div>
                     </div>
                     <p class="faq-text"><?=$bl_d['txt2_ru']?></p>
                  </div>
               <? endwhile ?>
            </div>
         </div>
      </div>
   <? endif ?>

<? include "../../block/footer.php"; ?>
   
   <div class="oko">
      <div class="oko_a oko_close"></div>
      <div class="oko_s">
         <div class="menuc_cb">
            <div class="btn btn_dd2 oko_close"><i class="fal fa-times"></i></div>
         </div>
         <div class="bl_c">
            <div class="oko_sc">
               <div class="oko_s_name">Для оплаты переводите <br> <span></span> на KASPI GOLD</div>
               <img class="lazy_card copy" onclick="copytext('87750055123')" data-src="/assets/img/card/Карта_Kaspi_Gold_nurbanu.png" />
               <div class="oko_s_s">Чтобы копировать номер, нажмите на карту</div>
               <div class="oko_s_p">Отправляете чек на WhatsApp</div>
               <a href="<?=$whatsapp?>?text=<?=$wh_txt1?>" target="_blank" class="btn btn_cl">Отправить</a>
            </div>
         </div>
      </div>
   </div>