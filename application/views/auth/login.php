<div class="container-scroller">
			<div class="container-fluid page-body-wrapper full-page-wrapper">
				<div class="content-wrapper d-flex align-items-center auth px-0" style="background-image: url('<?= $background; ?>');">
					<div class="container-form row w-100 mx-0">
						<div class="container-form-2 col-lg-4 mx-auto ">
							<div class="auth-form-light text-left py-5 px-4 px-sm-5 rounded-lg">
								<h3 class="font-weight-light">Login</h3>
								<?php if($this->session->flashdata('registration') != '') { ?>
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        Your account successfully registered !
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                        <?php unset($_SESSION['registration']); ?>
                                    </div>
                                <?php } ?>
								<form class="pt-3">
									<div class="form-group">
										<input
											type="email"
											class="rounded-lg form-control form-control-lg"
											id="exampleInputEmail1"
											placeholder="Username"
										/>
									</div>
									<div class="form-group">
										<input
											type="password"
											class="rounded-lg form-control form-control-lg"
											id="exampleInputPassword1"
											placeholder="Password"
										/>
									</div>
									<div class="mt-3">
										<a
											class="btn btn-block btn-secondary btn-lg font-weight-medium auth-form-btn"
											href="../../../index.html"
											>SIGN IN</a
										>
									</div>
									<div
										class="my-2 mt-5 d-flex justify-content-center align-items-center"
									>
										<a href="<?= base_url('auth/forgotpassword'); ?>" class="auth-link text-black"
											>Forgot password?</a
										>
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