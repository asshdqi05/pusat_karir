<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header bg-primary">
                <h3>Daftar Pelatihan</h3>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Perusahaan</th>
                            <th>Nama Pelatihan</th>
                            <th>Tanggal Pelatihan</th>
                            <th>Jam Pelatihan</th>
                            <th>Lokasi Pelatihan</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 0;
                        foreach ($data_pelatihan as $p) {
                            $no++;
                        ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $p['nama_perusahaan']; ?></td>
                                <td><?php echo $p['nama_pelatihan']; ?></td>
                                <td><?php echo $p['tanggal_pelatihan']; ?></td>
                                <td><?php echo $p['jam_pelatihan']; ?></td>
                                <td><?php echo $p['lokasi_pelatihan']; ?></td>
                                <td class="text-center" width="100px">
                                    <a href="<?php echo site_url('C_alumni/detail_pelatihan/' . $p['id_pelatihan']); ?>" class="btn btn-success btn-xs"><span class="fas fa-eye"></span> Lihat Pelatihan</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>