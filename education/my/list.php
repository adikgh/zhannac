<? include "../../config/core.php";

	// Қолданушыны тексеру
	if (!$user_right) header('location: /education/');

	// course 
	$cours = db::query("select * from course ORDER BY number DESC");


	// Сайттың баптаулары
	$menu_name = 'list';
	$site_set['pmenu'] = true;
	$css = ['education/main', 'education/cours'];
	$js = ['education/main', 'education/admin'];
?>
<? include "../block/header.php"; ?>

	<div class="ucours">

		<div class="head_c">
			<h4><?=t::w('Courses', $lang)?></h4>
		</div>

		<div class="uc_d">
			<? if ($user_right): ?>
				<div class="uc_di bq3_ci_rg cours_add_pop">
					<i class="fal fa-plus"></i>
					<span><?=t::w('Add course', $lang)?></span>
				</div>
			<? endif ?>

			<? while($cours_d = mysqli_fetch_assoc($cours)): ?>
				<? $cours_id = $cours_d['id']; ?>
				<? if ($cours_d['info']) $cours_d = array_merge($cours_d, fun::course_info($cours_d['id'])); ?>
				<?	$sub = db::query("select * from course_pay where course_id = '$cours_id' and user_id = '$user_id'"); ?>
				<? if (mysqli_num_rows($sub) || $user_right) : ?>
					<? if (mysqli_num_rows($sub) && !$user_right) $sub_i = mysqli_fetch_assoc($sub); else $sub_i = null; ?>
					<a class="uc_di" href="../course/admin.php?id=<?=$cours_id?>">
						<div class="bq_ci_img"><div class="lazy_img" data-src="/assets/uploads/course/<?=$cours_d['img']?>"></div></div>
						<div class="uc_dit">
							<div class="bq_ci_info"><div class="bq_cih"><?=$cours_d['name_'.$lang]?></div></div>
							<? if ($cours_d['info']): ?>
								<div class="uc_dib">
									<? if ($sub_i['view']) $precent = round(100 / ($cours_d['item'] / $sub_i['view'])); ?>
									<div class="uc_dib_ckb">
										<div class="uc_dib_ckb2">
											<div class="itemci_ls">
												<? if ($cours_d['arh']): ?> <div class="itemci_lsi itemci_lsi_arh">Курс архивте</div> <? endif ?>
												<? if ($cours_d['item']): ?> <div class="itemci_lsi"><?=($sub_i['view']?$sub_i['view'].'/':'')?><?=$cours_d['item']?> уроков</div> <? endif ?>
												<? if ($cours_d['test']): ?> <div class="itemci_lsi"><?=$cours_d['test']?> тесты</div> <? endif ?>
												<? if ($cours_d['assig']): ?> <div class="itemci_lsi"><?=$cours_d['assig']?> задачи</div> <? endif ?>
											</div>
											<? if ($sub_i['view']): ?> <div class="itemci_lsr"><?=$precent?>%</div> <? endif ?>
										</div>
										<? if ($sub_i['view']): ?>
											<div class="uitemci_time_b">
												<div class="uitemci_time_b2" style="width:<?=$precent?>%"></div>
											</div>
										<? endif ?>
									</div>
								</div>
							<? endif ?>
						</div>
						<!-- <? if (!$sub_i['view']): ?> <div class="bq_ci_btn"><div class="btn btn_gr btn_dd"><i class="fal fa-long-arrow-right"></i></div></div> <? endif ?> -->
					</a>
				<? endif ?>
			<? endwhile ?>
		</div>

	</div>

<? include "../block/footer.php"; ?>

	<!-- cours add -->
	<div class="pop_bl pop_bl2 cours_add_block">
		<div class="pop_bl_a cours_add_back"></div>
		<div class="pop_bl_c">
			<div class="head_c">
				<h5>Добавить курс</h5>
				<div class="btn btn_dd2 cours_add_back"><i class="fal fa-times"></i></div>
			</div>
			<div class="pop_bl_cl">
				<div class="form_c">
					<div class="form_im">
						<div class="form_span">Название курса:</div>
						<input type="text" class="form_txt cours_name" placeholder="Напишите имя" data-lenght="2" />
						<i class="fal fa-text form_icon"></i>
					</div>
					<div class="form_im">
						<div class="form_span">Время доступа:</div>
						<input type="tel" class="form_txt fr_days cours_access" placeholder="60 дней" data-lenght="1" />
						<i class="fal fa-calendar-alt form_icon"></i>
					</div>
					<div class="form_im">
						<div class="form_span">Автор:</div>
						<input type="text" class="form_txt cours_autor" placeholder="Напишите автора" data-lenght="2" />
						<i class="fal fa-user-graduate form_icon"></i>
					</div>
					<div class="form_im">
						<div class="form_span">Сатылым: (Сілтемесі)</div>
						<input type="url" class="form_txt cours_src" placeholder="Вставьте ссылку" data-lenght="1" value="" />
						<i class="fal fa-play form_icon"></i>
					</div>

					<div class="form_im">
						<div class="form_span">Фото курса:</div>
						<input type="file" class="cours_img file dsp_n" accept=".png, .jpeg, .jpg">
						<div class="form_im_img lazy_img cours_img_add" data-txt="Фотоны жаңарту">Выбрать с устройства</div>
					</div>

					<div class="form_im form_im_toggle">
						<div class="form_span">Написать цену:</div>
						<input type="checkbox" class="price_inp" data-val="" />
						<div class="form_im_toggle_btn price1_clc"></div>
					</div>
					<div class="price1_block">
						<div class="form_im">
							<div class="form_span">Цена:</div>
							<input type="tel" class="form_im_txt fr_price cours_price" placeholder="10.000 тг" data-lenght="1" />
							<i class="fal fa-tenge form_icon"></i>
						</div>
						<div class="form_im">
							<div class="form_span">Цена со скидкой:</div>
							<input type="tel" class="form_im_txt fr_price cours_price_sole" placeholder="10.000 тг" data-lenght="1" />
							<i class="fal fa-tenge form_icon"></i>
						</div>
					</div>

					<div class="form_im form_im_toggle">
						<div class="form_span">Написать информацию:</div>
						<input type="checkbox" class="info_inp" data-val="" />
						<div class="form_im_toggle_btn number1_clc"></div>
					</div>
					<div class="number1_block">
						<div class="form_im">
							<div class="form_span">Количество уроков:</div>
							<input type="tel" class="form_im_txt fr_number cours_item" placeholder="12" data-lenght="1" />
							<i class="fal fa-play form_icon"></i>
						</div>
						<div class="form_im">
							<div class="form_span">Количество задач:</div>
							<input type="tel" class="form_im_txt fr_number cours_assig" placeholder="3" data-lenght="1" />
							<i class="fal fa-scroll-old form_icon"></i>
						</div>
					</div>

					<div class="form_im form_im_bn">
						<div class="btn btn_item_add">
							<i class="far fa-check"></i>
							<span>Сохранить</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>