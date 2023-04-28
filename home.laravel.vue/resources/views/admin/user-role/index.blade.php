@extends('layouts.admin')

@section('js')
{{-- <script src="/admin_assets/js/role/delete.js"></script> --}}
@endsection

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                   
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0" id="user_card_body">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Count Role</th>
                                    <th>Role</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $row)
                                    <tr id="acc-{{$row->id}}"> 
                                        <td>
                                          {{$row->user_id}}
                                        </td>
                                        <td>
                                            {{$row->name}}
                                        </td>
                                        <td>
                                            {{$row->email}}
                                        </td>
                                        <td>
                                            {{$row->count}}
                                        </td>
                                        <td>
                                            <a class="text-success" href="/admin/user-role/{{$row->user_id}}">
                                                <i class="fa fa-tasks"></i>
                                            </a>
                                        </td>
                                          
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    {{-- <div class="card-footer text-center clearfix">
                        {{$acc$->links()}}
                    </div> --}}
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>



@endsection