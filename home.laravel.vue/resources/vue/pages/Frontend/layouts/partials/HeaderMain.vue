<template>
    <fragment>
        <section id="menu-pc">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="header-main">
                            <div class="left">
                                <ul class="menu-list">
                                    <li class="menu-item active">
                                        <router-link 
                                            :to="{name: 'home'}"
                                        >
                                        Home
                                        </router-link>
                                    </li>
                                    <li class="menu-item">
                                        <a href="#">
                                            Bộ sưu tập
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="#">
                                            Sản phẩm mới
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="right">
                                <div class="user">
                                    <a href="#">
                                        <svg role="presentation" stroke-width="1.5" focusable="false" width="22"
                                            height="22" class="icon icon-account" viewBox="0 0 22 22">
                                            <circle cx="11" cy="7" r="4" fill="none" stroke="currentColor"></circle>
                                            <path d="M3.5 19c1.421-2.974 4.247-5 7.5-5s6.079 2.026 7.5 5"
                                                fill="none" stroke="currentColor" stroke-linecap="round"></path>
                                        </svg>
                                    </a>
                                    <router-link
                                        :to="{name: 'cart'}"
                                    >
                                        <svg role="presentation" stroke-width="1.5" focusable="false" width="22"
                                            height="22" class="icon icon-cart" viewBox="0 0 22 22">
                                            <path
                                                d="M11 7H3.577A2 2 0 0 0 1.64 9.497l2.051 8A2 2 0 0 0 5.63 19H16.37a2 2 0 0 0 1.937-1.503l2.052-8A2 2 0 0 0 18.422 7H11Zm0 0V1"
                                                fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </router-link>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="menu-mobile">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="header-main">
                            <div class="menu-mobile">
                                <input type="checkbox" id="input-menu" value="" />
                                <span></span>
                                <span></span>
                                <span></span>
                                <div class="menu-bg">
                                    <ul class="menu-list">
                                        <li class="menu-item active">
                                            <img src="/shop_assets/images/svg/home.svg" alt="home" />
                                            <a href=""> Trang chủ </a>
                                        </li>
                                        <li class="menu-item">
                                            <img src="/shop_assets/images/svg/coin.svg" alt="coin" />
                                            <a href="#">Bộ sưu tập</a>
                                        </li>
                                        <li class="menu-item">
                                            <img src="/shop_assets/images/svg/history.svg" alt="history" />
                                            <a href="#">
                                                Sản phẩm mới
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="logo">
                                <a href="/">
                                    <img src="/shop_assets/images/logo-mobile.png" alt="" />
                                </a>
                            </div>
                            <div class="right">
                                <div class="user">
                                    <a href="#">
                                        <!-- <span class="cash-amount">Đăng nhập</span> -->
                                        <svg role="presentation" stroke-width="1.5" focusable="false" width="22"
                                            height="22" class="icon icon-account" viewBox="0 0 22 22">
                                            <circle cx="11" cy="7" r="4" fill="none" stroke="currentColor"></circle>
                                            <path d="M3.5 19c1.421-2.974 4.247-5 7.5-5s6.079 2.026 7.5 5"
                                                fill="none" stroke="currentColor" stroke-linecap="round"></path>
                                        </svg>
                                        <span class="cash-amount">1.000.0000</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </fragment>
</template>
<script>
import { ROUTES } from '@config/route';
import { mapGetters } from 'vuex';
export default {
    name : 'HeaderMain',
    computed: {
        cptRoute() {
            return ROUTES;
        },
        ...mapGetters(['carts'])
    },
    data() {
        return {
            totalItem: 0,
        }
    },
    watch: {
        carts: {
            // handler(newVal) {
            //     this.countCart = this.carts.length;
            // },
            // deep: true
            handler(newCarts) {
                if (newCarts.length) {
                    this.totalItem = newCarts.reduce((acc, cur) => {
                        return acc + cur.quantity;
                    }, 0);
                }
            },
            deep: true
        }
    },
    created() {
        this.getCart();
    },
    methods: {
        getCart() {
            if (JSON.parse(localStorage.getItem('carts'))) {
                this.totalItem = JSON.parse(localStorage.getItem('carts')).reduce((acc, cur) => {
                    return acc + cur.quantity;
                }, 0);
            }
        }
    }
}
</script>