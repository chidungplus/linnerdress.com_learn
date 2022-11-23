@extends('layouts.admin')

@section('js')
<script src="/admin_assets/js/accfreefire/search.js"></script>
<script src="/admin_assets/js/accfreefire/delete.js"></script>
@endsection

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-inline">
                        <h3 class="card-title"><a href="/admin/acc-free-fire/create" class="btn btn-success btn-sm"> <i
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
                                    <th>Login</th>
                                    <th>Username</th>
                                    <th>Rank</th>
                                    <th>Price</th>
                                    <th>Active</th>
                                    <th>Used</th>
                                    <th>Status</th>
                                    <th>Image</th>
                                    <th>Created at</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($accs as $row)
                                    <tr id="acc-{{$row->id}}"> 
                                        <td>
                                            <a href="/free-fire/acc-{{$row->id}}" target="_blank">{{$row->id}}</a>
                                        </td>
                                        <td>
                                            {{$row->getLoaiNick}}
                                        </td>
                                        <td>
                                            {{$row->getLogin}}
                                        </td>
                                        <td>
                                            {{$row->username}}
                                        </td>
                                        <td>
                                            <a href="" class="badge bg-success">
                                                {{$row->getRank}}
                                            </a>
                                        </td>
                                        <td>
                                            <a href="" class="badge bg-danger">
                                                {{number_format($row->price)}}<sup>vnđ</sup>
                                            </a>
                                        </td>
                                        <td>
                                            {{$row->getActive}}
                                        </td>
                                        <td>
                                            {{$row->getUsed}}
                                        </td>
                                        <td>
                                            {{$row->getStatus}}
                                        </td>
                                        <td class="text-primary">
                                            {{$row->countImage}} <i class="fa fa-file-image" aria-hidden="true"></i>
                                        </td>
                                        <td>
                                            {{date('H:i d-m',strtotime($row->created_at)) }}
                                        </td>
                                        <td class="text-primary">
                                            <a href="/admin/acc-free-fire/{{$row->id}}/edit">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a class="text-danger" onclick="destroy({{$row->id}});">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
                                        </td>     
                                    </tr>
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



@endsection