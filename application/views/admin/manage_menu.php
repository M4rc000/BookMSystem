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
				<?php if ($this->session->flashdata('EDIT') != '') { ?>
				<?= $this->session->flashdata('EDIT'); ?>
				<?php } ?>
				<?php if ($this->session->flashdata('ERROR') != '') { ?>
				<?= $this->session->flashdata('ERROR'); ?>
				<?php } ?>
				<h4 class="pt-2 pb-3 text-center"><strong>TABLE MENU</strong></h4>
				<button class="btn btn-primary ml-3 mb-3" style="background-color: #4b49ac" data-bs-toggle="modal" data-bs-target="#AddModal"><i class="ti-plus pt-5" style="font-size: small;"></i><span class="pl-3">New Menu</span></button>
					<div class="table-responsive py-3">
						<table class="table" id="tbl-menu">
							<thead>
								<tr>
									<th class="text-center">#</th>
									<th class="text-center">Menu</th>
									<th class="text-center">Menu ID</th>
									<th class="text-center">Create date</th>
									<th class="text-center">Create by</th>
									<th class="text-center">Update date</th>
									<th class="text-center">Update by</th>
									<th class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php $number = 0; foreach($menu as $m) : $number+=1; ?>
								<tr>
									<td class="text-center"><?= $number; ?></td>
									<td class="text-center"><?= $m['menu']; ?></td>
									<td class="text-center"><?= $m['id']; ?></td>
									<td class="text-center"><?= date_format(date_create($m['crtdt']), 'd-m-y H:i'); ?></td>	
									<td class="text-center"><?= $m['crtby']; ?></td>
									<td class="text-center"><?= date_format(date_create($m['upddt']), 'd-m-y H:i'); ?></td>	
									<td class="text-center"><?= $m['updby']; ?></td>
									<td class="text-center">
										<a href="" class="badge badge-success pt-2" data-bs-toggle="modal" data-bs-target="#EditModal<?= $m['id'];?>">
											<i class="mdi mdi-pencil"></i>
										</a> 
										<a href="" class="badge badge-danger pt-2" data-bs-toggle="modal" data-bs-target="#DeleteConfirmModal<?= $m['id'];?>">
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
<div class="modal fade" id="AddModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top: -5rem">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title pb-0 mb-0" id="exampleModalLabel">Add New Menu</h4>
      </div>
      <div class="modal-body">
		<div class="row">
			<div class="col-md-12">
				<form action="<?=base_url('admin/addMenu');?>" method="POST">
					<div class="row">
						<div class="col-sm-9">
							<div class="form-group">
								<label for="name">Menu Name</label>
								<input type="text" class="form-control" id="name" name="name">
								<input type="text" class="form-control" id="user" name="user" style="display: none;" value="<?=$user['username'];?>">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" style="color: white" data-bs-dismiss="modal">Close</button>
			<button type="submit" class="btn btn-primary">Save changes</button>
		</div>
	</form>
    </div>
  </div>
</div>

<!-- EDIT MODAL-->
<?php foreach($menu as $m) : ?>
<div class="modal fade" id="EditModal<?= $m['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top: -5rem">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title pb-0 mb-0" id="exampleModalLabel">Edit Menu</h4>
      </div>
      <div class="modal-body">
		<div class="row">
			<div class="col-md-12">
	<form action="<?=base_url('admin/editMenu');?>" method="POST">
					<div class="row">
						<div class="col-sm-9">
							<div class="form-group">
								<label for="name">Menu Name</label>
								<input type="text" class="form-control" id="name" name="name" value="<?= $m['menu']; ?>">
								<input type="text" class="form-control" id="user" name="user" value="<?= $user['username'];?>" style="display: none;">
								<input type="text" name="id" id="id" value="<?= $m['id']; ?>" style="display: none;">
							</div>
						</div>
					</div>
				
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
<?php endforeach; ?>

<!-- DELETE CONFIRM MODAL-->
<?php foreach($menu as $m) : ?>
<?= form_open_multipart('admin/deleteMenu'); ?>
<div class="modal fade" id="DeleteConfirmModal<?= $m['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top: -5rem">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title pb-0 mb-0" id="exampleModalLabel">Confirm to delete ?</h4>
      </div>
	  <input type="text" name="id" id="id" value="<?= $m['id']; ?>" style="display: none;">
	  <input type="text" name="user" value="<?=$user['username'];?>" style="display: none;">
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" style="color: white" data-bs-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary">Confirm</button>
      </div>
    </div>
  </div>
</div>
</form>
<?php endforeach; ?>

<script>
	$(window).ready(function(){
		new DataTable('#tbl-menu', {
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
</script>
