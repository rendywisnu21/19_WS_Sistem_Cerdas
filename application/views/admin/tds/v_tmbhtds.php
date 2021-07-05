<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1><?= $title; ?></h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= base_url(); ?>">Beranda</a></li>
						<li class="breadcrumb-item"><a href="<?= base_url('admin/C_tds'); ?>">Data TDS</a></li>
						<li class="breadcrumb-item active"><?= $title; ?></li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<!-- left column -->
				<div class="col-md-12">
					<div class="card">
						<div class="card-header bg-dark">
							<h3 class="card-title text-bold">Form <?= $title; ?></h3>
						</div>
						<!-- /.card-header -->
						<!-- form start -->
						<form method="POST" action="<?= base_url('admin/C_tds/tambahtds'); ?>"
							enctype="multipart/form-data">
							<div class="card-body">
								<div class="row">
									<!-- <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="id_tds">Id TDS</label>
                                            <input type="text" class="form-control huruf" id="id_tds" name="id_tds" value="<?= $id_tds; ?>" redonly>
                                            <?= form_error('id_tds', '<small class="text-danger">', '</small>'); ?>
                                        </div>
                                    </div> -->
									<div class="col-md-12">
										<div class="form-group">
											<label for="namatd">Nama FuzzySet</label>
											<select class="form-control huruf" id="nmtd" name="namatd"
												placeholder="Masukkan Fuzzyset" value="<?= set_value('namatd'); ?>"
												autocomplete="off" autofocus required>
												<option disabled selected hidden>Pilih</option>
												<option value="Excellent">Excellent</option>
												<option value="Good">Good</option>
												<option value="Bad">Bad</option>
												<option value="Very Bad">Very Bad</option>
											</select>
											<?= form_error('namatd', '<small class="text-danger">', '</small>'); ?>
										</div>
										<div class="form-group">
											<label for="domain">Domain</label>
											<input type="text" class="form-control huruf" id="domain" name="domain"
												placeholder="Masukkan nilai domain" value="<?= set_value('domain'); ?>">
											<?= form_error('domain', '<small class="text-danger">', '</small>'); ?>
										</div>
									</div>
									<div class="button">
										<a href="<?= base_url('admin/C_tds')?>" class="btn btn-default"
											data-dismiss="modal"><i class="fa fa-arrow-circle-left"></i> Kembali</a>
										<button type="submit" class="btn btn-primary"><i class="far fa-save"></i>
											Simpan</button>
									</div>
								</div>
						</form>
					</div>
					<!-- /.card -->
				</div>
				<!--/.col (left) -->
			</div>
			<!-- /.row -->
		</div><!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
