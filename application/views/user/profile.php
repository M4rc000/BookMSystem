<div class="content-wrapper">
	<div class="row">
		<div class="col-md-2 text-center">
			<div class="card shadow p-1"
				style="border-radius: 5px; display: flex; align-items: center; width: 208px; height: 208px;">
				<img src="<?= base_url('assets');?>/images/faces/face1.jpg" width="200" height="200"
					style="border-radius: 5px;">
			</div>
		</div>
		<div class="col-md-5 mt-4 ml-1" style="display: flex; flex-direction: column; align-items: center;">
			<div class="form-group">
				<input type="file" name="img[]" class="file-upload-default">
				<div class="input-group col-xs-3">
					<input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
					<span class="input-group-append">
						<button class="file-upload-browse btn btn-primary" type="button">New Photo</button>
					</span>
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
								<h4 class="card-title">My Profile</h4>
								<form class="form-sample">
									<p class="card-description">
										Personal info
									</p>
									<br>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Name</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" name="name" id="name"
														placeholder="Name">
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Username</label>
												<div class="col-sm-9">
													<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">@</span>
														</div>
														<input type="text" class="form-control" placeholder="Username"
															aria-label="Username" name="username" id="username">
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Email</label>
												<div class="col-sm-9">
													<input class="form-control" type="email" name="email" id="email"
														placeholder="Email" />
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Gender</label>
												<div class="col-sm-9">
													<select class="form-control">
														<option>Male</option>
														<option>Female</option>
													</select>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Date of Birth</label>
												<div class="col-sm-9">
													<input class="form-control" type="date" name="dateofbirth"
														id="dateofbirth" placeholder="dd/mm/yyyy" />
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Place of Birth</label>
												<div class="col-sm-9">
													<input class="form-control" type="text" name="dateofbirth"
														id="dateofbirth" placeholder="City or Region" />
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Country</label>
												<div class="col-sm-9">
													<select class="form-control">
														<option>America</option>
														<option>Italy</option>
														<option>Russia</option>
														<option>Britain</option>
													</select>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Date Joined</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" name="datejoined"
														id="datejoined" readonly>
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
