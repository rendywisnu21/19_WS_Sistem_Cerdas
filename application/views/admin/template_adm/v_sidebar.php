<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="<?= base_url() ?>" class="brand-link">
		<img src="<?= base_url() ?>assets/dist/img/fish_white.png" alt="Gambar Ikan Koi"
			class="brand-image img-circle elevation-3" style="opacity: .8">
		<span class="brand-text font-weight-light">Sistem Cerdas</span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user panel (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				<img src="<?= base_url() ?>assets/dist/img/userwhite.png" class="img-circle elevation-2" alt="User Image">
			</div>
			<div class="info">
				<a href="#" class="d-block">User</a>
			</div>
		</div>

		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<!-- Add icons to the links using the .nav-icon class 
						with font-awesome or any other icon font library -->
				<li class="nav-item menu-open">
					<a href="#" class="nav-link active">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>
							Dasbor
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">
						<i class="nav-icon fab fa-elementor"></i>
						<p>
							Master
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							
							<a href="<?= base_url('admin/C_suhu') ?>" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Data Suhu</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('admin/C_parameter') ?>" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Parameter</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('admin/C_grade') ?>" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Grade</p>
							</a>
						</li>
					</ul>
				</li>
			</ul>
		</nav>
	</div>
</aside>
