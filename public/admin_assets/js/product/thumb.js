function uploadThumb() {
    var data = new FormData(document.getElementById('form-thumbnail'));
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
                
                $("#image-path").attr("src", '/storage/' + image.medium);
                $('input[name="thumb"]').val(image.id);
            }
        }
    })
}