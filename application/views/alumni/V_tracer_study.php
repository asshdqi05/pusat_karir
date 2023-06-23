<div class="col-sm-12">
    <form method="POST" action="<?= base_url('C_alumni/save_tracer_study') ?>">

        <div class="card card-sm">
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
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Dimana Anda Bekerja / Berwirausaha sekarang?(Nama Perusahaan)</label>
                    <input type="text" name="pekerjaan" class="form-control" required>
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
                        <th class="text-center"><input name="perkuliahan" value="1" type="radio"></th>
                        <th class="text-center"><input name="perkuliahan" value="2" type="radio"></th>
                        <th class="text-center"><input name="perkuliahan" value="3" type="radio"></th>
                        <th class="text-center"><input name="perkuliahan" value="4" type="radio"></th>
                        <th class="text-center"><input name="perkuliahan" value="5" type="radio"></th>
                    </tr>

                    <tr>
                        <th>Demonstrasi</th>
                        <th class="text-center"><input name="demonstrasi" value="1" type="radio"></th>
                        <th class="text-center"><input name="demonstrasi" value="2" type="radio"></th>
                        <th class="text-center"><input name="demonstrasi" value="3" type="radio"></th>
                        <th class="text-center"><input name="demonstrasi" value="4" type="radio"></th>
                        <th class="text-center"><input name="demonstrasi" value="5" type="radio"></th>
                    </tr>

                    <tr>
                        <th>partisipasi dalam proyek riset</th>
                        <th class="text-center"><input name="partisipasi_dalam_proyek_riset" value="1" type="radio"></th>
                        <th class="text-center"><input name="partisipasi_dalam_proyek_riset" value="2" type="radio"></th>
                        <th class="text-center"><input name="partisipasi_dalam_proyek_riset" value="3" type="radio"></th>
                        <th class="text-center"><input name="partisipasi_dalam_proyek_riset" value="4" type="radio"></th>
                        <th class="text-center"><input name="partisipasi_dalam_proyek_riset" value="5" type="radio"></th>
                    </tr>

                    <tr>
                        <th>Magang</th>
                        <th class="text-center"><input name="magang" value="1" type="radio"></th>
                        <th class="text-center"><input name="magang" value="2" type="radio"></th>
                        <th class="text-center"><input name="magang" value="3" type="radio"></th>
                        <th class="text-center"><input name="magang" value="4" type="radio"></th>
                        <th class="text-center"><input name="magang" value="5" type="radio"></th>
                    </tr>

                    <tr>
                        <th>Praktikum</th>
                        <th class="text-center"><input name="praktikum" value="1" type="radio"></th>
                        <th class="text-center"><input name="praktikum" value="2" type="radio"></th>
                        <th class="text-center"><input name="praktikum" value="3" type="radio"></th>
                        <th class="text-center"><input name="praktikum" value="4" type="radio"></th>
                        <th class="text-center"><input name="praktikum" value="5" type="radio"></th>
                    </tr>

                    <tr>
                        <th>Kerja Lapangan</th>
                        <th class="text-center"><input name="kerja_lapangan" value="1" type="radio"></th>
                        <th class="text-center"><input name="kerja_lapangan" value="2" type="radio"></th>
                        <th class="text-center"><input name="kerja_lapangan" value="3" type="radio"></th>
                        <th class="text-center"><input name="kerja_lapangan" value="4" type="radio"></th>
                        <th class="text-center"><input name="kerja_lapangan" value="5" type="radio"></th>
                    </tr>

                    <tr>
                        <th>Diskusi</th>
                        <th class="text-center"><input name="diskusi" value="1" type="radio"></th>
                        <th class="text-center"><input name="diskusi" value="2" type="radio"></th>
                        <th class="text-center"><input name="diskusi" value="3" type="radio"></th>
                        <th class="text-center"><input name="diskusi" value="4" type="radio"></th>
                        <th class="text-center"><input name="diskusi" value="5" type="radio"></th>
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
                            <span class="input-group-text"><input type="radio" value="sesudah" name="posisi_j_f3" id="f3_1"> Kira - kira <input type="number" id="f3-1" name="j_f3" class="form-control col-sm-2" disabled>Bulan Sesudah Lulus</span>
                        </div>
                    </div>
                </div>
                <br>
                <div class="col-lg-6">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><input type="radio" value="sebelum" name="posisi_j_f3" id="f3_2"> Kira - kira <input type="number" id="f3-2" name="j_f3" class="form-control col-sm-2" disabled>Bulan Sebelum Lulus</span>
                        </div>
                    </div>
                </div>
                <br>
                <div class="col-lg-6">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><input name="posisi_j_f3" value="tidak mencari pekerjaan" type="radio" id="f3_3"> saya tidak mencari pekerjaan (langsung ke pertanyaan F8)</span>
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
                    <label style="color: red;">Bagaimana anda mencari pekerjaan tersebut? Jawaban bisa lebih dari 1</label>
                    <div class="col-lg-8">
                        <input name="f4[]" value="melalui iklan dikoran/majalah/brosur" type="checkbox"> melalui iklan dikoran/majalah/brosur
                        <br>
                        <input name="f4[]" value="melamar ke perusahaan tanpa mengetahui lowongan yang ada" type="checkbox"> melamar ke perusahaan tanpa mengetahui lowongan yang ada
                        <br>
                        <input name="f4[]" value="pergi ke bursa/pameran kerja" type="checkbox"> pergi ke bursa/pameran kerja
                        <br>
                        <input name="f4[]" value="mencari lewat internet/iklan online/milis" type="checkbox"> mencari lewat internet/iklan online/milis
                        <br>
                        <input name="f4[]" value="dihubungi oleh perusahaan" type="checkbox"> dihubungi oleh perusahaan
                        <br>
                        <input name="f4[]" value="menghubungi kemenakertrans" type="checkbox"> menghubungi kemenakertrans
                        <br>
                        <input name="f4[]" value="menghubungi agen tenaga kerja komersial/swasta" type="checkbox"> menghubungi agen tenaga kerja komersial/swasta
                        <br>
                        <input name="f4[]" value="memperoleh informasi dari pusat/kantor pengembangan karir fakultas/universitas" type="checkbox"> memperoleh informasi dari pusat/kantor pengembangan karir fakultas/universitas
                        <br>
                        <input name="f4[]" value="menghubungi kantor kemahasiswaan/hubungan alumni" type="checkbox"> menghubungi kantor kemahasiswaan/hubungan alumni
                        <br>
                        <input name="f4[]" value="membangun jejaring/network sejak masih kuliah" type="checkbox"> membangun jejaring/network sejak masih kuliah
                        <br>
                        <input name="f4[]" value="membangun bisnis sendiri" type="checkbox"> membangun bisnis sendiri
                        <br>
                        <input name="f4[]" value="melalui penempatan kerja/magang" type="checkbox"> melalui penempatan kerja/magang
                        <br>
                        <input name="f4[]" value="bekerja ditempat yang sama dengan tempat kerja semasa kuliah" type="checkbox"> bekerja ditempat yang sama dengan tempat kerja semasa kuliah
                        <br>
                        <input name="f4[]" value="lainnya" type="checkbox"> Lainnya
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
                                <span class="input-group-text"><input type="radio" name="posisi_j_f5" value="sesudah" id="f5_1"> Kira - kira <input type="number" id="f5-1" name="j_f5" class="form-control col-sm-2" disabled>Bulan Sesudah Lulus Ujian</span>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="col-lg-6">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><input type="radio" name="posisi_j_f5" value="sebelum" id="f5_2"> Kira - kira <input type="number" id="f5-2" name="j_f5" class="form-control col-sm-2" disabled>Bulan Sebelum Lulus Ujian</span>
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
                            <input type="text" name="f6_1" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Instansi:</label>
                            <input type="text" name="f6_2" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Institusi:</label>
                            <input type="text" name="f6_3" class="form-control">
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
                            <input type="text" name="f7_1" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Instansi:</label>
                            <input type="text" name="f7_2" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Institusi:</label>
                            <input type="text" name="f7_3" class="form-control">
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
                            <input type="text" name="f7a_1" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Instansi:</label>
                            <input type="text" name="f7a_2" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Institusi:</label>
                            <input type="text" name="f7a_3" class="form-control">
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
                        <input name="f8" id="f8_1" value="Ya" type="radio"> Ya (lanjutkan ke f11)
                        <br>
                        <input name="f8" id="f8_2" value="Tidak" type="radio"> Tidak
                    </div>
                </div>
            </div>
        </span>

        <span id="f9">
            <div class="card card-sm">
                <div class="card-header bg-primary">
                    <h5 class="card-title m-0">f9</h5>
                </div>
                <div class="card-body">
                    <label style="color: red;">bagaimana anda menggambarkan situasi anda saat ini? Jawaban boleh lebih dari 1</label>
                    <div class="col-lg-8">
                        <input name="f9[]" value="Saya masih belajar/melanjutkan kuliah profesi/pascasarjana" type="checkbox"> Saya masih belajar/melanjutkan kuliah profesi/pascasarjana
                        <br>
                        <input name="f9[]" value="saya menikah" type="checkbox"> saya menikah
                        <br>
                        <input name="f9[]" value="saya sibuk dengan keluarga dan anak-anak" type="checkbox"> saya sibuk dengan keluarga dan anak-anak
                        <br>
                        <input name="f9[]" value="saya sedang mencari pekerjaan" type="checkbox"> saya sedang mencari pekerjaan
                        <br>
                        <input name="f9[]" value="lainnya" type="checkbox"> Lainnya
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
                        <input name="f10" value="tidak" type="radio"> Tidak
                        <br>
                        <input name="f10" value="tidak, tapi saya sedang menunggu hasil lamaran kerja" type="radio"> tidak, tapi saya sedang menunggu hasil lamaran kerja
                        <br>
                        <input name="f10" value="ya, saya akan mulai bekerja dalam 2 minggu kedepan" type="radio"> ya, saya akan mulai bekerja dalam 2 minggu kedepan
                        <br>
                        <input name="f10" value="ya, tapi saya belum pasti akan bekerja dalam 2 minggu kedepan" type="radio"> ya, tapi saya belum pasti akan bekerja dalam 2 minggu kedepan
                        <br>
                        <input name="f10" value="lainnya" type="radio"> Lainnya
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
                        <input name="f11" value="instansi pemerintah (termasuk bumn)" type="radio"> instansi pemerintah (termasuk bumn)
                        <br>
                        <input name="f11" value="organisasi non-profit/lembaga swadaya masyarakat" type="radio"> organisasi non-profit/lembaga swadaya masyarakat
                        <br>
                        <input name="f11" value="perusahaan swasta" type="radio"> perusahaan swasta
                        <br>
                        <input name="f11" value="wiraswasta/perusahaan sendiri" type="radio"> wiraswasta/perusahaan sendiri
                        <br>
                        <input name="f11" value="lainnya" type="radio"> Lainnya
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
                            <input type="number" name="f13_1" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Dari lembur dan tip:</label>
                            <input type="number" name="f13_2" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>dari pekerjaan lainnya:</label>
                            <input type="number" name="f13_3" class="form-control">
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
                        <input name="f14" value="Sangat erat" type="radio"> Sangat erat
                        <br>
                        <input name="f14" value="erat" type="radio"> Erat
                        <br>
                        <input name="f14" value="Cukup erat" type="radio"> Cukup erat
                        <br>
                        <input name="f14" value="Kurang erat" type="radio"> Kurang erat
                        <br>
                        <input name="f14" value="Tidak Sama sekali" type="radio"> Tidak Sama Sekali
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
                        <input name="f15" value="setingkat lebih tinggi" type="radio"> setingkat lebih tinggi
                        <br>
                        <input name="f15" value="tingkat yang sama" type="radio"> tingkat yang sama
                        <br>
                        <input name="f15" value="setingkat lebih rendah" type="radio"> setingkat lebih rendah
                        <br>
                        <input name="f15" value="tidak perlu pendidikan tinggi" type="radio"> tidak perlu pendidikan tinggi
                    </div>
                </div>
            </div>
        </span>

        <span id="f16">
            <div class="card card-sm">
                <div class="card-header bg-primary">
                    <h5 class="card-title m-0">f16</h5>
                </div>
                <div class="card-body">
                    <label style="color: red;">Jika menurut anda pekerjaan anda saat ini tidak sesuai dengan pendidikan anda, mengapa anda mengambilnya? Jawaban bisa lebih dari 1</label>
                    <div class="col-lg-10">
                        <input name="f16[]" value="jawaban tidak sesuai, pekerjaan saya sekarang sudah sesuai dengan pendidikan saya" type="checkbox"> jawaban tidak sesuai, pekerjaan saya sekarang sudah sesuai dengan pendidikan saya
                        <br>
                        <input name="f16[]" value="saya belum mendapatkan pekerjaan yang lebih sesuai" type="checkbox"> saya belum mendapatkan pekerjaan yang lebih sesuai
                        <br>
                        <input name="f16[]" value="di pekerjaan ini saya memperoleh prospek karir yang baik" type="checkbox"> di pekerjaan ini saya memperoleh prospek karir yang baik
                        <br>
                        <input name="f16[]" value="saya lebih suka bekerja di area pekerjaan yang tidak ada hubungannya dengan pendidikan saya" type="checkbox"> saya lebih suka bekerja di area pekerjaan yang tidak ada hubungannya dengan pendidikan saya
                        <br>
                        <input name="f16[]" value="saya dipromosikan ke posisi yang kurang berhubungan dengan pendidikan saya dibanding posisi sebelumnya" type="checkbox"> saya dipromosikan ke posisi yang kurang berhubungan dengan pendidikan saya dibanding posisi sebelumnya
                        <br>
                        <input name="f16[]" value="saya dapat memperoleh pendapatan yang lebih tinggi di pekerjaan ini" type="checkbox"> saya dapat memperoleh pendapatan yang lebih tinggi di pekerjaan ini
                        <br>
                        <input name="f16[]" value="pekerjaan saya saat ini lebih aman/terjamin/secure" type="checkbox"> pekerjaan saya saat ini lebih aman/terjamin/secure
                        <br>
                        <input name="f16[]" value="pekerjaan saya saat ini lebih menarik" type="checkbox"> pekerjaan saya saat ini lebih menarik
                        <br>
                        <input name="f16[]" value="pekerjaan saya saat ini lebih memungkinkan saya mengambil pekerjaan tambahan/jadwal yang fleksibel/dll" type="checkbox"> pekerjaan saya saat ini lebih memungkinkan saya mengambil pekerjaan tambahan/jadwal yang fleksibel/dll
                        <br>
                        <input name="f16[]" value="pekerjaan saya saat ini lokasinya lebih dekat dari rumah saya" type="checkbox"> pekerjaan saya saat ini lokasinya lebih dekat dari rumah saya
                        <br>
                        <input name="f16[]" value="pekerjaan saya saat ini dapat lebih menjamin kebutuhan keluarga saya" type="checkbox"> pekerjaan saya saat ini dapat lebih menjamin kebutuhan keluarga saya
                        <br>
                        <input name="f16[]" value="pada awal meniti karir ini, saya harus menerima pekerjaan yang tidak berhubungan dengan pendidikan saya" type="checkbox"> pada awal meniti karir ini, saya harus menerima pekerjaan yang tidak berhubungan dengan pendidikan saya
                        <br>
                        <input name="f16[]" value="lainnya" type="checkbox"> Lainnya
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
                            <th class="text-center"><input name="f17_1" value="1" type="radio"></th>
                            <th class="text-center"><input name="f17_1" value="2" type="radio"></th>
                            <th class="text-center"><input name="f17_1" value="3" type="radio"></th>
                            <th class="text-center"><input name="f17_1" value="4" type="radio"></th>
                            <th class="text-center"><input name="f17_1" value="5" type="radio"></th>

                            <th class="text-center"><input name="f17_1_2" value="1" type="radio"></th>
                            <th class="text-center"><input name="f17_1_2" value="2" type="radio"></th>
                            <th class="text-center"><input name="f17_1_2" value="3" type="radio"></th>
                            <th class="text-center"><input name="f17_1_2" value="4" type="radio"></th>
                            <th class="text-center"><input name="f17_1_2" value="5" type="radio"></th>
                        </tr>

                        <tr>
                            <th>pengetahuan diluar bidang atau disiplin ilmu anda</th>
                            <th class="text-center"><input name="f17_2" value="1" type="radio"></th>
                            <th class="text-center"><input name="f17_2" value="2" type="radio"></th>
                            <th class="text-center"><input name="f17_2" value="3" type="radio"></th>
                            <th class="text-center"><input name="f17_2" value="4" type="radio"></th>
                            <th class="text-center"><input name="f17_2" value="5" type="radio"></th>

                            <th class="text-center"><input name="f17_2_2" value="1" type="radio"></th>
                            <th class="text-center"><input name="f17_2_2" value="2" type="radio"></th>
                            <th class="text-center"><input name="f17_2_2" value="3" type="radio"></th>
                            <th class="text-center"><input name="f17_2_2" value="4" type="radio"></th>
                            <th class="text-center"><input name="f17_2_2" value="5" type="radio"></th>
                        </tr>

                        <tr>
                            <th>pengetahuan umum</th>
                            <th class="text-center"><input name="f17_3" value="1" type="radio"></th>
                            <th class="text-center"><input name="f17_3" value="2" type="radio"></th>
                            <th class="text-center"><input name="f17_3" value="3" type="radio"></th>
                            <th class="text-center"><input name="f17_3" value="4" type="radio"></th>
                            <th class="text-center"><input name="f17_3" value="5" type="radio"></th>

                            <th class="text-center"><input name="f17_3_2" value="1" type="radio"></th>
                            <th class="text-center"><input name="f17_3_2" value="2" type="radio"></th>
                            <th class="text-center"><input name="f17_3_2" value="3" type="radio"></th>
                            <th class="text-center"><input name="f17_3_2" value="4" type="radio"></th>
                            <th class="text-center"><input name="f17_3_2" value="5" type="radio"></th>
                        </tr>

                        <tr>
                            <th>bahasa inggris</th>
                            <th class="text-center"><input name="f17_4" value="1" type="radio"></th>
                            <th class="text-center"><input name="f17_4" value="2" type="radio"></th>
                            <th class="text-center"><input name="f17_4" value="3" type="radio"></th>
                            <th class="text-center"><input name="f17_4" value="4" type="radio"></th>
                            <th class="text-center"><input name="f17_4" value="5" type="radio"></th>

                            <th class="text-center"><input name="f17_4_2" value="1" type="radio"></th>
                            <th class="text-center"><input name="f17_4_2" value="2" type="radio"></th>
                            <th class="text-center"><input name="f17_4_2" value="3" type="radio"></th>
                            <th class="text-center"><input name="f17_4_2" value="4" type="radio"></th>
                            <th class="text-center"><input name="f17_4_2" value="5" type="radio"></th>
                        </tr>
                        <tr>
                            <th>keterampilan internet</th>
                            <th class="text-center"><input name="f17_5" value="1" type="radio"></th>
                            <th class="text-center"><input name="f17_5" value="2" type="radio"></th>
                            <th class="text-center"><input name="f17_5" value="3" type="radio"></th>
                            <th class="text-center"><input name="f17_5" value="4" type="radio"></th>
                            <th class="text-center"><input name="f17_5" value="5" type="radio"></th>

                            <th class="text-center"><input name="f17_5_2" value="1" type="radio"></th>
                            <th class="text-center"><input name="f17_5_2" value="2" type="radio"></th>
                            <th class="text-center"><input name="f17_5_2" value="3" type="radio"></th>
                            <th class="text-center"><input name="f17_5_2" value="4" type="radio"></th>
                            <th class="text-center"><input name="f17_5_2" value="5" type="radio"></th>
                        </tr>

                        <tr>
                            <th>keterampilan komputer</th>
                            <th class="text-center"><input name="f17_6" value="1" type="radio"></th>
                            <th class="text-center"><input name="f17_6" value="2" type="radio"></th>
                            <th class="text-center"><input name="f17_6" value="3" type="radio"></th>
                            <th class="text-center"><input name="f17_6" value="4" type="radio"></th>
                            <th class="text-center"><input name="f17_6" value="5" type="radio"></th>

                            <th class="text-center"><input name="f17_6_2" value="1" type="radio"></th>
                            <th class="text-center"><input name="f17_6_2" value="2" type="radio"></th>
                            <th class="text-center"><input name="f17_6_2" value="3" type="radio"></th>
                            <th class="text-center"><input name="f17_6_2" value="4" type="radio"></th>
                            <th class="text-center"><input name="f17_6_2" value="5" type="radio"></th>
                        </tr>

                        <tr>
                            <th>berpikir kritis</th>
                            <th class="text-center"><input name="f17_7" value="1" type="radio"></th>
                            <th class="text-center"><input name="f17_7" value="2" type="radio"></th>
                            <th class="text-center"><input name="f17_7" value="3" type="radio"></th>
                            <th class="text-center"><input name="f17_7" value="4" type="radio"></th>
                            <th class="text-center"><input name="f17_7" value="5" type="radio"></th>

                            <th class="text-center"><input name="f17_7_2" value="1" type="radio"></th>
                            <th class="text-center"><input name="f17_7_2" value="2" type="radio"></th>
                            <th class="text-center"><input name="f17_7_2" value="3" type="radio"></th>
                            <th class="text-center"><input name="f17_7_2" value="4" type="radio"></th>
                            <th class="text-center"><input name="f17_7_2" value="5" type="radio"></th>
                        </tr>

                        <tr>
                            <th>keterampilan riset</th>
                            <th class="text-center"><input name="f17_8" value="1" type="radio"></th>
                            <th class="text-center"><input name="f17_8" value="2" type="radio"></th>
                            <th class="text-center"><input name="f17_8" value="3" type="radio"></th>
                            <th class="text-center"><input name="f17_8" value="4" type="radio"></th>
                            <th class="text-center"><input name="f17_8" value="5" type="radio"></th>

                            <th class="text-center"><input name="f17_8_2" value="1" type="radio"></th>
                            <th class="text-center"><input name="f17_8_2" value="2" type="radio"></th>
                            <th class="text-center"><input name="f17_8_2" value="3" type="radio"></th>
                            <th class="text-center"><input name="f17_8_2" value="4" type="radio"></th>
                            <th class="text-center"><input name="f17_8_2" value="5" type="radio"></th>
                        </tr>

                        <tr>
                            <th>kemampuan belajar</th>
                            <th class="text-center"><input name="f17_9" value="1" type="radio"></th>
                            <th class="text-center"><input name="f17_9" value="2" type="radio"></th>
                            <th class="text-center"><input name="f17_9" value="3" type="radio"></th>
                            <th class="text-center"><input name="f17_9" value="4" type="radio"></th>
                            <th class="text-center"><input name="f17_9" value="5" type="radio"></th>

                            <th class="text-center"><input name="f17_9_2" value="1" type="radio"></th>
                            <th class="text-center"><input name="f17_9_2" value="2" type="radio"></th>
                            <th class="text-center"><input name="f17_9_2" value="3" type="radio"></th>
                            <th class="text-center"><input name="f17_9_2" value="4" type="radio"></th>
                            <th class="text-center"><input name="f17_9_2" value="5" type="radio"></th>
                        </tr>

                        <tr>
                            <th>kemampuan berkomunikasi</th>
                            <th class="text-center"><input name="f17_10" value="1" type="radio"></th>
                            <th class="text-center"><input name="f17_10" value="2" type="radio"></th>
                            <th class="text-center"><input name="f17_10" value="3" type="radio"></th>
                            <th class="text-center"><input name="f17_10" value="4" type="radio"></th>
                            <th class="text-center"><input name="f17_10" value="5" type="radio"></th>

                            <th class="text-center"><input name="f17_10_2" value="1" type="radio"></th>
                            <th class="text-center"><input name="f17_10_2" value="2" type="radio"></th>
                            <th class="text-center"><input name="f17_10_2" value="3" type="radio"></th>
                            <th class="text-center"><input name="f17_10_2" value="4" type="radio"></th>
                            <th class="text-center"><input name="f17_10_2" value="5" type="radio"></th>
                        </tr>

                        <tr>
                            <th>bekerja dibawah tekanan</th>
                            <th class="text-center"><input name="f17_11" value="1" type="radio"></th>
                            <th class="text-center"><input name="f17_11" value="2" type="radio"></th>
                            <th class="text-center"><input name="f17_11" value="3" type="radio"></th>
                            <th class="text-center"><input name="f17_11" value="4" type="radio"></th>
                            <th class="text-center"><input name="f17_11" value="5" type="radio"></th>

                            <th class="text-center"><input name="f17_11_2" value="1" type="radio"></th>
                            <th class="text-center"><input name="f17_11_2" value="2" type="radio"></th>
                            <th class="text-center"><input name="f17_11_2" value="3" type="radio"></th>
                            <th class="text-center"><input name="f17_11_2" value="4" type="radio"></th>
                            <th class="text-center"><input name="f17_11_2" value="5" type="radio"></th>
                        </tr>

                        <tr>
                            <th>manajemen waktu</th>
                            <th class="text-center"><input name="f17_12" value="1" type="radio"></th>
                            <th class="text-center"><input name="f17_12" value="2" type="radio"></th>
                            <th class="text-center"><input name="f17_12" value="3" type="radio"></th>
                            <th class="text-center"><input name="f17_12" value="4" type="radio"></th>
                            <th class="text-center"><input name="f17_12" value="5" type="radio"></th>

                            <th class="text-center"><input name="f17_12_2" value="1" type="radio"></th>
                            <th class="text-center"><input name="f17_12_2" value="2" type="radio"></th>
                            <th class="text-center"><input name="f17_12_2" value="3" type="radio"></th>
                            <th class="text-center"><input name="f17_12_2" value="4" type="radio"></th>
                            <th class="text-center"><input name="f17_12_2" value="5" type="radio"></th>
                        </tr>

                        <tr>
                            <th>bekerja secara mandiri</th>
                            <th class="text-center"><input name="f17_13" value="1" type="radio"></th>
                            <th class="text-center"><input name="f17_13" value="2" type="radio"></th>
                            <th class="text-center"><input name="f17_13" value="3" type="radio"></th>
                            <th class="text-center"><input name="f17_13" value="4" type="radio"></th>
                            <th class="text-center"><input name="f17_13" value="5" type="radio"></th>

                            <th class="text-center"><input name="f17_13_2" value="1" type="radio"></th>
                            <th class="text-center"><input name="f17_13_2" value="2" type="radio"></th>
                            <th class="text-center"><input name="f17_13_2" value="3" type="radio"></th>
                            <th class="text-center"><input name="f17_13_2" value="4" type="radio"></th>
                            <th class="text-center"><input name="f17_13_2" value="5" type="radio"></th>
                        </tr>

                        <tr>
                            <th>bekerja dalam tim/bekerjasama dengan orang lain</th>
                            <th class="text-center"><input name="f17_14" value="1" type="radio"></th>
                            <th class="text-center"><input name="f17_14" value="2" type="radio"></th>
                            <th class="text-center"><input name="f17_14" value="3" type="radio"></th>
                            <th class="text-center"><input name="f17_14" value="4" type="radio"></th>
                            <th class="text-center"><input name="f17_14" value="5" type="radio"></th>

                            <th class="text-center"><input name="f17_14_2" value="1" type="radio"></th>
                            <th class="text-center"><input name="f17_14_2" value="2" type="radio"></th>
                            <th class="text-center"><input name="f17_14_2" value="3" type="radio"></th>
                            <th class="text-center"><input name="f17_14_2" value="4" type="radio"></th>
                            <th class="text-center"><input name="f17_14_2" value="5" type="radio"></th>
                        </tr>

                        <tr>
                            <th>kemampuan dalam memecahkan masalah</th>
                            <th class="text-center"><input name="f17_15" value="1" type="radio"></th>
                            <th class="text-center"><input name="f17_15" value="2" type="radio"></th>
                            <th class="text-center"><input name="f17_15" value="3" type="radio"></th>
                            <th class="text-center"><input name="f17_15" value="4" type="radio"></th>
                            <th class="text-center"><input name="f17_15" value="5" type="radio"></th>

                            <th class="text-center"><input name="f17_15_2" value="1" type="radio"></th>
                            <th class="text-center"><input name="f17_15_2" value="2" type="radio"></th>
                            <th class="text-center"><input name="f17_15_2" value="3" type="radio"></th>
                            <th class="text-center"><input name="f17_15_2" value="4" type="radio"></th>
                            <th class="text-center"><input name="f17_15_2" value="5" type="radio"></th>
                        </tr>

                        <tr>
                            <th>negosiasi</th>
                            <th class="text-center"><input name="f17_16" value="1" type="radio"></th>
                            <th class="text-center"><input name="f17_16" value="2" type="radio"></th>
                            <th class="text-center"><input name="f17_16" value="3" type="radio"></th>
                            <th class="text-center"><input name="f17_16" value="4" type="radio"></th>
                            <th class="text-center"><input name="f17_16" value="5" type="radio"></th>

                            <th class="text-center"><input name="f17_16_2" value="1" type="radio"></th>
                            <th class="text-center"><input name="f17_16_2" value="2" type="radio"></th>
                            <th class="text-center"><input name="f17_16_2" value="3" type="radio"></th>
                            <th class="text-center"><input name="f17_16_2" value="4" type="radio"></th>
                            <th class="text-center"><input name="f17_16_2" value="5" type="radio"></th>
                        </tr>

                        <tr>
                            <th>kemampuan adaptasi</th>
                            <th class="text-center"><input name="f17_17" value="1" type="radio"></th>
                            <th class="text-center"><input name="f17_17" value="2" type="radio"></th>
                            <th class="text-center"><input name="f17_17" value="3" type="radio"></th>
                            <th class="text-center"><input name="f17_17" value="4" type="radio"></th>
                            <th class="text-center"><input name="f17_17" value="5" type="radio"></th>

                            <th class="text-center"><input name="f17_17_2" value="1" type="radio"></th>
                            <th class="text-center"><input name="f17_17_2" value="2" type="radio"></th>
                            <th class="text-center"><input name="f17_17_2" value="3" type="radio"></th>
                            <th class="text-center"><input name="f17_17_2" value="4" type="radio"></th>
                            <th class="text-center"><input name="f17_17_2" value="5" type="radio"></th>
                        </tr>

                        <tr>
                            <th>loyalitas</th>
                            <th class="text-center"><input name="f17_18" value="1" type="radio"></th>
                            <th class="text-center"><input name="f17_18" value="2" type="radio"></th>
                            <th class="text-center"><input name="f17_18" value="3" type="radio"></th>
                            <th class="text-center"><input name="f17_18" value="4" type="radio"></th>
                            <th class="text-center"><input name="f17_18" value="5" type="radio"></th>

                            <th class="text-center"><input name="f17_18_2" value="1" type="radio"></th>
                            <th class="text-center"><input name="f17_18_2" value="2" type="radio"></th>
                            <th class="text-center"><input name="f17_18_2" value="3" type="radio"></th>
                            <th class="text-center"><input name="f17_18_2" value="4" type="radio"></th>
                            <th class="text-center"><input name="f17_18_2" value="5" type="radio"></th>
                        </tr>

                        <tr>
                            <th>integritas</th>
                            <th class="text-center"><input name="f17_19" value="1" type="radio"></th>
                            <th class="text-center"><input name="f17_19" value="2" type="radio"></th>
                            <th class="text-center"><input name="f17_19" value="3" type="radio"></th>
                            <th class="text-center"><input name="f17_19" value="4" type="radio"></th>
                            <th class="text-center"><input name="f17_19" value="5" type="radio"></th>

                            <th class="text-center"><input name="f17_19_2" value="1" type="radio"></th>
                            <th class="text-center"><input name="f17_19_2" value="2" type="radio"></th>
                            <th class="text-center"><input name="f17_19_2" value="3" type="radio"></th>
                            <th class="text-center"><input name="f17_19_2" value="4" type="radio"></th>
                            <th class="text-center"><input name="f17_19_2" value="5" type="radio"></th>
                        </tr>

                        <tr>
                            <th>bekerja dengan orang yang berbeda budaya maupun latar belakang</th>
                            <th class="text-center"><input name="f17_20" value="1" type="radio"></th>
                            <th class="text-center"><input name="f17_20" value="2" type="radio"></th>
                            <th class="text-center"><input name="f17_20" value="3" type="radio"></th>
                            <th class="text-center"><input name="f17_20" value="4" type="radio"></th>
                            <th class="text-center"><input name="f17_20" value="5" type="radio"></th>

                            <th class="text-center"><input name="f17_20_2" value="1" type="radio"></th>
                            <th class="text-center"><input name="f17_20_2" value="2" type="radio"></th>
                            <th class="text-center"><input name="f17_20_2" value="3" type="radio"></th>
                            <th class="text-center"><input name="f17_20_2" value="4" type="radio"></th>
                            <th class="text-center"><input name="f17_20_2" value="5" type="radio"></th>
                        </tr>

                        <tr>
                            <th>kepemimpinan</th>
                            <th class="text-center"><input name="f17_21" value="1" type="radio"></th>
                            <th class="text-center"><input name="f17_21" value="2" type="radio"></th>
                            <th class="text-center"><input name="f17_21" value="3" type="radio"></th>
                            <th class="text-center"><input name="f17_21" value="4" type="radio"></th>
                            <th class="text-center"><input name="f17_21" value="5" type="radio"></th>

                            <th class="text-center"><input name="f17_21_2" value="1" type="radio"></th>
                            <th class="text-center"><input name="f17_21_2" value="2" type="radio"></th>
                            <th class="text-center"><input name="f17_21_2" value="3" type="radio"></th>
                            <th class="text-center"><input name="f17_21_2" value="4" type="radio"></th>
                            <th class="text-center"><input name="f17_21_2" value="5" type="radio"></th>
                        </tr>

                        <tr>
                            <th>kemampuan dalam memegang tanggung jawab</th>
                            <th class="text-center"><input name="f17_22" value="1" type="radio"></th>
                            <th class="text-center"><input name="f17_22" value="2" type="radio"></th>
                            <th class="text-center"><input name="f17_22" value="3" type="radio"></th>
                            <th class="text-center"><input name="f17_22" value="4" type="radio"></th>
                            <th class="text-center"><input name="f17_22" value="5" type="radio"></th>

                            <th class="text-center"><input name="f17_22_2" value="1" type="radio"></th>
                            <th class="text-center"><input name="f17_22_2" value="2" type="radio"></th>
                            <th class="text-center"><input name="f17_22_2" value="3" type="radio"></th>
                            <th class="text-center"><input name="f17_22_2" value="4" type="radio"></th>
                            <th class="text-center"><input name="f17_22_2" value="5" type="radio"></th>
                        </tr>

                        <tr>
                            <th>Inisiatif</th>
                            <th class="text-center"><input name="f17_23" value="1" type="radio"></th>
                            <th class="text-center"><input name="f17_23" value="2" type="radio"></th>
                            <th class="text-center"><input name="f17_23" value="3" type="radio"></th>
                            <th class="text-center"><input name="f17_23" value="4" type="radio"></th>
                            <th class="text-center"><input name="f17_23" value="5" type="radio"></th>

                            <th class="text-center"><input name="f17_23_2" value="1" type="radio"></th>
                            <th class="text-center"><input name="f17_23_2" value="2" type="radio"></th>
                            <th class="text-center"><input name="f17_23_2" value="3" type="radio"></th>
                            <th class="text-center"><input name="f17_23_2" value="4" type="radio"></th>
                            <th class="text-center"><input name="f17_23_2" value="5" type="radio"></th>
                        </tr>

                        <tr>
                            <th>manajemen proyek/program</th>
                            <th class="text-center"><input name="f17_24" value="1" type="radio"></th>
                            <th class="text-center"><input name="f17_24" value="2" type="radio"></th>
                            <th class="text-center"><input name="f17_24" value="3" type="radio"></th>
                            <th class="text-center"><input name="f17_24" value="4" type="radio"></th>
                            <th class="text-center"><input name="f17_24" value="5" type="radio"></th>

                            <th class="text-center"><input name="f17_24_2" value="1" type="radio"></th>
                            <th class="text-center"><input name="f17_24_2" value="2" type="radio"></th>
                            <th class="text-center"><input name="f17_24_2" value="3" type="radio"></th>
                            <th class="text-center"><input name="f17_24_2" value="4" type="radio"></th>
                            <th class="text-center"><input name="f17_24_2" value="5" type="radio"></th>
                        </tr>

                        <tr>
                            <th>kemampuan untuk mempresentasikan ide/produk/laporan</th>
                            <th class="text-center"><input name="f17_25" value="1" type="radio"></th>
                            <th class="text-center"><input name="f17_25" value="2" type="radio"></th>
                            <th class="text-center"><input name="f17_25" value="3" type="radio"></th>
                            <th class="text-center"><input name="f17_25" value="4" type="radio"></th>
                            <th class="text-center"><input name="f17_25" value="5" type="radio"></th>

                            <th class="text-center"><input name="f17_25_2" value="1" type="radio"></th>
                            <th class="text-center"><input name="f17_25_2" value="2" type="radio"></th>
                            <th class="text-center"><input name="f17_25_2" value="3" type="radio"></th>
                            <th class="text-center"><input name="f17_25_2" value="4" type="radio"></th>
                            <th class="text-center"><input name="f17_25_2" value="5" type="radio"></th>
                        </tr>

                        <tr>
                            <th>kemampuan dalam menulis laporan, memo, dan dokumen</th>
                            <th class="text-center"><input name="f17_26" value="1" type="radio"></th>
                            <th class="text-center"><input name="f17_26" value="2" type="radio"></th>
                            <th class="text-center"><input name="f17_26" value="3" type="radio"></th>
                            <th class="text-center"><input name="f17_26" value="4" type="radio"></th>
                            <th class="text-center"><input name="f17_26" value="5" type="radio"></th>

                            <th class="text-center"><input name="f17_26_2" value="1" type="radio"></th>
                            <th class="text-center"><input name="f17_26_2" value="2" type="radio"></th>
                            <th class="text-center"><input name="f17_26_2" value="3" type="radio"></th>
                            <th class="text-center"><input name="f17_26_2" value="4" type="radio"></th>
                            <th class="text-center"><input name="f17_26_2" value="5" type="radio"></th>
                        </tr>

                        <tr>
                            <th>kemampuan untuk terus belajar sepanjang hayat</th>
                            <th class="text-center"><input name="f17_27" value="1" type="radio"></th>
                            <th class="text-center"><input name="f17_27" value="2" type="radio"></th>
                            <th class="text-center"><input name="f17_27" value="3" type="radio"></th>
                            <th class="text-center"><input name="f17_27" value="4" type="radio"></th>
                            <th class="text-center"><input name="f17_27" value="5" type="radio"></th>

                            <th class="text-center"><input name="f17_27_2" value="1" type="radio"></th>
                            <th class="text-center"><input name="f17_27_2" value="2" type="radio"></th>
                            <th class="text-center"><input name="f17_27_2" value="3" type="radio"></th>
                            <th class="text-center"><input name="f17_27_2" value="4" type="radio"></th>
                            <th class="text-center"><input name="f17_27_2" value="5" type="radio"></th>
                        </tr>

                    </table>
                </div>
            </div>
        </span>


        <div class="card col-sm-4">
            <div class="card-body">
                <button type="submit" class="btn btn-lg btn-block btn-primary"><i class="fas fa-save"></i> Simpan</button>
            </div>
        </div>

    </form>
