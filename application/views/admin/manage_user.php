<div class="content-wrapper">
	<div class="row">
		<div class="col-sm">
			<div class="card shadow" style="border-bottom: 2px solid #4b49ac; height: 40px; border-radius: 5px">
				<div class="card-body">
					<h5 class="text-left mb-5" style="line-height: 0px; font-size: 14px; font-weight: 100;">
						<span style="font-weight: 700;"><?= ucfirst($menu); ?></span> / <?= $title; ?>
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
				<?php if ($this->session->flashdata('EDIT') != '') { ?>
				<?= $this->session->flashdata('EDIT'); ?>
				<?php } ?>
				<?php if ($this->session->flashdata('ERROR') != '') { ?>
				<?= $this->session->flashdata('ERROR'); ?>
				<?php } ?>
				<h4 class="pt-2 pb-3 text-center"><strong>TABLE USER</strong></h4>
				<button class="btn btn-primary ml-3 mb-3" data-bs-toggle="modal" data-bs-target="#AddModal"><i class="ti-plus pt-5" style="font-size: small;"></i><span class="pl-3">New User</span></button>
					<div class="table-responsive py-3">
						<table class="table" id="tbl-user">
							<thead>
								<tr>
									<th class="text-center">#</th>
									<th class="text-center">Name</th>
									<th class="text-center">Username</th>
									<th class="text-center">Role</th>
									<th class="text-center">Email</th>
									<th class="text-center">Active</th>
									<th class="text-center">Date Joined</th>
									<th class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php $number = 1; foreach($user as $u) : ?>
									<tr>
										<td class="text-center"><?= $number; ?></td>
										<td class="text-center"><?= $u['name']; ?></td>
										<td class="text-center"><?= $u['username']; ?></td>
										<td class="text-center"><?= $u['role_id'] == 1 ? 'Administrator' : 'User' ?></td>
										<td class="text-center"><?= $u['email']; ?></td>
										<td class="text-center"><?= $u['is_active'] == 1 ? '<span class="mdi mdi-check-circle" style="font-size: 20px;  color: blue"></span>' : '<span class="mdi mdi-close-circle" style="font-size: 20px"></span>'; ?></td>
										<td class="text-center"><?= date('d-m-Y H:i', strtotime($u['date_joined'])); ?></td>
										<td class="text-center">
											<a href="#" class="badge badge-success" data-bs-toggle="modal" data-bs-target="#EditModal<?= $u['id']; ?>"><i
													class="mdi mdi-pencil"></i></a> 
											<a href="" class="badge badge-danger" data-bs-toggle="modal" data-bs-target="#DeleteConfirmModal<?= $u['id']; ?>"><i
											class="mdi mdi-delete"></i></a>
										</td>
									</tr>
								<?php $number+=1; ?>
								<?php endforeach; ?>
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
		<?= form_open_multipart('admin/AddUser'); ?>
			<div class="modal-header">
				<h4 class="modal-title pb-0 mb-0" id="exampleModalLabel">Add New User</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-sm-3">
								<div class="form-group">
									<label for="name">Name</label>
									<input type="text" class="form-control" id="name" name="name" required>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label for="username">Username</label>
									<input type="text" class="form-control" id="username" name="username" required>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label for="email">Email</label>
									<input type="text" class="form-control" id="email" name="email" required>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label for="password">Password</label>
									<div class="input-group">
										<input type="password" class="form-control" id="password" name="password" aria-describedby="password-addon" required>
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
									<input type="text" class="form-control" id="role" name="role" placeholder="1: Administrator   2: User" required>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label for="aktif">Status</label>
									<select class="form-control text-dark" id="aktif" name="aktif" required>
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

