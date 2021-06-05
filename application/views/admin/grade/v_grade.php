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
						<a href="<?= base_url(); ?>" class="btn btn-primary text-bold float-right"><i
								class="fas fa-plus-circle"></i> <?= $title; ?></a>
					</div>
					<!-- /.card-header -->
					<div class="card-body">
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr class="text-center">
									<th>No</th>
									<!-- <th>Id</th> -->
									<th>Nama Grade</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1;
								foreach ($grade as $g):
									$id = $g->id_grade
								?>
								<tr>
									<td class="text-center"><?= $no; ?></td>
									<!--<?= $id; ?>-->
									<td class="text-center"><?= $g->nama_grade; ?></td>
								</tr>
								<?php $no++; ?>
								<?php endforeach; ?>
							</tbody>
							<tfoot>
								<tr class="text-center">
									<th>No</th>
									<th>Nama Grade</th>
								</tr>
							</tfoot>
						</table>
					</div>
					<!-- /.card-body -->
				</div>
				<!-- /.card -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</section>
	<!-- /.content -->
</div>
