<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/shop_assets/css/ladi.css">
    <link rel="stylesheet" href="/shop_assets/css/cart.css">

    <script src="/shop_assets/vendors/jquery/jquery-3.4.1.min.js"></script>
    <script src="/shop_assets/vendors/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="/shop_assets/vendors/toastr/toastr.min.js"></script>
    <script src="/shop_assets/vendors/sweetalert2/sweetalert2.min.js"></script>
    <script src="/shop_assets/js/cart/index.js"></script>
</head>

<body>


    <div class="ladiui checkout-dns ">
        <div class="ladiui checkout contain">
            <ul class="ladiui nav nav-tabs">
                <li class="ladiui nav-item "><span class="ladiui tab-link order active">Đơn hàng của tôi</span></li>
                <li class="ladiui nav-item "><span class="ladiui tab-link payment">Thanh toán</span></li>
            </ul>
            <div class="ladiui tab-content " id="myTabContent">
                <div class="ladiui tab-pane fade show open">
                    <div class="ladiui form-group best-seller"><label class="ladiui checkout-title-text">Sản
                            phẩm</label>
                        <div class="list-product">
                            <div class="ladiui item-product-cn">
                                <div class="image"><img src="https://w.ladicdn.com/ladiui/ladisales/no-image.svg" alt=""
                                        width="84" height="84"></div>
                                <div class="info-product-item">
                                    <div class="name">Váy Dc102</div>
                                    <div class="description style-default">
                                        <div>
                                            <p>ahihi</p>
                                        </div>
                                    </div>
                                    <div class="flex-center-space">
                                        <div class="price">1,000,000đ</div>
                                        <div class="cursor-pointer btn-buy-product"><i class="cta-cart"></i><span>Đặt
                                                hàng</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-cart">
                        <div class="flex-center"><img
                                src="https://w.ladicdn.com/ladiui/ladisales/icons/ldicon-shopping-bag.svg" alt=""
                                width="24" height="24">
                            <div class="ml-8">Giỏ hàng (1) </div>
                        </div>
                        <div class="flex-center">
                            <div class="mr-8">1,000,000đ</div><img
                                src="https://w.ladicdn.com/ladiui/ladisales/icons/IonChevronDownOutline.svg" alt=""
                                width="12" height="12">
                        </div>
                    </div>
                    <div class="ladiui form-group customer-tab"><label class="ladiui checkout-title-text">Thông tin giao
                            hàng</label>
                        <div class="pos-rel mt-16"><span class="ladiui label-sub">Họ và tên</span><input
                                class="ladiui form-control " name="first_name" placeholder="Nhập họ và tên khách hàng"
                                value="dũng"></div>
                        <div class="pos-rel mt-16"><span class="ladiui label-sub">Số điện thoại</span><input
                                class="ladiui form-control " name="phone" placeholder="Nhập số điện thoại"
                                value="0965346910"></div>
                        <div class="pos-rel mt-16"><span class="ladiui label-sub">Địa chỉ</span><input
                                class="ladiui form-control " name="address" placeholder="Nhập địa chỉ"
                                value="102 trần phú hà đông"></div>
                      
                        <div class="ladiui pos-rel mt-16"><span class="ladiui label-sub">Ghi chú</span><textarea
                                class="ladiui form-control " name="note"
                                placeholder="Nhập nội dung ghi chú">d</textarea>
                            <div><span class="valid-error"></span></div>
                        </div>
                    </div>
                    <div>

                    </div>
                </div>
            </div>
            <div class="shopping-cart">
                <div class="ladiui flex-center">
                    <div class="icon-cart cursor-pointer">
                        <div class="icon-bag"><img
                                src="https://w.ladicdn.com/ladiui/ladisales/icons/ldicon-shopping-bag.svg" alt=""
                                width="24" height="24"></div>
                        <div class="badge-cart">
                            <div class="badge-item">1</div>
                        </div>
                    </div>
                    <div class="total-cart ta-l">
                        <div class="title">Tổng đơn hàng</div><span class="value">1,000,000đ</span>
                    </div>
                </div>
                <div><button class="ladiui btn btn-primary btn-sm" id="btn-next">Tiếp tục</button></div>
            </div>
            <div class="shopping-cart-detail animation-hidden-cart-detail ">
                <div class="cart-detail">
                    <div class="head-cart"><span class="title">Giỏ hàng</span><i
                            class="btn-close cursor-pointer icon-close-no-bg-16"></i></div>
                    <div class="cart-title"><span>Giỏ hàng của bạn
                            <!-- -->
                            <!-- -->(1)
                        </span></div>
                    <div class="list-product-cart">
                        <div class="item-cart">
                            <div class="image-product"><img src="https://w.ladicdn.com/ladiui/ladisales/no-image.svg"
                                    alt="" width="84" height="84"></div>
                            <div class="info-product">
                                <div class="flex-center-between w-100p">
                                    <div class="name">Váy Dc102</div><img class="cursor-pointer"
                                        src="https://w.ladicdn.com/ladiui/ladisales/icons/icon-delete-cart.svg" alt="">
                                </div>
                                <div class="tooltip"><span class="tooltiptext top" tooltiptext=""></span>
                                    <div class="option"></div>
                                </div>
                                <div class="price-quantity">
                                    <div class="price-detail">
                                        <div class="price">1,000,000đ</div>
                                    </div>
                                    <div class="group-change-quantity product-quantity">
                                        <div class="btn-quantity-img" disabled=""><img
                                                src="https://w.ladicdn.com/ladiui/ladisales/icons/icon-subtract-quantity.svg"
                                                alt=""></div><input type="number" class="input-quantity" min="1"
                                            value="1" style="text-align: center;">
                                        <div class="btn-quantity-img"><img
                                                src="https://w.ladicdn.com/ladiui/ladisales/icons/icon-add-quantity.svg"
                                                alt=""></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ladiui coupon-group "><label class="checkout-title-option">Mã giảm giá</label>
                            <div class="flex-center-between"><input class="ladiui input-discount"
                                    placeholder="Nhập mã giảm giá" value=""><button class="ladiui btn-apdung  "
                                    disabled="">Áp dụng</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            error: function (res, status, error) {
                if (res.status == 419) {
                    Swal.fire({
                        title: '<strong>Errors</strong>',
                        type: 'error',
                        html: "Có lỗi xảy ra, vui lòng thử lại sau 5s",
                        showCloseButton: true,
                        showCancelButton: true,
                        focusConfirm: false,
                        confirmButtonText: 'Thử lại',
                        confirmButtonAriaLabel: 'Thumbs up, great!',
                        cancelButtonText: '<i class="fa fa-thumbs-down"> Cancel</i>',
                        cancelButtonAriaLabel: 'Thumbs down'
                    }).then(function (result) {
                        if (result.value) {
                            location.reload();
                        } else {
                            location.reload();
                        }
                    })
                }
                else {
                    Swal('Có lỗi xảy ra!', res.responseJSON.error, 'error')
                }
            }
        });
    </script>

</body>

</html>