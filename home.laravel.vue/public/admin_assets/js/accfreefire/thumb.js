function uploadThumb() {
    var acc_id = $('#block-image').data("acc_id");
    if(acc_id != '' && !isNaN(acc_id)){
        var data = new FormData(document.getElementById('formUploadThumb'));
        $.ajax({
            method: 'POST',
            url: '/admin/acc-free-fire/' + acc_id + '/thumb',
            type: 'post',
            data: data,
            contentType: false,
            processData: false,
            success: function (res) {
                if (res.err === true) {
                    toastr.error(res.msg);
                } else {
                    toastr.success(res.msg);
                    $('#block-thumb').hide();
                    $('#block-image').show();
                    // $("#imgThumb").attr("src", '/storage/' + res.img_response);
                }
            },
            error: function (res) {
                toastr.error('Có lỗi xảy ra!', res.responseJSON.error, 'error')
            }
        })
    }else{
        toastr.error('Đăng thông tin acc trước nhé!');
    }
}