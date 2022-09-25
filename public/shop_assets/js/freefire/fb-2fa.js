function getFbCode(id){

    $.ajax({
        method: 'post',
        url: '/acc/getFbCode',
        type: 'post',
        data: {
            id: id,
        },
        // contentType: false,
        // processData: false,
        success: function(res) {
            if (res.err === true) {
                Swal('Error', res.msg, 'error');
            }else{
                Swal.fire({
                    title: '<strong>Code đăng nhập</strong>',
                    type: 'success',
                    html: res.msg,
                    showCloseButton: true,
                    showCancelButton: true,
                    focusConfirm: false,
                    confirmButtonText: 'Ok',
                    confirmButtonAriaLabel: 'Thumbs up, great!',
                    cancelButtonText: '<i class="fa fa-thumbs-down"> Cancel</i>',
                    cancelButtonAriaLabel: 'Thumbs down'
                })
            } 
        }
    })
}