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
				<h4 class="pt-2 pb-3 text-center"><strong>TABLE SUB-MENU</strong></h4>
					<button class="btn btn-primary ml-3 mb-3" style="background-color: #4b49ac" data-bs-toggle="modal"
						data-bs-target="#AddModal"><i class="ti-plus pt-5" style="font-size: small;"></i><span
							class="pl-3">New Sub-Menu</span></button>
					<div class="table-responsive py-3">
						<table class="table" id="tbl-sub-menu">
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
								<?php $number= 0; foreach($submenu as $sb) : $number+=1; ?>
								<tr>
									<td class="text-center"><?= $number; ?></td>
									<td class="text-center"><?= $sb['title']; ?></td>
									<td class="text-center"><?php if($sb['menu_id'] == 1){ echo 'Admin'; } elseif($sb['menu_id'] == 2){ echo 'User'; } else{ echo 'Explore'; } ?></td>
									<td class="text-center"><?= $sb['url']; ?></td>
									<td class="text-center"><?= $sb['icon']; ?></td>
									<td class="text-center"><?php if($sb['is_active'] == 1){ echo '<span class="mdi mdi-check-circle" style="font-size: 20px;  color: blue"></span>'; } else{ echo '<span class="mdi mdi-close-circle" style="font-size: 20px"></span>'; } ?></td>
									<td class="text-center">
										<a href="" class="badge badge-success pt-2" data-bs-toggle="modal"
											data-bs-target="#EditModal<?= $sb['id']; ?>">
											<i class="mdi mdi-pencil"></i>
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
<!-- content-wrapper ends -->


<!-- ADD MODAL-->
<div class="modal fade" id="AddModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
	style="margin-top: -5rem">
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
				<button type="button" class="btn btn-primary" style="background-color: grey; border-color: grey;"
					data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary" style="background-color: #4b49ac;">Save changes</button>
			</div>
		</div>
	</div>
</div> 

<!-- EDIT MODAL-->
<?php foreach($submenu as $sb) : ?>
<div class="modal fade" id="EditModal<?= $sb['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
	style="margin-top: -5rem">
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
								<div class="col-sm-3">
									<div class="form-group">
										<label for="submenu_name">Sub-Menu Name</label>
										<input type="text" class="form-control" id="submenu_name" name="submenu_name" value="<?= $sb['title'] ?>">
									</div>
								</div>
								<div class="col-sm-3">
									<div class="form-group">
										<label for="menu_id">Menu</label>
										<input type="text" class="form-control" id="menu_id" name="menu_id" value="<?php if($sb['menu_id'] == 1){ echo 'Admin'; } elseif($sb['menu_id'] == 2){ echo 'User'; } else{ echo 'Explore'; } ?>">
									</div>
								</div>
								<div class="col-sm-3">
									<div class="form-group">
										<label for="submenu_url">Sub-Menu Url</label>
										<input type="text" class="form-control" id="submenu_url" name="submenu_url" value="<?= $sb['url'] ?>">
									</div>
								</div>
								<div class="col-sm-3">
									<div class="form-group">									
										<label for="submenu_icon">Sub-Menu Icon</label>
										<div class="input-group mb-3">
											<span class="input-group-text <?= $sb['icon']; ?>" id="span-icon"></span>
											<input type="text" class="form-control" id="submenu_icon" name="submenu_icon" value="<?= $sb['icon'] ?>">
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-3">
									<div class="form-group">
										<label for="aktif">Status</label>
										<select class="form-control text-dark" id="aktif" name="aktif">
											<option value="Active" <?= $sb['is_active'] == 1 ? 'selected' : '' ?>>Active</option>
											<option value="Not Active" <?= $sb['is_active'] != 1 ? 'selected' : '' ?>>Not Active</option>
										</select>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary"
					data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>
<?php endforeach; ?>

<!-- DELETE CONFIRM MODAL-->
<div class="modal fade" id="DeleteConfirmModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
	style="margin-top: -5rem">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title pb-0 mb-0" id="exampleModalLabel">Confirm to delete ?</h4>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" style="background-color: grey; border-color: grey;"
					data-bs-dismiss="modal">Cancel</button>
				<button type="button" class="btn btn-primary" style="background-color: #4b49ac;">Confirm</button>
			</div>
		</div>
	</div>
</div>


<script>	
	$(window).ready(function(){
		new DataTable('#tbl-sub-menu', {
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
	})

	$('#submenu_icon').on('keyup', function(){
		var initialIcon = $('#submenu_icon').val();
		$('#span-icon').addClass(initialIcon);
		var icon = $(this).val();
		$('#span-icon').attr('class', 'input-group-text ' + icon);
	});
</script>