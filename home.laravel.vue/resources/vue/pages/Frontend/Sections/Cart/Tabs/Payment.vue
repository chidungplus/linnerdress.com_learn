<template>
    <div class="shipping">
        <label class="checkout-title-text">
            Phương thức thanh toán
        </label>
        <div class="payment-method-item select">
            <div class="flex-center-between head cursor-pointer">
                <div class="flex-center">
                    <img src="/images/icons/icon-cod.svg" alt="" width="24"
                        height="24" />
                    <div class="ml-16">
                        <span>Thanh toán khi giao hàng (COD)</span>
                    </div>
                </div>
                <div>
                    <input type="radio" name="radio-payment-method" checked="checked"
                        class="form-check-input m-0" />
                </div>
            </div>
            <div class="payment-guide">
                <span>Bạn chỉ phải thanh toán khi nhận được
                    hàng</span>
            </div>
        </div>
        <div class="payment-title-info">
            <label class="checkout-title-text">
                Thông tin người nhận
            </label>
            <span class="link cursor-pointer mt-24"><button @click="changeTabActive('order')">Chỉnh sửa</button></span>
        </div>
        <div>
            <div class="mb-8">
                <span>{{ this.shipping.name }}</span><span> - {{ this.shipping.phone }}</span>
            </div>
            <div><span>{{ this.shipping.address }}</span></div>
        </div>
        <div class="payment-title-info">
            <label class="checkout-title-text">
                Thông tin đơn hàng
            </label>
            <span class="link cursor-pointer mt-24"><button @click="changeTabActive('shipping')">Chỉnh sửa</button></span>
        </div>
        <div>
            <div class="item-cart" v-for="(item, index) in list_carts" :key="index">
                <div class="image-product">
                    <img 
                        :src="renderImage(item)"
                        alt=""
                        width="84"
                        height="84"
                    />
                </div>
                <div class="info-product ml-16">
                    <div class="flex-center-between w-100p">
                        <div class="name">
                            {{ item.productItemSelect.name }}
                        </div>
                        <div class="payment-quantity">x {{ item.quantity }}</div>
                    </div>
                    <div class="product-detail">
                        Mầu: {{ item.color }}
                    </div>
                    <div class="product-detail">
                        Size: {{ item.size }}
                    </div>
                    <div class="flex-center-between w-100p">
                        <div class="text-right">
                            Thành tiền:
                        </div>
                        <div class="price m-0 text-right">
                            {{ item.productItemSelect.price | toCurrency}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="invoice">
            <input type="checkbox" class="checkbox cursor-pointer" />
            <div class="lable-invoice">
                Yêu cầu xuất hóa đơn
            </div>
        </div>
        <div class="secure-group">
            <div class="title">
                <img src="/images/icons/icon-secure.svg" alt="" />
                <div>
                    <span>Thanh toán an toàn và bảo mật</span>
                </div>
            </div>
            <div class="logo">
                <img src="/images/icons/icon-pci-dss.svg" alt=""
                    class="mr-8" />
                <img src="/images/icons/icon-secure-big.svg" alt="" />
            </div>
        </div>
    </div>
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
                return [...cart?.productItemSelect?.gallery?.images].shift().path;
            }
            return 'admin_assets/images/lJgCRketCQAgpg3CpQiJrnMloxqLgDB36pVvc3jZ.jpeg';
        },
        changeTabActive(value) {
            this.$emit('tabActive', value);      
        },
    }
}
</script>