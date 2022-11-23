@extends('layouts.admin')

@section('js')
<script src="/admin_assets/js/card/search.js"></script>
<script src="/admin_assets/js/card/show.js"></script>
<script src="/admin_assets/js/card/update.js"></script>
@endsection

@section('content')
<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header d-inline">
                        <h3 class="card-title"><a href="#" class="btn btn-sm btn-success disabled"> <i
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
					<div class="card-body table-responsive p-0" id="card-data">
						<table class="table table-hover text-nowrap">
							<thead>
								<tr>
									<th>ID</th>
									<th>Provider</th>
									<th>Seri</th>
									<th>Pin</th>
									<th>Amount</th>
									<th>Status</th>
									<th>User</th>
									<th>Created at</th>
									<th>True</th>
									<th>False</th>
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
										<a class="badge bg-success">
											{{number_format($row->amount)}}<sup>vnđ</sup>
										</a>
									</td>
									<td>
										{{$row->getStatus}}
									</td>
									<td>
										<a href="/admin/user/{{$row->user_id}}" target="">{{$row->getNameUser}}</a> 
									</td>
									<td>
										{{date('H:i d-m',strtotime($row->created_at)) }}
									</td>
									@if($row->status != 1 && $row->status != 2)
									<td>
										<span class="btn text-success btn-xs" onclick="setStatus({{$row->id}}, 1);">
											<i class="fa fa-check-circle"></i>
										</span>
										
									</td>
									<td>
										<span class="btn text-danger btn-xs" onclick="setStatus({{$row->id}}, 2);">
											<i class="fa fa-exclamation-triangle"></i>
										</span>
									</td>
									@else
									<td colspan="2">
										<span class="btn text-primary btn-xs" onclick="setStatus({{$row->id}}, 0);">
											<i class="fa fa-retweet" ></i>
										</span>
									</td>
									@endif
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
					<!-- /.card-body -->
				</div>
				<!-- /.card -->
				<div class="text-center">
					{{$cards->links()}}
				</div>
			</div>
		</div>
	</div><!-- /.container-fluid -->
</section>


<div class="modal fade" id="showCard" tabindex="-1" role="dialog" aria-labelledby="showCardLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="showCardLabel">Update Card</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="form">

					<div class="row">
						<div class="col-md-5">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">Card Id</span>
								</div>
								<input class="form-control" type="text" name="card_id" id="card_id">
							</div>
						</div>
						<div class="col-md-7">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">Trạng thái</span>
								</div>
								<select class="form-control" name="status">
									<option value="1" selected>Thành công</option>
									<option value="2">Thất bại</option>
								</select>
							</div>
						</div>
						<div class="col-md-7">
							<div class="form-check">
								<input type="checkbox" class="form-check-input" id="auto" name="auto" checked="">
								<label class="form-check-label">Tự động cộng trừ tiền user</label>
							</div>
						</div>



					</div>

					<div class="form-group">
						<label for="message-text" class="col-form-label">Message:</label>
						<textarea class="form-control" id="message-text" name="note"></textarea>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary" onclick="updateCard();">Update</button>
			</div>
		</div>
	</div>
</div>
@endsection