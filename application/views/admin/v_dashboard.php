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
						<div class="col-lg-3 col-6">
							<!-- small box -->
							<div class="small-box bg-primary">
								<div class="inner">
									<h5>Kualitas Air Optimal <br>(A)<sup style="font-size: 12px"></sup></h5>
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
									<h5>Kualitas Air Sedang <br>(B)<sup style="font-size: 12px"></sup></h5>
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
									<h5>Kualitas Air Buruk <br>(C)<sup style="font-size: 12px"></sup></h5>
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
									<h5>Kualitas Air Sangat Buruk (D)<sup style="font-size: 12px"></sup></h5>
								</div>
								<a href="#!" class="btn btn-outline-info col-12 col-12" data-target="#modalSBuruk"
									data-toggle="modal">
									<i class="fas fa-arrow-circle-right">&nbsp;&nbsp;&nbsp;Lebih lanjut</i>
								</a>
							</div>
						</div>
						<!-- ./col -->
					</div>
					<br><hr>
<!-------------------------------------------------------------------------------------------------------------------->
				<div class="row">
					<div class="modal-body">
						<form>
							<div class="form-group">
								<img src="<?= base_url("/assets/dist/img/grafikSuhu.JPG") ?>" width="507px" height="200px" alt="">
							</div>
						<center><button type="button" class="btn btn-info btn-sm col-12" data-target="#modalSuhu"
									data-toggle="modal">µ[Suhu]</button></center>
						</form>
					</div>

					<div class="modal-body">
						<form>
							<div class="form-group">
								<img src="<?= base_url("/assets/dist/img/grafikPH.JPG") ?>" width="507px" height="200px" alt="">
							</div>
						<center><button type="button" class="btn btn-info btn-sm col-12" data-target="#modalpH"
									data-toggle="modal">µ[PH]</button></center>
						</form>
					</div>
					
					<div class="modal-body">
						<form>
							<div class="form-group">
								<img src="<?= base_url("/assets/dist/img/grafikTDS.JPG") ?>" width="507px" height="200px" alt="">
							</div>
						<button type="button" class="btn btn-info btn-sm col-6" data-target="#modalTDS"
									data-toggle="modal">µ[TDS]</button>
						</form>
					</div>	
				</div>	
					<br><br>

					<hr><hr>
					<h5><p><b><center>RULE YANG DIGUNAKAN ADALAH 64 : </center></b></p></h5>
					<hr>
					<div class="row">
					<!-- Rule -->
						<div class="col-md-1">
							<div class="alert alert-light">
								<b>[R1]</b>
							</div>
							<div class="alert alert-light">
								<b>[R2]</b>
							</div>
							<div class="alert alert-light">
								<b>[R3]</b>
							</div>
							<div class="alert alert-light">
								<b>[R4]</b>
							</div>
							<div class="alert alert-light">
								<b>[R5]</b>
							</div>
							<div class="alert alert-light">
								<b>[R6]</b>
							</div>
							<div class="alert alert-light">
								<b>[R7]</b>
							</div>
							<div class="alert alert-light">
								<b>[R8]</b>
							</div>
							<div class="alert alert-light">
								<b>[R9]</b>
							</div>
							<div class="alert alert-light">
								<b>[R10]</b>
							</div>
							<div class="alert alert-light">
								<b>[R11]</b>
							</div>
							<div class="alert alert-light">
								<b>[R12]</b>
							</div>
							<div class="alert alert-light">
								<b>[R13]</b>
							</div>
							<div class="alert alert-light">
								<b>[R14]</b>
							</div>
							<div class="alert alert-light">
								<b>[R15]</b>
							</div>
							<div class="alert alert-light">
								<b>[R16]</b>
							</div>
							<div class="alert alert-light">
								<b>[R17]</b>
							</div>
							<div class="alert alert-light">
								<b>[R18]</b>
							</div>
							<div class="alert alert-light">
								<b>[R19]</b>
							</div>
							<div class="alert alert-light">
								<b>[R20]</b>
							</div>
							<div class="alert alert-light">
								<b>[R21]</b>
							</div>
							<div class="alert alert-light">
								<b>[R22]</b>
							</div>
							<div class="alert alert-light">
								<b>[R23]</b>
							</div>
							<div class="alert alert-light">
								<b>[R24]</b>
							</div>
							<div class="alert alert-light">
								<b>[R25]</b>
							</div>
							<div class="alert alert-light">
								<b>[R26]</b>
							</div>
							<div class="alert alert-light">
								<b>[R27]</b>
							</div>
							<div class="alert alert-light">
								<b>[R28]</b>
							</div>
							<div class="alert alert-light">
								<b>[R29]</b>
							</div>
							<div class="alert alert-light">
								<b>[R30]</b>
							</div>
							<div class="alert alert-light">
								<b>[R31]</b>
							</div>
							<div class="alert alert-light">
								<b>[R32]</b>
							</div>
							<div class="alert alert-light">
								<b>[R33]</b>
							</div>
							<div class="alert alert-light">
								<b>[R34]</b>
							</div>
							<div class="alert alert-light">
								<b>[R35]</b>
							</div>
							<div class="alert alert-light">
								<b>[R36]</b>
							</div>
							<div class="alert alert-light">
								<b>[R37]</b>
							</div>
							<div class="alert alert-light">
								<b>[R38]</b>
							</div>
							<div class="alert alert-light">
								<b>[R39]</b>
							</div>
							<div class="alert alert-light">
								<b>[R40]</b>
							</div>
							<div class="alert alert-light">
								<b>[R41]</b>
							</div>
							<div class="alert alert-light">
								<b>[R42]</b>
							</div>
							<div class="alert alert-light">
								<b>[R43]</b>
							</div>
							<div class="alert alert-light">
								<b>[R44]</b>
							</div>
							<div class="alert alert-light">
								<b>[R45]</b>
							</div>
							<div class="alert alert-light">
								<b>[R46]</b>
							</div>
							<div class="alert alert-light">
								<b>[R47]</b>
							</div>
							<div class="alert alert-light">
								<b>[R48]</b>
							</div>
							<div class="alert alert-light">
								<b>[R49]</b>
							</div>
							<div class="alert alert-light">
								<b>[R50]</b>
							</div>
							<div class="alert alert-light">
								<b>[R51]</b>
							</div>
							<div class="alert alert-light">
								<b>[R52]</b>
							</div>
							<div class="alert alert-light">
								<b>[R53]</b>
							</div>
							<div class="alert alert-light">
								<b>[R54]</b>
							</div>
							<div class="alert alert-light">
								<b>[R55]</b>
							</div>
							<div class="alert alert-light">
								<b>[R56]</b>
							</div>
							<div class="alert alert-light">
								<b>[R57]</b>
							</div>
							<div class="alert alert-light">
								<b>[R58]</b>
							</div>
							<div class="alert alert-light">
								<b>[R59]</b>
							</div>
							<div class="alert alert-light">
								<b>[R60]</b>
							</div>
							<div class="alert alert-light">
								<b>[R61]</b>
							</div>
							<div class="alert alert-light">
								<b>[R62]</b>
							</div>
							<div class="alert alert-light">
								<b>[R63]</b>
							</div>
							<div class="alert alert-light">
								<b>[R64]</b>
							</div>	
						</div>

						<!-- Suhu Excellent -->
						<div class="col-md-3">
							<div class="alert alert-primary">
								IF SUHU <b>[Excellent]</b>
							</div>
							<div class="alert alert-primary">
								IF SUHU <b>[Excellent]</b>
							</div>
							<div class="alert alert-primary">
								IF SUHU <b>[Excellent]</b>
							</div>
							<div class="alert alert-primary">
								IF SUHU <b>[Excellent]</b>
							</div>
							<div class="alert alert-primary">
								IF SUHU <b>[Excellent]</b>
							</div>
							<div class="alert alert-primary">
								IF SUHU <b>[Excellent]</b>
							</div>
							<div class="alert alert-primary">
								IF SUHU <b>[Excellent]</b>
							</div>
							<div class="alert alert-primary">
								IF SUHU <b>[Excellent]</b>
							</div>
							<div class="alert alert-primary">
								IF SUHU <b>[Excellent]</b>
							</div>
							<div class="alert alert-primary">
								IF SUHU <b>[Excellent]</b>
							</div>
							<div class="alert alert-primary">
								IF SUHU <b>[Excellent]</b>
							</div>
							<div class="alert alert-primary">
								IF SUHU <b>[Excellent]</b>
							</div>
							<div class="alert alert-primary">
								IF SUHU <b>[Excellent]</b>
							</div>
							<div class="alert alert-primary">
								IF SUHU <b>[Excellent]</b>
							</div>
							<div class="alert alert-primary">
								IF SUHU <b>[Excellent]</b>
							</div>
							<div class="alert alert-primary">
								IF SUHU <b>[Excellent]</b>
							</div>

						<!-- Suhu Good -->
							<div class="alert alert-success">
								IF SUHU <b>[Good]</b>
							</div>
							<div class="alert alert-success">
								IF SUHU <b>[Good]</b>
							</div>
							<div class="alert alert-success">
								IF SUHU <b>[Good]</b>
							</div>
							<div class="alert alert-success">
								IF SUHU <b>[Good]</b>
							</div>
							<div class="alert alert-success">
								IF SUHU <b>[Good]</b>
							</div>
							<div class="alert alert-success">
							IF SUHU <b>[Good]</b>
							</div>
							<div class="alert alert-success">
							IF SUHU <b>[Good]</b>
							</div>
							<div class="alert alert-success">
							IF SUHU <b>[Good]</b>
							</div>
							<div class="alert alert-success">
							IF SUHU <b>[Good]</b>
							</div>
							<div class="alert alert-success">
							IF SUHU <b>[Good]</b>
							</div>
							<div class="alert alert-success">
							IF SUHU <b>[Good]</b>
							</div>
							<div class="alert alert-success">
							IF SUHU <b>[Good]</b>
							</div>
							<div class="alert alert-success">
							IF SUHU <b>[Good]</b>
							</div>
							<div class="alert alert-success">
							IF SUHU <b>[Good]</b>
							</div>
							<div class="alert alert-success">
							IF SUHU <b>[Good]</b>
							</div>
							<div class="alert alert-success">
							IF SUHU <b>[Good]</b>
							</div>

									<!-- Suhu Bad -->
							<div class="alert alert-warning">
								IF SUHU <b>[Bad]</b>
							</div>
							<div class="alert alert-warning">
								IF SUHU <b>[Bad]</b>
							</div>
							<div class="alert alert-warning">
								IF SUHU <b>[Bad]</b>
							</div>
							<div class="alert alert-warning">
								IF SUHU <b>[Bad]</b>
							</div>
							<div class="alert alert-warning">
								IF SUHU <b>[Bad]</b>
							</div>
							<div class="alert alert-warning">
							IF SUHU <b>[Bad]</b>
							</div>
							<div class="alert alert-warning">
							IF SUHU <b>[Bad]</b>
							</div>
							<div class="alert alert-warning">
							IF SUHU <b>[Bad]</b>
							</div>
							<div class="alert alert-warning">
							IF SUHU <b>[Bad]</b>
							</div>
							<div class="alert alert-warning">
							IF SUHU <b>[Bad]</b>
							</div>
							<div class="alert alert-warning">
							IF SUHU <b>[Bad]</b>
							</div>
							<div class="alert alert-warning">
							IF SUHU <b>[Bad]</b>
							</div>
							<div class="alert alert-warning">
							IF SUHU <b>[Bad]</b>
							</div>
							<div class="alert alert-warning">
							IF SUHU <b>[Bad]</b>
							</div>
							<div class="alert alert-warning">
							IF SUHU <b>[Bad]</b>
							</div>
							<div class="alert alert-warning">
							IF SUHU <b>[Bad]</b>
							</div>

								<!-- Suhu Very Bad -->
							<div class="alert alert-danger">
								IF SUHU <b>[Very Bad]</b>
							</div>
							<div class="alert alert-danger">
								IF SUHU <b>[Very Bad]</b>
							</div>
							<div class="alert alert-danger">
								IF SUHU <b>[Very Bad]</b>
							</div>
							<div class="alert alert-danger">
								IF SUHU <b>[Very Bad]</b>
							</div>
							<div class="alert alert-danger">
								IF SUHU <b>[Very Bad]</b>
							</div>
							<div class="alert alert-danger">
							IF SUHU <b>[Very Bad]</b>
							</div>
							<div class="alert alert-danger">
							IF SUHU <b>[Very Bad]</b>
							</div>
							<div class="alert alert-danger">
							IF SUHU <b>[Very Bad]</b>
							</div>
							<div class="alert alert-danger">
							IF SUHU <b>[Very Bad]</b>
							</div>
							<div class="alert alert-danger">
							IF SUHU <b>[Very Bad]</b>
							</div>
							<div class="alert alert-danger">
							IF SUHU <b>[Very Bad]</b>
							</div>
							<div class="alert alert-danger">
							IF SUHU <b>[Very Bad]</b>
							</div>
							<div class="alert alert-danger">
							IF SUHU <b>[Very Bad]</b>
							</div>
							<div class="alert alert-danger">
							IF SUHU <b>[Very Bad]</b>
							</div>
							<div class="alert alert-danger">
							IF SUHU <b>[Very Bad]</b>
							</div>
							<div class="alert alert-danger">
							IF SUHU <b>[Very Bad]</b>
							</div>
						</div>

						<div class="col-md-3">
							<div class="alert alert-primary">
								AND PH <b>[Excellent]</b>
							</div>
							<div class="alert alert-primary">
								AND PH <b>[Excellent]</b>
							</div>
							<div class="alert alert-primary">
								AND PH <b>[Excellent]</b>
							</div>
							<div class="alert alert-primary">
								AND PH <b>[Excellent]</b>
							</div>
							<div class="alert alert-success">
								AND PH <b>[Good]</b>
							</div>
							<div class="alert alert-success">
								AND PH <b>[Good]</b>
							</div>
							<div class="alert alert-success">
								AND PH <b>[Good]</b>
							</div>
							<div class="alert alert-success">
								AND PH <b>[Good]</b>
							</div>
							<div class="alert alert-warning">
								AND PH <b>[Bad]</b>
							</div>
							<div class="alert alert-warning">
								AND PH <b>[Bad]</b>
							</div>
							<div class="alert alert-warning">
								AND PH <b>[Bad]</b>
							</div>
							<div class="alert alert-warning">
								AND PH <b>[Bad]</b>
							</div>
							<div class="alert alert-danger">
								AND PH <b>[Very Bad]</b>
							</div>
							<div class="alert alert-danger">
								AND PH <b>[Very Bad]</b>
							</div>
							<div class="alert alert-danger">
								AND PH <b>[Very Bad]</b>
							</div>
							<div class="alert alert-danger">
								AND PH <b>[Very Bad]</b>
							</div>

							<div class="alert alert-primary">
								AND PH <b>[Excellent]</b>
							</div>
							<div class="alert alert-primary">
								AND PH <b>[Excellent]</b>
							</div>
							<div class="alert alert-primary">
								AND PH <b>[Excellent]</b>
							</div>
							<div class="alert alert-primary">
								AND PH <b>[Excellent]</b>
							</div>
							<div class="alert alert-success">
								AND PH <b>[Good]</b>
							</div>
							<div class="alert alert-success">
								AND PH <b>[Good]</b>
							</div>
							<div class="alert alert-success">
								AND PH <b>[Good]</b>
							</div>
							<div class="alert alert-success">
								AND PH <b>[Good]</b>
							</div>
							<div class="alert alert-warning">
								AND PH <b>[Bad]</b>
							</div>
							<div class="alert alert-warning">
								AND PH <b>[Bad]</b>
							</div>
							<div class="alert alert-warning">
								AND PH <b>[Bad]</b>
							</div>
							<div class="alert alert-warning">
								AND PH <b>[Bad]</b>
							</div>
							<div class="alert alert-danger">
								AND PH <b>[Very Bad]</b>
							</div>
							<div class="alert alert-danger">
								AND PH <b>[Very Bad]</b>
							</div>
							<div class="alert alert-danger">
								AND PH <b>[Very Bad]</b>
							</div>
							<div class="alert alert-danger">
								AND PH <b>[Very Bad]</b>
							</div>

							<div class="alert alert-primary">
								AND PH <b>[Excellent]</b>
							</div>
							<div class="alert alert-primary">
								AND PH <b>[Excellent]</b>
							</div>
							<div class="alert alert-primary">
								AND PH <b>[Excellent]</b>
							</div>
							<div class="alert alert-primary">
								AND PH <b>[Excellent]</b>
							</div>
							<div class="alert alert-success">
								AND PH <b>[Good]</b>
							</div>
							<div class="alert alert-success">
								AND PH <b>[Good]</b>
							</div>
							<div class="alert alert-success">
								AND PH <b>[Good]</b>
							</div>
							<div class="alert alert-success">
								AND PH <b>[Good]</b>
							</div>
							<div class="alert alert-warning">
								AND PH <b>[Bad]</b>
							</div>
							<div class="alert alert-warning">
								AND PH <b>[Bad]</b>
							</div>
							<div class="alert alert-warning">
								AND PH <b>[Bad]</b>
							</div>
							<div class="alert alert-warning">
								AND PH <b>[Bad]</b>
							</div>
							<div class="alert alert-danger">
								AND PH <b>[Very Bad]</b>
							</div>
							<div class="alert alert-danger">
								AND PH <b>[Very Bad]</b>
							</div>
							<div class="alert alert-danger">
								AND PH <b>[Very Bad]</b>
							</div>
							<div class="alert alert-danger">
								AND PH <b>[Very Bad]</b>
							</div>

							<div class="alert alert-primary">
								AND PH <b>[Excellent]</b>
							</div>
							<div class="alert alert-primary">
								AND PH <b>[Excellent]</b>
							</div>
							<div class="alert alert-primary">
								AND PH <b>[Excellent]</b>
							</div>
							<div class="alert alert-primary">
								AND PH <b>[Excellent]</b>
							</div>
							<div class="alert alert-success">
								AND PH <b>[Good]</b>
							</div>
							<div class="alert alert-success">
								AND PH <b>[Good]</b>
							</div>
							<div class="alert alert-success">
								AND PH <b>[Good]</b>
							</div>
							<div class="alert alert-success">
								AND PH <b>[Good]</b>
							</div>
							<div class="alert alert-warning">
								AND PH <b>[Bad]</b>
							</div>
							<div class="alert alert-warning">
								AND PH <b>[Bad]</b>
							</div>
							<div class="alert alert-warning">
								AND PH <b>[Bad]</b>
							</div>
							<div class="alert alert-warning">
								AND PH <b>[Bad]</b>
							</div>
							<div class="alert alert-danger">
								AND PH <b>[Very Bad]</b>
							</div>
							<div class="alert alert-danger">
								AND PH <b>[Very Bad]</b>
							</div>
							<div class="alert alert-danger">
								AND PH <b>[Very Bad]</b>
							</div>
							<div class="alert alert-danger">
								AND PH <b>[Very Bad]</b>
							</div>
						</div>	

						<!-- TDS -->
						<div class ="col-md-3">
							<div class="alert alert-primary">
								AND TDS <b>[Excellent]</b>
							</div>
							<div class="alert alert-success">
								AND TDS <b>[Good]</b>
							</div>
							<div class="alert alert-warning">
								AND TDS <b>[Bad]</b>
							</div>
							<div class="alert alert-danger">
								AND TDS <b>[Very Bad]</b>
							</div>
							<div class="alert alert-primary">
								AND TDS <b>[Excellent]</b>
							</div>
							<div class="alert alert-success">
								AND TDS <b>[Good]</b>
							</div>
							<div class="alert alert-warning">
								AND TDS <b>[Bad]</b>
							</div>
							<div class="alert alert-danger">
								AND TDS <b>[Very Bad]</b>
							</div>
							<div class="alert alert-primary">
								AND TDS <b>[Excellent]</b>
							</div>
							<div class="alert alert-success">
								AND TDS <b>[Good]</b>
							</div>
							<div class="alert alert-warning">
								AND TDS <b>[Bad]</b>
							</div>
							<div class="alert alert-danger">
								AND TDS <b>[Very Bad]</b>
							</div>
							<div class="alert alert-primary">
								AND TDS <b>[Excellent]</b>
							</div>
							<div class="alert alert-success">
								AND TDS <b>[Good]</b>
							</div>
							<div class="alert alert-warning">
								AND TDS <b>[Bad]</b>
							</div>
							<div class="alert alert-danger">
								AND TDS <b>[Very Bad]</b>
							</div>
							<div class="alert alert-primary">
								AND TDS <b>[Excellent]</b>
							</div>
							<div class="alert alert-success">
								AND TDS <b>[Good]</b>
							</div>
							<div class="alert alert-warning">
								AND TDS <b>[Bad]</b>
							</div>
							<div class="alert alert-danger">
								AND TDS <b>[Very Bad]</b>
							</div>
							<div class="alert alert-primary">
								AND TDS <b>[Excellent]</b>
							</div>
							<div class="alert alert-success">
								AND TDS <b>[Good]</b>
							</div>
							<div class="alert alert-warning">
								AND TDS <b>[Bad]</b>
							</div>
							<div class="alert alert-danger">
								AND TDS <b>[Very Bad]</b>
							</div>
							<div class="alert alert-primary">
								AND TDS <b>[Excellent]</b>
							</div>
							<div class="alert alert-success">
								AND TDS <b>[Good]</b>
							</div>
							<div class="alert alert-warning">
								AND TDS <b>[Bad]</b>
							</div>
							<div class="alert alert-danger">
								AND TDS <b>[Very Bad]</b>
							</div>
							<div class="alert alert-primary">
								AND TDS <b>[Excellent]</b>
							</div>
							<div class="alert alert-success">
								AND TDS <b>[Good]</b>
							</div>
							<div class="alert alert-warning">
								AND TDS <b>[Bad]</b>
							</div>
							<div class="alert alert-danger">
								AND TDS <b>[Very Bad]</b>
							</div>
							<div class="alert alert-primary">
								AND TDS <b>[Excellent]</b>
							</div>
							<div class="alert alert-success">
								AND TDS <b>[Good]</b>
							</div>
							<div class="alert alert-warning">
								AND TDS <b>[Bad]</b>
							</div>
							<div class="alert alert-danger">
								AND TDS <b>[Very Bad]</b>
							</div>
							<div class="alert alert-primary">
								AND TDS <b>[Excellent]</b>
							</div>
							<div class="alert alert-success">
								AND TDS <b>[Good]</b>
							</div>
							<div class="alert alert-warning">
								AND TDS <b>[Bad]</b>
							</div>
							<div class="alert alert-danger">
								AND TDS <b>[Very Bad]</b>
							</div>
							<div class="alert alert-primary">
								AND TDS <b>[Excellent]</b>
							</div>
							<div class="alert alert-success">
								AND TDS <b>[Good]</b>
							</div>
							<div class="alert alert-warning">
								AND TDS <b>[Bad]</b>
							</div>
							<div class="alert alert-danger">
								AND TDS <b>[Very Bad]</b>
							</div>
							<div class="alert alert-primary">
								AND TDS <b>[Excellent]</b>
							</div>
							<div class="alert alert-success">
								AND TDS <b>[Good]</b>
							</div>
							<div class="alert alert-warning">
								AND TDS <b>[Bad]</b>
							</div>
							<div class="alert alert-danger">
								AND TDS <b>[Very Bad]</b>
							</div>
							<div class="alert alert-primary">
								AND TDS <b>[Excellent]</b>
							</div>
							<div class="alert alert-success">
								AND TDS <b>[Good]</b>
							</div>
							<div class="alert alert-warning">
								AND TDS <b>[Bad]</b>
							</div>
							<div class="alert alert-danger">
								AND TDS <b>[Very Bad]</b>
							</div>
							<div class="alert alert-primary">
								AND TDS <b>[Excellent]</b>
							</div>
							<div class="alert alert-success">
								AND TDS <b>[Good]</b>
							</div>
							<div class="alert alert-warning">
								AND TDS <b>[Bad]</b>
							</div>
							<div class="alert alert-danger">
								AND TDS <b>[Very Bad]</b>
							</div>
							<div class="alert alert-primary">
								AND TDS <b>[Excellent]</b>
							</div>
							<div class="alert alert-success">
								AND TDS <b>[Good]</b>
							</div>
							<div class="alert alert-warning">
								AND TDS <b>[Bad]</b>
							</div>
							<div class="alert alert-danger">
								AND TDS <b>[Very Bad]</b>
							</div>
							<div class="alert alert-primary">
								AND TDS <b>[Excellent]</b>
							</div>
							<div class="alert alert-success">
								AND TDS <b>[Good]</b>
							</div>
							<div class="alert alert-warning">
								AND TDS <b>[Bad]</b>
							</div>
							<div class="alert alert-danger">
								AND TDS <b>[Very Bad]</b>
							</div>							
						</div>

						<div class="col-md-2">
							<div class="alert alert-info">
							GRADE IS &nbsp<b>[A]</b>
							</div>
							<div class="alert alert-info">
							GRADE IS &nbsp<b>[A]</b>
							</div>
							<div class="alert alert-info">
							GRADE IS &nbsp<b>[C]</b>
							</div>
							<div class="alert alert-info">
							GRADE IS &nbsp<b>[D]</b>
							</div>
							<div class="alert alert-info">
							GRADE IS &nbsp<b>[A]</b>
							</div>
							<div class="alert alert-info">
							GRADE IS &nbsp<b>[B]</b>
							</div>
							<div class="alert alert-info">
							GRADE IS &nbsp<b>[C]</b>
							</div>
							<div class="alert alert-info">
							GRADE IS &nbsp<b>[D]</b>
							</div>
							<div class="alert alert-info">
							GRADE IS &nbsp<b>[C]</b>
							</div>
							<div class="alert alert-info">
							GRADE IS &nbsp<b>[C]</b>
							</div>
							<div class="alert alert-info">
							GRADE IS &nbsp<b>[D]</b>
							</div>
							<div class="alert alert-info">
							GRADE IS &nbsp<b>[D]</b>
							</div>
							<div class="alert alert-info">
							GRADE IS &nbsp<b>[C]</b>
							</div>
							<div class="alert alert-info">
							GRADE IS &nbsp<b>[C]</b>
							</div>
							<div class="alert alert-info">
							GRADE IS &nbsp<b>[D]</b>
							</div>
							<div class="alert alert-info">
							GRADE IS &nbsp<b>[D]</b>
							</div>
							
							<div class="alert alert-info">
							GRADE IS &nbsp<b>[A]</b>
							</div>
							<div class="alert alert-info">
							GRADE IS &nbsp<b>[B]</b>
							</div>
							<div class="alert alert-info">
							GRADE IS &nbsp<b>[C]</b>
							</div>
							<div class="alert alert-info">
							GRADE IS &nbsp<b>[D]</b>
							</div>
							<div class="alert alert-info">
							GRADE IS &nbsp<b>[B]</b>
							</div>
							<div class="alert alert-info">
							GRADE IS &nbsp<b>[B]</b>
							</div>
							<div class="alert alert-info">
							GRADE IS &nbsp<b>[C]</b>
							</div>
							<div class="alert alert-info">
							GRADE IS &nbsp<b>[D]</b>
							</div>
							<div class="alert alert-info">
							GRADE IS &nbsp<b>[C]</b>
							</div>
							<div class="alert alert-info">
							GRADE IS &nbsp<b>[C]</b>
							</div>
							<div class="alert alert-info">
							GRADE IS &nbsp<b>[D]</b>
							</div>
							<div class="alert alert-info">
							GRADE IS &nbsp<b>[D]</b>
							</div>
							<div class="alert alert-info">
							GRADE IS &nbsp<b>[C]</b>
							</div>
							<div class="alert alert-info">
							GRADE IS &nbsp<b>[C]</b>
							</div>
							<div class="alert alert-info">
							GRADE IS &nbsp<b>[D]</b>
							</div>
							<div class="alert alert-info">
							GRADE IS &nbsp<b>[D]</b>
							</div>

							<div class="alert alert-info">
							GRADE IS &nbsp<b>[C]</b>
							</div>
							<div class="alert alert-info">
							GRADE IS &nbsp<b>[C]</b>
							</div>
							<div class="alert alert-info">
							GRADE IS &nbsp<b>[C]</b>
							</div>
							<div class="alert alert-info">
							GRADE IS &nbsp<b>[D]</b>
							</div>
							<div class="alert alert-info">
							GRADE IS &nbsp<b>[C]</b>
							</div>
							<div class="alert alert-info">
							GRADE IS &nbsp<b>[C]</b>
							</div>
							<div class="alert alert-info">
							GRADE IS &nbsp<b>[D]</b>
							</div>
							<div class="alert alert-info">
							GRADE IS &nbsp<b>[D]</b>
							</div>
							<div class="alert alert-info">
							GRADE IS &nbsp<b>[C]</b>
							</div>
							<div class="alert alert-info">
							GRADE IS &nbsp<b>[D]</b>
							</div>
							<div class="alert alert-info">
							GRADE IS &nbsp<b>[D]</b>
							</div>
							<div class="alert alert-info">
							GRADE IS &nbsp<b>[D]</b>
							</div>
							<div class="alert alert-info">
							GRADE IS &nbsp<b>[C]</b>
							</div>
							<div class="alert alert-info">
							GRADE IS &nbsp<b>[D]</b>
							</div>
							<div class="alert alert-info">
							GRADE IS &nbsp<b>[D]</b>
							</div>
							<div class="alert alert-info">
							GRADE IS &nbsp<b>[D]</b>
							</div>

							<div class="alert alert-info">
							GRADE IS &nbsp<b>[B]</b>
							</div>
							<div class="alert alert-info">
							GRADE IS &nbsp<b>[C]</b>
							</div>
							<div class="alert alert-info">
							GRADE IS &nbsp<b>[C]</b>
							</div>
							<div class="alert alert-info">
							GRADE IS &nbsp<b>[C]</b>
							</div>
							<div class="alert alert-info">
							GRADE IS &nbsp<b>[C]</b>
							</div>
							<div class="alert alert-info">
							GRADE IS &nbsp<b>[C]</b>
							</div>
							<div class="alert alert-info">
							GRADE IS &nbsp<b>[D]</b>
							</div>
							<div class="alert alert-info">
							GRADE IS &nbsp<b>[D]</b>
							</div>
							<div class="alert alert-info">
							GRADE IS &nbsp<b>[C]</b>
							</div>
							<div class="alert alert-info">
							GRADE IS &nbsp<b>[C]</b>
							</div>
							<div class="alert alert-info">
							GRADE IS &nbsp<b>[D]</b>
							</div>
							<div class="alert alert-info">
							GRADE IS &nbsp<b>[D]</b>
							</div>
							<div class="alert alert-info">
							GRADE IS &nbsp<b>[C]</b>
							</div>
							<div class="alert alert-info">
							GRADE IS &nbsp<b>[D]</b>
							</div>
							<div class="alert alert-info">
							GRADE IS &nbsp<b>[D]</b>
							</div>
							<div class="alert alert-info">
							GRADE IS &nbsp<b>[D]</b>
							</div>
					</div>
			</section>
		</div>
		</div>
		</section>
		</div>
		
		<!-- Modal Optimal -->
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
									value="Kualitar Air Optimal adalah berada pada range 0 - 200" readonly>
							</div>
							<div class="form-group">
								<label for="message-text" class="col-form-label">Detail Grafik :</label>
								<br>
								<img src="<?= base_url("/assets/dist/img/grafik.png") ?>" width="470px" height="200px" alt="">
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal Sedang -->
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
								<img src="<?= base_url("/assets/dist/img/grafik.png") ?>" width="470px" height="200px" alt="">
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal Buruk -->
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
								<img src="<?= base_url("/assets/dist/img/grafik.png") ?>" width="470px" height="200px" alt="">
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal Sangat Buruk -->
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
								
								<img src="<?= base_url("/assets/dist/img/grafik.png") ?>" width="470px" height="200px" alt="">
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
					</div>
				</div>
			</div>
		</div>
