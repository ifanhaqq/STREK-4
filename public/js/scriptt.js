$(function() {
    
    $('.tambahModal').on('click', function () {
        const id = $(this).data('id');
        $.ajax({
            url: 'http://localhost/strek-4/public/tabungan/getsaldo',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                console.log(data);
                $('#id').val(data.id);
                $('#nis').val(data.nisn);
            }
        });
    });

    $('.accStatus').on('click', function () {

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/strek-4/public/pengajuan/getnisn',
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
            url: 'http://localhost/strek-4/public/pengajuan/getnisn',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#id').val(data.id);
            }
        });

    });

    
});