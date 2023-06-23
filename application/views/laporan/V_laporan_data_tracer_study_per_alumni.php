<style type="text/css">
    input[type="checkbox"][readonly] {
        pointer-events: none;
    }
</style>
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
                <div class="card card-sm">
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
                    <div class="card-header bg-primary">
                        <h5 class="card-title m-0">f1</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>No BP</label>
                            <input type="text" name="no_mahasiswa" class="form-control" readonly required value="<?= $data_alumni->nobp ?>">
                        </div>
                        <div class="form-group">
                            <label>Tahun Lulus</label>
                            <input type="text" name="tahun_lulus" class="form-control" readonly required value="<?= $data_alumni->tahun_lulus ?>">
                        </div>
                        <div class="form-group">
                            <label>Prodi</label>
                            <input type="text" name="kode_prodi" class="form-control" readonly required value="<?= $data_alumni->nama_jurusan ?>">
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" readonly required value="<?= $data_alumni->nama ?>">
                        </div>
                        <div class="form-group">
                            <label>No Telepon / HP</label>
                            <input type="number" name="no_telepon" class="form-control" readonly required value="<?= $data_alumni->nohp ?>">
                        </div>
                        <div class="form-group">
                            <label>Alamat Email</label>
                            <input type="email" name="email" class="form-control" readonly required value="<?= $f1->email ?>">
                        </div>
                        <div class="form-group">
                            <label>Dimana Anda Bekerja / Berwirausaha sekarang?(Nama Perusahaan)</label>
                            <input type="text" name="pekerjaan" class="form-control" readonly required value="<?= $f1->pekerjaan ?>">
                            <small>* Jika belum bekerja isi dengan: "Tidak / Belum Bekerja"</small>
                        </div>
                    </div>
                </div>

                <div class="card card-sm">
                    <div class="card-header bg-primary">
                        <h5 class="card-title m-0">f2</h5>
                    </div>
                    <div class="card-body">
                        <label style="color: red;">Menurut anda, seberapa besar penekanan pada metode pembelajaran dibawah ini dilaksanakan pada program study anda?</label>
                        <table class="table table-bordered">
                            <tr>
                                <th></th>
                                <th>sangat besar (1)</th>
                                <th>besar (2)</th>
                                <th>cukup besar (3)</th>
                                <th>kurang (4)</th>
                                <th>tidak sama sekali (5)</th>
                            </tr>

                            <tr>
                                <th>Perkuliahan</th>

                                <th class="text-center"><input name="perkuliahan" type="radio" <?php if ($f2->perkuliahan == "1") {
                                                                                                    echo "checked";
                                                                                                } else {
                                                                                                    echo "disabled";
                                                                                                } ?>></th>
                                <th class="text-center"><input name="perkuliahan" type="radio" <?php if ($f2->perkuliahan == "2") {
                                                                                                    echo "checked";
                                                                                                } else {
                                                                                                    echo "disabled";
                                                                                                } ?>></th>
                                <th class="text-center"><input name="perkuliahan" type="radio" <?php if ($f2->perkuliahan == "3") {
                                                                                                    echo "checked";
                                                                                                } else {
                                                                                                    echo "disabled";
                                                                                                } ?>></th>
                                <th class="text-center"><input name="perkuliahan" type="radio" <?php if ($f2->perkuliahan == "4") {
                                                                                                    echo "checked";
                                                                                                } else {
                                                                                                    echo "disabled";
                                                                                                } ?>></th>
                                <th class="text-center"><input name="perkuliahan" type="radio" <?php if ($f2->perkuliahan == "5") {
                                                                                                    echo "checked";
                                                                                                } else {
                                                                                                    echo "disabled";
                                                                                                } ?>></th>
                            </tr>

                            <tr>
                                <th>Demonstrasi</th>
                                <th class="text-center"><input name="demonstrasi" value="1" type="radio" <?php if ($f2->demonstrasi == "1") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                <th class="text-center"><input name="demonstrasi" value="2" type="radio" <?php if ($f2->demonstrasi == "2") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                <th class="text-center"><input name="demonstrasi" value="3" type="radio" <?php if ($f2->demonstrasi == "3") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                <th class="text-center"><input name="demonstrasi" value="4" type="radio" <?php if ($f2->demonstrasi == "4") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                <th class="text-center"><input name="demonstrasi" value="5" type="radio" <?php if ($f2->demonstrasi == "5") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                            </tr>

                            <tr>
                                <th>partisipasi dalam proyek riset</th>
                                <th class="text-center"><input name="partisipasi_dalam_proyek_riset" value="1" type="radio" <?php if ($f2->partisipasi_dalam_proyek_riset == "1") {
                                                                                                                                echo "checked";
                                                                                                                            } else {
                                                                                                                                echo "disabled";
                                                                                                                            } ?>></th>
                                <th class="text-center"><input name="partisipasi_dalam_proyek_riset" value="2" type="radio" <?php if ($f2->partisipasi_dalam_proyek_riset == "2") {
                                                                                                                                echo "checked";
                                                                                                                            } else {
                                                                                                                                echo "disabled";
                                                                                                                            } ?>></th>
                                <th class="text-center"><input name="partisipasi_dalam_proyek_riset" value="3" type="radio" <?php if ($f2->partisipasi_dalam_proyek_riset == "3") {
                                                                                                                                echo "checked";
                                                                                                                            } else {
                                                                                                                                echo "disabled";
                                                                                                                            } ?>></th>
                                <th class="text-center"><input name="partisipasi_dalam_proyek_riset" value="4" type="radio" <?php if ($f2->partisipasi_dalam_proyek_riset == "4") {
                                                                                                                                echo "checked";
                                                                                                                            } else {
                                                                                                                                echo "disabled";
                                                                                                                            } ?>></th>
                                <th class="text-center"><input name="partisipasi_dalam_proyek_riset" value="5" type="radio" <?php if ($f2->partisipasi_dalam_proyek_riset == "5") {
                                                                                                                                echo "checked";
                                                                                                                            } else {
                                                                                                                                echo "disabled";
                                                                                                                            } ?>></th>
                            </tr>

                            <tr>
                                <th>Magang</th>
                                <th class="text-center"><input name="magang" value="1" type="radio" <?php if ($f2->magang == "1") {
                                                                                                        echo "checked";
                                                                                                    } else {
                                                                                                        echo "disabled";
                                                                                                    } ?>></th>
                                <th class="text-center"><input name="magang" value="2" type="radio" <?php if ($f2->magang == "2") {
                                                                                                        echo "checked";
                                                                                                    } else {
                                                                                                        echo "disabled";
                                                                                                    } ?>></th>
                                <th class="text-center"><input name="magang" value="3" type="radio" <?php if ($f2->magang == "3") {
                                                                                                        echo "checked";
                                                                                                    } else {
                                                                                                        echo "disabled";
                                                                                                    } ?>></th>
                                <th class="text-center"><input name="magang" value="4" type="radio" <?php if ($f2->magang == "4") {
                                                                                                        echo "checked";
                                                                                                    } else {
                                                                                                        echo "disabled";
                                                                                                    } ?>></th>
                                <th class="text-center"><input name="magang" value="5" type="radio" <?php if ($f2->magang == "5") {
                                                                                                        echo "checked";
                                                                                                    } else {
                                                                                                        echo "disabled";
                                                                                                    } ?>></th>
                            </tr>

                            <tr>
                                <th>Praktikum</th>
                                <th class="text-center"><input name="praktikum" value="1" type="radio" <?php if ($f2->praktikum == "1") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                <th class="text-center"><input name="praktikum" value="2" type="radio" <?php if ($f2->praktikum == "2") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                <th class="text-center"><input name="praktikum" value="3" type="radio" <?php if ($f2->praktikum == "3") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                <th class="text-center"><input name="praktikum" value="4" type="radio" <?php if ($f2->praktikum == "4") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                <th class="text-center"><input name="praktikum" value="5" type="radio" <?php if ($f2->praktikum == "5") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                            </tr>

                            <tr>
                                <th>Kerja Lapangan</th>
                                <th class="text-center"><input name="kerja_lapangan" value="1" type="radio" <?php if ($f2->kerja_lapangan == "1") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                <th class="text-center"><input name="kerja_lapangan" value="2" type="radio" <?php if ($f2->kerja_lapangan == "2") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                <th class="text-center"><input name="kerja_lapangan" value="3" type="radio" <?php if ($f2->kerja_lapangan == "3") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                <th class="text-center"><input name="kerja_lapangan" value="4" type="radio" <?php if ($f2->kerja_lapangan == "4") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                <th class="text-center"><input name="kerja_lapangan" value="5" type="radio" <?php if ($f2->kerja_lapangan == "5") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                            </tr>

                            <tr>
                                <th>Diskusi</th>
                                <th class="text-center"><input name="diskusi" value="1" type="radio" <?php if ($f2->diskusi == "1") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                <th class="text-center"><input name="diskusi" value="2" type="radio" <?php if ($f2->diskusi == "2") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                <th class="text-center"><input name="diskusi" value="3" type="radio" <?php if ($f2->diskusi == "3") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                <th class="text-center"><input name="diskusi" value="4" type="radio" <?php if ($f2->diskusi == "4") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                <th class="text-center"><input name="diskusi" value="5" type="radio" <?php if ($f2->diskusi == "5") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                            </tr>

                        </table>
                    </div>
                </div>

                <div class="card card-sm">
                    <div class="card-header bg-primary">
                        <h5 class="card-title m-0">f3</h5>
                    </div>
                    <div class="card-body">
                        <label style="color: red;">Kapan anda mulai mencari pekerjaan? Mohon pekerjaan sambilan tidak dimasukkan</label>
                        <div class="col-lg-6">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><input type="radio" name="j_f3" id="f3_1" <?php if ($f3->posisi == "sesudah") {
                                                                                                                    echo "checked";
                                                                                                                    $jawaban = $f3->jawaban;
                                                                                                                } else {
                                                                                                                    echo "disabled";
                                                                                                                    $jawaban = "";
                                                                                                                } ?>>
                                        Kira - kira <input type="number" id="f3-1" name="j_f3" value="<?= $jawaban ?>" class="form-control col-sm-2" disabled>Bulan Sesudah Lulus</span>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="col-lg-6">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><input type="radio" name="j_f3" id="f3_2" <?php if ($f3->posisi == "sebelum") {
                                                                                                                    echo "checked";
                                                                                                                    $jawaban = $f3->jawaban;
                                                                                                                } else {
                                                                                                                    echo "disabled";
                                                                                                                    $jawaban = "";
                                                                                                                } ?>>
                                        Kira - kira <input type="number" id="f3-2" name="j_f3" value="<?= $jawaban ?>" class="form-control col-sm-2" disabled>Bulan Sebelum Lulus</span>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="col-lg-6">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><input name="j_f3" value="tidak mencari pekerjaan" type="radio" id="f3_3" <?php if ($f3->posisi == "tidak mencari pekerjaan") {
                                                                                                                                                    echo "checked";
                                                                                                                                                } else {
                                                                                                                                                    echo "disabled";
                                                                                                                                                } ?>> saya tidak mencari pekerjaan (langsung ke pertanyaan F8)</span>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>


                <span id="f4">
                    <div class="card card-sm">
                        <div class="card-header bg-primary">
                            <h5 class="card-title m-0">f4</h5>
                        </div>
                        <div class="card-body">
                            <?php $a = explode(",", $f4->jawaban); ?>
                            <label style="color: red;">Bagaimana anda mencari pekerjaan tersebut? Jawaban bisa lebih dari 1</label>
                            <div class="col-lg-8">
                                <input name="f4[]" value="melalui iklan dikoran/majalah/brosur" type="checkbox" readonly <?php in_array('melalui iklan dikoran/majalah/brosur', $a) ? print "checked" : ""; ?>> melalui iklan dikoran/majalah/brosur
                                <br>
                                <input name="f4[]" value="melamar ke perusahaan tanpa mengetahui lowongan yang ada" type="checkbox" readonly <?php in_array('melamar ke perusahaan tanpa mengetahui lowongan yang ada', $a) ? print "checked" : ""; ?>> melamar ke perusahaan tanpa mengetahui lowongan yang ada
                                <br>
                                <input name="f4[]" value="pergi ke bursa/pameran kerja" type="checkbox" readonly <?php in_array('pergi ke bursa/pameran kerja', $a) ? print "checked" : ""; ?>> pergi ke bursa/pameran kerja
                                <br>
                                <input name="f4[]" value="mencari lewat internet/iklan online/milis" readonly type="checkbox" <?php in_array('mencari lewat internet/iklan online/milis', $a) ? print "checked" : ""; ?>> mencari lewat internet/iklan online/milis
                                <br>
                                <input name="f4[]" value="dihubungi oleh perusahaan" type="checkbox" readonly <?php in_array('dihubungi oleh perusahaan', $a) ? print "checked" : ""; ?>> dihubungi oleh perusahaan
                                <br>
                                <input name="f4[]" value="menghubungi kemenakertrans" type="checkbox" readonly <?php in_array('menghubungi kemenakertrans', $a) ? print "checked" : ""; ?>> menghubungi kemenakertrans
                                <br>
                                <input name="f4[]" value="menghubungi agen tenaga kerja komersial/swasta" type="checkbox" readonly <?php in_array('menghubungi agen tenaga kerja komersial/swasta', $a) ? print "checked" : ""; ?>> menghubungi agen tenaga kerja komersial/swasta
                                <br>
                                <input name="f4[]" value="memperoleh informasi dari pusat/kantor pengembangan karir fakultas/universitas" type="checkbox" readonly <?php in_array('memperoleh informasi dari pusat/kantor pengembangan karir fakultas/universitas', $a) ? print "checked" : ""; ?>> memperoleh informasi dari pusat/kantor pengembangan karir fakultas/universitas
                                <br>
                                <input name="f4[]" value="menghubungi kantor kemahasiswaan/hubungan alumni" type="checkbox" readonly <?php in_array('menghubungi kantor kemahasiswaan/hubungan alumni', $a) ? print "checked" : ""; ?>> menghubungi kantor kemahasiswaan/hubungan alumni
                                <br>
                                <input name="f4[]" value="membangun jejaring/network sejak masih kuliah" type="checkbox" readonly <?php in_array('membangun jejaring/network sejak masih kuliah', $a) ? print "checked" : ""; ?>> membangun jejaring/network sejak masih kuliah
                                <br>
                                <input name="f4[]" value="membangun bisnis sendiri" type="checkbox" readonly <?php in_array('membangun bisnis sendiri', $a) ? print "checked" : ""; ?>> membangun bisnis sendiri
                                <br>
                                <input name="f4[]" value="melalui penempatan kerja/magang" type="checkbox" readonly <?php in_array('melalui penempatan kerja/magang', $a) ? print "checked" : ""; ?>> melalui penempatan kerja/magang
                                <br>
                                <input name="f4[]" value="bekerja ditempat yang sama dengan tempat kerja semasa kuliah" type="checkbox" readonly <?php in_array('bekerja ditempat yang sama dengan tempat kerja semasa kuliah', $a) ? print "checked" : ""; ?>> bekerja ditempat yang sama dengan tempat kerja semasa kuliah
                                <br>
                                <input name="f4[]" value="lainnya" type="checkbox" readonly <?php in_array('lainnya', $a) ? print "checked" : ""; ?>> Lainnya
                            </div>
                        </div>
                    </div>
                </span>

                <span id="f5">
                    <div class="card card-sm">
                        <div class="card-header bg-primary">
                            <h5 class="card-title m-0">f5</h5>
                        </div>
                        <div class="card-body">
                            <label style="color: red;">berapa bulan waktu yang dihabiskan (sebelum dan sesudah kelulusan) untuk memperoleh pekerjaan pertama?</label>
                            <div class="col-lg-6">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><input type="radio" name="f5r" id="f5_1" <?php if ($f5->posisi == "sesudah") {
                                                                                                                    echo "checked";
                                                                                                                    $jawabanf5 = $f5->jawaban;
                                                                                                                } else {
                                                                                                                    echo "disabled";
                                                                                                                    $jawabanf5 = "";
                                                                                                                } ?>>
                                            Kira - kira <input type="number" id="f5-1" name="j_f5" value="<?= $jawabanf5 ?>" class="form-control col-sm-2" disabled>Bulan Sesudah Lulus Ujian</span>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="col-lg-6">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><input type="radio" name="f5r" id="f5_2" <?php if ($f5->posisi == "sebelum") {
                                                                                                                    echo "checked";
                                                                                                                    $jawabanf5 = $f5->jawaban;
                                                                                                                } else {
                                                                                                                    echo "disabled";
                                                                                                                    $jawabanf5 = "";
                                                                                                                } ?>>
                                            Kira - kira <input type="number" id="f5-2" name="j_f5" value="<?= $jawabanf5 ?>" class="form-control col-sm-2" disabled>Bulan Sebelum Lulus Ujian</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </span>

                <span id="f6">
                    <div class="card card-sm">
                        <div class="card-header bg-primary">
                            <h5 class="card-title m-0">f6</h5>
                        </div>
                        <div class="card-body">
                            <label style="color: red;">Berapa perusahaan/instansi/institusi yang sudah anda lamar (lewat surat/email) sebelum anda memperoleh pekerjaan?</label>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Perusahaan:</label>
                                    <input type="text" value="<?= $f6->perusahaan ?>" readonly name="f6_1" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Instansi:</label>
                                    <input type="text" value="<?= $f6->instansi ?>" readonly name="f6_2" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Institusi:</label>
                                    <input type="text" value="<?= $f6->institusi ?>" readonly name="f6_3" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </span>

                <span id="f7">
                    <div class="card card-sm">
                        <div class="card-header bg-primary">
                            <h5 class="card-title m-0">f7</h5>
                        </div>
                        <div class="card-body">
                            <label style="color: red;">Berapa banyak perusahaan/instansi/institusi yang merespons lamaran anda?</label>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Perusahaan:</label>
                                    <input type="text" value="<?= $f7->perusahaan ?>" readonly name="f7_1" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Instansi:</label>
                                    <input type="text" value="<?= $f7->instansi ?>" readonly name="f7_2" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Institusi:</label>
                                    <input type="text" value="<?= $f7->institusi ?>" readonly name="f7_3" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </span>

                <span id="f7a">
                    <div class="card card-sm">
                        <div class="card-header bg-primary">
                            <h5 class="card-title m-0">f7a</h5>
                        </div>
                        <div class="card-body">
                            <label style="color: red;">berapa banyak perusahaan/instansi/institusi yang mengundang anda untuk wawancara?</label>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Perusahaan:</label>
                                    <input type="text" value="<?= $f7a->perusahaan ?>" readonly name="f7a_1" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Instansi:</label>
                                    <input type="text" value="<?= $f7a->instansi ?>" readonly name="f7a_2" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Institusi:</label>
                                    <input type="text" value="<?= $f7a->institusi ?>" readonly name="f7a_3" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </span>

                <span id="f8">
                    <div class="card card-sm">
                        <div class="card-header bg-primary">
                            <h5 class="card-title m-0">f8</h5>
                        </div>
                        <div class="card-body">
                            <label style="color: red;">apakah anda bekerja saat ini? (termasuk kerja sambilan dan wirausaha)</label>
                            <div class="col-lg-6">
                                <input name="f8" id="f8_1" value="Ya" type="radio" <?php if ($f8->jawaban == "Ya") {
                                                                                        echo "checked";
                                                                                    } else {
                                                                                        echo "disabled";
                                                                                    } ?>> Ya (lanjutkan ke f11)
                                <br>
                                <input name="f8" id="f8_2" value="Tidak" type="radio" <?php if ($f8->jawaban == "Tidak") {
                                                                                            echo "checked";
                                                                                        } else {
                                                                                            echo "disabled";
                                                                                        } ?>> Tidak
                            </div>
                        </div>
                    </div>
                </span>

                <span id="f9">
                    <div class="card card-sm">
                        <div class="card-header bg-primary">
                            <h5 class="card-title m-0">f9</h5>
                        </div>
                        <?php $b = explode(",", $f9->jawaban); ?>
                        <div class="card-body">
                            <label style="color: red;">bagaimana anda menggambarkan situasi anda saat ini? Jawaban boleh lebih dari 1</label>
                            <div class="col-lg-8">
                                <input name="f9[]" value="Saya masih belajar/melanjutkan kuliah profesi/pascasarjana" type="checkbox" readonly <?php in_array('Saya masih belajar/melanjutkan kuliah profesi/pascasarjana', $b) ? print "checked" : ""; ?>> Saya masih belajar/melanjutkan kuliah profesi/pascasarjana
                                <br>
                                <input name="f9[]" value="saya menikah" type="checkbox" readonly <?php in_array('saya menikah', $b) ? print "checked" : ""; ?>> saya menikah
                                <br>
                                <input name="f9[]" value="saya sibuk dengan keluarga dan anak-anak" type="checkbox" readonly <?php in_array('saya sibuk dengan keluarga dan anak-anak', $b) ? print "checked" : ""; ?>> saya sibuk dengan keluarga dan anak-anak
                                <br>
                                <input name="f9[]" value="saya sedang mencari pekerjaan" type="checkbox" readonly <?php in_array('saya sedang mencari pekerjaan', $b) ? print "checked" : ""; ?>> saya sedang mencari pekerjaan
                                <br>
                                <input name="f9[]" value="lainnya" type="checkbox" readonly <?php in_array('lainnya', $b) ? print "checked" : ""; ?>> Lainnya
                            </div>
                        </div>
                    </div>
                </span>

                <span id="f10">
                    <div class="card card-sm">
                        <div class="card-header bg-primary">
                            <h5 class="card-title m-0">f10</h5>
                        </div>
                        <div class="card-body">
                            <label style="color: red;">Apakah anda aktif mencari pekerjaan dalam 4 (empat) minggu terakhir? Pilih satu jawaban kemudian lanjut ke f17</label>
                            <div class="col-lg-6">
                                <input name="f10" value="tidak" type="radio" <?php if ($f10->jawaban == "tidak") {
                                                                                    echo "checked";
                                                                                } else {
                                                                                    echo "disabled";
                                                                                } ?>> Tidak
                                <br>
                                <input name="f10" value="tidak, tapi saya sedang menunggu hasil lamaran kerja" type="radio" <?php if ($f10->jawaban == "tidak, tapi saya sedang menunggu hasil lamaran kerja") {
                                                                                                                                echo "checked";
                                                                                                                            } else {
                                                                                                                                echo "disabled";
                                                                                                                            } ?>> tidak, tapi saya sedang menunggu hasil lamaran kerja
                                <br>
                                <input name="f10" value="ya, saya akan mulai bekerja dalam 2 minggu kedepan" type="radio" <?php if ($f10->jawaban == "ya, saya akan mulai bekerja dalam 2 minggu kedepan") {
                                                                                                                                echo "checked";
                                                                                                                            } else {
                                                                                                                                echo "disabled";
                                                                                                                            } ?>> ya, saya akan mulai bekerja dalam 2 minggu kedepan
                                <br>
                                <input name="f10" value="ya, tapi saya belum pasti akan bekerja dalam 2 minggu kedepan" type="radio" <?php if ($f10->jawaban == "ya, tapi saya belum pasti akan bekerja dalam 2 minggu kedepan") {
                                                                                                                                            echo "checked";
                                                                                                                                        } else {
                                                                                                                                            echo "disabled";
                                                                                                                                        } ?>> ya, tapi saya belum pasti akan bekerja dalam 2 minggu kedepan
                                <br>
                                <input name="f10" value="lainnya" type="radio" <?php if ($f10->jawaban == "lainnya") {
                                                                                    echo "checked";
                                                                                } else {
                                                                                    echo "disabled";
                                                                                } ?>> Lainnya
                            </div>
                        </div>
                    </div>
                </span>

                <span id="f11">
                    <div class="card card-sm">
                        <div class="card-header bg-primary">
                            <h5 class="card-title m-0">f11</h5>
                        </div>
                        <div class="card-body">
                            <label style="color: red;">Apa jenis perusahaan/instansi/institusi tempat anda bekerja sekarang?</label>
                            <div class="col-lg-6">
                                <input name="f11" value="instansi pemerintah (termasuk bumn)" type="radio" <?php if ($f11->jawaban == "instansi pemerintah (termasuk bumn)") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>> instansi pemerintah (termasuk bumn)
                                <br>
                                <input name="f11" value="organisasi non-profit/lembaga swadaya masyarakat" type="radio" <?php if ($f11->jawaban == "organisasi non-profit/lembaga swadaya masyarakat") {
                                                                                                                            echo "checked";
                                                                                                                        } else {
                                                                                                                            echo "disabled";
                                                                                                                        } ?>> organisasi non-profit/lembaga swadaya masyarakat
                                <br>
                                <input name="f11" value="perusahaan swasta" type="radio" <?php if ($f11->jawaban == "perusahaan swasta") {
                                                                                                echo "checked";
                                                                                            } else {
                                                                                                echo "disabled";
                                                                                            } ?>> perusahaan swasta
                                <br>
                                <input name="f11" value="wiraswasta/perusahaan sendiri" type="radio" <?php if ($f11->jawaban == "wiraswasta/perusahaan sendiri") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>> wiraswasta/perusahaan sendiri
                                <br>
                                <input name="f11" value="lainnya" type="radio" <?php if ($f11->jawaban == "lainnya") {
                                                                                    echo "checked";
                                                                                } else {
                                                                                    echo "disabled";
                                                                                } ?>> Lainnya
                            </div>
                        </div>
                    </div>
                </span>

                <span id="f13">
                    <div class="card card-sm">
                        <div class="card-header bg-primary">
                            <h5 class="card-title m-0">f13</h5>
                        </div>
                        <div class="card-body">
                            <label style="color: red;">kira-kira berapa pendapatan anda setiap bulannya? Isilah dengan angka</label>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Dari pekerjaan utama:</label>
                                    <input type="number" name="f13_1" readonly value="<?= $f13->pekerjaan_utama ?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Dari lembur dan tip:</label>
                                    <input type="number" name="f13_2" readonly value="<?= $f13->lembur_dan_tip ?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>dari pekerjaan lainnya:</label>
                                    <input type="number" name="f13_3" readonly value="<?= $f13->pekerjaan_lainnya ?>" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </span>

                <span id="f14">
                    <div class="card card-sm">
                        <div class="card-header bg-primary">
                            <h5 class="card-title m-0">f14</h5>
                        </div>
                        <div class="card-body">
                            <label style="color: red;">seberapa erat hubungan antara bidang studi dengan pekerjaan anda?</label>
                            <div class="col-lg-6">
                                <input name="f14" value="Sangat erat" type="radio" <?php if ($f14->jawaban == "Sangat erat") {
                                                                                        echo "checked";
                                                                                    } else {
                                                                                        echo "disabled";
                                                                                    } ?>> Sangat erat
                                <br>
                                <input name="f14" value="erat" type="radio" <?php if ($f14->jawaban == "erat") {
                                                                                echo "checked";
                                                                            } else {
                                                                                echo "disabled";
                                                                            } ?>> Erat
                                <br>
                                <input name="f14" value="Cukup erat" type="radio" <?php if ($f14->jawaban == "Cukup erat") {
                                                                                        echo "checked";
                                                                                    } else {
                                                                                        echo "disabled";
                                                                                    } ?>> Cukup erat
                                <br>
                                <input name="f14" value="Kurang erat" type="radio" <?php if ($f14->jawaban == "Kurang erat") {
                                                                                        echo "checked";
                                                                                    } else {
                                                                                        echo "disabled";
                                                                                    } ?>> Kurang erat
                                <br>
                                <input name="f14" value="Tidak Sama sekali" type="radio" <?php if ($f14->jawaban == "Tidak Sama sekali") {
                                                                                                echo "checked";
                                                                                            } else {
                                                                                                echo "disabled";
                                                                                            } ?>> Tidak Sama Sekali
                            </div>
                        </div>
                    </div>
                </span>

                <span id="f15">
                    <div class="card card-sm">
                        <div class="card-header bg-primary">
                            <h5 class="card-title m-0">f15</h5>
                        </div>
                        <div class="card-body">
                            <label style="color: red;">tingkat pendidikan apa yang paling tepat/sesuai untuk pekerjaan anda saat ini?</label>
                            <div class="col-lg-6">
                                <input name="f15" value="setingkat lebih tinggi" type="radio" <?php if ($f15->jawaban == "setingkat lebih tinggi") {
                                                                                                    echo "checked";
                                                                                                } else {
                                                                                                    echo "disabled";
                                                                                                } ?>> setingkat lebih tinggi
                                <br>
                                <input name="f15" value="tingkat yang sama" type="radio" <?php if ($f15->jawaban == "tingkat yang sama") {
                                                                                                echo "checked";
                                                                                            } else {
                                                                                                echo "disabled";
                                                                                            } ?>> tingkat yang sama
                                <br>
                                <input name="f15" value="setingkat lebih rendah" type="radio" <?php if ($f15->jawaban == "setingkat lebih rendah") {
                                                                                                    echo "checked";
                                                                                                } else {
                                                                                                    echo "disabled";
                                                                                                } ?>> setingkat lebih rendah
                                <br>
                                <input name="f15" value="tidak perlu pendidikan tinggi" type="radio" <?php if ($f15->jawaban == "tidak perlu pendidikan tinggi") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>> tidak perlu pendidikan tinggi
                            </div>
                        </div>
                    </div>
                </span>

                <span id="f16">
                    <div class="card card-sm">
                        <div class="card-header bg-primary">
                            <h5 class="card-title m-0">f16</h5>
                        </div>
                        <?php $c = explode(",", $f16->jawaban); ?>
                        <div class="card-body">
                            <label style="color: red;">Jika menurut anda pekerjaan anda saat ini tidak sesuai dengan pendidikan anda, mengapa anda mengambilnya? Jawaban bisa lebih dari 1</label>
                            <div class="col-lg-10">
                                <input name="f16[]" value="jawaban tidak sesuai, pekerjaan saya sekarang sudah sesuai dengan pendidikan saya" type="checkbox" readonly <?php in_array('jawaban tidak sesuai, pekerjaan saya sekarang sudah sesuai dengan pendidikan saya', $c) ? print "checked" : ""; ?>> jawaban tidak sesuai, pekerjaan saya sekarang sudah sesuai dengan pendidikan saya
                                <br>
                                <input name="f16[]" value="saya belum mendapatkan pekerjaan yang lebih sesuai" type="checkbox" readonly <?php in_array('saya belum mendapatkan pekerjaan yang lebih sesuai', $c) ? print "checked" : ""; ?>> saya belum mendapatkan pekerjaan yang lebih sesuai
                                <br>
                                <input name="f16[]" value="di pekerjaan ini saya memperoleh prospek karir yang baik" type="checkbox" readonly <?php in_array('di pekerjaan ini saya memperoleh prospek karir yang baik', $c) ? print "checked" : ""; ?>> di pekerjaan ini saya memperoleh prospek karir yang baik
                                <br>
                                <input name="f16[]" value="saya lebih suka bekerja di area pekerjaan yang tidak ada hubungannya dengan pendidikan saya" type="checkbox" readonly <?php in_array('saya lebih suka bekerja di area pekerjaan yang tidak ada hubungannya dengan pendidikan saya', $c) ? print "checked" : ""; ?>> saya lebih suka bekerja di area pekerjaan yang tidak ada hubungannya dengan pendidikan saya
                                <br>
                                <input name="f16[]" value="saya dipromosikan ke posisi yang kurang berhubungan dengan pendidikan saya dibanding posisi sebelumnya" type="checkbox" readonly <?php in_array('saya dipromosikan ke posisi yang kurang berhubungan dengan pendidikan saya dibanding posisi sebelumnya', $c) ? print "checked" : ""; ?>> saya dipromosikan ke posisi yang kurang berhubungan dengan pendidikan saya dibanding posisi sebelumnya
                                <br>
                                <input name="f16[]" value="saya dapat memperoleh pendapatan yang lebih tinggi di pekerjaan ini" type="checkbox" readonly <?php in_array('saya dapat memperoleh pendapatan yang lebih tinggi di pekerjaan ini', $c) ? print "checked" : ""; ?>> saya dapat memperoleh pendapatan yang lebih tinggi di pekerjaan ini
                                <br>
                                <input name="f16[]" value="pekerjaan saya saat ini lebih aman/terjamin/secure" type="checkbox" readonly <?php in_array('pekerjaan saya saat ini lebih aman/terjamin/secure', $c) ? print "checked" : ""; ?>> pekerjaan saya saat ini lebih aman/terjamin/secure
                                <br>
                                <input name="f16[]" value="pekerjaan saya saat ini lebih menarik" type="checkbox" readonly <?php in_array('pekerjaan saya saat ini lebih menarik', $c) ? print "checked" : ""; ?>> pekerjaan saya saat ini lebih menarik
                                <br>
                                <input name="f16[]" value="pekerjaan saya saat ini lebih memungkinkan saya mengambil pekerjaan tambahan/jadwal yang fleksibel/dll" type="checkbox" readonly <?php in_array('pekerjaan saya saat ini lebih memungkinkan saya mengambil pekerjaan tambahan/jadwal yang fleksibel/dll', $c) ? print "checked" : ""; ?>> pekerjaan saya saat ini lebih memungkinkan saya mengambil pekerjaan tambahan/jadwal yang fleksibel/dll
                                <br>
                                <input name="f16[]" value="pekerjaan saya saat ini lokasinya lebih dekat dari rumah saya" type="checkbox" readonly <?php in_array('pekerjaan saya saat ini lokasinya lebih dekat dari rumah saya', $c) ? print "checked" : ""; ?>> pekerjaan saya saat ini lokasinya lebih dekat dari rumah saya
                                <br>
                                <input name="f16[]" value="pekerjaan saya saat ini dapat lebih menjamin kebutuhan keluarga saya" type="checkbox" readonly <?php in_array('pekerjaan saya saat ini dapat lebih menjamin kebutuhan keluarga saya', $c) ? print "checked" : ""; ?>> pekerjaan saya saat ini dapat lebih menjamin kebutuhan keluarga saya
                                <br>
                                <input name="f16[]" value="pada awal meniti karir ini, saya harus menerima pekerjaan yang tidak berhubungan dengan pendidikan saya" type="checkbox" readonly <?php in_array('pada awal meniti karir ini, saya harus menerima pekerjaan yang tidak berhubungan dengan pendidikan saya', $c) ? print "checked" : ""; ?>> pada awal meniti karir ini, saya harus menerima pekerjaan yang tidak berhubungan dengan pendidikan saya
                                <br>
                                <input name="f16[]" value="lainnya" type="checkbox" readonly <?php in_array('lainnya', $c) ? print "checked" : ""; ?>> Lainnya
                            </div>
                        </div>
                    </div>
                </span>

                <span id="f17">
                    <div class="card card-sm">
                        <div class="card-header bg-primary">
                            <h5 class="card-title m-0">f17</h5>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <tr>
                                    <th></th>
                                    <th colspan="5"><label style="color: red;">Pada saat lulus, pada tingkat mana kompetensi dibawah ini anda kuasai?</label></th>
                                    <th colspan="5"><label style="color: red;">pada saat ini, pada tingkat mana kompetensi dibawah ini diperlukan dalam pekerjaan?</label></th>
                                </tr>
                                <tr>
                                    <th></th>
                                    <th colspan="2">Sangat Rendah</th>
                                    <th colspan="3">Sangat tinggi</th>

                                    <th colspan="2">Sangat Rendah</th>
                                    <th colspan="3">Sangat tinggi</th>
                                </tr>
                                <tr>
                                    <th></th>
                                    <th>(1)</th>
                                    <th>(2)</th>
                                    <th>(3)</th>
                                    <th>(4)</th>
                                    <th>(5)</th>

                                    <th>(1)</th>
                                    <th>(2)</th>
                                    <th>(3)</th>
                                    <th>(4)</th>
                                    <th>(5)</th>
                                </tr>

                                <tr>
                                    <th>pengetahuan di bidang atau disiplin ilmu anda</th>
                                    <th class="text-center"><input name="f17_1" value="1" type="radio" <?php if ($f17_1->j1 == "1") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_1" value="2" type="radio" <?php if ($f17_1->j1 == "2") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_1" value="3" type="radio" <?php if ($f17_1->j1 == "3") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_1" value="4" type="radio" <?php if ($f17_1->j1 == "4") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_1" value="5" type="radio" <?php if ($f17_1->j1 == "5") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>

                                    <th class="text-center"><input name="f17_1_2" value="1" type="radio" <?php if ($f17_2->j1 == "1") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_1_2" value="2" type="radio" <?php if ($f17_2->j1 == "2") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_1_2" value="3" type="radio" <?php if ($f17_2->j1 == "3") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_1_2" value="4" type="radio" <?php if ($f17_2->j1 == "4") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_1_2" value="5" type="radio" <?php if ($f17_2->j1 == "5") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                </tr>

                                <tr>
                                    <th>pengetahuan diluar bidang atau disiplin ilmu anda</th>
                                    <th class="text-center"><input name="f17_2" value="1" type="radio" <?php if ($f17_1->j2 == "1") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_2" value="2" type="radio" <?php if ($f17_1->j2 == "2") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_2" value="3" type="radio" <?php if ($f17_1->j2 == "3") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_2" value="4" type="radio" <?php if ($f17_1->j2 == "4") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_2" value="5" type="radio" <?php if ($f17_1->j2 == "5") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>

                                    <th class="text-center"><input name="f17_2_2" value="1" type="radio" <?php if ($f17_2->j2 == "1") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_2_2" value="2" type="radio" <?php if ($f17_2->j2 == "2") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_2_2" value="3" type="radio" <?php if ($f17_2->j2 == "3") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_2_2" value="4" type="radio" <?php if ($f17_2->j2 == "4") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_2_2" value="5" type="radio" <?php if ($f17_2->j2 == "5") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                </tr>

                                <tr>
                                    <th>pengetahuan umum</th>
                                    <th class="text-center"><input name="f17_3" value="1" type="radio" <?php if ($f17_1->j3 == "1") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_3" value="2" type="radio" <?php if ($f17_1->j3 == "2") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_3" value="3" type="radio" <?php if ($f17_1->j3 == "3") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_3" value="4" type="radio" <?php if ($f17_1->j3 == "4") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_3" value="5" type="radio" <?php if ($f17_1->j3 == "5") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>

                                    <th class="text-center"><input name="f17_3_2" value="1" type="radio" <?php if ($f17_2->j3 == "1") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_3_2" value="2" type="radio" <?php if ($f17_2->j3 == "2") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_3_2" value="3" type="radio" <?php if ($f17_2->j3 == "3") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_3_2" value="4" type="radio" <?php if ($f17_2->j3 == "4") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_3_2" value="5" type="radio" <?php if ($f17_2->j3 == "5") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                </tr>

                                <tr>
                                    <th>bahasa inggris</th>
                                    <th class="text-center"><input name="f17_4" value="1" type="radio" <?php if ($f17_1->j4 == "1") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_4" value="2" type="radio" <?php if ($f17_1->j4 == "2") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_4" value="3" type="radio" <?php if ($f17_1->j4 == "3") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_4" value="4" type="radio" <?php if ($f17_1->j4 == "4") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_4" value="5" type="radio" <?php if ($f17_1->j4 == "5") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>

                                    <th class="text-center"><input name="f17_4_2" value="1" type="radio" <?php if ($f17_2->j4 == "1") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_4_2" value="2" type="radio" <?php if ($f17_2->j4 == "2") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_4_2" value="3" type="radio" <?php if ($f17_2->j4 == "3") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_4_2" value="4" type="radio" <?php if ($f17_2->j4 == "4") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_4_2" value="5" type="radio" <?php if ($f17_2->j4 == "5") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                </tr>
                                <tr>
                                    <th>keterampilan internet</th>
                                    <th class="text-center"><input name="f17_5" value="1" type="radio" <?php if ($f17_1->j5 == "1") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_5" value="2" type="radio" <?php if ($f17_1->j5 == "2") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_5" value="3" type="radio" <?php if ($f17_1->j5 == "3") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_5" value="4" type="radio" <?php if ($f17_1->j5 == "4") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_5" value="5" type="radio" <?php if ($f17_1->j5 == "5") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>

                                    <th class="text-center"><input name="f17_5_2" value="1" type="radio" <?php if ($f17_2->j5 == "1") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_5_2" value="2" type="radio" <?php if ($f17_2->j5 == "2") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_5_2" value="3" type="radio" <?php if ($f17_2->j5 == "3") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_5_2" value="4" type="radio" <?php if ($f17_2->j5 == "4") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_5_2" value="5" type="radio" <?php if ($f17_2->j5 == "5") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                </tr>

                                <tr>
                                    <th>keterampilan komputer</th>
                                    <th class="text-center"><input name="f17_6" value="1" type="radio" <?php if ($f17_1->j6 == "1") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_6" value="2" type="radio" <?php if ($f17_1->j6 == "2") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_6" value="3" type="radio" <?php if ($f17_1->j6 == "3") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_6" value="4" type="radio" <?php if ($f17_1->j6 == "4") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_6" value="5" type="radio" <?php if ($f17_1->j6 == "5") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>

                                    <th class="text-center"><input name="f17_6_2" value="1" type="radio" <?php if ($f17_2->j6 == "1") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_6_2" value="2" type="radio" <?php if ($f17_2->j6 == "2") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_6_2" value="3" type="radio" <?php if ($f17_2->j6 == "3") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_6_2" value="4" type="radio" <?php if ($f17_2->j6 == "4") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_6_2" value="5" type="radio" <?php if ($f17_2->j6 == "5") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                </tr>

                                <tr>
                                    <th>berpikir kritis</th>
                                    <th class="text-center"><input name="f17_7" value="1" type="radio" <?php if ($f17_1->j7 == "1") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_7" value="2" type="radio" <?php if ($f17_1->j7 == "2") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_7" value="3" type="radio" <?php if ($f17_1->j7 == "3") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_7" value="4" type="radio" <?php if ($f17_1->j7 == "4") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_7" value="5" type="radio" <?php if ($f17_1->j7 == "5") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>

                                    <th class="text-center"><input name="f17_7_2" value="1" type="radio" <?php if ($f17_2->j7 == "1") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_7_2" value="2" type="radio" <?php if ($f17_2->j7 == "2") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_7_2" value="3" type="radio" <?php if ($f17_2->j7 == "3") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_7_2" value="4" type="radio" <?php if ($f17_2->j7 == "4") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_7_2" value="5" type="radio" <?php if ($f17_2->j7 == "5") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                </tr>

                                <tr>
                                    <th>keterampilan riset</th>
                                    <th class="text-center"><input name="f17_8" value="1" type="radio" <?php if ($f17_1->j8 == "1") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_8" value="2" type="radio" <?php if ($f17_1->j8 == "2") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_8" value="3" type="radio" <?php if ($f17_1->j8 == "3") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_8" value="4" type="radio" <?php if ($f17_1->j8 == "4") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_8" value="5" type="radio" <?php if ($f17_1->j8 == "5") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>

                                    <th class="text-center"><input name="f17_8_2" value="1" type="radio" <?php if ($f17_2->j8 == "1") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_8_2" value="2" type="radio" <?php if ($f17_2->j8 == "2") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_8_2" value="3" type="radio" <?php if ($f17_2->j8 == "3") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_8_2" value="4" type="radio" <?php if ($f17_2->j8 == "4") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_8_2" value="5" type="radio" <?php if ($f17_2->j8 == "5") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                </tr>

                                <tr>
                                    <th>kemampuan belajar</th>
                                    <th class="text-center"><input name="f17_9" value="1" type="radio" <?php if ($f17_1->j9 == "1") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_9" value="2" type="radio" <?php if ($f17_1->j9 == "2") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_9" value="3" type="radio" <?php if ($f17_1->j9 == "3") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_9" value="4" type="radio" <?php if ($f17_1->j9 == "4") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_9" value="5" type="radio" <?php if ($f17_1->j9 == "5") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>

                                    <th class="text-center"><input name="f17_9_2" value="1" type="radio" <?php if ($f17_2->j9 == "1") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_9_2" value="2" type="radio" <?php if ($f17_2->j9 == "2") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_9_2" value="3" type="radio" <?php if ($f17_2->j9 == "3") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_9_2" value="4" type="radio" <?php if ($f17_2->j9 == "4") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_9_2" value="5" type="radio" <?php if ($f17_2->j9 == "5") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                </tr>

                                <tr>
                                    <th>kemampuan berkomunikasi</th>
                                    <th class="text-center"><input name="f17_10" value="1" type="radio" <?php if ($f17_1->j10 == "1") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_10" value="2" type="radio" <?php if ($f17_1->j10 == "2") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_10" value="3" type="radio" <?php if ($f17_1->j10 == "3") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_10" value="4" type="radio" <?php if ($f17_1->j10 == "4") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_10" value="5" type="radio" <?php if ($f17_1->j10 == "5") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>

                                    <th class="text-center"><input name="f17_10_2" value="1" type="radio" <?php if ($f17_2->j10 == "1") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_10_2" value="2" type="radio" <?php if ($f17_2->j10 == "2") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_10_2" value="3" type="radio" <?php if ($f17_2->j10 == "3") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_10_2" value="4" type="radio" <?php if ($f17_2->j10 == "4") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_10_2" value="5" type="radio" <?php if ($f17_2->j10 == "5") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                </tr>

                                <tr>
                                    <th>bekerja dibawah tekanan</th>
                                    <th class="text-center"><input name="f17_11" value="1" type="radio" <?php if ($f17_1->j11 == "1") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_11" value="2" type="radio" <?php if ($f17_1->j11 == "2") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_11" value="3" type="radio" <?php if ($f17_1->j11 == "3") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_11" value="4" type="radio" <?php if ($f17_1->j11 == "4") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_11" value="5" type="radio" <?php if ($f17_1->j11 == "5") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>

                                    <th class="text-center"><input name="f17_11_2" value="1" type="radio" <?php if ($f17_2->j11 == "1") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_11_2" value="2" type="radio" <?php if ($f17_2->j11 == "2") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_11_2" value="3" type="radio" <?php if ($f17_2->j11 == "3") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_11_2" value="4" type="radio" <?php if ($f17_2->j11 == "4") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_11_2" value="5" type="radio" <?php if ($f17_2->j11 == "5") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                </tr>

                                <tr>
                                    <th>manajemen waktu</th>
                                    <th class="text-center"><input name="f17_12" value="1" type="radio" <?php if ($f17_1->j12 == "1") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_12" value="2" type="radio" <?php if ($f17_1->j12 == "2") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_12" value="3" type="radio" <?php if ($f17_1->j12 == "3") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_12" value="4" type="radio" <?php if ($f17_1->j12 == "4") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_12" value="5" type="radio" <?php if ($f17_1->j12 == "5") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>

                                    <th class="text-center"><input name="f17_12_2" value="1" type="radio" <?php if ($f17_2->j12 == "1") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_12_2" value="2" type="radio" <?php if ($f17_2->j12 == "2") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_12_2" value="3" type="radio" <?php if ($f17_2->j12 == "3") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_12_2" value="4" type="radio" <?php if ($f17_2->j12 == "4") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_12_2" value="5" type="radio" <?php if ($f17_2->j12 == "5") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                </tr>

                                <tr>
                                    <th>bekerja secara mandiri</th>
                                    <th class="text-center"><input name="f17_13" value="1" type="radio" <?php if ($f17_1->j13 == "1") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_13" value="2" type="radio" <?php if ($f17_1->j13 == "2") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_13" value="3" type="radio" <?php if ($f17_1->j13 == "3") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_13" value="4" type="radio" <?php if ($f17_1->j13 == "4") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_13" value="5" type="radio" <?php if ($f17_1->j13 == "5") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>

                                    <th class="text-center"><input name="f17_13_2" value="1" type="radio" <?php if ($f17_2->j13 == "1") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_13_2" value="2" type="radio" <?php if ($f17_2->j13 == "2") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_13_2" value="3" type="radio" <?php if ($f17_2->j13 == "3") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_13_2" value="4" type="radio" <?php if ($f17_2->j13 == "4") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_13_2" value="5" type="radio" <?php if ($f17_2->j13 == "5") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                </tr>

                                <tr>
                                    <th>bekerja dalam tim/bekerjasama dengan orang lain</th>
                                    <th class="text-center"><input name="f17_14" value="1" type="radio" <?php if ($f17_1->j14 == "1") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_14" value="2" type="radio" <?php if ($f17_1->j14 == "2") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_14" value="3" type="radio" <?php if ($f17_1->j14 == "3") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_14" value="4" type="radio" <?php if ($f17_1->j14 == "4") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_14" value="5" type="radio" <?php if ($f17_1->j14 == "5") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>

                                    <th class="text-center"><input name="f17_14_2" value="1" type="radio" <?php if ($f17_2->j14 == "1") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_14_2" value="2" type="radio" <?php if ($f17_2->j14 == "2") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_14_2" value="3" type="radio" <?php if ($f17_2->j14 == "3") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_14_2" value="4" type="radio" <?php if ($f17_2->j14 == "4") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_14_2" value="5" type="radio" <?php if ($f17_2->j14 == "5") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                </tr>

                                <tr>
                                    <th>kemampuan dalam memecahkan masalah</th>
                                    <th class="text-center"><input name="f17_15" value="1" type="radio" <?php if ($f17_1->j15 == "1") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_15" value="2" type="radio" <?php if ($f17_1->j15 == "2") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_15" value="3" type="radio" <?php if ($f17_1->j15 == "3") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_15" value="4" type="radio" <?php if ($f17_1->j15 == "4") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_15" value="5" type="radio" <?php if ($f17_1->j15 == "5") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>

                                    <th class="text-center"><input name="f17_15_2" value="1" type="radio" <?php if ($f17_2->j15 == "1") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_15_2" value="2" type="radio" <?php if ($f17_2->j15 == "2") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_15_2" value="3" type="radio" <?php if ($f17_2->j15 == "3") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_15_2" value="4" type="radio" <?php if ($f17_2->j15 == "4") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_15_2" value="5" type="radio" <?php if ($f17_2->j15 == "5") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                </tr>

                                <tr>
                                    <th>negosiasi</th>
                                    <th class="text-center"><input name="f17_16" value="1" type="radio" <?php if ($f17_1->j16 == "1") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_16" value="2" type="radio" <?php if ($f17_1->j16 == "2") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_16" value="3" type="radio" <?php if ($f17_1->j16 == "3") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_16" value="4" type="radio" <?php if ($f17_1->j16 == "4") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_16" value="5" type="radio" <?php if ($f17_1->j16 == "5") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>

                                    <th class="text-center"><input name="f17_16_2" value="1" type="radio" <?php if ($f17_2->j16 == "1") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_16_2" value="2" type="radio" <?php if ($f17_2->j16 == "2") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_16_2" value="3" type="radio" <?php if ($f17_2->j16 == "3") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_16_2" value="4" type="radio" <?php if ($f17_2->j16 == "4") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_16_2" value="5" type="radio" <?php if ($f17_2->j16 == "5") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                </tr>

                                <tr>
                                    <th>kemampuan adaptasi</th>
                                    <th class="text-center"><input name="f17_17" value="1" type="radio" <?php if ($f17_1->j17 == "1") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_17" value="2" type="radio" <?php if ($f17_1->j17 == "2") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_17" value="3" type="radio" <?php if ($f17_1->j17 == "3") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_17" value="4" type="radio" <?php if ($f17_1->j17 == "4") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_17" value="5" type="radio" <?php if ($f17_1->j17 == "5") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>

                                    <th class="text-center"><input name="f17_17_2" value="1" type="radio" <?php if ($f17_2->j17 == "1") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_17_2" value="2" type="radio" <?php if ($f17_2->j17 == "2") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_17_2" value="3" type="radio" <?php if ($f17_2->j17 == "3") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_17_2" value="4" type="radio" <?php if ($f17_2->j17 == "4") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_17_2" value="5" type="radio" <?php if ($f17_2->j17 == "5") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                </tr>

                                <tr>
                                    <th>loyalitas</th>
                                    <th class="text-center"><input name="f17_18" value="1" type="radio" <?php if ($f17_1->j18 == "1") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_18" value="2" type="radio" <?php if ($f17_1->j18 == "2") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_18" value="3" type="radio" <?php if ($f17_1->j18 == "3") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_18" value="4" type="radio" <?php if ($f17_1->j18 == "4") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_18" value="5" type="radio" <?php if ($f17_1->j18 == "5") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>

                                    <th class="text-center"><input name="f17_18_2" value="1" type="radio" <?php if ($f17_2->j18 == "1") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_18_2" value="2" type="radio" <?php if ($f17_2->j18 == "2") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_18_2" value="3" type="radio" <?php if ($f17_2->j18 == "3") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_18_2" value="4" type="radio" <?php if ($f17_2->j18 == "4") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_18_2" value="5" type="radio" <?php if ($f17_2->j18 == "5") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                </tr>

                                <tr>
                                    <th>integritas</th>
                                    <th class="text-center"><input name="f17_19" value="1" type="radio" <?php if ($f17_1->j19 == "1") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_19" value="2" type="radio" <?php if ($f17_1->j19 == "2") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_19" value="3" type="radio" <?php if ($f17_1->j19 == "3") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_19" value="4" type="radio" <?php if ($f17_1->j19 == "4") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_19" value="5" type="radio" <?php if ($f17_1->j19 == "5") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>

                                    <th class="text-center"><input name="f17_19_2" value="1" type="radio" <?php if ($f17_2->j19 == "1") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_19_2" value="2" type="radio" <?php if ($f17_2->j19 == "2") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_19_2" value="3" type="radio" <?php if ($f17_2->j19 == "3") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_19_2" value="4" type="radio" <?php if ($f17_2->j19 == "4") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_19_2" value="5" type="radio" <?php if ($f17_2->j19 == "5") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                </tr>

                                <tr>
                                    <th>bekerja dengan orang yang berbeda budaya maupun latar belakang</th>
                                    <th class="text-center"><input name="f17_20" value="1" type="radio" <?php if ($f17_1->j20 == "1") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_20" value="2" type="radio" <?php if ($f17_1->j20 == "2") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_20" value="3" type="radio" <?php if ($f17_1->j20 == "3") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_20" value="4" type="radio" <?php if ($f17_1->j20 == "4") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_20" value="5" type="radio" <?php if ($f17_1->j20 == "5") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>

                                    <th class="text-center"><input name="f17_20_2" value="1" type="radio" <?php if ($f17_2->j20 == "1") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_20_2" value="2" type="radio" <?php if ($f17_2->j20 == "2") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_20_2" value="3" type="radio" <?php if ($f17_2->j20 == "3") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_20_2" value="4" type="radio" <?php if ($f17_2->j20 == "4") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_20_2" value="5" type="radio" <?php if ($f17_2->j20 == "5") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                </tr>

                                <tr>
                                    <th>kepemimpinan</th>
                                    <th class="text-center"><input name="f17_21" value="1" type="radio" <?php if ($f17_1->j21 == "1") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_21" value="2" type="radio" <?php if ($f17_1->j21 == "2") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_21" value="3" type="radio" <?php if ($f17_1->j21 == "3") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_21" value="4" type="radio" <?php if ($f17_1->j21 == "4") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_21" value="5" type="radio" <?php if ($f17_1->j21 == "5") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>

                                    <th class="text-center"><input name="f17_21_2" value="1" type="radio" <?php if ($f17_2->j21 == "1") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_21_2" value="2" type="radio" <?php if ($f17_2->j21 == "2") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_21_2" value="3" type="radio" <?php if ($f17_2->j21 == "3") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_21_2" value="4" type="radio" <?php if ($f17_2->j21 == "4") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_21_2" value="5" type="radio" <?php if ($f17_2->j21 == "5") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                </tr>

                                <tr>
                                    <th>kemampuan dalam memegang tanggung jawab</th>
                                    <th class="text-center"><input name="f17_22" value="1" type="radio" <?php if ($f17_1->j22 == "1") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_22" value="2" type="radio" <?php if ($f17_1->j22 == "2") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_22" value="3" type="radio" <?php if ($f17_1->j22 == "3") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_22" value="4" type="radio" <?php if ($f17_1->j22 == "4") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_22" value="5" type="radio" <?php if ($f17_1->j22 == "5") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>

                                    <th class="text-center"><input name="f17_22_2" value="1" type="radio" <?php if ($f17_2->j22 == "1") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_22_2" value="2" type="radio" <?php if ($f17_2->j22 == "2") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_22_2" value="3" type="radio" <?php if ($f17_2->j22 == "3") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_22_2" value="4" type="radio" <?php if ($f17_2->j22 == "4") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_22_2" value="5" type="radio" <?php if ($f17_2->j22 == "5") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                </tr>

                                <tr>
                                    <th>Inisiatif</th>
                                    <th class="text-center"><input name="f17_23" value="1" type="radio" <?php if ($f17_1->j23 == "1") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_23" value="2" type="radio" <?php if ($f17_1->j23 == "2") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_23" value="3" type="radio" <?php if ($f17_1->j23 == "3") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_23" value="4" type="radio" <?php if ($f17_1->j23 == "4") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_23" value="5" type="radio" <?php if ($f17_1->j23 == "5") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>

                                    <th class="text-center"><input name="f17_23_2" value="1" type="radio" <?php if ($f17_2->j23 == "1") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_23_2" value="2" type="radio" <?php if ($f17_2->j23 == "2") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_23_2" value="3" type="radio" <?php if ($f17_2->j23 == "3") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_23_2" value="4" type="radio" <?php if ($f17_2->j23 == "4") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_23_2" value="5" type="radio" <?php if ($f17_2->j23 == "5") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                </tr>

                                <tr>
                                    <th>manajemen proyek/program</th>
                                    <th class="text-center"><input name="f17_24" value="1" type="radio" <?php if ($f17_1->j24 == "1") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_24" value="2" type="radio" <?php if ($f17_1->j24 == "2") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_24" value="3" type="radio" <?php if ($f17_1->j24 == "3") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_24" value="4" type="radio" <?php if ($f17_1->j24 == "4") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_24" value="5" type="radio" <?php if ($f17_1->j24 == "5") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>

                                    <th class="text-center"><input name="f17_24_2" value="1" type="radio" <?php if ($f17_2->j24 == "1") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_24_2" value="2" type="radio" <?php if ($f17_2->j24 == "2") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_24_2" value="3" type="radio" <?php if ($f17_2->j24 == "3") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_24_2" value="4" type="radio" <?php if ($f17_2->j24 == "4") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_24_2" value="5" type="radio" <?php if ($f17_2->j24 == "5") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                </tr>

                                <tr>
                                    <th>kemampuan untuk mempresentasikan ide/produk/laporan</th>
                                    <th class="text-center"><input name="f17_25" value="1" type="radio" <?php if ($f17_1->j25 == "1") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_25" value="2" type="radio" <?php if ($f17_1->j25 == "2") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_25" value="3" type="radio" <?php if ($f17_1->j25 == "3") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_25" value="4" type="radio" <?php if ($f17_1->j25 == "4") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_25" value="5" type="radio" <?php if ($f17_1->j25 == "5") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>

                                    <th class="text-center"><input name="f17_25_2" value="1" type="radio" <?php if ($f17_2->j25 == "1") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_25_2" value="2" type="radio" <?php if ($f17_2->j25 == "2") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_25_2" value="3" type="radio" <?php if ($f17_2->j25 == "3") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_25_2" value="4" type="radio" <?php if ($f17_2->j25 == "4") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_25_2" value="5" type="radio" <?php if ($f17_2->j25 == "5") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                </tr>

                                <tr>
                                    <th>kemampuan dalam menulis laporan, memo, dan dokumen</th>
                                    <th class="text-center"><input name="f17_26" value="1" type="radio" <?php if ($f17_1->j26 == "1") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_26" value="2" type="radio" <?php if ($f17_1->j26 == "2") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_26" value="3" type="radio" <?php if ($f17_1->j26 == "3") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_26" value="4" type="radio" <?php if ($f17_1->j26 == "4") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_26" value="5" type="radio" <?php if ($f17_1->j26 == "5") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>

                                    <th class="text-center"><input name="f17_26_2" value="1" type="radio" <?php if ($f17_2->j26 == "1") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_26_2" value="2" type="radio" <?php if ($f17_2->j26 == "2") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_26_2" value="3" type="radio" <?php if ($f17_2->j26 == "3") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_26_2" value="4" type="radio" <?php if ($f17_2->j26 == "4") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_26_2" value="5" type="radio" <?php if ($f17_2->j26 == "5") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                </tr>

                                <tr>
                                    <th>kemampuan untuk terus belajar sepanjang hayat</th>
                                    <th class="text-center"><input name="f17_27" value="1" type="radio" <?php if ($f17_1->j27 == "1") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_27" value="2" type="radio" <?php if ($f17_1->j27 == "2") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_27" value="3" type="radio" <?php if ($f17_1->j27 == "3") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_27" value="4" type="radio" <?php if ($f17_1->j27 == "4") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>
                                    <th class="text-center"><input name="f17_27" value="5" type="radio" <?php if ($f17_1->j27 == "5") {
                                                                                                            echo "checked";
                                                                                                        } else {
                                                                                                            echo "disabled";
                                                                                                        } ?>></th>

                                    <th class="text-center"><input name="f17_27_2" value="1" type="radio" <?php if ($f17_2->j27 == "1") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_27_2" value="2" type="radio" <?php if ($f17_2->j27 == "2") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_27_2" value="3" type="radio" <?php if ($f17_2->j27 == "3") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_27_2" value="4" type="radio" <?php if ($f17_2->j27 == "4") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                    <th class="text-center"><input name="f17_27_2" value="5" type="radio" <?php if ($f17_2->j27 == "5") {
                                                                                                                echo "checked";
                                                                                                            } else {
                                                                                                                echo "disabled";
                                                                                                            } ?>></th>
                                </tr>

                            </table>
                        </div>
                    </div>
                </span>

            </div>
            <div class="card col-sm-4">
                <div class="card-body">
                    <button onclick="printContent('div1')" class="btn btn-primary btn-block"><i class="fa fa-print"></i>Cetak</button>
                </div>
            </div>
        </div>
    </div>
