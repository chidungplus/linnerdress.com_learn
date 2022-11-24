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
                                <div class="item-cart" v-for="(row, key) in list_carts" :key="key">
                                    <div class="image-product">
                                        <img
                                            src="https://w.ladicdn.com/ladiui/ladisales/no-image.svg"
                                            alt=""
                                            width="84"
                                            height="84"
                                        />
                                    </div>
                                    <div class="info-product">
                                        <div class="flex-center-between w-100p">
                                            <div class="name">{{ row.name }}</div>
                                            <img
                                                class="cursor-pointer"
                                                src="https://w.ladicdn.com/ladiui/ladisales/icons/icon-delete-cart.svg"
                                                alt=""
                                            />
                                        </div>
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
                                                    {{ row.price | toCurrency}}
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
                                                    value="1"
                                                    style="text-align: center"
                                                    disabled
                                                />
                                                <div class="btn-quantity-img">
                                                    <img
                                                        src="https://w.ladicdn.com/ladiui/ladisales/icons/icon-add-quantity.svg"
                                                        alt=""
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

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
                        <div class="ladiui form-group customer-tab">
                            <label class="ladiui checkout-title-text"
                                >Thông tin giao hàng</label
                            >
                            <div class="pos-rel mt-16">
                                <span class="ladiui label-sub">Họ và tên</span
                                ><input
                                    class="ladiui form-control"
                                    name="first_name"
                                    placeholder="Nhập họ và tên khách hàng"
                                    value="dũng"
                                />
                            </div>
                            <div class="pos-rel mt-16">
                                <span class="ladiui label-sub"
                                    >Số điện thoại</span
                                ><input
                                    class="ladiui form-control"
                                    name="phone"
                                    placeholder="Nhập số điện thoại"
                                    value="0965346910"
                                />
                            </div>
                            <div class="pos-rel mt-16">
                                <span class="ladiui label-sub">Địa chỉ</span
                                ><input
                                    class="ladiui form-control"
                                    name="address"
                                    placeholder="Nhập địa chỉ"
                                    value="102 trần phú hà đông"
                                />
                            </div>

                            <div class="ladiui pos-rel mt-16">
                                <span class="ladiui label-sub">Ghi chú</span
                                ><textarea
                                    class="ladiui form-control"
                                    name="note"
                                    placeholder="Nhập nội dung ghi chú"
                                >
