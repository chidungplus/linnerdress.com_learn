<template>
  <div>
    <div class="content-wrapper">
    	<div class="content">
		  <!-- Content Header (Page header) -->
			  <section class="content-header">
			    <div class="container-fluid">
			      <div class="row mb-2">
			        <div class="col-sm-6">
			          <h1>{{title}}</h1>
			        </div>
			        <div class="col-sm-6">
			          <ol class="breadcrumb float-sm-right">
			            <!-- beacerum -->
			          </ol>
			        </div>
			      </div>
			    </div><!-- /.container-fluid -->
			  </section>
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
									<form id="form">
										<div class="row">
											<div class="col-md-4" >
												<div class="row" id="uploadThumb" data-toggle="modal" data-target="#exampleModal">
													<input type="hidden" name="thumb" id="thumb" value="" />
													<img name="imgThumb" id="imgThumb" :src="thumbUrl" style="max-width:100%;" />
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="form-check">
															<input class="form-check-input" type="checkbox" name="kichhoat" id="kichhoat" checked="" />
															<label class="form-check-label">Kích Hoạt</label>
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-group">
															<div class="form-check">
																<input class="form-check-input" type="radio" name="trangthai" id="trangthai" value="2" />
																<label class="form-check-label">Pending</label>
															</div>
															<div class="form-check">
																<input class="form-check-input" type="radio" name="trangthai" id="trangthai" value="1" checked="" />
																<label class="form-check-label">Public</label>
															</div>
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-check">
															<input class="form-check-input" type="checkbox" name="thongtin" id="thongtin" />
															<label class="form-check-label">Có Thông Tin</label>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-8">
												<div class="row">
													<div class="col-md-3">
														<div class="form-group">
															<label>Tài khoản</label>
															<input type="text" class="form-control" id="taikhoan" name="taikhoan" placeholder="Tài khoản" />
														</div>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<label>Mật khẩu</label>
															<input type="text" class="form-control" id="matkhau" name="matkhau" placeholder="Mật khẩu" />
														</div>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															<label>Giá</label>
															<input type="number" class="form-control" id="gia" name="gia" placeholder="Giá" />
														</div>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															<label>Giảm Giá</label>
															<input type="number" class="form-control" id="giamgia" name="giamgia" placeholder="Giảm giá" value="0" />
														</div>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															<label>Ưu Tiên</label>
															<input type="number" class="form-control" id="uutien" name="uutien" placeholder="Ưu tiên" value="0" />
														</div>
													</div>
												</div>
													
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label>Game</label>
															<select class="form-control" name="loainick" id="selectLoaiNick">
																<option>A</option>
																<option>A</option>
																<option>A</option>
															</select>

														</div>
													</div>
												</div>

												<div id="content-loainick"></div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label>Title</label>
															<input type="text" class="form-control is-warning" id="inputWarning title" name="title" placeholder="Title" />
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>Description</label>
															<input type="text" class="form-control is-warning" id="inputWarning description" name="description" placeholder="Description" />
														</div>
													</div>
												</div>
											
											</div>
											<div id="content-acc"></div>
										</div>
									</form>
									<div class="text-center">
										<button id="login" class="sa-lib-dk btn btn-success" >
											<i class="fa fa-plane"></i> Add New					
										
										</button>
									</div>
								</div>
								<!-- /.card-body -->
							</div>
							<!-- /.card -->
							<div class="card card-primary box-upload" id="addImages" style="display: none;">
								<div class="card-header">
									<h3 class="card-title">Upload Hình Ảnh</h3>
								</div>
								<!-- /.card-header -->
								<div class="card-body">
									<a href="/admin/acc/create" id="addInfoSuccess"style="display: none;" >
										<button class="btn-success">
											<i class="fa fa-thumbs-up"></i> Đăng Acc Khác
										
										</button>
									</a>
									<form action="#" method="POST" enctype="multipart/form-data" id="formUpload" onsubmit="return false;">
										<div class="progress">
											<div class="progress-bar">0%</div>
										</div>
										<button type="reset" class="btn-reset">Làm mới</button>
										<button type="submit" class="btn-submit">Upload</button>
										<input type="file" name="img_file[]" multiple="true" onchange="" id="img_file" accept="image/*" />
										<div class="output"></div>
										<div class="box-preview-img"></div>
									</form>
								</div>
								<!-- /.card-body -->
							</div>
							<!-- /.card -->
						</div>
					</div>
				</div>
				<!-- /.container-fluid -->
			</section>
			<!-- /.content -->
		</div>
	</div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Upload Thumbnail</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form id="formUploadThumb">

	          <div class="form-group">
	          	<div class="col-md-12" v-if="thumb">
                  	<img :src="thumb" class="img-responsive" width="100%">
               	</div>
           
	            <div class="custom-file">
	              <input type="file" class="custom-file-input" v-on:change="onImageChange" accept="image/*">
	              <label class="custom-file-label" for="customFile">Choose file</label>
	            </div>
	          </div>
	         
	        </form>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary" v-on:click="uploadThumb">Choose Thumb</button>
	      </div>
	    </div>
	  </div>
	</div>

  </div>
</template>

<script>

    export default {
        data: function () {
            return {
            	title : 'Add New Acc',
            	thumb: '',
            	thumbUrl : '/admin_assets2/images/default-thumb.jpg',

               	errors: [],
  
            }
        },
        created() {

       	},
        methods: {
        	onImageChange(e) {
                let files = e.target.files || e.dataTransfer.files;
                if (!files.length)
                    return;
                this.createImage(files[0]);
            },
            createImage(file) {
                let reader = new FileReader();
                let vm = this;
                reader.onload = (e) => {
                    vm.thumb = e.target.result;
                };
                reader.readAsDataURL(file);
            },
            uploadThumb(){

            	axios.post('/admin/images/uploadThumbBase64',{thumb: this.thumb}).then(res => {

                   	if (res.data.err === true) {
			            toastr.error(res.data.msg);
			        }else{
			            $('#exampleModal').modal('hide');
			            $('body').removeClass('modal-open');
						$('.modal-backdrop').remove();

			            this.thumbUrl = '/storage/' + res.data.img;
			            $("#thumb").val(res.data.img);
			 
			        }
                });
            }

        },
    }
</script>