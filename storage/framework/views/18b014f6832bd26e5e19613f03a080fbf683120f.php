<!-- main-sidebar -->
		<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
		<aside class="app-sidebar sidebar-scroll">
			<div class="main-sidebar-header active">
				<a class="desktop-logo logo-light active" href="<?php echo e(url('/' . $page='index')); ?>"><img src="<?php echo e(URL::asset('assets/img/media/logo-uncode.co.png')); ?>" class="main-logo" alt="logo"></a>
				<a class="desktop-logo logo-dark active" href="<?php echo e(url('/' . $page='index')); ?>"><img src="<?php echo e(URL::asset('assets/img/media/logo-uncode.co.png')); ?>" class="main-logo dark-theme" alt="logo"></a>
				<a class="logo-icon mobile-logo icon-light active" href="<?php echo e(url('/' . $page='index')); ?>"><img src="<?php echo e(URL::asset('assets/img/brand/favicon.png')); ?>" class="logo-icon" alt="logo"></a>
				<a class="logo-icon mobile-logo icon-dark active" href="<?php echo e(url('/' . $page='index')); ?>"><img src="<?php echo e(URL::asset('assets/img/brand/favicon-white.png')); ?>" class="logo-icon dark-theme" alt="logo"></a>
			</div>
			<div class="main-sidemenu">
				<div class="app-sidebar__user clearfix">
					<div class="dropdown user-pro-body">
						<div class="">
							<img alt="user-img" class="avatar avatar-xl brround" src="<?php echo e(URL::asset('assets/img/faces/6.jpg')); ?>"><span class="avatar-status profile-status bg-green"></span>
						</div>
						<div class="user-info">
							<h4 class="font-weight-semibold mt-3 mb-0"><?php echo e(Auth::user()->nom); ?></h4>
							
						</div>
					</div>
				</div>
				<ul class="side-menu">

					<!-- DASHBOARD -->
					<li class="slide ">
						<a href="<?php echo e(route('admin.dashboard',app()->getLocale())); ?>" class="side-menu__item">
							<svg style="" xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" >
								<path d="M0 0h24v24H0V0z" fill="none"/>
								<path d="M5 9h14V5H5v4zm2-3.5c.83 0 1.5.67 1.5 1.5S7.83 8.5 7 8.5 5.5 7.83 5.5 7 6.17 5.5 7 5.5zM5 19h14v-4H5v4zm2-3.5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5-1.5-.67-1.5-1.5.67-1.5 1.5-1.5z" opacity=".3"/>
								<path d="M20 13H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1v-6c0-.55-.45-1-1-1zm-1 6H5v-4h14v4zm-12-.5c.83 0 1.5-.67 1.5-1.5s-.67-1.5-1.5-1.5-1.5.67-1.5 1.5.67 1.5 1.5 1.5zM20 3H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1zm-1 6H5V5h14v4zM7 8.5c.83 0 1.5-.67 1.5-1.5S7.83 5.5 7 5.5 5.5 6.17 5.5 7 6.17 8.5 7 8.5z"/>


							</svg>

							<span class="side-menu__label">
								<?php echo e(__('Tableau de bord')); ?>

							</span>
							<i class="angle fe fe-chevron-right"></i>
						</a>

					</li>
					<!-- AFFICHAGE FACTURES -->
					<li class="slide ">
						<a href="" class="side-menu__item">
							<svg style="" xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" >
								<path d="M0 0h24v24H0V0z" fill="none"/>
								<path d="M5 9h14V5H5v4zm2-3.5c.83 0 1.5.67 1.5 1.5S7.83 8.5 7 8.5 5.5 7.83 5.5 7 6.17 5.5 7 5.5zM5 19h14v-4H5v4zm2-3.5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5-1.5-.67-1.5-1.5.67-1.5 1.5-1.5z" opacity=".3"/>
								<path d="M20 13H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1v-6c0-.55-.45-1-1-1zm-1 6H5v-4h14v4zm-12-.5c.83 0 1.5-.67 1.5-1.5s-.67-1.5-1.5-1.5-1.5.67-1.5 1.5.67 1.5 1.5 1.5zM20 3H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1zm-1 6H5V5h14v4zM7 8.5c.83 0 1.5-.67 1.5-1.5S7.83 5.5 7 5.5 5.5 6.17 5.5 7 6.17 8.5 7 8.5z"/>


							</svg>

							<span class="side-menu__label">
								<?php echo e(__('Affichage de factures')); ?>

							</span>
							<i class="angle fe fe-chevron-right"></i>
						</a>

					</li>

					<!-- COMPTE CLIENT -->
					<li class="slide ">
						<a class="side-menu__item" data-toggle="slide" href="<?php echo e(url('/' . $page='#')); ?>">
							<svg style="" xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" >
								<path d="M0 0h24v24H0V0z" fill="none"/>
								<path d="M5 9h14V5H5v4zm2-3.5c.83 0 1.5.67 1.5 1.5S7.83 8.5 7 8.5 5.5 7.83 5.5 7 6.17 5.5 7 5.5zM5 19h14v-4H5v4zm2-3.5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5-1.5-.67-1.5-1.5.67-1.5 1.5-1.5z" opacity=".3"/>
								<path d="M20 13H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1v-6c0-.55-.45-1-1-1zm-1 6H5v-4h14v4zm-12-.5c.83 0 1.5-.67 1.5-1.5s-.67-1.5-1.5-1.5-1.5.67-1.5 1.5.67 1.5 1.5 1.5zM20 3H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1zm-1 6H5V5h14v4zM7 8.5c.83 0 1.5-.67 1.5-1.5S7.83 5.5 7 5.5 5.5 6.17 5.5 7 6.17 8.5 7 8.5z"/>


							</svg>

							<span class="side-menu__label">
								<?php echo e(__('Comptes clients')); ?>

							</span>
							<i class="angle fe fe-chevron-down"></i>
						</a>
						<ul class="slide-menu">
							<li class="sub-slide">
								<li>
									<a class="sub-slide-item" href="<?php echo e(route('accounts.create',app()->getLocale())); ?>">
										<?php echo e(__('Nouveau compte')); ?>

									</a>
								</li>
								<li>
									<a class="sub-slide-item" href="<?php echo e(route('accounts',app()->getLocale())); ?>">
										<?php echo e(__('Liste des comptes')); ?>

									</a>
								</li>
								

							</li>
						</ul>
					</li>

					<!-- CONFIGURATION PROJECT -->
					<li class="slide ">
						<a class="side-menu__item" data-toggle="slide" href="<?php echo e(url('/' . $page='#')); ?>">
							<svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" >
							<path d="M0 0h24v24H0V0z" fill="none"/>
							<path d="M5 9h14V5H5v4zm2-3.5c.83 0 1.5.67 1.5 1.5S7.83 8.5 7 8.5 5.5 7.83 5.5 7 6.17 5.5 7 5.5zM5 19h14v-4H5v4zm2-3.5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5-1.5-.67-1.5-1.5.67-1.5 1.5-1.5z" opacity=".3"/>
							<path d="M20 13H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1v-6c0-.55-.45-1-1-1zm-1 6H5v-4h14v4zm-12-.5c.83 0 1.5-.67 1.5-1.5s-.67-1.5-1.5-1.5-1.5.67-1.5 1.5.67 1.5 1.5 1.5zM20 3H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1zm-1 6H5V5h14v4zM7 8.5c.83 0 1.5-.67 1.5-1.5S7.83 5.5 7 5.5 5.5 6.17 5.5 7 6.17 8.5 7 8.5z"/>
							</svg>
							<span class="side-menu__label">
								<?php echo e(__('Configuration des projets')); ?>


							</span>
							<i class="angle fe fe-chevron-down"></i>
						</a>
						<ul class="slide-menu">
							<li class="sub-slide">

								<li>
									<a class="sub-slide-item" href="#">
										<?php echo e(__('Nouveau projet')); ?>

									</a>
								</li>
								<li>
									<a class="sub-slide-item" href="#">
										<?php echo e(__('Liste des projets')); ?>

									</a>
								</li>
								<li>
									<a class="sub-slide-item" href="#">
										<?php echo e(__('Chargement de données')); ?>

									</a>
								</li>

							</li>
						</ul>
					</li>

					<!-- CONFIGURATION ACCES -->
					<li class="slide ">
						<a class="side-menu__item" data-toggle="slide" href="<?php echo e(url('/' . $page='#')); ?>">
							<svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" >
							<path d="M0 0h24v24H0V0z" fill="none"/>
							<path d="M5 9h14V5H5v4zm2-3.5c.83 0 1.5.67 1.5 1.5S7.83 8.5 7 8.5 5.5 7.83 5.5 7 6.17 5.5 7 5.5zM5 19h14v-4H5v4zm2-3.5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5-1.5-.67-1.5-1.5.67-1.5 1.5-1.5z" opacity=".3"/>
							<path d="M20 13H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1v-6c0-.55-.45-1-1-1zm-1 6H5v-4h14v4zm-12-.5c.83 0 1.5-.67 1.5-1.5s-.67-1.5-1.5-1.5-1.5.67-1.5 1.5.67 1.5 1.5 1.5zM20 3H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1zm-1 6H5V5h14v4zM7 8.5c.83 0 1.5-.67 1.5-1.5S7.83 5.5 7 5.5 5.5 6.17 5.5 7 6.17 8.5 7 8.5z"/>
							</svg>
							<span class="side-menu__label">
								
								<?php echo e(__('Configuration des accès')); ?>

							</span>
							<i class="angle fe fe-chevron-down"></i>
						</a>
						<ul class="slide-menu">
							<li class="sub-slide">

									<li>
										<a class="sub-slide-item" href="<?php echo e(route('roles.create',app()->getLocale())); ?>">
											<?php echo e(__('Nouveau role')); ?>

										</a>
									</li>
									<li>
										<a class="sub-slide-item" href="<?php echo e(route('roles',app()->getLocale())); ?>">
											<?php echo e(__('Liste des roles')); ?>

										</a>
									</li>

							</li>
						</ul>
					</li>
					

				</ul>
			</div>
		</aside>
<!-- main-sidebar -->
<?php /**PATH /Users/mac/Sites/projets/web/uncode-app/resources/views/admin/uncod/layouts/main-sidebar.blade.php ENDPATH**/ ?>