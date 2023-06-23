<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pusat Karir Jayanusa | Registrasi Alumni</title>
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
                <h3> <b>Registrasi Alumni</b> </h3>
            </center>
            <?php $this->load->view('_helper_flash_message'); ?>
            <form class="form-horizontal" method="POST" action="<?php echo site_url('C_registrasi/save_alumni') ?>">
                <div class="card-body">
                    <div class="form-group">
                        <label>NO BP</label>
                        <input type="text" name="nobp" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Jenis Kelamin :</label>
                        <div class="row">
                            <div class="col-sm-2">
                                <div class="icheck-primary d-inline">
                                    <input type="radio" id="radioPrimary1" value="1" name="jk">
                                    <label for="radioPrimary1">
                                        Laki Laki
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="icheck-primary d-inline">
                                    <input type="radio" id="radioPrimary3" value="2" name="jk">
                                    <label for="radioPrimary3">
                                        Perempuan
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Telepon</label>
                        <input type="text" name="telepon" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea rows="5" name="alamat" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <label>Program Studi</label>
                        <select name="jurusan" class="form-control">
                            <option disabled selected> - PILIH - </option>
                            <?php
                            foreach ($jurusan as $d) {
                            ?>
                                <option value="<?= $d->id_jurusan ?>"><?= $d->nama_jurusan ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Tahun Lulus</label>
                        <select name="tahun_lulus" class="form-control">
                            <option disabled selected> - PILIH TAHUN - </option>
                            <?php
                            $now = date('Y');
                            for ($a = 2000; $a <= $now; $a++) {
                                echo "<option value='$a'>$a</option>";
                            } ?>
                        </select>
                    </div>

                    <hr>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-info"><i class="fas fa-user-edit"></i> Registrasi</button>
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