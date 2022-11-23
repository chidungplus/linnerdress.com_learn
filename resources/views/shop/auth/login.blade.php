@extends('layouts.shop')

@section('seo')
<title>Đăng nhập - {{config('global.app_name')}}</title>
<meta name="description" content="Mua acc free fire giá rẻ chất lượng uy tín." />
@endsection

@section('css')
<style>
.login-box, .register-box {
    width: 400px;
    margin: 7% auto;

    padding: 20px;;
}
@media (max-width: 767px){
    .login-box, .register-box {
        width: 100%;
    }

}
.login-box-msg, .register-box-msg {
    margin: 0;
    text-align: center;
    padding: 0 20px 20px 20px;
    text-align: center;
    font-size: 20px;;
    font-weight: bold;
}

.box-custom{
    border: 1px solid #cccccc;
    padding: 20px;

    color: #666;
}
/*Plugin*/
.checkbox label, .radio label, .c-checkbox label, .c-radio label {
    color: #454e56;
    font-weight: 300;
}
.btn-primary {
    color: #ffffff;
    background: #5e9cd1;
    border-color: #5e9cd1;
}
.btn {
    outline: none !important;
    -webkit-transition: all 0.2s ease-out;
    -moz-transition: all 0.2s ease-out;
    -o-transition: all 0.2s ease-out;
    -ms-transition: all 0.2s ease-out;
    padding: 6px 20px 4px 20px;
    font-size: 16px;
}
.btn-google {
    color: #fff;
    background-color: #dd4b39;
    border-color: rgba(0,0,0,0.2);
}
.form-control {
    background-color: #ffffff;
}

</style>
@endsection
@section('content')
<div class="c-layout-page">
    <!-- BEGIN: PAGE CONTENT -->
        <div class="login-box">

        <!-- /.login-logo -->
        <div class="login-box-body box-custom">
            <p class="login-box-msg">{{ __('Đăng nhập') }}</p>
            <span class="help-block" style="text-align: center;color: #dd4b39">
                       <strong></strong>
                </span>
            
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="form-group has-feedback">
                    <input type="email" class="form-control" id ="email" name="email" @error('email') is-invalid @enderror value="" {{ old('email') }} required autocomplete="email" placeholder="Email" autofocus>
                    @error('email')
                        <span class="help-block" style="text-align: center;color: #dd4b39">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            

                </div>
                <div class="form-group has-feedback">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Mật khẩu">
                    
                    @error('password')
                        <span class="help-block" style="text-align: center;color: #dd4b39">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
               
                </div>
                <div class="row" style="display:none">
                    <div class="col-xs-6">
                        <div class="checkbox icheck">
                            <label style="color: #666">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" checked>
                                <label class="form-check-label" for="remember">
                                    {{ __('Ghi nhớ') }}
                                </label>
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <!-- <div class="col-xs-6" style="text-align: right">
                        <a href="/password/reset" style="color: #666;margin-top: 10px;margin-bottom: 10px;display: block;font-style: italic;">Quên mật khẩu?</a><br>
                    </div> -->
                    <!-- /.col -->
                </div>

                <div class="row">

                    <!-- /.col -->
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-success btn-block btn-flat" style="margin: 0 auto;     color: #fff;">Đăng nhập</button>
                        {{-- @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif --}}
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <div class="social-auth-links text-center">
                <p style="margin-top: 5px">- HOẶC -</p>
                
                <a href="/redirect/facebook" class="btn btn-primary"><i class="icon-key icons"></i> | Đăng nhập bằng Facebook</a>
                <p style="margin-top: 5px">- HOẶC -</p>
                <a href="/register" class="btn  btn-social btn-google btn-flat"><i class="icon-key icons"></i> | Tạo tài khoản</a>
            </div>
            <!-- /.social-auth-links -->
        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->
</div>
@endsection
