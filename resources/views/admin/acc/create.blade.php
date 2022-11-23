@extends('layouts.admin2')

@section('js')
<script>
  $(function () {
    bsCustomFileInput.init();
  });
</script>

<script type="text/javascript">

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

    $.post("/admin/acc/create/getContent", data_post, function(data) {
        $("#content-acc").html(data);

        getElementLogin();
    });
}
function getElementLogin() {
    var login = $("#selectLogin").val();
    var data_post = {login : login};
    

    $.post("/admin/acc/create/getElementLoaiNick", data_post, function(data) {
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

              $("#thumb").val(res.img);
              $("#imgThumb").attr("src",'/storage/' + res.img);


          }
          
      },
      error: function(res) {
          Swal('Có lỗi xảy ra!', res.responseJSON.error, 'error')
      }
  })
}
function storeAcc(){
    $('#addnew').text('Process ...');

    var data = new FormData(document.getElementById('form'));
    $.ajax({
        method: 'POST',
        url: '/admin/acc',
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
                $('#addnew').text('Return Add');
            }else{
                $('#addInfo').hide();
                $('#addImages').show();
                $('#formUpload').attr('action', '/admin/acc/'+ res.id +'/images/upload');
                
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
                      <input type="hidden" name="thumb" id="thumb" value="">
                      <img name="imgThumb" id="imgThumb" src="/admin_assets2/images/default-thumb.jpg" style="max-width:100%;" />
                    </div>
                    
                    {{-- Line 2 --}}
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="kichhoat" id="kichhoat" checked="">
                          <label class="form-check-label">Kích Hoạt</label>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="trangthai" id="trangthai" value="2">
                            <label class="form-check-label">Pending</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="trangthai" id="trangthai" value="1" checked="">
                            <label class="form-check-label">Public</label>
                          </div>
                         
                        </div>
                      </div>  
                      <div class="col-md-4">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="thongtin" id="thongtin">
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
                          <input type="text" class="form-control" id="taikhoan" name="taikhoan" placeholder="Tài khoản" >
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label>Mật khẩu</label>
                          <input type="text" class="form-control" id="matkhau" name="matkhau" placeholder="Mật khẩu">
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="form-group">
                          <label>Giá</label>
                          <input type="number" class="form-control" id="gia" name="gia" placeholder="Giá">
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="form-group">
                          <label>Giảm Giá</label>
                          <input type="number" class="form-control" id="giamgia" name="giamgia" placeholder="Giảm giá" value="0">
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="form-group">
                          <label>Ưu Tiên</label>
                          <input type="number" class="form-control" id="uutien" name="uutien" placeholder="Ưu tiên" value="0">
                        </div>
                      </div>
                    </div>
                    {{-- line 2 right --}}
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Game</label>
                          <select class="form-control" name="loainick" id="selectLoaiNick">
                            <option value="lqm" @if($loainick == 'lqm') selected @endif>Liên Quân</option>
                            <option value="frf" @if($loainick == 'frf') selected @endif>Free Fire</option>
                            <option value="pgm" @if($loainick == 'pgm') selected @endif>Pubg Mobile</option>
                            <option value="lol" @if($loainick == 'lol') selected @endif>Liên Minh</option>
                            <option value="zingspeed" @if($loainick == 'zingspeed') selected @endif>Zing Speed</option>
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
                          <input type="text" class="form-control is-warning" id="inputWarning title" name="title" placeholder="Title">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Description</label>
                          <input type="text" class="form-control is-warning" id="inputWarning description" name="description" placeholder="Description">
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
                <button id="login" onclick="storeAcc();" class="sa-lib-dk btn btn-success" ><i class="fa fa-plane"></i> Add New</button>
              </div>

            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          <div class="card card-primary" id="addImages" style="display: none;" class="box-upload">
            <div class="card-header">
              <h3 class="card-title">Upload Hình Ảnh</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <a href="/admin/acc/create" id="addInfoSuccess"style="display: none;" >
              <button class="btn-success"><i class="fa fa-thumbs-up"></i> Đăng Acc Khác</span> </button>
            </a>

            <form action="#" method="POST" enctype="multipart/form-data" id="formUpload" onsubmit="return false;">
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