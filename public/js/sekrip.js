$(function() {
    

    $('.setStatus').on('click', function () {

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/strek-4/public/pengajuan/gettabid',
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
            url: 'http://localhost/strek-4/public/pengajuan/gettabid',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                console.log(data);
                $('#tabid').val(data.tab_id);
                $('#pgid').val(data.id);
                $('#nilai').val(data.saldo);

            }
        });

    });


    
});