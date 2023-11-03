<div class="content-wrapper">
	<div class="row">
		<div class="col-sm justify-content-center">
			<div class="card text-center" style="border-bottom: 4px solid #4b49ac; ">
				<div class="card-body pt-3 pb-2">
					<h4 style="font-size: 24px"><strong>TABLE MANAGE SUB-MENU</strong></h4>
				</div>
			</div>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-lg grid-margin stretch-card">
			<div class="card" style="border-left: 4px solid #ffc100;">
				<div class="card-body">
				<button class="btn btn-primary ml-3 mb-3" style="background-color: #4b49ac" data-bs-toggle="modal" data-bs-target="#AddModal"><i class="ti-plus pt-5" style="font-size: small;"></i><span class="pl-3">New Sub-Menu</span></button>
					<div class="table-responsive py-3">
						<table class="table">
							<thead>
								<tr>
									<th class="text-center">#</th>
									<th class="text-center">Title</th>
									<th class="text-center">Menu</th>
									<th class="text-center">Url</th>
									<th class="text-center">Icon</th>
									<th class="text-center">Active</th>
									<th class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="text-center">1</td>
									<td class="text-center">Dashboard</td>
									<td class="text-center">Admin</td>
									<td class="text-center">admin/dashboard</td>
									<td class="text-center">mdi mdi-dashboard</td>
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
<!-- content-wrapper ends -->


<!-- ADD MODAL-->
<div class="modal fade" id="AddModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top: -5rem">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title pb-0 mb-0" id="exampleModalLabel">Add New Sub-Menu</h4>
      </div>
      <div class="modal-body">
		<div class="row">
			<div class="col-md-12">
				<form class="forms-sample" action="" method="">
					<div class="row">
						<div class="col-sm-4">
							<div class="form-group">
								<label for="submenu_name">Sub-Menu Name</label>
								<input type="text" class="form-control" id="submenu_name" name="submenu_name">
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label for="submenu_url">Sub-Menu Url</label>
								<input type="text" class="form-control" id="submenu_url" name="submenu_url">
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label for="submenu_icon">Sub-Menu Icon</label>
								<input type="text" class="form-control" id="submenu_icon" name="submenu_icon">
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
        <h4 class="modal-title pb-0 mb-0" id="exampleModalLabel">Edit Sub-Menu</h4>
      </div>
      <div class="modal-body">
		<div class="row">
			<div class="col-md-12">
				<form class="forms-sample">
					<div class="row">
						<div class="col-sm-4">
							<div class="form-group">
								<label for="submenu_name">Sub-Menu Name</label>
								<input type="text" class="form-control" id="submenu_name" name="submenu_name">
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label for="submenu_url">Sub-Menu Url</label>
								<input type="text" class="form-control" id="submenu_url" name="submenu_url">
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label for="submenu_icon">Sub-Menu Icon</label>
								<input type="text" class="form-control" id="submenu_icon" name="submenu_icon">
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
