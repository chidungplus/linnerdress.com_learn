$(document).ready(function () {
    // countCart()
});

function addToCart(id){
    var quantity = $('#quantity').val();

    $.ajax({
        method: 'post',
        url: '/cart',
        type: 'post',
        data: {
            id: id,
            quantity : quantity
        },
        // contentType: false,
        // processData: false,
        success: function(res) {
            if (res.err === true) {
                toastr.error(res.msg);
            }else{
                countCart()
                Swal.fire({
                    type: 'success',
                    // title: 'Auto close alert!',
                    // html: 'I will close in <b></b> milliseconds.',
                    text: res.msg,
                    timer: 1000,
                    timerProgressBar: true,
                    showConfirmButton: false
                })
            } 
        }
    })
}

function buyNow(id){

    Swal.fire({
        type: 'error',
        // title: 'Auto close alert!',
        // html: 'I will close in <b></b> milliseconds.',
        text: 'Vui lòng chọn "size"',
        // timer: 2000,
        timerProgressBar: true,
        showConfirmButton: false
    })

    // var quantity = $('#quantity').val();

    // $.ajax({
    //     method: 'post',
    //     url: '/cart',
    //     type: 'post',
    //     data: {
    //         id: id,
    //         quantity : quantity
    //     },
    //     // contentType: false,
    //     // processData: false,
    //     success: function(res) {
    //         if (res.err === true) {
    //             toastr.error(res.msg);
    //         }else{
    //             window.location.href = "/cart";
    //             // toastr.success(res.msg);
    //         } 
    //     }
    // })
}