<div class="col-md-12">
    <div class="card card-primary card-outline">
        <div class="card-body box-profile">
            <div class="text-center">
                <?php if ($data_alumni->foto_alumni != "") { ?>
                    <img class="img-circle" width="200px" height="200px" style="border:10px double gray;" src="<?php echo base_url('upload/alumni/') . $data_alumni->foto_alumni; ?>" alt="User profile picture">
                <?php } else { ?>
                    <img class="img-circle" width="200px" height="200px" style="border:10px double gray;" src="<?php echo base_url('assets/') ?>dist/img/default.jpg" alt="User profile picture">
                <?php } ?>
            </div>

            <h3 class="profile-username text-center"><?= $data_alumni->nama ?></h3>

            <p class="text-muted text-center"><?= $data_alumni->nobp ?></p>

            <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                    <b>Email</b> <a class="float-right"><?= $data_alumni->email ?></a>
                </li>
                <li class="list-group-item">
                    <b>Telepon</b> <a class="float-right"><?= $data_alumni->nohp ?></a>
                </li>
                <li class="list-group-item">
                    <b>Alamat</b> <a class="float-right"><?= $data_alumni->alamat ?></a>
                </li>
                <li class="list-group-item">
                    <b>Jurusan</b> <a class="float-right"><?= $data_alumni->nama_jurusan ?></a>
                </li>
                <li class="list-group-item">
                    <b>Tahun Lulus</b> <a class="float-right"><?= $data_alumni->tahun_lulus ?></a>
                </li>
            </ul>

            <a href="<?= site_url('C_alumni/edit_profil_alumni') ?>" class="btn btn-primary btn-block"><b>Edit Profil</b></a>
        </div>
        <!-- /.card-body -->
    </div>
</div>