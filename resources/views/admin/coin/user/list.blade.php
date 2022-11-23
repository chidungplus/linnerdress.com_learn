@extends('layouts.admin')

@section('js')
<script type="text/javascript">
function updateWidthdraw(id,trangthai){

    $.ajax({
        method: 'post',
        url: '/admin/widthdraw/update',
        type: 'post',
        data: {
            id          : id,
            trangthai   : trangthai
        },
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
<div class="alert alert-success" role="alert">
    This is the Coin!
</div>


<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="text-center">
            {{$users->links()}}
        </div>
        <div class="x_content table-responsive">
        
            <table id="datatable" class="table table-striped table-bordered table-responsive">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>User</th>
                        <th>Quân Huy</th>
                        <th>Kim Cương</th>
                        <th>Uc</th>
                        <th>Rp</th>
                        <th>Created at</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach($users as $key => $row)
                        <tr>
                            <td class="text-primary">
                                <a href="#" target="">{{$row->id}}</a>
                            </td>
                            <td class="text-primary">
                                <a href="" class="label label-success">
                                    {{$row->getNameBuyer}} 
                                </a>
                                
                            </td>
                            <td class="text-primary">
                                {{$row->lqm}}
                            </td>
                            <td class="text-primary">
                                {{$row->frf}}
                            </td>
                            <td class="text-primary">
                                {{$row->pgm}}
                            </td>
                            <td class="text-primary">
                                {{$row->lol}}
                            </td>
                            <td class="text-primary">
  
                                {{date('H:i d-m',strtotime($row->created_at)) }}
                            </td>
                            <td class="text-primary">
                                <a href="/admin/coin/user/{{$row->id}}/edit">
                                    <i class="fa fa-edit"></i> 
                                </a>
                            </td>
                        </tr >
                        @endforeach
                </tbody>
            </table>
            <div class="text-center">
                {{$users->links()}}
            </div>
        </div>
    </div>
</div>
@endsection