$(function() {
    
    $('.tambahModal').on('click', function () {
        const id = $(this).data('id');
        $.ajax({
            url: 'http://localhost/strek-4/tabungan/getsaldo',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#id').val(data.id);
                $('#nis').val(data.nisn);
            }
        });
    });

    
    $('.accStatus').on('click', function () {

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/strek-4/pengajuan/getnisn',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                console.log(data);
                $('#ids').val(data.id);
                $('#nisn').val(data.nisn);
                $('#nilai').val(data.saldo);

            }
        });

    });

    $('.setStatus').on('click', function () {

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/strek-4/pengajuan/getnisn',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#id').val(data.id);
            }
        });

    });

    $('.deleteAccount').on('click', function () {
        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/strek-4/user/getaccid',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function (data) {
                console.log(data);
                $('#id').val(data.id);
            }
        });
    });

    $('.editAccount').on('click', function () {
        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/strek-4/user/getaccid',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function (data) {
                console.log(data.password);
                $('#id_edit').val(data.id);
                $('#truepw').val(data.password);
            }
        });
    });

    $('.deleteTabungan').on('click', function () {

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/strek-4/tabungan/getsaldo',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                console.log(data);
                $('#id_hapus').val(data.id);
            }
        });
    });

    
});