d</textarea
                                >
                                <div><span class="valid-error"></span></div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="ladiui tab-pane open"
                        v-if="tabActive == 'payment'"
                    >
                        <div class="ladiui form-group customer-tab">
                            <label class="ladiui checkout-title-text"
                                >Phương thức thanh toán</label
                            >
                            <div class="payment-method-item select">
                                <div
                                    class="
                                        flex-center-between
                                        head
                                        cursor-pointer
                                    "
                                >
                                    <div class="flex-center">
                                        <img
                                            src="https://w.ladicdn.com/ladiui/ladisales/icons/icon-cod.svg"
                                            alt=""
                                            width="24"
                                            height="24"
                                        />
                                        <div class="ml-16">
                                            <span
                                                >Thanh toán khi giao hàng
                                                (COD)</span
                                            >
                                        </div>
                                    </div>
                                    <div>
                                        <input
                                            type="radio"
                                            class="ladiui form-check-input m-0"
                                            name="radio-payment-method"
                                            checked=""
                                        />
                                    </div>
                                </div>
                                <div class="payment-guide">
                                    <span
                                        >Bạn chỉ phải thanh toán khi nhận được
                                        hàng</span
                                    >
                                </div>
                            </div>
                        </div>
                        <div class="ladiui form-group customer-tab">
                            <div class="payment-title-info">
                                <label class="ladiui checkout-title-text"
                                    >Thông tin người nhận</label
                                ><span class="ladiui link cursor-pointer mt-24"
                                    >Chỉnh sửa</span
                                >
                            </div>
                            <div>
                                <div class="mb-8">
                                    <span>dũng</span><span> - 0965346910</span>
                                </div>
                                <div>
                                    <span>grgwrw</span
                                    ><span
                                        >, Xã Vĩnh Tân, Thị xã Tân Uyên, Bình
                                        Dương</span
                                    >
                                </div>
                            </div>
                        </div>
                        <div class="ladiui form-group customer-tab">
                            <div class="payment-title-info">
                                <label class="ladiui checkout-title-text"
                                    >Thông tin đơn hàng</label
                                ><span class="ladiui link cursor-pointer mt-24"
                                    >Chỉnh sửa</span
                                >
                            </div>
                            <div>
                                <div class="item-cart">
                                    <div class="">
                                        <img
                                            src="https://w.ladicdn.com/ladiui/ladisales/no-image.svg"
                                            alt=""
                                            width="60"
                                            height="60"
                                        />
                                    </div>
                                    <div class="info-product ml-16">
                                        <div class="flex-center-between w-100p">
                                            <div class="name">Váy Dc102</div>
                                            <div class="payment-quantity">
                                                x 1
                                            </div>
                                        </div>
                                        <div class="payment-product-info">
                                            <div class="option option-payment">
                                                <div class="upsell">
                                                    <span></span>
                                                </div>
                                            </div>
                                            <div>
                                                <div
                                                    class="price m-0 text-right"
                                                >
                                                    1,000,000đ
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ladiui coupon-group">
                            <label class="checkout-title-option"
                                >Mã giảm giá</label
                            >
                            <div class="flex-center-between">
                                <input
                                    class="ladiui input-discount"
                                    placeholder="Nhập mã giảm giá"
                                    value=""
                                /><button class="ladiui btn-apdung" disabled="">
                                    Áp dụng
                                </button>
                            </div>
                        </div>
                        <div class="ladiui customer-tab">
                            <div class="flex-center-between">
                                <div><span>Thành tiền</span></div>
                                <div>
                                    <span class="text-title">1,000,000đ</span>
                                </div>
                            </div>
                        </div>
                        <div class="p-0-16">
                            <div class="ladiui invoice">
                                <input
                                    type="checkbox"
                                    class="ladiui checkbox cursor-pointer"
                                />
                                <div class="lable-invoice">
                                    Yêu cầu xuất hóa đơn
                                </div>
                            </div>
                            <div class="ladiui invoice-info hide">
                                <div class="pos-rel mt-16">
                                    <span class="ladiui label-sub"
                                        >Tên công ty</span
                                    ><input
                                        class="ladiui form-control"
                                        name="billing_company"
                                        placeholder="Nhập tên công ty đầy đủ"
                                        value=""
                                    />
                                </div>
                                <div class="pos-rel mt-16">
                                    <span class="ladiui label-sub"
                                        >Email nhận hoá đơn</span
                                    ><input
                                        class="ladiui form-control"
                                        name="billing_email"
                                        placeholder="Nhập email để nhận hoá đơn"
                                        value=""
                                    />
                                </div>
                                <div class="pos-rel mt-16">
                                    <span class="ladiui label-sub"
                                        >Mã số thuế</span
                                    ><input
                                        class="ladiui form-control"
                                        name="billing_tax_code"
                                        placeholder="Nhập mã số thuế"
                                        value=""
                                    />
                                </div>
                                <div class="pos-rel mt-16">
                                    <span class="ladiui label-sub"
                                        >Địa chỉ công ty</span
                                    ><input
                                        class="ladiui form-control"
                                        name="billing_company_address"
                                        placeholder="Nhập địa chỉ đầy đủ công ty"
                                        value=""
                                    />
                                </div>
                            </div>
                        </div>
                        <div class="ladiui secure-group">
                            <div class="title">
                                <img
                                    src="https://w.ladicdn.com/ladiui/ladisales/icons/icon-secure.svg"
                                    alt=""
                                />
                                <div>
                                    <span>Thanh toán an toàn và bảo mật</span>
                                </div>
                            </div>
                            <div class="logo">
                                <img
                                    src="https://w.ladicdn.com/ladiui/ladisales/icons/icon-pci-dss.svg"
                                    alt=""
                                    class="mr-8"
                                /><img
                                    src="https://w.ladicdn.com/ladiui/ladisales/icons/icon-secure-big.svg"
                                    alt=""
                                />
                            </div>
                        </div>
                        <div class="ladiui form-group customer-tab"></div>
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
                                <div class="badge-item">{{totalItem}}</div>
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
import { mapState } from "vuex";

export default {
    data: function () {
        return {
            errors: [],
            tabActive: "order",
            list_carts: {},
            shipping: ['123'],
            totalItem: 0,
            totalPrice: 0,
        };
    },
    computed: {
        ...mapState(["listCarts"]),
    },
    created() {
        this.getCart();
    },
    watch: {
        list_carts: function(newCarts) {
            var items = newCarts;
            var totalItem=0;
            var totalPrice=0;
            var result = Object.keys(items).map(function(key) {
                //console.log(items[key].slmua);
                totalItem=totalItem + 1;  //parseInt(items[key].slmua);
                totalPrice=totalPrice+parseInt(items[key].price);

            });
            this.totalItem=totalItem;
            this.totalPrice=totalPrice;

            // var tasksString = JSON.stringify(newTasks);
            //     localStorage.setItem('tasks', tasksString);
        },
       
    },
    methods: {
        isActive(value) {
            if (this.tabActive == value) return true;
            else return false;
        },
        changeTabActive(value) {
            if(value != 'order'){
                if( Object.keys(this.list_carts).length === 0 ){
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
                if(Object.keys(this.list_carts).length === 0){
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
            let carts = localStorage.getItem("list_carts") || "[]";
            this.list_carts  = JSON.parse(carts)
        },
        saveShipping() {
            alert('Save shipping success.')
            // let uri = `/api/cart`;
            // let test;
            // axios
            //     .post(uri)
            //     .then((response) => {
            //         test = response.data.data;
            //         localStorage.setItem("list_carts", JSON.stringify(test));
            //     })
            //     .catch((error) => {
            //         this.errors = error.response.data.errors.name;
            //     });
        },
        savePayment() {
            alert('Save payment success.')
        }

    },
    name: "Cart",
};
</script>
<style scoped>
    @import '../assets/css/cart/ladi.css';
    @import '../assets/css/cart/cart.css';
</style>