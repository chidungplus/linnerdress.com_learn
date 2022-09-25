@extends('layouts.admin')

@section('js')
{{-- <script src="/admin_assets/js/product/search.js"></script> --}}
<script src="/admin_assets/js/product/delete.js"></script>
@endsection

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-inline">
                        <h3 class="card-title"><a href="/admin/product/create" class="btn btn-success btn-sm"> <i
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
                                    <th>Name</th>
                                    <th>Code</th>
                                    <th>Cost</th>
                                    <th>Price</th>
                                    <th>Color</th>
                                    <th>Images</th>
                                    <th>Time</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $row)
                                    <tr id="acc-{{$row->id}}"> 
                                        <td>
                                            <a href="/product/acc-{{$row->id}}" target="_blank">{{$row->id}}</a>
                                        </td>
                                        <td>
                                            {{$row->name}}
                                        </td>
                                        <td>
                                            {{$row->product_code}}
                                        </td>
                                        <td>
                                            <a href="" class="badge bg-danger">
                                                {{number_format($row->cost)}}<sup>vnđ</sup>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="" class="badge bg-success">
                                                {{number_format($row->price)}}<sup>vnđ</sup>
                                            </a>
                                        </td>
                                        <td>
                                            {{$row->color}}
                                        </td> 
                                        <td class="text-primary">
                                            {{$row->count_image}} <i class="fa fa-file-image" aria-hidden="true"></i>
                                        </td>
                                        <td>
                                            {{date('H:i d-m',strtotime($row->created_at)) }}
                                        </td>
                                        <td class="text-primary">
                                            <a href="/admin/product/{{$row->id}}/edit">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                        </td>
                                        <td>
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
                        {{$products->links()}}
                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>



@endsection