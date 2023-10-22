<div class="container-scroller">
	<div class="container-fluid page-body-wrapper full-page-wrapper">
		<div class="content-wrapper d-flex align-items-center auth px-0" style="background-image: url('<?= $background; ?>');">
			<div class="row w-100 mx-0">
				<div class="col-lg-4 mx-auto">
					<div class="container-forgot auth-form-light text-left py-5 px-4 px-sm-5 rounded-lg">
						<h4>Forgot your password ?</h4>
						<form class="pt-3">
							<div class="form-group">
								<input type="email" class="rounded-lg form-control form-control-lg"
									id="exampleInputEmail1" placeholder="Email" />
							</div>
							<div class="mt-3">
								<a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"
									href="../../../index.html">Notify</a>
							</div>
							<div class="text-center mt-5 font-weight-light">
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
