<div class="col-md-12">
    <?php echo $this->session->flashdata('msg'); ?>
    <div class="card card-primary card-outline">
        <div class="card-body box-profile">
            <div class="text-center">
                <?php if ($data_perusahaan->logo_perusahaan != "") { ?>
                    <img class="img-circle" width="200" height="200" style="border:10px double gray;" src="<?php echo base_url('upload/perusahaan/') . $data_perusahaan->logo_perusahaan; ?>" alt="User profile picture">
                <?php } else { ?>
                    <img class="img-circle" width="200" height="200" style="border:10px double gray;" src="<?php echo base_url('assets/') ?>dist/img/default.jpg" alt="User profile picture">
                <?php } ?>
            </div>

            <h3 class="profile-username text-center"><?= $data_perusahaan->nama_perusahaan ?></h3>

            <p class="text-muted text-center"><?= $data_perusahaan->website_perusahaan ?></p>

            <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                    <b>Email</b> <a class="float-right"><?= $data_perusahaan->email_perusahaan ?></a>
                </li>
                <li class="list-group-item">
                    <b>Telepon</b> <a class="float-right"><?= $data_perusahaan->no_telepon ?></a>
                </li>
                <li class="list-group-item">
                    <b>Alamat</b> <a class="float-right"><?= $data_perusahaan->alamat_perusahaan ?></a>
                </li>
                <li class="list-group-item">
                    <b>Deskripsi</b> <a class="float-right"><?= $data_perusahaan->deskripsi_perusahaan ?></a>
                </li>
            </ul>

            <a href="<?= site_url('C_perusahaan/edit_profil_perusahaan') ?>" class="btn btn-primary btn-block"><b>Edit Profil</b></a>
        </div>
        <!-- /.card-body -->
    </div>
</div>