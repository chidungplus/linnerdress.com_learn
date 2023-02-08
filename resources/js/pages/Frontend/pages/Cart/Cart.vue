<template>
    <div>
        <div class="ladiui checkout-dns">
            <div class="ladiui checkout contain">
                <ul class="ladiui nav nav-tabs">
                    <li class="ladiui nav-item">
                        <span
                            class="ladiui tab-link order"
                        >
                        <router-link :to="{ 
                                name: 'home', 
                            }">
                            Home
                        </router-link>
                        
                            
                        </span>
                    </li>

                    <li class="ladiui nav-item">
                        <span
                            class="ladiui tab-link order"
                            :class="{ active: isActive('order') }"
                            @click="changeTabActive('order')"
                        >
                            Giỏ hàng
                        </span>
                    </li>
                    <li class="ladiui nav-item">
                        <span
                            class="ladiui tab-link shipping"
                            :class="{ active: isActive('shipping') }"
                            @click="changeTabActive('shipping')"
                        >
                            Địa chỉ
                        </span>
                    </li>
                    <li class="ladiui nav-item">
                        <span
                            class="ladiui tab-link payment"
                            :class="{ active: isActive('payment') }"
                            @click="changeTabActive('payment')"
                        >
                            Thanh toán
                        </span>
                    </li>
                </ul>

                <div class="ladiui tab-content" id="myTabContent">
                    <div
                        class="ladiui tab-pane open"
                        v-if="tabActive == 'order'"
                    >
                        <div class="ladiui form-group best-seller">
                            <label class="ladiui checkout-title-text"
                                >Sản phẩm</label
                            >
                            <div class="list-product">
                                <!-- <div class="item-cart" v-for="(row, index) in list_carts" :key="index">
                                    <div class="image-product">
                                        <img
                                            :src="renderImage(row)"
                                            alt=""
                                            width="84"
                                            height="84"
                                        />
                                    </div>
                                    <div class="info-product">
                                        <div class="flex-center-between w-100p">
                                            <div class="name">{{ row.product.name }}</div>
                                            <img
                                                class="cursor-pointer"
                                                src="https://w.ladicdn.com/ladiui/ladisales/icons/icon-delete-cart.svg"
                                                alt=""
                                                @click="deleteCart(index)"
                                            />
                                        </div>
                                        <div class="size">Size: {{ row.sizeInput }}</div>
                                        <div class="tooltip">
                                            <span
                                                class="tooltiptext top"
                                                tooltiptext=""
                                            ></span>
                                            <div class="option"></div>
                                        </div>
                                        <div class="price-quantity">
                                            <div class="price-detail">
                                                <div class="price">
                                                    {{ row.product.price | toCurrency}}
                                                </div>
                                            </div>
                                            <div
                                                class="
                                                    group-change-quantity
                                                    product-quantity
                                                "
                                            >
                                                <div
                                                    class="btn-quantity-img"
                                                    disabled=""
                                                    @click="changeQuantity(index, 'reduce')"
                                                >
                                                    <img
                                                        src="https://w.ladicdn.com/ladiui/ladisales/icons/icon-subtract-quantity.svg"
                                                        alt=""
                                                    />
                                                </div>
                                                <input
                                                    type="number"
                                                    class="input-quantity"
                                                    min="1"
                                                    :value="`${row.quantity}`"
                                                    style="text-align: center"
                                                    disabled
                                                    name="quantity"
                                                />
                                                <div class="btn-quantity-img" @click="changeQuantity(index)">
                                                    <img
                                                        src="https://w.ladicdn.com/ladiui/ladisales/icons/icon-add-quantity.svg"
                                                        alt=""
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->

                                <!-- <div class="ladiui item-product-cn">
                                    <div class="image">
                                        <img
                                            src="https://w.ladicdn.com/ladiui/ladisales/no-image.svg"
                                            alt=""
                                            width="84"
                                            height="84"
                                        />
                                    </div>
                                    <div class="info-product-item">
                                        <div class="name">Váy Dc102</div>
                                        <div class="description style-default">
                                            <div>
                                                <p>ahihi</p>
                                            </div>
                                        </div>
                                        <div class="flex-center-space">
                                            <div class="price">1,000,000đ</div>
                                            <div
                                                class="
                                                    cursor-pointer
                                                    btn-buy-product
                                                "
                                            >
                                                <i class="cta-cart"></i
                                                ><span>Đặt hàng</span>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div
                        class="ladiui tab-pane open"
                        v-if="tabActive == 'shipping'"
                    >
                        
                    </div>
                    <div
                        class="ladiui tab-pane open"
                        v-if="tabActive == 'payment'"
                    >
                        
                    </div>
                </div>

                <div class="shopping-cart" v-if="tabActive != 'payment'">
                    <div class="ladiui flex-center">
                        <div class="icon-cart cursor-pointer">
                            <div class="icon-bag">
                                <img
                                    src="https://w.ladicdn.com/ladiui/ladisales/icons/ldicon-shopping-bag.svg"
                                    alt=""
                                    width="24"
                                    height="24"
                                />
                            </div>
                            <div class="badge-cart">
                                <div class="badge-item">{{ totalItem }}</div>
                            </div>
                        </div>
                        <div class="total-cart ta-l">
                            <div class="title">Tổng đơn hàng</div>
                            <span class="value">{{totalPrice | toCurrency}}</span>
                        </div>
                    </div>
                    <div>
                        <button
                            class="ladiui btn btn-primary btn-sm"
                            id="btn-next"
                            @click="next"
                        >
                            Tiếp tục
                        </button>
                    </div>
                </div>
                <div class="shopping-cart" v-if="tabActive == 'payment'">
                    <div class="">
                        <div class="icon-cart cursor-pointer">Thành tiền</div>
                        <div class="total-cart ta-l">
                            <span class="value">1,000,000đ</span>
                        </div>
                    </div>
                    <div>
                        <button class="ladiui btn btn-primary btn-sm">
                            Xác nhận đặt hàng
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { mapGetters } from "vuex";
import { ASSET } from '@config/asset';

