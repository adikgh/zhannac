<? include "../../config/core.php";

	// Қолданушыны тексеру
	if (!$user_id) header('location: /education/');

	// Курс деректері
	if (isset($_GET['id']) || $_GET['id'] != '') {
		$course_id = $_GET['id'];
		$course = db::query("select * from course where id = '$course_id'");
		if (mysqli_num_rows($course)) {
			$course_d = mysqli_fetch_assoc($course);			
			if ($course_d['info']) $course_d = array_merge($course_d, fun::course_info($course_d['id']));
		} else header('location: /education/my/');
	} else header('location: /education/my/');

	// Тариф деректері
	$pack_all = db::query("select * from course_pack where course_id = '$course_id' order by number asc");
	if (mysqli_num_rows($pack_all)) {
		if (isset($_GET['pack_id']) || $_GET['pack_id'] != '') {
			$pack_id = $_GET['pack_id'];
			$pack = db::query("select * from course_pack where id = '$pack_id'");
			if (mysqli_num_rows($pack)) $pack_dd = mysqli_fetch_assoc($pack);
		} else {
			$pack_dd = mysqli_fetch_assoc(db::query("select * from course_pack where course_id = '$course_id' order by number asc limit 1"));
			$pack_id = $pack_dd['id'];
		}
	}

	// Блок деректері
	if ($pack_id) $cblock = db::query("select * from course_block where pack_id = '$pack_id' order by number asc");
	else $cblock = db::query("select * from course_block where course_id = '$course_id' order by number asc");
	

	
	// Сайттың баптаулары
	$menu_name = 'item';
	$site_set['utop_bk'] = 'course';
	$site_set['utop'] = $course_d['name_'.$lang];
	$site_set['autosize'] = true;
	$css = ['education/main', 'education/item'];
	$js = ['education/main']; if ($user_right) $js = ['education/main', 'education/admin'];
