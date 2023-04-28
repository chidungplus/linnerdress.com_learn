function storeProductItem() {
    $('#addnew button').text('Đăng lại');
    var form = document.getElementById('form-product');
    form.addEventListener('submit', function (e) {
        e.preventDefault();
    })
    var thumb = $('input[name="thumb_id"]').val();
    var avatar = $('input[name="avatar_id"]').val();
    if(!thumb){
        toastr.error('Đăng ảnh thumbnail trước đã.');
        return;
    }
    if(!avatar){
        toastr.error('Đăng ảnh avatar trước đã.');
        return;
    }

    var data = new FormData(form);
    var product_id = $('input[name="product_id"]').val();

    $.ajax({
        method: 'POST',
        url: '/admin/product/' + product_id + '/product_item',
        type: 'post',
        data: data,
        contentType: false,
        processData: false,
        success: function (res) {
            if (res.err === true) {
                toastr.error(res.msg);
                $('#addnew button').text('Đăng lại');
            } else {
                toastr.success(res.msg);s
            }
        }
    })
}