<div class="content-wrapper" style="background-color: rgb(237,237,237);">
	<div class="container">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a><?= ucfirst($menus); ?></a></li>
				<li class="breadcrumb-item active" aria-current="page"><?= $title; ?></li>
			</ol>
		</nav>
		<br>
		<div class="card shadow">
			<div class="card-body">
				<br>
				<div class="row mb-4">
					<div class="col" style="margin-left: -1rem">
						<div class="col-md-3">
							<button class="btn btn-primary ml-1" data-bs-toggle="modal" data-bs-target="#AddModal"><i
									class="ti-plus pt-5" style="font-size: small;"></i><span class="pl-3">New
									Book</span></button>
						</div>
					</div>
				</div>
				<div class="row mb-2">
					<div class="col-md-3">
						<div class="form-group row">
							<div class="col">
								<select class="form-control">
									<option value="">Sort by</option>
									<option value="All">All</option>
									<option value="Public">Public</option>
									<option value="Private">Private</option>
								</select>
							</div>
						</div>
					</div>
					<div class="col-md-9">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Recipient's username"
								aria-label="Recipient's username">
							<div class="input-group-append">
								<button class="btn btn-sm btn-primary" type="button">Search</button>
							</div>
						</div>
					</div>
				</div>
				<div class="row mt-5">
					<?php $number = 0; foreach($books as $book) : $number+=1;?>
					<div class="col-md-4">
						<div class="card shadow"
							style="border-radius: 20px 20px 5px 5px !important; background-color: hsl(0,0%,100%)">
							<!-- <div class="cover-image m-2 position-relative"> -->
								<img src="<?= base_url('assets'); ?>/images/books/<?= $book['image'] ?>"
									class="card-img-top" alt="..."
									style="width: 100%; height: 20vw; border-radius: 20px 20px 0 0 !important;">
							<!-- </div> -->
							<div class="card-body">
								<h5 class="card-title text-center"><?= $book['name']; ?></h5>
								<p class="d-inline-flex">
									<center>
										<a class="btn btn-primary" href="#collapseExample" role="button"
											aria-expanded="false" aria-controls="collapseExample"
											style="height: 20px; line-height: 1px; margin-top: -2rem;">
											<span class="mdi mdi-book-open-variant" style="font-size: 20px;"></span>
										</a>
										<a class="btn btn-success" data-bs-toggle="collapse" href="#collapseExample"
											role="button" aria-expanded="false" aria-controls="collapseExample"
											style="height: 20px; line-height: 1px; margin-top: -2rem;">
											<strong>
												Details
											</strong>
										</a>
										<button class="btn btn-info" id="btn-favorite"
											style="height: 20px; line-height: 1px; margin-top: -2rem;">
											<i class="mdi mdi-star-outline" id="favorite" style="margin-top: -5rem; font-size: 25px;"></i>
										</button>
									</center>
								</p>
								<div class="collapse" id="collapseExample"
									style="background-color: #ededed; border-radius: 10px">
									<div class="card card-body" style="background-color: #ededed;">
										<p class="card-text"><strong>Genre : </strong><?= $book['genre']; ?></p>
										<p class="card-text"><strong>Sheet : </strong><?= $book['sheet']; ?></p>
										<p class="card-text"><strong>Author : </strong><?= $book['author']; ?></p>
										<p class="card-text"><strong>Publisher : </strong><?= $book['publisher']; ?></p>
									</div>
								</div>
							</div>
							<div class="card-footer" style="margin-top: -1rem;">
								<small class="text-body-secondary">Last updated 3 mins ago</small>
							</div>
						</div>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
	<div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading bold">DARK</p>
		  <div id="">
          <div class="sidebar-bg-options selected text-white" id="ganti-background" style="background-image: url(<?= base_url('assets');?>/images/content-background/dark/stardust.png);"><input type="radio" name="ganti-theme-background" value="images/content-background/dark/stardust.png" class="mr-3"></input>Stardust</div>
          <div class="sidebar-bg-options selected text-white" id="ganti-background" style="background-image: url(<?= base_url('assets');?>/images/content-background/dark/prism.png);"><input type="radio" name="ganti-theme-background" value="images/content-background/dark/prism.png" class="mr-3"></input>Prism</div>
          <div class="sidebar-bg-options selected text-white" id="ganti-background" style="background-image: url(<?= base_url('assets');?>/images/content-background/dark/webb-dark.png);"><input type="radio" name="ganti-theme-background" value="images/content-background/dark/webb-dark.png" class="mr-3"></input>Webb-Dark</div>
          <div class="sidebar-bg-options selected text-white" id="ganti-background" style="background-image: url(<?= base_url('assets');?>/images/content-background/dark/dark-grey-terrazzo.png);"><input type="radio" name="ganti-theme-background" value="images/content-background/dark/dark-grey-terrazzo.png" class="mr-3"></input>Dark-Grey-Terrazzo</div>
          <div class="sidebar-bg-options selected text-white" id="ganti-background" style="background-image: url(<?= base_url('assets');?>/images/content-background/dark/wheat.webp);"><input type="radio" name="ganti-theme-background" value="images/content-background/dark/wheat.webp" class="mr-3"></input>Wheat</div>
		 </div>
		 <p class="settings-heading bold pt-3">LIGHT</p>
		  <div id="">
          <div class="sidebar-bg-options selected text-white" id="ganti-background" style="background-image: url(<?= base_url('assets');?>/images/content-background/light/leaves-pattern.png);"><input type="radio" name="ganti-theme-background" value="images/content-background/light/leaves-pattern.png" class="mr-3"></input>Leaves- Pattern</div>
          <div class="sidebar-bg-options selected text-white" id="ganti-background" style="background-image: url(<?= base_url('assets');?>/images/content-background/light/palm-leaf.webp);"><input type="radio" name="ganti-theme-background" value="images/content-background/light/palm-leaf.webp" class="mr-3"></input>Palm - Leaf</div>
          <div class="sidebar-bg-options selected text-white" id="ganti-background" style="background-image: url(<?= base_url('assets');?>/images/content-background/light/spring.png);"><input type="radio" name="ganti-theme-background" value="images/content-background/light/spring.png" class="mr-3"></input>Spring</div>
          <div class="sidebar-bg-options selected text-white" id="ganti-background" style="background-image: url(<?= base_url('assets');?>/images/content-background/light/sakura.png);"><input type="radio" name="ganti-theme-background" value="images/content-background/light/sakura.png" class="mr-3"></input>Sakura</div>
          <div class="sidebar-bg-options selected text-white" id="ganti-background" style="background-image: url(<?= base_url('assets');?>/images/content-background/light/restaurant.webp);"><input type="radio" name="ganti-theme-background" value="images/content-background/light/restaurant.webp" class="mr-3"></input>Restaurant</div>
		 </div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
