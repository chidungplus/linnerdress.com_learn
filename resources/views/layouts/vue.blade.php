<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    {{-- <link rel="pingback" href="https://linnerdress.com/xmlrpc.php"> --}}
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <title>Linner Dress - Bán Váy Dạ Hội Cao Cấp</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto%20Condensed%7CDancing%20Script&amp;subset=">

    <meta name="description"
        content="Linner Dress là shop bán váy dạ hội đẹp giá cả hợp lí, với nhiều mẫu mã đa dạng như váy dạ hội dài, váy dạ hội đuôi cá, váy dạ hội ngắn. Tận tâm phục vụ khách hàng toàn quốc.">
    <link rel="canonical" href="https://linnerdress.com/">
    <meta property="og:locale" content="vi_VN">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Linner Dress">
    <meta property="og:description"
        content="Linner Dress là shop bán váy dạ hội đẹp giá cả hợp lí, với nhiều mẫu mã đa dạng như váy dạ hội dài, váy dạ hội đuôi cá, váy dạ hội ngắn. Tận tâm phục vụ khách hàng toàn quốc.">
    <meta property="og:url" content="https://linnerdress.com/">
    <meta property="og:site_name" content="Linner Dress">
    <meta name="twitter:card" content="summary_large_image">

    <link rel="icon" href="/shop_assets/images/icon_150x150.png"
        sizes="32x32">
    <link rel="icon" href="/shop_assets/images/icon_300x300.png"
        sizes="192x192">
    <link rel="apple-touch-icon"
        href="/shop_assets/images/icon_300x300.png">
    <meta name="msapplication-TileImage"
        content="https://linnerdress.com/shop_assets/images/icon_300x300.png">
    {{-- Css --}}
    <link rel="stylesheet" href="/shop_assets/css/menu.css">
    <link rel="stylesheet" href="/shop_assets/vendors/toastr/toastr.css">
    <link rel="stylesheet" href="/shop_assets/vendors/sweetalert2/sweetalert2.min.css">
    <link rel="stylesheet" href="/shop_assets/css/style.css">
    {{-- Js --}}
    {{-- <script src="/shop_assets/vendors/jquery/jquery-3.4.1.min.js"></script>
    <script src="/shop_assets/vendors/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="/shop_assets/vendors/toastr/toastr.min.js"></script>
    <script src="/shop_assets/vendors/sweetalert2/sweetalert2.min.js"></script>

    <script src="/shop_assets/js/functions.js"></script> --}}
</head>

<body data-rsssl="1" class="home blog wp-custom-logo right-sidebar hfeed">
    <div id="app">

    </div>
    <script src="/build/js/app.js"></script>



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
    @yield("js")
</body>

</html>