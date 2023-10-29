<div class="content-wrapper">
	<div class="row">
		<div class="col-sm justify-content-center">
			<div class="card text-center" style="border-bottom: 4px solid #4b49ac; ">
				<div class="card-body pt-3 pb-2">
					<h4 style="font-size: 24px"><strong>TABLE USER ROLE</strong></h4>
				</div>
			</div>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-lg grid-margin stretch-card">
			<div class="card" style="border-left: 4px solid #ffc100;">
				<div class="card-body">
					<div class="table-responsive py-3">
						<table class="table">
							<thead>
								<tr>
									<th class="text-center">#</th>
									<th class="text-center">Role</th>
									<th class="text-center">Role ID</th>
									<th class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="text-center">1</td>
									<td class="text-center">Administrator</td>
									<td class="text-center">1</td>
									<td class="text-center">
										<a href="" class="badge badge-warning text-white pt-2" data-bs-toggle="modal" data-bs-target="#ConfigModal">
											<i class="mdi mdi-wrench"></i>
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


<!-- CONFIG MODAL-->
<div class="modal fade" id="ConfigModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top: -5rem">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title pb-0 mb-0" id="exampleModalLabel">Configuration User</h4>
      </div>
      <div class="modal-body">
		<div class="row">
			<div class="col-md-12">
				<form class="forms-sample">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="role">Role</label>
								<input type="text" class="form-control" id="role" name="role" value="Administrator">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="role_id">Role ID</label>
								<input type="text" class="form-control" id="role_id" name="role_id" value="1">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<strong>Access</strong>
						</div>
					</div>
					<div class="row mt-1">
						<div class="col-md-4">
							<div class="form-check form-check-flat form-check-primary">
								<label class="form-check-label">
								<input type="checkbox" class="form-check-input">
								Admin
								</label>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-check form-check-flat form-check-primary">
								<label class="form-check-label">
								<input type="checkbox" class="form-check-input">
								User
								</label>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-check form-check-flat form-check-primary">
								<label class="form-check-label">
								<input type="checkbox" class="form-check-input">
								Explore
								</label>
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
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title pb-0 mb-0" id="exampleModalLabel">Edit User</h4>
      </div>
      <div class="modal-body">
		<div class="row">
			<div class="col-md-12">
				<form class="forms-sample">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="name">Name</label>
								<input type="text" class="form-control" id="name" name="name" value="Marco">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="role_id">Role ID</label>
								<input type="text" class="form-control" id="role_id" name="role_id" value="1">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="role">Role</label>
								<input type="text" class="form-control" id="role" name="role" value="Administrator">
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
