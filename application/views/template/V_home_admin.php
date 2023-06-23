<div class="col-md-12">
    <div class="card card-default">
        <div class="card-header bg-primary">
            <h1 class="card-title">

            </h1>
        </div>
        <!-- /.card-header -->
        <div class="card-body">

            <div class="alert alert-dark alert-dismissible">

                <center>
                    <h1> Pusat Karir STMIK - AMIK Jayanusa <img src="<?= base_url('assets') ?>/dist/img/jayanusa.png" width="50" alt=""></h1>
                </center>
            </div>
            <div class="row">
                <div class="col-lg-6 col-6">
                    <!-- small box -->
                    <div class="small-box bg-primary">
                        <div class="inner">
                            <h3><?= $data_alumni->num_rows() ?></h3>

                            <p>Jumlah Alumni Terdaftar </p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user-graduate"></i>
                        </div>
                        <a href="<?= site_url('C_admin/alumni') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-6 col-6">
                    <!-- small box -->
                    <div class="small-box bg-primary">
                        <div class="inner">
                            <h3><?= $data_perusahaan->num_rows() ?></h3>

                            <p>Jumlah Perusahaan Terdaftar </p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-building"></i>
                        </div>
                        <a href="<?= site_url('C_admin/perusahaan') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>

            <div class="row">
                <div class="col-lg-6 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3><?= $data_lowongan->num_rows() ?></h3>

                            <p>Jumlah Lowongan Terdaftar </p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <a href="<?= site_url('C_admin/lowongan_pekerjaan') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-6 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3><?= $data_pelatihan->num_rows() ?></h3>

                            <p>Jumlah Pelatihan Terdaftar </p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-laptop-house"></i>
                        </div>
                        <a href="<?= site_url('C_admin/pelatihan') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
    <div class="card card-default">
        <div class="card-body">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-4 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3><?= $ts->num_rows() ?></h3>

                            <p>Jumlah Penginput Tracer Study</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-tasks"></i>
                        </div>
                        <!-- <a href="<?= site_url('C_admin/lowongan_pekerjaan') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3><?= $sudah_kerja->num_rows() ?></h3>

                            <p>Jumlah Alumni Yang Sudah Bekerja</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <!-- <a href="<?= site_url('C_admin/pelatihan') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3><?= $belum_kerja->num_rows() ?></h3>

                            <p>Jumlah Alumni Yang Belum Bekerja</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user-slash"></i>
                        </div>
                        <!-- <a href="<?= site_url('C_admin/pelatihan') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>