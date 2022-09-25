function setStatus(id, status) {
    $.ajax({
        method: 'post',
        url: '/admin/card/setStatus',
        type: 'post',
        data: {
            id : id,
            status : status,
        },
        // contentType: false,
        // processData: false,
        success: function (res) {
            if (res.err === true) {
                toastr.error(res.msg);
            } else {
                toastr.success(res.msg);
                setTimeout(function () { document.location.reload(); }, 100);
            }
        }
    })
}