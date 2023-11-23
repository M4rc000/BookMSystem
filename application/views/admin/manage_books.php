<div class="content-wrapper">
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a><?= ucfirst($menus); ?></a></li>
			<li class="breadcrumb-item active" aria-current="page"><?= $title; ?></li>
		</ol>
	</nav>
	<br>
	<div class="row">
		<div class="col-sm justify-content-center">
			<div class="card shadow" style="border-bottom: 2px solid #4b49ac; height: 60px; border-radius: 5px">
				<div class="card-body text-center">
					<h4><strong>TABLE BOOKS</strong></h4>
				</div>
			</div>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-lg grid-margin stretch-card">
			<div class="card shadow" style="border-left: 2px solid #ffc100;">
				<div class="card-body">
				<button class="btn btn-primary ml-3 mb-3" data-bs-toggle="modal" data-bs-target="#AddModal"><i class="ti-plus pt-5" style="font-size: small;"></i><span class="pl-3">New Book</span></button>
					<div class="table-responsive py-3">
						<table class="table" id="tbl-book">
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
									<td class="text-center"><img src="<?= base_url('assets');?>/images/faces/face1.jpg" alt=""></td>
									<td class="text-center">Admin</td>
									<td class="text-center">Simple Love</td>
									<td class="text-center">...</td>
									<td class="text-center">...</td>
									<td class="text-center">1</td>
									<td class="text-center">
										<a href="" class="badge badge-success pt-2" data-bs-toggle="modal" data-bs-target="#EditModal">
											<i class="mdi mdi-pencil"></i>
										</a> 
										<a href="" class="badge badge-danger pt-2" data-bs-toggle="modal" data-bs-target="#DeleteConfirmModal">
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
</div>


<!-- ADD MODAL-->
<div class="modal fade" id="AddModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top: -5rem">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title pb-0 mb-0" id="exampleModalLabel">Add New Book</h4>
      </div>
      <div class="modal-body">
		<div class="row">
			<div class="col-md-12">
				<form class="forms-sample">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="title">Title</label>
								<input type="text" class="form-control" id="title" name="title" value="Love Story">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="...">...</label>
								<input type="text" class="form-control" id="..." name="..." value="...">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>File upload</label>
								<input type="file" name="img[]" class="file-upload-default">
								<div class="input-group col-xs-12">
									<input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
									<span class="input-group-append">
									<button class="file-upload-browse btn btn-primary" type="button">Upload</button>
									</span>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="aktif">Status</label>
								<select class="form-control text-dark" id="aktif" name="aktif">
									<option value="Active" selected>Active</option>
									<option value="Not Active">Not Active</option>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
					</div>
				</form>
			</div>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- EDIT MODAL-->
<div class="modal fade" id="EditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top: -5rem">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title pb-0 mb-0" id="exampleModalLabel">Edit Book</h4>
      </div>
      <div class="modal-body">
		<div class="row">
			<div class="col-md-12">
				<form class="forms-sample">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="title">Title</label>
								<input type="text" class="form-control" id="title" name="title" value="Love Story">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="...">...</label>
								<input type="text" class="form-control" id="..." name="..." value="...">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>File upload</label>
								<input type="file" name="img[]" class="file-upload-default">
								<div class="input-group col-xs-12">
									<input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
									<span class="input-group-append">
									<button class="file-upload-browse btn btn-primary" type="button">Upload</button>
									</span>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="aktif">Status</label>
								<select class="form-control text-dark" id="aktif" name="aktif">
									<option value="Active" selected>Active</option>
									<option value="Not Active">Not Active</option>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
					</div>
				</form>
			</div>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- DELETE CONFIRM MODAL-->
<div class="modal fade" id="DeleteConfirmModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top: -5rem">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title pb-0 mb-0" id="exampleModalLabel">Confirm to delete ?</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Confirm</button>
      </div>
    </div>
  </div>
</div>

<script>
	$(window).ready(function(){
		new DataTable('#tbl-book', {
			searching: true,
			search: {
				"smart": false
			},
			lengthMenu: [
				[10, 25, 50, -1],
				[10, 25, 50, 'All']
			]
		});
	})
</script>