<!-- EDIT MODAL-->
<?php foreach($user as $u) : ?>
<div class="modal fade" id="EditModal<?= $u['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top: -5rem">
  <div class="modal-dialog modal-lg">
  <div class="modal-content">
	<?= form_open_multipart('admin/editUser'); ?>
		<div class="modal-header">
			<h4 class="modal-title pb-0 mb-0" id="exampleModalLabel">Edit User</h4>
		</div>
		<div class="modal-body">
			<input type="text" class="form-control" id="id" name="id" value="<?= $u['id']; ?>" style="display: none;">
			<div class="row">
				<div class="col-md-12">
						<div class="row">
							<div class="col-sm-3">
								<div class="form-group">
									<label for="name">Name</label>
									<input type="text" class="form-control" id="name" name="name" value="<?= $u['name']; ?>">
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label for="role">Role ID</label>
									<input type="text" class="form-control" id="role" name="role" value="<?= $u['role_id']; ?>">
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label for="username">Username</label>
									<input type="text" class="form-control" id="username" name="username" value="<?= $u['username']; ?>">
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label for="aktif">Status</label>
									<select class="form-control text-dark" id="aktif" name="aktif">
										<option value="1" <?= $u['is_active'] == 1 ? 'selected' : '' ?>>Active</option>
										<option value="0" <?= $u['is_active'] != 1 ? 'selected' : '' ?>>Not Active</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4">
								<div class="form-group">
									<label for="email">Email</label>
									<input type="text" class="form-control" id="email" name="email" value="<?= $u['email']; ?>">
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group">
									<label for="date_joined">Date Joined</label>
									<input type="text" class="form-control" name="date_joined" id="date_joined" value="<?=date("d-m-Y h:i", strtotime($u['date_joined']));?>" readonly>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label>File upload</label>
									<input type="file" name="img" accept=".jpg, .jpeg, .png, .webp" class="file-upload-default" id="file-images<?= $u['id']; ?>" onchange="showPreviews('<?= $u['id']; ?>')">
									<div class="input-group col-xs-12">
										<input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
										<span class="input-group-append">
										<button class="file-upload-browse btn btn-primary" type="button">Upload</button>
										</span>
									</div>
								</div>
							</div>
							<div class="col-sm-2 pt-2">
								<div class="panel shadow" style="border: 1px solid #f5f7ff; border-radius: 15px; width: fit-content">
								<img src="<?= base_url('assets'); ?>/images/profile/<?= $u['image']; ?>" id="image-previews<?= $u['id']; ?>" width="200" height="90" style="border-radius: 15px">
								</div>
							</div>
						</div>
				</div>
			</div>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			<button type="submit" class="btn btn-primary" name="edit_user">Save changes</button>
		</div>
	</form>
    </div>
  </div>
</div>
<?php endforeach; ?>

<!-- DELETE CONFIRM MODAL-->
<?php foreach($user as $u) : ?>
<?= form_open_multipart('admin/deleteUser'); ?>
	<div class="modal fade" id="DeleteConfirmModal<?= $u['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top: -5rem">
	<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header">
			<h4 class="modal-title pb-0 mb-0" id="exampleModalLabel">Confirm to delete ?</h4>
		</div>
		<input type="text" name="id" id="id" value="<?= $u['id']; ?>" style="display: none;">
		<input type="text" name="action" value="<?= $this->uri->segment(count($this->uri->segments)); ?>" style="display: none;">
		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
			<button type="submit" class="btn btn-primary" name="delete_user">Confirm</button>
		</div>
		</div>
	</div>
	</div>
</form>
<?php endforeach; ?>

<script>
    $(document).ready(function () {
		$('body').addClass('sidebar-icon-only');

		var tableUser = new DataTable('#tbl-user', {
			searching: true,
			search: {
				"smart": false
			},
			lengthMenu: [
				[10, 25, 50, -1],
				[10, 25, 50, 'All']
			],
			dom: 'lBfrtip',
			buttons: [
				{
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

        $("#toggle-password").click(function () {
            var passwordInput = $("#password");
            var icon = $(this);

            if (passwordInput.attr("type") === "password") {
                passwordInput.attr("type", "text");
                icon.removeClass("mdi-eye-off").addClass("mdi-eye");
            } else {
                passwordInput.attr("type", "password");
                icon.removeClass("mdi-eye").addClass("mdi-eye-off");
            }
        });
    });

	function showPreview() {
		var input = $('#file-image');
		var files = input[0].files;

		if (files.length > 0) {
			const fileReader = new FileReader();
			const preview = $('#image-preview');
			fileReader.onload = event => {
				preview.attr('src', event.target.result);
			}
			fileReader.readAsDataURL(files[0]);
		}
	};

	function showPreviews(userId) {
		var input = $('#file-images' + userId);

		if (!input || !input[0] || !input[0].files) {
			console.error('File input or files not found.');
			return;
		}

		var files = input[0].files;

		if (files.length > 0) {
			const fileReader = new FileReader();
			const preview = $('#image-previews' + userId);

			fileReader.onload = event => {
				preview.attr('src', event.target.result);
			}

			fileReader.readAsDataURL(files[0]);
		}
	};

</script>

