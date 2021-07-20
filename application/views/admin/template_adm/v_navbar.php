<body class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper">

		<!-- Preloader -->
		<div class="preloader flex-column justify-content-center align-items-center">
			<img class="animation__shake" src="<?= base_url() ?>assets/dist/img/ikankoi.png" alt="Gambar Ikan Koi"
				height="60" width="60">
			<!-- Ganti Icon!! -->
		</div>

		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-white navbar-light">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
				</li>
			</ul>

			<!-- Right navbar links -->
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" data-widget="fullscreen" href="#" role="button">
						<i class="fas fa-expand-arrows-alt"></i>
					</a>
				</li>
				<a href="#" class="btn btn-danger" type="button"
					data-toggle="modal" data-target="#modalKeluar">
					Log Out
				</a>
			</ul>

		</nav>
		<!-- /.navbar -->

		<!-- modal keluar? -->
		<div class="modal fade" id="modalKeluar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
			aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Keluar</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<h5>Anda yakin ingin <b>keluar</b>?</h5>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-outline-default" data-dismiss="modal">Tidak</button>
						<a href="<?=base_url('admin/C_auth/logout')?>" class="btn btn-danger">Ya</a>
					</div>
				</div>
			</div>
		</div>
		<!-- modal keluar end -->

