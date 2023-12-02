<div class="content-wrapper" style="background-color: rgb(237,237,237);">
	<div class="container">
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a><?= ucfirst($menus); ?></a></li>
			<li class="breadcrumb-item active" aria-current="page"><?= $title; ?></li>
		</ol>
	</nav>
		<div class="card shadow" style="border-radius: 5px">
			<div class="card-body p-3" style="height: 80px;">
				<div class="row">
					<div class="col-5">
						<div class="form-group row">
							<label class="col-sm-3 col-form-label"><h5><strong>Sort by</strong></h4></label>
							<div class="col-sm-9">
								<select class="form-control">
									<option value="All" selected>All</option>
									<option value="Public">Public</option>
									<option value="Private">Private</option>
								</select>
							</div>
						</div>
					</div>
					<div class="col-7">
						<div class="input-group mb-3 items d-flex justify-content-end">
							<input type="text" class="mr-2 rounded w-50 pl-3 border border-primary" style="width: 50%"
								placeholder="Search a book here">
							<button class="btn btn-primary" type="button" id="button-addon2">Search</button>
							<button class="btn btn-primary ml-1" data-bs-toggle="modal" data-bs-target="#AddModal"><i class="ti-plus pt-5" style="font-size: small;"></i><span class="pl-3">Add Book</span></button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row row-cols-1 row-cols-md-3 g-4 mt-5 mb-3">
			<?php $number = 0; foreach($books as $book) : $number+=1;?>
				<div class="col">
					<div class="card shadow" style="border-radius: 20px 20px 5px 5px !important;">
						<img src="<?= base_url('assets'); ?>/images/books/<?= $book['image']; ?>" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title"><?= $book['name']; ?></h5>
							<p class="card-text"><?= $book['sheet']; ?></p>
							<p>
								<a href="<?= base_url('explore/read_book'); ?>"> See</a>
							</p>
						</div>
						<div class="card-footer">
							<small class="text-body-secondary">Last updated 3 mins ago</small>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>

		<!-- favorite books -->
		<div class="bg-body-secondary shadow p-5 rounded">
		<div class="row justify-content-center border-bottom mb-3 bg-dark align-items-center">
			<p class="fs-1 text-white">Favorite Book</p>
		</div>

		

		<div class="row">
		<div class="col">
				<div class="card shadow" style="border-radius: 20px 20px 5px 5px !important;">
					<img src="..." class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">This is a wider card with supporting text below as a natural
							lead-in to additional content. This content is a little bit longer.</p>
					</div>
					<div class="card-footer">
						<small class="text-body-secondary">Last updated 3 mins ago</small>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card shadow" style="border-radius: 20px 20px 5px 5px !important;">
					<img src="..." class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">This is a wider card with supporting text below as a natural
							lead-in to additional content. This content is a little bit longer.</p>
					</div>
					<div class="card-footer">
						<small class="text-body-secondary">Last updated 3 mins ago</small>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card shadow" style="border-radius: 20px 20px 5px 5px !important;">
					<img src="..." class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">This is a wider card with supporting text below as a natural
							lead-in to additional content. This content is a little bit longer.</p>
					</div>
					<div class="card-footer">
						<small class="text-body-secondary">Last updated 3 mins ago</small>
					</div>
				</div>
			</div>
		</div>
		</div>
		<!-- favorite books -->
	</div>
<<<<<<< HEAD
</div>
=======
	<!-- ADD MODAL -->
	<div class="modal fade" id="AddModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top: -5rem">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
		<?= form_open_multipart('admin/addAdmin'); ?>
			<div class="modal-header">
				<h4 class="modal-title pb-0 mb-0" id="exampleModalLabel">Add New Books</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-sm-3">
								<div class="form-group">
									<label for="title">Title</label>
									<input type="text" class="form-control" id="title" name="title">
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label for="writer">writer</label>
									<input type="text" class="form-control" id="writer" name="writer">
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label for="email">Email</label>
									<input type="text" class="form-control" id="email" name="email">
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label for="password">Password</label>
									<div class="input-group">
										<input type="password" class="form-control" id="password" name="password" aria-describedby="password-addon">
										<div class="input-group-append">
											<span class="input-group-text" id="password-addon" style="height: 46px; font-size: 21px">
											<span class="mdi mdi-eye-off pt-1" id="toggle-password" style="cursor: pointer;"></span>
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-3">
								<div class="form-group">
									<label for="role">Role</label>
									<input type="text" class="form-control" id="role" name="role" placeholder="1: Administrator   2: User">
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label for="aktif">Status</label>
									<select class="form-control text-dark" id="aktif" name="aktif">
										<option value="1" selected>Active</option>
										<option value="0">Not Active</option>
									</select>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label>File upload</label>
									<input type="file" name="img" accept=".jpg, .jpeg, .png, .webp" class="file-upload-default" id="file-image" onchange="showPreview()">
									<div class="input-group col-xs-12">
										<input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
										<span class="input-group-append">
										<button class="file-upload-browse btn btn-primary" type="button">Upload</button>
										</span>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<frame>
									<div class="panel shadow text-center" style="border: 1px solid #f5f7ff; border-radius: 15px; width: fit-content">
										<img id="image-preview" src="<?= base_url('assets'); ?>/images/profile/no_pict.jpg" alt="" width="200" height="150" style="border-radius: 15px">
									</div>
								</frame>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary" name="add_user">Save changes</button>
			</div>
		</form>
    </div>
  </div>
</div>

	<!-- ADD MODAL -->
</div>
>>>>>>> 2a701f2ea57e624a69b494aebbdae5146a70aff7
