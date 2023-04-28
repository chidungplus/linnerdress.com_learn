$('#permission_role_table').on('click', '.btn-permission-role', function () {
    var permission_id = $(this).data('id');
    var role_id = $('#role_id').val();
    var value = $(this).is(":checked") ? 1 : 0;
    $.ajax({
        method: 'post',
        url: '/admin/role-permission',
        type: 'post',
        data: {
            role_id: role_id,
            permission_id: permission_id,
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