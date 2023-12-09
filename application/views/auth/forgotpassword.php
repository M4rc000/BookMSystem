<style>
	@import url('https://fonts.googleapis.com/css?family=Raleway:200');

	.digit-group input {
		width: 40px;
		height: 60px;
		background-color: rgb(200, 201, 202);
		border: none;
		line-height: 50px;
		text-align: center;
		font-size: 24px;
		font-family: 'Raleway', sans-serif;
		font-weight: 700;
		color: white;
		margin: 0 2px;
		border-radius: 10px;
		margin-bottom: 3rem;
	}

</style>
<div class="container-scroller">
	<div class="container-fluid page-body-wrapper full-page-wrapper">
		<div class="content-wrapper d-flex align-items-center auth px-0"
			style="background-image: url('<?= $background; ?>');">
			<div class="row w-100 mx-0">
				<div class="col-lg-4 mx-auto">
					<?php if ($this->session->flashdata('error') != '') { ?>
					<?= $this->session->flashdata('error'); ?>
					<?php } ?>
					<?php if ($this->session->flashdata('notfound') != '') { ?>
					<?= $this->session->flashdata('notfound'); ?>
					<?php } ?>
					<div class="container-forgot auth-form-light text-left py-5 px-4 px-sm-5 rounded-lg">
						<h4>Forgot your password ?</h4>
						<br>
						<?php if ($this->session->flashdata('success_send') != '' || $this->session->flashdata('otp_notfound') != '') { ?>
						<?= $this->session->flashdata('success_send'); ?>
						<?= $this->session->flashdata('otp_notfound'); ?>
						<form action="<?= base_url('auth/newpassword'); ?>" method="POST">
							<div class="digit-group">
								<center>
									<input type="text" id="digit-1" name="digit-1" data-next="digit-2" />
									<input type="text" id="digit-2" name="digit-2" data-next="digit-3"
										data-previous="digit-1" />
									<input type="text" id="digit-3" name="digit-3" data-next="digit-4"
										data-previous="digit-2" />
									<input type="text" id="digit-4" name="digit-4" data-next="digit-5"
										data-previous="digit-3" />
									<input type="text" id="digit-5" name="digit-5" data-next="digit-6"
										data-previous="digit-4" />
									<input type="text" id="digit-6" name="digit-6" data-previous="digit-5" />
								</center>
							</div>
							<input type="text" name="email" id="email" value="<?= $this->session->userdata('email_'); ?>"
								style="display: none;">
							<input type="text" id="token" name="token" style="display: none;">
							<button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"
									type="submit">Submit</button>
						</form>
						<?php } else { ?>
							<form action="<?= base_url('auth/forgotpassword'); ?>" method="post">
								<?= $this->session->flashdata('email_notfound'); ?>
								<div class="form-group">
									<input type="text" class="rounded-lg form-control form-control-lg"
										id="exampleInputEmail1" name="key" placeholder="Email" required/>
								</div>
								<div class="mt-3">
									<button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"
									type="submit">Notify</button>
								</div>
							</form>
						<?php } ?>
						<div class="text-center mt-5 font-weight-light">
							Don't have an account?
							<a href="<?= base_url('auth/registration'); ?>" class="text-primary">Create</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	$('.digit-group').find('input').each(function () {
		$(this).attr('maxlength', 1);
		$(this).on('keyup', function (e) {
			var parent = $($(this).parent());

			if (e.keyCode === 8 || e.keyCode === 37) {
				var prev = parent.find('input#' + $(this).data('previous'));

				if (prev.length) {
					$(prev).select();
				}
			} else if ((e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 65 && e.keyCode <= 90) || (e
					.keyCode >= 96 && e.keyCode <= 105) || e.keyCode === 39) {
				var next = parent.find('input#' + $(this).data('next'));

				if (next.length) {
					$(next).select();
				} else {
					if (parent.data('autosubmit')) {
						parent.submit();
					}
				}
			}
			var digit1 = $('#digit-1').val();
			var digit2 = $('#digit-2').val();
			var digit3 = $('#digit-3').val();
			var digit4 = $('#digit-4').val();
			var digit5 = $('#digit-5').val();
			var digit6 = $('#digit-6').val();
			var data = digit1 + digit2 + digit3 + digit4 + digit5 + digit6;
			$('#token').val(data);
		});
	});

</script>
