<div class="card">
    <div class="card-header">
        <?php if ($this->session->userdata('level') == 1) { ?>
            <a class="btn btn-primary" href="<?= site_url('C_admin/lowongan_pekerjaan') ?>"><i class="fas fa-chevron-circle-left"></i> Kembali </a>
        <?php } else if ($this->session->userdata('level') == 2) { ?>
            <a class="btn btn-primary" href="<?= site_url('C_perusahaan/lowongan_pekerjaan') ?>"><i class="fas fa-chevron-circle-left"></i> Kembali </a>
        <?php } ?>
    </div>


    <?php if ($this->session->userdata('level') == 1) { ?>
        <form method="POST" enctype="multipart/form-data" action="<?php echo site_url('C_admin/save_lowongan') ?>" id="formv">
        <?php } else if ($this->session->userdata('level') == 2) { ?>
            <form method="POST" enctype="multipart/form-data" action="<?php echo site_url('C_perusahaan/save_lowongan') ?>" id="formv">
            <?php } ?>

            <div class="modal-body">
                <div class="form-group">
                    <label>Nama Perusahaan</label>
                    <?php $p = $this->db->get_where('perusahaan', ['id_perusahaan' => $this->session->userdata('id_profil_user')])->row();
                    if ($this->session->userdata('level') == 1) { ?>
                        <select name="perusahaan" class="form-control">
                            <option disabled selected>PILIH</option>
                            <?php foreach ($perusahaan as $d) { ?>
                                <option value="<?= $d->id_perusahaan ?>"><?= $d->nama_perusahaan ?></option>
                            <?php } ?>
                        </select>
                    <?php } else if ($this->session->userdata('level') == 2) { ?>
                        <input type="hidden" name="perusahaan" value="<?= $this->session->userdata('id_profil_user') ?>" class="form-control">
                        <input type="text" name="judul" readonly value="<?= $p->nama_perusahaan ?>" class="form-control">
                    <?php } ?>
                </div>

                <div class="form-group">
                    <label>Nama Lowongan</label>
                    <input type="text" name="judul" class="form-control">
                </div>

                <div class="form-group">
                    <label>Area Penempatan</label>
                    <input type="text" name="area_penempatan" class="form-control">
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Syarat Lowongan</label>
                            <div class="row">
                                <input type="text" id="syarat" placeholder="Masukan Syarat Lowongan" class="form-control col-10">
                                <button class="btn btn-primary" id="btn_syarat" type="button">Tambah</button>
                            </div>
                            <br>
                            <div class="col-lg-12 col-md-6 form-group">
                                <div id="data_syarat">

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Kriteria Lowongan</label>
                            <div class="row">
                                <input type="text" id="kriteria" placeholder="Masukan Kriteria Lowongan" class="form-control col-10 ">
                                <button class="btn btn-primary" id="btn_kriteria" type="button">Tambah</button>
                            </div>
                            <br>
                            <div class="col-lg-12 col-md-6 form-group">
                                <div id="data_kriteria">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Deskripsi Lowongan</label>
                    <textarea rows="5" name="deskripsi_lowongan" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <label>Keterangan Lowongan</label>
                    <textarea rows="5" name="keterangan_lowongan" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <label>Batas Lowongan</label>
                    <input type="date" name="batas_lowongan" class="form-control">
                </div>

                <div class="form-group">
                    <label>Gambar Lowongan</label>
                    <input type="file" name="gambar_lowongan" class="form-control">
                </div>

                <hr>

            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>SIMPAN</button>
            </div>
            </form>
</div>