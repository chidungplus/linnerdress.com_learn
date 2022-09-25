$('#user_role_table').on('click', '.btn-user-role', function () {
    var role_id = $(this).data('id');
    var user_id = $('#user_id').val();
    var value = $(this).is(":checked") ? 1 : 0;
    $.ajax({
        method: 'post',
        url: '/admin/user-role',
        type: 'post',
        data: {
            user_id: user_id,
            role_id: role_id,
            value: value
        },
        // contentType: false,
        // processData: false,
        success: function (res) {
            if (res.err === true) {
                toastr.error(res.msg);
            } else {
                toastr.success(res.msg);
            }
        }
    })

})