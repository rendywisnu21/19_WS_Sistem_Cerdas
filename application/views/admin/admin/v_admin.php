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
		<?php if(isset($_SESSION['hapus_sukses'])){ ?>
		<div class="alert alert-success" role="alert">
			Hapus Sukses
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<?php } ?>

	</section>
	<section class="content">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header bg-dark">
						<h3 class="card-title text-bold float-left">Tabel <?= $title; ?></h3>
						<a href="#" class="btn btn-primary text-bold float-right" data-target="#modalTambah" data-toggle="modal">
							Tambah Data
						</a>
					</div>

					<!-- /.card-header -->
					<div class="card-body table-responsive p-0">
						<table class="table table-hover">
							<thead>
								<tr class="text-center">
									<th>No</th>
									<th>Nama Admin</th>
									<th>Username</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1;
									foreach ($admin as $ad):
										$id = $ad->id_admin
								?>
								<tr>
									<td class="text-center"><?= $no; ?></td>
									<td class="text-center"><?= $ad->nama_admin; ?></td>
									<td class="text-center"><?= $ad->username_admin; ?></td>
									<td class="text-center">
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
									<th>Nama Admin</th>
									<th>Username</th>
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
			<form action="<?php echo base_url() . 'admin/C_admin/tambah_aksi' ?>" method="post">
				<div class="modal-body">
					<div class="form-group">
						<label for="nama">Nama Admin</label>
						<input type="text" class="form-control" id="nama" name="nama" placeholder="Isi dengan nama"
							minlength="2">
						<?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
					</div>
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" class="form-control" id="username" name="username" placeholder="Isi dengan nama pengguna"
							minlength="2">
						<?= form_error('username', '<small class="text-danger">', '</small>'); ?>
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" id="password" name="password" placeholder="Isi password minimal 8 huruf"
							minlength="8">
						<?= form_error('password', '<small class="text-danger">', '</small>'); ?>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-outline-default" data-dismiss="modal">Batal</button>
					<button type="submit" class="btn btn-primary">Tambah</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- modal tambah end -->
<!-- modal hapus -->
<?php foreach ($admin as $ad):
	$id 	= $ad->id_admin;
	$nama 	= $ad->nama_admin;
?>
<form action="<?php echo base_url() . 'admin/C_admin/hapus' ?>" method="post">
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
						<h5>Apakah Anda yakin untuk menghapus data dengan nama <b><?= $nama?></b> ini?</h5>
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
