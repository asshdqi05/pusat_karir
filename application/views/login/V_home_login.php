<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pusat Karir Jayanusa</title>
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
    <div class="login-box col-7">
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
                <?php $this->load->view('_helper_flash_message'); ?>
                <div class="row">
                    <div class="col-6">
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>Login</h3>
                                <p>Login Alumni / Perusahaan</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-sign-in-alt"></i>
                            </div>
                            <a href="javascript:void(0)" onclick="login()" class="small-box-footer">
                                GO <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>Registrasi</h3>

                                <p>Registrasi Alumni / Perusahaan</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-user-edit"></i>
                            </div>
                            <a href="javascript:void(0)" onclick="register()" class="small-box-footer">
                                GO <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
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
    <script src="<?php echo base_url('assets') ?>/plugins/sweetalert2/sweetalert2.min.js"></script>
    <script type="text/javascript">
        // $(function() {
        //     const Toast = Swal.mixin({
        //         toast: true,
        //         position: 'top-end',
        //         showConfirmButton: false,
        //         timer: 3000
        //     });
        //     $('.logout').on('click', function() {
        //         Toast.fire({
        //             icon: 'success',
        //             title: 'Logout Berhasil.'
        //         })
        //     });
        // });
    </script>
    <script>
        function login() {
            $('#login').modal('show');
        }

        function register() {
            $('#registrasi').modal('show');
        }
    </script>
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h5 class="modal-title" id="exampleModalLabel">Login Akun</h5>
                    <button type="button" class="close btn btn-danger" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">X</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-4">
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h4>Login Alumni</h4>
                                    <p></p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-user-graduate"></i>
                                </div>
                                <a href="<?= site_url('C_login/login/3') ?>" class="small-box-footer">
                                    GO <i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="small-box bg-primary">
                                <div class="inner">
                                    <h4>Login Perusahaan</h4>
                                    <p></p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-building"></i>
                                </div>
                                <a href="<?= site_url('C_login/login/2') ?>" class="small-box-footer">
                                    GO <i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h4>Login Admin</h4>
                                    <p></p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-user"></i>
                                </div>
                                <a href="<?= site_url('C_login/login/1') ?>" class="small-box-footer">
                                    GO <i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="registrasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h5 class="modal-title" id="exampleModalLabel">Regristrasi Akun</h5>
                    <button type="button" class="close btn btn-danger" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">X</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h4>Registrasi Alumni</h4>
                                    <p></p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-user-graduate"></i>
                                </div>
                                <a href="<?= base_url('C_registrasi/registrasi_alumni') ?>" class="small-box-footer">
                                    GO <i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="small-box bg-primary">
                                <div class="inner">
                                    <h4>Registrasi Perusahaan</h4>
                                    <p></p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-building"></i>
                                </div>
                                <a href="<?= base_url('C_registrasi/registrasi_perusahaan') ?>" class="small-box-footer">
                                    GO <i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>


</html>