<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <?php if ($this->session->userdata('level') == 1) { ?>
                    <a class="btn btn-primary" href="<?= site_url('C_admin/lowongan_pekerjaan') ?>"><i class="fas fa-chevron-circle-left"></i> Kembali </a>
                <?php } else if ($this->session->userdata('level') == 2) { ?>
                    <a class="btn btn-primary" href="<?= site_url('C_perusahaan/lowongan_pekerjaan') ?>"><i class="fas fa-chevron-circle-left"></i> Kembali </a>
                <?php } ?>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <th class="text-center">No</th>
                        <th>Nama Lowongan</th>
                        <th>Nama Pelamar </th>
                        <th>Nohp</th>
                        <th>Email</th>
                        <th class="text-center">Persyaratan</th>
                    </thead>

                    <tbody>
                        <?php $no = 1;
                        foreach ($data_pelamar as $d) {
                        ?>
                            <tr>
                                <td width="50px" class="text-center"><?php echo $no . '.'; ?></td>
                                <td><?= $d->nama_lowongan ?></td>
                                <td><?= $d->nama ?></td>
                                <td><?= $d->nohp ?></td>
                                <td><?= $d->email ?></td>
                                <td class="text-center" width="100px">
                                    <?php if ($this->session->userdata('level') == 1) { ?>
                                        <a class="btn btn-xs btn-success" href="<?= site_url('C_admin/download_syarat/' . $d->id_pendaftaran); ?>">Download
                                            <i class="fas fa-download"></i>
                                        </a>
                                    <?php } else if ($this->session->userdata('level') == 2) { ?>
                                        <a class="btn btn-xs btn-success" href="<?= site_url('C_perusahaan/download_syarat/' . $d->id_pendaftaran); ?>">Download
                                            <i class="fas fa-download"></i>
                                        </a>
                                    <?php } ?>
                                </td>
                            </tr>
                        <?php $no++;
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>