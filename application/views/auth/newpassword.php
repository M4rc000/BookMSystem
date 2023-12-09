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
						<?= form_open_multipart('auth/newpassword'); ?>
							<h4>New Password </h4>
							<br>
							<div class="input-group mb-3">
								<input type="password" class="form-control form-control-lg"
									aria-label="Username" aria-describedby="basic-addon1" id="password" name="password" required>
								<span class="mdi mdi-eye-off pt-3 pl-2 pr-2" id="toggle-password" style="cursor: pointer; font-size: 20px; border: 1px solid #e6e7e8; border-radius: 0 2px 2px 0; background-color: whitesmoke"></span>
							</div>
							<small class="text-danger pl-3" id="note">Password must be unique</small>
							<input type="text" value="<?= $userid; ?>" name="userid" style="display: none;">
							<div class="mt-3">
								<button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"
									type="submit" id="btnSave">Save</button>
								</div>
						</form> 
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
	$(document).ready(function () {
		$("#toggle-password").click(function () {
			var passwordInput = $("#password");
			var icon = $(this);

			if (passwordInput.attr("type") === "password") {
				passwordInput.attr("type", "text");
				icon.removeClass("mdi-eye-off").addClass("mdi-eye");
			} else {
				passwordInput.attr("type", "password");
				icon.removeClass("mdi-eye").addClass("mdi-eye-off");
			}
		});
		$('#note').css('display', 'none');
	});
	$('#password').on('keyup', function(){
		var password = $(this).val()
		if(password.length < 4){
			$('#btnSave').prop('disabled', true);
			$('#note').css('display', 'block');
		}
		else{
			$('#btnSave').prop('disabled', false);
			$('#note').css('display', 'none');
		}
	})
	function containsUppercase(str) {
    	return /[A-Z]/.test(str);
	}
</script>
