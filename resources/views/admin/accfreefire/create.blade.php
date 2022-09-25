@extends('layouts.admin')

@section('js')
<script src="/admin_assets/js/accimage/uploadFormAdminLTE.js"></script>
<script src="/admin_assets/js/accfreefire/thumb.js"></script>
<script src="/admin_assets/js/accfreefire/image.js"></script>
<script src="/admin_assets/js/accfreefire/store.js"></script>
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
                                <a href="/admin/acc-free-fire/create" class="btn btn-success btn-sm">
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
                                <input type="hidden" name="admin_id" id="admin_id" value="{{Auth::user()->id}}">
                                <div class="row">
                                    <div class="col-md-4">
                                        {{-- line 3 right --}}
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Title</label>
                                                    <input type="text" class="form-control is-warning"
                                                        id="inputWarning title" name="title" placeholder="Title">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- textarea -->
                                                <div class="form-group">
                                                    <label>Description</label>
                                                    <textarea class="form-control  is-warning" rows="3"
                                                        name="description" id="description"
                                                        placeholder="Description ..."></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- textarea -->
                                                <div class="form-group">
                                                    <label>Note</label>
                                                    <textarea class="form-control  is-warning" rows="3"
                                                        name="note" id="note"
                                                        placeholder="Description ..."></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="active"
                                                        id="active" checked="">
                                                    <label class="form-check-label">Kích Hoạt</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="status"
                                                            id="status" value="2">
                                                        <label class="form-check-label">Pending</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="status"
                                                            id="status" value="1" checked="">
                                                        <label class="form-check-label">Public</label>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="used"
                                                        id="used" >
                                                    <label class="form-check-label">Có Thông Tin</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        {{-- line 1 right --}}
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Tài khoản</label>
                                                    <input type="text" class="form-control" id="username"
                                                        name="username" placeholder="Tài khoản">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Mật khẩu</label>
                                                    <input type="text" class="form-control" id="password"
                                                        name="password" placeholder="Mật khẩu">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Giá</label>
                                                    <input type="number" class="form-control" id="cost" name="cost"
                                                        placeholder="Giá gốc">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Giá Sale</label>
                                                    <input type="number" class="form-control" id="price" name="price"
                                                        placeholder="Giá Sale">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Ưu Tiên</label>
                                                    <input type="number" class="form-control" id="sort" name="sort"
                                                        placeholder="Ưu tiên">
                                                </div>
                                            </div>
                                        </div>
                                        {{-- line 2 right --}}
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Game</label>
                                                    <select class="form-control" name="type" id="type">
                                                        <option value="ff" selected>Free Fire</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Rank </label>
                                                    <select class="form-control" name="rank">
                                                        @foreach($ranks as $key => $row)
                                                        <option value="{{$key}}">{{$row['name']}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Login</label>
                                                    <select class="form-control" name="login" id="login">
                                                        <option value="fb" selected>Facebook</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>2FA Code</label>
                                                    <input type="text" class="form-control" id="fb_2fa" name="fb_2fa"
                                                        placeholder="2FA Code">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="text-center">
                                <button id="login" onclick="storeAcc();" class="sa-lib-dk btn btn-success"><i
                                        class="fa fa-plane"></i>
                                    Add New</button>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    {{-- Block Thumb --}}
                    <div class="row" id="block-thumb" style="display:none;" data-acc_id="">
                        <div class="col-md-12">
                            <div class="card card-default" >
                                <div class="card-header">
                                    <h3 class="card-title"><em>Upload <small> thumbnail for </em><span style="color: red" class="username-acc"><b></b></span></small>
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <div class="row mt-4">
                                        <div class="col-sm-4">
                                            <div class="position-relative">
                                                <img src="/admin_assets/images/default-thumb.jpg" name="imgThumb"
                                                    id="imgThumb" alt="Photo 1" class="img-fluid">
                                                <div class="ribbon-wrapper ribbon-lg">
                                                    <div class="ribbon bg-success">
                                                        Ribbon
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form id="formUploadThumb" data-acc_id="">
                                        <div class="form-group">
                                            <input type="hidden" id="thumb_id" name="thumb_id" value="1">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="thumb" name="thumb"
                                                    accept="image/*">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-primary col start"
                                            onclick="uploadThumb();">
                                            <i class="fas fa-upload"></i>
                                            <span>Start upload</span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Block Images --}}
                    <div class="row" id="block-image" style="display:none;" data-acc_id="">
                        <div class="col-md-12">
                            <div class="card card-default">
                                <div class="card-header">
                                    <h3 class="card-title"><em>Upload <small>more images for </em><span style="color: red" class="username-acc"><b></b></span></small>
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
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection