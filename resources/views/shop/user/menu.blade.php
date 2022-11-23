<div class="c-layout-sidebar-menu c-theme ">
    <div class="row">
        <div class="col-md-12 col-sm-6 col-xs-6 m-t-15 m-b-20">
            <!-- BEGIN: LAYOUT/SIDEBARS/SHOP-SIDEBAR-DASHBOARD -->
            <div class="c-content-title-3 c-title-md c-theme-border">
                <h3 class="c-left c-font-uppercase">Menu tài khoản</h3>
                <div class="c-line c-dot c-dot-left "></div>
            </div>
            <div class="c-content-ver-nav">
                <ul class="c-menu c-arrow-dot c-square c-theme">
                    <li>
                        <a href="{{ route('front.user')}}" class="active">Thông tin tài khoản</a>
                    </li>
                    <li>
                        <a href="#" class="active">Lịch sử giao dịch</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-12 col-sm-6 col-xs-6 m-t-15">
            <div class="c-content-title-3 c-title-md c-theme-border">
                <h3 class="c-left c-font-uppercase">Menu giao dịch</h3>
                <div class="c-line c-dot c-dot-left "></div>
            </div>
            <div class="c-content-ver-nav m-b-20">
                <ul class="c-menu c-arrow-dot c-square c-theme">

                    <li>
                        <a href="{{ route('front.history.card')}}" class="">Thẻ cào đã nạp</a>
                    </li>
                  
                    <li>
                        <a href="{{ route('front.history.acc')}}" class="">Tài khoản đã mua</a>
                    </li>

                    <li>
                        <a href="{{ route('front.history.random')}}" class="">Tài khoản random</a>
                    </li>

                    <li>
                        <a href="{{ route('front.history.wheel')}}" class="">Lịch sử vòng quay</a>
                    </li>

                    <li>
                        <a href="{{ route('front.history.withdraw')}}" class="">Lịch sử rút kim cương</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </div>
</div>