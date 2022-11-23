(function($){
    $(document).ready(function () {
        initEvent(); // cac ham xu li click button

        countCart()

        // Show menu mobile
        // $('.sa-imn').click(function(){
        //     $('.sa-menu').toggleClass('sa-mnshow');
        // });

        var position = $(window).scrollTop(); 

        // should start at 0

        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            // console.log(scroll)

            if(scroll > 950){
                $('.product-button-fixed').addClass('is-active');
            }else{
                $('.product-button-fixed').removeClass('is-active');
            }

            if(scroll > position) {
                $('.site-header').addClass('is-scroll-top');
            } else {
                $('.site-header').removeClass('is-scroll-top');
            }
            position = scroll;
        });

        var scrollTop = $(".product-single__button");
        var lol = $(".product-button-fixed"); 
        $(scrollTop).click(function() {
   
            $('html, body').animate({
              scrollTop: 530
            }, 300);
            return false;
        }); // click() scroll top EMD
        $(lol).click(function() {
   
            $('html, body').animate({
              scrollTop: 530
            }, 300);
            return false;
        }); // click() scroll top EMD
	});
})(window.jQuery);


function countCart(){
    $.ajax({
        method: 'POST',
        url: '/count-cart',
        type: 'post',
        // data: {
        //     id: id
        // },
        success: function(res) {
            if (res.err == true) {
                toastr.error('Lỗi');
            } else {
                // toastr.success(res.msg);
                $('.number-cart').text(res.msg);
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
