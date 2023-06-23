<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<?php

$data = $this->db->get_where('alumni', ['id_alumni' => $this->session->userdata('id_profil_user')])->row();

?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pusat Karir Jayanusa | <?= $judul_halaman ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>plugins/font-awesome/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="<?php echo base_url('assets/') ?>plugins/font-awesome/css/fontawesome.min.css"> -->
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>plugins/fontawesome-free/css/all.min.css">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>dist/css/adminlte.min.css">

    <link href="<?php echo base_url('assets/') ?>dist/js/moment.js">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>plugins/datatables-bs4/css/dataTables.bootstrap4.css">
</head>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-lg  navbar-dark navbar-primary">
            <div class="container">
                <a href="" class="navbar-brand">
                    <img src="<?= base_url('assets/') ?>/dist/img/jayanusa.png" alt="" class="brand-image" width="30">
                    <strong> Pusat Karir Jayanusa</strong>
                </a>

                <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <?php $this->load->view('template_alumni/V_menu', $menu); ?>
                <!-- /.navbar -->
            </div>
        </nav>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark"><?= $judul_halaman ?></h1>
                        </div><!-- /.col -->
                        <!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container">
                    <?php $this->load->view('_helper_flash_message'); ?>
                    <div class="row">