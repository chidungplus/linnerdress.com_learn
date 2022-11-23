import Cart from './components/front/cart'
import Payment from './components/front/payment'

const routes = [
    {
        path: '/cart',
        component: Cart,
        name: 'cart',
    },
    {
        path: '/payment',
        component: Payment,
        name: 'payment',
    }
];

export default routes;