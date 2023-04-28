function store(){
    var type        = $('#type').children("option:selected").val();
    var login       = $('#login').children("option:selected").val();
    var data        = $("#data"). val();
    $.ajax({
        method: 'POST',
        url: '/admin/random',
        type: 'post',
        data: {
            type        : type,
            login       : login,
            data        : data  
        },
        success: function(res) {
            if (res.err === true) {
                Swal.fire({
                    title: '<strong>Thông Báo!</strong>',
                    type: 'success',
                    html: res.msg,
                    showCloseButton: true,
                    showCancelButton: true,
                    focusConfirm: false,
                    confirmButtonText: 'Ok, Good.!',
                    confirmButtonAriaLabel: 'Thumbs up, great!',
                    cancelButtonText: '<i class="fa fa-thumbs-down"> Cancel</i>',
                    cancelButtonAriaLabel: 'Thumbs down'
                })
            }else{
                Swal.fire({
                    title: '<strong>Thông Báo!</strong>',
                    type: 'success',
                    html: res.msg,
                    showCloseButton: true,
                    showCancelButton: true,
                    focusConfirm: false,
                    confirmButtonText: 'Ok, Good.!',
                    confirmButtonAriaLabel: 'Thumbs up, great!',
                    cancelButtonText: '<i class="fa fa-thumbs-down"> Cancel</i>',
                    cancelButtonAriaLabel: 'Thumbs down'
                }).then(function(result){
                    if (result.value){
                        document.location.reload();
                    }else{
                        document.location.reload();
                    }
                })
            }
        },
        error: function(res) {
            Swal('Có lỗi xảy ra!', res.responseJSON.error, 'error')
        }
    })
}