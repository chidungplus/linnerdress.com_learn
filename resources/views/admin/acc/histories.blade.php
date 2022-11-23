@extends('layouts.admin2')

@section('js')

@endsection

@section('content')

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Lịch sử mua</h3>

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
                  <th>Tài khoản</th>
                  <th>Mật khẩu</th>
                  <th>2FA</th>
                  <th>Giá</th>
                  <th>User</th>
                  <th>Created at</th>
                </tr>
              </thead>
              <tbody>
                @foreach($acc_histories as $key => $row)
                  <tr>
                      <td>
                          <a href="#" target="">{{$row->id}}</a>
                      </td>
                      <td>
                          {{$row->taikhoan}}
                      </td>
                      <td>
                          {{$row->matkhau}}
                      </td>
                      <td>
                          {{$row->fb2FA}}
                      </td>
                      <td>
                          <a class="badge bg-success">
                              {{number_format($row->gia)}}<sup>vnđ</sup>
                          </a>
                      </td>
                      <td class="text-primary">
                          <a href="/admin/user/{{$row->user_id}}">
                          {{$row->getNameBuyer}}
                          </a>
                      </td>
                      <td>
                          {{date('H:i d-m',strtotime($row->created_at)) }}
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
            {{$acc_histories->links()}}
        </div>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>


@endsection