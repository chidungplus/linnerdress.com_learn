@extends('layouts.shop')

@section('seo')
<title>Thông tin tài khoản - {{config('global.app_name')}}</title>
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
                    <div class="c-content-title-1">
                        <h3 class="c-font-uppercase c-font-bold">Thông tin tài khoản</h3>
                        <div class="c-line-left"></div>
                    </div>
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th scope="row">ID của bạn:</th>
                                <th>
                                    <span class="c-font-uppercase">{{ $user->id }}</span> 
                                    <a class="nav-link"  href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                      <i class="fas fa-sign-out-alt"></i> Đăng xuất
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      @csrf
                                    </form>

                                </th>
                            </tr>
                            <tr>
                                <th scope="row">Tên tài khoản:</th>
                                <th>{{ $user->name }}</th>
                            </tr>
                            <tr>
                                <th scope="row">Số dư tài khoản:</th>
                                <td>
                                    <b class="text-danger">{{ number_format($user->cash) }}đ</b>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Email:</th>
                                <td>{{ $user->email }}</td>
                            </tr>
                            
                            <tr>
                                <th scope="row">Nhóm tài khoản:</th>
                                <td>Thành viên</td>
                            </tr>
                            <tr>
                                <th scope="row">Ngày tham gia:</th>
                                <td>
                                    {{date('H:i d-m-Y', strtotime($user->created_at))}}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- END: PAGE CONTENT -->
                </div>
            </div>
        </div>
        <!-- END: PAGE CONTENT -->
    </div>
    <!-- END: PAGE CONTENT -->
</div>
@endsection