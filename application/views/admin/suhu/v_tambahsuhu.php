<div class="content-wrapper">
<!-- Header -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1><?= $title; ?></h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= base_url(); ?>">Beranda</a></li>
						<li class="breadcrumb-item active"><?= $title; ?></li>
					</ol>
				</div>
			</div>
		<div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
<!-- Main Content -->
	</section>
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6">
					<div class="card card-primary">
						<div class="card-header">
							<h3 class="card-title">Form Tambah Data Suhu</h3>
						</div>
						<form method="post" action="<?= base_url('admin/c_suhu/tambah') ?>">
							<div class="card-body">
								<div class="form-group">
									<label for="suhu">Suhu</label>
									<input type="text" class="form-control" id="suhu"
										placeholder="Masukkan deskripsi suhu">
								</div>
								<div class="form-group">
									<label for="domain">Domain</label>
									<input type="text" class="form-control" id="domain"
										placeholder="Masukkan nilai domain">
								</div>
							</div>
							<div class="card-footer">
								<button type="submit" class="btn btn-primary">Tambah</button>
							</div>
						</form>
					</div>
				</div>