?>
<? include "../block/header.php"; ?>

	<div class="uitem">

		<div class="uitem_c <?=(mysqli_num_rows($cblock) == 0?'uitem_c2':'')?>">
				
			<!-- Инфо -->
			<div class="uitemc_l">

				<? include "top.php"; ?>

				<div class="uitemci_ck">
					<div class="uitemci_cktr"><div class="lazy_img" data-src="/assets/uploads/course/<?=$course_d['img']?>"></div></div>
					<div class="uitemci_ckt">
						<div class="uitemci_cktl">
							<h1 class="uitemci_h"><?=$course_d['name_'.$lang]?></h1>
						</div>
					</div>

					<div class="uitemci_ckb">
						<? if ($buy_d['view']) $precent = round(100 / ($course_d['item'] / $buy_d['view'])); ?>
						<div class="uitemci_ckb2">
							<div class="itemci_ls">
								<? if ($course_d['arh']): ?> <div class="itemci_lsi itemci_lsi_arh">Курс архивте</div> <? endif ?>
								<? if ($course_d['item']): ?> <div class="itemci_lsi"><?=($buy_d['view']?$buy_d['view'].'/':'')?><?=$course_d['item']?> сабақ</div> <? endif ?>
								<? if ($course_d['test']): ?> <div class="itemci_lsi"><?=$course_d['test']?> тест</div> <? endif ?>
								<? if ($course_d['assig']): ?> <div class="itemci_lsi"><?=$course_d['assig']?> тапсырма</div> <? endif ?>
							</div>
							<? if ($buy_d['view']): ?> <div class=""><?=$precent?>%</div> <? endif ?>
						</div>
						<? if ($buy_d['view']): ?>
							<div class="uitemci_time_b">
								<div class="uitemci_time_b2" style="width:<?=$precent?>%"></div>
							</div>
						<? endif ?>
					</div>

				</div>

				<!--  -->
				<div class=""></div>
			</div>

			<!-- lesson -->
			<div class="uc_list">

				<? if (mysqli_num_rows($pack_all)): ?>
					<div class="uc_pack">
						<span>Тарифы:</span>
						<div class="uc_packc">
							<? while ($pack_d = mysqli_fetch_assoc($pack_all)): ?>
								<a href="?id=<?=$course_id?>&pack_id=<?=$pack_d['id']?>" class="uc_packi <?=($pack_d['id']==$pack_id?'uc_packi_act':'')?>"><?=$pack_d['name_'.$lang]?></a>
							<? endwhile ?>
						</div>
					</div>
				<? endif ?>
				
				<!-- <span>Сабақтардың тізімі:</span> -->
				<? if (mysqli_num_rows($cblock) != 0 ): ?>
					
					<div class="cours_ls">
						<? while ($block = mysqli_fetch_assoc($cblock)): ?>
							<?	$block_id = $block['id']; ?>
							<?	$item_d = db::query("select * from course_lesson where block_id = '$block_id' order by number asc"); ?>
							<? $pay_lesson_d = db::query("select * from course_pay_lesson where block_id = '$block_id' and user_id = '$user_id' and open = 1"); ?>
							
							<div class="coursls_cn">
								<? if (mysqli_num_rows($cblock) != 1): ?>
									<div class="coursls_i coursls_b" data-id="<?=$block['id']?>">
										<div class="coursls_ic">
											<div class="coursls_in"><?=$block['number']?> модуль. <?=$block['name_'.$lang]?></div>
											<div class="coursls_ip">
												<? if ($block['item']): ?> <div class="coursls_ipi"><?=$block['item']?> сабақ</div> <? endif ?>
												<? if ($block['question']): ?> <div class="coursls_ipi"><?=$block['question']?> сұрақ</div> <? endif ?>
												<? if ($block['test']): ?> <div class="coursls_ipi"><?=$block['test']?> тест</div> <? endif ?>
												<? if ($block['assig']): ?> <div class="coursls_ipi"><?=$block['assig']?> тапсырма</div> <? endif ?>
											</div>
										</div>
										<div class="coursls_ilw">
											<div class="coursls_il2">
												<div class="coursls_il2m"><i class="fal fa-bars"></i></div>
												<div class="menu_c">
													<div class="menu_ci copy_block_b">
														<div class="menu_cin"><i class="fal fa-copy"></i></div>
														<div class="menu_cih">Копировать</div>
													</div>
													<div class="menu_ci ">
														<div class="menu_cin"><i class="fal fa-pen"></i></div>
														<div class="menu_cih">Изменить</div>
													</div>
													<div class="menu_ci ">
														<div class="menu_cin"><i class="fal fa-trash"></i></div>
														<div class="menu_cih">Удалить</div>
													</div>
												</div>
											</div>
											<!-- <div class="coursls_il2">
												<? if ($block['type'] != 'approval'): ?> <i class="fal fa-angle-down"></i>
												<? else: ?> <i class="far fa-lock"></i> <? endif ?>
											</div> -->
										</div>
									</div>
								<? endif ?>

								<? if ((mysqli_num_rows($item_d) && !$block['type']) || (mysqli_num_rows($pay_lesson_d) && $block['type'] == 'approval')): ?>
									<? while ($item = mysqli_fetch_assoc($item_d)): ?>
										<? $lesson_id = $item['id']; ?>
										<? $pay_lesson_itd = db::query("select * from course_pay_lesson where lesson_id = '$lesson_id' and user_id = '$user_id' and open = 1"); ?>
										<? if (!$block['type'] || (mysqli_num_rows($pay_lesson_itd) && $block['type'] == 'approval')): ?>
											<div class="coursls_i clc_lesson_b" data-id="<?=$item['id']?>" href="lesson/?id=<?=$item['id']?>">
												<div class="coursls_ic">
													<div class="coursls_in"><?=$item['number']?>. <?=$item['name_'.$lang]?></div>
												</div>
												<? if ($item['open']): ?> <div class="coursls_il"><i class="far fa-play"></i></div>
												<? else: ?> <div class="coursls_il coursls_il_lock"><i class="far fa-lock"></i></div> <? endif ?>
											</div>
										<? endif ?>
									<? endwhile ?>
								<? endif ?>

								<? if ($user_right): ?>
									<div class="coursls_i_rg">
										<div class="btn btn_k add_lesson_b" data-block-id="<?=$block_id?>">
											<i class="far fa-layer-plus"></i>
											<span>Добавить урок</span>
										</div>
									</div>
								<? endif ?>

							</div>
						<? endwhile ?>
					</div>

					<? if ($user_right): ?>
						<div class="coursls_i_rg">
							<div class="btn btn_k add_block_b">
								<i class="far fa-layer-plus"></i>
								<? if (mysqli_num_rows($cblock) == 1): ?> <span>Разбить на модулы</span>
								<? else: ?> <span>Добавить другой модуль</span> <? endif ?>
							</div>
						</div>
					<? endif ?>

				<? else: ?>

					<? if ($user_right): ?>
						<div class="coursls_i_rg">
							<div class="btn btn_k add_lesson_b">
								<i class="far fa-layer-plus"></i>
								<span>Добавить первый урок</span>
							</div>
						</div>
					<? endif ?>

				<? endif ?>
			</div>

		</div>
	</div>

