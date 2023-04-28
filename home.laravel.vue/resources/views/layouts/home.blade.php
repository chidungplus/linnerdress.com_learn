<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Shop Acc Liên Quân Chất Lượng Uy Tín</title>
	<meta name="description" content="Shop bán nick liên quân chất lượng cao." />
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="robots" content="index,follow" />
	<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">

    <link rel="stylesheet" href="{{ mix('/build/css/app.css') }}" />
</head>

<body class="light">
    <div id="app">
        <header>
            <section id="menu-pc">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="header-main">
                                <div class="left">
                                    <ul class="menu-list">
                                        <li class="menu-item active">
                                            <a href="/"> Home </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="#">
                                                Bộ sưu tập
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="#">
                                                Sản phẩm mới
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="right">
                                    <div class="user">
                                        <a href="#">
                                            <svg role="presentation" stroke-width="1.5" focusable="false" width="22"
                                                height="22" class="icon icon-account" viewBox="0 0 22 22">
                                                <circle cx="11" cy="7" r="4" fill="none" stroke="currentColor"></circle>
                                                <path d="M3.5 19c1.421-2.974 4.247-5 7.5-5s6.079 2.026 7.5 5"
                                                    fill="none" stroke="currentColor" stroke-linecap="round"></path>
                                            </svg>
                                        </a>
                                        <a href="#">
                                            <svg role="presentation" stroke-width="1.5" focusable="false" width="22"
                                                height="22" class="icon icon-cart" viewBox="0 0 22 22">
                                                <path
                                                    d="M11 7H3.577A2 2 0 0 0 1.64 9.497l2.051 8A2 2 0 0 0 5.63 19H16.37a2 2 0 0 0 1.937-1.503l2.052-8A2 2 0 0 0 18.422 7H11Zm0 0V1"
                                                    fill="none" stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="menu-mobile">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="header-main">
                                <div class="menu-mobile">
                                    <input type="checkbox" id="input-menu" value="" />
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <div class="menu-bg">
                                        <ul class="menu-list">
                                            <li class="menu-item active">
                                                <img src="/shop_assets/images/svg/home.svg" alt="home" />
                                                <a href=""> Trang chủ </a>
                                            </li>
                                            <li class="menu-item">
                                                <img src="/shop_assets/images/svg/coin.svg" alt="coin" />
                                                <a href="#">Bộ sưu tập</a>
                                            </li>
                                            <li class="menu-item">
                                                <img src="/shop_assets/images/svg/history.svg" alt="history" />
                                                <a href="#">
                                                    Sản phẩm mới
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="logo">
                                    <a href="/">
                                        <img src="/shop_assets/images/logo-mobile.png" alt="" />
                                    </a>
                                </div>
                                <div class="right">
                                    <div class="user">
                                        <a href="#">
                                            {{-- <span class="cash-amount">Đăng nhập</span> --}}
                                            <svg role="presentation" stroke-width="1.5" focusable="false" width="22"
                                                height="22" class="icon icon-account" viewBox="0 0 22 22">
                                                <circle cx="11" cy="7" r="4" fill="none" stroke="currentColor"></circle>
                                                <path d="M3.5 19c1.421-2.974 4.247-5 7.5-5s6.079 2.026 7.5 5"
                                                    fill="none" stroke="currentColor" stroke-linecap="round"></path>
                                            </svg>
                                            <span class="cash-amount">1.000.0000</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </header>
        <main>
            @yield('main')
        </main>
        <footer>
            <section id="footer-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="list-menu clearfix">
                                <div class="block-menu">
                                    <p>Về chúng tôi</p>
                                    <ul>
                                        <li>
                                            <a href="#">Giới thiệu</a>
                                        </li>
                                        <li>
                                            <a href="/pages/dieu-khoan-su-dung">Điều khoản sử dụng</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="block-menu">
                                    <p>Về chúng tôi</p>
                                    <ul>
                                        <li>
                                            <a href="#">Giới thiệu</a>
                                        </li>
                                        <li>
                                            <a href="/pages/dieu-khoan-su-dung">Điều khoản sử dụng</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="block-menu">
                                    <p>Về chúng tôi</p>
                                    <ul>
                                        <li>
                                            <a href="#">Giới thiệu</a>
                                        </li>
                                        <li>
                                            <a href="/pages/dieu-khoan-su-dung">Điều khoản sử dụng</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="block-menu">
                                    <p>Về chúng tôi</p>
                                    <ul>
                                        <li>
                                            <a href="#">Giới thiệu</a>
                                        </li>
                                        <ul class="social-media">
                                            <li>
                                                <a href="#">
                                                    <svg role="presentation"
                                                        focusable="false" width="27" height="27"
                                                        class="icon icon-facebook" viewBox="0 0 24 24">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M10.183 21.85v-8.868H7.2V9.526h2.983V6.982a4.17 4.17 0 0 1 4.44-4.572 22.33 22.33 0 0 1 2.667.144v3.084h-1.83a1.44 1.44 0 0 0-1.713 1.68v2.208h3.423l-.447 3.456h-2.97v8.868h-3.57Z"
                                                            fill="currentColor">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <svg role="presentation"
                                                        focusable="false" width="27" height="27"
                                                        class="icon icon-instagram" viewBox="0 0 24 24">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M12 2.4c-2.607 0-2.934.011-3.958.058-1.022.046-1.72.209-2.33.446a4.705 4.705 0 0 0-1.7 1.107 4.706 4.706 0 0 0-1.108 1.7c-.237.611-.4 1.31-.446 2.331C2.41 9.066 2.4 9.392 2.4 12c0 2.607.011 2.934.058 3.958.046 1.022.209 1.72.446 2.33a4.706 4.706 0 0 0 1.107 1.7c.534.535 1.07.863 1.7 1.108.611.237 1.309.4 2.33.446 1.025.047 1.352.058 3.959.058s2.934-.011 3.958-.058c1.022-.046 1.72-.209 2.33-.446a4.706 4.706 0 0 0 1.7-1.107 4.706 4.706 0 0 0 1.108-1.7c.237-.611.4-1.31.446-2.33.047-1.025.058-1.352.058-3.959s-.011-2.934-.058-3.958c-.047-1.022-.209-1.72-.446-2.33a4.706 4.706 0 0 0-1.107-1.7 4.705 4.705 0 0 0-1.7-1.108c-.611-.237-1.31-.4-2.331-.446C14.934 2.41 14.608 2.4 12 2.4Zm0 1.73c2.563 0 2.867.01 3.88.056.935.042 1.443.199 1.782.33.448.174.768.382 1.104.718.336.336.544.656.718 1.104.131.338.287.847.33 1.783.046 1.012.056 1.316.056 3.879 0 2.563-.01 2.867-.056 3.88-.043.935-.199 1.444-.33 1.782a2.974 2.974 0 0 1-.719 1.104 2.974 2.974 0 0 1-1.103.718c-.339.131-.847.288-1.783.33-1.012.046-1.316.056-3.88.056-2.563 0-2.866-.01-3.878-.056-.936-.042-1.445-.199-1.783-.33a2.974 2.974 0 0 1-1.104-.718 2.974 2.974 0 0 1-.718-1.104c-.131-.338-.288-.847-.33-1.783-.047-1.012-.056-1.316-.056-3.879 0-2.563.01-2.867.056-3.88.042-.935.199-1.443.33-1.782.174-.448.382-.768.718-1.104a2.974 2.974 0 0 1 1.104-.718c.338-.131.847-.288 1.783-.33C9.133 4.14 9.437 4.13 12 4.13Zm0 11.07a3.2 3.2 0 1 1 0-6.4 3.2 3.2 0 0 1 0 6.4Zm0-8.13a4.93 4.93 0 1 0 0 9.86 4.93 4.93 0 0 0 0-9.86Zm6.276-.194a1.152 1.152 0 1 1-2.304 0 1.152 1.152 0 0 1 2.304 0Z"
                                                            fill="currentColor">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <svg role="presentation" focusable="false" width="27" height="27" class="icon icon-youtube" viewBox="0 0 24 24">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M20.44 5.243c.929.244 1.66.963 1.909 1.876.451 1.654.451 5.106.451 5.106s0 3.452-.451 5.106a2.681 2.681 0 0 1-1.91 1.876c-1.684.443-8.439.443-8.439.443s-6.754 0-8.439-.443a2.682 2.682 0 0 1-1.91-1.876c-.45-1.654-.45-5.106-.45-5.106s0-3.452.45-5.106a2.681 2.681 0 0 1 1.91-1.876c1.685-.443 8.44-.443 8.44-.443s6.754 0 8.438.443Zm-5.004 6.982L9.792 15.36V9.091l5.646 3.134Z" fill="currentColor">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <svg role="presentation" focusable="false" width="27" height="27" class="icon icon-tiktok" viewBox="0 0 24 24">
                                                        <path d="M20.027 10.168a5.125 5.125 0 0 1-4.76-2.294v7.893a5.833 5.833 0 1 1-5.834-5.834c.122 0 .241.011.361.019v2.874c-.12-.014-.237-.036-.36-.036a2.977 2.977 0 0 0 0 5.954c1.644 0 3.096-1.295 3.096-2.94L12.56 2.4h2.75a5.122 5.122 0 0 0 4.72 4.573v3.195" fill="currentColor">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </li>
                                            
               
                                        </ul>
                                    </ul>
                                </div>

                            </div>
                            <div class="footer-bottom">
                                <p class="copyright">© 2023, Polomanor. Do Shopify cung cấp</p>
                                <p class="site-footer-credits">
                                    <a href="http://online.gov.vn/Home/WebDetails/97426" target="_blank">
                                        <img loading="lazy"
                                            src="//cdn.shopify.com/s/files/1/0257/3464/3766/files/logoSaleNoti.png?v=1609831319"
                                            alt="Đã thông báo với Bộ Công Thương">
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </footer>
    </div>
</body>

</html>