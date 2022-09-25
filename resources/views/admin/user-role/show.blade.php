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
                    <div class="card-header d-inline">
                        <h3 class="card-title"><a href="/admin/user-role/create" class="btn btn-success btn-sm disabled"> <i
                                    class="fas fa-plus-circle"></i> Add New</a> {{$user->name}} </h3>

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