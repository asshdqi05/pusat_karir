<?php
$data = $this->db->get_where('alumni', ['id_alumni' => $this->session->userdata('id_profil_user')])->row();
?>
<div class="col-sm-12">
    <div class="card">
        <div class="card-header bg-primary">
            <h3>Lowongan Terbaru</h3>
        </div>

        <!-- /.card-header -->
        <div class="card-body">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <?php foreach ($data_lowongan as $key => $value) { ?>
                        <?php if ($key == 0) { ?>
                            <li data-target="#carouselExampleIndicators" data-slide-to="<?= $key ?>" class="active"></li>
                        <?php } else { ?>
                            <li data-target="#carouselExampleIndicators" data-slide-to="<?= $key ?>" class=""></li>
                        <?php } ?>
                    <?php } ?>

                </ol>
                <div class="carousel-inner">
                    <?php foreach ($data_lowongan as $key => $value) { ?>
                        <?php if ($key == 0) { ?>
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="<?php echo base_url('upload/lowongan/') . $value->gambar_lowongan ?>" alt="<?= $value->nama_lowongan ?>" height="350">
                                <div class="carousel-caption d-none d-md-block bg-dark">
                                    <h5><?= $value->nama_lowongan ?></h5>
                                    <p>
                                    <h3> <a href="<?php echo site_url('C_alumni/detail_lowongan/' . $value->id_lowongan); ?>" class="btn btn-success">Lihat Selengkapnya</a></h3>
                                    </p>
                                </div>
                            </div>
                        <?php } else { ?>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="<?php echo base_url('upload/lowongan/') . $value->gambar_lowongan ?>" alt="<?= $value->nama_lowongan ?>" height="350">
                                <div class="carousel-caption d-none d-md-block bg-dark">
                                    <h5><?= $value->nama_lowongan ?></h5>
                                    <p>
                                    <h3> <a href="<?php echo site_url('C_alumni/detail_lowongan/' . $value->id_lowongan); ?>" class="btn btn-success">Lihat Selengkapnya</a></h3>
                                    </p>
                                </div>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

    <div class="card">
        <div class="card-header bg-primary">
            <h3>Pelatihan Terbaru</h3>
        </div>

        <!-- /.card-header -->
        <div class="card-body">
            <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <?php foreach ($data_pelatihan as $key => $value) { ?>
                        <?php if ($key == 0) { ?>
                            <li data-target="#carouselExampleIndicators1" data-slide-to="<?= $key ?>" class="active"></li>
                        <?php } else { ?>
                            <li data-target="#carouselExampleIndicators1" data-slide-to="<?= $key ?>" class=""></li>
                        <?php } ?>
                    <?php } ?>

                </ol>
                <div class="carousel-inner">
                    <?php foreach ($data_pelatihan as $key => $value) { ?>
                        <?php if ($key == 0) { ?>
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="<?php echo base_url('upload/pelatihan/') . $value->gambar_pelatihan ?>" alt="<?= $value->nama_pelatihan ?>" height="350">
                                <div class="carousel-caption d-none d-md-block bg-dark">
                                    <h5><?= $value->nama_pelatihan ?></h5>
                                    <p>
                                    <h3> <a href="<?php echo site_url('C_alumni/detail_pelatihan/' . $value->id_pelatihan); ?>" class="btn btn-success">Lihat Selengkapnya</a></h3>
                                    </p>
                                </div>
                            </div>
                        <?php } else { ?>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="<?php echo base_url('upload/pelatihan/') . $value->gambar_pelatihan ?>" alt="<?= $value->nama_pelatihan ?>" height="350">
                                <div class="carousel-caption d-none d-md-block bg-dark">
                                    <h5><?= $value->nama_pelatihan ?></h5>
                                    <p>
                                    <h3> <a href="<?php echo site_url('C_alumni/detail_lowongan/' . $value->id_pelatihan); ?>" class="btn btn-success">Lihat Selengkapnya</a></h3>
                                    </p>
                                </div>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>