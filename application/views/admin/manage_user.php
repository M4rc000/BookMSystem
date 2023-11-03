<div class="content-wrapper">
	<div class="row">
		<div class="col-sm text-center">
			<div class="card" style="border-bottom: 3px solid #4b49ac; height: 60px;">
				<div class="card-body">
					<h4><strong>TABLE USER</strong></h4>
				</div>
			</div>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-lg grid-margin stretch-card">
			<div class="card" style="border-left: 2px solid #ffc100;">
				<div class="card-body">
				<button class="btn btn-primary ml-3 mb-3" style="background-color: #4b49ac" data-bs-toggle="modal" data-bs-target="#AddModal"><i class="ti-plus pt-5" style="font-size: small;"></i><span class="pl-3">New User</span></button>
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
									<td class="text-center"><a href="#" class="badge badge-success" data-bs-toggle="modal" data-bs-target="#EditModal"><i
												class="mdi mdi-pencil"></i></a> <a href="" class="badge badge-danger" data-bs-toggle="modal" data-bs-target="#DeleteConfirmModal"><i
												class="mdi mdi-delete"></i></a></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- content-wrapper ends -->

<!-- ADD MODAL-->
<div class="modal fade" id="AddModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top: -5rem">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title pb-0 mb-0" id="exampleModalLabel">Add New User</h4>
      </div>
      <div class="modal-body">
		<div class="row">
			<div class="col-md-12">
				<form class="forms-sample" action="" method="">
					<div class="row">
						<div class="col-sm-4">
							<div class="form-group">
								<label for="name">Name</label>
								<input type="text" class="form-control" id="name" name="name">
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label for="role">Role</label>
								<input type="text" class="form-control" id="role" name="role">
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label for="username">Username</label>
								<input type="text" class="form-control" id="username" name="username">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4">
							<div class="form-group">
								<label for="email">Email</label>
								<input type="text" class="form-control" id="email" name="email">
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label>File upload</label>
								<input type="file" name="img[]" class="file-upload-default">
								<div class="input-group col-xs-12">
									<input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
									<span class="input-group-append">
									<button class="file-upload-browse btn btn-primary" type="button" style="background-color: #4b49ac">Upload</button>
									</span>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label for="aktif">Status</label>
								<select class="form-control text-dark" id="aktif" name="aktif">
									<option value="Active" selected>Active</option>
									<option value="Not Active">Not Active</option>
								</select>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" style="background-color: grey; border-color: grey;" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" style="background-color: #4b49ac;">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- EDIT MODAL-->
<div class="modal fade" id="EditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top: -5rem">
  <div class="modal-dialog modal-lg">
  <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title pb-0 mb-0" id="exampleModalLabel">Edit User</h4>
      </div>
      <div class="modal-body">
		<div class="row">
			<div class="col-md-12">
				<form class="forms-sample" action="" method="">
					<div class="row">
						<div class="col-sm-4">
							<div class="form-group">
								<label for="name">Name</label>
								<input type="text" class="form-control" id="name" name="name">
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label for="role">Role</label>
								<input type="text" class="form-control" id="role" name="role">
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label for="username">Username</label>
								<input type="text" class="form-control" id="username" name="username">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4">
							<div class="form-group">
								<label for="email">Email</label>
								<input type="text" class="form-control" id="email" name="email">
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label>File upload</label>
								<input type="file" name="img[]" class="file-upload-default">
								<div class="input-group col-xs-12">
									<input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
									<span class="input-group-append">
									<button class="file-upload-browse btn btn-primary" type="button" style="background-color: #4b49ac">Upload</button>
									</span>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label for="aktif">Status</label>
								<select class="form-control text-dark" id="aktif" name="aktif">
									<option value="Active" selected>Active</option>
									<option value="Not Active">Not Active</option>
								</select>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" style="background-color: grey; border-color: grey;" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" style="background-color: #4b49ac;">Save changes</button>
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
        <button type="button" class="btn btn-primary" style="background-color: grey; border-color: grey;" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" style="background-color: #4b49ac;">Confirm</button>
      </div>
    </div>
  </div>
</div>
