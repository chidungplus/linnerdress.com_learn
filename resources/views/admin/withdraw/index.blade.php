@extends('layouts.admin')

@section('js')
@endsection

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-inline">
                        <h3 class="card-title"><a href="/admin/wheel/create" class="btn btn-success btn-sm disabled"> <i
                                    class="fas fa-plus-circle"></i> Add New</a> </h3>

                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" id="search_content" name="search_content"
                                    class="form-control float-right" placeholder="Search...">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default" id="button_search"
                                        name="button_search">
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
                                    <th>Type</th>
                                    <th>Id Game</th>
                                    <th>Diamond</th>
                                    <th>Status</th>
                                    <th>User</th>
                                    <th>Create at</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($withdraws as $row)
                                    <tr> 
                                        <td>
                                            <a href="#">{{$row->id}}</a>
                                        </td>
                                        <td>
                                            {{$row->getType}}
                                        </td>
                                        <td>
                                            {{$row->username}}
                                        </td>
                                        <td>
                                            <a href="" class="badge bg-danger">
                                                {{number_format($row->amount)}}
                                            </a>
                                        </td>
                                        <td>
                                            {{$row->getStatus}}
                                        </td>
                                        <td>
                                            <a href="/admin/user/{{$row->user_id}}" target="">{{$row->getNameUser}}</a> 
                                        </td>
                                        <td>
                                            {{date('H:i d-m',strtotime($row->created_at)) }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer text-center clearfix">
                        {{$withdraws->links()}}
                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>



@endsection