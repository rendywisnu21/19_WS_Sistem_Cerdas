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
										<h6>Temperatur Air</h6>
									</center>
								</div>
								<a href="#!" class="btn btn-outline-info col-12" data-target="#modalSuhu" data-toggle="modal">
									<i class="fas fa-arrow-circle-right">&nbsp;&nbsp;&nbsp; Informasi Suhu</i>
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
										<h6>Derajat Keasaman</h6>
									</center>
								</div>
								<a href="#!" class="btn btn-outline-info col-12" data-target="#modalPH" data-toggle="modal">
									<i class="fas fa-arrow-circle-right">&nbsp;&nbsp;&nbsp; Informasi PH</i>
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
										<h6>Jumlah Zat Padat Terlarut</h6>
									</center>
								</div>
								<a href="#!" class="btn btn-outline-info col-12 col-12" data-target="#modalTDS"
									data-toggle="modal">
									<i class="fas fa-arrow-circle-right">&nbsp;&nbsp;&nbsp; Informasi TDS</i>
								</a>
							</div>
						</div>
					</div>
					<br>
					<hr><hr>
					<br><br>

					<!----------------------------------------------------------------------------------------------------------->
					<div class="row">
						<div class="col-lg-6 col-6">
							<!-- small box -->
							<div class="small-box bg-outline-dark">
								<div class="inner">
									<center>
										<h3><i class="fas fa-exclamation"></i>&nbsp;&nbsp; Fuzzy Tsukamoto</h3>
									</center>
								</div>
								<a href="#!" class="btn btn-outline-info col-12" data-target="#modalFuzzy" data-toggle="modal">
									<i class="fas fa-arrow-circle-right">&nbsp;&nbsp;&nbsp; Lebih Lanjut</i>
								</a>
							</div>
						</div>
						<!-- ./col -->
						<div class="col-lg-6 col-6">
							<!-- small box -->
							<div class="small-box bg-outline-dark">
								<div class="inner">
									<center>
										<h3><i class="fas fa-laptop-code"></i>&nbsp;&nbsp; Info Aplikasi</h3>
									</center>
								</div>
								<a href="#!" class="btn btn-outline-info col-12" data-target="#modalAplikasi" data-toggle="modal">
									<i class="fas fa-arrow-circle-right">&nbsp;&nbsp;&nbsp; Lebih Lanjut</i>
								</a>
							</div>
						</div>
					</div>
					<br><br>
					<hr><hr>

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
						<h4><b>Detail Suhu Kolam Koi</b></h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<br>
					<form>
						<div class="container">
							<div class="form-group">
							<p>
								<h5 class="text-justify">
									Suhu adalah ukuran tinggi rendahnya panas air yang berada di tempat budidaya atau kolam ikan koi
									Pada kolam ikan koi, suhu yang baik berada pada rentang 22,5ºC sampai dengan 27ºC
									Apabila suhu di bawah atau melebihi rentang tersebut, maka kualitas air akan berpengaruh terhadap pertumhuhan dan perkembangan ikan koi
								</h5>
							</p>
							</div>
						</div>	
					</form>
					
					<div class="row">
						<div class="col-md-12 ml-auto">
							<center>
								<p>
									<h4 class="font-weight-bold"> 
										Berikut disajikan kurva dan range data dari variabel suhu
									</h4>
								</p>
							</center>
							<form>
								<div class="form-group">
									<center><img src="<?= base_url("/assets/dist/img/grafikSuhu.JPG") ?>" width="695px" height="225px" alt=""></center>
								</div>
							</form>
						</div>
						<div class="col-md-12 ml-auto">
							<form>
								<div class="form-group">
									<center><img src="<?= base_url("/assets/dist/img/rangeSuhu.JPG") ?>" width="590px" height="126px"alt=""></center>
								</div>
							</form>
						</div>
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
						<h4><b>Detail pH Kolam Koi</b></h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<br>
					<form>
						<div class="container">
							<div class="form-group">
							<p>
								<h5 class="text-justify">
									PH adalah ukuran derajat keasaman yang digunakan untuk menyatakan tingkat keasaman pada air kolam di tempat budidaya atau kolam ikan koi
									Pada kolam ikan koi, PH yang baik berada pada rentang 6,65 sampai dengan 7,7
									Apabila PH di bawah atau melebihi rentang tersebut, maka kualitas air akan berpengaruh terhadap pertumhuhan dan perkembangan ikan koi
								</h5>
							</p>
							</div>
						</div>	
					</form>
					<div class="row">
						<div class="col-md-12 ml-auto">
							<center>
								<p>
									<h4 class="font-weight-bold"> 
										Berikut disajikan kurva dan range data dari variabel PH
									</h4>
								</p>
							</center>
							<form>
								<div class="form-group">
									<center><img src="<?= base_url("/assets/dist/img/grafikPH.JPG") ?>" width="570px" height="224px" alt=""></center>
								</div>
							</form>
						</div>
						<div class="col-md-12 ml-auto">
							<form>
								<div class="form-group">
									<center><img src="<?= base_url("/assets/dist/img/rangePH.JPG") ?>" width="589px" height="116px"alt=""></center>
								</div>
							</form>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
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
						<h4><b>Detail TDS Kolam Koi</b></h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<br>
					<form>
						<div class="container">
							<div class="form-group">
							<p>
								<h5 class="text-justify">
									TDS adalah jumlah zat padat terlarut yang terdapat pada air kolam di tempat budidaya atau kolam ikan koi
									Pada kolam ikan koi, TDS yang baik berada pada rentang 125mg/l sampai dengan 325mg/l
									Apabila PH di bawah atau melebihi rentang tersebut, maka kualitas air akan berpengaruh terhadap pertumhuhan dan perkembangan ikan koi
								</h5>
							</p>
							</div>
						</div>	
					</form>
					<div class="row">
						<div class="col-md-12 ml-auto">
							<center>
								<p>
									<h4 class="font-weight-bold"> 
										Berikut disajikan kurva dan range data dari variabel PH
									</h4>
								</p>
							</center>
							<form>
								<div class="form-group">
									<center><img src="<?= base_url("/assets/dist/img/grafikTDS.JPG") ?>" width="520px" height="229px" alt=""></center>
								</div>
							</form>
						</div>
						<div class="col-md-12 ml-auto">
							<form>
								<div class="form-group">
									<center><img src="<?= base_url("/assets/dist/img/rangeTDS.JPG") ?>" width="590px" height="114px"alt=""></center>
								</div>
							</form>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
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
										<h6>Sangat disarankan untuk kualitas air kolam, karena menunjukkan nilai yang optimal</h6>
									</center>
								</div>
							</form>
						</div>
						<br><br>
						<div class="col-md-12 ml-auto">
							<form>
								<div class="form-group">
									<center><img src="<?= base_url("/assets/dist/img/gradeB.JPG") ?>" width="550px"
											height="259px" alt=""></center>
									<center>
										<h5>
											<p><b>Grade B menunjukkan kualitas air berada pada range 100 - 300</b></p>
										</h5>
										<h6>Disarankan untuk kualitas air kolam, karena menunjukkan nilai yang Baik</h6>
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
										<h6>Tidak Disarankan untuk kualitas air kolam, karena akan mempengaruhi pertumbuhan dan perkembangbiakan ikan</h6>
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
										<h6>Sangat tidak disarankan untuk kualitas air kolam, karena ikan dapat terserang penyakit dan mati apabila hidup dalam kondisi ini</h6>
									</center>
								</div>
							</form>
						</div>
					</div>
					
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
					</div>
				</div>
			</div>
		</div>

