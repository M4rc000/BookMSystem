<style>
	carousel {
		position: relative
	}

	.carousel.pointer-event {
		touch-action: pan-y
	}

	.carousel-inner {
		position: relative;
		width: 100%;
		overflow: hidden
	}

	.carousel-inner::after {
		display: block;
		clear: both;
		content: ""
	}

	.carousel-item {
		position: relative;
		display: none;
		float: left;
		width: 100%;
		margin-right: -100%;
		-webkit-backface-visibility: hidden;
		backface-visibility: hidden;
		transition: transform .6s ease-in-out
	}

	@media (prefers-reduced-motion:reduce) {
		.carousel-item {
			transition: none
		}
	}

	.carousel-item-next,
	.carousel-item-prev,
	.carousel-item.active {
		display: block
	}

	.active.carousel-item-end,
	.carousel-item-next:not(.carousel-item-start) {
		transform: translateX(100%)
	}

	.active.carousel-item-start,
	.carousel-item-prev:not(.carousel-item-end) {
		transform: translateX(-100%)
	}

	.carousel-fade .carousel-item {
		opacity: 0;
		transition-property: opacity;
		transform: none
	}

	.carousel-fade .carousel-item-next.carousel-item-start,
	.carousel-fade .carousel-item-prev.carousel-item-end,
	.carousel-fade .carousel-item.active {
		z-index: 1;
		opacity: 1
	}

	.carousel-fade .active.carousel-item-end,
	.carousel-fade .active.carousel-item-start {
		z-index: 0;
		opacity: 0;
		transition: opacity 0s .6s
	}

	@media (prefers-reduced-motion:reduce) {

		.carousel-fade .active.carousel-item-end,
		.carousel-fade .active.carousel-item-start {
			transition: none
		}
	}

	.carousel-control-next,
	.carousel-control-prev {
		position: absolute;
		top: 0;
		bottom: 0;
		z-index: 1;
		display: flex;
		align-items: center;
		justify-content: center;
		width: 15%;
		padding: 0;
		color: #fff;
		text-align: center;
		background: 0 0;
		border: 0;
		opacity: .5;
		transition: opacity .15s ease
	}

	@media (prefers-reduced-motion:reduce) {

		.carousel-control-next,
		.carousel-control-prev {
			transition: none
		}
	}

	.carousel-control-next:focus,
	.carousel-control-next:hover,
	.carousel-control-prev:focus,
	.carousel-control-prev:hover {
		color: #fff;
		text-decoration: none;
		outline: 0;
		opacity: .9
	}

	.carousel-control-prev {
		left: 0
	}

	.carousel-control-next {
		right: 0
	}

	.carousel-control-next-icon,
	.carousel-control-prev-icon {
		display: inline-block;
		width: 2rem;
		height: 2rem;
		background-repeat: no-repeat;
		background-position: 50%;
		background-size: 100% 100%
	}

	.carousel-control-prev-icon {
		background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z'/%3e%3c/svg%3e")
	}

	.carousel-control-next-icon {
		background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e")
	}

	.carousel-indicators {
		position: absolute;
		right: 0;
		bottom: 0;
		left: 0;
		z-index: 2;
		display: flex;
		justify-content: center;
		padding: 0;
		margin-right: 15%;
		margin-bottom: 1rem;
		margin-left: 15%;
		list-style: none
	}

	.carousel-indicators [data-bs-target] {
		box-sizing: content-box;
		flex: 0 1 auto;
		width: 30px;
		height: 3px;
		padding: 0;
		margin-right: 3px;
		margin-left: 3px;
		text-indent: -999px;
		cursor: pointer;
		background-color: #fff;
		background-clip: padding-box;
		border: 0;
		border-top: 10px solid transparent;
		border-bottom: 10px solid transparent;
		opacity: .5;
		transition: opacity .6s ease
	}

	@media (prefers-reduced-motion:reduce) {
		.carousel-indicators [data-bs-target] {
			transition: none
		}
	}

	.carousel-indicators .active {
		opacity: 1
	}

	.carousel-caption {
		position: absolute;
		right: 15%;
		bottom: 1.25rem;
		left: 15%;
		padding-top: 1.25rem;
		padding-bottom: 1.25rem;
		color: #fff;
		text-align: center
	}

	.carousel-dark .carousel-control-next-icon,
	.carousel-dark .carousel-control-prev-icon {
		filter: invert(1) grayscale(100)
	}

	.carousel-dark .carousel-indicators [data-bs-target] {
		background-color: #000
	}

	.carousel-dark .carousel-caption {
		color: #000
	}

	@import url('https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap');
	@import url('https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap');
