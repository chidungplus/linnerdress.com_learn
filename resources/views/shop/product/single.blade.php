@extends('layouts.shop')

@section('seo')
<title>Mua Acc Free Fire Giá Rẻ Uy Tín - {{config('global.app_name')}}</title>
<meta name="description" content="Nạp thẻ shop acc." />
@endsection

@section('js')
<script src="/shop_assets/js/product/single.js"></script>
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