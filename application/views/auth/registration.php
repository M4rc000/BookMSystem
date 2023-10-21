<div class="container-scroller">
	<div class="container-fluid page-body-wrapper full-page-wrapper">
		<div class="content-wrapper d-flex align-items-center auth px-0">
			<div class="row w-100 mx-0">
				<div class="col-lg-4 mx-auto">
					<div class="auth-form-light text-left py-5 px-4 px-sm-5">
						<h3 class="font-weight-light">Register</h3>
						<form class="pt-5" action="<? base_url('auth/registration'); ?>" method="POST">
							<div class="form-group">
								<input type="text" class="form-control form-control-lg" id="exampleInputFullname1"
									placeholder="Name" />
							</div>
							<div class="form-group">
								<input type="text" class="form-control form-control-lg" id="exampleInputUsername1"
									placeholder="Username" />
							</div>
							<div class="form-group">
								<input type="email" class="form-control form-control-lg" id="exampleInputEmail1"
									placeholder="Email" />
							</div>
							<div class="form-group">
								<input type="password" class="form-control form-control-lg" id="exampleInputPassword1"
									placeholder="Password" />
							</div>
							<div class="mt-3">
								<a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"
									href="../../../index.html">SIGN UP</a>
							</div>
							<div class="text-center mt-4 font-weight-light">
								Already have an account?
								<a href="login.html" class="text-primary">Login</a>
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
