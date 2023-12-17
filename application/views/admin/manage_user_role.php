<div class="content-wrapper">
	<div class="row">
		<div class="col-sm">
			<div class="card shadow" style="border-bottom: 2px solid #4b49ac; height: 40px; border-radius: 5px">
				<div class="card-body">
					<h5 class="text-left mb-5" style="line-height: 0px; font-size: 14px; font-weight: 100;">
						<span style="font-weight: 700;"><?= ucfirst($menus); ?></span> / <?= $title; ?>
					</h5>
				</div>
			</div>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-lg grid-margin stretch-card">
			<div class="card shadow" style="border-left: 2px solid #ffc100;">
				<div class="card-body">
					<?php if ($this->session->flashdata('SUCCESS') != '') { ?>
					<?= $this->session->flashdata('SUCCESS'); ?>
					<?php } ?>
					<?php if ($this->session->flashdata('DUPLICATES') != '') { ?>
					<?= $this->session->flashdata('DUPLICATES'); ?>
					<?php } ?>
					<?php if ($this->session->flashdata('DELETED') != '') { ?>
					<?= $this->session->flashdata('DELETED'); ?>
					<?php } ?>
					<h4 class="pt-2 pb-3 text-center"><strong>TABLE USER ROLE</strong></h4>
					<button class="btn btn-primary ml-3 mb-3" data-bs-toggle="modal" data-bs-target="#AddModal"><i
							class="ti-plus pt-5" style="font-size: small;"></i><span class="pl-3">New
							Role</span></button>
					<div class="table-responsive py-3">
						<table class="table" id="tbl-user-role">
							<thead>
								<tr>
									<th class="text-center">#</th>
									<th class="text-center">Role</th>
									<th class="text-center">Role ID</th>
									<th class="text-center">Create date</th>
									<th class="text-center">Create by</th>
									<th class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php $number = 0; foreach($roles as $role) : $number+=1;?>
								<tr>
									<td class="text-center"><?= $number; ?></td>
									<td class="text-center"><?= $role['role']; ?></td>
									<td class="text-center"><?= $role['id']; ?></td>
									<td class="text-center"><?= $role['crtdt']; ?></td>
									<td class="text-center"><?= $role['crtby']; ?></td>
									<td class="text-center">
										<a href="<?= base_url('admin/roleaccess/') . $role['id']; ?>" class="badge badge-warning text-white pt-2">
											<i class="mdi mdi-wrench"></i>
										</a>
										<a href="" class="badge badge-danger pt-2" data-bs-toggle="modal"
											data-bs-target="#DeleteConfirmModal">
											<i class="mdi mdi-delete"></i>
										</a>
									</td>
								</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- COMFIG MODAL-->
<?php foreach($roles as $role) : ?>
<div class="modal fade" id="ConfigModal<?= $role['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
	aria-hidden="true" style="margin-top: -5rem">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title pb-0 mb-0" id="exampleModalLabel">Configuration User</h4>
			</div>
			<div class="modal-body">
			<!-- <form action="<?= base_url('admin/changeaccess'); ?>" method="post"> -->
				<div class="row">
					<div class="col-md-12">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="role">Role</label>
										<input type="text" class="form-control" id="role" name="role"
											value="<?= $role['role']; ?>" readonly>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="role_id">Role ID</label>
										<input type="text" class="form-control" id="role_id" name="role_id"
											value="<?= $role['id']; ?>" readonly>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<strong>Access</strong>
								</div>
							</div>
							<div class="row mt-1">
								<?php foreach ($menu as $m) : ?>
								<div class="col-md-4">
									<div class="form-check form-check-flat form-check-primary">
										<label class="form-check-label">
											<!-- <input type="checkbox" class="form-check-input" -->
											<input class="form-check-input" type="checkbox" <?= check_access($role['id'], $m['id']); ?> data-role="<?= $role['id']; ?>" data-menu="<?= $m['id']; ?>"><?= $m['menu']; ?>
										</label>
									</div>
								</div>
								<?php endforeach; ?>
							</div>
					</div>
				</div>
			</div>
			<!-- <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save changes</button>
			</div>
		</form> -->
		</div>
	</div>
</div>
<?php endforeach; ?>


<!-- ADD MODAL -->
<div class="modal fade" id="AddModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
	style="margin-top: -5rem">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title pb-0 mb-0" id="exampleModalLabel">Add New Role</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12">
						<form class="forms-sample" action="<?=base_url('admin/addUserRole');?>" method="POST">
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label for="role">Role</label>
										<input type="text" class="form-control" id="role" name="role">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label for="role_id">Role ID</label>
										<input type="text" class="form-control" id="role_id" name="role_id">
									</div>
								</div>
							</div>
							<input type="text" class="form-control" id="crtby" name="crtby" value="<?=$user['name'];?>"
								style="display: none;">
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save changes</button>
			</div>
			</form>
		</div>
	</div>
</div>

<!-- EDIT MODAL-->
<div class="modal fade" id="EditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
	style="margin-top: -5rem">
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
										<input type="text" class="form-control" id="role" name="role"
											value="Administrator">
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
				<button type="button" class="btn btn-primary" style="background-color: grey; border-color: grey;"
					data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary" style="background-color: #4b49ac;">Save changes</button>
			</div>
		</div>
	</div>
</div>

<!-- DELETE CONFIRM MODAL-->
<?php foreach($roles as $role) : ?>
<?= form_open_multipart('admin/deleteUserRole'); ?>
<div class="modal fade" id="DeleteConfirmModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
	style="margin-top: -5rem">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title pb-0 mb-0" id="exampleModalLabel">Confirm to delete ?</h4>
				<input type="text" name="id" id="id" value="<?= $role['id']; ?>" style="display: none;">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
				<button type="submit" class="btn btn-primary">Confirm</button>
			</div>
		</div>
	</div>
</div>
<?php endforeach; ?>


<script>
	$(window).ready(function () {
		new DataTable('#tbl-user-role', {
			searching: true,
			search: {
				"smart": false
			},
			lengthMenu: [
				[10, 25, 50, -1],
				[10, 25, 50, 'All']
			],
			dom: 'lBfrtip',
			buttons: [{
					text: '<i class="fa fa-copy"></i>&nbsp;&nbsp;Copy',
					extend: 'copy'
				},
				{
					text: '<i class="fa fa-print"></i>&nbsp;&nbsp;Print',
					extend: 'print'
				},
				{
					text: '<i class="fa fa-file-pdf"></i>&nbsp;&nbsp;PDF',
					extend: 'pdf'
				},
				{
					text: '<i class="fa fa-file-excel"></i>&nbsp;&nbsp;Excel',
					extend: 'excel',
				},
			]
		});
	})

</script>
