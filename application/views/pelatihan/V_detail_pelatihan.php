<div class="container-fluid">

    <a class="btn btn-dark btn-block mb-3 col-sm-2" href="<?= site_url('C_alumni/pelatihan') ?>"><i class="fas fa-chevron-circle-left"></i> Kembali </a>
    <div class="row">
        <div class="col-md-3">
            <!-- Profile Image -->
            <div class="card card-primary">
                <div class="card-header bg-primary">
                    <h3 class="card-title">Tentang Perusahaan</h3>
                </div>
                <div class="card-body box-profile">
                    <div class="text-center">
                        <img class="img-circle" width="100" height="100" style="border:10px double gray;" src="<?= base_url('upload/perusahaan/') . $data_pelatihan['logo_perusahaan'] ?>" alt="User profile picture">
                    </div>

                    <h3 class="profile-username text-center"><?= $data_pelatihan['nama_perusahaan'] ?></h3>

                    <p class="text-muted text-center"><?= $data_pelatihan['website_perusahaan'] ?></p>

                    <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                            <b>Email</b> <a class="float-right"><?= $data_pelatihan['email_perusahaan'] ?></a>
                        </li>
                        <li class="list-group-item">
                            <b>Telepon</b> <a class="float-right"><?= $data_pelatihan['no_telepon'] ?></a>
                        </li>
                        <li class="list-group-item">
                            <b>Alamat</b> <a class="float-right"><?= $data_pelatihan['alamat_perusahaan'] ?></a>
                        </li>
                        <li class="list-group-item">
                            <b>Deskripsi</b> <a class="float-right"><?= $data_pelatihan['deskripsi_perusahaan'] ?></a>
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
                    <h4><?= $data_pelatihan['nama_pelatihan'] ?></h4>
                </div><!-- /.card-header -->
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="activity">
                            <!-- Post -->
                            <div class="post">
                                <img class="d-block w-100" src="<?php echo base_url('upload/pelatihan/') . $data_pelatihan['gambar_pelatihan'] ?>" height="350">
                            </div>
                            <div class="post">
                                <div class="user-block">
                                    <a href="#">
                                        <h5>Tanggal & Waktu Pelatihan</h5>
                                    </a>
                                </div>
                                <p>
                                    Tanggal : <?= date('d F Y', strtotime($data_pelatihan['tanggal_pelatihan'])) ?>
                                </p>
                                <p>
                                    Waktu : <?= $data_pelatihan['jam_pelatihan'] ?>
                                </p>
                            </div>
                            <div class="post">
                                <div class="user-block">
                                    <a href="#">
                                        <h5>Lokasi Pelatihan</h5>
                                    </a>
                                </div>
                                <p>
                                    <?= $data_pelatihan['lokasi_pelatihan'] ?>
                                </p>
                            </div>
                            <div class="post">
                                <div class="user-block">
                                    <a href="#">
                                        <h5>Contact Person</h5>
                                    </a>
                                </div>
                                <p>
                                    <?= $data_pelatihan['contact_person'] ?>
                                </p>
                            </div>
                            <?php $cek = $this->db->get_where('daftar_pelatihan', ['id_pelatihan' => $data_pelatihan['id_pelatihan'], 'id_alumni' => $data_alumni->id_alumni]) ?>
                            <div class="post">
                                <div class="user-block">
                                    <?php if ($cek->num_rows() == 0) { ?>
                                        <a href="<?= base_url('C_alumni/daftar_pelatihan/' . $data_pelatihan['id_pelatihan']) ?>" class="btn btn-block btn-success">Daftar Pelatihan</a>
                                    <?php } else { ?>
                                        <a href="" class="btn btn-block btn-success disabled">Anda Sudah Mendaftar Pelatihan ini</a>
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