<!-------------------------------------------------------------------------------------------------------------------->
<!-- Modal Fuzzy -->
<div class="modal fade bd-example-modal-lg" id="modalFuzzy" tabindex="-1" role="dialog"
			aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header bg-primary">
						<h4><b>Pengetahuan Fuzzy Tsukamoto</b></h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<br>
					<form>
						<div class="container">
							<div class="form-group">
							<p>
								<h5 class="text-justify">
									Fuzzy merupakan metode yang digunakan dalam pengembangan aplikasi ini
									Metode fuzzy merupakan metode yang memiliki range nilai antara 1-0 atau tidak pasti
									Sehingga cocok digunakan untuk data kualitas air
								</h5>
							</p>
							</div>
						</div>	
					</form>
					
					<div class="row">
						<div class="col-md-12 ml-auto">
							<center>
								<p>
									<h4 class="font-weight-bold"> 
										Berikut tahapan Fuzzy Tsukamoto
									</h4>
								</p>
							</center>
							<form>
								<div class="form-group">
									<center><img src="<?= base_url("/assets/dist/img/pengetahuanFuzzy.JPG") ?>" width="772px" height="347px" alt=""></center>
								</div>
							</form>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
					</div>
				</div>
			</div>
		</div>
		<!-- End Modal Fuzzy -->

		<!-- Modal Aplikasi -->
		<div class="modal fade bd-example-modal-lg" id="modalAplikasi" tabindex="-1" role="dialog"
			aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header bg-primary">
						<h4><b>Informasi Aplikasi</b></h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<br>
					<form>
						<div class="container">
							<div class="form-group">
							<p>
								<h5 class="text-justify">
									Aplikasi Identifikasi Kualitas Air Kolam Ikan Koi
									adalah aplikasi yang digunakan untuk mengidentifikasi kualitas air kolam ikan koi berdasarkan parameter pengukuran variabel suhu, pH, dan TDS
								</h5>
							</p>
							</div>
						</div>	
					</form>
					<div class="row">
						<div class="col-md-12 ml-auto">
							<center>
								<p>
									<h4 class="font-weight-bold"> 
										Berikut merupakan alur atau proses kerja dari aplikasi
									</h4>
								</p>
							</center>
							<form>
								<div class="form-group">
									<center><img src="<?= base_url("/assets/dist/img/alurAplikasi.JPG") ?>" width="448px" height="546px" alt=""></center>
								</div>
							</form>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
					</div>
				</div>
			</div>
		</div>
		<!-- End Moda Aplikasi -->		
