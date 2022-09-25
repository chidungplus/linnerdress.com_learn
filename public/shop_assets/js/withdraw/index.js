function widthdraw(){
    var amount      = $('#amount').children("option:selected").val();
    var username      = $("#username"). val();
    $.ajax({
        method: 'POST',
        url: '/user/withdraw',
        type: 'post',
        data: {
            type : 1,
            amount : amount,
            username : username  
        },
        success: function(res) {
            if (res.err === true) {
                if (res.isNotCoin) {
                    Swal.fire({
                        title: '<strong>Bạn không đủ kim cương</strong>',
                        type: 'info',
                        html: 'Vui lòng quay thêm vòng quay',
                        showCloseButton: true,
                        showCancelButton: true,
                        focusConfirm: false,
                        confirmButtonText: 'Ok',
                        confirmButtonAriaLabel: 'Thumbs up, great!',
                        cancelButtonText: '<i class="fa fa-thumbs-down">Cancel</i>',
                        cancelButtonAriaLabel: 'Thumbs down'
                    })
                }else{
                    Swal.fire({
                        title: '<strong>Thông Báo!</strong>',
                        type: 'error',
                        html: res.msg,
                        showCloseButton: true,
                        showCancelButton: true,
                        focusConfirm: false,
                        confirmButtonText: 'Ok, Good.!',
                        confirmButtonAriaLabel: 'Thumbs up, great!',
                        cancelButtonText: '<i class="fa fa-thumbs-down"> Cancel</i>',
                        cancelButtonAriaLabel: 'Thumbs down'
                    })
                }
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