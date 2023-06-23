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
                                        <p> LAPORAN DAFTAR PERUSAHAAN</p>
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
                    <div class="col-12 table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th>Nama</th>
                                    <th>No Telepon</th>
                                    <th>Email</th>
                                    <th>Website</th>
                                    <th>Alamat</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 0;
                                foreach ($laporan as $d) {
                                    $no++;

                                ?>
                                    <tr>
                                        <td width="10" class="text-center"><?php echo $no . '.'; ?></td>
                                        <td><?= $d->nama_perusahaan ?></td>
                                        <td><?= $d->no_telepon ?></td>
                                        <td><?= $d->email_perusahaan  ?></td>
                                        <td><?= $d->website_perusahaan  ?></td>
                                        <td><?= $d->alamat_perusahaan  ?></td>
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