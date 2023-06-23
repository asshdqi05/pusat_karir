<div class="card">
    <div class="card-header">
        <?php if ($this->session->userdata('level') == 1) { ?>
            <a class="btn btn-primary" href="<?= site_url('C_admin/lowongan_pekerjaan') ?>"><i class="fas fa-chevron-circle-left"></i> Kembali </a>
        <?php } else if ($this->session->userdata('level') == 2) { ?>
            <a class="btn btn-primary" href="<?= site_url('C_perusahaan/lowongan_pekerjaan') ?>"><i class="fas fa-chevron-circle-left"></i> Kembali </a>
        <?php } ?>
    </div>
    <?php if ($this->session->userdata('level') == 1) { ?>
        <form method="POST" action="<?php echo base_url('C_admin/update_lowongan') ?>" enctype="multipart/form-data">
        <?php } else if ($this->session->userdata('level') == 2) { ?>
            <form method="POST" action="<?php echo base_url('C_perusahaan/update_lowongan') ?>" enctype="multipart/form-data">
            <?php } ?>
            <div class="modal-body">
                <input type="hidden" name="id_lowongan" id="id_lowongan" value="<?= $data_lowongan->id_lowongan ?>">
                <div class="form-group">
                    <label>Nama Perusahaan</label>
                    <?php $p = $this->db->get_where('perusahaan', ['id_perusahaan' => $this->session->userdata('id_profil_user')])->row();
                    if ($this->session->userdata('level') == 1) { ?>
                        <select name="perusahaan" value="<?= $data_lowongan->id_perusahaan ?>" class="form-control">
                            <option disabled>PILIH</option>
                            <?php foreach ($perusahaan as $d) { ?>
                                <option value="<?= $d->id_perusahaan ?>"><?= $d->nama_perusahaan ?></option>
                            <?php } ?>
                        </select>
                    <?php } else if ($this->session->userdata('level') == 2) { ?>
                        <input type="hidden" name="perusahaan" value="<?= $this->session->userdata('id_profil_user') ?>" class="form-control">
                        <input type="text" name="" readonly value="<?= $p->nama_perusahaan ?>" class="form-control">
                    <?php } ?>
                </div>

                <div class="form-group">
                    <label>Nama Lowongan</label>
                    <input type="text" name="judul" class="form-control" value="<?= $data_lowongan->nama_lowongan ?>">
                </div>

                <div class="form-group">
                    <label>Area Penempatan</label>
                    <input type="text" name="area_penempatan" class="form-control" value="<?= $data_lowongan->area_penempatan ?>">
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Syarat Lowongan</label>
                            <div>
                                <button type="button" id="btn_tampil_syarat" class="btn btn-warning">Edit Syarat</button>
                            </div>
                            <br>
                            <div class="row">
                                <input type="text" id="tmbh_syarat" placeholder="Masukan Syarat Lowongan" class="form-control col-10">
                                <button class="btn btn-primary" id="btn_tmb_syarat" type="button">Tambah</button>
                            </div>
                            <br>
                            <div class="col-lg-12 col-md-6 form-group">
                                <div id="dt_syarat">

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Kriteria Lowongan</label>
                            <div>
                                <button type="button" id="btn_tampil_kriteria" class="btn btn-warning">Edit Kriteria</button>
                            </div>
                            <br>
                            <div class="row">
                                <input type="text" id="tmbh_kriteria" placeholder="Masukan Kriteria Lowongan" class="form-control col-10 ">
                                <button class="btn btn-primary" id="btn_tmb_kriteria" type="button">Tambah</button>
                            </div>
                            <br>
                            <div class="col-lg-12 col-md-6 form-group">
                                <div id="dt_kriteria">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Deskripsi Lowongan</label>
                    <textarea rows="5" name="deskripsi_lowongan" class="form-control"><?= $data_lowongan->deskripsi_lowongan ?></textarea>
                </div>

                <div class="form-group">
                    <label>Keterangan Lowongan</label>
                    <textarea rows="5" name="keterangan_lowongan" class="form-control"><?= $data_lowongan->keterangan_lowongan ?></textarea>
                </div>

                <div class="form-group">
                    <label>Batas Lowongan</label>
                    <input type="date" name="batas_lowongan" class="form-control" value="<?= $data_lowongan->batas_lowongan ?>">
                </div>

                <div class="form-group">
                    <label>Gambar Lowongan</label>
                    <input type="file" name="gambar_lowongan" class="form-control">
                    <br>
                    <?php if ($data_lowongan->gambar_lowongan != "") { ?>
                        <img src="<?= base_url('upload/lowongan/') . $data_lowongan->gambar_lowongan ?>" width="300" alt="">
                    <?php } ?>
                    <input type="hidden" readonly name="old_foto" value="<?= $data_lowongan->gambar_lowongan ?>" class="form-control">
                </div>

                <hr>

            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>SIMPAN</button>
            </div>
            </form>
</div>



<div class="modal fade" id="modal_edit_syarat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>
            <form id="edit_sya">
                <div class="modal-body">
                    <input type="hidden" name="id" id="id">
                    <input type="hidden" name="id_l" id="id_l">
                    <input type="text" name="syarat" id="syarat" class="form-control">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="edit_syarat"><i class="fas fa-edit"></i> Edit</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-close"></i>Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="modal_edit_kriteria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>
            <form id="edit_kri">
                <div class="modal-body">
                    <input type="hidden" name="idk" id="idk">
                    <input type="hidden" name="id_lw" id="id_lw">
                    <input type="text" name="kriteria" id="kriteria" class="form-control">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="edit_kriteria"><i class="fas fa-edit"></i> Edit</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-close"></i>Close</button>
                </div>
            </form>
        </div>
    </div>
</div>