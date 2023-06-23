<div class="row">
    <div class="col-md-12">
        <div class="card card-info">
            <div class="card-header with-border bg-primary">
                <h3 class="card-title">Pelatihan Edit</h3>
            </div>
            <?php if ($this->session->userdata('level') == 1) { ?>
                <form method="POST" enctype="multipart/form-data" action="<?php echo site_url('C_admin/edit_pelatihan/' . $pelatihan['id_pelatihan']) ?>">
                <?php } else if ($this->session->userdata('level') == 2) { ?>
                    <form method="POST" enctype="multipart/form-data" action="<?php echo site_url('C_perusahaan/edit_pelatihan/' . $pelatihan['id_pelatihan']) ?>">
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
                                                $selected = ($perusahaan['id_perusahaan'] == $pelatihan['id_perusahaan']) ? ' selected="selected"' : "";

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
                                    <input type="text" name="nama_pelatihan" value="<?php echo ($this->input->post('nama_pelatihan') ? $this->input->post('nama_pelatihan') : $pelatihan['nama_pelatihan']); ?>" class="form-control" id="nama_pelatihan" />
                                    <span class="text-danger"><?php echo form_error('nama_pelatihan'); ?></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="tanggal_pelatihan" class="control-label"><span class="text-danger"></span>Tanggal Pelatihan</label>
                                <div class="form-group">
                                    <input type="date" name="tanggal_pelatihan" value="<?php echo ($this->input->post('tanggal_pelatihan') ? $this->input->post('tanggal_pelatihan') : $pelatihan['tanggal_pelatihan']); ?>" class="has-datepicker form-control" id="tanggal_pelatihan" />
                                    <span class="text-danger"><?php echo form_error('tanggal_pelatihan'); ?></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="jam_pelatihan" class="control-label"><span class="text-danger"></span>Jam Pelatihan</label>
                                <div class="form-group">
                                    <input type="text" name="jam_pelatihan" value="<?php echo ($this->input->post('jam_pelatihan') ? $this->input->post('jam_pelatihan') : $pelatihan['jam_pelatihan']); ?>" class="form-control" id="jam_pelatihan" />
                                    <span class="text-danger"><?php echo form_error('jam_pelatihan'); ?></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="lokasi_pelatihan" class="control-label"><span class="text-danger"></span>Lokasi Pelatihan</label>
                                <div class="form-group">
                                    <input type="text" name="lokasi_pelatihan" value="<?php echo ($this->input->post('lokasi_pelatihan') ? $this->input->post('lokasi_pelatihan') : $pelatihan['lokasi_pelatihan']); ?>" class="form-control" id="lokasi_pelatihan" />
                                    <span class="text-danger"><?php echo form_error('lokasi_pelatihan'); ?></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="contact_person" class="control-label"><span class="text-danger"></span>Contact Person</label>
                                <div class="form-group">
                                    <input type="number" name="contact_person" value="<?php echo ($this->input->post('contact_person') ? $this->input->post('contact_person') : $pelatihan['contact_person']); ?>" class="form-control" id="contact_person" />
                                    <span class="text-danger"><?php echo form_error('contact_person'); ?></span>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="contact_person" class="control-label"><span class="text-danger"></span>Gambar Pelatihan</label>
                                <div class="form-group">
                                    <input type="file" name="gambar_pelatihan" class="form-control">
                                    <br>
                                    <?php if ($pelatihan['gambar_pelatihan'] != "") { ?>
                                        <img src="<?= base_url('upload/pelatihan/') . $pelatihan['gambar_pelatihan'] ?>" width="300" alt="">
                                    <?php } ?>
                                    <input type="hidden" readonly name="old_foto" value="<?= $pelatihan['gambar_pelatihan'] ?>" class="form-control">
                                    <span class="text-danger"><?php echo form_error('gambar_pelatihan'); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">
                            <i class="fa fa-check"></i> Save
                        </button>
                    </div>
                    <?php echo form_close(); ?>
        </div>
    </div>
</div>