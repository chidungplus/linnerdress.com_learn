export const scroll = () => {
    let position = $(window).scrollTop();
    $(window).scroll(function () {
        const scroll = $(window).scrollTop();
        scroll > 950 ? $('.product-button-fixed').addClass('is-active') : $('.product-button-fixed').removeClass('is-active');

        scroll > position ? $('.site-header').addClass('is-scroll-top') : $('.site-header').removeClass('is-scroll-top');

        position = scroll;
    });
    // $('.product-single__button, .product-button-fixed').click(function () {
    //     $('html, body').animate({
    //         scrollTop: 530
    //     }, 300);

    //     return false;
    // });
}