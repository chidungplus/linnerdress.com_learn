<template>
    <fragment>
        <div class="ladiui form-group customer-tab">
            <label class="ladiui checkout-title-text">
                Phương thức thanh toán
            </label>
            <div class="payment-method-item select">
                <div class="flex-center-between head cursor-pointer">
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
                <label class="ladiui checkout-title-text">
                    Thông tin người nhận
                </label>
                <span class="ladiui link cursor-pointer mt-24">
                    <button @click="changeTabActive('shipping')">Chỉnh sửa</button>
                </span>
            </div>
            <div>
                <div class="mb-8">
                    <span>{{ this.shipping.name }}</span><span> - {{ this.shipping.phone }}</span>
                </div>
                <div>
                    <span>{{ this.shipping.address }}</span>
                </div>
            </div>
        </div>
        <div class="ladiui form-group customer-tab">
            <div class="payment-title-info">
                <label class="ladiui checkout-title-text">
                    Thông tin đơn hàng
                </label>
                <span class="ladiui link cursor-pointer mt-24">
                    <button @click="changeTabActive('order')">Chỉnh sửa</button>
                </span>
            </div>
            <div>
                <div class="item-cart" v-for="(item, index) in list_carts" :key="index">
                    <div class="">
                        <img
                            :src="renderImage(item)"
                            alt=""
                            width="60"
                            height="60"
                        />
                    </div>
                    <div class="info-product ml-16">
                        <div class="flex-center-between w-100p">
                            <div class="name">
                                {{ item.productItemSelect.name }}
                                <br>
                                <span>Size: {{ item.sizeInput }}</span>
                            </div>
                            <div class="payment-quantity">
                                x {{ item.quantity }}
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
                                    {{ item.productItemSelect.price | toCurrency}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="ladiui coupon-group">
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
        </div> -->
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
    </fragment>
</template>

<script>
export default {
    props: {
        carts: {
            default: () => []
        },
    },
    data() {
        return {
            list_carts: [],
            shipping: {},
            totalPrice: 0
        }
    },
    async created() {
        this.list_carts = JSON.parse(localStorage.getItem('carts'));
        this.shipping = JSON.parse(localStorage.getItem('shipping'));
    },
    methods: {
        renderImage(cart) {
            if (cart?.productItemSelect?.gallery?.images) {
                // return ASSET.IMG.THUMBNAIL(cart?.product?.thumb?.thumbnail);
                return [...cart?.productItemSelect?.gallery?.images].pop().path;
            }
            return 'admin_assets/images/lJgCRketCQAgpg3CpQiJrnMloxqLgDB36pVvc3jZ.jpeg';
        },
        changeTabActive(value) {
            this.$emit('tabActive', value);      
        },
    }
}
</script>

<style>

</style>