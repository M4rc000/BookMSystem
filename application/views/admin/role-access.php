<div class="content-wrapper">
	<div class="card p-4">
		<h1 class="h3 mb-4 text-gray-800 text-center"><?= $title; ?></h1><br>
		<div class="card-body">
			<div class="row">
				<div class="col-lg-6">
					<h5>Role : <?= $role['role']; ?></h5>

					<table class="table" id="tbl-user-role">
						<thead>
							<tr>
								<th class="text-center">#</th>
								<th class="text-center">Menu</th>
								<th class="text-center">Access</th>
							</tr>
						</thead>
						<tbody>
							<?php $i = 1; foreach ($menu as $m) : ?>
							<tr>
								<td class="text-center"><?= $i; ?></td>
								<td class="text-center"><?= $m['menu']; ?></td>
								<td class="text-center">
									<input class="checkbox" type="checkbox" <?= check_access($role['id'], $m['id']); ?>
										data-role="<?= $role['id']; ?>" data-menu="<?= $m['id']; ?>"
										style="margin-bottom: .2rem !important;"></td>
							</tr>
							<?php $i++; endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
    $(document).ready(function() {
        $('.checkbox').change(function() {
            var role_id = $(this).data('role');
            var menu_id = $(this).data('menu');
            var checked = $(this).prop('checked') ? 1 : 0;

            $.ajax({
                url: 'admin/changeaccess', // Replace with the actual URL to update access
                type: 'POST',
                data: { role_id: role_id, menu_id: menu_id, checked: checked },
                success: function(response) {
                }
            });
        });
    });
</script>
