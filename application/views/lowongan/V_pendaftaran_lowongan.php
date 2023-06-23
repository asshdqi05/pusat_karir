<div class="col-md-12">
    <div class="card">
        <div class="card-header bg-primary">
            <h2>Data Lowongan</h2>
        </div>
        <div class="card-body">
            <div class="tab-content">
                <div class="tab-pane active" id="activity">
                    <!-- Post -->
                    <div class="post">
                        <div class="user-block">
                            <a href="#">
                                <h5>Nama Lowongan</h5>
                            </a>
                        </div>
                        <p>
                            <?= $data_lowongan->nama_lowongan ?>
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
                </div>
            </div>
        </div>
    </div>


    <div class="card">
        <div class="card-header bg-primary">
            <h2>Data Diri</h2>
        </div>
        <form method="POST" enctype="multipart/form-data" action="<?php echo site_url('C_alumni/save_daftar_lowongan') ?>">
            <div class="card-body">
                <div class="form-group">
                    <label>Nama</label>
                    <input type="hidden" name="id_alumni" class="form-control" value="<?= $data_alumni->id_alumni ?>">
                    <input type="hidden" name="id_lowongan" class="form-control" value="<?= $data_lowongan->id_lowongan ?>">
                    <input type="hidden" name="id_perusahaan" class="form-control" value="<?= $data_lowongan->id_perusahaan ?>">
                    <input type="text" readonly name="nama" class="form-control" value="<?= $data_alumni->nama ?>">
                </div>

                <div class="form-group">
                    <label>Telepon</label>
                    <input type="text" readonly name="telepon" class="form-control" value="<?= $data_alumni->nohp ?>">
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="text" readonly name="email" class="form-control" value="<?= $data_alumni->email ?>">
                </div>
                <label>Upload Syarat</label>
                <small>*semua persyaratan digabung menjadi satu file.</small>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="custom-file">
                                    <input type="file" name="file_lowongan" class="custom-file-input" id="customFile" required>
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary"><i class="fas fa-pen-square"></i> Daftar Lowongan</button>
                <a href="<?= site_url('C_alumni/detail_lowongan/' . $data_lowongan->id_lowongan) ?>" class="btn btn-danger"><i class="fa fa-close"></i> Batal</a>
            </div>
        </form>
    </div>
</div>