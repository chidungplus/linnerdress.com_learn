@extends('layouts.admin')
@section('css')
@endsection
@section('js')
@endsection

@section('content')


<section class="content">
  <div class="card card-solid">
    <div class="card-body pb-0">
      <div class="row d-flex align-items-stretch">
        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
          <div class="card bg-light">
            <div class="card-header text-muted border-bottom-0">
              Join At - {{date('H:i d-m',strtotime($user->created_at)) }}
            </div>
            <div class="card-body pt-0">
              <div class="row">
                <div class="col-7">
                  <h2 class="lead"><b><a href="/admin/user/{{$user->id}}/edit">{{$user->name}} <i class="fa fa-edit"></i></a></b></h2>
                  <p class="text-muted text-sm"><b>About: </b> Customer </p>
                  <ul class="ml-4 mb-0 fa-ul text-muted">
                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-envelope"></i></span> Email: {{$user->email}}</li>
                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-wallet"></i></span> Số dư : {{number_format($user->cash)}} <sup>vnđ</sup></li>
                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-wallet"></i></span> Kim cương : {{number_format($user->diamond)}} </li>
                  </ul>
                </div>
                <div class="col-5 text-center">
                  <img src="/admin_assets/dist/img/user8-128x128.jpg" alt="user-avatar" class="img-circle img-fluid">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->


  {{-- List Card --}}
  @if($cards->count() > 0)
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Danh sách thẻ cào</h3>

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
                  <th>Provider</th>
                  <th>Seri</th>
                  <th>Pin</th>
                  <th>Amount</th>
                  <th>Status</th>
                  <th>Push At</th>

                </tr>
              </thead>
              <tbody>
                @foreach($cards as $key => $row)
                  <tr>
                      <td>
                          <a href="#" target="">{{$row->id}}</a>
                      </td>
                      <td>
                          {{$row->getProvider}}
                      </td>
                      <td>
                          {{$row->seri}}
                      </td>
                      <td>
                          {{$row->pin}}
                      </td>
                      <td>
                          <a href="/" class="badge bg-danger">
                              {{number_format($row->amount)}}<sup>vnđ</sup>
                          </a>
                      </td>
                      <td>
                          {{$row->getStatus}}
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

      </div>
    </div>
  </div><!-- /.container-fluid -->
  @endif

  {{-- Acc History --}}
  @if($userAccs->count() > 0 || $userAccs->count() > 0)
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 col-sm-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Acc đã mua</h3>

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
                  <th>Type</th>
                  <th>Login</th>
                  <th>Username</th>
                  <th>Price</th>
                  <th>Buy At</th>
                </tr>
              </thead>
              <tbody>
                @foreach($userAccs as $key => $row)
                  <tr>
                      <td>
                          <a href="#" target="">{{$row->id}}</a>
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
                          <a href="/" class="badge bg-danger">
                              {{number_format($row->price)}}<sup>vnđ</sup>
                          </a>
                      </td>
                      <td class="text-primary">
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
      </div>
      <div class="col-md-6 col-sm-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Random đã mua</h3>

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
                  <th>Type</th>
                  <th>Login</th>
                  <th>Username</th>
                  <th>Price</th>
                  <th>Buy At</th>
                </tr>
              </thead>
              <tbody>
                @foreach($userRandoms as $key => $row)
                  <tr>
                      <td>
                          <a href="#" target="">{{$row->id}}</a>
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
                          <a href="/" class="badge bg-danger">
                              {{number_format($row->price)}}<sup>vnđ</sup>
                          </a>
                      </td>
                      <td class="text-primary">
                          {{date('H:i d-m',strtotime($row->created_at)) }}
                      </td> 
                  </tr >
                  @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
      </div>
    </div>
  </div><!-- /.container-fluid -->
  @endif
  {{-- Wheel Histories  --}}
  @if($wheels->count() > 0)
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Lịch sử quay</h3>

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
                  <th>Type</th>
                  <th>Diamond</th>
                  <th>Diamond Before</th>
                  <th>Diamond After</th>
                  <th>Created at</th>
                </tr>
              </thead>
              <tbody>
                @foreach($wheels as $row)
                  <tr>
                      <td>
                          <a href="#" target="">{{$row->id}}</a>
                      </td>
                      <td>
                          {{$row->getType}}
                      </td>

                        <td>
                            <a href="#" class="badge bg-success">
                                {{number_format($row->diamond)}}
                            </a>
                        </td>
                        <td>
                            <a href="#" >
                                {{number_format($row->diamond_before)}}
                            </a>
                        </td>
                        <td>
                            <a href="#" >
                                {{number_format($row->diamond_after)}}
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

      </div>
    </div>
  </div><!-- /.container-fluid -->
  @endif
  {{-- Coin widthdraw Histories --}}
  @if($withdraws->count() > 0)
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Lịch sử rút</h3>

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
                  <th>Type</th>
                  <th>ID Game</th>
                  <th>Amount</th>
                  <th>Status</th>    
                  <th>Created at</th>
                </tr>
              </thead>
              <tbody>
                @foreach($withdraws as $key => $row)
                  <tr>
                      <td>
                          <a href="#" target="">{{$row->id}}</a>
                      </td>
                      <td>
                          {{$row->getType}}
                      </td>
                      <td>
                          {{$row->username}}
                      </td>
                      <td>
                          {{$row->amount}}
                      </td>
                      <td>
                          {{$row->getStatus}}
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

      </div>
    </div>
  </div><!-- /.container-fluid -->
  @endif
</section>
@endsection