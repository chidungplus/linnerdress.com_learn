@extends('layouts.admin')

@section('js')
<script type="text/javascript">
function updateAcc(id){
    var data = $('#form').serialize();   
    $.ajax({
        method: 'patch',
        url: '/admin/coin/user/'+ id ,
        type: 'post',
        data: data,
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

@section('content')
<div class="panel panel-default">
    <a href="/admin/coin/user"><button type="button" class="btn btn-success btn-sm"><i class="fa fa-plane"></i> Back To List</button></a>
<div class="panel-body">
<form id="form" enctype="multipart/form-data">

<div class="row">
    <div class="col-md-3">
        <div class="form-group">
            <label>Quân Huy</label>
            <input class="form-control" placeholder="Quân huy" id="lqm" name="lqm" type="text" value="{{$user->lqm}}"/>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label>Kim Cương</label>
            <input class="form-control" placeholder="Kim cương" id="frf" name="frf" type="text" value="{{$user->frf}}"/>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label>UC (Pubg Mobile)</label>
            <input class="form-control" placeholder="UC" id="pgm" name="pgm" type="text" value="{{$user->pgm}}"/>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label>RP (Liên Minh)</label>
            <input class="form-control" placeholder="RP" id="lol" name="lol" type="text" value="{{$user->lol}}"/>
        </div>
    </div>
</div>
</form>
</div> <!--End pannel body--> 
<div class="text-center">
    <button id="login" onclick="updateAcc({{$user->id}});" class="sa-lib-dk btn btn-success" >Update</button>
</div>

</div> <!--End pannel-->


@endsection