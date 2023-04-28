@extends('layouts.admin')

@section('js')

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
									<th>Name</th>
									<th>Value</th>
								</tr>
							</thead>
							<tbody>
								@foreach($settings as $key => $row)
								<tr>
									<td>
										<a href="#" target="">{{$key + 1}}</a>
									</td>
									<td>
										{{$row['name']}}
									</td>
									<td>
										{{$row['value']}}
									</td>
								</tr>
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