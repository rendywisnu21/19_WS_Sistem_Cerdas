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
						<a href="#!" class="btn btn-primary text-bold float-right" data-target="#modalTambah" data-toggle="modal">
							<i class="fas fa-plus-circle"></i> <?= $title; ?>
						</a>
					</div>

					<!-- /.card-header -->
					<div class="card-body">
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr class="text-center">
									<th>No</th>
									<th>Fuzzyset</th>
									<th>Domain</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1;
									foreach ($tds as $td):
										$id = $td->id_tds;
								?>
								<tr>
									<td class="text-center"><?= $no; ?></td>
									<td class="text-center"><?= $td->kategori; ?></td>
									<td class="text-center"><?= $td->domain; ?></td>
									<td class="text-center">
										<button type="button" class="btn btn-danger" data-toggle="modal"
											data-target="#modal_hapus<?= $id; ?>"> Hapus </button>
									</td>
								</tr>
								<?php $no++; ?>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

<?php
foreach ($tds as $ts):
	$id = $ts->id_tds;
	$nama = $ts->kategori;
	?>
	<form action="<?php echo base_url() . 'admin/C_tds/delete' ?>" method="post">
		<div class="modal fade" id="modal_hapus<?= $id; ?>" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					</div>
					<div class="modal-body justify-content-center">
						<div class="text-center">
							<h4 class="mb-4">Apakah anda yakin untuk menghapus data dengan kategori <b><?= $nama?></b> ini?</h4>
						</div>
					</div>
					<div class="modal-footer justify-content-between">
<?php endforeach; ?>