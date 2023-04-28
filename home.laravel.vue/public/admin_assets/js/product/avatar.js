function uploadAvatar() {
    var data = new FormData(document.getElementById('form-avatar'));
    $.ajax({
        method: 'POST',
        url: '/admin/image/thumbnail',
        type: 'post',
        data: data,
        contentType: false,
        processData: false,
        success: function (res) {
            if (res.err === true) {
                toastr.error(res.msg);
            } else {
                // toastr.success(res.msg);
                image = res.image;
                // $('#block-thumb').hide();
                
                $("#avatar-path").attr("src", image.path);
                $('input[name="avatar_id"]').val(image.id);
            }
        }
    })
}