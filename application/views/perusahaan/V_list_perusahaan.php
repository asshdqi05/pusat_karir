<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <a href="<?= site_url('C_admin/add_perusahaan') ?>" class="btn btn-primary btn-flat">
                    <span class="fa fa-plus"></span>
                    Tambah Data
                </a>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <th class="text-center">No</th>
                        <th>Nama</th>
                        <th>Alamat </th>
                        <th>Email</th>
                        <th>Website</th>
                        <th>Status</th>
                        <th class="text-center">Aksi</th>
                    </thead>

                    <tbody>
                        <?php $no = 1;
                        foreach ($data_perusahaan as $d) {
                            if ($d->status == 0) {
                                $status = "Tidak Aktif";
                            } else {
                                $status = "Aktif";
                            }

                        ?>
                            <tr>
                                <td width="50px" class="text-center"><?php echo $no . '.'; ?></td>
                                <td><?= $d->nama_perusahaan ?></td>
                                <td><?= $d->alamat_perusahaan ?></td>
                                <td><?= $d->email_perusahaan ?></td>
                                <td><?= $d->website_perusahaan ?></td>
                                <td>
                                    <a class="btn btn-xs btn-warning" href="javascript:void(0)" onclick="status('<?= $d->id_user ?>','<?= $d->nama_perusahaan ?>')">
                                        <i class="fas fa-refresh"></i> <?= $status ?>
                                    </a>
                                </td>
                                <td class="text-center" width="100px">
                                    <a class="btn btn-xs btn-success" href="<?= site_url('C_admin/edit_perusahaan/' . $d->id_perusahaan) ?>">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a class="btn btn-xs btn-danger" href="javascript:void(0)" onclick="hapus('<?= $d->id_perusahaan ?>','<?= $d->id_user ?>','<?= $d->nama_perusahaan ?>')">
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
    function hapus(id_perusahaan, id_user, nama) {
        $('#hid').val(id_perusahaan);
        $('#hidu').val(id_user);
        $('#hnama').html(nama);
        $('#hapus_data').modal('show');
    }

    function status(id_user, nama) {
        $('#id').val(id_user);
        $('#nama').html(nama);
        $('#status_user').modal('show');
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
            <form method="POST" action="<?php echo site_url('C_admin/delete_perusahaan') ?>">
                <div class="modal-body">
                    <input type="hidden" name="id_perusahaan" id="hid">
                    <input type="hidden" name="id_user" id="hidu">
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

<div class="modal fade" id="status_user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Aktivasi User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>
            <form method="POST" action="<?php echo site_url('C_admin/status_user_perusahaan') ?>">
                <div class="modal-body">
                    <input type="hidden" name="id_user" id="id">
                    Aktivasi akun <strong><span id="nama"></span></strong>
                    <hr>

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="icheck-primary d-inline">
                                <input type="radio" id="radioPrimary1" value="1" name="status">
                                <label for="radioPrimary1">
                                    Aktif
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="icheck-primary d-inline">
                                <input type="radio" id="radioPrimary3" value="0" name="status">
                                <label for="radioPrimary3">
                                    Non Aktif
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-refresh"></i> Confirm</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-close"></i>Close</button>
                </div>
            </form>
        </div>
    </div>
</div>