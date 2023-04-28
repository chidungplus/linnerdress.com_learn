<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="/shop_assets/images/32.png">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/admin_assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    {{-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> --}}
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="/admin_assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/admin_assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="/admin_assets/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/admin_assets/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="/admin_assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="/admin_assets/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="/admin_assets/plugins/summernote/summernote-bs4.min.css">
    <!-- sweet alert -->
    <link rel="stylesheet" href="/admin_assets/plugins/sweetalert2/sweetalert2.min.css">
    <!-- toas js -->
    <link rel="stylesheet" href="/admin_assets/plugins/toastr/toastr.min.css">
    <!-- dropzonejs -->
    <link rel="stylesheet" href="/admin_assets/plugins/dropzone/min/dropzone.min.css">
    <link href="/admin_assets/css/style.css" rel="stylesheet" />
    @yield('css')
</head>
<body class="hold-transition sidebar-mini layout-fixed text-sm">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
                <li class="nav-item ">
                    <a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i> Sign out
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="/admin_assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                            alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">{{ Auth::user()->name }} </a>
                    </div>
                </div>
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column nav-legacy nav-child-indent" data-widget="treeview"
                        role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="/admin" class="nav-link ">
                                <i class="nav-icon fab fa-laravel"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        @if( Auth::user()->hasPermission('user_view') )
                        <li class="nav-item">
                            <a href="/admin/user" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    User
                                </p>
                            </a>
                        </li>
                        @endif
                      
                        <li class="nav-item">
                            <a href="/admin/product" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    Product
                                </p>
                            </a>
                        </li>
                                        
                        <li class="nav-header">PERMISSION</li>

                        @if( Auth::user()->hasPermission('user_role_view') )
                        <li class="nav-item">
                            <a href="/admin/user-role" class="nav-link">
                                <i class="nav-icon fas fa-radiation"></i>
                                <p class="text">Admin</p>
                            </a>
                        </li>
                        @endif
                        @if( Auth::user()->hasPermission('role_view') )
                        <li class="nav-item">
                            <a href="/admin/role" class="nav-link">
                                <i class="nav-icon fas fa-radiation"></i>
                                <p class="text">Role</p>
                            </a>
                        </li>
                        @endif
                        @if( Auth::user()->hasPermission('permission_view') )
                        <li class="nav-item">
                            <a href="/admin/permission" class="nav-link">
                                <i class="nav-icon fas fa-cogs"></i>
                                <p class="text">Permission</p>
                            </a>
                        </li>
                        @endif
                        <li class="nav-header">SYSTEM</li>
                        @if( Auth::user()->hasPermission('system_log_view') )
                        <li class="nav-item">
                            <a href="/admin/logs" class="nav-link">
                                <i class="nav-icon fas fa-radiation"></i>
                                <p class="text">Logs</p>
                            </a>
                        </li>
                        @endif
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="content">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>Admin Title</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active"><a href="#">Item</a></li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>
                @yield('content')
            </div>
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>&copy; 2015-2022 <a href="https://chidungplus.com">ChidungPlus.Com</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.1.0
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->

        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <!-- jQuery -->
    <script src="/admin_assets/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="/admin_assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script src="/admin_assets/plugins/jquery/jquery.form.js"></script>
    <!-- Bootstrap 4 -->
    <script src="/admin_assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="/admin_assets/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="/admin_assets/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="/admin_assets/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="/admin_assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="/admin_assets/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="/admin_assets/plugins/moment/moment.min.js"></script>
    <script src="/admin_assets/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="/admin_assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- bs-custom-file-input -->
    <script src="/admin_assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <!-- Summernote -->
    <script src="/admin_assets/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="/admin_assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/admin_assets/dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="/admin_assets/dist/js/demo.js"></script>
    <!-- sweet alert -->
    <script src="/admin_assets/plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- toas js -->
    <script src="/admin_assets/plugins/toastr/toastr.min.js"></script>
    <!-- dropzonejs -->
    <script src="/admin_assets/plugins/dropzone/min/dropzone.min.js"></script>

    <script type='text/javascript' src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>
    
    @yield('js')
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            error: function (res, status, error) {
                if (res.status == 419) {
                    Swal.fire({
                        title: '<strong>Errors</strong>',
                        type: 'error',
                        html: "Có lỗi xảy ra, vui lòng thử lại sau 5s",
                        showCloseButton: true,
                        showCancelButton: true,
                        focusConfirm: false,
                        confirmButtonText: 'Thử lại',
                        confirmButtonAriaLabel: 'Thumbs up, great!',
                        cancelButtonText: '<i class="fa fa-thumbs-down"> Cancel</i>',
                        cancelButtonAriaLabel: 'Thumbs down'
                    }).then(function(result){
                        if (result.value){
                            location.reload();
                        }else{
                            location.reload();
                        }
                    })
                }
                else {
                    Swal('Có lỗi xảy ra!', res.responseJSON.error, 'error')
                }
            }
        });
    </script>
    <script>
        $(document).ready(function(){
            Inputmask.extendAliases({
                vnd: {
                    prefix: "VND ",
                    groupSeparator: ".",
                    alias: "numeric",
                    placeholder: "0",
                    autoGroup: true,
                    digits: 0,
                    digitsOptional: false,
                    clearMaskOnLostFocus: false
                }
            });
            $(":input.currency_vnd").inputmask({ alias : "vnd" });
        });
    </script>
</body>
</html>