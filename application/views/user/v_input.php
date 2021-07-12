<div class="content-wrapper">
	<!-- Content Header -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1><?= $title; ?></h1>
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
						<!-- form start -->
						<form method="POST" action="<?= base_url('user/C_home/hitung') ?>" enctype="multipart/form-data">
							<div class="card-body">
								<div class="row">
									<!-- <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="id_hasil">Id Hasil</label>
                                            <input type="text" class="form-control huruf" id="id_hasil" name="id_hasil" value="<?= $id_hasil; ?>" redonly>
                                            <?= form_error('id_hasil', '<small class="text-danger">', '</small>'); ?>
                                        </div>
                                    </div> -->
									<div class="col-md-12">
										<div class="form-group">
											<label for="suhu">Suhu</label>
											<input type="text" class="form-control huruf" id="suhu" name="suhu" required
												placeholder="Masukkan nilai suhu" value="<?= set_value('suhu'); ?>">
											<?= form_error('suhu', '<small class="text-danger">', '</small>'); ?>
										</div>
										<div class="form-group">
											<label for="ph">pH</label>
											<input type="text" class="form-control huruf" id="ph" name="ph" required
												placeholder="Masukkan nilai ph" value="<?= set_value('ph'); ?>">
											<?= form_error('ph', '<small class="text-danger">', '</small>'); ?>
										</div>
										<div class="form-group">
											<label for="tds">TDS</label>
											<input type="text" class="form-control huruf" id="tds" name="tds" required
												placeholder="Masukkan nilai tds" value="<?= set_value('tds'); ?>">
											<?= form_error('tds', '<small class="text-danger">', '</small>'); ?>
										</div>
										<button class="btn btn-primary" type="submit">Hitung</button>
									</div>