</div>



<script src="<?php echo base_url('assets/') ?>plugins/jquery/jquery.min.js"></script>
<script>
    //f3==================================
    $('#f3_1').click(function() {
        if ($('#f3_1').is(':checked')) {
            $('#f3-1').removeAttr('disabled');
            $('#f3-1').focus();
            $("#f3-2").attr("disabled", "disabled");
            $("#f4").css("display", "inline");
            $("#f5").css("display", "inline");
            $("#f6").css("display", "inline");
            $("#f7").css("display", "inline");
            $("#f7a").css("display", "inline");
            $("#f8").css("display", "inline");
        }
    });

    $('#f3_2').click(function() {
        if ($('#f3_2').is(':checked')) {
            $('#f3-2').removeAttr('disabled');
            $('#f3-2').focus();
            $("#f3-1").attr("disabled", "disabled");
            $("#f4").css("display", "inline");
            $("#f5").css("display", "inline");
            $("#f6").css("display", "inline");
            $("#f7").css("display", "inline");
            $("#f7a").css("display", "inline");
            $("#f8").css("display", "inline");
        }
    });

    $('#f3_3').click(function() {
        if ($('#f3_3').is(':checked')) {
            $("#f3-1").attr("disabled", "disabled");
            $("#f3-2").attr("disabled", "disabled");
            $("#f4").css("display", "none");
            $("#f5").css("display", "none");
            $("#f6").css("display", "none");
            $("#f7").css("display", "none");
            $("#f7a").css("display", "none");
            $("#f8").css("display", "inline");
        }
    });
    //========================================

    //f5===================================

    $('#f5_1').click(function() {
        if ($('#f5_1').is(':checked')) {
            $('#f5-1').removeAttr('disabled');
            $('#f5-1').focus();
            $("#f5-2").attr("disabled", "disabled");
        }
    });
    $('#f5_2').click(function() {
        if ($('#f5_2').is(':checked')) {
            $('#f5-2').removeAttr('disabled');
            $('#f5-2').focus();
            $("#f5-1").attr("disabled", "disabled");
        }
    });
    //=====================================

    //f8=======================================
    $('#f8_1').click(function() {
        if ($('#f8_1').is(':checked')) {
            $("#f9").css("display", "none");
            $("#f10").css("display", "none");
            $("#f11").css("display", "inline");
            $("#f13").css("display", "inline");
            $("#f14").css("display", "inline");
            $("#f15").css("display", "inline");
            $("#f16").css("display", "inline");
            $("#f17").css("display", "inline");
        }
    });

    $('#f8_2').click(function() {
        if ($('#f8_2').is(':checked')) {
            $("#f9").css("display", "inline");
            $("#f10").css("display", "inline");
            $("#f10").css("display", "inline");
            $("#f17").css("display", "inline");
            $("#f11").css("display", "none");
            $("#f13").css("display", "none");
            $("#f14").css("display", "none");
            $("#f15").css("display", "none");
            $("#f16").css("display", "none");
        }
    });

    //=========================================

    //f8=======================================
    $('#f10_1').click(function() {
        if ($('#f10_1').is(':checked')) {
            $("#f9").css("display", "none");
            $("#f10").css("display", "none");
            $("#f11").css("display", "inline");
        }
    });

    //=========================================

    $(document).ready(function() {
        $("#f4").css("display", "none");
        $("#f5").css("display", "none");
        $("#f6").css("display", "none");
        $("#f7").css("display", "none");
        $("#f7a").css("display", "none");
        $("#f8").css("display", "none");
        $("#f9").css("display", "none");
        $("#f10").css("display", "none");
        $("#f11").css("display", "none");
        $("#f13").css("display", "none");
        $("#f14").css("display", "none");
        $("#f15").css("display", "none");
        $("#f16").css("display", "none");
        $("#f17").css("display", "none");
    });
</script>