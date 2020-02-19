$(function(){
    $('.tambahKas').on('click', function(){
        $('#myModalLabel').html('Tambah Kas Mesjid');
        $('.modal-footer button[type=submit]').html('Tambah Kas');
        $('#domain').val("");
        $('#destination').val('');
        $('#user').val('');
        $('#password').val('');
        $('#port').val('');
    });
    $('.editKas').on('click', function(){
        $('#myModalLabel').html('Ubah Kas Mesjid');
        $('.modal-footer button[type=submit]').html('Ubah Kas');
        $('.modal-body form').attr('action', 'http://192.168.0.102/admin/editkas');


        const id = $(this).data('id');

        $.ajax({
            url:'http://192.168.0.102/admin/getkas',
            data:{id :id},
            method: 'post',
            dataType: 'json',
            success: function(data){
                $('#datepicker').val(data.tanggal);
                $('#pemasukan').val(data.pemasukan);
                $('#pengeluaran').val(data.pengeluaran);
                $('#id').val(data.id);
            }
        })
    });
});