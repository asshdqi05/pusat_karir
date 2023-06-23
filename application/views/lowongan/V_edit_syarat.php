<input type="hidden" id="id_lowongan" value="<?= $id_lowongan ?>">
<table class="table table-bordered">
    <tr>
        <th width=10>No</th>
        <th>Syarat</th>
        <th width=100>Aksi</th>
    </tr>
    <?php
    $no = 0;
    $data = $this->db->get_where('syarat_lowongan', ['id_lowongan' => $id_lowongan])->result();
    foreach ($data as $d) {
        $no++;
    ?>
        <tr>
            <td><?= $no ?></td>
            <td><?= $d->syarat ?></td>
            <td>
                <a href="javascript:void(0)" class="btn btn-warning btn-xs" onclick="edit('<?= $d->id ?>','<?= $d->syarat ?>','<?= $d->id_lowongan ?>')"><i class="fas fa-edit"></i></a>
                <button type="button" class="btn btn-danger btn-xs" id="<?= $d->id ?>" name="hapus_syarat" value="<?= $d->id  ?>"><i class="fas fa-trash"></i></button>
            </td>
        </tr>
        <script>
            $('#<?= $d->id  ?>').click(function() {
                // var base_url = '<?= base_url() ?>';
                var id = $("#<?= $d->id  ?>").val();
                var id_lowongan = $("#id_lowongan").val();
                $.ajax({
                    url: "../delete_syarat",
                    type: 'POST',
                    data: {
                        id: id,
                        id_lowongan: id_lowongan
                    },
                    dataType: 'html',
                    success: function(responsed) {
                        $('#dt_syarat').html(responsed);
                    },
                })
            });
        </script>
    <?php } ?>
</table>

<script>
    function edit(id, syarat, id_l) {
        $('#id').val(id);
        $('#syarat').val(syarat);
        $('#id_l').val(id_l);
        $('#modal_edit_syarat').modal('show');
    }

    $('#edit_syarat').click(function() {
        // var base_url = '<?= base_url() ?>';
        $.ajax({
            url: "../edit_syarat",
            type: 'POST',
            data: $("#edit_sya").serialize(),
            dataType: 'html',
            success: function(response) {
                $('#modal_edit_syarat').modal('toggle');
                $('#dt_syarat').html(response);
            },
        })
    });
</script>