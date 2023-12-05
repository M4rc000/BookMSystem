<div class="theme-setting-wrapper" >
	<div id="settings-trigger"><i class="ti-settings"></i></div>
	<div id="theme-settings" class="settings-panel" style="background-color: #282f3a">
		<i class="settings-close ti-close"></i>
		<p class="settings-heading bold text-white" style="background-color: #282f3a; font-size: 17px;">Custom Theme</p>
		<div id="">
			<div class="sidebar-bg-options selected text-white" id="ganti-background"
				style="background-image: url(<?= base_url('assets');?>/images/content-background/dark/stardust.png);">
				<input type="radio" name="ganti-theme-background" value="images/content-background/dark/stardust.png"
					class="mr-3"></input>Stardust</div>
			<div class="sidebar-bg-options selected text-white" id="ganti-background"
				style="background-image: url(<?= base_url('assets');?>/images/content-background/dark/prism.png);">
				<input type="radio" name="ganti-theme-background" value="images/content-background/dark/prism.png"
					class="mr-3"></input>Prism</div>
			<div class="sidebar-bg-options selected text-white" id="ganti-background"
				style="background-image: url(<?= base_url('assets');?>/images/content-background/dark/webb-dark.png);">
				<input type="radio" name="ganti-theme-background" value="images/content-background/dark/webb-dark.png"
					class="mr-3"></input>Webb-Dark</div>
			<div class="sidebar-bg-options selected text-white" id="ganti-background"
				style="background-image: url(<?= base_url('assets');?>/images/content-background/dark/dark-grey-terrazzo.png);">
				<input type="radio" name="ganti-theme-background"
					value="images/content-background/dark/dark-grey-terrazzo.png"
					class="mr-3"></input>Dark-Grey-Terrazzo</div>
			<div class="sidebar-bg-options selected text-white" id="ganti-background"
				style="background-image: url(<?= base_url('assets');?>/images/content-background/dark/wheat.webp);">
				<input type="radio" name="ganti-theme-background" value="images/content-background/dark/wheat.webp"
					class="mr-3"></input>Wheat</div>
		</div>
		<div id="">
			<div class="sidebar-bg-options selected text-white" id="ganti-background"
				style="background-image: url(<?= base_url('assets');?>/images/content-background/light/leaves-pattern.png);">
				<input type="radio" name="ganti-theme-background"
					value="images/content-background/light/leaves-pattern.png" class="mr-3"></input>Leaves- Pattern
			</div>
			<div class="sidebar-bg-options selected text-white" id="ganti-background"
				style="background-image: url(<?= base_url('assets');?>/images/content-background/light/palm-leaf.webp);">
				<input type="radio" name="ganti-theme-background" value="images/content-background/light/palm-leaf.webp"
					class="mr-3"></input>Palm - Leaf</div>
			<div class="sidebar-bg-options selected text-white" id="ganti-background"
				style="background-image: url(<?= base_url('assets');?>/images/content-background/light/spring.png);">
				<input type="radio" name="ganti-theme-background" value="images/content-background/light/spring.png"
					class="mr-3"></input>Spring</div>
			<div class="sidebar-bg-options selected text-white" id="ganti-background"
				style="background-image: url(<?= base_url('assets');?>/images/content-background/light/sakura.png);">
				<input type="radio" name="ganti-theme-background" value="images/content-background/light/sakura.png"
					class="mr-3"></input>Sakura</div>
			<div class="sidebar-bg-options selected text-white" id="ganti-background"
				style="background-image: url(<?= base_url('assets');?>/images/content-background/light/restaurant.webp);">
				<input type="radio" name="ganti-theme-background"
					value="images/content-background/light/restaurant.webp" class="mr-3"></input>Restaurant</div>
		</div>
	</div>
</div>
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
	$(document).ready(function () {
		// Function to set the background image based on the selected theme
		function setBackground(selectedValue) {
			$('.content-wrapper').css('background-image', 'url(<?= base_url('assets');?>/' + selectedValue);

			// Save the selected theme to local storage
			localStorage.setItem('selectedTheme', selectedValue);
		}

		// Check if there is a selected theme in local storage
		var storedTheme = localStorage.getItem('selectedTheme');
		if (storedTheme) {
			// If there is, set the background using the stored theme
			setBackground(storedTheme);
			
			// Also update the radio button selection
			$('input[name="ganti-theme-background"][value="' + storedTheme + '"]').prop('checked', true);
		}
		else{
			$('.content-wrapper').css('background-image', 'url()');
		}

		// Event handler for radio button change
		$('input[type="radio"]').change(function () {
			var selectedValue = $('input[name="ganti-theme-background"]:checked').val();
			setBackground(selectedValue);
		});
	});


	$('.custom-file-input').on('change', function () {
		let fileName = $(this).val().split('\\').pop();
		$(this).next('.custom-file-label').addClass("selected").html(fileName);
	});

</script>

</body>

</html>
