import Home from '@pages/Frontend/pages/Home.vue';
import About from '@pages/Frontend/pages/About.vue';
import Policy from '@pages/Frontend/pages/Policy.vue';
import Document from '@pages/Frontend/pages/Document.vue';
import ProductSingle from '@pages/Frontend/pages/Single.vue';
import Category from '@pages/Frontend/pages/Category.vue';
import Cart from '@pages/Frontend/pages/Cart.vue';
const routes = [
    {
        path: '/',
        component: Home,
        name: 'home',
    },
    {
        path: '/about',
        component: About,
        name: 'about',
    },
    {
        path: '/policy',
        component: Policy,
        name: 'policy',
    },
    {
        path: '/document',
        component: Document,
        name: 'document',
    },
    {
        path: '/product/:permalink.:id',
        component: ProductSingle,
        name: 'product-single',
    },
    {
        path: '/category/:permalink',
        component: Category,
        name: 'category',
    },
    {
        path: '/cart',
        component: Cart,
        name: 'cart',
    },
];

export default routes;