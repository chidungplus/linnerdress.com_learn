@extends('layouts.shop')

@section('seo')
<title> </title>
<meta name="description" content="" />
@endsection

@section('js')
{{--
<script src="/shop_assets/js/product/single.js"></script> --}}
@endsection

@section('content')

<main class="product-single">
    <div id="content" class="site-content container clearfix">
        <div id="primary" class="col-xs-12 col-sm-offset-8 col-md-offset-9 content-area">
            <section class="product-single__infomation">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 anh-sp">
                        <img width="768" height="1024" src="/storage/{{$product->thumbImage->large}}"
                            data-lazy-src="/storage/{{$product->thumbImage->large}}"
                            class="attachment-full size-full wp-post-image lazyloaded" alt="" loading="lazy"
                            data-lazy-srcset="/storage/{{$product->thumbImage->medium}} 450w, /storage/{{$product->thumbImage->large}} 768w"
                            data-lazy-sizes="(max-width: 768px) 100vw, 768px" sizes="(max-width: 768px) 100vw, 768px"
                            srcset="/storage/{{$product->thumbImage->medium}} 450w, /storage/{{$product->thumbImage->large}} 768w"
                            data-was-processed="true">
                    </div>
                    <div class="col-xs-12 col-sm-6 info-sp">
                        <h1 class="entry-title">{{$product->name}}</h1>

                        <div class="gia_mua_ban">
                            <div class="gia gia_ban"> <label>Giá bán:</label>
                                @if($product->cost > $product->price)<span
                                    class="gach-ngang">{{number_format($product->cost)}}đ</span>
                                @endif
                                <span class="">{{number_format($product->price)}}đ</span>
                            </div>
                        </div>

                        <div class="product-single__addtocart">
                            <!-- <form action="" rel-script="product-single-script" data-product-id="" data-variants="">
                                <div class="product-single__options">
                                    <div rel-script="product-single-option-item" class="product-single__option">
                                        <div class="option-heading">
                                            <span class="option-heading__title">Màu sắc:
                                                <span rel="product-option-title-color"
                                                    class="text--bold">Tím</span></span>
                                        </div>
                                        <div data-option-id="color" data-option-index="1"
                                            class="option-select option-select--color">
                                            <label class="
                                option-select__item option-select__item--color
                                tim
                            ">
                                                <div class="option-select__inner">
                                                    <input type="radio" name="color" value="tim" checked="checked"
                                                        data-gallery="" data-title="Tím" />
                                                    <span class="checkmark checkmark--color tim" style="
                                        background-image: url('https://media.coolmate.me/cdn-cgi/image/width=160,height=160,quality=80,format=auto/uploads/November2022/mau-tim-1-new.jpg');
                                    "></span>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div rel-script="product-single-option-item"
                                        class="product-single__option is-error">
                                        <div class="option-heading">
                                            <span class="option-heading__title">Kích thước:
                                                <span rel="product-option-title-size" class="text--bold"></span></span>
                                            <a href="#size-guide" rel-script="toggle-size-guide"
                                                class="option-heading__sizeguide">
                                                Hướng dẫn chọn size
                                            </a>
                                        </div>
                                        <div data-option-id="size" data-option-index="2"
                                            class="option-select option-select--size">
                                            <label class="option-select__item m">
                                                <div class="option-select__inner">
                                                    <input type="radio" name="size" value="m" data-title="M" />
                                                    <span class="checkmark">M</span>
                                                </div>
                                            </label>
                                            <label class="option-select__item l">
                                                <div class="option-select__inner">
                                                    <input type="radio" name="size" value="l" data-title="L" />
                                                    <span class="checkmark">L</span>
                                                </div>
                                            </label>
                                            <label class="option-select__item xl">
                                                <div class="option-select__inner">
                                                    <input type="radio" name="size" value="xl" data-title="XL" />
                                                    <span class="checkmark">XL</span>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-single__actions">
                                    <div class="product-single__quantity">
                                        <div rel-script="quantity-change" class="quantity">
                                            <a href="#" class="quantity__reduce">-</a>
                                            <input type="number" value="1" max="99" min="1" class="quantity__control" />
                                            <a href="#" class="quantity__augure">+</a>
                                        </div>
                                    </div>
                                    <div class="product-single__button">
                                        <a href="#" data-product-id="633e48dae0b15e05787570d6" data-variant-id=""
                                            data-quantity="1" rel-script="product-add-to-cart" class="btn">Chọn kích
                                            thước
                                        </a>
                                    </div>
                                </div>
                            </form> -->
                        </div>

                        <div class="product-single__policy">
                            <div class="product-policy">
                                <div class="product-policy__item">
                                    <div class="product-policy__icon"><img
                                            src="https://www.coolmate.me/images/icons/icon4.svg"
                                            alt="Miễn phí vận chuyển"></div> <span class="product-policy__title">
                                        Miễn phí vận chuyển <br> mọi đơn hàng
                                    </span>
                                </div>
                                <div class="product-policy__item">
                                    <div class="product-policy__icon"><img
                                            src="https://www.coolmate.me/images/icons/icon3.svg"
                                            alt="Đổi trả với số điện thoại"></div> <span class="product-policy__title">
                                        Kiểm tra hàng <br>trước khi thanh toán
                                    </span>
                                </div>

                                <div class="product-policy__item">
                                    <div class="product-policy__icon"><img
                                            src="https://www.coolmate.me/images/icons/icon6.svg" alt="Giao hàng"></div>
                                    <span class="product-policy__title">
                                        Giao hàng nhanh <br>toàn quốc
                                    </span>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="muahang">
                            <div class="quantity">
                                <input type="number" step="1" min="1" max="5" name="quantity" value="1" title="SL"
                                    class="input-text qty text" size="4" pattern="[0-9]*" id="quantity" disabled>
                            </div>
                            <div class="them_vao_gio">
                                <div class="wp_cart_button_wrapper" onclick="addToCart({{$product->id}});">Thêm vào giỏ
                                </div>
                            </div>
                        </div> --}}
                        <div class="box_lien_he">
                            <h2 class="box_title">Thông tin mua hàng</h2>
                            <div class="box_content">
                                <p class="hotline_2"><label>Hotline: </label><span>035.303.2222</span></p>
                                <p><label>Địa chỉ: </label>Số 39, Ngõ 165 Thái Hà, Đống Đa, Hà Nội.</p>
                                <p><label>E-mail: </label>linnerdress@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="pro-content">
                <h2 class="box_title">Hình ảnh chi tiết</h2>
                <div class="entry">
                    <p>
                        @foreach($product->images as $row)
                        <img loading="lazy" class="alignnone size-full wp-image-6612 lazyloaded center-block"
                            src="{{$row->image->large}}" data-lazy-src="/storage/{{$row->image->large}}" alt=""
                            width="768" height="1024"
                            data-lazy-srcset="/storage/{{$row->image->large}} 768w, /storage/{{$row->image->medium}} 450w"
                            data-lazy-sizes="(max-width: 768px) 100vw, 768px" sizes="(max-width: 768px) 100vw, 768px"
                            srcset="/storage/{{$row->image->large}} 768w, /storage/{{$row->image->medium}} 450w"
                            data-was-processed="true">
                        <noscript>
                            <img loading="lazy" class="alignnone size-full wp-image-6612 center-block"
                                src="/storage/{{$row->image->large}}" alt="" width="768" height="1024"
                                srcset="/storage/{{$row->image->large}} 768w, /storage/{{$row->image->medium}} 450w"
                                sizes="(max-width: 768px) 100vw, 768px" />
                        </noscript>
                        @endforeach
                    </p>
                </div>
            </div>
            <div class="relate-post">
                <h2 class="box_title_bg">Sản phẩm liên quan</h2>
                <div class="row product_list">
                    @foreach($productSame as $key => $row)
                    @include('shop.product.block')
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</main>

<div class="product-button-fixed"><a href="#" rel-script="product-button-add-to-cart" class="btn">Mua Tím / XL</a></div>

@endsection