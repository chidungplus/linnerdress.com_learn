<div class="col-xs-6 col-sm-3 item{{($key+1)%4}}">
    <div class="pro-item">
        <div class="pro-thum"> <a href="/san-pham/{{$row->permalink}}" title="{{$row->name}}"> <img width="270" height="325"
                    src="/storage/{{$row->thumbnail}}" data-lazy-src="/storage/{{$row->thumbnail}}"
                    class="attachment-product-thumb size-product-thumb wp-post-image lazyloaded" alt="" loading="lazy"
                    data-was-processed="true"><noscript><img width="270" height="325" src="/storage/{{$row->thumbnail}}"
                        class="attachment-product-thumb size-product-thumb wp-post-image" alt=""
                        loading="lazy" /></noscript> </a></div>
        {{-- <div class="product-color">
            <img class="bor_img lazyloading"
                src="https://thanhandress.com/wp-content/uploads/2022/08/86030f39ebf42eaa77e5-35x35.jpg"
                alt={{$row->name}}" data-was-processed="true">
            <img class="bor_img lazyloading"
                src="https://thanhandress.com/wp-content/uploads/2022/08/8c68815b5e969bc8c287-35x35.jpg"
                alt="{{$row->name}}" data-was-processed="true">
            <img class="bor_img lazyloading"
                src="https://thanhandress.com/wp-content/uploads/2022/08/d13cc997dd5b1805414a-35x35.jpg"
                alt="{{$row->name}}" data-was-processed="true">
        </div> --}}
        <div class="pro-name">
            <h2> <a href="/san-pham/{{$row->permalink}}" title="{{$row->name}}"> {{$row->name}} </a></h2>
        </div>
        <div class="gia_mua_ban">
            {{-- <div class="gia gia_ban"> <label>Thuê:</label> {{number_format($row->price_rent)}} </div> --}}
            <div class="gia gia_ban"> <label>Giá bán:</label> @if($row->cost > $row->price)<span
                    class="gach-ngang">{{number_format($row->cost)}}đ</span>@endif
                <span class="">{{number_format($row->price)}}đ</span>
            </div>
        </div>
        <div class="pro-label"></div>
    </div>
</div>