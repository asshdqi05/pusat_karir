<div class="row">
    <div class="col-md-12">

        <div class="card card-info">
            <div class="card-header">
                <?php if ($this->session->userdata('level') == 1) { ?>
                    <a class="btn btn-primary" href="<?= site_url('C_admin/pelatihan') ?>"><i class="fas fa-chevron-circle-left"></i> Kembali </a>
                <?php } else if ($this->session->userdata('level') == 2) { ?>
                    <a class="btn btn-primary" href="<?= site_url('C_perusahaan/pelatihan') ?>"><i class="fas fa-chevron-circle-left"></i> Kembali </a>
                <?php } ?>
            </div>
            <?php if ($this->session->userdata('level') == 1) { ?>
                <form method="POST" enctype="multipart/form-data" action="<?php echo site_url('C_admin/add') ?>">
                <?php } else if ($this->session->userdata('level') == 2) { ?>
                    <form method="POST" enctype="multipart/form-data" action="<?php echo site_url('C_perusahaan/add') ?>">
                    <?php } ?>
                    <div class="card-body">
                        <div class="row clearfix">
                            <div class="col-md-6">
                                <label for="id_perusahaan" class="control-label"><span class="text-danger"></span>Perusahaan</label>
                                <div class="form-group">
                                    <?php $p = $this->db->get_where('perusahaan', ['id_perusahaan' => $this->session->userdata('id_profil_user')])->row();
                                    if ($this->session->userdata('level') == 1) { ?>
                                        <select name="id_perusahaan" class="form-control">
                                            <option value="">select perusahaan</option>
                                            <?php
                                            foreach ($all_perusahaan as $perusahaan) {
                                                $selected = ($perusahaan['id_perusahaan'] == $this->input->post('id_perusahaan')) ? ' selected="selected"' : "";

                                                echo '<option value="' . $perusahaan['id_perusahaan'] . '" ' . $selected . '>' . $perusahaan['nama_perusahaan'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    <?php } else if ($this->session->userdata('level') == 2) { ?>
                                        <input type="hidden" name="id_perusahaan" value="<?= $this->session->userdata('id_profil_user') ?>" readonly class="form-control" id="id_perusahaan" />
                                        <input type="text" value="<?= $p->nama_perusahaan ?>" readonly class="form-control" id="id_perusahaan" />
                                    <?php } ?>
                                    <span class="text-danger"><?php echo form_error('id_perusahaan'); ?></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="nama_pelatihan" class="control-label"><span class="text-danger"></span>Nama Pelatihan</label>
                                <div class="form-group">
                                    <input type="text" name="nama_pelatihan" value="<?php echo $this->input->post('nama_pelatihan'); ?>" class="form-control" id="nama_pelatihan" />
                                    <span class="text-danger"><?php echo form_error('nama_pelatihan'); ?></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="tanggal_pelatihan" class="control-label"><span class="text-danger"></span>Tanggal Pelatihan</label>
                                <div class="form-group">
                                    <input type="date" name="tanggal_pelatihan" value="<?php echo $this->input->post('tanggal_pelatihan'); ?>" class="has-datepicker form-control" id="tanggal_pelatihan" />
                                    <span class="text-danger"><?php echo form_error('tanggal_pelatihan'); ?></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="jam_pelatihan" class="control-label"><span class="text-danger"></span>Waktu Pelatihan</label>
                                <div class="form-group">
                                    <input type="text" name="jam_pelatihan" value="<?php echo $this->input->post('jam_pelatihan'); ?>" class="form-control" id="jam_pelatihan" />
                                    <span class="text-danger"><?php echo form_error('jam_pelatihan'); ?></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="lokasi_pelatihan" class="control-label"><span class="text-danger"></span>Lokasi Pelatihan</label>
                                <div class="form-group">
                                    <textarea name="lokasi_pelatihan" value="<?php echo $this->input->post('lokasi_pelatihan'); ?>" class="form-control" id="lokasi_pelatihan"></textarea>
                                    <span class="text-danger"><?php echo form_error('lokasi_pelatihan'); ?></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="contact_person" class="control-label"><span class="text-danger"></span>Contact Person</label>
                                <div class="form-group">
                                    <input type="number" name="contact_person" value="<?php echo $this->input->post('contact_person'); ?>" class="form-control" id="contact_person" />
                                    <span class="text-danger"><?php echo form_error('contact_person'); ?></span>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="contact_person" class="control-label"><span class="text-danger"></span>Gambar Pelatihan</label>
                                <div class="form-group">
                                    <input type="file" name="gambar_pelatihan" class="form-control">
                                    <span class="text-danger"><?php echo form_error('gambar_pelatihan'); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-check"></i> Save
                        </button>
                    </div>
                    </form>
        </div>
    </div>
</div>