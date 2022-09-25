@extends('layouts.shop')

@section('seo')
<title>Mua Acc Free Fire Giá Rẻ Uy Tín - {{config('global.app_name')}}</title>
<meta name="description" content="Nạp thẻ shop acc." />
@endsection

@section('content')
<div id="content" class="site-content container clearfix">
    {{-- <p id="breadcrumbs"><span><span><a href="https://thanhandress.com/">Trang chủ</a> » <span><a
                        href="https://thanhandress.com/danh-muc-san-pham/vay-da-hoi-dai/">Váy dạ hội dài</a> » <span
                        class="breadcrumb_last" aria-current="page">VÁY DẠ HỘI VD177 – ĐỎ</span></span></span></span>
    </p> --}}
    <div class="row">
        <div id="primary" class="col-xs-12 col-sm-offset-8 col-md-offset-9 content-area">
            <main id="main" class="site-main" role="main">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 anh-sp"> 
                        <img width="768" height="1024" 
                            src="/storage/{{$product->thumbImage->large}}"
                            data-lazy-src="/storage/{{$product->thumbImage->large}}"
                            class="attachment-full size-full wp-post-image lazyloaded" alt="" loading="lazy"
                            data-lazy-srcset="/storage/{{$product->thumbImage->medium}} 450w, /storage/{{$product->thumbImage->large}} 768w"
                            data-lazy-sizes="(max-width: 768px) 100vw, 768px" sizes="(max-width: 768px) 100vw, 768px"
                            srcset="/storage/{{$product->thumbImage->medium}} 450w, /storage/{{$product->thumbImage->large}} 768w"
                            data-was-processed="true">

                        <noscript>
                            <img width="768" height="1024"
                            src="/storage/{{$product->thumbImage->large}}"
                            class="attachment-full size-full wp-post-image" alt="" loading="lazy"
                            srcset="/storage/{{$product->thumbImage->medium}} 450w, /storage/{{$product->thumbImage->large}} 768w"
                            sizes="(max-width: 768px) 100vw, 768px" />
                        </noscript>
                    </div>
                    <div class="col-xs-12 col-sm-6 info-sp">
                        <header class="entry-header">
                            <h1 class="entry-title">{{$product->name}}</h1>
                        </header>
                        <div class="gia_mua_ban">
                            {{-- <div class="gia gia_thue"> <label>Giá thuê:</label> 600,000đ</div> --}}
                            <div class="gia gia_ban"> <label>Giá bán:</label> 
                                @if($product->cost > $product->price)<span
                                    class="gach-ngang">{{number_format($product->cost)}}đ</span>
                                @endif
                                <span class="">{{number_format($product->price)}}đ</span>
                            </div>
                        </div>
                        <div class="chia_se">
                            <div class="fb-like" data-href="#"
                                data-layout="button_count" data-action="like" data-size="small" data-show-faces="false"
                                data-share="true"></div>
                        </div>
                        <div class="mo_ta_ngan">
                            <p>✔ Thanh An Dress , Thương hiệu Váy, Đầm dạ hội đẹp, độc, nhiều mẫu mã đa dạng, sẽ mang
                                đến cho quý khách hàng vô vàn sự lựa chọn, đa phong cách. Giúp bạn tỏa sáng nhất trong
                                những bữa tiệc, prom, …<br> ✔ Khách hàng có thể mua hoặc thuê, giá rất ưu đãi, mẫu mã
                                cam kết đẹp y hình, có size S, M, L để lựa chọn.<br> ✔ Khách hàng mua hoặc thuê lần thứ
                                2 trở đi sẽ được giảm giá 10%.</p>
                        </div>
                        <div class="muahang">
                            <div class="quantity"> <input type="number" step="1" min="1" max="" name="quantity"
                                    value="1" title="SL" class="input-text qty text" size="4" pattern="[0-9]*"
                                    inputmode="numeric"></div>
                            <div class="button_mua mua_ngay"> <a href="#"> <button type="button" class="dangky"
                                        data-toggle="modal" data-target="#exampleModalCenter">Mua ngay</button> </a>
                            </div>
                            <div class="them_vao_gio">
                                <div class="wp_cart_button_wrapper">
                                    <form method="post" class="wp-cart-button-form" action="" style="display:inline"
                                        onsubmit="return ReadForm(this, true);"><input type="submit"
                                            class="wspsc_add_cart_submit" name="wspsc_add_cart_submit"
                                            value="Thêm vào giỏ"><input type="hidden" name="wspsc_product"
                                            value="VÁY DẠ HỘI VD177 – ĐỎ"><input type="hidden" name="price"
                                            value="1500000"><input type="hidden" name="shipping" value="0"><input
                                            type="hidden" name="addcart" value="1"><input type="hidden" name="cartLink"
                                            value="https://thanhandress.com:443/san-pham/vay-da-hoi-vd177-do/"><input
                                            type="hidden" name="product_tmp" value="VÁY DẠ HỘI VD177 – ĐỎ"><input
                                            type="hidden" name="item_number" value=""><input type="hidden"
                                            name="hash_one" value="8eeecc823f3f18457f06005f6998f62f"></form>
                                </div>
                            </div>
                        </div>
                        <div class="box_lien_he">
                            <h2 class="box_title">Thông tin mua hàng</h2>
                            <div class="box_content">
                                <p class="hotline_2"><label>Hotline: </label><span>0932.221.293</span></p>
                                <p><label>Địa chỉ: </label>Số 39, Ngõ 165 Thái Hà, Đống Đa, Hà Nội.</p>
                                <p><label>E-mail: </label>hanh221293@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pro-content">
                    <h2 class="box_title">Thông tin mua hàng</h2>
                    <div class="entry">
                        <p>
                            @foreach($product->images as $row)
                                <img loading="lazy" class="alignnone size-full wp-image-6612 lazyloaded center-block"
                                    src="{{$row->image->large}}"
                                    data-lazy-src="/storage/{{$row->image->large}}" alt=""
                                    width="768" height="1024"
                                    data-lazy-srcset="/storage/{{$row->image->large}} 768w, /storage/{{$row->image->medium}} 450w"
                                    data-lazy-sizes="(max-width: 768px) 100vw, 768px"
                                    sizes="(max-width: 768px) 100vw, 768px"
                                    srcset="/storage/{{$row->image->large}} 768w, /storage/{{$row->image->medium}} 450w"
                                    data-was-processed="true">
                                <noscript>
                                <img loading="lazy"
                                        class="alignnone size-full wp-image-6612 center-block"
                                        src="/storage/{{$row->image->large}}" alt="" width="768"
                                        height="1024"
                                        srcset="/storage/{{$row->image->large}} 768w, /storage/{{$row->image->medium}} 450w"
                                        sizes="(max-width: 768px) 100vw, 768px" />
                                </noscript> 
                            @endforeach
                        </p>
                    </div>
                </div>
                <div class="fb-comment">
                    <div class="fb-comments" data-href="#"
                        data-numposts="5" data-width="100%" data-colorscheme="light"></div>
                </div>
                <div class="relate-post">
                    <h2 class="box_title_bg">Sản phẩm liên quan</h2>
                    <div class="row product_list">
                        @foreach($productSame as $key => $row)
                            @include('shop.product.block')
                        @endforeach
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>

@endsection