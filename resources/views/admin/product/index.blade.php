@extends('layouts.admin')

@section('js')
{{--
<script src="/admin_assets/js/product/search.js"></script> --}}
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
									<th>Ảnh</th>
									<th>Mã hàng</th>
									<th>Tên hàng</th>
									<th>Giá vốn</th>
									<th>Giá bán</th>
									<th>Tồn kho</th>
									<th>Edit</th>
									<th>Delete</th>
								</tr>
							</thead>
							<tbody>
								@foreach($products as $row)
								<tr class="table-success">
									<td>
										<i
											class="expandable-table-caret fas fa-caret-right fa-fw"></i>
											{{$row->id}}
									</td>
									<td>
										ảnh
									</td>
									<td>
										{{$row->product_code}}
									</td>
									<td>
										{{$row->name}}
									</td>
									<td>
										<a href="" class="badge bg-danger">
											{{number_format($row->cost)}}
										</a>
									</td>
									<td>
										<a href="" class="badge bg-success">
											{{number_format($row->price)}}
										</a>
									</td>
									<td>
										{{rand(100,200)}}
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
									@for ($i = 5; $i >=1; $i--)
									<tr class="expandable-body">
										<td>
											<i
												class="expandable-table-caret fas fa-dot-circle-o fa-fw"></i>
											1000001
										</td>
										<td>
											ảnh
										</td>
										<td>
											DC501-Nude-L
										</td>
										<td>
											Váy dạ hội đuôi cá DC501 Nude L
										</td>
										<td>
											<a href="" class="badge bg-danger">
												921.000
											</a>
										</td>
										<td>
											<a href="" class="badge bg-success">
												1.500.000
											</a>
										</td>
										<td>
											{{rand(10,60)}}
										</td>
										<td class="text-primary">
											<a href="">
												<i class="fas fa-edit"></i>
											</a>
										</td>
										<td>
											<a class="text-danger">
												<i class="fas fa-trash-alt"></i>
											</a>
										</td>
									</tr>
									@endfor
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