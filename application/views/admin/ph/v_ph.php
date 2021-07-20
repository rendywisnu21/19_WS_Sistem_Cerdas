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
						<li class="breadcrumb-item"><a href="<?= base_url('admin/C_dashboard') ?>">Beranda</a></li>
						<li class="breadcrumb-item active"><?= $title; ?></li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
		<div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>

	</section>
	<section class="content">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header bg-dark">
						<h3 class="card-title text-bold float-left">Tabel <?= $title; ?></h3>
						<a href="#" class="btn btn-primary text-bold float-right" data-target="#modalTambah"
							data-toggle="modal">
							Tambah Data
						</a>
					</div>
					<!-- /.card-header -->
					<div class="card-body table-responsive p-0">
						<table class="table table-hover">
							<thead>
								<tr class="text-center">
									<th>No</th>
									<th>Fuzzy Set</th>
									<th>Domain</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1;
									foreach ($fuzzy_set as $fz):
										$id = $fz->id_ph
								?>
								<tr>
									<td class="text-center"><?= $no; ?></td>
									<td class="text-center"><?= $fz->fuzzy_set; ?></td>
									<td class="text-center"><?= $fz->domain; ?></td>
									<td class="text-center">
										<button type="button" class="btn btn-outline-info mx-2" data-toggle="modal"
											data-target="#modalEdit<?= $id ?>">Edit</button>
										<button type="button" class="btn btn-outline-danger" data-toggle="modal"
											data-target="#modalHapus<?= $id ?>">Hapus</button>
									</td>
								</tr>
								<?php $no++; ?>
								<?php endforeach; ?>
							</tbody>
							<tfoot>
								<tr class="text-center">
									<th>No</th>
									<th>Fuzzy Set</th>
									<th>Domain</th>
									<th>Aksi</th>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

<!-- modal tambah -->
<div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Tambah Data</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="<?php echo base_url() . 'admin/C_ph/tambah' ?>" method="post">
				<div class="modal-body">
					<div class="form-group">
						<label for="fuzzy_set">Nilai FuzzySet</label>
						<select class="form-control huruf" id="fuzzy_set" name="fuzzy_set" placeholder="Pilih Fuzzyset"
							value="<?= set_value('fuzzy_set'); ?>" autocomplete="off" autofocus required>
							<option disabled selected hidden>Pilih</option>
							<option value="Excellent">Excellent</option>
							<option value="Good">Good</option>
							<option value="Bad">Bad</option>
							<option value="Very Bad">Very Bad</option>
						</select>
						<?= form_error('fuzzy_set', '<small class="text-danger">', '</small>'); ?>
					</div>
					<div class="form-group">
						<label for="domain">Domain</label>
						<input type="text" class="form-control" id="domain" name="domain"
							placeholder="Isi dengan nilai angka">
						<?= form_error('domain', '<small class="text-danger">', '</small>'); ?>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-outline-default" data-dismiss="modal">Batal</button>
					<button type="submit" class="btn btn-primary">Tambah</button>
				</div>
			</form>
		</div>
		</>
	</div>
</div>
<!-- modal tambah end -->
<!-- modal edit -->
<?php foreach ($fuzzy_set as $fz):
	$id 		= $fz->id_ph;
	$fuzzyset 	= $fz->fuzzy_set;
	$domain 	= $fz->domain;
	?>
<div class="modal fade" id="modalEdit<?= $id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit Data</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="<?= base_url() . 'admin/C_ph/edit/' . $id ?>" method="post">
				<div class="modal-body">
					<div class="form-group">
						<label for="fuzzy_set">Nilai Fuzzy Set</label>
						<select class="form-control huruf" id="fuzzy_set" name="fuzzy_set" value="<?= $fz->fuzzy_set ?>"
							autocomplete="off" autofocus required>
							<option disabled selected hidden>Pilih</option>
							<?php foreach ($nilai_fz as $key=>$value): ?>
							<option value="<?= $value ?>" <?= $fuzzyset==$value ? 'selected':''?>><?= $value ?></option>
							<?php endforeach; ?>
						</select>
						<?= form_error('fuzzy_set', '<small class="text-danger">', '</small>'); ?>
					</div>
					<div class="form-group">
						<label for="domain">Domain</label>
						<input type="text" class="form-control" id="domain" name="domain"
							placeholder="Isi dengan nilai angka" value="<?= $fz->domain ?>" autocomplete="off">
						<?= form_error('domain', '<small class="text-danger">', '</small>'); ?>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-outline-default" data-dismiss="modal">Batal</button>
					<button type="submit" class="btn btn-info">Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>
<?php endforeach; ?>
<!-- modal edit end -->
<!-- modal hapus -->
<?php foreach ($fuzzy_set as $fz):
	$id 		= $fz->id_ph;
	$kategori 	= $fz->fuzzy_set;
	?>
<form action="<?php echo base_url() . 'admin/C_ph/hapus' ?>" method="post">
	<div class="modal fade" id="modalHapus<?= $id; ?>" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Hapus</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body justify-content-center">
					<div>
						<h5>Apakah Anda yakin untuk menghapus data dengan kategori <b><?= $kategori?></b> ini?</h5>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-outline-default" data-dismiss="modal">Batal</button>
					<input type="hidden" name="delete_id" value="<?= $id; ?>" required>
					<button type="submit" class="btn btn-danger">Hapus</button>
				</div>
			</div>
		</div>
	</div>
</form>
<?php endforeach; ?>
<!-- modal hapus end -->
