<input type="hidden" id="id_lowongan" value="<?= $id_lowongan ?>">
<table class="table table-bordered">
    <tr>
        <th width=10>No</th>
        <th>kriteria</th>
        <th width=100>Aksi</th>
    </tr>
    <?php
    $no = 0;
    $data = $this->db->get_where('kriteria_lowongan', ['id_lowongan' => $id_lowongan])->result();
    foreach ($data as $d) {
        $no++;
    ?>
        <tr>
            <td><?= $no ?></td>
            <td><?= $d->kriteria ?></td>
            <td>
                <a href="javascript:void(0)" class="btn btn-warning btn-xs" onclick="edit('<?= $d->id ?>','<?= $d->kriteria ?>','<?= $d->id_lowongan ?>')"><i class="fas fa-edit"></i></a>
                <button type="button" class="btn btn-danger btn-xs" id="<?= $d->id ?>" name="hapus_kriteria" value="<?= $d->id  ?>"><i class="fas fa-trash"></i></button>
            </td>
        </tr>
        <script>
            $('#<?= $d->id  ?>').click(function() {
                var id = $("#<?= $d->id  ?>").val();
                var id_lowongan = $("#id_lowongan").val();
                $.ajax({
                    url: "../delete_kriteria",
                    type: 'POST',
                    data: {
                        id: id,
                        id_lowongan: id_lowongan
                    },
                    dataType: 'html',
                    success: function(responsed) {
                        $('#dt_kriteria').html(responsed);
                    },
                })
            });
        </script>
    <?php } ?>
</table>


<script>
    function edit(idk, kriteria, id_lw) {
        $('#idk').val(idk);
        $('#kriteria').val(kriteria);
        $('#id_lw').val(id_lw);
        $('#modal_edit_kriteria').modal('show');
    }

    $('#edit_kriteria').click(function() {
        // var base_url = '<?= base_url() ?>';
        $.ajax({
            url: "../edit_kriteria",
            type: 'POST',
            data: $("#edit_kri").serialize(),
            dataType: 'html',
            success: function(response) {
                $('#modal_edit_kriteria').modal('toggle');
                $('#dt_kriteria').html(response);
            },
        })
    });
</script>