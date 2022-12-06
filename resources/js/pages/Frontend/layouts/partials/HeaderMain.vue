<template>
    <section id="menu-main" style="padding: 5px 15px">
        <div class="container pc">
            <div class="row">
                <div class="col-md-12">
                    <div class="header">
                        <div class="left">
                            <div class="logo">
                                <router-link
                                    :to="{ 
                                        name: 'home', 
                                    }"
                                >
                                    <img
                                        src="https://linnerdress.com/shop_assets/images/logo-linner-dress.png"
                                        alt=""
                                    />
                                </router-link>
                            </div>
                            <div class="menu-active">
                                <div class="menu-menu-main-container">
                                    <ul id="menu-menu-main" class="menu">
                                        <li
                                            id="menu-item-16"
                                            class="menu-item active"
                                        >
                                        <router-link
                                            :to="{ 
                                                name: 'home', 
                                            }"
                                        >
                                        Trang chủ
                                        </router-link>

                                        </li>
                                        <li id="menu-item-17" class="menu-item">
                                            <a href="/">Váy dạ hội dài</a>
                                        </li>
                                        <li
                                            id="menu-item-491"
                                            class="menu-item"
                                        >
                                            <a href="/">Váy dạ hội đuôi cá</a>
                                        </li>
                                        <li
                                            id="menu-item-649"
                                            class="menu-item"
                                        >
                                            <a href="/">Váy dạ hội Mullet</a>
                                        </li>
                                        <li
                                            id="menu-item-649"
                                            class="menu-item"
                                        >
                                            <a href="/">Váy dạ hội ngắn</a>
                                        </li>
                                        <li
                                            id="menu-item-1062"
                                            class="menu-item"
                                        >
                                            <a href="/">Giới thiệu</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="right">
                            <div class="search-cart-user">
                                <div class="carts-ajax">
                                    <router-link
                                        :to="{ 
                                            name: 'cart', 
                                        }"
                                        class="carts-item"
                                    >
                                        <div class="img">
                                            <img
                                                src="/shop_assets/images/svg/stroke.svg"
                                                alt=""
                                            />
                                        </div>
                                        <span class="number-cart"> {{ countCart }} </span>
                                    </router-link>
                                </div>
                                <div class="user">
                                    <a href="#">
                                        <img
                                            class="no-login avatar-user"
                                            src="/shop_assets/images/svg/user.svg"
                                            alt=""
                                        />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mobile">
            <div class="row">
                <div class="col-12 mobile-col">
                    <div class="menu-mobile">
                        <input type="checkbox" id="input-menu" />
                        <span></span>
                        <span></span>
                        <span></span>
                        <div class="menu-bg">
                            <div class="menu-menu-main-container">
                                <ul class="menu">
                                    <li class="menu-item active">
                                        <router-link
                                            :to="{ 
                                                name: 'home', 
                                            }"
                                        >
                                        Trang chủ
                                        </router-link>
                                        
                                    </li>
                                    <li class="menu-item">
                                        <a href="/">Váy dạ hội dài</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="/">Váy dạ hội đuôi cá</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="/">Váy dạ hội Mullet</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="/">Váy dạ hội ngắn</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="/">Giới thiệu</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="left-right">
                                <div class="left">
                                    <a href="#">
                                        <img
                                            src="https://fivegrains.vn/wp-content/uploads/2022/07/fb.svg"
                                            alt=""
                                        />
                                    </a>
                                    <a href="#">
                                        <img
                                            src="https://fivegrains.vn/wp-content/uploads/2022/07/in.svg"
                                            alt=""
                                        />
                                    </a>
                                    <a href="#">
                                        <img
                                            src="https://fivegrains.vn/wp-content/uploads/2022/07/twi.svg"
                                            alt=""
                                        />
                                    </a>
                                    <a href="#">
                                        <img
                                            src="https://fivegrains.vn/wp-content/uploads/2022/07/ins.svg"
                                            alt=""
                                        />
                                    </a>
                                </div>
                                <div class="right">
                                    <a class="phone_header" href="tel: ">
                                        <img
                                            src="/shop_assets/images/svg/phone.svg"
                                            alt=""
                                        />
                                        <p>035.303.2222</p>
                                    </a>
                                    <div class="time">
                                        <img
                                            src="https://fivegrains.vn/wp-content/uploads/2022/07/stroke_cir.svg"
                                            alt=""
                                        />
                                        <p>9:00 - 23:00</p>
                                    </div>
                                    <a
                                        class="email"
                                        href="mailto: hotro@fivegrains.vn"
                                    >
                                        <img
                                            src="https://fivegrains.vn/wp-content/uploads/2022/07/solid_rec.svg"
                                            alt=""
                                        />
                                        <p>linnerdress@gmail.com</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="logo">
                        <router-link 
                            :to="{ 
                                name: 'home', 
                            }"
                        >
                        
                            <img
                                src="/shop_assets/images/logo_linnerdress.png"
                                alt=""
                            />
                        </router-link>
                    </div>
                    <div class="search-cart-user">
                        <div class="user">
                            <a href="#">
                                <img
                                    class="no-login avatar-user"
                                    src="/shop_assets/images/svg/user.svg"
                                    alt=""
                                />
                            </a>
                        </div>
                        <div class="carts-ajax">
          
                            <router-link 
                                :to="{ 
                                    name: 'cart', 
                                }" class="carts-item"
                            >

                                <div class="img">
                                    <img
                                        src="/shop_assets/images/svg/stroke.svg"
                                        alt=""
                                    />
                                </div>
                                <span class="number-cart"> {{ countCart }} </span>
                            </router-link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
<script>
import { ROUTES } from '@config/route';
import { mapState } from 'vuex';
export default {
    name : 'HeaderMain',
    computed: {
        cptRoute() {
            return ROUTES;
        },
        ...mapState(['carts'])
    },
    data() {
        return {
            countCart: 0
        }
    },
    watch: {
        carts: {
            handler(newVal) {
                this.getCart();
            },
            deep: true
        }
    },
    created() {
        this.getCart();
    },
    methods: {
        getCart() {
            this.countCart = this.carts.length;
        }
    }
}
</script>