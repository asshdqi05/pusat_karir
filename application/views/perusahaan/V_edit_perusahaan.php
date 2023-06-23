<div class="card">
    <div class="card-header">
        <a class="btn btn-primary" href="<?= site_url('C_admin/perusahaan') ?>"><i class="fas fa-chevron-circle-left"></i> Kembali </a>
    </div>
    <form class="form-horizontal" method="POST" action="<?php echo site_url('C_admin/update_perusahaan') ?>">
        <div class="modal-body">
            <input type="hidden" name="id_perusahaan" class="form-control" value="<?= $data_perusahaan->id_perusahaan ?>">

            <div class="form-group">
                <label>Nama Perusahaan</label>
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
                <label>Password(Masukan Jika Ingin Merubah Password)</label>
                <input type="password" name="password" class="form-control">
                <input type="hidden" name="password_old" class="form-control" value="<?= $data_perusahaan->password ?>">
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary"><i class="fas fa-edit"></i>UPDATE</button>
        </div>
    </form>
</div>