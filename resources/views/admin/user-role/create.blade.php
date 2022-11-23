@extends('layouts.admin')

@section('js')
<script src="/admin_assets/js/user-role/store.js"></script>
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
                                <a href="/admin/user-role/create" class="btn btn-success btn-sm">
                                    <i class="fas fa-plus-circle"></i> Add New
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- general form elements disabled -->
                    <div class="card card-default" id="block-info">
                        <div class="card-header">
                            <h3 class="card-title">Thông tin cơ bản</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form id="form">
                                <div class="row">
                                    <div class="col-md-12">
                                        {{-- line 3 right --}}
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>User Id</label>
                                                    <input type="text" class="form-control is-warning"
                                                        id="user_id" name="user_id" placeholder="User Id...">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Role Id</label>
                                                    <input type="text" class="form-control is-warning"
                                                        id="role_id" name="role_id" placeholder="Role Id...">
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                            </form>
                            <div class="text-center">
                                <button id="login" onclick="store();" class="sa-lib-dk btn btn-success"><i
                                        class="fa fa-plane"></i>
                                    Add New</button>
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