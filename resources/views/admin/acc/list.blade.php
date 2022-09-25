@extends('layouts.admin2')

@section('js')
<script type="text/javascript">

  $(document).ready(function() {
    $('#search_content').change(function(){
      var search_type = $('#search_type').val();
      var search_content = $('#search_content').val();

      $("#user_card_body").empty();
      $("#loading").show();

      $.ajax({
          method: 'post',
          url: '/admin/acc/search',
          type: 'post',
          data: {
              search_type : search_type,
              search_content : search_content
          },
          // contentType: false,
          // processData: false,
          success: function(res) {
              if (res.err === true) {
                  toastr.info(res.msg);
              }else{
                  $("#user_card_body").html(res);
                  $("#loading").hide();
                  // toastr.info(res.msg);
              } 
          },
          error: function(res) {
              Swal('Có lỗi xảy ra!', res.responseJSON.error, 'error')
          }
      })
    });

    $('#selectTypeSearch').click(function(){
        $.ajax({
            method: 'post',
            url: '/admin/acc/selectTypeSearch',
            type: 'post',
            data: '',
            // contentType: false,
            // processData: false,
            success: function(res) {
                if (res.err === true) {
                    toastr.info(res.msg);
                }else{
                    $("#formSelectTypeSearch").html(res);
                    $('#typeSearch').modal('show');
                } 
            },
            error: function(res) {
                Swal('Có lỗi xảy ra!', res.responseJSON.error, 'error')
            }
        })



    });
    $('#chooseTypeSearch').click(function(){
        $('#search_type').val($('#fieldSearch').val());
        
        $('#search_content').attr("placeholder", $('#fieldSearch option:selected' ).text() );

        $('#typeSearch').modal('hide');
    });


  });
</script>

<script type="text/javascript">
function destroy(id){
    Swal.fire({
        title: '<strong>Thông Báo!</strong>',
        type: 'warning',
        html: 'Bạn có chắc chắn muốn xóa?',
        showCloseButton: true,
        showCancelButton: true,
        focusConfirm: false,
        confirmButtonText: 'Ok, Good.!',
        confirmButtonAriaLabel: 'Thumbs up, great!',
        cancelButtonText: '<i class="fa fa-thumbs-down"> Cancel</i>',
        cancelButtonAriaLabel: 'Thumbs down'
    }).then(function(result){
        if (result.value){
            $.ajax({
                method: 'delete',
                url: '/admin/acc/'+ id,
                type: 'post',
                data: {
                    id : id
                },
                // contentType: false,
                // processData: false,
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
                        toastr.info(res.msg);
                        setTimeout(function(){ document.location.reload(); }, 1000);
                    } 
                },
                error: function(res) {
                    Swal('Có lỗi xảy ra!', res.responseJSON.error, 'error')
                }
            })
        }else{
            
        }
    })
}
</script>
@endsection

@section('content')

<section class="content">
  <div class="container-fluid">
    <div class="row">
        
      <div class="col-12">
        <div class="card">
          <div class="card-header d-inline">
            <h3 class="card-title"><a href="/admin/acc/create" class="btn btn-primary btn-sm"> <i class="fas fa-plus-circle"></i> Add New</a> </h3>

            <div class="card-tools">
              <div class="input-group input-group-sm" style="width: 150px;">
                <input type="hidden" name="search_type" id="search_type" value="{{$search->type}}">
                <input type="text" id="search_content" name="search_content" class="form-control float-right" placeholder="{{$search->placeholder}}">

               
                <div class="input-group-append">
                  <button type="submit" class="btn btn-default" id="button_search" name="button_search">
                    <span id="selectTypeSearch"><i class="fas fa-th-large"></i></span>
                  </button>
                </div>

              </div>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0" id="user_card_body">
            <table class="table table-hover text-nowrap">
              <thead>
                <tr>
                    <th>ID</th>
                    <th>Loại Nick</th>
                    <th>Login</th>
                    <th>Tài khoản</th>
                    <th>Rank</th>
                    <th>Giá</th>
                    <th>Trạng thái</th>
                    <th>User</th>
                    <th>Created at</th>
                    <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($accs as $row)
                    <tr>
                    <td>
                      <a href="/mua-acc-{{$row->id}}.html" target="_blank">{{$row->id}}</a>
                    </td>
                    <td>
                        {{$row->getLoaiNick}}
                    </td>
                    <td>
                        {{$row->getLogin}}
                    </td>
                    <td>
                        {{$row->taikhoan}}
                    </td>
                  
                    <td>
                        <a href="" class="badge bg-success">
                            {{$row->getRank}}
                        </a>
                    </td>
                    <td>
                        <a href="" class="badge bg-danger">
                            {{number_format($row->gia)}}<sup>vnđ</sup>
                        </a>
                    </td>
                    <td>
                        {{$row->getTrangThai}}
                    </td>
                    <td>
                        {{$row->getNameAdmin}}
                    </td>
                    <td>
                        {{date('H:i d-m',strtotime($row->created_at)) }}
                    </td>
                    <td class="text-primary">
                        <a href="/admin/acc/{{$row->id}}/edit">
                            <i class="fas fa-edit"></i> 
                        </a>
                        <a class="text-danger" onclick="destroy({{$row->id}});">
                            <i class="fas fa-trash-alt"></i> 
                        </a>
                    </td>
                </tr >
                @endforeach
              </tbody>
            </table>
            
          </div>
          <!-- /.card-body -->
          <div class="card-footer text-center clearfix">
              {{$accs->links()}}
          </div>
        </div>
        <!-- /.card -->
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>




<div class="modal fade" id="typeSearch" tabindex="-1" role="dialog" aria-labelledby="typeSearchLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="typeSearchLabel">Select Type Search</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formSelectTypeSearch">

          

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="chooseTypeSearch">Update</button>
      </div>
    </div>
  </div>
</div>

@endsection