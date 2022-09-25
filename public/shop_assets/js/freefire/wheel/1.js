
$(document).ready(function (e) {

    $(".thele").on("click", function () {
        $("#theleModal").modal('show');
    })

    var roll_check = false;
    var num_loop = 4;
    var angle_gift = '';
    var num_gift = 8;
    var gift_detail = '';
    var num_roll_remain = 0;
    var angles = 0;
    var url_;
    let name_product;

    $(document).on('click',"#start-played1",function(){
        url_ = "/wheel";
        if(roll_check == false)
            start_();
    });
    $(document).on('click',"#try",function(){
        url_ = "/wheel/try";
        if(roll_check == false)
            start_();
    });
    function start_(){
        $('#rotate-play').css({"transform": "rotate(0deg)"});
    	$.ajax({
            method: 'post',
            url: url_,
            type: 'post',
            data: {
                num_roll: $('#num-roll').val(),
                type_wheel : 1,
            },
            // contentType: false,
            // processData: false,
            success: function(res) {
                if (res.err === true) {
                    if (res.isNotLogin) {
                        Swal.fire({
                            title: '<strong>Bạn chưa đăng nhập</strong>',
                            type: 'error',
                            html: 'Bấm xác nhận để đăng nhập bằng facebook!',
                            showCloseButton: true,
                            showCancelButton: true,
                            focusConfirm: false,
                            confirmButtonText: 'Đăng nhập nhanh',
                            confirmButtonAriaLabel: 'Thumbs up, great!',
                            cancelButtonText: '<i class="fa fa-thumbs-down"> Đăng nhập thường</i>',
                            cancelButtonAriaLabel: 'Thumbs down'
                        }).then(function(result){
                            if (result.value){
                                document.location.href = '/redirect/facebook';
                            }else{
                                document.location.href = '/login';
                            }
                        })
                    } else if (res.isNotMoney) {
                        Swal.fire({
                            title: '<strong>Bạn không đủ tiền</strong>',
                            type: 'error',
                            html: 'Vui lòng nạp đủ tiền trước khi mua tài khoản.' +
                            '<p>Cảm ơn bạn đã ủng hộ shop!</p>',
                            showCloseButton: true,
                            showCancelButton: true,
                            focusConfirm: false,
                            confirmButtonText: 'Nạp tiền',
                            confirmButtonAriaLabel: 'Thumbs up, great!',
                            cancelButtonText: '<i class="fa fa-thumbs-down"> Cancel</i>',
                            cancelButtonAriaLabel: 'Thumbs down'
                        }).then(function(result){
                            if (result.value){
                                document.location.href = '/nap-tien';
                            }
                        })
                    } else {
                        Swal('Error', res.msg, 'error')
                    }
                }else{
                    gift_detail = res.msg;
                    num_roll_remain = gift_detail.num_roll_remain;
                    $('#rotate-play').css({
                        "transform": "rotate(0deg)"
                    });
                    angles = 0;
                    angle_gift = gift_detail.pos * (360 / num_gift);
                    loop();
                } 
            }
        })
    }
    
    function loop() {
        roll_check = true;
        if (typeof gift_detail.typeRoll !== 'undefined') {
            if (gift_detail.typeRoll == 'try')
                typeRoll = "Quay thử";
            else
                typeRoll = "Quay thật";
        } else
            typeRoll = "Quay thật";

        $('#rotate-play').css({
            "transform": "rotate(" + angles + "deg)"
        });

        if ((parseInt(angles) - 10) <= -(((num_loop * 360) + angle_gift))) {
            angles = parseInt(angles) - 2;
        } else {
            angles = parseInt(angles) - 10;
        }
        if (angles >= -((num_loop * 360) + angle_gift)) {
            requestAnimationFrame(loop);
        } else {
            roll_check = false;
            var nf = new Intl.NumberFormat();
            html = "";
            html += "<p>Kết quả quay <span style='font-weight: bold;text-transform: uppercase;color: #FF0000;'>(" + typeRoll + "):</span> Quay " + gift_detail.name.length + " lần - giá " + nf.format(gift_detail.cash) + "đ</p>";
            html += "<div><b>Mua X" + gift_detail.name.length + ": Tổng Trúng <span style='color: #FF0000;'>" + gift_detail.diamond + " Kim Cương</span></b></div>";
            html += "<div></div>";
            for (let i = 0; i < gift_detail.name.length; i++) {
                html += "<p class='text-md'>- Quay lần " + (i + 1) + ": " + gift_detail.name[i];
            }

            $('.content-popup').html(html);
            $('#noticeModal').modal('show');
            //$('.num-play span').text(num_roll_remain);///////////////////
            // if (num_roll_remain == 0) {
            //     $('.deposit-btn').show();
            // } else {
            //     $('.deposit-btn').hide();
            // }
            fn_updateCash();
        }
    }

});
