$(document).ready(function () {
    $('#search_content').change(function () {
        var search_type = $('#search_type').val();
        var search_content = $('#search_content').val();
        $("#user_card_body").empty();
        $("#loading").show();
        $.ajax({
            method: 'post',
            url: '/admin/acc-free-fire/search',
            type: 'post',
            data: {
                search_type: search_type,
                search_content: search_content
            },
            // contentType: false,
            // processData: false,
            success: function (res) {
                if (res.err === true) {
                    toastr.error(res.msg);
                } else {
                    $("#user_card_body").html(res);
                    $("#loading").hide();
                    // toastr.info(res.msg);
                }
            },
            error: function (res) {
                Swal('Có lỗi xảy ra!', res.responseJSON.error, 'error')
            }
        })
    });

});