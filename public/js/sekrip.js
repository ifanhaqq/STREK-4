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

    


    
});