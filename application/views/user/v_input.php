
<style type="text/css">
		html {scroll-behavior:smooth;}
	</style>

<div class="content-wrapper">
	<!-- Content Header -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1><?= $title; ?></h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= base_url('user/C_beranda') ?>">Beranda</a></li>
						<li class="breadcrumb-item active"><?= $title; ?></li>
					</ol>
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
						<form method="POST" action="<?= base_url('user/C_input/hitung') ?>"
							enctype="multipart/form-data">
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
												placeholder="Masukkan nilai suhu" value="<?php if(isset($_SESSION['suhu'])){echo $_SESSION['suhu'];} ?>">
											<?= form_error('suhu', '<small class="text-danger">', '</small>'); ?>
										</div>
										<div class="form-group">
											<label for="ph">pH</label>
											<input type="text" class="form-control huruf" id="ph" name="ph" required
												placeholder="Masukkan nilai ph" value="<?php if(isset($_SESSION['ph'])){echo $_SESSION['ph'];} ?>">
											<?= form_error('ph', '<small class="text-danger">', '</small>'); ?>
										</div>
										<div class="form-group">
											<label for="tds">TDS</label>
											<input type="text" class="form-control huruf" id="tds" name="tds" required
												placeholder="Masukkan nilai tds" value="<?php if(isset($_SESSION['tds'])){echo $_SESSION['tds'];} ?>">
											<?= form_error('tds', '<small class="text-danger">', '</small>'); ?>
										</div>
										<br><hr>
										<button class="btn btn-block btn-primary" type="submit">Hitung</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<br><br>
	<!-- Header -->

<?php if(isset($_SESSION['hasil'])){ ?>
	<section class="content-header" id="hasil">
		<div class="container-fluid">
			<div class="row mb-2">
			</div>
		</div><!-- /.container-fluid -->
	</section>
	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header bg-dark">
							<h3 class="card-title text-bold">Hasil Hitung</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body pb-5">
							<div class="text-center border
								<?php if($_SESSION['grade'] == 'A' OR $_SESSION['grade'] == 'B'){
									echo "border-success";
								}else if($_SESSION['grade'] == 'C'){
									echo "border-warning";
								}else if($_SESSION['grade'] == 'D'){
									echo "border-danger";
								}
							?>">
								<div class="mt-3">
									<?php if($_SESSION['grade'] == 'A' OR $_SESSION['grade'] == 'B'){ ?>
										<input type="text" class="knob" value="<?=$_SESSION['presentase']?>" 
											data-width="140" data-height="140" data-fgColor="#4cd137" disabled readonly>
										<h1 class="text-success text-bold">Grade <?=$_SESSION['grade']?></h1>
										<p class="text-success" >hasil perhitungan adalah <?=$_SESSION['hasil']?></p>
									<?php }else if($_SESSION['grade'] == 'C'){ ?>
										<input type="text" class="knob" value="<?=$_SESSION['presentase']?>" 
											data-width="140" data-height="140" data-fgColor="#fbc531" disabled readonly>
										<h1 class="text-warning text-bold">Grade <?=$_SESSION['grade']?></h1>
										<p class="text-warning" >hasil perhitungan adalah <?=$_SESSION['hasil']?></p>
									<?php }else if($_SESSION['grade'] == 'D'){ ?>
										<input type="text" class="knob" value="<?=$_SESSION['presentase']?>" 
											data-width="140" data-height="140" data-fgColor="#e84118" disabled readonly>
										<h1 class="text-danger text-bold">Grade <?=$_SESSION['grade']?></h1>
										<p class="text-danger" >hasil perhitungan adalah <?=$_SESSION['hasil']?></p>
									<?php } ?>
								</div>
								
							</div>
							<table id="example2" class="table table-bordered table-hover mt-2">
								<thead>
									<tr>
										<th class="text-center">Suhu</th>
										<th class="text-center">Ph</th>
										<th class="text-center">TDS</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="text-center"><?=$_SESSION['suhu']?></td>
										<td class="text-center"><?=$_SESSION['ph']?></td>
										<td class="text-center"><?=$_SESSION['tds']?></td>
									</tr>
								</tbody>
							</table>
							<div class="text-right mt-3">
								<a href="<?=base_url('user/C_input/reset')?>" class="btn btn-secondary">reset</a>
							</div>
						</div>
						<!-- /.card-body -->
					</div>
				</div>
			</div>
		</div>
	</section>
<?php } ?>

</div>

<br><br><br><br><br><br> 	
<br><br><br><br>

<?php if(isset($_SESSION['hasil'])){ ?>
	<script>
			setTimeout(function() {
			window.location = "<?=base_url('user/C_input#hasil')?>";
			}, 400);
		
	</script>
<?php } ?>
