$(function() {
    
    $('.tambahModal').on('click', function () {
        const id = $(this).data('id');
        console.log(id);
        
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


    $('.setStatus').on('click', function () {
        const id = $(this).data('id');
        console.log(id);

    });
});