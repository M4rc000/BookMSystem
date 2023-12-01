<div class="content-wrapper">
<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a><?= ucfirst($menus); ?></a></li>
			<li class="breadcrumb-item active" aria-current="page"><?= $title; ?></li>
		</ol>
	</nav>
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
													<input type="password" class="form-control" name="old_password" id="old_password"
														placeholder="old password">
												</div>
											</div>
										</div>
									</div>
                                    <div class="row">
                                        <div class="col-md-6">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">New Password</label>
												<div class="col-sm-9">
													<input type="password" class="form-control" name="new_password" id="new_password"
														placeholder="new password">
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
