require('./bootstrap');

window.Vue = require('vue');
Vue.config.productionTip = false;
Vue.config.devtools = true;

import App from './App.vue';


import Vue from 'vue';
import VueRouter from 'vue-router';
import routes from './routes';
import store from './store';

// use router
Vue.use(VueRouter);

// Vue.filter('toCurrency', function (value) {
//     if (typeof value !== "number") {
//         return value;
//     }
//     var formatter = new Intl.NumberFormat('vi-VN', {
//         style: 'currency',
//         currency: 'VND'
//     });
//     return formatter.format(value);
// });

// khai báo dùng router này
const router = new VueRouter({
    routes,
    mode: 'history'
});

// và cuối cùng là tạo 1 instance Vue và render tại phần tử có id là app,
// render tại component App và dùng router đã khai báo ở trên
const app = new Vue({
    el: '#app',
    store,
    render: h => h(App),
    router
});