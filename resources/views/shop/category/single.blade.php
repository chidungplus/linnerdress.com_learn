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

<div class="container">
    <div class="home_box">
        <h2 class="home_title">
            <a href="/danh-muc/{{$category->permalink}}" title="{{$category->name}}">{{$category->name}}</a>
        </h2> <a href="/danh-muc/{{$category->permalink}}" class="xem_them"
            title="{{$category->name}}">Xem tất cả</a>
        <div class="box_san_pham">
            <div class="row product_list">
                @foreach($products as $key => $row)
                @include('shop.product.block')
                @endforeach
            </div>
        </div>
    </div>
    
</div>


@endsection