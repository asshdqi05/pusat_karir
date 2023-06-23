<div class="col-md-12">
    <div class="card">
        <form method="POST" enctype="multipart/form-data" action="<?php echo site_url('C_alumni/update_profil_alumni') ?>">
            <div class="modal-body">
                <div class="form-group">
                    <label>Nama alumni</label>
                    <input type="hidden" name="id_alumni" class="form-control" value="<?= $data_alumni->id_alumni ?>">
                    <input type="text" name="nama" class="form-control" value="<?= $data_alumni->nama ?>">
                </div>

                <div class="form-group">
                    <label>NOBP</label>
                    <input type="text" name="nobp" class="form-control" value="<?= $data_alumni->nobp ?>">
                </div>

                <div class="form-group">
                    <label>Jenis Kelamin :</label>
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="icheck-primary d-inline">
                                <input type="radio" id="radioPrimary1" value="1" name="jk" <?php if ($data_alumni->jenis_kelamin == '1') echo 'checked' ?>>
                                <label for="radioPrimary1">
                                    Laki Laki
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="icheck-primary d-inline">
                                <input type="radio" id="radioPrimary3" value="2" name="jk" <?php if ($data_alumni->jenis_kelamin == '2') echo 'checked' ?>>
                                <label for="radioPrimary3">
                                    Perempuan
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>Telepon</label>
                    <input type="text" name="telepon" class="form-control" value="<?= $data_alumni->nohp ?>">
                </div>

                <div class="form-group">
                    <label>Email alumni</label>
                    <input type="text" name="email" class="form-control" value="<?= $data_alumni->email ?>">
                </div>

                <div class="form-group">
                    <label>Alamat alumni</label>
                    <textarea rows="5" name="alamat" class="form-control"><?= $data_alumni->alamat ?></textarea>
                </div>

                <div class="form-group">
                    <label>Program Studi</label>
                    <select name="jurusan" class="form-control" value="<?= $data_alumni->id_jurusan ?>">
                        <option disabled> - PILIH - </option>
                        <?php
                        $jurusan = $this->db->get('jurusan')->result();
                        foreach ($jurusan as $d) {
                        ?>
                            <option value="<?= $d->id_jurusan ?>"><?= $d->nama_jurusan ?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Tahun Lulus</label>
                    <select name="tahun_lulus" value="<?= $data_alumni->tahun_lulus ?>" class="form-control">
                        <option disabled> - PILIH TAHUN - </option>
                        <?php
                        $now = date('Y');
                        for ($a = 2000; $a <= $now; $a++) {
                            echo "<option value='$a'>$a</option>";
                        } ?>
                    </select>
                </div>

                <hr>
                <input type="hidden" name="id_user" class="form-control" value="<?= $data_alumni->id_user ?>">
                <div class="form-group">
                    <label>Password (Masukan Jika Ingin Merubah Password)</label>
                    <input type="password" name="password" class="form-control">
                    <input type="hidden" name="password_old" class="form-control" value="<?= $data_alumni->password ?>">
                </div>


                <label>Foto alumni</label>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="custom-file">
                                    <input type="file" name="foto_alumni" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <?php if ($data_alumni->foto_alumni != "") { ?>
                                    <img src="<?= base_url('upload/alumni/') . $data_alumni->foto_alumni ?>" width="300" alt="">
                                <?php } ?>
                                <input type="hidden" readonly name="old_foto" value="<?= $data_alumni->foto_alumni ?>" class="form-control">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Edit</button>
                <a href="<?= site_url('C_alumni/profil') ?>" class="btn btn-danger"><i class="fa fa-close"></i> Batal</a>
            </div>
        </form>
    </div>
</div>