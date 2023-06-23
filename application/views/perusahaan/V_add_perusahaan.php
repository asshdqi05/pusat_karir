<div class="card">
    <div class="card-header">
        <a class="btn btn-primary" href="<?= site_url('C_admin/perusahaan') ?>"><i class="fas fa-chevron-circle-left"></i> Kembali </a>
    </div>
    <form class="form-horizontal" method="POST" action="<?php echo site_url('C_admin/save_perusahaan') ?>">
        <div class="modal-body">
            <div class="form-group">
                <label>Nama Perusahaan</label>
                <input type="text" name="nama" class="form-control">
            </div>

            <div class="form-group">
                <label>Telepon</label>
                <input type="text" name="telepon" class="form-control">
            </div>

            <div class="form-group">
                <label>Website Perusahaan</label>
                <input type="text" name="website" class="form-control">
            </div>

            <div class="form-group">
                <label>Alamat Perusahaan</label>
                <textarea rows="5" name="alamat" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label>Deskripsi Perusahaan</label>
                <textarea rows="5" name="deskripsi" class="form-control"></textarea>
            </div>

            <hr>
            <div class="form-group">
                <label>Email Perusahaan</label>
                <input type="text" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>SIMPAN</button>
        </div>
    </form>
</div>