</style>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<div class="content-wrapper">
	<div class="card shadow">
		<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
					aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
					aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
					aria-label="Slide 3"></button>
				<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3"
					aria-label="Slide 5"></button>
				<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4"
					aria-label="Slide 6"></button>
				<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="5"
					aria-label="Slide 7"></button>
			</div>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<div class="container text-justify text-center" style="padding: 80px">
						<p style="font-family: 'Kaushan Script', cursive; font-size: 30px !important">
						Sangkuriang and Asal Mula Tangkuban Perahu
						</p>
					</div>
					<div class="carousel-caption d-none d-md-block">
						
					</div>
				</div>
				<div class="carousel-item">
					<div class="container text-justify" style="padding: 80px;">
						<p style="font-family: 'Indie Flower', cursive">Diceritakan pada zaman dahulu, hiduplah seorang Mama bernama Dayang Sumbi yang tinggal bersama anaknya bernama Sangkuriang.Keduanya tinggal di sebuah desa bersama dengan seekor anjing kesayangan mereka yaitu Tumang.Sebelum hidup berdua bersama anaknya, Dayang Sumbi menikah dengan titisan dewa yang telah dikutuk menjadi hewan dan dibuang ke bumi.Tanpa mereka sadari, sebenarnya mereka hidup bertiga bersama suami Dayang Sumbi dan papa dari Sangkuriang yang berubah menjadi anjing kutukan tadi.Setelah melewati masa bersama anaknya, Sangkuriang pun tumbuh menjadi pemuda dengan paras memesona serta tubuh yang gagah dan kuat.Sangkuriang tumbuh menjadi anak pemberani yang senang berburu, ia pun selalu ditemani si Tumang yang merupakan titisan anjing dari papa kandungnya sendiri.</p>
					</div>
					<div class="carousel-caption d-none d-md-block">
						
					</div>
				</div>
				<div class="carousel-item">
					<div class="container text-justify" style="padding: 80px;">
						<p style="font-family: 'Indie Flower', cursive">Diceritakan pada zaman dahulu, hiduplah seorang Mama bernama Setelah kepergian Sangkuriang, Dayang Sumbi mengaku menyesal atas perbuatannya kepada anaknya sendiri. Ia pun memohon ampun kepada para dewa atas kesalahannya tersebut. Mendengar permohonan Dayang Sumbi, mereka menerima permintaan maaf itu dan mengaruniakan kecantikan abadi kepada Dayang Sumbi.Dilain sisi, Sangkuriang yang terus mengembara tanpa tujuan pasti, kini tumbuh menjadi lelaki dewasa yang memiliki paras dan tubuh yang dapat memikat banyak perempuan. Tanpa sadar, setelah bertahun lamanya mengembara ia kembali ke tempat dimana dulu dilahirkan.Sangkuriang berhenti ke salah satu pondok guna meminta air minum kepada pemilik pondok tersebut. Tanpa disadari, ia terpesona dengan kecantikan Dayang Sumbi yang abadi.Ia tak mengetahui bahwa perempuan berparas menawan yang ia temui itu adalah mama kandungnya sendiri.Begitu pun yang terjadi pada Dayang Sumbi, melihat sosok lelaki gagah nan sakti dihadapannya, ia tak menyadari bahwa lelaki tersebut adalah Sangkuriang anaknya sendiri.Dari situlah tumbuh rasa simpat dan cinta, sampai akhirnya mereka merencanakan pernikahan.</p>
					</div>
					<div class="carousel-caption d-none d-md-block">
						
					</div>
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev" style="padding-right: 5.5rem;">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next" style="padding-left: 5.5rem;">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
			</button>
		</div>
	</div>
</div>

<script src="<?= base_url('assets');?>/js/custom-bootstrap.js"></script>
<script>
	$(document).ready(function () {
		const elem = document.documentElement; 
		elem.requestFullscreen();
	});
</script>