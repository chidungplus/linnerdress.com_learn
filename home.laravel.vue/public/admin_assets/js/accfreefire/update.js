function updateAcc(id){
    var data = $('#form-info').serialize();   
    $.ajax({
        method: 'patch',
        url: '/admin/acc-free-fire/'+ id ,
        type: 'post',
        data: data,
        success: function(res) {
            if (res.err === true) {
              toastr.error(res.msg);
            }else{
              toastr.success(res.msg);
            }
        },
        error: function(res) {
            Swal('Có lỗi xảy ra!', res.responseJSON.error, 'error')
        }
    })
}