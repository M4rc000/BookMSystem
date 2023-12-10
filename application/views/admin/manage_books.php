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
				<h4 class="text-center pt-2 pb-3"><strong>TABLE BOOKS</strong></h4>
				<button class="btn btn-primary ml-3 mb-3" data-bs-toggle="modal" data-bs-target="#AddModal"><i class="ti-plus pt-5" style="font-size: small;"></i><span class="pl-3">New Book</span></button>
					<div class="table-responsive py-3">
						<table class="table wrap" id="tbl-book">
							<thead>
								<tr>
									<th class="text-center">#</th>
									<th class="text-center">Image</th>
									<th class="text-center">Title</th>
									<th class="text-center">Sheet</th>
									<th class="text-center">Author</th>
									<th class="text-center">Publisher</th>
									<th class="text-center">User</th>
									<th class="text-center">Active</th>
									<th class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php $number = 0; foreach($books as $book) : $number+=1;?>
									<tr>
										<td class="text-center"><?= $number; ?></td>
										<td class="text-center"><img src="<?= base_url('assets');?>/images/profile/<?= $book['image']; ?>" alt=""></td>
										<td class="text-center"><?= $book['name']; ?></td>
										<td class="text-center"><?= $book['sheet']; ?></td>
										<td class="text-center"><?= $book['author']; ?></td>
										<td class="text-center"><?= $book['publisher']; ?></td>
										<td class="text-center"><?= $book['crtby']; ?></td>
										<td class="text-center"><?php if($book['is_active'] == 1){ echo '<span class="mdi mdi-check-circle" style="font-size: 20px;  color: blue"></span>'; } else{ echo '<span class="mdi mdi-close-circle" style="font-size: 20px"></span>'; } ?></td>
										<td class="text-center">
											<a href="" class="badge badge-success pt-2" data-bs-toggle="modal" data-bs-target="#EditModal">
												<i class="mdi mdi-pencil"></i>
											</a> 
											<a href="" class="badge badge-danger pt-2" data-bs-toggle="modal" data-bs-target="#DeleteConfirmModal">
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

		$('body').addClass('sidebar-icon-only');
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