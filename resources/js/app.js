/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
Vue.config.productionTip = false;
Vue.config.devtools = true;

// Add vue router
import VueRouter from 'vue-router'

import Paginate from 'vuejs-paginate'
Vue.component('paginate', Paginate)

Vue.component('admin-component', require('./components/admin/index.vue').default);

Vue.use(VueRouter)
import Dashboard 	from './components/admin/dashboard/index.vue'
import UserList 	from './components/admin/user/list.vue'
import AccList 		from './components/admin/acc/list.vue'
import AccCreate 	from './components/admin/acc/create.vue'

const routes = [
	{ 	path: '/vue/admin', 
		name: 'Dashboard', 
		component: Dashboard 
	},
	{ 
		path: '/vue/admin/user',
		name: 'UserList',
		component: UserList 
	},
	{
		path: '/vue/admin/acc',
		name: 'AccList',
		component: AccList
	},
	{
		path: '/vue/admin/acc/create', 
		name: 'AccCreate', 
		component: AccCreate 
	},
]
  
const router = new VueRouter({
	mode: 'history',
  	routes 
})
  
const app = new Vue({
  router
}).$mount('#app')