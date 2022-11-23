@extends('layouts.admin2')

@section('js')
<script>
function deleteAccSold(){
    var data        = $("#data"). val();
    $.ajax({
        method: 'POST',
        url: '/admin/delete-acc-sold',
        type: 'post',
        data: {
            data        : data  
        },
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
                }).then(function(result){
                    if (result.value){
                        document.location.reload();
                    }else{
                        document.location.reload();
                    }
                })
            }
        },
        error: function(res) {
            Swal('Có lỗi xảy ra!', res.responseJSON.error, 'error')
        }
    })
}
</script> 
@endsection
@section('css')
<style type="text/css">
textarea {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;

  width: 100%;
}
</style>
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

              <div class="row">
    
                  <div class="col-md-12">
                      
                      <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <button onclick='deleteAccSold();' class="sa-lib-dk btn btn-success" >Delete</button>
                            </div>
                        </div>
                      </div>
                      <textarea rows="10" cols="60"  name="data" id ='data'></textarea>
           

                  </div>
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
</div>
@endsection