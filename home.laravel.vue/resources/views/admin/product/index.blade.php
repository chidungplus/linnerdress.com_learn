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
									<th>Color</th>
									<th>Size</th>
									<th>Giá vốn</th>
									<th>Giá bán</th>
									<th>Tồn kho</th>
                                    <th>Items</th>
									<th>Edit</th>
									<th>Delete</th>
								</tr>
							</thead>
							<tbody>
								@foreach($products as $product)
                                    <tr class="table-success">
                                        <td>
                                            <i
                                                class="expandable-table-caret fas fa-caret-right fa-fw"></i>
                                                {{ $product->id }}
                                        </td>
                                        <td>
                                            ảnh
                                        </td>
                                        <td>
                                            {{ $product->product_code }}
                                        </td>
                                        <td>
                                            {{ $product->name }}
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <a href="/admin/product/{{$product->id}}/product-item"> Thêm items</a>
                                        </td>
                                        <td class="text-primary">
                                            <a href="/admin/product/{{$product->id}}/edit">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a class="text-danger" onclick="destroy({{ $product->id }});">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
									@foreach ($product->productItems as $productItem)
                                        <tr class="expandable-body">
                                            <td>
                                                <i
                                                    class="expandable-table-caret fas fa-dot-circle-o fa-fw"></i>
                                                    {{ $productItem->id }}
                                            </td>
                                            <td>
                                                ảnh
                                            </td>
                                            <td>
                                                {{ $productItem->code }}
                                            </td>
                                            <td>
                                                {{ $productItem->name }}
                                            </td>
                                            <td>
                                                {{ $productItem->color_value }}
                                            </td>
                                            <td>
                                                {{ $productItem->size_value }}
                                            </td>
                                            <td>
                                                <a href="" class="badge bg-danger">
                                                    {{ $productItem->cost }}
                                                </a>
                                            </td>
                                            <td>
                                                <a href="" class="badge bg-success">
                                                    {{ $productItem->price }}
                                                </a>
                                            </td>
                                            <td>
                                                {{ $productItem->quantity }}
                                            </td>
                                            <td> 
                                                <a href="/admin/product-item/{{$productItem->id}}/gallery">gallery</a>
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
                                    @endforeach
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