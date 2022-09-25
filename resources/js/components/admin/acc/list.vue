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
		  	<section class="content">
				  <div class="container-fluid">
				    <div class="row">
				      <div class="col-12">
				        <div class="card">
				          <div class="card-header">
				            <h3 class="card-title">
				            	<router-link :to="{name: 'AccCreate'}" class="btn btn-primary btn-sm">
				            		<i class="fas fa-plus-circle"></i> Add New
				            	</router-link>
				            </h3> 
				            <div class="card-tools">
				              <div class="input-group input-group-sm" style="width: 150px;">
				                
				               
				                <input type="text" id="id_search" name="id_search" class="form-control float-right" placeholder="Search by Id">

				                <div class="input-group-append">
				                  <button type="submit" class="btn btn-default" id="button_search" name="button_search">
				                    <i class="fas fa-search"></i>
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
			                    <th>Loại Nick</th>
			                    <th>Login</th>
			                    <th>Tài khoản</th>
			                    <th>Rank</th>
			                    <th>Giá</th>
			                    <th>Trạng thái</th>
			                    <th>User</th>
			                    <th>Created at</th>
			                    <th>Action</th>
				                </tr>
				              </thead>
				              <tbody>
				                  <tr v-for="acc, index in list_accs" >
			                      <td>
				                      <a href="/" target="_blank">{{acc.id}}</a>
				                    </td>
				                    <td>
				                        {{acc.getLoaiNick}}
				                    </td>
				                    <td>
				                        {{acc.getLogin}}
				                    </td>
				                    <td>
				                        {{acc.taikhoan}}
				                    </td>
				                  
				                    <td>
				                        <a href="" class="badge bg-success">
				                            {{acc.getRank}}
				                        </a>
				                    </td>
				                    <td>
				                        <a href="" class="badge bg-danger">
				                            {{acc.gia}}<sup>vnđ</sup>
				                        </a>
				                    </td>
				                    <td>
				                        {{acc.getTrangThai}}
				                    </td>
				                    <td>
				                        {{acc.getNameAdmin}}
				                    </td>
				                    <td>
				                        {{acc.created_at}}
				                    </td>
				                    <td class="text-primary">
				                        <a href="#">
				                            <i class="fas fa-edit"></i> 
				                        </a>
				                        <a class="text-danger" >
				                            <i class="fas fa-trash-alt"></i> 
				                        </a>
				                    </td>
				                    <td>
					                    <a class="btn btn-primary btn-sm">
						            		<i class="fas fa-eye"></i> Detail
						            	</a>
				                    </td>
				                  </tr >
				              
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



			</div>
		</div>

  </div>
</template>

<script>
    export default {
        data: function () {
            return {
            	title : '',
            	beacerum : [],
            	orderBy 	: 'desc',
            	name 		: '',
               	list_accs: {},
               	pageSize 	: 14,
               	currentPage : 1,
               	errors: [],
  
            }
        },
        created() {
           	this.getListAccs()
       	},
        methods: {
        	getListAccs() {
        		let uri = `/api/vue/admin/acc?limit=${this.pageSize}&page=${this.currentPage}`;

						axios.get(uri)
						.then(response => {
						   	this.list_accs = response.data.accs.data;
						   	this.title = response.data.title;
						   	this.beacerum = response.data.beacerum;
						})
						.catch(error => {
						   this.errors = error.response.data.errors.name
						})
          }
        },
    }
</script>