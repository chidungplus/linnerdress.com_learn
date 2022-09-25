(function($){
    $(document).ready(function () {
        initEvent(); // cac ham xu li click button

        // Show menu mobile
        $('.sa-imn').click(function(){
            $('.sa-menu').toggleClass('sa-mnshow');
        });
        $(window).bind('scroll', function () {
            if ($(window).scrollTop() > 70) {
                $('.sa-ttactit').addClass('sa-hdfix-mobile');
            } else {
                $('.sa-ttactit').removeClass('sa-hdfix-mobile');
            }
        });
	});
})(window.jQuery);

function buyRandom(type){
    Swal.fire({
        title: 'Xác nhận mua acc !',
        type: 'info',
        html: 'Bạn có chắc muốn mua tài khoản này với điều khoản của chúng tôi ?!',
        showCloseButton: true,
        showCancelButton: true,
        focusConfirm: false,
        confirmButtonText: '<i class="fa fa-thumbs-up"></i> Xác nhận',
        confirmButtonAriaLabel: 'Thumbs up, great!',
        cancelButtonText: '<i class="fa fa-thumbs-down"> Cancel</i>',
        cancelButtonAriaLabel: 'Thumbs down'
    }).then(function(result) {
        if (result.value) {
            $.ajax({
                method: 'POST',
                url: '/random',
                type: 'post',
                data: {
                    type_random: type
                },
                success: function(res) {
                    if (res.err == true) {
                        if (res.isNotLogin) {
                            Swal.fire({
                                title: '<strong>Bạn chưa đăng nhập</strong>',
                                type: 'info',
                                html: 'Bấm xác nhận để đăng nhập bằng facebook!',
                                showCloseButton: true,
                                showCancelButton: true,
                                focusConfirm: false,
                                confirmButtonText: 'Đăng nhập bằng Facebook',
                                confirmButtonAriaLabel: 'Thumbs up, great!',
                                cancelButtonText: '<i class="fa fa-thumbs-down"> Đăng nhập bằng tài khoản</i>',
                                cancelButtonAriaLabel: 'Thumbs down'
                            }).then(function(result){
                                if (result.value){
                                    //var url_callback = window.location.href;
                                    document.location.href = '/redirect/facebook';
                                }else{
                                    document.location.href = '/login';
                                    // Swal('OPP!', 'Bạn vừa hủy đăng nhập', 'error')
                                }
                            })
                        } else if (res.isNotMoney) {
                            Swal.fire({
                                title: '<strong>Bạn không đủ tiền</strong>',
                                type: 'info',
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
                                }else{
                                    Swal('OPP!', 'Nạp tiền mới mua được nick!', 'error')
                                }
                            })
                        } else {
                            Swal('OPP!', res.msg , 'warning')
                        }
    
                    } else {
                        fn_updateCash();
                        Swal.fire({
                                title: '<strong>Mua Thành Công</strong>',
                                type: 'success',
                                html: res.msg ,
                                showCloseButton: true,
                                showCancelButton: true,
                                focusConfirm: false,
                                confirmButtonText: 'Xem Acc',
                                confirmButtonAriaLabel: 'Thumbs up, great!',
                                cancelButtonText: '<i class="fa fa-thumbs-down"> Cancel</i>',
                                cancelButtonAriaLabel: 'Thumbs down'
                            }).then(function(result){
                                if (result.value){
                                    document.location.href = '/user/history/random';
                                }else{
                                    Swal('OPP!', 'Bạn có thể xem lại nick đã mua tại lịch sử mua!', 'warning')
                                }
                            })
                    }
                }
            })
        }
    })
}

function buyAccount(id){
    Swal.fire({
        title: 'Xác nhận mua acc !',
        type: 'info',
        html: 'Bạn có chắc muốn mua tài khoản này với điều khoản của chúng tôi ?!',
        showCloseButton: true,
        showCancelButton: true,
        focusConfirm: false,
        confirmButtonText: '<i class="fa fa-thumbs-up"></i> Xác nhận',
        confirmButtonAriaLabel: 'Thumbs up, great!',
        cancelButtonText: '<i class="fa fa-thumbs-down"> Cancel</i>',
        cancelButtonAriaLabel: 'Thumbs down'
    }).then(function(result) {
        if (result.value) {
            $.ajax({
                method: 'POST',
                url: '/free-fire/buyAcc',
                type: 'post',
                data: {
                    id: id
                },
                success: function(res) {
                    if (res.err == true) {
                        if (res.isNotLogin) {
                            Swal.fire({
                                title: '<strong>Bạn chưa đăng nhập</strong>',
                                type: 'info',
                                html: 'Bấm xác nhận để đăng nhập bằng facebook!',
                                showCloseButton: true,
                                showCancelButton: true,
                                focusConfirm: false,
                                confirmButtonText: 'Đăng nhập bằng Facebook',
                                confirmButtonAriaLabel: 'Thumbs up, great!',
                                cancelButtonText: '<i class="fa fa-thumbs-down"> Đăng nhập bằng tài khoản</i>',
                                cancelButtonAriaLabel: 'Thumbs down'
                            }).then(function(result){
                                if (result.value){
                                    //var url_callback = window.location.href;
                                    document.location.href = '/redirect/facebook';
                                }else{
                                    document.location.href = '/login';
                                    // Swal('OPP!', 'Bạn vừa hủy đăng nhập', 'error')
                                }
                            })
                        } else if (res.isNotMoney) {
                            Swal.fire({
                                title: '<strong>Bạn không đủ tiền</strong>',
                                type: 'info',
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
                                }else{
                                    Swal('OPP!', 'Nạp tiền mới mua được nick!', 'error')
                                }
                            })
                        } else {
                            Swal('OPP!', res.msg , 'warning')
                        }
    
                    } else {
                        fn_updateCash();
                        Swal.fire({
                                title: '<strong>Mua Thành Công</strong>',
                                type: 'success',
                                html: res.msg ,
                                showCloseButton: true,
                                showCancelButton: true,
                                focusConfirm: false,
                                confirmButtonText: 'Xem Acc',
                                confirmButtonAriaLabel: 'Thumbs up, great!',
                                cancelButtonText: '<i class="fa fa-thumbs-down"> Cancel</i>',
                                cancelButtonAriaLabel: 'Thumbs down'
                            }).then(function(result){
                                if (result.value){
                                    document.location.href = '/user/history/acc';
                                }else{
                                    Swal('OPP!', 'Bạn có thể xem lại nick đã mua tại lịch sử mua!', 'warning')
                                }
                            })
                    }
                }
            })
        }
    })
}

function fn_updateCash(){
    $.ajax({
        method: 'POST',
        url: '/user',
        type: 'post',
        // data: {
        //     id: id
        // },
        success: function(res) {
            if (res.err == true) {
                
            } else {
                data = res.msg;
                $('.cash-user').text(data.cash);
                $('#diamond-current').text(data.diamond);
            }
        }
    })
}

function initEvent() {
    
    $('.sa-ptbtn').click(function (e) {
        e.preventDefault();

        $('#popImg .modal-title').html($(this).closest('li').find('label').html());

        $('.sa-popimg img').attr('src', $(this).attr('data-src'));

        $('#popImg').modal('show');

    });
}
