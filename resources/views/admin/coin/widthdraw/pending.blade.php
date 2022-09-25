@extends('layouts.admin2')

@section('js')
<script type="text/javascript">

function updateId(id){
    $('input[name=id]').val(id);
}
function updateWidthdraw(){
    var data = $('#form').serialize();  
    $.ajax({
        method: 'post',
        url: '/admin/coin/widthdraw/update',
        type: 'post',
        data: data,
        // contentType: false,
        // processData: false,
        success: function(res) {
            if (res.err === true) {
                Swal.fire({
                    title: '<strong>Thông Báo!</strong>',
                    type: 'error',
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
}

</script>
@endsection

@section('content')



<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Danh sách rút coin</h3>

            <div class="card-tools">
              <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                <div class="input-group-append">
                  <button type="submit" class="btn btn-default">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Buyer</th>
                  <th>Loại Coin</th>
                  <th>ID Game</th>
                  <th>Pass Game</th>
                  <th>Amount</th>
                  <th>Status</th>    
                  <th>Created at</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($widthdraws as $key => $row)
                  <tr>
                      <td>
                          <a href="#" >{{$row->id}}</a>
                      </td>
                      <td>
                          <a href="" class="label label-success">
                              {{$row->getNameBuyer}}
                          </a>    
                      </td>
                      <td>
                          {{$row->loaiCoin}}
                      </td>
                      <td>
                          {{$row->idgame}}
                      </td>
                      <td>
                          {{$row->passGame}}
                      </td>
                      <td>
                          {{$row->soluong}}
                      </td>
                      <td>
                          {{$row->getTrangThai}}
                      </td>
                      
                      <td>
                          {{date('H:i d-m',strtotime($row->created_at)) }}
                      </td>
                      <td>
                          @if($row->trangthai != 1 && $row->trangthai != 2)
                          <a  class="badge bg-primary" data-toggle="modal" data-target="#exampleModal" onclick="updateId({{$row->id}})">Xử lí</a>
                          @endif
                      </td>
                  </tr >
                  @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
        <div class="text-center">
            {{$widthdraws->links()}}
        </div>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Width Draw</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="form">
          <input type="hidden" name="id" id="id" value="">

          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">@</span>
            </div>
            <select class="form-control" name="trangthai">
              <option value="1" selected>Thành công</option>
              <option value="2" >Thất bại</option>
            </select>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text" name="note"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="updateWidthdraw();">Update</button>
      </div>
    </div>
  </div>
</div>
@endsection