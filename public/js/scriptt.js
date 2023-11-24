$(function() {
    
    $('.tambahModal').on('click', function () {
        const id = $(this).data('id');
        $.ajax({
            url: 'http://localhost/strek-4/public/tabungan/getsaldo',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#id').val(data.id);
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
                $('#nisn').val(data.nisn);
                $('#pgid').val(data.id);
                $('#nilai').val(data.saldo);

            }
        });

    });

    
});