<? include "../block/footer.php"; ?>

		<!-- cours edit -->
		<div class="pop_bl pop_bl2 cours_edit_block">
			<div class="pop_bl_a cours_edit_back"></div>
			<div class="pop_bl_c">
				<div class="head_c">
					<h5>Курс өзгерту</h5>
					<div class="btn btn_dd2 cours_edit_back"><i class="fal fa-times"></i></div>
				</div>
				<div class="pop_bl_cl lazy_c">
					<div class="form_c">
						<div class="form_im">
							<div class="form_span">Курстың атауы:</div>
							<input type="text" class="form_txt cours_name" placeholder="Атауын жазыңыз" data-lenght="2" value="<?=$course_d['name_kz']?>" />
							<i class="fal fa-text form_icon"></i>
						</div>
						<div class="form_im">
							<div class="form_span">Доступ уақыты:</div>
							<input type="tel" class="form_txt fr_days cours_access" placeholder="60 күн" data-lenght="1" value="<?=$course_d['access']?>" />
							<i class="fal fa-calendar-alt form_icon"></i>
						</div>
						<div class="form_im">
							<div class="form_span">Автор:</div>
							<input type="text" class="form_txt cours_autor" placeholder="Авторды жазыңыз" data-lenght="2" value="<?=$course_d['autor']?>" />
							<i class="fal fa-user-graduate form_icon"></i>
						</div>
						<div class="form_im">
							<div class="form_span">Сатылым: (Сілтемесі)</div>
							<input type="url" class="form_txt cours_src" placeholder="Вставьте ссылку" data-lenght="1" value="<?=$course_d['src']?>" />
							<i class="fal fa-play form_icon"></i>
						</div>

						<div class="form_im">
							<div class="form_span">Курс фотосы:</div>
							<input type="file" class="cours_img file dsp_n" accept=".png, .jpeg, .jpg">
							<div class="form_im_img cours_img_add <?=($course_d['img']?'form_im_img2':'')?>" <?=($course_d['img']?'style="background-image: url(/assets/uploads/course/'.$course_d['img'].')"':'')?> data-txt="Фотоны жаңарту">Құрылғыдан таңдау</div>
						</div>

						<div class="form_im form_im_toggle">
							<div class="form_span">Бағасын жазу:</div>
							<input type="checkbox" class="price_inp" data-val="" />
							<div class="form_im_toggle_btn price1_clc <?=($course_d['price']||$course_d['price_sole']?'form_im_toggle_act':'')?>"></div>
						</div>
						<div class="price1_block <?=($course_d['price']||$course_d['price_sole']?'price1_block_act':'')?>">
							<div class="form_im">
								<div class="form_span">Бағасы:</div>
								<input type="tel" class="form_im_txt fr_price cours_price" placeholder="10.000 тг" data-lenght="1" value="<?=$course_d['price']?>" />
								<i class="fal fa-tenge form_icon"></i>
							</div>
							<div class="form_im">
								<div class="form_span">Жіңілдік бағасы:</div>
								<input type="tel" class="form_im_txt fr_price cours_price_sole" placeholder="10.000 тг" data-lenght="1" value="<?=$course_d['price_sole']?>" />
								<i class="fal fa-tenge form_icon"></i>
							</div>
						</div>

						<div class="form_im form_im_toggle">
							<div class="form_span">Информация жазу:</div>
							<input type="checkbox" class="info_inp" data-val="" />
							<div class="form_im_toggle_btn number1_clc"></div>
						</div>
						<div class="number1_block">
							<div class="form_im">
								<div class="form_span">Сабақ саны:</div>
								<input type="tel" class="form_im_txt fr_number cours_item" placeholder="12" data-lenght="1" value="<?=$course_d['item']?>" />
								<i class="fal fa-play form_icon"></i>
							</div>
							<div class="form_im">
								<div class="form_span">Тапсырма саны:</div>
								<input type="tel" class="form_im_txt fr_number cours_assig" placeholder="3" data-lenght="1" value="<?=$course_d['assig']?>" />
								<i class="fal fa-scroll-old form_icon"></i>
							</div>
						</div>

						<div class="form_im form_im_bn">
							<div class="btn btn_cours_edit" data-cours-id="<?=$course_id?>">
								<i class="far fa-check"></i>
								<span>Cохранить</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<!-- block add -->
		<div class="pop_bl pop_bl2 block_add">
			<div class="pop_bl_a block_add_back"></div>
			<div class="pop_bl_c">
				<div class="head_c txt_c">
					<h5>Бөлім қосу</h5>
					<div class="btn btn_dd2 block_add_back"><i class="fal fa-times"></i></div>
				</div>
				<div class="pop_bl_cl">
					<div class="form_c">
						<div class="form_im">
							<div class="form_span">Бөлімнің атауы:</div>
							<input type="text" class="form_txt block_name" placeholder="Атауын жазыңыз" data-lenght="2">
							<i class="far fa-text form_icon"></i>
						</div>

						<div class="form_im form_im_toggle">
							<div class="form_span">Информация жазу:</div>
							<input type="checkbox" class="info_inp" data-val="" />
							<div class="form_im_toggle_btn number1_clc"></div>
						</div>
						<div class="number1_block">
							<div class="form_im">
								<div class="form_span">Сабақ саны:</div>
								<input type="tel" class="form_im_txt fr_number block_item" placeholder="12" data-lenght="1" />
								<i class="fal fa-play form_icon"></i>
							</div>
							<div class="form_im">
								<div class="form_span">Тапсырма саны:</div>
								<input type="tel" class="form_im_txt fr_number block_assig" placeholder="3" data-lenght="1" />
								<i class="fal fa-scroll-old form_icon"></i>
							</div>
						</div>

						<div class="form_im form_im_bn">
							<div class="btn btn_block_add" data-cours-id="<?=$course_id?>">
								<span>Добавить</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- block copy -->
		<div class="pop_bl pop_bl2 block_copy">
			<div class="pop_bl_a block_copy_back"></div>
			<div class="pop_bl_c">
				<div class="head_c txt_c">
					<h5>Копировать модуль</h5>
					<div class="btn btn_dd2 block_copy_back"><i class="fal fa-times"></i></div>
				</div>
				<div class="pop_bl_cl">
					<div class="form_c">
						<? $block_all = db::query("select * from course_block order by id asc"); ?>
						<? if (mysqli_num_rows($block_all)): ?>
							<div class="form_im form_sel">
								<div class="form_span">Выберите блок:</div>
								<div class="form_txt sel_clc block_cp_all" data-val="">Выбор:</div>
								<i class="fal fa-ballot-check form_icon"></i>
								<i class="fal fa-caret-down form_icon_sel"></i>
								<div class="form_im_sel sel_clc_i">
									<? while ($block_alld = mysqli_fetch_assoc($block_all)): ?>
										<div class="form_im_seli pack_each" data-val="<?=$block_alld['id']?>"><?=$block_alld['id']?>. <?=$block_alld['name_'.$lang]?></div>
									<? endwhile ?>
								</div>
							</div>
						<? endif ?>

						<br><br><br><br><br><br><br><br><br><br>

						<div class="form_im form_im_bn">
							<div class="btn btn_block_copy" data-block="">
								<span>Добавить</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<!-- lesson add -->
		<div class="pop_bl pop_bl2 lesson_add">
			<div class="pop_bl_a lesson_add_back"></div>
			<div class="pop_bl_c">
				<div class="head_c txt_c">
					<h5>Добавить урок</h5>
					<div class="btn btn_dd2 lesson_add_back"><i class="fal fa-times"></i></div>
				</div>
				<div class="pop_bl_cl">
					<div class="form_c">
						<div class="form_im">
							<div class="form_span">Название урока:</div>
							<input type="text" class="form_txt lesson_name" placeholder="Напишите называние" data-lenght="2">
							<i class="far fa-text form_icon"></i>
						</div>
						<div class="form_im form_im_toggle">
							<div class="form_span">Открыть урок:</div>
							<input type="checkbox" class="lesson_open" data-val="1" />
							<div class="form_im_toggle_btn form_im_toggle_act"></div>
						</div>

						<div class="form_im">
							<div class="form_span">Видео: (Yotube)</div>
							<input type="url" class="form_txt fr_youtube lesson_youtube" placeholder="Вставьте ссылку" data-lenght="1" />
							<i class="fal fa-play form_icon"></i>
						</div>
						<div class="form_im">
							<div class="form_span">Текст:</div>
							<textarea type="text" class="form_im_comment_aut lesson_txt" rows="5" autocomplete="off" autocorrect="off" aria-label="Напишите текст .." placeholder="Мәтінді жазыңыз .." ></textarea>
							<script>autosize(document.querySelectorAll('.form_im_comment_aut'));</script>
						</div>

						<div class="form_im form_im_bn">
							<div class="btn btn_lesson_add" data-cours-id="<?=$course_id?>" data-pack="<?=$pack_id?>">
								<span>Добавить</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


	<!-- block add -->
	<div class="pop_bl pop_bl2 lesson_edit">
		<div class="pop_bl_a lesson_edit_back"></div>
		<div class="pop_bl_c">
			<div class="head_c txt_c">
				<h5>Cабақты өңдеу</h5>
				<div class="btn btn_dd2 lesson_edit_back"><i class="fal fa-times"></i></div>
			</div>
			<div class="pop_bl_cl">
				<div class="lesson_edit_89">
					<div class="menu_c lesson_clc_menu" data-id="">
						<a class="menu_ci lesson_clc_viewm" href="" target="_blank">
							<div class="menu_cin"><i class="fal fa-external-link"></i></div>
							<div class="menu_cih">Ашу</div>
						</a>
						<!-- <div class="menu_ci edit_lesson_b">
							<div class="menu_cin"><i class="fal fa-pen"></i></div>
							<div class="menu_cih">Өңдеу</div>
						</div> -->
						<!-- <div class="menu_ci cours_copy" data-id="<?=$cours_id?>">
							<div class="menu_cin"><i class="fal fa-copy"></i></div>
							<div class="menu_cih">Көшіру</div>
						</div> -->
						<div class="menu_ci del_lesson_b">
							<div class="menu_cin"><i class="fal fa-trash"></i></div>
							<div class="menu_cih">Жою</div>
						</div>
					</div>
				</div>
				<div class="lesson_edit_99"></div>
			</div>
		</div>
	</div>