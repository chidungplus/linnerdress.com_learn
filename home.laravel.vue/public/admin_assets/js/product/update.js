function update(id){
    var form = document.getElementById('form-product');
    form.addEventListener('submit', function (e) {
        e.preventDefault();
    })
    var data = $('#form-product').serialize();   
    $.ajax({
        method: 'patch',
        url: '/admin/product/'+ id ,
        type: 'post',
        data: data,
        success: function(res) {
            if (res.err === true) {
              toastr.error(res.msg);
            }else{
              toastr.success(res.msg);
            }
        }
    })
}