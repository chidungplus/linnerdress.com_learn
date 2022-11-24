import Home from '@pages/Frontend/pages/Home/Home.vue';
import ProductSingle from '@pages/Frontend/pages/Product/ProductSingle.vue';
// import Cart from './pages/Cart/Cart';
const routes = [
    {
        path: '/',
        component: Home,
        name: 'home',
    },
    {
        path: '/products/:permalink',
        component: ProductSingle,
        name: 'product-single',
    },
    // {
    //     path: '/cart',
    //     component: Cart,
    //     name: 'cart',
    // },
];

export default routes;