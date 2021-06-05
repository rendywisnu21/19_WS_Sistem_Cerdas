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
						<li class="breadcrumb-item"><a href="<?= base_url('admin/C_dashboard'); ?>">Home</a></li>
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
						<a href="<?= base_url('admin/C_parameter/tambah_pm'); ?>" class="btn btn-primary text-bold float-right"><i class="fas fa-plus-circle"></i> <?= $title; ?></a>
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
                                    <td>
                                        <a href="<?php echo base_url('admin/C_parameter/hapus_pm/'.$pm->id_parameter); ?>" title="Hapus" onclick="return confirm('Anda yakin ingin menghapus data ini?')" data-toggle="tooltip" data-placement="top" data-original-title="Hapus">
                                            <button type="button" class="btn btn-danger">
                                                <i class="fas fa-trash-alt color-danger"></i>
                                            </button>
                                        </a>                                    
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
