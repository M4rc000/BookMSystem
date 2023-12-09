<div class="container-scroller">
			<div class="container-fluid page-body-wrapper full-page-wrapper">
				<div class="content-wrapper d-flex align-items-center auth px-0" style="background-image: url('<?= $background; ?>'); background-size: cover; width: 100%; height: 100vh; background-repeat: no-repeat;">
					<div class="container-form row w-100 mx-0">
						<div class="container-form-2 col-lg-4 mx-auto opacity-25">
							<div class="text-left py-5 px-4 px-sm-5 rounded-lg" style="backdrop-filter: blur(1px); opacity: 0.9;background-image: url(<?= base_url('assets');?>/images/auth/doodles.png);">
								<h3 class="font-weight-light"><strong>Login</strong></h3>
								<?php if ($this->session->flashdata('registration') != '') { ?>
									<?= $this->session->flashdata('registration'); ?>
								<?php } ?>
								<?php if ($this->session->flashdata('logout') != '') { ?>
									<?= $this->session->flashdata('logout'); ?>
								<?php } ?>
								<?php if ($this->session->flashdata('wrong_username') != '') { ?>
									<?= $this->session->flashdata('wrong_username'); ?>
								<?php } ?>
								<?php if ($this->session->flashdata('not_active_username') != '') { ?>
									<?= $this->session->flashdata('not_active_username'); ?>
								<?php } ?>
								<?php if ($this->session->flashdata('wrong_password') != '') { ?>
									<?= $this->session->flashdata('wrong_password'); ?>
								<?php } ?>
								<?php if ($this->session->flashdata('success') != '') { ?>
									<?= $this->session->flashdata('success'); ?>
								<?php } ?>

								<form class="pt-3" action="<?= base_url('auth'); ?>" method="POST">
									<div class="form-group">
										<input
											type="text"
											class="rounded-lg form-control form-control-lg"
											id="exampleInputEmail1"
											placeholder="Username" name="username" autocomplete="off"
										/>
									</div>
									<div class="form-group">
										<input
											type="password"
											class="rounded-lg form-control form-control-lg"
											id="exampleInputPassword1"
											placeholder="Password" name="password" autocomplete="off"
										/>
									</div>
									<div class="mt-3">
										<button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"
											type="submit">SIGN IN</button>
									</div>
									<div class="my-2 mt-5 d-flex justify-content-center align-items-center">
										<a href="<?= base_url('auth/forgotpassword'); ?>" class="auth-link text-black"
											><u>Forgot password?</u></a>
									</div>
									<div class="text-center mt-3 font-weight-light">
										Don't have an account?
										<a href="<?= base_url('auth/registration'); ?>" class="text-primary">Create</a>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- content-wrapper ends -->
			</div>
			<!-- page-body-wrapper ends -->
		</div>
		<!-- container-scroller -->