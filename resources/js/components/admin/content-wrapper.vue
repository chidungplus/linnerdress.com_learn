<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <div class="content">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>{{$title}}</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            @foreach($breadcrumb as $row)
            <li class="breadcrumb-item"><a href="{{$row->url}}">{{$row->name}}</a></li>
            @endforeach
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  @yield('content')
</div>

