@extends('layouts.admin')

@section('js')
<script src="/admin_assets/js/user/index.js"></script>
@endsection

@section('content')


<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Danh sách users</h3> 
            <div class="card-tools">
              <div class="input-group input-group-sm" style="width: 150px;">
                
          
                <input type="text" id="search_content" name="search_content" class="form-control float-right" placeholder="Search...">

                <div class="input-group-append">
                  <button type="submit" class="btn btn-default" id="button_search" name="button_search">
                    <i class="fas fa-search"></i>
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
                  <th>Name</th>
                  <th>Email</th>
                  <th>Cash</th>
                  <th>Diamond</th>
                  <th>Role</th>
                  <th>Sign up at</th>
                  <th>Log</th>
                  <th>Edit</th>
                </tr>
              </thead>
              <tbody>
                @foreach($users as $row)
                  <tr >
                      <td><a href="/admin/user/{{$row->id}}" >{{$row->id}}</a></td>
                      <td>{{$row->name}}</td>
                      <td>{{$row->email}}</td>
                     
                      <td>
                          <a href="" class="badge bg-danger">
                              {{number_format($row->cash)}}<sup>vnđ</sup>
                          </a>
                      </td>
                      <td>
                        <a href="" class="badge bg-success">
                            {{number_format($row->diamond)}}
                        </a>
                    </td>
                      <td>
                        <a class="text-success" href="/admin/user-role/{{$row->id}}">
                            <i class="fa fa-tasks"></i>
                        </a>
                    </td>
                      <td>
                          {{date('H:i d-m',strtotime($row->created_at)) }}
                      </td>
                      <td >
                        <a class="text-success" href="/admin/user/{{$row->id}}">
                            <i class="fas fa-eye"></i> 
                        </a>
                      </td>
                      <td>
                          <a href="/admin/user/{{$row->id}}/edit">
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
          <!-- /.card-body -->
        </div>
        <!-- /.card --> 
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>


@endsection