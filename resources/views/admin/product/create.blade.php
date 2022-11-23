@extends('layouts.admin')

@section('js')
<script src="/admin_assets/js/uploadFormAdminLTE.js"></script>
<script src="/admin_assets/js/product/image.js"></script>
<script src="/admin_assets/js/product/thumb.js"></script>
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
                <div class="col-md-9">
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
                                            <div class="col-md-6">
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
                                            </div>
                                        </div>
                                        <div class="row">
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
                                        </div>
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

                    <div class="row" id="block-image" style="display:none;" data-acc_id="">
                        <div class="col-md-12">
                            <div class="card card-default">
                                <div class="card-header">
                                    <h3 class="card-title"><em>Upload <small>more images for product</small></em>
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <div id="actions" class="row">
                                        <div class="col-lg-6">
                                            <div class="btn-group w-100">
                                                <span class="btn btn-success col fileinput-button">
                                                    <i class="fas fa-plus"></i>
                                                    <span>Add files</span>
                                                </span>
                                                <button type="submit" class="btn btn-primary col start"
                                                    data-img-account="">
                                                    <i class="fas fa-upload"></i>
                                                    <span>Start upload</span>
                                                </button>
                                                <button type="reset" class="btn btn-danger col cancel">
                                                    <i class="fas fa-times-circle"></i>
                                                    <span>Delete upload</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 d-flex align-items-center">
                                            <div class="fileupload-process w-100">
                                                <div id="total-progress" class="progress progress-striped active"
                                                    role="progressbar" aria-valuemin="0" aria-valuemax="100"
                                                    aria-valuenow="0">
                                                    <div class="progress-bar progress-bar-success" style="width:0%;"
                                                        data-dz-uploadprogress></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table table-striped files" id="previews">
                                        <div id="template" class="row mt-2">
                                            <div class="col-auto">
                                                <span class="preview"><img src="data:," alt=""
                                                        data-dz-thumbnail /></span>
                                            </div>
                                            <div class="col d-flex align-items-center">
                                                <p class="mb-0">
                                                    <span class="lead" data-dz-name></span>
                                                    (<span data-dz-size></span>)
                                                </p>
                                                <strong class="error text-danger" data-dz-errormessage></strong>
                                            </div>
                                            <div class="col-4 d-flex align-items-center">
                                                <div class="progress progress-striped active w-100" role="progressbar"
                                                    aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                                                    <div class="progress-bar progress-bar-success" style="width:0%;"
                                                        data-dz-uploadprogress></div>
                                                </div>
                                            </div>
                                            <div class="col-auto d-flex align-items-center">
                                                <div class="btn-group">
                                                    <button class="btn btn-primary start">
                                                        <i class="fas fa-upload"></i>
                                                        <span>Start</span>
                                                    </button>
                                                    <button data-dz-remove class="btn btn-danger delete">
                                                        <i class="fas fa-trash"></i>
                                                        <span>Delete</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    Upload limit <b style="color: red">2 MB</b> for each file.
                                </div>
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <!-- general form elements disabled -->
                    <div class="card card-default" id="block-info">
                        <div class="card-header">
                            <h3 class="card-title">Thumbnail</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="position-relative">
                                                <img src="/admin_assets/images/default-thumb.jpg" name="image-path"
                                                    id="image-path" alt="Photo 1" class="img-fluid">
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
                                    <input type="hidden" id="thumb_id" name="thumb_id" value="1">
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
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection