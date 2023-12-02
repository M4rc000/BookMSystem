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
									<option value="All" selected>@username</option>
								</select>
							</div>
						</div>
					</div>
					<div class="col-7">
						<div class="input-group mb-3 items d-flex justify-content-end">
							<input type="text" class="mr-2 rounded w-50 pl-3 border border-primary" style="width: 50%"
								placeholder="Search a book here">
							<button class="btn btn-primary" type="button" id="button-addon2">Search</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row row-cols-1 row-cols-md-3 g-4 mt-5 mb-3">
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
</div>