<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= $title; ?></title>

	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet"
		href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/dist/plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Tempusdominus Bootstrap 4 -->
	<link rel="stylesheet"
		href="<?= base_url() ?>assets/dist/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
	<!-- iCheck -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/dist/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- JQVMap -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/dist/plugins/jqvmap/jqvmap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/adminlte.min.css">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/dist/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
	<!-- Daterange picker -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/dist/plugins/daterangepicker/daterangepicker.css">
	<!-- summernote -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/dist/plugins/summernote/summernote-bs4.min.css">
	<!-- toastr  -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/dist/plugins/toastr/toastr.min.css">
	<!-- sweet alert  -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/dist/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.cs">
</head>

<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container" style="padding-top: 5px;">
        <center><h4>KOI Hitungan</h4></center>
      </div>
    </nav>

    <div class="container" style="padding-top: 50px;">

    <form action="<?=base_url('user/C_home/hitung')?>" method="post">
        <div class="form-group">
          <label for="suhu">Suhu</label>
          <input type="text" class="form-control" id="suhu" name="suhu">
        </div>

        <div class="form-group">
          <label for="ph">PH</label>
          <input type="text" class="form-control" id="ph" name="ph">
        </div>

        <div class="form-group">
          <label for="tds">TDS</label>
          <input type="text" class="form-control" id="tds" name="tds">
        </div>

        <button type="submit">Hitung</button>
    </form>
      
    </div><!-- /.container -->
</body>

</script>
	<!-- Bootstrap 4 -->
	<script src="<?= base_url() ?>assets/dist/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- ChartJS -->
	<script src="<?= base_url() ?>assets/dist/plugins/chart.js/Chart.min.js"></script>
	<!-- Sparkline -->
	<script src="<?= base_url() ?>assets/dist/plugins/sparklines/sparkline.js"></script>
	<!-- JQVMap -->
	<script src="<?= base_url() ?>assets/dist/plugins/jqvmap/jquery.vmap.min.js"></script>
	<script src="<?= base_url() ?>assets/dist/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
	<!-- jQuery Knob Chart -->
	<script src="<?= base_url() ?>assets/dist/plugins/jquery-knob/jquery.knob.min.js"></script>
	<!-- daterangepicker -->
	<script src="<?= base_url() ?>assets/dist/plugins/moment/moment.min.js"></script>
	<script src="<?= base_url() ?>assets/dist/plugins/daterangepicker/daterangepicker.js"></script>
	<!-- Tempusdominus Bootstrap 4 -->
	<script src="<?= base_url() ?>assets/dist/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js">
	</script>
	<!-- Summernote -->
	<script src="<?= base_url() ?>assets/dist/plugins/summernote/summernote-bs4.min.js"></script>
	<!-- overlayScrollbars -->
	<script src="<?= base_url() ?>assets/dist/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
	<!-- toastr  -->
	<script src="<?= base_url() ?>assets/dist/plugins/toastr/toastr.min.js"></script>
	<!-- sweetalert  -->
	<script src="<?= base_url() ?>assets/dist/plugins/sweetalert2/sweetalert2.min.js"></script>
	<!-- AdminLTE App -->
	<script src="<?= base_url() ?>assets/dist/js/adminlte.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="<?= base_url() ?>assets/dist/js/demo.js"></script>
	<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
	<script src="<?= base_url() ?>assets/dist/js/pages/dashboard.js"></script>