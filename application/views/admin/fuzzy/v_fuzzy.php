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
						<a href="#" class="btn btn-primary float-right" data-target="#modalTambah" data-toggle="modal">
							Tambah Data
						</a>
					</div>
					<!-- /.card-header -->
					<div class="card-body">
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr class="text-center">
									<th>No</th>
									<th>Nilai Fuzzyset</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1;
									foreach ($fuzzyset as $fz):
								?>
								<tr>
									<td class="text-center"><?= $no; ?></td>
									<td class="text-center"><?= $fz->fuzzyset; ?></td>
									<td class="text-center">
										<a href="#" data-toggle="modal" data-target="#modalEdit"
											class="badge badge-info mr-1">Edit</a>
										<a href="<?= base_url('admin/C_fuzzy/hapus/'. $fz->id_fuzzyset) ?>"
											type="button" class="badge badge-danger">Hapus</a>
									</td>
								</tr>
								<?php $no++; ?>
								<?php endforeach; ?>
							</tbody>
							<tfoot>
								<tr class="text-center">
									<th>No</th>
									<th>Nilai Fuzzyset</th>
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
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Tambah Data</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="<?php echo base_url() . 'admin/C_fuzzy/tambah' ?>" method="post">
				<div class="modal-body">
					<div class="form-group">
						<label for="fuzzyset">Nilai Fuzzyset</label>
						<input type="text" class="form-control" id="fuzzyset" name="fuzzyset"
							placeholder="Isi dengan nilai baik, sedang, buruk, atau sangat buruk">
						<?= form_error('fuzzyset', '<small class="text-danger">', '</small>'); ?>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-outline-danger" data-dismiss="modal">Tutup</button>
					<button type="submit" class="btn btn-primary">Tambah</button>
				</div>
			</form>
		</div>
		</>
	</div>
</div>
<!-- modal tambah end -->
<!-- modal edit -->
<div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit Data</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="#" method="post">
				<div class="modal-body">
					<div class="form-group">
						<label for="fuzzyset">Nilai Fuzzyset</label>
						<input type="text" class="form-control" id="fuzzyset" name="fuzzyset"
							placeholder="Isi dengan nilai baik, sedang, buruk, atau sangat buruk">
						<?= form_error('fuzzyset', '<small class="text-danger">', '</small>'); ?>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-outline-danger" data-dismiss="modal">Tutup</button>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- modal edit end -->
