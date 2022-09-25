function updateConfig(){
    var data = $('#form').serialize();   
    $.ajax({
        method: 'post',
        url: '/admin/setting',
        type: 'post',
        data: data,
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
        }
    })
}