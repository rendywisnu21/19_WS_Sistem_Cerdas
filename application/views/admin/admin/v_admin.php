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
									<th>Nama Admin</th>
									<th>Username</th>
									<th>Status</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1;
									foreach ($admin as $ad):
								?>
								<tr>
									<td class="text-center"><?= $no; ?></td>
									<td class="text-center"><?= $ad->nama_admin; ?></td>
									<td class="text-center"><?= $ad->username_admin; ?></td>
									<td class="text-center">
										<i class="fas fa-check text-success"></i>
									</td>
									<td class="text-center">
										<a href="#!" onclick="hapus('<?=$ad->id_admin?>','<?=$ad->nama_admin?>')">
											<i class="fas fa-trash text-danger"></i>
										</a>
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
									<th>Status</th>
									<th>aksi</th>
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
	<div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		<div class="modal-header bg-primary">
			<h5 class="modal-title">Tambah Data</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
		</div>
	<form action="<?php echo base_url() . 'admin/C_admin/tambah_aksi' ?>" method="post">
		<div class="modal-body">
				<div class="form-group">
					<label for="nama">Nama Admin</label>
					<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Admin" minlength="2">
					<?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
				</div>
				<div class="form-group">
					<label for="username">Username</label>
					<input type="text" class="form-control" id="username" name="username" placeholder="Username" minlength="2">
					<?= form_error('username', '<small class="text-danger">', '</small>'); ?>
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" id="password" name="password" placeholder="Password" minlength="8">
					<?= form_error('password', '<small class="text-danger">', '</small>'); ?>
				</div>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-outline-default" data-dismiss="modal">Tutup</button>
			<button type="submit" class="btn btn-primary">Tambah</button>
		</div>
	</form>
		</div>
	</div>
	</div>
<!-- modal tambah end -->

<!-- modal tambah -->
<div class="modal fade" id="modalHapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		<div class="modal-body">
			Anda yakin ingin menghapus data <span id="nama_admin"></span> ?
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
			<a href="#" id="linkHapus" class="btn btn-danger">Hapus</a>
		</div>
		</div>
	</div>
	</div>
<!-- modal tambah end -->

<!-- script tampil modal hapus  -->
<script>
	function hapus(id, nama){
		document.getElementById('nama_admin').innerHTML= nama;
		$('#linkHapus').attr('href', '<?=base_url('admin/C_admin/hapusAksi/')?>'+id);
		$('#modalHapus').modal('show');
	}
</script>
