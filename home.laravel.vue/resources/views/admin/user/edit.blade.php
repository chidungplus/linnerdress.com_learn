@extends('layouts.admin')

@section('js')
<script src="/admin_assets/js/user/update.js"></script>
@endsection

@section('content')
<div class="content">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-inline">
                            <h3 class="card-title">
                                <a href="/admin/user/create" class="btn btn-success btn-sm">
                                    <i class="fas fa-plus-circle"></i> Add New
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <!-- general form elements disabled -->
                    <div class="card card-default" id="block-info">
                        <div class="card-header">
                            <h3 class="card-title">Thông tin cơ bản</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form id="form-info">
                                <div class="row">
                                    <input type="hidden" name="user_id" id="user_id" value="{{$user->id}}">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control is-warning"
                                                id="name" name="name" placeholder="Name..." value="{{$user->name}}">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" class="form-control"
                                                id="email" name="email" placeholder="Email..." value="{{$user->email}}" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Facebook Email</label>
                                            <input type="text" class="form-control"
                                                id="facebook_email" name="facebook_email" placeholder="Facebook Email..." value="{{$user->facebook_email}}" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Cash</label>
                                            <input type="text" class="form-control"
                                                id="cash" name="cash" placeholder="Cash..." value="{{number_format($user->cash)}} VNĐ" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Diamond</label>
                                            <input type="text" class="form-control"
                                                id="diamond" name="diamond" placeholder="Diamond..." value="{{number_format($user->diamond)}} Diamond" disabled>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>

                <div class="col-md-4">
                    <!-- general form elements disabled -->
                    <div class="card card-default" id="block-info">
                        <div class="card-header">
                            <h3 class="card-title">Action Update</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form id="form-cash">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Cash</label>
                                            <input type="text" class="form-control"
                                                id="cash_amount" name="cash_amount" placeholder="Cash..." required>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="text-center">
                                <button id="login" onclick="updateCash({{$user->id}},1);" class="sa-lib-dk btn btn-success"><i
                                        class="fa fa-plane"></i>
                                        Plus</button>
                                <button id="login" onclick="updateCash({{$user->id}},2);" class="sa-lib-dk btn btn-danger"><i
                                    class="fa fa-plane"></i>
                                    Minus</button>
                            </div>
                            <form id="form-diamond">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Diamond</label>
                                            <input type="text" class="form-control"
                                                id="diamond_amount" name="diamond_amount" placeholder="Diamond..." required>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="text-center">
                                <button id="login" onclick="updateDiamond({{$user->id}},1);" class="sa-lib-dk btn btn-success"><i
                                    class="fa fa-plane"></i>
                                    Plus</button>
                                <button id="login" onclick="updateDiamond({{$user->id}},2);" class="sa-lib-dk btn btn-danger"><i
                                    class="fa fa-plane"></i>
                                    Minus</button>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>

            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection