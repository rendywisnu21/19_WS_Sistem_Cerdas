		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<div class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1 class="m-0">Beranda</h1>
						</div><!-- /.col -->
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="<?= base_url('admin/C_dashboard') ?>">Beranda</a></li>
							</ol>
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
						<div class="col-lg-4 col-4">
							<!-- small box -->
							<div class="small-box bg-primary">
								<div class="inner">
									<center>
										<h3><i class="fas fa-thermometer-three-quarters"></i>&nbsp;&nbsp; SUHU</h3>
									</center>
								</div>
								<a href="#!" class="btn btn-outline-info col-12" data-target="#modalSuhu" data-toggle="modal">
									<i class="fas fa-arrow-circle-right">&nbsp;&nbsp;&nbsp;Detail µ[Suhu]</i>
								</a>
							</div>
						</div>
						<!-- ./col -->
						<div class="col-lg-4 col-4">
							<!-- small box -->
							<div class="small-box bg-primary">
								<div class="inner">
									<center>
										<h3><i class="fas fa-vial nav-icon"></i>&nbsp;&nbsp;PH</h3>
									</center>
								</div>
								<a href="#!" class="btn btn-outline-info col-12" data-target="#modalPH" data-toggle="modal">
									<i class="fas fa-arrow-circle-right">&nbsp;&nbsp;&nbsp;Detail µ[PH]</i>
								</a>
							</div>
						</div>
						<!-- ./col -->
						<div class="col-lg-4 col-4">
							<!-- small box -->
							<div class="small-box bg-primary">
								<div class="inner">
									<center>
										<h3><i class="fas fa-thermometer nav-icon"></i>&nbsp;&nbspTDS</h3>
									</center>
								</div>
								<a href="#!" class="btn btn-outline-info col-12 col-12" data-target="#modalTDS"
									data-toggle="modal">
									<i class="fas fa-arrow-circle-right">&nbsp;&nbsp;&nbsp;Detail µ[TDS]</i>
								</a>
							</div>
						</div>
					</div>
					<br>
					<hr>
					<br>
					<!-------------------------------------------------------------------------------------------------------------------->
					<div class="row">
						<div class="modal-body">
							<form>
								<div class="form-group">
									<center><img src="<?= base_url("/assets/dist/img/grafikGrade.JPG") ?>" width="835px"
											height="221px" alt=""></center>
								</div>
								<center><button type="button" class="btn btn-info btn-sm col-10" data-target="#modalGrade"
										data-toggle="modal">
										<h5>Detail Output</h5>
									</button></center>
							</form>
						</div>
					</div>
					<br><br>
					<hr>
					<h5>
						<br>
						<p>
							<b>
								<center>ADA 64 (ENAM PULUH EMPAT) RULE YANG DIGUNAKAN : </center>
							</b>
						</p>
					</h5>
					<div class="row">
						<!-- Rule -->
						<div class="col-md-1">
							<?php 
							foreach($Rule as $ru) : 
						?>
							<div class="alert alert-light">
								<b>[<?= $ru->rule; ?>]</b>
							</div>
							<?php endforeach; ?>
						</div>
						<div class="col-md-3">
							<?php 
							foreach($Rule as $ru) : 
						?>
							<div class="alert alert-primary">
								IF SUHU <b>[<?= $ru->Suhu; ?>]</b>
							</div>
							<?php endforeach; ?>
						</div>
						<div class="col-md-3">
							<?php 
							foreach($Rule as $ru) : 
						?>
							<div class="alert alert-warning">
								AND PH <b>[<?= $ru->pH; ?>]</b>
							</div>
							<?php endforeach; ?>
						</div>
						<div class="col-md-3">
							<?php 
							foreach($Rule as $ru) : 
						?>
							<div class="alert alert-info">
								AND TDS <b>[<?= $ru->TDS; ?>]</b>
							</div>
							<?php endforeach; ?>
						</div>
						<div class="col-md-2">
							<?php 
							foreach($Rule as $ru) : 
						?>
							<div class="alert alert-success">
								GRADE IS &nbsp; <b>[<?= $ru->grade; ?>]</b>
							</div>
							<?php endforeach; ?>
						</div>
			</section>
		</div>
		</div>
		</section>
		</div>

		<!-- Modal Suhu -->
		<div class="modal fade bd-example-modal-lg" id="modalSuhu" tabindex="-1" role="dialog"
			aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header bg-primary">
						<h4><b>Detail µ[Suhu]</b></h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<br>
					<form>
						<div class="form-group">
							<br>
							<center>
								<h5>
									<p>Parameter Suhu memiliki 4 himpunan. Fungsi keanggotan Suhu direpresentasikan
										menggunakan kurva trapesium</p>
								</h5>
							</center>
							<center><img src="<?= base_url("/assets/dist/img/grafikSuhu.JPG") ?>" width="695px" height="225px"
									alt=""></center><br><br>
							<center>
								<h5>
									<p>Berdasarkan kurva tersebut, dirumuskan fungsi keanggotaan sebagai berikut : </p>
								</h5>
							</center>
						</div>
					</form>
					<div class="row">
						<div class="col-md-6 ml-auto">
							<form>
								<div class="form-group">
									<img src="<?= base_url("/assets/dist/img/SuhuA.JPG") ?>" width="385px" height="225px"
										alt="">
								</div>
							</form>
						</div>
						<div class="col-md-6 ml-auto">
							<form>
								<div class="form-group">
									<img src="<?= base_url("/assets/dist/img/SuhuB.JPG") ?>" width="385px" height="225px"
										alt="">
								</div>
							</form>
						</div>
						<div class="col-md-6 ml-auto">
							<form>
								<div class="form-group">
									<img src="<?= base_url("/assets/dist/img/SuhuC.JPG") ?>" width="385px" height="225px"
										alt="">
								</div>
							</form>
						</div>
						<div class="col-md-6 ml-auto">
							<form>
								<div class="form-group">
									<img src="<?= base_url("/assets/dist/img/SuhuD.JPG") ?>" width="385px" height="225px"
										alt="">
								</div>
							</form>
						</div>
					</div>
					<div class="modal-body">
						<form>
							<div class="form-group">
								<label for="recipient-name" class="col-form-label"></label>
								<input type="text" class="form-control" id="recipient-name"
									value="Kualitas Air Optimal adalah berada pada range 0 - 200" readonly>
							</div>
							<div class="form-group">
								<label for="message-text" class="col-form-label">Detail Grafik :</label>
								<br>
								<img src="<?= base_url("/assets/dist/img/grafik.png") ?>" width="470px" height="200px" alt="">
							</div>
						</form>
						<br>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
					</div>
				</div>
			</div>
		</div>
		<!-- End Moda Suhu -->

		<!-- Modal PH -->
		<div class="modal fade bd-example-modal-lg" id="modalPH" tabindex="-1" role="dialog"
			aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header bg-primary">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<form>
						<div class="form-group">
							<center>
								<h5>
									<p>Parameter pH memiliki 4 himpunan. Fungsi keanggotan pH direpresentasikan menggunakan
										kurva trapesium</p>
								</h5>
							</center>
							<center><img src="<?= base_url("/assets/dist/img/grafikPH.JPG") ?>" width="695px" height="225px"
									alt=""></center><br><br>
							<center>
								<h5>
									<p>Berdasarkan kurva tersebut, dirumuskan fungsi keanggotaan pH sebagai berikut : </p>
								</h5>
							</center>
						</div>
					</form>
					<div class="row">
						<div class="col-md-6 ml-auto">
							<form>
								<div class="form-group">
									<img src="<?= base_url("/assets/dist/img/phA.JPG") ?>" width="385px" height="225px"
										alt="">
								</div>
							</form>
						</div>
						<div class="col-md-6 ml-auto">
							<form>
								<div class="form-group">
									<img src="<?= base_url("/assets/dist/img/phB.JPG") ?>" width="385px" height="225px"
										alt="">
								</div>
							</form>
						</div>
						<div class="col-md-6 ml-auto">
							<form>
								<div class="form-group">
									<img src="<?= base_url("/assets/dist/img/phC.JPG") ?>" width="385px" height="225px"
										alt="">
								</div>
							</form>
						</div>
						<div class="col-md-6 ml-auto">
							<form>
								<div class="form-group">
									<img src="<?= base_url("/assets/dist/img/phD.JPG") ?>" width="385px" height="225px"
										alt="">
								</div>
							</form>
						</div>
					</div>
					<div class="modal-body">
						<<<<<<< HEAD <form>
							<div class="form-group">
								<label for="recipient-name" class="col-form-label"></label>
								<input type="text" class="form-control" id="recipient-name"
									value="Kualitas Air Sedang adalah berada pada range 100 - 300" readonly>
							</div>
							<div class="form-group">
								<label for="message-text" class="col-form-label">Detail Grafik :</label>
								<br>
								<img src="<?= base_url("/assets/dist/img/grafik.png") ?>" width="470px" height="200px" alt="">
							</div>
							</form>
							<br>
							=======

					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
						>>>>>>> 9e96ae00e4fde8d5fb6dd50de1fd4e82c25587a5
					</div>
				</div>
			</div>
		</div>
		<!-- End Moda PH -->

		<!-- Modal TDS -->
		<div class="modal fade bd-example-modal-lg" id="modalTDS" tabindex="-1" role="dialog"
			aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header bg-primary">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<form>
						<div class="form-group">
							<center>
								<h5>
									<p>Parameter TDS memiliki 4 himpunan. Fungsi keanggotan TDS direpresentasikan menggunakan
										kurva trapesium</p>
								</h5>
							</center>
							<center><img src="<?= base_url("/assets/dist/img/grafikTDS.JPG") ?>" width="695px" height="225px"
									alt=""></center><br><br>
							<center>
								<h5>
									<p>Berdasarkan kurva tersebut, dirumuskan fungsi keanggotaan TDS sebagai berikut : </p>
								</h5>
							</center>
						</div>
					</form>
					<div class="row">
						<div class="col-md-6 ml-auto">
							<form>
								<div class="form-group">
									<img src="<?= base_url("/assets/dist/img/tdsA.JPG") ?>" width="385px" height="225px"
										alt="">
								</div>
							</form>
						</div>
						<div class="col-md-6 ml-auto">
							<form>
								<div class="form-group">
									<img src="<?= base_url("/assets/dist/img/tdsB.JPG") ?>" width="385px" height="225px"
										alt="">
								</div>
							</form>
						</div>
						<div class="col-md-6 ml-auto">
							<form>
								<div class="form-group">
									<img src="<?= base_url("/assets/dist/img/tdsC.JPG") ?>" width="385px" height="225px"
										alt="">
								</div>
							</form>
						</div>
						<div class="col-md-6 ml-auto">
							<form>
								<div class="form-group">
									<img src="<?= base_url("/assets/dist/img/tdsD.JPG") ?>" width="385px" height="225px"
										alt="">
								</div>
							</form>
						</div>
					</div>
					<div class="modal-body">
						<<<<<<< HEAD <form>
							<div class="form-group">
								<label for="recipient-name" class="col-form-label"></label>
								<input type="text" class="form-control" id="recipient-name"
									value="Kualitas Air Buruk adalah berada pada range 200 - 400" readonly>
							</div>
							<div class="form-group">
								<label for="message-text" class="col-form-label">Detail Grafik :</label>
								<br>
								<img src="<?= base_url("/assets/dist/img/grafik.png") ?>" width="470px" height="200px" alt="">
							</div>
							</form>
							<br>
							=======

					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
						>>>>>>> 9e96ae00e4fde8d5fb6dd50de1fd4e82c25587a5
					</div>
				</div>
			</div>
		</div>
		<!-- End Modal TDS -->


		<!-- Modal Grade -->
		<div class="modal fade bd-example-modal-lg" id="modalGrade" tabindex="-1" role="dialog"
			aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header bg-primary">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-12 ml-auto">
							<form>
								<div class="form-group">
									<center><img src="<?= base_url("/assets/dist/img/gradeA.JPG") ?>" width="527px"
											height="253px" alt=""></center>
									<center>
										<h5>
											<p><b>Grade A menunjukkan kualitas air berada pada range 0 - 200</b></p>
										</h5>
									</center>
								</div>
							</form>
						</div>
						<div class="col-md-12 ml-auto">
							<form>
								<div class="form-group">
									<center><img src="<?= base_url("/assets/dist/img/gradeB.JPG") ?>" width="550px"
											height="259px" alt=""></center>
									<center>
										<h5>
											<p><b>Grade B menunjukkan kualitas air berada pada range 100 - 300</b></p>
										</h5>
									</center>
								</div>
							</form>
						</div>
						<div class="col-md-12 ml-auto">
							<form>
								<div class="form-group">
									<center><img src="<?= base_url("/assets/dist/img/gradeC.JPG") ?>" width="510px"
											height="258px" alt=""></center>
									<center>
										<h5>
											<p><b>Grade C menunjukkan kualitas air berada pada range 200 - 400</b></p>
										</h5>
									</center>
								</div>
							</form>
						</div>
						<div class="col-md-12 ml-auto">
							<form>
								<div class="form-group">
									<center><img src="<?= base_url("/assets/dist/img/gradeD.JPG") ?>" width="514px"
											height="258px" alt=""></center>
									<center>
										<h5>
											<p><b>Grade B menunjukkan kualitas air berada pada range 300 - 500</b></p>
										</h5>
									</center>
								</div>
							</form>
						</div>
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

								<img src="<?= base_url("/assets/dist/img/grafik.png") ?>" width="470px" height="200px" alt="">
							</div>
						</form>
						<br>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
					</div>
				</div>
			</div>
		</div>
