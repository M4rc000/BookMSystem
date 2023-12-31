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
	<div class="card shadow" style="width: 100%;">
		<div class="row justify-content-center pl-2 pr-2">
			<div class="col-md-6 grid-margin stretch-card text-center">
				<div class="card mt-5" style="border: 2px solid grey;">
					<div class="card-body">
						<h4 class="card-title">Books chart</h4>
						<canvas id="bookChart"></canvas>
					</div>
				</div>
			</div>
			<div class="col-md-6 grid-margin stretch-card text-center">
				<div class="card mt-5" style="border: 2px solid grey;">
					<div class="card-body">
						<h4 class="card-title">User chart</h4>
						<canvas id="userChart"></canvas>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="card shadow mt-3">
		<div class="row justify-content-center">
			<div class="row justify-content-center pt-5">
				<div class="col-md-12 text-center">
					<h4><strong>TABLE USER</strong></h4>
				</div>
			</div>
			<div class="col-md-12">
				<div class="table-responsive py-3 px-5">
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
									<td class="text-center"><?= $u['date_joined']; ?></td>
								</tr>
							<?php $number+=1; ?>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="card shadow mt-3">
		<div class="row justify-content-center">
			<div class="row justify-content-center pt-5">
				<div class="col-md-12 text-center">
					<h4><strong>TABLE BOOKS</strong></h4>
				</div>
			</div>
			<div class="col-md-12">
				<div class="table-responsive py-3">
					<table class="table">
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
								<td class="text-center"><img src="<?= base_url('assets');?>/images/faces/face1.jpg"
										alt=""></td>
								<td class="text-center">Admin</td>
								<td class="text-center">Simple Love</td>
								<td class="text-center">...</td>
								<td class="text-center">...</td>
								<td class="text-center">1</td>
								<td class="text-center">
									<a href="" class="badge badge-success pt-2" data-bs-toggle="modal"
										data-bs-target="#EditModal">
										<i class="mdi mdi-pencil"></i>
									</a>
									<a href="" class="badge badge-danger pt-2" data-bs-toggle="modal"
										data-bs-target="#DeleteConfirmModal">
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
<script src="<?= base_url('assets');?>/vendors/chart.js/Chart.min.js"></script>
<script>
	new DataTable('#tbl-user', {
		searching: true,
		search: {
			"smart": false
		},
		lengthMenu: [
			[10, 25, 50, -1],
			[10, 25, 50, 'All']
		]
	});

	var userDataChart = <?= json_encode($userDataChart); ?>;
	var booksDataChart = <?= json_encode($booksDataChart); ?>;

  	var dataUser = {
      labels: ["Jan", "Feb", "Mar", "Apr", "May", "June", "Jul","Aug","Sep","Oct","Nov","Dec" ],
      datasets: [{
          label: 'Total User',
          data: userDataChart,
          backgroundColor: [
              'rgba(54, 162, 235, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(54, 162, 235, 0.2)',
          ],
          borderColor: [
              'rgba(54, 162, 235, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(54, 162, 235, 1)',
          ],
          borderWidth: 1
      }]
  	};	

	var optionsUser = {
		scales: {
			yAxes: [{
				ticks: {
					beginAtZero:true,
					stepSize: 1
				}
			}]
		},
		legend: {
			display: true
		},
		elements: {
			point: {
				radius: 0
			}
		}
		};

  
	if($("#userChart").length) {
		var lineChartCanvas = $("#userChart").get(0).getContext("2d");
		var lineChart = new Chart(lineChartCanvas, {
		type: 'bar',
		data: dataUser,
		options: optionsUser
		});
	}


	var dataBook = {
      labels: ["Jan", "Feb", "Mar", "Apr", "May", "June", "Jul","Aug","Sep","Oct","Nov","Dec" ],
      datasets: [{
          label: 'Total Books',
          data: booksDataChart,
          backgroundColor: [
              'rgba(75, 192, 192, 0.2)',
              'rgba(75, 192, 192, 0.2)',
              'rgba(75, 192, 192, 0.2)',
              'rgba(75, 192, 192, 0.2)',
              'rgba(75, 192, 192, 0.2)',
              'rgba(75, 192, 192, 0.2)',
              'rgba(75, 192, 192, 0.2)',
              'rgba(75, 192, 192, 0.2)',
              'rgba(75, 192, 192, 0.2)',
              'rgba(75, 192, 192, 0.2)',
              'rgba(75, 192, 192, 0.2)',
              'rgba(75, 192, 192, 0.2)',
          ],
          borderColor: [,
              'rgba(75, 192, 192, 1)',
              'rgba(75, 192, 192, 1)',
              'rgba(75, 192, 192, 1)',
              'rgba(75, 192, 192, 1)',
              'rgba(75, 192, 192, 1)',
              'rgba(75, 192, 192, 1)',
              'rgba(75, 192, 192, 1)',
              'rgba(75, 192, 192, 1)',
              'rgba(75, 192, 192, 1)',
              'rgba(75, 192, 192, 1)',
              'rgba(75, 192, 192, 1)',
              'rgba(75, 192, 192, 1)',
          ],
          borderWidth: 1
      }]
  	};	

	var optionsBook = {
		scales: {
			yAxes: [{
				ticks: {
					beginAtZero:true,
					stepSize: 1
				}
			}]
		},
		legend: {
			display: true
		},
		elements: {
			point: {
				radius: 0
			}
		}
	};

	if($("#bookChart").length) {
		var lineChartCanvasBook = $("#bookChart").get(0).getContext("2d");
		var lineChart = new Chart(lineChartCanvasBook, {
		type: 'bar',
		data: dataBook,
		options: optionsBook
		});
	}
</script>


