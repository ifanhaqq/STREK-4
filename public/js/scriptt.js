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
                $('#pgid').val(data.id);
                $('#nilai').val(data.saldo);

            }
        });

    });

    
});