function destroy(id){
    Swal.fire({
        title: '<strong>Thông Báo!</strong>',
        type: 'warning',
        html: 'Bạn có chắc chắn muốn xóa?',
        showCloseButton: true,
        showCancelButton: true,
        focusConfirm: false,
        confirmButtonText: 'Ok, Good.!',
        confirmButtonAriaLabel: 'Thumbs up, great!',
        cancelButtonText: '<i class="fa fa-thumbs-down"> Cancel</i>',
        cancelButtonAriaLabel: 'Thumbs down'
    }).then(function(result){
        if (result.value){
            $.ajax({
                method: 'delete',
                url: '/admin/acc-free-fire/'+ id,
                type: 'post',
                data: {
                    id : id
                },
                // contentType: false,
                // processData: false,
                success: function(res) {
                    if (res.err === true) {
                        toastr.error(res.msg);
                    }else{
                        toastr.info(res.msg);
                        $("#acc-" + id ).remove();

                        // setTimeout(function(){ document.location.reload(); }, 1000);
                    } 
                },
                error: function(res) {
                    Swal('Có lỗi xảy ra!', res.responseJSON.error, 'error')
                }
            })
        }else{
            
        }
    })
}