</div>



<script src="<?php echo base_url('assets/') ?>plugins/jquery/jquery.min.js"></script>
<script>
    function printContent(el) {
        var restorepage = document.body.innerHTML;
        var printcontent = document.getElementById(el).innerHTML;
        document.body.innerHTML = printcontent;
        window.print();
        document.body.innerHTML = restorepage;
    }
    //f3==================================
    // $('#f3_1').click(function() {
    //     if ($('#f3_1').is(':checked')) {
    //         $('#f3-1').removeAttr('disabled');
    //         $('#f3-1').focus();
    //         $("#f3-2").attr("disabled", "disabled");
    //         $("#f4").css("display", "inline");
    //         $("#f5").css("display", "inline");
    //         $("#f6").css("display", "inline");
    //         $("#f7").css("display", "inline");
    //         $("#f7a").css("display", "inline");
    //         $("#f8").css("display", "inline");
    //     }
    // });

    // $('#f3_2').click(function() {
    //     if ($('#f3_2').is(':checked')) {
    //         $('#f3-2').removeAttr('disabled');
    //         $('#f3-2').focus();
    //         $("#f3-1").attr("disabled", "disabled");
    //         $("#f4").css("display", "inline");
    //         $("#f5").css("display", "inline");
    //         $("#f6").css("display", "inline");
    //         $("#f7").css("display", "inline");
    //         $("#f7a").css("display", "inline");
    //         $("#f8").css("display", "inline");
    //     }
    // });

    // $('#f3_3').click(function() {
    //     if ($('#f3_3').is(':checked')) {
    //         $("#f3-1").attr("disabled", "disabled");
    //         $("#f3-2").attr("disabled", "disabled");
    //         $("#f4").css("display", "none");
    //         $("#f5").css("display", "none");
    //         $("#f6").css("display", "none");
    //         $("#f7").css("display", "none");
    //         $("#f7a").css("display", "none");
    //         $("#f8").css("display", "inline");
    //     }
    // });
    // //========================================

    // //f5===================================

    // $('#f5_1').click(function() {
    //     if ($('#f5_1').is(':checked')) {
    //         $('#f5-1').removeAttr('disabled');
    //         $('#f5-1').focus();
    //         $("#f5-2").attr("disabled", "disabled");
    //     }
    // });
    // $('#f5_2').click(function() {
    //     if ($('#f5_2').is(':checked')) {
    //         $('#f5-2').removeAttr('disabled');
    //         $('#f5-2').focus();
    //         $("#f5-1").attr("disabled", "disabled");
    //     }
    // });
    // //=====================================

    // //f8=======================================
    // $('#f8_1').click(function() {
    //     if ($('#f8_1').is(':checked')) {
    //         $("#f9").css("display", "none");
    //         $("#f10").css("display", "none");
    //         $("#f11").css("display", "inline");
    //         $("#f13").css("display", "inline");
    //         $("#f14").css("display", "inline");
    //         $("#f15").css("display", "inline");
    //         $("#f16").css("display", "inline");
    //         $("#f17").css("display", "inline");
    //     }
    // });

    // $('#f8_2').click(function() {
    //     if ($('#f8_2').is(':checked')) {
    //         $("#f9").css("display", "inline");
    //         $("#f10").css("display", "inline");
    //         $("#f10").css("display", "inline");
    //         $("#f17").css("display", "inline");
    //         $("#f11").css("display", "none");
    //         $("#f13").css("display", "none");
    //         $("#f14").css("display", "none");
    //         $("#f15").css("display", "none");
    //         $("#f16").css("display", "none");
    //     }
    // });

    // //=========================================

    // //f8=======================================
    // $('#f10_1').click(function() {
    //     if ($('#f10_1').is(':checked')) {
    //         $("#f9").css("display", "none");
    //         $("#f10").css("display", "none");
    //         $("#f11").css("display", "inline");
    //     }
    // });

    // //=========================================

    // $(document).ready(function() {
    //     $("#f4").css("display", "none");
    //     $("#f5").css("display", "none");
    //     $("#f6").css("display", "none");
    //     $("#f7").css("display", "none");
    //     $("#f7a").css("display", "none");
    //     $("#f8").css("display", "none");
    //     $("#f9").css("display", "none");
    //     $("#f10").css("display", "none");
    //     $("#f11").css("display", "none");
    //     $("#f13").css("display", "none");
    //     $("#f14").css("display", "none");
    //     $("#f15").css("display", "none");
    //     $("#f16").css("display", "none");
    //     $("#f17").css("display", "none");
    // });
</script>