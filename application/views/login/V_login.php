<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pusat Karir Jayanusa | Log in</title>
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
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
</head>

<body class="hold-transition login-page" style="background-image:url(<?php echo base_url('assets') ?>/dist/img/bg-login.png); background-size: 100% 100%;">
    <div class="login-box col-4">
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
            <div class="card-body">
                <center>
                    <h3> <b>Login User</b> </h3>
                </center>
                <?php $this->load->view('_helper_flash_message'); ?>
                <form action="<?= base_url('C_login/proses_login') ?>" method="post">
                    <div class="input-group mb-3">
                        <input type="hidden" name="level" value="<?= $level ?>" class="form-control" placeholder="Email">
                        <input type="text" name="username" class="form-control" placeholder="Username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <button type="submit" class="btn btn-info btn-block">Sign In</button>
                            <a href="<?= base_url('C_login') ?>" class="btn btn-danger btn-block">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
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
    <!-- SweetAlert2 -->
    <script src="<?php echo base_url('assets/') ?>plugins/sweetalert2/sweetalert2.min.js"></script>
</body>


</html>