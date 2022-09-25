<template>
    <div>
        <div class="content-wrapper">
            <div class="content">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>Title</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <!-- beacerum -->
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /.container-fluid -->
                </section>
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header d-inline-md" v-if="filterCheck == false" >
                                        <h3 class="card-title">
                                            <a class="btn btn-primary btn-sm disable" href="#">
                                            <i class="fas fa-plus-circle"></i> Add New
                                            </a>
                                        </h3>
                                        <div class="card-tools">
                                            <div class="input-group input-group-sm" style="width: 150px;">
                                                <input type="text" v-model="search" v-on:change="searchUser()" class="form-control float-right" placeholder="Search by Id">
                                                <div class="input-group-append">
                                                    <button type="submit" class="btn btn-default" id="button_search" name="button_search">
                                                    <i class="fas fa-search"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-header filter-header" v-if="filterCheck == true" >
                                        <h3 class="card-title">
                                        	Đã chọn {{countFilter}} người dùng |
                                            <a class="btn btn-danger btn-sm" href="#" @click="deleteSelect()">
                                            <i class="fas fa-trash"></i> Delete
                                            </a>
                                        </h3>
                                      
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body table-responsive p-0" id="user_card_body">
                                        <table class="table table-hover text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th>
                                                    	<input type="checkbox" 
                                                    		v-model="checkAll"
                                                            @click.left.exact="selectAll" 
                                                        >
                                                   	</th>
                                                   	<th>ID</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Cash</th>
                                                    <th>Sign up at</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr v-for="user, index in list_users" :key="user.id" >
                                                    <td>
                                                        <input type="checkbox" 
                                                            v-model.number="checkItems" 
                                                            :value="`${index}`"
                                                            @click.shift.left.exact="shiftClick(index)"
                                                        >
                                                    </td>
                                                    <td><a >{{user.id}}</a></td>
                                                    <td>{{user.name}}</td>
                                                    <td>{{user.email}}</td>
                                                    <td>
                                                        {{user.cash}}<sup>vnđ</sup>
                                                    </td>
                                                    <td>
                                                        {{user.created_at}}
                                                    </td>
                                                </tr >
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer text-center clearfix">
                                        <paginate
	                                        v-model="currentPage"
	                                        :page-count="pageSize"
	                                        :click-handler="getListUsers"
	                                        :container-class="'pagination'"
	                                        :page-class="'page-item'"
	                                        :page-link-class="'page-link'"
	                                        :next-class="'page-item'"
	                                        :next-link-class="'page-link'"
	                                        :prev-class="'page-item'"
	                                        :prev-link-class="'page-link'"
	                                        :hide-prev-next="true">
	                                    </paginate>
                                    </div>
                                </div>
                                <!-- /.card --> 
                            </div>
                        </div>
                    </div>
                    <!-- /.container-fluid -->
                </section>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
            	errors: [],

            	// get list
            	list_users: {},
            	orderBy 	: 'desc',
             	limit		: 13,
             	currentPage : 1,
             	pageSize 	: 0,
             	search 		: '',

             	// check mutiple
             	checkAll : false,
             	checkItems : [],
             	selectItems : []
            }
        },
        created() {
           	this.getListUsers()
       	},
       	computed : {
       		filterCheck(){
       			if(this.filterItems.length > 0){
       				return true;
       			}else
       				return false;
       		},
       		countFilter(){
       			return this.filterItems.length;
       		},
       		filterItems(){
       			this.selectItems = [];
       			for (var i = this.checkItems.length - 1; i >= 0; i--) {
				    this.selectItems.push(this.list_users[this.checkItems[i]]);
        		}
        		return this.selectItems;
       		},
       		
       	},
        methods: {    
        	selectAll() {
        		this.checkAll = !this.checkAll;

                if (this.checkAll) {
                	for (var i = this.list_users.length - 1; i >= 0; i--) {
                		if (!this.checkItems.includes(i)) {
					        this.checkItems.push(i);
					    }
                	}
                }else{
                	this.checkItems = [];
                }
            },	
        	shiftClick(index){
        		if (this.checkItems.length > 0) {
        			if (this.checkItems[this.checkItems.length - 1] < index) {
        				for (var i = this.checkItems[this.checkItems.length - 1] + 1; i < index; i++) {
        					if (!this.checkItems.includes(i)) {
						        this.checkItems.push(i);
						    }
        				}
        			}else{
        				// for (var i = index; i < this.lastCheckbox; i++) {
        				// 	this.checkItems = this.checkItems.filter(item => item !== this.list_users[i].id);
        				// }
        			}
        		}
        	},
        	deleteSelect(){
        		
        	},
        	searchUser(){
        		this.currentPage = 1;
        		this.getListUsers();
        	},
        	getListUsers() {
        		this.checkAll = false;
        		this.checkItems = [];
        		let uri = `/api/vue/admin/user?limit=${this.limit}&page=${this.currentPage}&search=${this.search}`;
				axios.get(uri)
				.then(response => {
				   	this.list_users = response.data.data;
				   	this.pageSize 	= response.data.last_page;
				})
				.catch(error => {
				   this.errors = error.response.data.errors.name
				})
           	}
        },
    }
</script>

<style lang="scss" scoped>
.filter-header {
    color: #fff;
    background-color: #0175ff;
}
.pagination {
    margin: 0;
}

</style>