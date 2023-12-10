<?php $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(); ?>
<style>
	.footer-dark{
		background-color: rgb(40,47,58);
	}
</style>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<div class="container-scroller">
	<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row" id="topbar">
		<div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
			<a class="navbar-brand brand-logo mr-5" href="index.html"><img src="<?= base_url('assets'); ?>/images/logo.svg" class="mr-2"
					alt="logo" /></a>
			<a class="navbar-brand brand-logo-mini" href="index.html"><img src="<?= base_url('assets'); ?>/images/logo-mini.svg" alt="logo" /></a>
		</div>
		<div class="navbar-menu-wrapper d-flex align-items-center justify-content-start">
			<button class="navbar-toggler navbar-toggler align-self-center pb-1" type="button" data-toggle="minimize">
				<span class="icon-menu"></span>
			</button>
			<ul class="navbar-nav navbar-nav-right">
				<li class="nav-item dropdown">
					<a class="nav-link count-indicator dropdown-toggle" id="dark-mode" href="#" style="font-size: 20px;">
						<i class="mdi mdi-brightness-4 mx-0"></i>
					</a>
				</li>
				<li class="nav-item dropdown pr-3 pt-1">
					<a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
						data-toggle="dropdown">
						<i class="icon-bell mx-0 pt-1"></i>
						<span class="count"></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
						aria-labelledby="notificationDropdown">
						<p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
						<a class="dropdown-item preview-item">
							<div class="preview-thumbnail">
								<div class="preview-icon bg-success">
									<i class="ti-info-alt mx-0"></i>
								</div>
							</div>
							<div class="preview-item-content">
								<h6 class="preview-subject font-weight-normal">Application Error</h6>
								<p class="font-weight-light small-text mb-0 text-muted">
									Just now
								</p>
							</div>
						</a>
						<a class="dropdown-item preview-item">
							<div class="preview-thumbnail">
								<div class="preview-icon bg-warning">
									<i class="ti-settings mx-0"></i>
								</div>
							</div>
							<div class="preview-item-content">
								<h6 class="preview-subject font-weight-normal">Settings</h6>
								<p class="font-weight-light small-text mb-0 text-muted">
									Private message
								</p>
							</div>
						</a>
						<a class="dropdown-item preview-item">
							<div class="preview-thumbnail">
								<div class="preview-icon bg-info">
									<i class="ti-user mx-0"></i>
								</div>
							</div>
							<div class="preview-item-content">
								<h6 class="preview-subject font-weight-normal">New user registration</h6>
								<p class="font-weight-light small-text mb-0 text-muted">
									2 days ago
								</p>
							</div>
						</a>
					</div>
				</li>
				<li class="nav-item dropdown pr-3">
					<a class="nav-link" id="notificationDropdown" href="#"
						data-toggle="dropdown">
						<i class="mdi mdi-information-outline" style="line-height: 0px; font-size: 25px;"></i>
					</a>
					<div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
						aria-labelledby="notificationDropdown">
						<p class="mb-0 font-weight-normal float-left dropdown-header" id="time"></p>
					</div>
				</li>
				<li class="nav-item nav-profile dropdown pb-3">
					<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
						<img src="<?= base_url('assets'); ?>/images/profile/default.webp" alt="profile" style="width: 45px; height: 40px;"/>
					</a>
					<h5 class="text-white pt-4 pl-2 fs-1"><?= $user['username']; ?></h4>
					<div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
						<a class="dropdown-item">
							<i class="ti-settings text-primary"></i>
							Settings
						</a>
						<a class="dropdown-item" data-bs-target="#Logout" data-bs-toggle="modal" href="#">
							<i class="ti-power-off text-primary"></i>
							Logout
						</a>
					</div>
				</li>
			</ul>
			<button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
				data-toggle="offcanvas">
				<span class="icon-menu"></span>
			</button>
		</div>
	</nav>
	
	<!-- Logout CONFIRM MODAL-->
	<div class="modal fade" id="Logout" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top: -5rem">
	<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header">
			<h4 class="modal-title pb-0 mb-0" id="exampleModalLabel">Confirm to logout ?</h4>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
			<a href="<?= base_url('auth/logout'); ?>"><button type="button" class="btn btn-primary">Confirm</button></a>
		</div>
		</div>
	</div>
	</div>

	<script>
		$(document).ready(function() {
			if (localStorage.getItem('darkMode') === 'true') {
				$('#topbar').addClass('navbar-dark');
				$('body').addClass('sidebar-dark');
				$('footer').addClass('footer-dark');
				$('#dark-mode i').removeClass('mdi-brightness-4').addClass('mdi-brightness-5');
			}
			
			$('#dark-mode').click(function() {
				$('#topbar').toggleClass('navbar-dark');
				$('body').toggleClass('sidebar-dark');
				$('footer').toggleClass('footer-dark');
				var icon = $('#dark-mode i');
				if (icon.hasClass('mdi-brightness-4')) {
					icon.removeClass('mdi-brightness-4').addClass('mdi-brightness-5');
					localStorage.setItem('darkMode', 'true');
				} else {
					icon.removeClass('mdi-brightness-5').addClass('mdi-brightness-4');
					localStorage.setItem('darkMode', 'false');
				}
			});

			const RealTime = {
				getCurrentTime: () => {
					const options = {
					year: 'numeric',
					month: 'long',
					day: '2-digit',
					hour: '2-digit',
					minute: '2-digit',
					second: '2-digit',
					hour12: true
					};

					return new Date().toLocaleString('en-US', options);
				}
			};

			function updateCurrentTime() {
				$('#time').text(RealTime.getCurrentTime() + ' | Indonesian Time');
			}

			updateCurrentTime();
			setInterval(updateCurrentTime, 1000);
		});
	</script>
