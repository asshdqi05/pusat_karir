<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <?php if ($this->session->userdata('level') == 1) { ?>
                    <a href="<?= site_url('C_admin/add_lowongan') ?>" class="btn btn-primary btn-flat">
                        <span class="fa fa-plus"></span>
                        Tambah Data
                    </a>
                <?php } else if ($this->session->userdata('level') == 2) { ?>
                    <a href="<?= site_url('C_perusahaan/add_lowongan') ?>" class="btn btn-primary btn-flat">
                        <span class="fa fa-plus"></span>
                        Tambah Data
                    </a>
                <?php } ?>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <th class="text-center">No</th>
                        <th>Nama Lowongan</th>
                        <th>Area Penempatan </th>
                        <th>Nama Perusahaan</th>
                        <th>Batas Waktu Lowongan</th>
                        <th>Daftar Pelamar</th>
                        <th class="text-center">Aksi</th>
                    </thead>

                    <tbody>
                        <?php $no = 1;
                        foreach ($data_lowongan as $d) {
                            $dt = $this->db->get_where('daftar_lowongan', ['id_lowongan' => $d->id_lowongan]);
                        ?>
                            <tr>
                                <td width="50px" class="text-center"><?php echo $no . '.'; ?></td>
                                <td><?= $d->nama_lowongan ?></td>
                                <td><?= $d->area_penempatan ?></td>
                                <td><?= $d->nama_perusahaan ?></td>
                                <td><?= date('d F Y', strtotime($d->batas_lowongan)) ?></td>
                                <?php if ($this->session->userdata('level') == 1) { ?>
                                    <td class="text-center" width="100px">
                                        <a href="<?php echo site_url('C_admin/daftar_pelamar_lowongan/' . $d->id_lowongan); ?>" class="btn btn-primary btn-xs"><span class="fas fa-eye"></span> Lihat ( <span class="text-warning"><b><?= $dt->num_rows() ?></b></span> )</a>
                                    </td>
                                <?php } else if ($this->session->userdata('level') == 2) {  ?>
                                    <td class="text-center" width="100px">
                                        <a href="<?php echo site_url('C_perusahaan/daftar_pelamar_lowongan/' . $d->id_lowongan); ?>" class="btn btn-primary btn-xs"><span class="fas fa-eye"></span> Lihat ( <span class="text-warning"><b><?= $dt->num_rows() ?></b></span> )</a>
                                    </td>
                                <?php } ?>
                                <td class="text-center" width="100px">
                                    <?php if ($this->session->userdata('level') == 1) { ?>
                                        <a href="<?php echo site_url('C_admin/edit_lowongan/' . $d->id_lowongan); ?>" class="btn btn-success btn-xs"><span class="fas fa-edit"></span></a>
                                    <?php } else if ($this->session->userdata('level') == 2) { ?>
                                        <a href="<?php echo site_url('C_perusahaan/edit_lowongan/' . $d->id_lowongan); ?>" class="btn btn-success btn-xs"><span class="fas fa-edit"></span></a>
                                    <?php } ?>
                                    <a class="btn btn-xs btn-danger" href="javascript:void(0)" onclick="hapus('<?= $d->id_lowongan ?>','<?= $d->nama_lowongan ?>')">
                                        <i class="fas fa-trash"></i>
                                    </a>
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

<script>
    function hapus(id_lowongan, nama) {
        $('#hid').val(id_lowongan);
        $('#hnama').html(nama);
        $('#hapus_data').modal('show');
    }
</script>

<div class="modal fade" id="hapus_data" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hapus data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>
            <?php if ($this->session->userdata('level') == 1) { ?>
                <form method="POST" action="<?php echo site_url('C_admin/delete_lowongan') ?>">
                <?php } else if ($this->session->userdata('level') == 2) { ?>
                    <form method="POST" action="<?php echo site_url('C_perusahaan/delete_lowongan') ?>">
                    <?php } ?>
                    <div class="modal-body">
                        <input type="hidden" name="id_lowongan" id="hid">
                        Anda yakin hapus data <strong><span id="hnama"></span></strong> ?
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-trash"></i> Hapus</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-close"></i>Close</button>
                    </div>
                    </form>
        </div>
    </div>
</div>