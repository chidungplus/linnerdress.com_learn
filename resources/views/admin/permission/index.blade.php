@extends('layouts.admin')

@section('js')
{{-- <script src="/admin_assets/js/accfreefire/search.js"></script>
<script src="/admin_assets/js/accfreefire/delete.js"></script> --}}
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
                                    <th>Key</th>
                                    <th>Display Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($permissions as $row)
                                    <tr id="acc-{{$row->id}}"> 
                                        <td>
                                          {{$row->id}}
                                        </td>
                                        <td>
                                          {{$row->name}}
                                      </td>
                                        <td>
                                            {{$row->description}}
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