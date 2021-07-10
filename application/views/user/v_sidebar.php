		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<!-- Brand Logo -->
			<a href="<?= base_url() ?>" class="brand-link">
				<img src="<?= base_url() ?>assets/dist/img/ikankoi.png" alt="Gambar Ikan Koi"
					class="brand-image img-circle elevation-3" style="opacity: .8">
				<span class="brand-text font-weight-light">Sistem Cerdas</span>
				<!-- <span class="brand-text font-weight-light">Identifikasi Kualitas Air</span> -->
			</a>

			<!-- Sidebar -->
			<div class="sidebar">
				<!-- untuk membaca link  -->
				<?php $link = $this->uri->segment(2); ?>
				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
						data-accordion="false">
						<!-- Add icons to the links using the .nav-icon class 
						with font-awesome or any other icon font library -->
						<li class="nav-item">
							<a href="<?=base_url('user/C_beranda')?>"
								class="nav-link <?php if($link === 'C_beranda'){echo 'active';} ?> ">
								<i class="nav-icon fas fa-tachometer-alt"></i>
								<p>Beranda</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('user/C_home') ?>" class="nav-link 
								<?php if($link === 'C_home'){echo 'active';} ?>">
								<i class="fas fa-file-alt nav-icon"></i>
								<p>Input</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('user/C_riwayat') ?>" class="nav-link 
								<?php if($link === 'C_riwayat'){echo 'active';} ?>">
								<i class="fas fa-history nav-icon"></i>
								<p>Riwayat</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('user/C_profil') ?>" class="nav-link 
								<?php if($link === 'C_profil'){echo 'active';} ?>">
								<i class="fas fa-address-card nav-icon"></i>
								<p>Profil</p>
							</a>
						</li>
					</ul>
				</nav>
			</div>
		</aside>

		<!-- modal keluar? -->
		<div class="modal fade" id="modalKeluar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
			aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-body">
						Anda yakin ingin keluar?
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
						<a href="<?=base_url('admin/C_auth/logout')?>" class="btn btn-danger">Keluar</a>
					</div>
				</div>
			</div>
		</div>
		<!-- modal keluar? end -->
