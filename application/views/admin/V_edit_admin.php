<div class="card">
    <div class="card-header">
        <a class="btn btn-primary" href="<?= site_url('C_admin/admin') ?>"><i class="fas fa-chevron-circle-left"></i> Kembali </a>
    </div>
    <form class="form-horizontal" method="POST" action="<?php echo site_url('C_admin/update_admin') ?>">
        <div class="modal-body">
            <input type="hidden" name="id_user" class="form-control" value="<?= $data_admin->id_user ?>">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?= $data_admin->username ?>">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="<?= $data_admin->password ?>">
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary"><i class="fas fa-edit"></i>UPDATE</button>
        </div>
    </form>
</div>