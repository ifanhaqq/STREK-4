$(function() {

    $('.tampilModalUbah').on('click', function() {
        
        $('#judulModal').html('Ubah Data Mahasiswa');
        $('label[for=nama]').remove();
        $('input[name=nama]').remove();
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/mahasiswa/ubah');

        const id = $(this).data('id');
        
        $.ajax({
            url: 'http://localhost/phpmvc/public/mahasiswa/getubah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#nama').val(data.nama);
                $('#nim').val(data.nim);
                $('#email').val(data.email);
                $('#prodi').val(data.prodi);
                $('#id').val(data.id);
            }
        })

    });

    


});

$(function() {

    $('.saldoModal').on('click', function() {
        
        $('#judulModal').html('Tambah Saldo');
        $('label[for=nama').remove();
        $('input[name=nama').remove();
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/mahasiswa/ubah');

        const id = $(this).data('id');
        
        $.ajax({
            url: 'http://localhost/phpmvc/public/mahasiswa/getubah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#nama').val(data.nama);
                $('#nim').val(data.nim);
                $('#email').val(data.email);
                $('#prodi').val(data.prodi);
                $('#id').val(data.id);
            }
        })

    });

});