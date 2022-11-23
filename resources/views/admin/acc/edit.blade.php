@extends('layouts.admin2')

@section('js')

<script type="text/javascript">
$(function () {
  bsCustomFileInput.init();
});

$(document).ready(function() {

  getElementLoaiNick();
  $('#selectLoaiNick').change(function(){
    getElementLoaiNick();
  });
  $("form").on("change", "#selectLogin", function() {
    getElementLogin();
  });
});
function getElementLoaiNick() {
    

    var loainick = $("#selectLoaiNick").val();
    var data_post = {loainick : loainick};

    $.post("/admin/acc/edit/getContent/{{$acc->id}}", data_post, function(data) {
        $("#content-acc").html(data);

        getElementLogin();
    });
}
function getElementLogin() {
    var login = $("#selectLogin").val();
    var data_post = {login : login};
    

    $.post("/admin/acc/edit/getElementLoaiNick/{{$acc->id}}", data_post, function(data) {
        $("#content-loainick").html(data);
    });
}


function uploadThumb() {
  var data = new FormData(document.getElementById('formUploadThumb'));
  $.ajax({
      method: 'POST',
      url: '/admin/images/uploadThumb',
      type: 'post',
      data: data,
      contentType: false,
      processData: false,
      success: function(res) {
          if (res.err === true) {
              Swal.fire({
                  title: '<strong>Thông Báo!</strong>',
                  type: 'success',
                  html: res.msg,
                  showCloseButton: true,
                  showCancelButton: true,
                  focusConfirm: false,
                  confirmButtonText: 'Ok, Good.!',
                  confirmButtonAriaLabel: 'Thumbs up, great!',
                  cancelButtonText: '<i class="fa fa-thumbs-down"> Cancel</i>',
                  cancelButtonAriaLabel: 'Thumbs down'
              })
    
          }else{
              $('#exampleModal').modal('hide');

              $("#thumb").val( res.img);
              $("#imgThumb").attr("src",'/storage/' + res.img);


          }
          
      },
      error: function(res) {
          Swal('Có lỗi xảy ra!', res.responseJSON.error, 'error')
      }
  })
}

function deleteAllImages(id) {
  $.ajax({
      method: 'POST',
      url: '/admin/acc/deleteAllImages',
      type: 'post',
      data: {
        id : id,
      },
      // contentType: false,
      // processData: false,
      success: function(res) {
          if (res.err === true) {
            toastr.error(res.msg);
          }else{
            toastr.success(res.msg);
            location.reload();
          }
      },
      error: function(res) {
          Swal('Có lỗi xảy ra!', res.responseJSON.error, 'error')
      }
  })
}

function updateAcc(id){
    var data = $('#form').serialize();   
    $.ajax({
        method: 'patch',
        url: '/admin/acc/'+ id ,
        type: 'post',
        data: data,
        success: function(res) {
            if (res.err === true) {
              toastr.error(res.msg);
            }else{
              toastr.success(res.msg);
            }
        },
        error: function(res) {
            Swal('Có lỗi xảy ra!', res.responseJSON.error, 'error')
        }
    })
}
</script>
@endsection

@section('content')

