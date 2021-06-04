<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1><?= $tittle; ?></h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= base_url('admin/C_dashboard'); ?>">Home</a></li>
						<li class="breadcrumb-item active"><?= $tittle; ?></li>
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
						<h3 class="card-title text-bold float-left">Tabel <?= $tittle; ?></h3>
						<a href="<?= base_url(); ?>" class="btn btn-primary text-bold float-right"><i class="fas fa-plus-circle"></i> <?= $tittle; ?></a>
					</div>
					<!-- /.card-header -->
					<div class="card-body">
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr class="text-center">
									<th>No</th>
									<!-- <th>Id</th> -->
									<th>Nama Fuzzyset</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1;
								 foreach ($fuzzyset as $fz):
									$id = $fz->id_fuzzyset
								?>
								<tr>
									<td class="text-center"><?= $no; ?></td>
									<!--<?= $id; ?>-->
									<td class="text-center"><?= $fz->nama_fuzzyset; ?></td>	
								</tr>
								<?php $no++; ?>
								<?php endforeach; ?>
							</tbody>
							<tfoot>
								<tr class="text-center">
									<th>No</th>
									<th>Nama Fuzzyset</th>
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
