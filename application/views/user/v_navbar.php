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
				<li class="nav-item">
					<?php if(!isset($_SESSION['auth'])){ ?>
					<a href="<?= base_url('admin/C_auth') ?>" class="btn btn-primary" type="button">
						Log In sebagai Admin
					</a>
					<?php } else { ?>
					<a href="<?= base_url('admin/C_auth/logout') ?>" class="btn btn-danger" type="button">
						Log Out
					</a>
					<?php } ?>
				</li>
			</ul>
		</nav>
		<!-- /.navbar -->
