<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the . class with font-awesome or any other icon font library -->
    <?php $level = $this->session->userdata('level') ?>
    <?php if ($level == 1) { ?>
        <li class="nav-item">
            <a href="<?= site_url('C_admin/index') ?>" class="nav-link <?php if (isset($mn_dashboard)) echo $mn_dashboard ?>">
                <i class="nav-icon fas fa-home"></i>
                <p>
                    Home
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="<?= site_url('C_admin/alumni') ?>" class="nav-link <?php if (isset($mn_alumni)) echo $mn_alumni ?>">
                <i class="nav-icon fas fa-user-graduate"></i>
                <p>
                    Data Alumni
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="<?= site_url('C_admin/perusahaan') ?>" class="nav-link <?php if (isset($mn_perusahaan)) echo $mn_perusahaan ?>">
                <i class="nav-icon fas fa-building"></i>
                <p>
                    Data Perusahaan
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="<?= site_url('C_admin/lowongan_pekerjaan') ?>" class="nav-link <?php if (isset($mn_lowongan_pekerjaan)) echo $mn_lowongan_pekerjaan ?>">
                <i class="nav-icon fas fa-briefcase"></i>
                <p>
                    Data Lowongan Pekerjaan
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="<?= site_url('C_admin/pelatihan') ?>" class="nav-link <?php if (isset($mn_pelatihan)) echo $mn_pelatihan ?>">
                <i class="nav-icon fas fa-laptop-house"></i>
                <p>
                    Data Pelatihan
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="<?= site_url('C_laporan') ?>" class="nav-link <?php if (isset($mn_laporan)) echo $mn_laporan ?>">
                <i class="nav-icon fas fa-file"></i>
                <p>
                    Laporan
                </p>
            </a>
        </li>

        <!-- <li class="nav-item">
            <a href="<?= site_url('C_admin/admin') ?>" class="nav-link <?php if (isset($mn_admin)) echo $mn_admin ?>">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    Data Admin
                </p>
            </a>
        </li> -->

        <!-- <li class="nav-item">
            <a href="<?= site_url('C_login/logout') ?>" class="nav-link logout">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>
                    Logout
                </p>
            </a>
        </li> -->

    <?php } else if ($level == 2) { ?>
        <li class="nav-item">
            <a href="<?= site_url('C_perusahaan/index') ?>" class="nav-link <?php if (isset($mn_dashboard)) echo $mn_dashboard ?>">
                <i class="nav-icon fas fa-home"></i>
                <p>
                    Home
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="<?= site_url('C_perusahaan/lowongan_pekerjaan') ?>" class="nav-link <?php if (isset($mn_lowongan_pekerjaan)) echo $mn_lowongan_pekerjaan ?>">
                <i class="nav-icon fas fa-briefcase"></i>
                <p>
                    Data Lowongan Pekerjaan
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="<?= site_url('C_perusahaan/pelatihan') ?>" class="nav-link <?php if (isset($mn_pelatihan)) echo $mn_pelatihan ?>">
                <i class="nav-icon fas fa-laptop-house"></i>
                <p>
                    Data Pelatihan
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="<?= site_url('C_perusahaan/profil_perusahaan') ?>" class="nav-link <?php if (isset($mn_profil)) echo $mn_profil ?>">
                <i class="nav-icon fas fa-user"></i>
                <p>
                    Profil Perusahaan
                </p>
            </a>
        </li>

        <!-- <li class="nav-item">
            <a href="<?= site_url('C_login/logout') ?>" class="nav-link logout">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>
                    Logout
                </p>
            </a>
        </li> -->
    <?php } ?>

</ul>