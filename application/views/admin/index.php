<div class="content-wrapper">
	<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a><?= ucfirst($menu); ?></a></li>
		<li class="breadcrumb-item active" aria-current="page"><?= $title; ?></li>
	</ol>
	</nav>
	<div class="card shadow">
		<div class="row justify-content-center">
			<!-- <img src="<?= base_url('assets'); ?>/images/maintance.gif" alt=""> -->
			<div class="col-md-5 grid-margin stretch-card text-center">
				<div class="card mt-5" style="border: 2px solid grey;">
					<div class="card-body">
						<h4 class="card-title">Books chart</h4>
						<canvas id="barChart"></canvas>
					</div>
				</div>
			</div>
			<div class="col-md-5 grid-margin stretch-card text-center">
				<div class="card mt-5" style="border: 2px solid grey;">
					<div class="card-body">
						<h4 class="card-title">User chart</h4>
						<canvas id="barChart"></canvas>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="card shadow mt-3">
		<div class="row justify-content-center">
			<div class="row justify-content-center pt-5">
				<div class="col-md-12 text-center">
					<h4><strong>TABLE USER</strong></h4>
				</div>
			</div>
			<div class="col-md-12">
				<div class="table-responsive py-3">
					<table class="table">
						<thead>
							<tr>
								<th class="text-center">#</th>
								<th class="text-center">Name</th>
								<th class="text-center">Role</th>
								<th class="text-center">Role ID</th>
								<th class="text-center">Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="text-center">1</td>
								<td class="text-center">Jacob</td>
								<td class="text-center">Administrator</td>
								<td class="text-center">1</td>
								<td class="text-center"><a href="#" class="badge badge-success" data-bs-toggle="modal"
										data-bs-target="#EditModal"><i class="mdi mdi-pencil"></i></a> <a href=""
										class="badge badge-danger" data-bs-toggle="modal"
										data-bs-target="#DeleteConfirmModal"><i class="mdi mdi-delete"></i></a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="card shadow mt-3">
		<div class="row justify-content-center">
			<div class="row justify-content-center pt-5">
				<div class="col-md-12 text-center">
					<h4><strong>TABLE BOOKS</strong></h4>
				</div>
			</div>
			<div class="col-md-12">
				<div class="table-responsive py-3">
					<table class="table">
						<thead>
							<tr>
								<th class="text-center">#</th>
								<th class="text-center">Image</th>
								<th class="text-center">Title</th>
								<th class="text-center">About</th>
								<th class="text-center">...</th>
								<th class="text-center">...</th>
								<th class="text-center">Active</th>
								<th class="text-center">Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="text-center">1</td>
								<td class="text-center"><img src="<?= base_url('assets');?>/images/faces/face1.jpg"
										alt=""></td>
								<td class="text-center">Admin</td>
								<td class="text-center">Simple Love</td>
								<td class="text-center">...</td>
								<td class="text-center">...</td>
								<td class="text-center">1</td>
								<td class="text-center">
									<a href="" class="badge badge-success pt-2" data-bs-toggle="modal"
										data-bs-target="#EditModal">
										<i class="mdi mdi-pencil"></i>
									</a>
									<a href="" class="badge badge-danger pt-2" data-bs-toggle="modal"
										data-bs-target="#DeleteConfirmModal">
										<i class="mdi mdi-delete"></i>
									</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
