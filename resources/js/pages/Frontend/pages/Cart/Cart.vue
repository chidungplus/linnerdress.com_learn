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
                                <div class="item-cart" v-for="(row, index) in list_carts" :key="index">
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
                                            <div class="name">{{ row.productItemSelect.name }}</div>
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
                                                    {{ row.productItemSelect.price | toCurrency}}
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
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="ladiui tab-pane open"
                        v-if="tabActive == 'shipping'"
                    >
                        <shipping-component 
                            @getDataShipping="getDataShipping"
                        />
                    </div>
                    <div
                        class="ladiui tab-pane open"
                        v-if="tabActive == 'payment'"
                    >
                        <payment-component 
                            @tabActive="changeTabActive"
                        />
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
                            <span class="value">{{ this.totalPrice | toCurrency }}</span>
                        </div>
                    </div>
                    <div>
                        <button class="ladiui btn btn-primary btn-sm" @click="onSaveCart">
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
import { ROUTES } from '@config/route.js';
import ShippingComponent from '@pages/Frontend/pages/Cart/Tabs/Shipping.vue';
import PaymentComponent from '@pages/Frontend/pages/Cart/Tabs/Payment.vue';

export default {
    data: function () {
        return {
            errors: [],
            tabActive: "order",
            list_carts: [], 
            // shipping: {},
            totalItem: 0,
            totalPrice: 0,
            maxQty: 10,
            formDataShiping: {}
        };
    },
    computed: {
        ...mapGetters(["carts"])
    },
    components: {
        ShippingComponent,
        PaymentComponent
    },
    created() {
        this.getCart();
    },
    watch: {
        list_carts: {
            handler(newCarts) {
                if (newCarts.length) {
                    this.totalPrice = newCarts.reduce((acc, cur) => {
                        return acc + cur.quantity * cur?.productItemSelect?.price;
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
            if (cart?.productItemSelect?.gallery?.images) {
                // return ASSET.IMG.THUMBNAIL(cart?.product?.thumb?.thumbnail);
                return [...cart?.productItemSelect?.gallery?.images].pop().path;
            }
            return 'admin_assets/images/lJgCRketCQAgpg3CpQiJrnMloxqLgDB36pVvc3jZ.jpeg';
        },
        isActive(value) {
            if (this.tabActive == value) return true;
            else return false;
        },
        changeTabActive(value) {
            if(value != 'order') {
                if( this.list_carts.length === 0 ) {
                    alert('Chưa có sản phẩm trong giỏ hàng.');
                    return false;
                }
                if(value == 'payment' && Object.keys(this.formDataShiping).length === 0 ) {
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
                if(Object.keys(this.formDataShiping).length === 0){
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
        getDataShipping(data) {
            this.formDataShiping = {...data};
        },
        saveShipping() {
            localStorage.setItem('shipping', JSON.stringify(this.formDataShiping));
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
        async onSaveCart() {
            try {
                const payload = {
                    carts: this.list_carts,
                    shipping: this.formDataShiping
                }
                const { data } = await axios.post(ROUTES.API.ADD_CART, payload);
                // if (data) {
                //     this.tabActive = "shipping";   
                // }   
            } catch (error) {
                console.log(error);
            }
        },
    },
};
</script>
<style scoped>
@import '~@css/cart/ladi.css';
@import '~@css/cart/cart.css';
</style>