</div>

	<!-- ADD MODAL -->
<div class="modal fade" id="AddModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
	style="margin-top: -5rem">
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
										<input type="password" class="form-control" id="password" name="password"
											aria-describedby="password-addon">
										<div class="input-group-append">
											<span class="input-group-text" id="password-addon"
												style="height: 46px; font-size: 21px">
												<span class="mdi mdi-eye-off pt-1" id="toggle-password"
													style="cursor: pointer;"></span>
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
									<input type="text" class="form-control" id="role" name="role"
										placeholder="1: Administrator   2: User">
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
									<input type="file" name="img" accept=".jpg, .jpeg, .png, .webp"
										class="file-upload-default" id="file-image" onchange="showPreview()">
									<div class="input-group col-xs-12">
										<input type="text" class="form-control file-upload-info" disabled
											placeholder="Upload Image">
										<span class="input-group-append">
											<button class="file-upload-browse btn btn-primary"
												type="button">Upload</button>
										</span>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<frame>
									<div class="panel shadow text-center"
										style="border: 1px solid #f5f7ff; border-radius: 15px; width: fit-content">
										<img id="image-preview"
											src="<?= base_url('assets'); ?>/images/profile/no_pict.jpg" alt=""
											width="200" height="150" style="border-radius: 15px">
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

<script>
	$('#btn-favorite').on('click', function(){
		$('#favorite').toggleClass('mdi-star-outline mdi-star');
	});

	$(document).ready(function() {
    // Event handler untuk perubahan pada radio button
    $('input[type="radio"]').change(function() {
      // Mendapatkan nilai radio button yang dipilih
      var selectedValue = $('input[name="ganti-theme-background"]:checked').val();

      // Mengubah warna latar belakang sesuai dengan nilai radio
      $('.content-wrapper').attr('style', 'background-image: url(<?= base_url('assets');?>/' + selectedValue);
    });
  });
	

	
</script>