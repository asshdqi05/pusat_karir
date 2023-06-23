<div class="col-md-12">
    <div class="card card-primary card-outline">
        <div class="card-header">
            <a href="<?= site_url('C_laporan') ?>" class="btn btn-primary btn-flat">
                <span class="fas fa-arrow-circle-left"></span>
                Kembali
            </a>
        </div>

        <div class="invoice col-sm-12 p-3 mb-3">
            <!-- title row -->
            <div id="div1">
                <div class="row">
                    <div class="col-12">
                        <table>
                            <tr>
                                <td width=100>
                                    <img src="<?= base_url('assets') ?>/dist/img/jayanusa.png" width="100" alt="">
                                </td>
                                <td width=750>
                                    <center>
                                        <h2>
                                            <p> PUSAT KARIR JAYANUSA</p>
                                        </h2>
                                        <p> LAPORAN DATA PENGINPUT TRACER STUDY</p>
                                    </center>
                                </td>
                                <td></td>
                            </tr>
                        </table>
                        <hr>
                        <center>
                            <b>
                            </b>
                        </center>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- info row -->

                <div class="row">
                    <div class="col-sm-2">
                        <div class="col-sm">
                            <p>Tahun Lulus </p>
                        </div>
                    </div>
                    <div class="col-sm-1">
                        <div class="col-sm">
                            <p>:</p>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="col-sm">
                            <strong>
                                <p><?= $tahun ?></>
                            </strong>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-12 table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th>NOBP</th>
                                    <th>Nama</th>
                                    <th>Prodi</th>
                                    <th>No Telepon</th>
                                    <th>Email</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 0;
                                foreach ($laporan as $d) {
                                    $no++;
                                ?>
                                    <tr>
                                        <td width="10" class="text-center"><?php echo $no . '.'; ?></td>
                                        <td><?= $d->no_mahasiswa ?></td>
                                        <td><?= $d->nama ?></td>
                                        <td><?= $d->kode_prodi ?></td>
                                        <td><?= $d->no_telepon ?></td>
                                        <td><?= $d->email ?></td>
                                        <td class="text-center">
                                            <a class="btn btn-xs btn-primary" href="<?= site_url('C_laporan/laporan_ts_per_alumni/' . $d->id_alumni) ?>">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php  } ?>
                            </tbody>

                        </table>
                    </div>
                    <!-- /.col -->
                </div>
            </div>


            <div class="row no-print">
                <div class="col-sm-12">
                    <button onclick="printContent('div1')" class="btn btn-primary float-right"><i class="fa fa-print"></i>Cetak</button>
                </div>

            </div>

        </div>
    </div>
</div>


<script>
    function printContent(el) {
        var restorepage = document.body.innerHTML;
        var printcontent = document.getElementById(el).innerHTML;
        document.body.innerHTML = printcontent;
        window.print();
        document.body.innerHTML = restorepage;
    }
</script>