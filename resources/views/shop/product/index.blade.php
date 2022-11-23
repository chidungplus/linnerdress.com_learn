@extends('layouts.shop')

@section('seo')
<title>Mua Acc Free Fire Giá Rẻ Uy Tín - {{config('global.app_name')}}</title>
<meta name="description" content="Nạp thẻ shop acc." />
@endsection

@section('js')
{{--
<script src="/shop_assets/js/freefire/filter.js"></script> --}}
@endsection
@section('menu')
{{-- @include('shop.menu.ff') --}}
@endsection
@section('content')

<main class="site-homepage">
    <div class="container">
        <div class="home_box">
            <h2 class="home_title">
                <a href="/danh-muc/vay-da-hoi-dai" title="Váy dạ hội dài">Váy dạ hội
                    dài</a>
            </h2> <a href="/danh-muc/vay-da-hoi-dai" class="xem_them"
                title="Váy dạ hội dài">Xem tất cả</a>
            <div class="box_san_pham">
                <div class="row product_list">
                    @foreach($productsDC as $key => $row)
                    @include('shop.product.block')
                    @endforeach
                </div>
            </div>
        </div>
        <div class="home_box">
            <h2 class="home_title">
                <a href="/danh-muc/vay-da-hoi-duoi-ca" title="Váy dạ hội đuôi cá">Váy dạ hội đuôi cá</a>
            </h2> <a href="/danh-muc/vay-da-hoi-duoi-ca" class="xem_them"
                title="Váy dạ hội đuôi cá">Xem tất cả</a>
            <div class="box_san_pham">
                <div class="row product_list">
                    @foreach($productsVD as $key => $row)
                    @include('shop.product.block')
                    @endforeach
                </div>
            </div>
        </div>
        <div class="home_box">
            <h2 class="home_title">
                <a href="/danh-muc/vay-da-hoi-ngan" title="Váy dạ hội ngắn">Váy dạ hội ngắn</a>
            </h2> <a href="/danh-muc/vay-da-hoi-ngan" class="xem_them"
                title="Váy dạ hội ngắn">Xem tất cả</a>
            <div class="box_san_pham">
                <div class="row product_list">
                    @foreach($productsVN as $key => $row)
                    @include('shop.product.block')
                    @endforeach
                </div>
            </div>
        </div>
        <div class="home_box">
            <h2 class="home_title">
                <a href="/danh-muc/vay-da-hoi-mullet/" title="Váy dạ hội mullet">Váy dạ hội mullet</a>
            </h2> <a href="/danh-muc/vay-da-hoi-mullet" class="xem_them"
                title="Váy dạ hội mullet">Xem tất cả</a>
            <div class="box_san_pham">
                <div class="row product_list">
                    @foreach($productsML as $key => $row)
                    @include('shop.product.block')
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</main>

@endsection