export default {
    data: function () {
        return {
            errors: [],
            tabActive: "order",
            list_carts: [],
            shipping: ['123'],
            totalItem: 0,
            totalPrice: 0,
            maxQty: 10
        };
    },
    computed: {
        ...mapGetters(["carts"])
    },
    created() {
        this.getCart();
    },
    watch: {
        list_carts: {
            handler(newCarts) {
                if (newCarts.length) {
                    this.totalPrice = newCarts.reduce((acc, cur) => {
                        return acc + cur.quantity * cur?.product?.price;
                    }, 0);
                    this.totalItem = newCarts.reduce((acc, cur) => {
                        return acc + cur.quantity;
                    }, 0);
                }
            },
            deep: true
        }
       
    },
    methods: {
        renderImage(cart) {
            if (cart?.product?.thumb) {
                return ASSET.IMG.THUMBNAIL(cart?.product?.thumb?.thumbnail);
            }
            return 'admin_assets/images/lJgCRketCQAgpg3CpQiJrnMloxqLgDB36pVvc3jZ.jpeg';
        },
        isActive(value) {
            if (this.tabActive == value) return true;
            else return false;
        },
        changeTabActive(value) {
            if(value != 'order'){
                if( this.list_carts.length === 0 ){
                    alert('Chưa có sản phẩm trong giỏ hàng.');
                    return false;
                }
                if(value == 'payment' && Object.keys(this.shipping).length === 0 ){
                    alert('Vui lòng nhập thông tin nhận hàng.');
                    return false;
                }
            }
            this.tabActive = value;        
        },
        next() {
            if (this.tabActive == "order") {
                if(this.list_carts.length === 0){
                    alert('Chưa có sản phẩm trong giỏ hàng.');
                    return false;
                }
                this.tabActive = "shipping";
            } else if (this.tabActive == "shipping") {
                if(Object.keys(this.shipping).length === 0){
                    alert('Vui lòng nhập thông tin nhận hàng.');
                    return false;
                }
                this.saveShipping();
                this.tabActive = "payment";
            }
        },
        getCart() {
            this.list_carts = JSON.parse(localStorage.getItem('carts'));
        },
        saveShipping() {
            alert('Save shipping success.')
            // let uri = `/api/cart`;
            // let test;
            // axios
            //     .post(uri)
            //     .then((response) => {
            //         test = response.data.data;
            //         localStorage.setItem("carts", JSON.stringify(test));
            //     })
            //     .catch((error) => {
            //         this.errors = error.response.data.errors.name;
            //     });
        },
        changeQuantity(index, calculation) {
            calculation == 'reduce' 
                ? (this.list_carts[index].quantity > 1 ? this.list_carts[index].quantity-- : this.list_carts[index].quantity)  
                : (this.list_carts[index].quantity < this.maxQty ? this.list_carts[index].quantity++ : this.list_carts[index].quantity);
        },
        deleteCart(index) {
            delete this.list_carts[index];
            this.list_carts = this.list_carts.filter((cart) => cart !== null);
            localStorage.setItem("carts", JSON.stringify([...this.list_carts]));       
            this.$store.dispatch('addCart', JSON.parse(localStorage.getItem('carts')));
        },
        savePayment() {
            alert('Save payment success.')
        }

    },
    name: "Cart",
};
</script>
<style scoped>
@import '~@css/cart/ladi.css';
@import '~@css/cart/cart.css';
</style>