@extends('layouts.admin')

@section('js')
<script src="/admin_assets/js/role/update.js"></script>
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
                                <a href="/admin/role/create" class="btn btn-success btn-sm disabled">
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
                                                    <label>Name</label>
                                                    <input type="text" class="form-control is-warning"
                                                        id="name" name="name" placeholder="Display name..." value="{{$role->name}}">
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                            </form>
                            <div class="text-center">
                                <button id="login" onclick="update({{$role->id}});" class="sa-lib-dk btn btn-success"><i
                                        class="fa fa-plane"></i>
                                    Update</button>
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