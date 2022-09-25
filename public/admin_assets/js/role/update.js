function update(id) {
    $('#addnew').text('Process ...');

    var data = $('#form').serialize();   
    $.ajax({
        method: 'patch',
        url: '/admin/role/' + id,
        type: 'post',
        data: data,
        contentType: false,
        processData: false,
        success: function (res) {
            if (res.err === true) {
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
                $('#addnew').text('Return Add');
            } else {
                toastr.info(res.msg);
            }

        }
    })
}