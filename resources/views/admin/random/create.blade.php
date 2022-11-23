@extends('layouts.admin')

@section('js')
<script src="/admin_assets/js/random/store.js"></script>
@endsection
@section('css')
<style type="text/css">
textarea {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;

  width: 100%;
}
</style>
@endsection
@section('content')
<div class="content">

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <!-- general form elements disabled -->
          <div class="card card-primary" id="addInfo">
            <div class="card-header">
              <h3 class="card-title">Thông tin cơ bản</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

              <div class="row">
    
                  <div class="col-md-12">
                      
                      <div class="row">
                        <div class="col-md-5">
                          <div class="form-group">
                            <select class="form-control" name="type" id='type'>
                                <option value="ff_19">Random Free Fire 19k</option>
                                <option value="ff_50">Random Free Fire 50k</option>
                                <option value="ff_100">Random Free Fire 100k</option>
                                <option value="ff_200">Random Free Fire 200k</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-5">
                          <div class="form-group">
                            <select class="form-control" name="login" id='login'>
                                <option value="fb" selected>Facebook</option>
                            </select>
                          </div>
                        </div>
        
                        <div class="col-md-2">
                            <div class="form-group">
                                <button onclick='store();' class="sa-lib-dk btn btn-success" >Add New</button>
                            </div>
                        </div>
                      </div>
                      <textarea rows="10" cols="60"  name="data" id ='data' placeholder="Định dạng username|password|2fa"></textarea>
           

                  </div>
              </div>

            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
@endsection