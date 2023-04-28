@extends('layouts.admin')

@section('js')
<script src="/admin_assets/js/uploadFormAdminLTE.js"></script>
{{-- <script src="/admin_assets/js/product/image.js"></script> --}}
<script src="/admin_assets/js/product/thumb.js"></script>
<script src="/admin_assets/js/product/avatar.js"></script>
<script src="/admin_assets/js/product/storeProductItem.js"></script>
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
                                <a href="/admin/product/create" class="btn btn-success btn-sm">
                                    <i class="fas fa-plus-circle"></i> Add New
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9">
                    <!-- general form elements disabled -->
                    <div class="card card-default" id="block-info">
                        <div class="card-header">
                            <h3 class="card-title">Thông tin cơ bản</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form id="form-product">
                                <input type="hidden" name="product_id" id="product_id" value="{{$product_id}}">
                                <input type="hidden" name="thumb_id" id="thumb_id" value="">
                                <input type="hidden" id="avatar_id" name="avatar_id" value="">

                                <div class="row">
                                    <div class="col-md-12">
                                        {{-- line 3 right --}}
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Tên Sản Phẩm</label>
                                                    <input type="text" class="form-control"
                                                        id="name" name="name" placeholder="name">
                                                </div>
                                            </div>
                                           
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Color</label>
                                                    <input type="text" class="form-control"
                                                        id="color_value" name="color_value" placeholder="color value">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Size</label>
                                                    <input type="text" class="form-control"
                                                        id="size_value" name="size_value" placeholder="S, M, L">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Số lượng</label>
                                                    <input type="text" class="form-control"
                                                        id="quantity" name="quantity" placeholder="quantity">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Giá gốc</label>
                                                    <input type="text" class="form-control"
                                                        id="cost" name="cost" placeholder="cost">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Giá sale</label>
                                                    <input type="text" class="form-control"
                                                        id="price" name="price" placeholder="price">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Mầu</label>
                                                    <select class="form-control" name="color_id">
                                                        <option value="0">Chưa Phân Loại</option>
                                                        <option value="1">Màu Trắng</option>
                                                        <option value="2">Màu Đen</option>
                                                        <option value="3">Màu Nude</option>
                                                        <option value="4">Màu Đỏ</option>
                                                        <option value="5">Màu Xanh Lục</option>
                                                        <option value="6">Màu Xanh Dương</option>
                                                        <option value="7">Màu Xanh Than</option>
                                                        <option value="7">Màu Hồng</option>
                                                        <option value="7">Màu Tím</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center" id="addnew">
                                            <button id="login" onclick="storeProductItem();" class="sa-lib-dk btn btn-success"><i
                                                    class="fa fa-plane"></i>
                                                Đăng</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>

                </div>
                <div class="col-md-3">
                    <!-- general form elements disabled -->
                    <div class="card card-default" id="block-info">
                        <div class="card-header">
                            <h3 class="card-title">Image</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="position-relative">
                                                <img src="/admin_assets/images/default-thumb2.jpg" name="avatar-path"
                                                    id="avatar-path" alt="Photo 1" class="img-fluid">
                                                <div class="ribbon-wrapper ribbon-lg">
                                                    <div class="ribbon bg-success">
                                                        Ribbon
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form id="form-avatar">
                                <div class="form-group">
                                    
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="avatar" name="avatar"
                                            accept="image/*">
                                        <label class="custom-file-label" for="customFile">Chọn ảnh</label>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary col start"
                                    onclick="uploadAvatar();">
                                    <i class="fas fa-upload"></i>
                                    <span>Tải lên</span>
                                </button>
                            </form>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="position-relative">
                                                <img src="/admin_assets/images/default-thumb.jpg" name="thumb-path"
                                                    id="thumb-path" alt="Photo 1" class="img-fluid">
                                                <div class="ribbon-wrapper ribbon-lg">
                                                    <div class="ribbon bg-success">
                                                        Ribbon
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form id="form-thumbnail">
                                <div class="form-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="thumb" name="thumb"
                                            accept="image/*">
                                        <label class="custom-file-label" for="customFile">Chọn ảnh</label>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary col start"
                                    onclick="uploadThumb();">
                                    <i class="fas fa-upload"></i>
                                    <span>Tải lên</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection