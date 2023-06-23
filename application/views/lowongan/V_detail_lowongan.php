<div class="container-fluid">

    <a class="btn btn-dark btn-block mb-3 col-sm-2" href="<?= site_url('C_alumni/lowongan') ?>"><i class="fas fa-chevron-circle-left"></i> Kembali </a>
    <div class="row">
        <div class="col-md-3">
            <!-- Profile Image -->
            <div class="card card-primary">
                <div class="card-header bg-primary">
                    <h3 class="card-title">Tentang Perusahaan</h3>
                </div>
                <div class="card-body box-profile">
                    <div class="text-center">
                        <img class="img-circle" width="100" height="100" style="border:10px double gray;" src="<?= base_url('upload/perusahaan/') . $data_lowongan->logo_perusahaan ?>" alt="User profile picture">
                    </div>

                    <h3 class="profile-username text-center"><?= $data_lowongan->nama_perusahaan ?></h3>

                    <p class="text-muted text-center"><?= $data_lowongan->website_perusahaan ?></p>

                    <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                            <b>Email</b> <a class="float-right"><?= $data_lowongan->email_perusahaan ?></a>
                        </li>
                        <li class="list-group-item">
                            <b>Telepon</b> <a class="float-right"><?= $data_lowongan->no_telepon ?></a>
                        </li>
                        <li class="list-group-item">
                            <b>Alamat</b> <a class="float-right"><?= $data_lowongan->alamat_perusahaan ?></a>
                        </li>
                        <li class="list-group-item">
                            <b>Deskripsi</b> <a class="float-right"><?= $data_lowongan->deskripsi_perusahaan ?></a>
                        </li>
                    </ul>

                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
            <div class="card">
                <div class="card-header bg-primary p-2">
                    <h4><?= $data_lowongan->nama_lowongan ?></h4>
                </div><!-- /.card-header -->
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="activity">
                            <!-- Post -->
                            <div class="post">
                                <img class="d-block w-100" src="<?php echo base_url('upload/lowongan/') . $data_lowongan->gambar_lowongan ?>" height="350">
                            </div>
                            <div class="post">
                                <div class="user-block">
                                    <a href="#">
                                        <h5>Deskripsi</h5>
                                    </a>
                                </div>
                                <p>
                                    <?= $data_lowongan->deskripsi_lowongan ?>
                                </p>
                            </div>
                            <div class="post">
                                <div class="user-block">
                                    <a href="#">
                                        <h5>Area Penempatan</h5>
                                    </a>
                                </div>
                                <p>
                                    <?= $data_lowongan->area_penempatan ?>
                                </p>
                            </div>
                            <div class="post">
                                <div class="user-block">
                                    <a href="#">
                                        <h5>Keterangan</h5>
                                    </a>
                                </div>
                                <p>
                                    <?= $data_lowongan->keterangan_lowongan ?>
                                </p>
                            </div>
                            <div class="post">
                                <div class="user-block">
                                    <a href="#">
                                        <h5>Syarat & Kriteria</h5>
                                    </a>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <p><strong>Syarat Lowongan</strong></p>
                                        <?php foreach ($data_syarat as $s) : ?>

                                            <i class="far fa-circle text-danger"></i>
                                            <?= $s->syarat ?>
                                            <br>

                                        <?php endforeach ?>
                                    </div>
                                    <div class="col-6">
                                        <p><strong>Kriteria Lowongan</strong></p>
                                        <?php foreach ($data_kriteria as $k) : ?>

                                            <i class="far fa-circle text-primary"></i>
                                            <?= $k->kriteria ?>
                                            <br>

                                        <?php endforeach ?>
                                    </div>

                                </div>
                            </div>
                            <div class="post">
                                <div class="user-block">
                                    <a href="#">
                                        <h5>Batas Lowongan</h5>
                                    </a>
                                </div>
                                <p>
                                    <?= date('d F Y', strtotime($data_lowongan->batas_lowongan)) ?>
                                </p>
                            </div>
                            <?php $cek = $this->db->get_where('daftar_lowongan', ['id_lowongan' => $data_lowongan->id_lowongan, 'id_alumni' => $data_alumni->id_alumni]) ?>
                            <div class="post">
                                <div class="user-block">
                                    <?php if ($cek->num_rows() == 0) { ?>
                                        <a href="<?= base_url('C_alumni/daftar_lowongan/' . $data_lowongan->id_lowongan) ?>" class="btn btn-block btn-success">Daftar Lowongan</a>
                                    <?php } else { ?>
                                        <a href="" class="btn btn-block btn-success disabled">Anda Sudah Mendaftar Lowongan ini.</a>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.tab-content -->
                </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div>