$(document).ready(function () {
    $('#name').change(function () {
        var name = $('#name').val();
        var user_id = $('#user_id').val();
        $.ajax({
            method: 'patch',
            url: '/admin/user/'+ user_id,
            type: 'post',
            data: {
                name: name,
            },
            success: function (res) {
                if (res.err === true) {
                    toastr.error(res.msg);
                } else {
                    toastr.success(res.msg);
                }
            }
        })
    });

});

function updateCash(user_id, type){
    var amount = $('#cash_amount').val(); 
    $.ajax({
        method: 'post',
        url: '/admin/user/'+ user_id + '/update-cash' ,
        type: 'post',
        data: {
            amount : amount,
            type : type,
        },
        success: function(res) {
            if (res.err === true) {
              toastr.error(res.msg);
            }else{
                data = res.msg;
                toastr.success(data.msg);
                $('#cash').val(data.cash);
            }
        }
    })
}

function updateDiamond(user_id, type){
    var amount = $('#diamond_amount').val(); 
    $.ajax({
        method: 'post',
        url: '/admin/user/'+ user_id + '/update-diamond' ,
        type: 'post',
        data: {
            amount : amount,
            type : type,
        },
        success: function(res) {
            if (res.err === true) {
              toastr.error(res.msg);
            }else{
                data = res.msg;
                toastr.success(data.msg);
                $('#diamond').val(data.diamond);
            }
        }
    })
}
