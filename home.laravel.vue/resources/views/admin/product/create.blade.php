@extends('layouts.admin')

@section('js')
<script src="/admin_assets/js/uploadFormAdminLTE.js"></script>
<script src="/admin_assets/js/product/image.js"></script>
{{-- <script src="/admin_assets/js/product/thumb.js"></script> --}}
<script src="/admin_assets/js/product/store.js"></script>
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
                <div class="col-md-12">
                    <!-- general form elements disabled -->
                    <div class="card card-default" id="block-info">
                        <div class="card-header">
                            <h3 class="card-title">Thông tin cơ bản</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form id="form-product">
                                <input type="hidden" name="admin_id" id="admin_id" value="{{Auth::user()->id}}">
                                <input type="hidden" name="thumb" id="thumb" value="">
                                <div class="row">
                                    <div class="col-md-12">
                                        {{-- line 3 right --}}
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Tên Sản Phẩm</label>
                                                    <input type="text" class="form-control"
                                                        id="name" name="name" placeholder="name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Danh mục</label>
                                                    <select class="form-control" name="category_id">
                                                        <option value="0">Chưa Phân Loại</option>
                                                        <option value="1">Váy Dạ Hội Dài</option>
                                                        <option value="2">Váy Dạ Hội Đuôi Cá</option>
                                                        <option value="3">Váy Dạ Hội Ngắn</option>
                                                        <option value="4">Váy Dạ Hội Mullet</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Mã Sản Phẩm</label>
                                                    <input type="text" class="form-control"
                                                        id="product_code" name="product_code" placeholder="ví dụ: VD102">
                                                </div>
                                            </div>
                                            {{-- <div class="col-md-6">
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
                                                    </select>
                                                </div>
                                            </div> --}}
                                        </div>
                                        {{-- <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Giá gốc</label>
                                                    <input type="text" class="form-control"
                                                        id="cost" name="cost" placeholder="cost">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Giá sale</label>
                                                    <input type="text" class="form-control"
                                                        id="price" name="price" placeholder="price">
                                                </div>
                                            </div>
                                        </div> --}}
                                        <div class="text-center" id="addnew">
                                            <button id="login" onclick="store();" class="sa-lib-dk btn btn-success"><i
                                                    class="fa fa-plane"></i>
                                                Đăng</button>
                                        </div>
                                        {{-- <div class="row">
                                            <div class="col-sm-12">
                                                <!-- textarea -->
                                                <div class="form-group">
                                                    <textarea class="form-control" rows="8"
                                                        name="content" id="content"
                                                        placeholder="Nhập nội dung ở đây ..."></textarea>
                                                </div>
                                            </div>
                                        </div> --}}
                                        {{-- <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Title</label>
                                                    <input type="text" class="form-control is-warning"
                                                        id="title" name="title" placeholder="Title">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- textarea -->
                                                <div class="form-group">
                                                    <label>Description</label>
                                                    <textarea class="form-control  is-warning" rows="2"
                                                        name="description" id="description"
                                                        placeholder="Description ..."></textarea>
                                                </div>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                            </form>
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