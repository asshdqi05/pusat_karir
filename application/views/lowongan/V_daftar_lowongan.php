<div class="col-sm-12">
    <div class="card">
        <div class="card-header bg-primary">
            <h3>Daftar Lowongan Pekerjaan</h3>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <th class="text-center">No</th>
                    <th>Nama Lowongan</th>
                    <th>Area Penempatan </th>
                    <th>Nama Perusahaan</th>
                    <th>Batas Waktu Lowongan</th>
                    <th class="text-center">Aksi</th>
                </thead>

                <tbody>
                    <?php $no = 1;
                    foreach ($data_lowongan as $d) {
                    ?>
                        <tr>
                            <td width="50px" class="text-center"><?php echo $no . '.'; ?></td>
                            <td><?= $d->nama_lowongan ?></td>
                            <td><?= $d->area_penempatan ?></td>
                            <td><?= $d->nama_perusahaan ?></td>
                            <td><?= date('d F Y', strtotime($d->batas_lowongan)) ?></td>
                            <td class="text-center" width="100px">
                                <a href="<?php echo site_url('C_alumni/detail_lowongan/' . $d->id_lowongan); ?>" class="btn btn-success btn-xs"><span class="fas fa-eye"></span> Lihat Lowongan</a>
                            </td>
                        </tr>
                    <?php $no++;
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>