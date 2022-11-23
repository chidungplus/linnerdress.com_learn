@extends('layouts.shop')

@section('seo')
<title>Lịch sử rút kim cương - {{config('global.app_name')}}</title>
<meta name="description" content="Mua acc free fire giá rẻ chất lượng uy tín." />
@endsection

<script src="/shop_assets/js/withdraw/index.js"></script>
@section('js')

@endsection

@section('content')
<div class="c-layout-page">
    <!-- BEGIN: PAGE CONTENT -->
    <div class="c-layout-page">
        <!-- BEGIN: PAGE CONTENT -->
        <div class="m-t-20 visible-sm visible-xs"></div>
        <!-- <center style="max-width:1140px; margin: 0 auto;" class="hidden-xs"><div class="c-layout-breadcrumbs-1 c-bgimage c-subtitle c-fonts-uppercase c-fonts-bold c-bg-img-center" style="background-image: url('/assets/frontend/images/unknown-cover.jpg');background-position: center;width:100%;height: 350px;background-repeat: no-repeat;background-position: center;background-size: cover;"><div class="container"><div class="c-page-title c-pull-left"><h3 class="c-font-uppercase c-font-bold c-font-white c-font-20 c-font-slim">&nbsp;</h3></div></div></div></center> -->

        <div class="c-layout-page" style="margin-top: 20px;">
            <div class="container">
                @include('shop.user.menu')
                <div class="c-layout-sidebar-content ">
                    <!-- BEGIN: PAGE CONTENT -->
                    <!-- BEGIN: CONTENT/SHOPS/SHOP-CUSTOMER-DASHBOARD-1 -->
                    <div class="sa-lprod" id="table-history">
                        <div class="sa-lpmain">
                            <div class="sa-lsnmain clearfix">
                                <div class="c-content-title-1">
                                    <h3 class="c-font-uppercase c-font-bold">Lịch Sử Rút Kim Cương</h3>
                                    <div class="c-line-left"></div>
                                </div>
                                <div class="text-center">
                                    <h2 class="c-font-22 c-font-red">Số kim cương hiện có:
                                        <b>{{number_format(Auth::user()->diamond) }}</b></h2>
                                </div>
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <input name="type" value="1" type="hidden">
                                        <label class="col-md-3 control-label">Gói muốn rút:</label>
                                        <div class="col-md-6">
                                            <div class="input-group c-square" style="width: 100%">
                                                <select style="width: 100%" class="form-control  c-square c-theme"
                                                    name="amount" id="amount">
                                                    <option value="">Bảng Quy Đổi Kim Cương</option>
                                                    {{-- <option value="45">Rút 45 Kim cương</option> --}}
                                                    {{-- <option value="90">Rút 90 Kim cương</option> --}}
                                                    <option value="230">Rút 230 Kim cương</option>
                                                    <option value="465">Rút 465 Kim cương</option>
                                                    <option value="950">Rút 950 Kim cương</option>
                                                    <option value="2375">Rút 2375 Kim cương</option>
                                                </select>
                                                <span class="input-group-btn">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">ID ingame:</label>
                                        <div class="col-md-6">
                                            <div class="input-group c-square" style="width: 100%">
                                                <input type="text" id="username" name="username" style="width: 100%"
                                                    class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block-load-info">
                                    </div>
                                </form>
                                <div class="alert alert-success" role="alert">
                                    <button id="btn-confirm"
                                        class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold btn-block"
                                        style="background: green;color: #fff" onclick="widthdraw();">Thực hiện
                                        rút</button>

                                    <div class="row text-center">
                                        <div class="col-xs-12 col-md-12">
                                            Phải có ít nhất 90 kim cương mới có thể rút về tài khoản.
                                        </div>
                                    </div>
                                </div>
                                <div class="sa-ls-table table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <td>ID</td>
                                                <td>Id game</td>
                                                <td>Số kim cương</td>
                                                <td>Trạng thái</td>
                                                <td>Ghi chú</td>
                                                <td>Ngày rút</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($withdraws as $key => $row)
                                            <tr>
                                                <td class="text-primary">{{$row->id}}</td>

                                                <td class="text-primary" style="color:#0ce2ab;">{{$row->username}}</td>
                                                <td class="text-primary">{{$row->amount}}</td>
                                                <td class="text-primary">{{$row->getStatus}}</td>
                                                <td>{{$row->note}}</td>
                                                <td class="text-primary">{{date('H:i d-m-Y',
                                                    strtotime($row->created_at))}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-footer text-center clearfix">
                                    {{$withdraws->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: PAGE CONTENT -->
                </div>
            </div>
        </div>
        <!-- END: PAGE CONTENT -->
    </div>
    <!-- END: PAGE CONTENT -->
</div>
@endsection