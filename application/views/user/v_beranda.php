		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<div class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1 class="m-0">Beranda</h1>
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.container-fluid -->
			</div>
			<!-- /.content-header -->

			<!-- Main content -->
			<section class="content">
				<div class="container-fluid">
					<!-- Small boxes (Stat box) -->
					<div class="row">
						<div class="col-lg-3 col-6">
							<!-- small box -->
							<div class="small-box bg-primary">
								<div class="inner">
									<h4>Kualitas Air Optimal <br>(A)<sup style="font-size: 12px"></sup></h4>
								</div>
								<a href="#!" class="btn btn-outline-info col-12" data-target="#modalOptimal"
									data-toggle="modal">
									<i class="fas fa-arrow-circle-right">&nbsp;&nbsp;&nbsp;Lebih lanjut</i>
								</a>
							</div>
						</div>
						<!-- ./col -->
						<div class="col-lg-3 col-6">
							<!-- small box -->
							<div class="small-box bg-primary">
								<div class="inner">
									<h4>Kualitas Air Sedang <br>(B)<sup style="font-size: 12px"></sup></h4>
								</div>
								<a href="#!" class="btn btn-outline-info col-12" data-target="#modalSedang"
									data-toggle="modal">
									<i class="fas fa-arrow-circle-right">&nbsp;&nbsp;&nbsp;Lebih lanjut</i>
								</a>
							</div>
						</div>
						<!-- ./col -->
						<div class="col-lg-3 col-6">
							<!-- small box -->
							<div class="small-box bg-primary">
								<div class="inner">
									<h4>Kualitas Air Buruk <br>(C)<sup style="font-size: 12px"></sup></h4>
								</div>
								<a href="#!" class="btn btn-outline-info col-12 col-12" data-target="#modalBuruk"
									data-toggle="modal">
									<i class="fas fa-arrow-circle-right">&nbsp;&nbsp;&nbsp;Lebih lanjut</i>
								</a>
							</div>
						</div>
						<!-- ./col -->
						<div class="col-lg-3 col-6">
							<!-- small box -->
							<div class="small-box bg-primary">
								<div class="inner">
									<h4>Kualitas Air Sangat Buruk (D)<sup style="font-size: 12px"></sup></h4>
								</div>
								<a href="#!" class="btn btn-outline-info col-12 col-12" data-target="#modalSBuruk"
									data-toggle="modal">
									<i class="fas fa-arrow-circle-right">&nbsp;&nbsp;&nbsp;Lebih lanjut</i>
								</a>
							</div>
						</div>
					</div>
			</section>
		</div>
		</div>

		<!-- Modal Suhu -->
		<div class="modal fade" id="modalOptimal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
			aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header bg-primary">
						<h5 class="modal-title" id="exampleModalLabel">Kualitas Air Optimal</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form>
							<div class="form-group">
								<label for="recipient-name" class="col-form-label"></label>
								<input type="text" class="form-control" id="recipient-name"
									value="Suhu Optimal adalah berada pada range 0 - 200" readonly>
							</div>
							<div class="form-group">
								<label for="message-text" class="col-form-label">Detail Grafik :</label>
								<br>
								<?php $direk_file = "assets/dist/img/grafik.png" ?>
								<img src="<?= $direk_file; ?>" width="470px" height="200px" alt="">
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal Ph -->
		<div class="modal fade" id="modalSedang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
			aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header bg-primary">
						<h5 class="modal-title" id="exampleModalLabel">Kualitas Air Sedang</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form>
							<div class="form-group">
								<label for="recipient-name" class="col-form-label"></label>
								<input type="text" class="form-control" id="recipient-name"
									value="Kualitas Air Sedang adalah berada pada range 100 - 300" readonly>
							</div>
							<div class="form-group">
								<label for="message-text" class="col-form-label">Detail Grafik :</label>
								<br>
								<?php $direk_file = "assets/dist/img/grafik.png" ?>
								<img src="<?= $direk_file; ?>" width="470px" height="200px" alt="">
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal TDS -->
		<div class="modal fade" id="modalBuruk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
			aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header bg-primary">
						<h5 class="modal-title" id="exampleModalLabel">Kualitas Air Buruk</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form>
							<div class="form-group">
								<label for="recipient-name" class="col-form-label"></label>
								<input type="text" class="form-control" id="recipient-name"
									value="Kualitas Air Buruk adalah berada pada range 200 - 400" readonly>
							</div>
							<div class="form-group">
								<label for="message-text" class="col-form-label">Detail Grafik :</label>
								<br>
								<?php $direk_file = "assets/dist/img/grafik.png" ?>
								<img src="<?= $direk_file; ?>" width="470px" height="200px" alt="">
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
					</div>
				</div>
			</div>
		</div>

		<div class="modal fade" id="modalSBuruk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
			aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header bg-primary">
						<h5 class="modal-title" id="exampleModalLabel">Kualitas Air Sangat Buruk</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form>
							<div class="form-group">
								<label for="recipient-name" class="col-form-label"></label>
								<input type="text" class="form-control" id="recipient-name"
									value="Kualitas Air Sangat Buruk adalah berada pada range 300 - 500" readonly>
							</div>
							<div class="form-group">
								<label for="message-text" class="col-form-label">Detail Grafik :</label>
								<br>
								<?php $direk_file = "assets/dist/img/grafik.png" ?>
								<img src="<?= $direk_file; ?>" width="470px" height="200px" alt="">
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
					</div>
				</div>
			</div>
		</div>
