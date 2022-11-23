$(document).ready(function () {
    let cart_detail_show = false;
    let check = true;
    $(".icon-bag, .btn-cart").click(function(){
        if(cart_detail_show === false){
            cart_detail_show = true;
            $( ".shopping-cart-detail" ).removeClass( "animation-hidden-cart-detail" ).addClass( "anima-cart-detail" );
            $( ".checkout" ).append('<div class="ladiui-checkout-bg-overlay"></div>');
        }else{
            cart_detail_show = false;
            $( ".shopping-cart-detail" ).removeClass( "anima-cart-detail" ).addClass( "animation-hidden-cart-detail" );
            $( ".ladiui-checkout-bg-overlay" ).remove();
        }
    })
    $(".btn-close").click(function(){
        cart_detail_show = false;
        $( ".shopping-cart-detail" ).removeClass( "anima-cart-detail" ).addClass( "animation-hidden-cart-detail" );
        $( ".ladiui-checkout-bg-overlay" ).remove();
    })
    $("#btn-next, .payment").click(function(){
        if(check === true){
            $.ajax({
                method: 'POST',
                url: '/cart/payment',
                type: 'post',
                success: function(res) {
                    $('#myTabContent').html(res);
                }
            })
            $.ajax({
                method: 'POST',
                url: '/cart/payment/cart-bottom',
                type: 'post',
                success: function(res) {
                    $('.shopping-cart').html(res);
                }
            })
 

            $( ".order" ).removeClass( "active" );
            $( ".payment" ).addClass( "active" );
        }else{
            // show lỗi
        }
       
    })
    $(".order").click(function(){
        
    })

});