<!---------------------------------------------------------------------------------------------------------------------->

	<!-- Modal Suhu -->
	<div class="modal fade bd-example-modal-lg" id="modalSuhu" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  		<div class="modal-dialog modal-lg">
    		<div class="modal-content">
			<div class="modal-body">
						<form>
							<div class="form-group">
								<img src="<?= base_url("/assets/dist/img/SuhuA.JPG") ?>" width="507px" height="200px" alt="">
							</div>
						</form>
						<form>
							<div class="form-group">
								<img src="<?= base_url("/assets/dist/img/SuhuB.JPG") ?>" width="507px" height="200px" alt="">
							</div>
						</form>
						<form>
							<div class="form-group">
								<img src="<?= base_url("/assets/dist/img/SuhuC.JPG") ?>" width="507px" height="200px" alt="">
							</div>
						</form>
						<form>
							<div class="form-group">
								<img src="<?= base_url("/assets/dist/img/SuhuD.JPG") ?>" width="507px" height="200px" alt="">
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
					</div>
    		</div>
  		</div>
	</div>

	<!-- Modal PH -->
	<div class="modal fade bd-example-modal-lg" id="modalpH" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  		<div class="modal-dialog modal-lg">
    		<div class="modal-content">
			<div class="modal-body">
						<form>
							<div class="form-group">
								<img src="<?= base_url("/assets/dist/img/phA.JPG") ?>" width="507px" height="200px" alt="">
							</div>
						</form>
						<form>
							<div class="form-group">
								<img src="<?= base_url("/assets/dist/img/phB.JPG") ?>" width="507px" height="200px" alt="">
							</div>
						</form>
						<form>
							<div class="form-group">
								<img src="<?= base_url("/assets/dist/img/phC.JPG") ?>" width="507px" height="200px" alt="">
							</div>
						</form>
						<form>
							<div class="form-group">
								<img src="<?= base_url("/assets/dist/img/phD.JPG") ?>" width="507px" height="200px" alt="">
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
	<div class="modal fade bd-example-modal-lg" id="modalTDS" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  		<div class="modal-dialog modal-lg">
    		<div class="modal-content">
			<div class="modal-body">
						<form>
							<div class="form-group">
								<img src="<?= base_url("/assets/dist/img/tdsA.JPG") ?>" width="507px" height="200px" alt="">
							</div>
						</form>
						<form>
							<div class="form-group">
								<img src="<?= base_url("/assets/dist/img/tdsB.JPG") ?>" width="507px" height="200px" alt="">
							</div>
						</form>
						<form>
							<div class="form-group">
								<img src="<?= base_url("/assets/dist/img/tdsC.JPG") ?>" width="507px" height="200px" alt="">
							</div>
						</form>
						<form>
							<div class="form-group">
								<img src="<?= base_url("/assets/dist/img/tdsD.JPG") ?>" width="507px" height="200px" alt="">
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
					</div>
    		</div>
  		</div>
	</div>


