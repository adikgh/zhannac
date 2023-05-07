	<!-- body end -->
		</div>
	</div>

	<? if ($site_set['footer']): ?>
		<footer class="footer">
			<div class="bl_c">

				<div class="footer_t">
					<div class="footer_tt">
						<div class="footer_ttl">
							<div class="footer_tth"><?=$site['name']?></div>
							<div class="footer_ttc">
								<div class="footer_ttp">Бұл жерде текст болса</div>
							</div>
							<br>
							<div class="footer_tbl">
								<a class="btn btn_dd2" href="https://instagram.com/<?=$site['instagram']?>" target="_blank"><i class="fab fa-instagram"></i></a>
								<a class="btn btn_dd2" href="https://facebook.com/<?=$site['facebook']?>" target="_blank"><i class="fab fa-facebook"></i></a>
								<a class="btn btn_dd2" href="https://youtube.com/<?=$site['youtube']?>" target="_blank"><i class="fab fa-youtube"></i></a>
							</div>
						</div>
						<div class="footer_ttr">
							<div class="footer_ttri">
								<div class="footer_tth">Информация</div>
								<div class="footer_tta"><i class="far fa-angle-down"></i></div>
								<div class="footer_ttc">
									<a href="/about/">Обо мне</a>
									<a href="/about/contacts/">Контакты</a>
								</div>
							</div>
							<div class="footer_ttri">
								<div class="footer_tth">Курсы</div>
								<div class="footer_tta"><i class="far fa-angle-down"></i></div>
								<div class="footer_ttc">
									<? $course = db::query("select * from course where selling = 1 and arh is null ORDER BY ins_dt desc"); ?>
									<? while($course_d = mysqli_fetch_array($course)): ?>
										<a href=""><?=$course_d['name_'.$lang]?></a>
									<? endwhile ?>
								</div>
							</div>
							<div class="footer_ttri">
								<div class="footer_tth">Политика сайта</div>
								<div class="footer_tta"><i class="far fa-angle-down"></i></div>
								<div class="footer_ttc">
									<a href="/about/privacy-security/privacy-policy.php">Политика конфиденциальности</a>
									<a href="/about/privacy-security/terms-conditions.php">Условия и положения</a>
									<a href="/about/privacy-security/cookie-policy.php">Политика в отношении файлов кэш (cookie)</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="footer_b">
					<div class="footer_bl">© <?=$site['name']?>, 2022</div>
					<div class="footer_br">
						<a href="https://gprog.kz" target="_blank" class="gprog_bl">
							<span>Сделано</span>
							<div class="gprog_heart"><i class="fas fa-heart"></i></div>
							<span>в #gprog</span>
							<div class="gprog_ab">
								<div class="gprog_lg"><div class="lazy_img" data-src="https://gprog.kz/assets/img/logo/logo_tr_1200.png"></div></div>
								<div class="gprog_h">G prog</div>
								<div class="gprog_p">Открой с нами свою онлайн-школу!</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</footer>
	<? endif ?>

	<!-- main js -->
	<script src="/assets/js/norm.js?v=<?=$ver?>"></script>
	<!-- <script src="/assets/js/main.js?v=<?=$ver?>"></script> -->
	<? foreach ($js as $i): ?> <script src="/assets/js/<?=$i?>.js?v=<?=$ver?>"></script> <? endforeach ?>
		
</body>
</html>

	<? include "modal.php"; ?>