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
						<a href="<?= base_url('admin/C_parameter/tambah_pm'); ?>" class="btn btn-primary text-bold float-right"><i
								class="fas fa-plus-circle"></i> <?= $title; ?></a>
					</div>
					<!-- /.card-header -->
					<div class="card-body">
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr class="text-center">
									<th>No</th>
									<th>Nama Parameter</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1;
								    foreach ($parameter as $pm):
								?>
								<tr>
									<td class="text-center"><?= $no; ?></td>
									<td class="text-center" hidden><?= $id = $pm->id_parameter; ?></td>
									<td class="text-center"><?= $pm->nama_parameter; ?></td>
									<td class="text-center">
										<button type="button" class="btn btn-danger" data-toggle="modal"
											data-target="#modal_hapus<?= $id; ?>">
											<i class="fas fa-trash"></i> Hapus</button>
									</td>
								</tr>
								<?php $no++; ?>
								<?php endforeach; ?>
							</tbody>
							<tfoot>
								<tr class="text-center">
									<th>No</th>
									<th>Nama Parameter</th>
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

<?php foreach ($parameter as $pm):
	$id = $pm->id_parameter;
	$nama = $pm->nama_parameter;
	?>
	<form action="<?php echo base_url() . 'admin/C_parameter/hapus_pm' ?>" method="post">
		<div class="modal fade" id="modal_hapus<?= $id; ?>" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header bg-primary">
						<h4 class="modal-title">Hapus Menu</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body justify-content-center">
						<div class="text-center">
							<h4 class="mb-4">Apakah anda yakin untuk menghapus data <b><?= $nama?></b> ini?</h4>
						</div>
					</div>
					<div class="modal-footer justify-content-between">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<input type="hidden" name="delete_id" value="<?= $id; ?>" required>
						<button type="submit" class="btn btn-danger"><i class="far fa-save"></i> Hapus</button>
					</div>
				</div>
			</div>
		</div>
	</form>
<?php endforeach; ?>
