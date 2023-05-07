<? include "../config/core.php";

	// 
	$cours = db::query("select * from course where arh is null ORDER BY ins_dt desc");


	// site setting
	$menu_name = 'Менің курстарым';
	$css = ['main', 'cours'];
	$js = [];
?>
<? include "../block/header.php"; ?>

	<div class="cours">
		<div class="bl_c">

			<div class="cours_t">
				<h2 class="cours_h">Менің курстарым</h2>
			</div>

			<div class="bq3_c">
				<? while($cours_d = mysqli_fetch_array($cours)): ?>
					<a class="bq3_ci" href="<?=$cours_d['src']?>">
						<div class="bq3_cic">
							<div class="bq_ci_img">
								<div class="lazy_img" data-src="/assets/uploads/course/<?=$cours_d['img']?>"></div>
							</div>
							<div class="bq_ci_abs"></div>
							<div class="bq_ci_info">
								<div class="bq_cih"><?=$cours_d['name_'.$lang]?></div>

								<? if ($cours_d['price'] || $cours_d['price_sole']): ?>
									<div class="bq_cip">
										<? if ($cours_d['price_sole']): ?>
											<p class="bq_cip_sole"><?=$cours_d['price']?> тг</p>
											<p><?=$cours_d['price_sole']?> тг</p>
										<? else: ?> <p><?=$cours_d['price']?> тг</p> <? endif ?>
									</div>
								<? endif ?>

								<div class="bq_ci_btn">
									<div class="btn btn_dd2"><i class="fal fa-long-arrow-right"></i></div>
								</div>
							</div>
						</div>
					</a>
				<? endwhile ?>
			</div>

		</div>
	</div>

<? include "../block/footer.php"; ?>