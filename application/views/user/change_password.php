<div class="content-wrapper">
	<div class="row">
		<div class="col-sm">
			<div class="card shadow" style="border-bottom: 2px solid #4b49ac; height: 40px; border-radius: 5px">
				<div class="card-body">
					<h5 class="text-left mb-5" style="line-height: 0px; font-size: 14px; font-weight: 100;">
						<span style="font-weight: 700;"><?= ucfirst($menus); ?></span> / <?= $title; ?>
					</h5>
				</div>
			</div>
		</div>
	</div>
	<br>
	<div class="card shadow">
		<div class="card-body">
			<div class="container">
				<div class="row">
					<div class="col-12 grid-margin">
						<div class="card-body">
							<div class="container">
								<h4 class="card-title"><?= $title; ?></h4>
								<form class="form-sample">
									<br>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Password</label>
												<div class="col-sm-9">
													<div class="input-group mb-3">
														<input type="password" class="form-control" name="old_password" id="old_password"
															placeholder="old password" value="<?=$user['password'];?>">
														<span class="mdi mdi-eye-off pl-2 pr-2" id="toggle-old-password" style="cursor: pointer; font-size: 20px; border: 1px solid #e6e7e8; border-radius: 0 2px 2px 0; background-color: whitesmoke; padding-top: 13px"></span>
													</div>
												</div>
											</div>
										</div>
									</div>
                                    <div class="row">
                                        <div class="col-md-6">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">New Password</label>
												<div class="col-sm-9">
												<div class="input-group mb-3">
														<input type="password" class="form-control" name="new_password" id="new_password"
															placeholder="New password" required>
														<span class="mdi mdi-eye-off pl-2 pr-2" id="toggle-new-password" style="cursor: pointer; font-size: 20px; border: 1px solid #e6e7e8; border-radius: 0 2px 2px 0; background-color: whitesmoke; padding-top: 13px"></span>
													</div>
												</div>
											</div>
										</div>
                                    </div>
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<button type="submit" class="btn btn-primary" style="background-color: #4b49ac;">Save</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	$(document).ready(function () {
		$("#toggle-old-password").click(function () {
			var passwordInput = $("#old_password");
			var icon = $(this);

			if (passwordInput.attr("type") === "password") {
				passwordInput.attr("type", "text");
				icon.removeClass("mdi-eye-off").addClass("mdi-eye");
			} else {
				passwordInput.attr("type", "password");
				icon.removeClass("mdi-eye").addClass("mdi-eye-off");
			}
		});

		$("#toggle-new-password").click(function () {
			var passwordInput = $("#new_password");
			var icon = $(this);

			if (passwordInput.attr("type") === "password") {
				passwordInput.attr("type", "text");
				icon.removeClass("mdi-eye-off").addClass("mdi-eye");
			} else {
				passwordInput.attr("type", "password");
				icon.removeClass("mdi-eye").addClass("mdi-eye-off");
			}
		});
	});
</script>