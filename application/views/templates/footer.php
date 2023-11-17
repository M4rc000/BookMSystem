 <footer class="footer">
 	<div class="d-sm-flex justify-content-center">
 		<span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright ©
 			<?= date('Y'); ?></span>
 	</div>
 </footer>
 </div>
 </div>
 </div>

 <script src="<?= base_url('assets'); ?>/vendors/js/vendor.bundle.base.js"></script>
 <script src="<?= base_url('assets'); ?>/vendors/chart.js/Chart.min.js"></script>
 <script src="<?= base_url('assets'); ?>/vendors/datatables.net/jquery.dataTables.js"></script>
 <script src="<?= base_url('assets'); ?>/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
 <script src="<?= base_url('assets'); ?>/js/dataTables.select.min.js"></script>

 <script src="<?= base_url('assets'); ?>/js/off-canvas.js"></script>
 <script src="<?= base_url('assets'); ?>/js/hoverable-collapse.js"></script>
 <script src="<?= base_url('assets'); ?>/js/template.js"></script>
 <script src="<?= base_url('assets'); ?>/js/settings.js"></script>
 <script src="<?= base_url('assets'); ?>/js/todolist.js"></script>
 <script src="<?= base_url('assets'); ?>/js/dashboard.js"></script>
 <script src="<?= base_url('assets'); ?>/js/Chart.roundedBarCharts.js"></script>
 <script src="<?= base_url('assets'); ?>/vendors/typeahead.js/typeahead.bundle.min.js"></script>
 <script src="<?= base_url('assets'); ?>/vendors/select2/select2.min.js"></script>
 <script src="<?= base_url('assets'); ?>/js/file-upload.js"></script>
 <script src="<?= base_url('assets'); ?>/js/typeahead.js"></script>
 <script src="<?= base_url('assets'); ?>/js/select2.js"></script>
 <script src="<?= base_url('assets'); ?>/js/chart.js"></script>
 <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
 	integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
 </script>
 <script>
   $('.custom-file-input').on('change', function() {
		let fileName = $(this).val().split('\\').pop();
		$(this).next('.custom-file-label').addClass("selected").html(fileName);
	});

</script>

 </body>

 </html>
