<table class="table table-bordered">
    <tr>
        <th width=10>No</th>
        <th>Syarat</th>
        <th width=100>Aksi</th>
    </tr>
    <?php
    $no = 0;
    $id_user = $this->session->userdata('id_user');
    $data = $this->db->get_where('temp_syarat', ['id_user' => $id_user])->result();
    foreach ($data as $d) {
        $no++;
    ?>
        <tr>
            <td><?= $no ?></td>
            <td><?= $d->syarat ?></td>
            <td><button type="button" class="btn btn-danger btn-sm" id="<?= $d->id ?>" name="hapus_syarat" value="<?= $d->id  ?>">HAPUS <i class="fas fa-trash"></i></button></td>
        </tr>
        <script>
            $('#<?= $d->id  ?>').click(function() {
                // var base_url = '<?= base_url() ?>';
                var id = $("#<?= $d->id  ?>").val();
                $.ajax({
                    url: "delete_temp_syarat",
                    type: 'POST',
                    data: {
                        id: id
                    },
                    dataType: 'html',
                    success: function(responsed) {
                        $('#data_syarat').html(responsed);

                    },
                })
            });
        </script>
    <?php } ?>
</table>