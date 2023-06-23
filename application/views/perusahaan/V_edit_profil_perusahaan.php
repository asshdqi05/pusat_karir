<div class="card">
    <form method="POST" enctype="multipart/form-data" action="<?php echo site_url('C_perusahaan/update_profil_perusahaan') ?>">
        <div class="modal-body">
            <div class="form-group">
                <label>Nama Perusahaan</label>
                <input type="hidden" name="id_perusahaan" class="form-control" value="<?= $data_perusahaan->id_perusahaan ?>">
                <input type="text" name="nama" class="form-control" value="<?= $data_perusahaan->nama_perusahaan ?>">
            </div>

            <div class="form-group">
                <label>Telepon</label>
                <input type="text" name="telepon" class="form-control" value="<?= $data_perusahaan->no_telepon ?>">
            </div>



            <div class="form-group">
                <label>Website Perusahaan</label>
                <input type="text" name="website" class="form-control" value="<?= $data_perusahaan->website_perusahaan ?>">
            </div>

            <div class="form-group">
                <label>Alamat Perusahaan</label>
                <textarea rows="5" name="alamat" class="form-control"><?= $data_perusahaan->alamat_perusahaan ?></textarea>
            </div>

            <div class="form-group">
                <label>Deskripsi Perusahaan</label>
                <textarea rows="5" name="deskripsi" class="form-control"><?= $data_perusahaan->deskripsi_perusahaan ?></textarea>
            </div>


            <hr>
            <input type="hidden" name="id_user" class="form-control" value="<?= $data_perusahaan->id_user ?>">
            <div class="form-group">
                <label>Email Perusahaan</label>
                <input type="text" name="email" class="form-control" value="<?= $data_perusahaan->email_perusahaan ?>">
            </div>
            <div class="form-group">
                <label>Password (Masukan Jika Ingin Merubah Password)</label>
                <input type="password" name="password" class="form-control">
                <input type="hidden" name="password_old" class="form-control" value="<?= $data_perusahaan->password ?>">
            </div>


            <label>Logo Perusahaan</label>
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="custom-file">
                                <input type="file" name="logo_perusahaan" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <?php if ($data_perusahaan->logo_perusahaan != "") { ?>
                                <img src="<?= base_url('upload/perusahaan/') . $data_perusahaan->logo_perusahaan ?>" width="300" alt="">
                            <?php } ?>
                            <input type="hidden" readonly name="old_foto" value="<?= $data_perusahaan->logo_perusahaan ?>" class="form-control">
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Edit</button>
            <a href="<?= site_url('C_perusahaan/profil_perusahaan') ?>" class="btn btn-danger"><i class="fa fa-close"></i> Batal</a>
        </div>
    </form>
</div>