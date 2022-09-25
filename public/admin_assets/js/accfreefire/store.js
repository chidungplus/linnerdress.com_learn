function storeAcc() {
    $('#addnew').text('Process ...');
    var data = new FormData(document.getElementById('form'));
    $.ajax({
        method: 'POST',
        url: '/admin/acc-free-fire',
        type: 'post',
        data: data,
        contentType: false,
        processData: false,
        success: function (res) {
            if (res.err === true) {
                toastr.error(res.msg);
                $('#addnew').text('Return Add');
            } else {
                toastr.success(res.msg);
                $('#block-info').hide();
                $('#block-thumb').show();
                $('#block-thumb').data('acc_id',res.id); //setter
                $('#block-image').data('acc_id',res.id); //setter
                $('.username-acc' ).text(res.username);
            }
        },
        error: function (res) {
            Swal('Có lỗi xảy ra!', res.responseJSON.error, 'error')
        }
    })
}