<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?= $title; ?> | BMS</title>
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/custom-style.css">
	<link rel="stylesheet" href="<?= base_url('assets'); ?>/vendors/feather/feather.css">
	<link rel="stylesheet" href="<?= base_url('assets'); ?>/vendors/ti-icons/css/themify-icons.css">
	<link rel="stylesheet" href="<?= base_url('assets'); ?>/vendors/css/vendor.bundle.base.css">
	<link rel="stylesheet" href="<?= base_url('assets'); ?>/css/vertical-layout-light/style.css">
	<link rel="shortcut icon" href="<?= base_url('assets'); ?>/images/favicon.png" />
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/vendors/mdi/css/materialdesignicons.min.css">
	<link rel="stylesheet" href="<?= base_url('assets'); ?>/vendors/select2/select2.min.css">
	<link rel="stylesheet" href="<?= base_url('assets'); ?>/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
	<link rel="stylesheet" href="<?= base_url('assets'); ?>/css/buttons.dataTables.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

	<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
	<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
	<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
	<style>			
		::-webkit-scrollbar {
			width: 12px;
		}

			/* Track */
		::-webkit-scrollbar-track {
			-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
			-webkit-border-radius: 2px;
			border-radius: 2px;
		}

			/* Handle */
		::-webkit-scrollbar-thumb {
			-webkit-border-radius: 2px;
			border-radius: 2px;
			-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.5);
		}

		.mdi-18px { font-size: 18px; }
		.mdi-24px { font-size: 24px; }
		.mdi-36px { font-size: 36px; }
		.mdi-48px { font-size: 48px; }
		.mdi-dark { color: rgba(0, 0, 0, 0.54); }
		.mdi-dark.mdi-inactive { color: rgba(0, 0, 0, 0.26); }
		.mdi-light { color: rgba(255, 255, 255, 1); }
		.mdi-light.mdi-inactive { color: rgba(255, 255, 255, 0.3); }

		.dt-buttons{
			margin-left: 3rem;
			margin-bottom: 2rem;
			border-radius: 5px !important;
		}
		
		.buttons-excel{
			background-color: #46c35f !important;
			color: whitesmoke !important;
		}
		.buttons-print{
			background-color: #f6e84e !important;
			color: whitesmoke !important;
		}
		.buttons-pdf{
			background-color: #FF4747 !important;
			color: whitesmoke !important;
		}
		
		#tbl-data_paginate, #tbl-data_info{
			margin-left: 1rem;
			margin-right: 1rem;
			margin-top: 1rem;
		}

		#data{
			margin-left: 1rem;
			margin-right: 1rem;
		}

		.dataTables_wrapper .dataTable thead .sorting:before{
			top: 12px !important;
		}
		.dataTables_wrapper .dataTable thead .sorting::before, .dataTables_wrapper .dataTable thead .sorting::after{
			color: black !important;
			font-weight: 900 !important;
		}

	</style>
</head>
<body>