<?php
$data = $this->db->get_where('alumni', ['id_alumni' => $this->session->userdata('id_profil_user')])->row();
?>



<div class="collapse navbar-collapse order-3" id="navbarCollapse">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a href="<?= site_url('C_alumni') ?>" class="nav-link <?php if (isset($mn_dashboard)) echo $mn_dashboard;
                                                                    else echo ""; ?>">
                <i class="fa fa-home"></i> Home</a>
        </li>

        <li class="nav-item">
            <a href="<?= site_url('C_alumni/lowongan') ?>" class="nav-link <?php if (isset($mn_lowongan)) echo $mn_lowongan;
                                                                            else echo ""; ?>">
                <i class="fas fa-briefcase"></i> Lowongan Pekerjaan</a>
        </li>

        <li class="nav-item">
            <a href="<?= site_url('C_alumni/pelatihan') ?>" class="nav-link <?php if (isset($mn_pelatihan)) echo $mn_pelatihan;
                                                                            else echo ""; ?>">
                <i class="fas fa-laptop-house"></i> Pelatihan</a>
        </li>

        <li class="nav-item">
            <a href="<?= site_url('C_alumni/tracer_study') ?>" class="nav-link <?php if (isset($mn_tracer)) echo $mn_tracer;
                                                                                else echo ""; ?>">
                <i class="fas fa-tasks"></i> Tracer Study</a>
        </li>

        <li class="nav-item">
            <a href="<?= site_url('C_alumni/profil') ?>" class="nav-link <?php if (isset($mn_profil)) echo $mn_profil;
                                                                            else echo ""; ?>">
                <i class="fas fa-user"></i> Profil</a>
        </li>

    </ul>
</div>
<!-- Right navbar links -->
<ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto navbar-light">
    <!-- Messages Dropdown Menu -->
    <li class="nav-item dropdown">
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

    <li class="nav-item dropdown">
        <button class="dropdown-toggle btn" data-toggle="dropdown" href="#">
            <?php if ($data->foto_alumni != "") { ?>
                <img src="<?php echo base_url('upload/alumni/') . $data->foto_alumni; ?>" alt="" class="img-circle" width="25" height="25">
            <?php } else { ?>
                <img src="<?php echo base_url('assets/') ?>dist/img/default.jpg" class="img-circle" width="25" height="25" alt="User Image">
            <?php } ?>
            <span class="hidden-xs"><?= $data->nama; ?></span>
        </button>
        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
            <center>
                <p><b><?= $data->nama; ?></b></p>
                <p></p>
            </center>

            <div class="dropdown-divider"></div>
            <div class="col-sm-12">
                <!-- <a href="<?php echo site_url('penyewa/C_penyewa/edit_password') ?>" class="btn btn-info btn-block btn-flat">
                    <i class="fa fa-gears"></i>Ganti Password</a> -->
                <a href="<?php echo site_url('C_login/logout') ?>" class="btn btn-dark btn-block btn-flat">
                    <i class="fas fa-sign-out-alt"></i>Logout</a>
            </div>
        </div>
    </li>


    <!-- Notifications Dropdown Menu -->

</ul>