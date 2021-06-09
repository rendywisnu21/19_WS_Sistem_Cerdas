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
                        <li class="breadcrumb-item"><a href="<?= base_url('admin/C_parameter'); ?>">Data Parameter</a></li>
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
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" action="<?= base_url('admin/C_parameter/tambah_pm'); ?>"
                            enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="row">
                                            <?= form_error('id_parameter', '<small class="text-danger">', '</small>'); ?>
                                        </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="namapm">Nama Parameter</label>
                                            <input type="text" class="form-control huruf" id="nmpm" name="namapm"
                                                placeholder="Nama Parameter" value="<?= set_value('namapm'); ?>"
                                                autocomplete="off" autofocus required>
                                            <?= form_error('namapm', '<small class="text-danger">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="button">
                                        <a href="<?= base_url('admin/C_parameter')?>" class="btn btn-default" data-dismiss="modal"><i class= "fa fa-arrow-circle-left"></i> Kembali</a>
                                        <button type="submit" class="btn btn-primary"><i class="far fa-save"></i> Simpan</button>
                                    </div>
                                 </div>
                            </div>     
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->