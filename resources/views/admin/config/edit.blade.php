@extends('layouts.admin')

@section('js')
<script src="/admin_assets/js/setting/edit.js"></script>
@endsection

@section('content')

<!-- Main content -->
<section class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <!-- general form elements disabled -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Thông số</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form id="form">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-form-label" for="inputWarning"><i class="far fa-bell"></i>
                                            Auth</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>APP NAME</label>
                                        <input type="text" class="form-control" id="app_name" name="app_name"
                                            value="{{config('global.app_name')}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>APP URL</label>
                                        <input type="text" class="form-control" id="app_url" name="app_url"
                                            value="{{config('global.app_url')}}">
                                    </div>
                                </div>

                            </div>


                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-form-label" for="inputWarning"><i class="far fa-bell"></i>
                                            Page </label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>MAIL</label>
                                                <input type="text" class="form-control" id="mail" name="mail"
                                                    value="{{config('global.mail')}}">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>PHONE</label>
                                                <input type="text" class="form-control" id="phone" name="phone"
                                                    value="{{config('global.phone')}}">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>FB PAGE</label>
                                                <input type="text" class="form-control" id="fb_page_id" name="fb_page_id"
                                                    value="{{config('global.fb_page_id')}}">
                                            </div>
                                        </div>


                                        <div class="col-md-12">
                                            <div class="row">
                                         
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>URL SSO</label>
                                                        <input type="text" class="form-control" id="boss_charge_card_url"
                                                            name="boss_charge_card_url" value="{{config('global.boss_charge_card_url')}}">
                                                    </div>
                                                </div>
                                               
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-form-label" for="inputWarning"><i class="far fa-bell"></i>
                                            Google</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>ANALYTICS</label>
                                        <input type="text" class="form-control" id="gg_analytic"
                                            name="gg_analytic" value="{{config('global.gg_analytic')}}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>ADS</label>
                                        <input type="text" class="form-control" id="gg_ads" name="gg_ads"
                                            value="{{config('global.gg_ads')}}">
                                    </div>
                                </div>
                              
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>ADS CONVERN NẠP THẺ</label>
                                        <input type="text" class="form-control" id="gg_ads_card"
                                            name="gg_ads_card" value="{{config('global.gg_ads_card')}}">
                                    </div>
                                </div>
                            </div>

                    
                        </form>
                        <div class="text-center">
                            <button id="login" onclick="updateConfig();" class="sa-lib-dk btn btn-success"><i
                                    class="fa fa-plane"></i>
                                Update Config</button>
                        </div>

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->



@endsection