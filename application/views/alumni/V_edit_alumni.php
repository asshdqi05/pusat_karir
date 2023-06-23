<div class="card">
    <div class="card-header">
        <a class="btn btn-primary" href="<?= site_url('C_admin/alumni') ?>"><i class="fas fa-chevron-circle-left"></i> Kembali </a>
    </div>
    <form class="form-horizontal" method="POST" action="<?php echo site_url('C_admin/update_alumni') ?>">
        <div class="modal-body">
            <input type="hidden" name="id_alumni" class="form-control" value="<?= $data_alumni->id_alumni ?>">
            <div class="form-group">
                <label>NO BP</label>
                <input type="text" name="nobp" class="form-control" value="<?= $data_alumni->nobp ?>">
            </div>

            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" value="<?= $data_alumni->nama ?>">
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
                <label>Email</label>
                <input type="text" name="email" class="form-control" value="<?= $data_alumni->email ?>">
            </div>
            <div class="form-group">
                <label>Telepon</label>
                <input type="text" name="telepon" class="form-control" value="<?= $data_alumni->nohp ?>">
            </div>

            <div class="form-group">
                <label>Alamat</label>
                <textarea rows="5" name="alamat" class="form-control"><?= $data_alumni->alamat ?></textarea>
            </div>

            <div class="form-group">
                <label>Program Studi</label>
                <select name="jurusan" class="form-control" value="<?= $data_alumni->id_jurusan ?>">
                    <option disabled> - PILIH - </option>
                    <?php
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
                <label>Password(Masukan Jika Ingin Merubah Password)</label>
                <input type="password" name="password" class="form-control">
                <input type="hidden" name="password_old" class="form-control" value="<?= $data_alumni->password ?>">
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary"><i class="fas fa-edit"></i>UPDATE</button>
        </div>
    </form>
</div>