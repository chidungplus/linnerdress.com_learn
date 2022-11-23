@extends('layouts.shop')

@section('seo')
<title>Lịch sử vòng quay - {{config('global.app_name')}}</title>
<meta name="description" content="Mua acc free fire giá rẻ chất lượng uy tín." />
@endsection

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
                                    <h3 class="c-font-uppercase c-font-bold">Lịch Sử Vòng Quay</h3>
                                    <div class="c-line-left"></div>
                                </div>
                                <div class="sa-ls-table table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <td>STT</td>
                                                <td>VÒNG QUAY</td>
                                                <td>PHẦN THƯỞNG</td>
                                                <td>SỐ KC TRƯỚC</td>
                                                <td>SỐ KC SAU</td>
                                                <td>NGÀY MUA</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($wheels as $key => $row)
                                            <tr>
                                                <td class="text-primary">{{$key + 1}}</td>
                                                <td class="text-primary" style="color:#0ce2ab">{{$row->getType}}</td>
                                                <td class="text-primary">{{number_format($row->diamond)}} Kim Cương</td>
                                                <td class="text-primary">{{number_format($row->diamond_before)}}</td>
                                                <td class="text-primary">{{number_format($row->diamond_after)}}</td>
                                                <td class="text-primary">{{date('H:i d-m-Y', strtotime($row->created_at))}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-footer text-center clearfix">
                                    {{$wheels->links()}}
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