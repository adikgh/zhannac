<? include "config/core.php";

	if (isset($_GET['c'])) header('location: /education/sign.php?id='.$_GET['c']);
	else header('location: /education/');
	

	$css = ['main'];

?>
<? include "block/header.php"; ?>

	<div class="obl1">
		<div class="obl1_abs lazy_img" data-src="/assets/img/bag/image 1.png"></div>
		<div class="bl_c">
			<div class="obl1_c">
				<div class="obl1_ca1 lazy_img" data-src="/assets/img/bag/Female 2.png"></div>
				<div class="obl1_ca2 lazy_img" data-src="/assets/img/bag/Heart копия 1.png"></div>
				<div class="obl1_ca3 lazy_img" data-src="/assets/img/bag/Female 1.png"></div>
				<div class="obl1_ca4 lazy_img" data-src="/assets/img/bag/Heart копия 3.png"></div>
				<!-- <div class="obl1_ca5 lazy_img" data-src="/assets/img/bag/Heart копия 2.png"></div> -->
				<div class="obl1_l">
					<div class="obl1_l1">Өзіңдегі <span>гинекологиялық <br> патологияларды</span> уақтылы <br> анықтап, дұрыс емдеу арқылы</div>
					<div class="obl1_l2">өміріңнің <br> <span>сапасын <br> арттыр!</span></div>
				</div>
				<div class="obl1_r">
					<div class="lazy_img" data-src="/assets/img/bag/IMG_4871 копия 1.png"></div>
				</div>
			</div>
		</div>
	</div>

	<div class="obl2">
		<div class="bl_c">
			<div class="obl2_c">
				<div class="obl2_l">
					<div class="obl2_l1">Дәргірер:</div>
					<div class="obl2_l2">Қошанова Балнұр <br> Сейтжаппарқызы</div>
					<ul class="obl2_l3">
						<li>Қарағанды мемлекеттік медицина университеті, Акушер-гинеколог, Плазмолог, Эндокринолог, Уролог, Имтренер</li>
						<li>Бедеулікті емдеу және онкологияны ерте анықтау бойынша тұрақты тәжірибе жинаушы</li>
					</ul>
				</div>
				<div class="obl2_r">
					<div class="lazy_img" data-src="/assets/img/bag/IMG_4915 копия 1.png"></div>
				</div>
			</div>
		</div>
	</div>

	<div class="obl3">
		<div class="bl_c">
			<div class="head_c txt_c">
				<h1>онлайн бағдарламалар:</h1>
			</div>
			<div class="obl3_c">
				<div class="obl3_i">
					<div class="obl3_img lazy_img" data-src="/assets/img/bag/image 3.png"></div>
					<div class="obl3_abs"></div>
					<div class="obl3_ic">
						<div class="obl3_ict">«Денсаулығым - байлығым»</div>
						<div class="btn">Толығырақ</div>
					</div>
				</div>
				<div class="obl3_i">
					<div class="obl3_img lazy_img" data-src="/assets/img/bag/image 4.png"></div>
					<div class="obl3_abs"></div>
					<div class="obl3_ic">
						<div class="obl3_ict">«vip кайф»</div>
						<div class="btn">Толығырақ</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- <div class="s45"></div> -->

<? include "block/footer.php"; ?>