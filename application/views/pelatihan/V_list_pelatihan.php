<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <?php if ($this->session->userdata('level') == 1) { ?>
                    <a href="<?= site_url('C_admin/add') ?>" class="btn btn-primary btn-flat">
                        <span class="fa fa-plus"></span>
                        Tambah Data
                    </a>
                <?php } else if ($this->session->userdata('level') == 2) { ?>
                    <a href="<?= site_url('C_perusahaan/add') ?>" class="btn btn-primary btn-flat">
                        <span class="fa fa-plus"></span>
                        Tambah Data
                    </a>
                <?php } ?>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Perusahaan</th>
                            <th>Nama Pelatihan</th>
                            <th>Tanggal Pelatihan</th>
                            <th>Lokasi Pelatihan</th>
                            <?php if ($this->session->userdata('level') == 2) { ?>
                                <th>Pendaftar</th>
                            <?php } ?>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 0;
                        foreach ($pelatihan as $p) {
                            $dt = $this->db->get_where('daftar_pelatihan', ['id_pelatihan' => $p['id_pelatihan']]);
                            $no++;
                        ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $p['nama_perusahaan']; ?></td>
                                <td><?php echo $p['nama_pelatihan']; ?></td>
                                <td><?php echo $p['tanggal_pelatihan']; ?></td>
                                <td><?php echo $p['lokasi_pelatihan']; ?></td>
                                <?php if ($this->session->userdata('level') == 2) { ?>
                                    <td class="text-center" width="100px">
                                        <a href="<?php echo site_url('C_perusahaan/daftar_pendaftar_pelatihan/' . $p['id_pelatihan']); ?>" class="btn btn-primary btn-xs"><span class="fas fa-eye"></span> Lihat ( <span class="text-warning"><b><?= $dt->num_rows() ?></b></span> )</a>
                                    </td>
                                <?php } ?>
                                <td>
                                    <?php if ($this->session->userdata('level') == 1) { ?>
                                        <a href="<?php echo site_url('C_admin/edit_pelatihan/' . $p['id_pelatihan']); ?>" class="btn btn-success btn-xs"><span class="fas fa-edit"></span></a>
                                    <?php } else if ($this->session->userdata('level') == 2) { ?>
                                        <a href="<?php echo site_url('C_perusahaan/edit_pelatihan/' . $p['id_pelatihan']); ?>" class="btn btn-success btn-xs"><span class="fas fa-edit"></span></a>
                                    <?php } ?>
                                    <a class="btn btn-xs btn-danger" href="javascript:void(0)" onclick="hapus('<?= $p['id_pelatihan'] ?>')">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    function hapus(id) {
        $('#hid').val(id);
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
                <form method="POST" action="<?php echo site_url('C_admin/remove_pelatihan') ?>">
                <?php } else if ($this->session->userdata('level') == 2) { ?>
                    <form method="POST" action="<?php echo site_url('C_perusahaan/remove_pelatihan') ?>">
                    <?php } ?>
                    <div class="modal-body">
                        <input type="hidden" name="id" id="hid">
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