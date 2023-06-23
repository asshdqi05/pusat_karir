<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <a class="btn btn-primary" href="<?= site_url('C_perusahaan/pelatihan') ?>"><i class="fas fa-chevron-circle-left"></i> Kembali </a>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <th class="text-center">No</th>
                        <th>Nama pelatihan</th>
                        <th>Nama Pendaftar </th>
                        <th>Nohp</th>
                        <th>Email</th>
                    </thead>

                    <tbody>
                        <?php $no = 1;
                        foreach ($data_pelamar as $d) {
                        ?>
                            <tr>
                                <td width="50px" class="text-center"><?php echo $no . '.'; ?></td>
                                <td><?= $d->nama_pelatihan ?></td>
                                <td><?= $d->nama ?></td>
                                <td><?= $d->nohp ?></td>
                                <td><?= $d->email ?></td>
                            </tr>
                        <?php $no++;
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>