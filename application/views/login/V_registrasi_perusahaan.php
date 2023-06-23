<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pusat Karir Jayanusa | Registrasi Perusahaan</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition login-page" style="background-image:url(<?php echo base_url('assets') ?>/dist/img/bg-login.png); background-size: 100% 100%;">
    <div class="login-box col-8">
        <div class="login-logo">
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-header bg-info">
                <center>
                    <p>
                    <h2><b>Pusat Karir</b>Jayanusa<img src="<?php echo base_url('assets/') ?>dist/img/jayanusa.png" width='50px'></h2>
                    </p>
                </center>
            </div>
            <center>
                <h3> <b>Registrasi Perusahaan</b> </h3>
            </center>
            <?php $this->load->view('_helper_flash_message'); ?>
            <form class="form-horizontal" method="POST" action="<?php echo site_url('C_registrasi/save_perusahaan') ?>">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama Perusahaan</label>
                        <input type="text" name="nama" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Telepon</label>
                        <input type="text" name="telepon" class="form-control">
                    </div>



                    <div class="form-group">
                        <label>Website Perusahaan</label>
                        <input type="text" name="website" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Alamat Perusahaan</label>
                        <textarea rows="5" name="alamat" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <label>Deskripsi Perusahaan</label>
                        <textarea rows="5" name="deskripsi" class="form-control"></textarea>
                    </div>

                    <hr>
                    <div class="form-group">
                        <label>Email Perusahaan</label>
                        <input type="text" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-info"><i class="fas fa-user-edit"></i>Registrasi</button>
                    <a href="<?= base_url('C_login') ?>" class="btn btn-danger"><i class="fas fa-chevron-circle-left"></i> Kembali</a>
                </div>
            </form>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="<?= base_url() ?>/assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url() ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>/assets/dist/js/adminlte.min.js"></script>
</body>


</html>