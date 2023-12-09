<div class="container-scroller">
	<div class="container-fluid page-body-wrapper full-page-wrapper">
		<div class="content-wrapper d-flex align-items-center auth px-0"
			style="background-image: url('<?= base_url('assets'); ?>/images/auth/register.jpg'); background-repeat: no-repeat; background-size: cover;">
			<div class="container-form row w-100 mx-0 ">
				<div class="container-form-2 col-lg-4 mx-auto">
					<div class="auth-form-light text-left py-5 px-4 px-sm-5 rounded-lg" style="backdrop-filter: blur(1px); opacity: 0.9;background-image: url(<?= base_url('assets');?>/images/auth/memphis-colorful.png)">
						<h3 class="font-weight-light">Register</h3>
						<form class="pt-5" action="<?= base_url('auth/registration'); ?>" method="POST">
							<div class="form-group">
								<input type="text" class="form-control form-control-lg" id="exampleInputFullname1"
									placeholder="Name" name="name" />
									<?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
							<div class="form-group">
								<input type="text" class="form-control form-control-lg" id="exampleInputUsername1"
									placeholder="Username" name="username"/>
									<?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
							<div class="form-group">
								<input type="email" class="form-control form-control-lg" id="exampleInputEmail1"
									placeholder="Email" name="email" />
									<?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
							<div class="form-group">
								<input type="password" class="form-control form-control-lg" id="exampleInputPassword1"
									placeholder="Password" name="password" />
									<?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
							<div class="mt-3">
								<button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit">SIGN UP</button>
							</div>
							<div class="text-center mt-4 font-weight-light">
								Already have an account?
								<a href="<?= base_url('auth');?>" class="text-primary">Login</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>