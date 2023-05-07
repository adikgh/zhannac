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
	
	// Жазылымды тексеру
	$buy = db::query("select * from course_pay where course_id = '$course_id' and user_id = '$user_id' limit 1");
	if (mysqli_num_rows($buy)) {
		$buy_d = mysqli_fetch_assoc($buy);
		if ($buy_d['pack_id']) $pack_id = $buy_d['pack_id'];
	} else $buy = 0;
		
	// Тариф деректері
	if (!$buy || !$pack_id) {
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
	}

	// Блок деректері
	if ($pack_id) $cblock = db::query("select * from course_block where pack_id = '$pack_id' order by number asc");
	else $cblock = db::query("select * from course_block where course_id = '$course_id' order by number asc");

	
	// Сайттың баптаулары
	$menu_name = 'item';
	$site_set['utop_bk'] = ' ';
	$site_set['utop'] = $course_d['name_'.$lang];
	$site_set['autosize'] = true;
	$css = ['education/main', 'education/item'];
	$js = ['education/main'];
?>
<? include "../block/header.php"; ?>

	<div class="uitem">

		<div class="uitem_c <?=(mysqli_num_rows($cblock) == 0?'uitem_c2':'')?>">
			<!-- Инфо -->
			<div class="uitemc_l">

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

					<? if ($buy): ?>
						<div class="uitemci_tt">
							<span>Доступ:</span>
							<?
								if ($buy_d['ins_dt'] != null && $buy_d['end_dt'] != null) {
									$result = intval((strtotime($buy_d['end_dt']) - strtotime(date("d.m.Y"))) / (60*60*24));
									$result2 = intval((strtotime($buy_d['end_dt']) - strtotime($buy_d['ins_dt'])) / (60*60*24)); 
									if ($result2 == $result) $precent = 0; elseif ($result > 0) $precent = round(100 / ($result2 / ($result2 - $result))); else $precent = 100;
								}
							?>
							<div class="uitemci_time">
								<div class="uitemci_time_t">
									<div class="">Басы: <?=date("d-m-Y", strtotime($buy_d['ins_dt']))?></div>
									<div class="">Соңы: <?=date("d-m-Y", strtotime($buy_d['end_dt']))?></div>
								</div>
								<div class="uitemci_time_t">
									<div class="">
										<? if ($result > 0): ?> Аяқталуына: <?=$result?> күн бар
										<? else: ?> Аяқталғанына: <?=abs($result)?> күн болды <? endif ?>
									</div>
									<div class=""><?=$precent?>%</div>
								</div>
								<div class="uitemci_time_b"><div class="uitemci_time_b2" style="width:<?=$precent?>%"></div></div>
							</div>
						</div>
					<? endif ?>
				</div>

				<!--  -->
				<div class=""></div>
			</div>

			<!-- lesson -->
			<div class="uc_list">

				<? if (!$buy && mysqli_num_rows($pack_all)): ?>
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
							
							<? 
								if ($buy) {
									if ($course_d['open_type'] == 'block' && $course_d['open_days']) {
										$days = intval((strtotime(date("d.m.Y")) - strtotime($buy_d['ins_dt'])) / (60*60*24));
										$open_number = floor(($days + $course_d['open_days']) / $course_d['open_days']);
										if ($open_number > $block['number'] - $course_d['open_start']) $open = true; else $open = false;
									} else $open = true;
								} else $open = false;

								if (!mysqli_num_rows($pay_lesson_d) && $block['type'] == 'approval') $open = false;
								if (!$block['open']) $open = false;
								
								// echo $open;
							?>
							
							<div class="coursls_cn">
								<? if (mysqli_num_rows($cblock) != 1): ?>
									<div class="coursls_i coursls_b">
										<div class="coursls_ic">
											<div class="coursls_in"><?=$block['number']?> модуль. <?=$block['name_'.$lang]?></div>
											<div class="coursls_ip">
												<? if ($block['item']): ?> <div class="coursls_ipi"><?=$block['item']?> сабақ</div> <? endif ?>
												<? if ($block['question']): ?> <div class="coursls_ipi"><?=$block['question']?> сұрақ</div> <? endif ?>
												<? if ($block['test']): ?> <div class="coursls_ipi"><?=$block['test']?> тест</div> <? endif ?>
												<? if ($block['assig']): ?> <div class="coursls_ipi"><?=$block['assig']?> тапсырма</div> <? endif ?>
											</div>
										</div>
										<div class="coursls_il2">
											<? if ($open): ?> <i class="fal fa-angle-down"></i>
											<? else: ?> <i class="far fa-lock"></i> <? endif ?>
										</div>
									</div>
								<? endif ?>

								<? $number = 0; ?>
								<? if ((mysqli_num_rows($item_d) && !$block['type']) || (mysqli_num_rows($pay_lesson_d) && $block['type'] == 'approval')): ?>
									<? while ($item = mysqli_fetch_assoc($item_d)): ?>
										<? $lesson_id = $item['id']; ?>
										<? $pay_lesson_itd = db::query("select * from course_pay_lesson where lesson_id = '$lesson_id' and user_id = '$user_id' and open = 1"); ?>
										<? if (!$block['type'] || (mysqli_num_rows($pay_lesson_itd) && $block['type'] == 'approval')): ?>
											<? $number++; ?>
											<a class="coursls_i" <?=($item['open'] && $open?'href="lesson/?id='.$item['id'].'"':'')?>>
												<div class="coursls_ic">
													<div class="coursls_in"><?=$number?>. <?=$item['name_'.$lang]?></div>
												</div>
												<? if ($open): ?> 
													<div class="coursls_il <?=($item['open']?'':'coursls_il_lock')?>">
														<? if ($item['open']): ?> <i class="far fa-play"></i>
														<? else: ?> <i class="far fa-lock"></i> <? endif ?>
													</div>
												<? endif ?>
											</a>
										<? endif ?>
									<? endwhile ?>
								<? endif ?>

							</div>
						<? endwhile ?>
					</div>

				<? else: ?>

				<? endif ?>
			</div>

		</div>
	</div>

<? include "../block/footer.php"; ?>