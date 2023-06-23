<div class="col-md-12">
    <div class="card">
        <div class="card-header bg-primary">
            <h2>Data Peatihan</h2>
        </div>
        <div class="card-body">
            <div class="tab-content">
                <div class="tab-pane active" id="activity">
                    <!-- Post -->
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
                </div>
            </div>
        </div>
    </div>


    <div class="card">
        <div class="card-header bg-primary">
            <h2>Data Diri</h2>
        </div>
        <form method="POST" enctype="multipart/form-data" action="<?php echo site_url('C_alumni/save_daftar_pelatihan') ?>">
            <div class="card-body">
                <div class="form-group">
                    <label>Nama</label>
                    <input type="hidden" name="id_alumni" class="form-control" value="<?= $data_alumni->id_alumni ?>">
                    <input type="hidden" name="id_pelatihan" class="form-control" value="<?= $data_pelatihan['id_pelatihan'] ?>">
                    <input type="hidden" name="id_perusahaan" class="form-control" value="<?= $data_pelatihan['id_perusahaan'] ?>">
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
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary"><i class="fas fa-pen-square"></i> Daftar pelatihan</button>
                <a href="<?= site_url('C_alumni/detail_pelatihan/' . $data_pelatihan['id_pelatihan']) ?>" class="btn btn-danger"><i class="fa fa-close"></i> Batal</a>
            </div>
        </form>
    </div>
</div>