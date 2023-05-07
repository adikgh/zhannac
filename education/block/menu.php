<? if ($site_set['header']): ?>
	<div class="header ">
		<div class="header_c">
			<div class="header_l">
				<a class="logo" href="/education/">
					<!-- <div class="logo_l lazy_img" data-src="/assets/img/logo/logo_bl.png"></div> -->
					<div class="logo_r"><?=$site['name']?></div>
				</a>
			</div>
			<div class="header_r">
				<? if ($user_id): ?>
					<div class="cmenu">
						<? if (!$user_right): ?> <a class="cmenu_i <?=($menu_name=='my'?'cmenu_i_act':'')?>" href="/education/my/"><?=t::w('My courses', $lang)?></a>
						<? else: ?> <a class="cmenu_i <?=($menu_name=='list'?'cmenu_i_act':'')?>" href="/education/my/list.php"><?=t::w('Courses', $lang)?></a> <? endif ?>
					</div>
					<div class="menu">
						<div class="menu_m menu_bars_clc">
							<div class="menu_mn"><?=$user['name']?> <?=($user['surname']?substr($user['surname'],0,1).'.':'')?></div>
							<div class="menu_bars">
								<div class="menu_bars_c lazy_img" data-src="/assets/uploads/users/<?=$user['img']?>">
									<?=($user['img']?'':'<i class="fal fa-user"></i>')?>
								</div>
							</div>
						</div>
						<div class="menu_c">
							<div class="menu_ci user_edit_pop">
								<div class="menu_cin"><i class="fal fa-user"></i></div>
								<div class="menu_cih"><?=t::w('My account', $lang)?></div>
							</div>
							<div class="menu_ci user_ph_pop">
								<div class="menu_cin"><i class="fal fa-mobile"></i></div>
								<div class="menu_cih"><?=t::w('My phone number', $lang)?></div>
							</div>
							<? if ($user_right): ?>
								<div class="menu_ci company_edit_pop">
									<div class="menu_cin"><i class="fal fa-cog"></i></div>
									<div class="menu_cih"><?=t::w('Platform setup', $lang)?></div>
								</div>
							<? endif ?>
							<? if ($site['whatsapp']): ?>
								<a class="menu_ci" href="https://wa.me/<?=$site['whatsapp']?>">
									<div class="menu_cin"><i class="fal fa-comment-dots"></i></div>
									<div class="menu_cih"><?=t::w('Help (whatsapp)', $lang)?></div>
								</a>
							<? endif ?>
							<a class="menu_ci" href="/education/exit.php">
								<div class="menu_cin"><i class="fal fa-sign-out"></i></div>
								<div class="menu_cih"><?=t::w('Exit', $lang)?></div>
							</a>
						</div>
					</div>
				<? endif ?>
			</div>
		</div>
		<div class="utop">
			<? if ($site_set['utop_bk']): ?>
				<div class="utop_l">
					<a class="utop_ic" href="/education/<?=$site_set['utop_bk']?>"><i class="fal fa-long-arrow-left"></i></a>
				</div>
			<? endif ?>
			<div class="utop_r">
				<? if ($site_set['utop']): ?>
					<div class="utop_nm"><?=$site_set['utop']?></div>
				<? else: ?>
					<a class="utop_nm utop_nm2 logo" href="/education/">
						<!-- <div class="logo_l lazy_img" data-src="/assets/img/logo/logo_bl.png"></div> -->
						<div class="logo_r"><?=$site['name']?></div>
					</a>
				<? endif ?>
				<? if ($site_set['utopu'] != false): ?>
					<a class="menu" href="/education/acc/">
						<div class="menu_bars">
							<div class="menu_bars_c lazy_img" data-src="/assets/uploads/users/<?=$user['img']?>">
								<?=($user['img']?'':'<i class="fal fa-user"></i>')?>
							</div>
						</div>
					</a>
				<? endif ?>
			</div>
		</div>
	</div>
<? endif ?>

<? if ($fg && $site_set['pmenu'] == true && $user_right): ?>
   <div class="pmenu">
      <div class="pmenu_c">
			<div class="pmenu_cm">
				<a class="pmenu_i <?=($menu_name=='list'?'pmenu_i_act':'')?>" href="/education/my/list.php">
					<i class="fal fa-graduation-cap"></i>
					<span><?=t::w('Courses', $lang)?></span>
				</a>
				<a class="pmenu_i <?=($menu_name=='club'?'pmenu_i_act':'')?>" href="/education/admin/users/">
					<i class="fal fa-users"></i>
					<span><?=t::w('Users', $lang)?></span>
				</a>

				<!-- <a class="pmenu_i <?=($menu_name=='acc'?'pmenu_i_act':'')?>" href="/education/acc/">
					<i class="fal fa-user"></i>
					<span>User</span>
				</a> -->
				<div class="pmenu_i " >
					<div class="menu_oz"></div>
					<div class="pmenu_ic pmenu_bars_clc">
						<i class="fal fa-bars"></i>
						<span><?=t::w('Add', $lang)?></span>
					</div>
					<div class="menu_c">
						<a class="menu_ci" href="/education/acc/">
							<div class="menu_cin"><i class="fal fa-user"></i></div>
							<div class="menu_cih">Личные данные</div>
						</a>
						<div class="menu_ci company_edit_pop">
							<div class="menu_cin"><i class="fal fa-cog"></i></div>
							<div class="menu_cih">Настройка плтаформы</div>
						</div>
						<a class="menu_ci" href="/education/exit.php">
							<div class="menu_cin"><i class="fal fa-sign-out"></i></div>
							<div class="menu_cih">Выход</div>
						</a>
					</div>
				</div>
				<div class="pmenu_i pmenu_i2" >
					<div class="menu_oz"></div>
					<div class="pmenu_ic pmenu_bars_clc">
						<i class="far fa-plus"></i>
					</div>
					<div class="menu_c">
						<a class="menu_ci" href="/education/acc/">
							<div class="menu_cin"><i class="fal fa-user"></i></div>
							<div class="menu_cih">Личные данные</div>
						</a>
					</div>
				</div>
			</div>
      </div>
   </div>
<? endif ?>

<!-- body start -->
<div class="app">
	<div class="ub1 <?=($user_right?'ub1_admin':'')?>">

	<!-- Шапка -->
	<? if ($site_set['utop_bk']): ?>
		<div class="utopc <?=(!$user_right?'uitemc_ud':'') ?>">
			<a class="utopc_bk" href="/education/<?=$site_set['utop_bk']?>">
				<div class=""><i class="fal fa-long-arrow-left"></i></div>
				<span>Назад</span>
			</a>
			<a class="utopc_s" href="/education/my/">Курсы</a>
			<a class="utopc_s" href="/education/course/?id=<?=$course_id?>"><?=$course_d['name_'.$lang]?></a>
			<? if ($pod_menu_name == 'users'): ?> <div class="utopc_s">Ученики</div> <? endif ?>
			<? if ($menu_name == 'lesson'): ?> <div class="utopc_s"><?=$lesson['name_'.$lang]?></div> <? endif ?>
		</div>
	<? endif ?>