function store() {
    $('#addnew button').text('Đăng lại');
    var form = document.getElementById('form-product');
    form.addEventListener('submit', function (e) {
        e.preventDefault();
    })
    var thumb = $('input[name="thumb"]').val();
    // if(!thumb){
    //     toastr.error('Đăng ảnh thumbnail trước đã.');
    //     return;
    // }
    var data = new FormData(form);
    $.ajax({
        method: 'POST',
        url: '/admin/product',
        type: 'post',
        data: data,
        contentType: false,
        processData: false,
        success: function (res) {
            if (res.err === true) {
                toastr.error(res.msg);
                $('#addnew button').text('Đăng lại');
            } else {
                toastr.success(res.msg);
                $('#block-image').data('acc_id', res.id); //setter
                $('#block-image').show();
                $('#addnew').hide();
            }
        }
    })
}