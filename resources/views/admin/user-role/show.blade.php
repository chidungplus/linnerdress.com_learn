@extends('layouts.admin')

@section('js')
<script src="/admin_assets/js/user-role/update.js"></script>
@endsection

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
              
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0" id="user_role_table">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Key</th>
                                    <th>Display Name</th>
                                    <th>Access</th>
                                </tr>
                            </thead>
                            <tbody>
                                <input type="hidden" id="user_id" value="{{$user->id}}">
                                @foreach($roles as $key => $row)
                                    <tr> 
                                        <td>
                                          {{$row->id}}
                                        </td>
                                        <td>
                                          {{$row->name}}
                                        </td>
                                        <td>
                                            {{$row->description}}
                                        </td>
                                        <td>
                                            <input type="checkbox" class="btn-user-role" data-id="{{$row->id}}" @if($row->checked === true) checked @endif>
                                        </td>
                                          
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    {{-- <div class="card-footer text-center clearfix">
                        {{$permissions->links()}}
                    </div> --}}
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>



@endsection