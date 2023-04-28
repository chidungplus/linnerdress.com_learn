<template>
    <main id="cart">
        <div class="container">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <span class="tab-link order">
                        <router-link :to="{ 
                            name: 'home', 
                        }">
                            Home
                        </router-link>
                    </span>
                </li>
                <li class="nav-item">
                    <span 
                        class="tab-link order"
                        :class="{ active: isActive('order') }"
                        @click="changeTabActive('order')"
                    >
                        Giỏ hàng
                    </span>
                </li>
                <li class="nav-item">
                    <span 
                        class="tab-link order"
                        :class="{ active: isActive('shipping') }"
                        @click="changeTabActive('shipping')"
                    >
                        Địa chỉ
                    </span>
                </li>
                <li class="nav-item">
                    <span 
                        class="tab-link order"
                        :class="{ active: isActive('payment') }"
                        @click="changeTabActive('payment')"
                    >
                        Thanh toán
                    </span>
                </li>
            </ul>
            <div class="tab-content">
                <div 
                    class="tab-pane" 
                    v-if="tabActive == 'order'"
                >
                    <div class="order">
                        <label class="checkout-title-text">Sản phẩm</label>
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
                                        <div class="name-product">
                                            {{ row.productItemSelect.name }}
                                        </div>
                                        <img 
                                            class="cursor-pointer"
                                            src="/images/icons/icon-delete-cart.svg"
                                            alt=""
                                            @click="deleteCart(index)"
                                        />
                                    </div>
                                    <div class="product-detail">Màu: {{ row.productItemSelect.color_value }}</div>
                                    <div class="product-detail">Size: {{ row.productItemSelect.size_value }}</div>

                                    <div class="price-quantity">
                                        <div class="price-detail">
                                            <div class="price">
                                                {{ row.productItemSelect.price | toCurrency}}
                                            </div>
                                        </div>
                                        <div class="group-change-quantity product-quantity">
                                            <div 
                                                disabled="disabled" 
                                                class="btn-quantity-img"
                                                @click="changeQuantity(index, 'reduce')"
                                            >
                                                <img src="/images/icons/icon-subtract-quantity.svg"
                                                    alt="" />
                                            </div>
                                            <input 
                                                type="number" 
                                                min="1" 
                                                disabled="disabled" 
                                                name="quantity"
                                                class="input-quantity" 
                                                style="text-align: center" 
                                                :value="`${row.quantity}`"
                                            />
                                            <div 
                                                class="btn-quantity-img"
                                                @click="changeQuantity(index)"
                                            >
                                                <img src="/images/icons/icon-add-quantity.svg"
                                                    alt="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="tab-pane"
                    v-if="tabActive == 'shipping'"
                >
                    <shipping-component 
                        @getDataShipping="getDataShipping"
                    />
                </div>
                <div
                    class="tab-pane"
                    v-if="tabActive == 'payment'"
                >
                    <payment-component 
                        @tabActive="changeTabActive"
                    />
                </div>
            </div>

            <div class="shopping-cart">
                <div class="flex-center">
                    <div class="icon-cart cursor-pointer">
                        <div class="icon-bag">
                            <img src="/images/icons/ldicon-shopping-bag.svg" alt=""
                                width="24" height="24" />
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
                <div v-if="tabActive != 'payment'">
                    <button 
                        id="btn-next" 
                        class="btn btn-primary btn-sm"
                        @click="next"
                    >
                        Tiếp tục
                    </button>
                </div>
                <div v-else>
                    <button 
                        id="btn-next" 
                        class="btn btn-primary btn-sm"
                        @click="onSaveCart"
                    >
                        Xác nhận đặt hàng
                    </button>
                </div>
            </div>
        </div>
    </main>
</template>

<script>
    import { mapGetters } from "vuex";
    import { ASSET } from '@config/asset';
    import { ROUTES } from '@config/route.js';
    import ShippingComponent from '@pages/Frontend/Sections/Cart/Tabs/Shipping.vue';
    import PaymentComponent from '@pages/Frontend/Sections/Cart/Tabs/Payment.vue';
    
    export default {
        data: function () {
            return {
                errors: [],
                tabActive: "order",
                list_carts: [], 
                // shipping: {},
                totalItem: 0,
                totalPrice: 0,
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
                    return [...cart?.productItemSelect?.gallery?.images].shift().path;
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
                        toastr.error('Giỏ hàng của bạn đang trống');
                        return false;
                    }
                    if(value == 'payment') {
                        for (const [key, value2] of Object.entries(this.formDataShiping)) {
                            if(key !== 'note' && value2 == ""){
                                toastr.error('Vui lòng nhập thông tin nhận hàng');
                                return false;
                            }
                        }
                    }
                }
                this.tabActive = value;        
            },
            next() {
                if (this.tabActive == "order") {
                    if(this.list_carts.length === 0){
                        oastr.error('Giỏ hàng của bạn đang trống');
                        return false;
                    }
                    this.tabActive = "shipping";
                } else if (this.tabActive == "shipping") {
                    for (const [key, value2] of Object.entries(this.formDataShiping)) {
                        if(key !== 'note' && value2 == ""){
                            toastr.error('Vui lòng nhập thông tin nhận hàng');
                            return false;
                        }
                    }
                    this.tabActive = "payment";
                }
            },
            getCart() {
                this.list_carts = JSON.parse(localStorage.getItem('carts'));
            },
            changeQuantity(index, calculation) {
                // calculation == 'reduce' 
                //     ? (this.list_carts[index].quantity > 1 ? this.list_carts[index].quantity-- : this.list_carts[index].quantity)  
                //     : (this.list_carts[index].quantity < this.list_carts[index]?.productItemSelect?.quantity ? this.list_carts[index].quantity++ : this.list_carts[index].quantity);
                if(calculation == 'reduce'){
                    if(this.list_carts[index].quantity > 1){
                        this.list_carts[index].quantity--;
                    }else {
                        // this.list_carts[index].quantity;
                        toastr.error('Mua tối thiểu một sản phẩm');
                    }
                }else {
                    if(this.list_carts[index].quantity < this.list_carts[index]?.productItemSelect?.quantity){
                        this.list_carts[index].quantity++;
                    }else {
                        // this.list_carts[index].quantity;
                        toastr.error('Đã đạt giới hạn mua');
                    }
                }
                localStorage.setItem("carts", JSON.stringify([...this.list_carts]));     
            },
            deleteCart(index) {
                delete this.list_carts[index];
                this.list_carts = this.list_carts.filter((cart) => cart !== null);
                localStorage.setItem("carts", JSON.stringify([...this.list_carts]));       
                this.$store.dispatch('addCart', JSON.parse(localStorage.getItem('carts')));
            },
            getDataShipping(data) {
                this.formDataShiping = {...data};
                localStorage.setItem('shipping', JSON.stringify(this.formDataShiping));
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