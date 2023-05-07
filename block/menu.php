<? if ($site_set['header']): ?>
	<div class="header <?=($site_set['mheader']!='false'?'':'mheader_none')?>">
		<div class="bl_c">
			<div class="header_c">
				<a class="logo" href="/"><?=$site['name']?></a>
				<div class="menu">
					<div class="menu_bars menu_bars_clc">
						<span>Мәзір</span>
						<div class="menu_bars_i"></div>
					</div>
					<div class="menu_c">
						<a class="menu_ci" href="/education/">
							<div class="menu_cin"><i class="fal fa-user"></i></div>
							<div class="menu_cih">Менің аккаунтым</div>
						</a>
						<a class="menu_ci" href="/course/">
							<div class="menu_cin"><i class="fal fa-graduation-cap"></i></div>
							<div class="menu_cih">Курстар</div>
						</a>
						<a class="menu_ci" href="https://www.instagram.com/<?=$site['instagram']?>" target="_blank">
							<div class="menu_cin"><i class="fab fa-instagram"></i></div>
							<div class="menu_cih">@dr_seytzhapparovna</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
<? endif ?>

<!-- body start -->
<div class="app">