<div class="container">
    <div class="card">
        <div class="card-header bg-primary">
            <h3 class="card-title">Laporan</h3>
        </div>
        <div class="card-body">
            <div class="row no-gutters">

                <div class="col-md-3">
                    <form method="POST" action="<?php echo site_url('C_laporan/laporan_data_lulusan') ?>">
                        <table>
                            <tr>
                                <div class="col-md">
                                    <div class="card card-solid">
                                        <div class="card-header bg-primary">
                                            <div class="card-title">Laporan Data Lulusan</div>
                                        </div>
                                        <div class="card-body">
                                            <div>
                                                <select class="chosen-select form-control" name="tahun" required>
                                                    <option disabled selected>Pilih Tahun Lulus</option>
                                                    <?php
                                                    $now = date('Y');
                                                    for ($a = 2000; $a <= $now; $a++) {
                                                        echo "<option value='$a'>$a</option>";
                                                    } ?>
                                                </select>
                                                <br>
                                                <select class="chosen-select form-control" name="jurusan" required>
                                                    <option disabled selected>Pilih Jurusan</option>
                                                    <?php
                                                    $jurusan = $this->db->get('jurusan')->result();
                                                    foreach ($jurusan as $d) {
                                                    ?>
                                                        <option value="<?= $d->id_jurusan ?>"><?= $d->nama_jurusan ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <br>
                                            <div class="col-xs">
                                                <button type="submit" class="btn btn-block btn-primary"><i class="fa fa-print"></i> Cetak</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </tr>
                        </table>
                    </form>
                </div>

                <div class="col-md-3">
                    <form method="POST" action="<?php echo site_url('C_laporan/laporan_daftar_perusahaan') ?>">
                        <table>
                            <tr>
                                <div class="col-md">
                                    <div class="card card-solid ">
                                        <div class="card-header bg-primary">
                                            <div class="card-title">Laporan Daftar Perusahaan</div>
                                        </div>
                                        <div class="card-body">
                                            <div class="col-xs">
                                                <button type="submit" class="btn btn-block btn-primary"><i class="fa fa-print"></i> Cetak</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </tr>
                        </table>
                    </form>
                </div>

                <div class="col-md-3">
                    <form method="POST" action="<?php echo site_url('C_laporan/laporan_lowongan_pekerjaan') ?>">
                        <table>
                            <tr>
                                <div class="col-md">
                                    <div class="card card-solid">
                                        <div class="card-header bg-primary">
                                            <div class="card-title">Laporan Daftar Lowongan Pekerjaan</div>
                                        </div>
                                        <div class="card-body">
                                            <div>
                                                <select class="chosen-select form-control" name="tahun" required>
                                                    <option disabled selected>Pilih Tahun</option>
                                                    <?php
                                                    $now = date('Y');
                                                    for ($a = 2000; $a <= $now; $a++) {
                                                        echo "<option value='$a'>$a</option>";
                                                    } ?>
                                                </select>
                                            </div>
                                            <br>
                                            <div class="col-xs">
                                                <button type="submit" class="btn btn-block btn-primary"><i class="fa fa-print"></i> Cetak</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </tr>
                        </table>
                    </form>
                </div>

                <div class="col-md-3">
                    <form method="POST" action="<?php echo site_url('C_laporan/laporan_data_penginput_tracer_study') ?>">
                        <table>
                            <tr>
                                <div class="col-md">
                                    <div class="card card-solid">
                                        <div class="card-header bg-primary">
                                            <div class="card-title">Laporan Data Penginput Tracer Study</div>
                                        </div>
                                        <div class="card-body">
                                            <div>
                                                <select class="chosen-select form-control" name="tahun" required>
                                                    <option disabled selected>Pilih Tahun Lulus</option>
                                                    <?php
                                                    $now = date('Y');
                                                    for ($a = 2000; $a <= $now; $a++) {
                                                        echo "<option value='$a'>$a</option>";
                                                    } ?>
                                                </select>
                                            </div>
                                            <br>
                                            <div class="col-xs">
                                                <button type="submit" class="btn btn-block btn-primary"><i class="fa fa-print"></i> Cetak</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </tr>
                        </table>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>