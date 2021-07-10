<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url('assets/dist')?>/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?=base_url('assets/dist')?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url('assets/dist')?>/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->

    <?php if(isset($_SESSION['gagal'])){ ?>
        <div class="alert alert-danger" role="alert">
            Login gagal
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
    <?php } ?>
    <?php if(isset($_SESSION['logout'])){ ?>
      <div class="alert alert-success" role="alert">
            Logout berhasil
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
    <?php } ?>
    
    <?php
      $this->session->unset_userdata('gagal');
      $this->session->unset_userdata('logout');
    ?>

  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="" class="h1"><b>Admin</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Masuk untuk memulai sesi</p>

      <form action="<?=base_url('admin/C_auth/login')?>" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="username" placeholder="Username" minlength="2">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password" minlength="2">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-key"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
            <button type="submit" class="btn btn-primary btn-block mr-2 ml-2">Masuk</button>
          <!-- /.col -->
        </div>
      </form>

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?=base_url('assets/dist')?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?=base_url('assets/dist')?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url('assets/dist')?>/js/adminlte.min.js"></script>
</body>
</html>
