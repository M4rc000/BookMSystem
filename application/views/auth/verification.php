<div class="container-scroller">
	<div class="container-fluid page-body-wrapper full-page-wrapper">
		<div class="content-wrapper d-flex align-items-center auth px-0"
        style="background-image: url('<?= $background; ?>'); background-size: cover; width: 100%; height: 100vh; background-repeat: no-repeat;">
			<div class="container-form row w-100 mx-0 ">
				<div class="container-form-2 col-lg-4 mx-auto">
					<div class="auth-form-light text-left py-5 px-4 px-sm-5 rounded-lg" style="backdrop-filter: blur(1px);background-image: url(<?= base_url('assets');?>/images/auth/doodles.png);">
						<h3 class="font-weight-light">Verification</h3>
						<form class="pt-5" action="<?= base_url('auth/verification'); ?>" method="POST">
							<div class="form-group">
								<input type="text" class="form-control form-control-lg" id="exampleInputFullname1"
									placeholder="Input your OTP number" name="name" />
									<?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>	
							<div class="mt-3">
								<button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit">Submit</button>
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