<div class="content">

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <!-- general form elements disabled -->
          <div class="card card-primary" id="addInfo">
            <div class="card-header">
              <h3 class="card-title">Thông tin cơ bản</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <form id="form">
                <div class="row">
                  <div class="col-md-4" >
                    <div class="row" id="uploadThumb" data-toggle="modal" data-target="#exampleModal">
                      <input type="hidden" name="thumb" id="thumb" value="{{$acc->thumb}}">
                      <img name="imgThumb" id="imgThumb" src="@if($acc->thumb_error){{$acc->thumb_default}} @else/storage/{{$acc->thumb}}@endif" style="max-width:100%;" />
                    </div>
           
                    
                    {{-- Line 2 --}}
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="kichhoat" id="kichhoat" @if($acc->kichhoat == 1) checked @endif>
                          <label class="form-check-label">Kích Hoạt</label>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          @if($acc->trangthai == 0)
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="trangthai" id="trangthai" checked="" disabled="" value="0">
                            <label class="form-check-label">Đã bán</label>
                          </div>
                          @else
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="trangthai" id="trangthai" @if($acc->trangthai == 2) checked @endif value="2">
                            <label class="form-check-label">Pending</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="trangthai" id="trangthai" @if($acc->trangthai == 1) checked @endif value="1">
                            <label class="form-check-label">Public</label>
                          </div>
                          @endif
                          
                          
                         
                        </div>
                      </div>  
                      <div class="col-md-4">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="thongtin" id="thongtin" @if($acc->thongtin == 1) checked @endif>
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
                          <input type="text" class="form-control" id="taikhoan" name="taikhoan" placeholder="Tài khoản" value="{{$acc->taikhoan}}">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label>Mật khẩu</label>
                          <input type="text" class="form-control" id="matkhau" name="matkhau" placeholder="Mật khẩu" value="{{$acc->matkhau}}">
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="form-group">
                          <label>Giá</label>
                          <input type="number" class="form-control" id="gia" name="gia" placeholder="Giá" value="{{$acc->gia}}">
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="form-group">
                          <label>Giảm Giá</label>
                          <input type="number" class="form-control" id="giamgia" name="giamgia" placeholder="Giảm giá" value="{{$acc->giamgia}}">
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="form-group">
                          <label>Ưu Tiên</label>
                          <input type="number" class="form-control" id="uutien" name="uutien" placeholder="Ưu tiên" value="{{$acc->uutien}}">
                        </div>
                      </div>
                    </div>
                    {{-- line 2 right --}}
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Game</label>
                          <select class="form-control" name="loainick" id="selectLoaiNick">
                            <option value="lqm" @if($acc->loainick == 'lqm') selected @else disabled @endif>Liên Quân</option>
                            <option value="frf" @if($acc->loainick == 'frf') selected @else disabled @endif>Free Fire</option>
                            <option value="pgm" @if($acc->loainick == 'pgm') selected @else disabled @endif>Pubg Mobile</option>
                            <option value="lol" @if($acc->loainick == 'lol') selected @else disabled @endif>Liên Minh</option>
                            <option value="zingspeed" @if($acc->loainick == 'zingspeed') selected @else disabled @endif>Zing Speed</option>
                          </select>
                        </div>
                      </div>
                      
                    </div>
         
                    <div id="content-loainick">
                    {{--  --}}
                    </div>
                    {{-- line 3 right --}}
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Title</label>
                          <input type="text" class="form-control is-warning" id="inputWarning title" name="title" placeholder="Title" value="{{$acc->title}}">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Description</label>
                          <input type="text" class="form-control is-warning" id="inputWarning description" name="description" placeholder="Description" value="{{$acc->description}}">
                        </div>
                      </div>
                    </div>
                   
                  </div>
                </div>
 
                {{-- Content for acc --}}
                <div id="content-acc">
                  {{-- Content --}}
                </div>
                

              </form>
              <div class="text-center">
                <button id="login" onclick="updateAcc({{$acc->id}});" class="sa-lib-dk btn btn-success" ><i class="fa fa-plane"></i> Update New</button>
              </div>

            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          <div class="card card-primary" id="addImages" style="display: block;" class="box-upload">
            <div class="card-header">
              <h3 class="card-title">Upload Hình Ảnh</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <form action="/admin/acc/{{$acc->id}}/images/upload" method="POST" enctype="multipart/form-data" id="formUpload" onsubmit="return false;">
                <div class="progress">
                    <div class="progress-bar">0%</div>
                </div>
                <button type="reset" class="btn-reset">Làm mới</button>
                <button type="submit" class="btn-submit">Upload</button>
                <input type="file" name="img_file[]" multiple="true" onchange="previewImg(event);" id="img_file" accept="image/*">
                <div class="output"></div>
                <div class="box-preview-img"></div>
              
            </form>

            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>

<div class="text-center">
  <button id="login" onclick="deleteAllImages({{$acc->id}});" class="sa-lib-dk btn btn-danger" ><i class="fa fa-plane"></i> Delete All Images</button>
</div>
<div class="row">

@foreach($images as $key => $row)
<div class="col-md-3" style="padding: 10px">
    <img width="100%" height= "150px" src="/storage/{{$row->image}}">
</div>
@endforeach

</div>



<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Upload Thumbnail</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formUploadThumb">

          <div class="form-group">
            {{-- <label for="customFile">Custom File</label> --}}
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="thumb" name="thumb" accept="image/*">
              <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
          </div>
         
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="uploadThumb();">Update</button>
      </div>
    </div>
  </div>
</div>
@endsection