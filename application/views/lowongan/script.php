<script>
    $('#btn_syarat').on('click', function() {
        var syarat = $('#syarat').val();
        if (syarat != "") {
            $.ajax({
                url: "save_temp_syarat",
                type: "POST",
                data: {
                    syarat: syarat
                },
                dataType: 'html',
                success: function(response) {
                    $('#syarat').val("");
                    $('#data_syarat').html(response);
                },
            })
        } else {
            alert('Anda harus mengisi data dengan lengkap !');
        }
        return false;
    });

    $('#btn_kriteria').on('click', function() {
        var kriteria = $('#kriteria').val();
        if (kriteria != "") {
            $.ajax({
                url: "save_temp_kriteria",
                type: "POST",
                data: {
                    kriteria: kriteria
                },
                dataType: 'html',
                success: function(response) {
                    $('#kriteria').val("");
                    $('#data_kriteria').html(response);
                },
            })
        } else {
            alert('Anda harus mengisi data dengan lengkap !');
        }
    });

    //=============================================================================================================================================
    // ini untuk edit lowongan ea 
    // data syarat

    $(document).ready(function() {
        $("#tmbh_syarat").hide();
        $("#btn_tmb_syarat").hide();
        $("#tmbh_kriteria").hide();
        $("#btn_tmb_kriteria").hide();
    })

    $('#btn_tampil_syarat').on('click', function() {
        var id_lowongan = $('#id_lowongan').val();
        $.ajax({
            url: "../tampil_syarat",
            type: "POST",
            data: {
                id_lowongan: id_lowongan
            },
            dataType: 'html',
            success: function(response) {
                $("#tmbh_syarat").show();
                $("#btn_tmb_syarat").show();
                $('#dt_syarat').html(response);
                $("#btn_tampil_syarat").hide();
            },
        })
    });

    $('#btn_tampil_kriteria').on('click', function() {
        var id_lowongan = $('#id_lowongan').val();
        $.ajax({
            url: "../tampil_kriteria",
            type: "POST",
            data: {
                id_lowongan: id_lowongan
            },
            dataType: 'html',
            success: function(response) {
                $("#tmbh_kriteria").show();
                $("#btn_tmb_kriteria").show();
                $('#dt_kriteria').html(response);
                $("#btn_tampil_kriteria").hide();
            },
        })
    });

    $('#btn_tmb_syarat').on('click', function() {
        var syarat = $('#tmbh_syarat').val();
        var id_lowongan = $('#id_lowongan').val();
        if (syarat != "") {
            $.ajax({
                url: "../save_syarat",
                type: "POST",
                data: {
                    syarat: syarat,
                    id_lowongan: id_lowongan
                },
                dataType: 'html',
                success: function(response) {
                    $('#tmbh_syarat').val("");
                    $('#dt_syarat').html(response);
                },
            })
        } else {
            alert('Anda harus mengisi data dengan lengkap !');
        }
        return false;
    });

    $('#btn_tmb_kriteria').on('click', function() {
        var kriteria = $('#tmbh_kriteria').val();
        var id_lowongan = $('#id_lowongan').val();
        if (kriteria != "") {
            $.ajax({
                url: "../save_kriteria",
                type: "POST",
                data: {
                    kriteria: kriteria,
                    id_lowongan: id_lowongan
                },
                dataType: 'html',
                success: function(response) {
                    $('#tmbh_kriteria').val("");
                    $('#dt_kriteria').html(response);
                },
            })
        } else {
            alert('Anda harus mengisi data dengan lengkap !');
        }
    });












    // $(document).ready(function() {
    //     var id_lowongan = $("#id_lowongan").val();
    //     $.ajax({
    //         type: "POST", // Method pengiriman data bisa dengan GET atau POST
    //         url: "C_perusahaan/tampil_syarat", // Isi dengan url/path file php yang dituju
    //         data: {
    //             id_lowongan: id_lowongan
    //         }, // data yang akan dikirim ke file yang dituju
    //         dataType: "json",
    //         beforeSend: function(e) {
    //             if (e && e.overrideMimeType) {
    //                 e.overrideMimeType("application/json;charset=UTF-8");
    //             }
    //         },
    //         success: function(data) {
    //             var html = '';
    //             var i;
    //             var no = 1;
    //             var k;
    //             for (i = 0; i < data.length; i++) {
    //                 html += '<tr id="' + data[i].id + '">' +
    //                     '<td>' + no++ + '</td>' +
    //                     '<td>' + data[i].syarat + '</td>' +
    //                     '<td style="text-align:right;">' +
    //                     '<button type="button" class="btn btn-warning btn-xs edit_syarat" data-id="' + data[i].id + '" data-syarat="' + data[i].syarat + '" >Edit</button> ' +
    //                     '<button class="btn btn-danger btn-xs" id=' + data[i].id + '>Hapus</button> ' +
    //                     '</td>' +
    //                     '</tr>';

    //                 // $('#' + data[i].id + '').click(function() {
    //                 //     var id = $("#" + data[i].id + "").val();
    //                 //     $.ajax({
    //                 //         url: "delete_syarat",
    //                 //         type: 'POST',
    //                 //         data: {
    //                 //             id: id
    //                 //         },
    //                 //         dataType: 'html',
    //                 //         success: function(responsed) {
    //                 //             $('#dt_syarat').html(responsed);
    //                 //         },
    //                 //     })
    //                 // });
    //             }

    //             $('#dt_syarat').html(html);
    //         },
    //         error: function(xhr, ajaxOptions, thrownError) { // Ketika ada error
    //             alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
    //         }
    //     });
    // });



    // // menampilkan modal edit syarat
    // $('#data_syarat').on('click', '.edit_syarat', function() {
    //     var id = $(this).data('id');
    //     var syarat = $(this).data('syarat');

    //     $('#edit_data').modal('show');
    //     $('#id').val(id);
    //     $('#syarat').val(syarat);
    // });

    // $('#edit-syarat').on('submit', function() {
    //     var id = $('#id').val();
    //     var syarat = $('#syarat').val();
    //     if (id != "" && syarat != "") {
    //         $.ajax({
    //             type: "POST",
    //             url: "edit_syarat",
    //             dataType: "JSON",
    //             data: {
    //                 id: id,
    //                 syarat: syarat,
    //             },
    //             success: function(data) {
    //                 $('#id').val("");
    //                 $('#edit_data').modal('hide');
    //                 $.ajax({
    //                     type: "POST", // Method pengiriman data bisa dengan GET atau POST
    //                     url: "tampil_syarat", // Isi dengan url/path file php yang dituju
    //                     data: {
    //                         id_lowongan: $("#id_lowongan").val()
    //                     }, // data yang akan dikirim ke file yang dituju
    //                     dataType: "json",
    //                     beforeSend: function(e) {
    //                         if (e && e.overrideMimeType) {
    //                             e.overrideMimeType("application/json;charset=UTF-8");
    //                         }
    //                     },
    //                     success: function(data) {
    //                         var html = '';
    //                         var i;
    //                         var no = 1;
    //                         var k;
    //                         for (i = 0; i < data.length; i++) {
    //                             html += '<tr id="' + data[i].id + '">' +
    //                                 '<td>' + no++ + '</td>' +
    //                                 '<td>' + data[i].syarat + '</td>' +
    //                                 '<td style="text-align:right;">' +
    //                                 '<button type="button" class="btn btn-warning btn-xs edit_syarat" data-id="' + data[i].id + '" data-syarat="' + data[i].syarat + '" >Edit</button> ' +
    //                                 '<button class="btn btn-danger btn-xs" id=' + data[i].id + '>Hapus</button> ' +
    //                                 '</td>' +
    //                                 '</tr>';
    //                         }
    //                         $('#dt_syarat').html(html);
    //                     },
    //                     error: function(xhr, ajaxOptions, thrownError) { // Ketika ada error
    //                         alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
    //                     }
    //                 });
    //             }
    //         });
    //     } else {
    //         alert('Anda harus mengisi data dengan lengkap !');
    //     }
    //     return false;
    // });


    // // data kriteria
    // $(document).ready(function() {

    //     $.ajax({
    //         type: "POST", // Method pengiriman data bisa dengan GET atau POST
    //         url: "tampil_kriteria", // Isi dengan url/path file php yang dituju
    //         data: {
    //             id_lowongan: $("#id_lowongan").val()
    //         }, // data yang akan dikirim ke file yang dituju
    //         dataType: "json",
    //         beforeSend: function(e) {
    //             if (e && e.overrideMimeType) {
    //                 e.overrideMimeType("application/json;charset=UTF-8");
    //             }
    //         },
    //         success: function(data) {
    //             var html = '';
    //             var i;
    //             var no = 1;
    //             var k;
    //             for (i = 0; i < data.length; i++) {
    //                 html += '<tr id="' + data[i].id + '">' +
    //                     '<td>' + no++ + '</td>' +
    //                     '<td>' + data[i].kriteria + '</td>' +
    //                     '<td style="text-align:right;">' +
    //                     '<button type="button" class="btn btn-warning btn-xs edit_kriteria" data-id="' + data[i].id + '" data-kriteria="' + data[i].kriteria + '" >Edit</button> ' +
    //                     '<button class="btn btn-danger btn-xs" id=' + data[i].id + '>Hapus</button> ' +
    //                     '</td>' +
    //                     '</tr>';
    //                 // $('#' + data[i].id + '').click(function() {
    //                 //     var id = $("#" + data[i].id + "").val();
    //                 //     $.ajax({
    //                 //         url: "delete_kriteria",
    //                 //         type: 'POST',
    //                 //         data: {
    //                 //             id: id
    //                 //         },
    //                 //         dataType: 'html',
    //                 //         success: function(responsed) {
    //                 //             $('#dt_kriteria').html(responsed);
    //                 //         },
    //                 //     })
    //                 // });
    //             }

    //             $('#dt_kriteria').html(html);
    //         },
    //         error: function(xhr, ajaxOptions, thrownError) { // Ketika ada error
    //             alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
    //         }
    //     });
    // });



    // // menampilkan modal edit kriteria
    // $('#data_kriteria').on('click', '.edit_kriteria', function() {
    //     var id = $(this).data('id');
    //     var kriteria = $(this).data('kriteria');

    //     $('#edit_data_kriteria').modal('show');
    //     $('#id').val(id);
    //     $('#kriteria').val(kriteria);
    // });

    // $('#edit-kriteria').on('submit', function() {
    //     var id = $('#id').val();
    //     var kriteria = $('#kriteria').val();
    //     if (id != "" && kriteria != "") {
    //         $.ajax({
    //             type: "POST",
    //             url: "edit_kriteria",
    //             dataType: "JSON",
    //             data: {
    //                 id: id,
    //                 kriteria: kriteria,
    //             },
    //             success: function(data) {
    //                 $('#id').val("");
    //                 $('#edit_data_kriteria').modal('hide');
    //                 $.ajax({
    //                     type: "POST", // Method pengiriman data bisa dengan GET atau POST
    //                     url: "tampil_kriteria", // Isi dengan url/path file php yang dituju
    //                     data: {
    //                         id_lowongan: $("#id_lowongan").val()
    //                     }, // data yang akan dikirim ke file yang dituju
    //                     dataType: "json",
    //                     beforeSend: function(e) {
    //                         if (e && e.overrideMimeType) {
    //                             e.overrideMimeType("application/json;charset=UTF-8");
    //                         }
    //                     },
    //                     success: function(data) {
    //                         var html = '';
    //                         var i;
    //                         var no = 1;
    //                         var k;
    //                         for (i = 0; i < data.length; i++) {
    //                             html += '<tr id="' + data[i].id + '">' +
    //                                 '<td>' + no++ + '</td>' +
    //                                 '<td>' + data[i].kriteria + '</td>' +
    //                                 '<td style="text-align:right;">' +
    //                                 '<button type="button" class="btn btn-warning btn-xs edit_kriteria" data-id="' + data[i].id + '" data-kriteria="' + data[i].kriteria + '" >Edit</button> ' +
    //                                 '<button class="btn btn-danger btn-xs" id=' + data[i].id + '>Hapus</button> ' +
    //                                 '</td>' +
    //                                 '</tr>';
    //                         }
    //                         $('#dt_kriteria').html(html);
    //                     },
    //                     error: function(xhr, ajaxOptions, thrownError) { // Ketika ada error
    //                         alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
    //                     }
    //                 });
    //             }
    //         });
    //     } else {
    //         alert('Anda harus mengisi data dengan lengkap !');
    //     }
    //     return false;
    // });
</script>