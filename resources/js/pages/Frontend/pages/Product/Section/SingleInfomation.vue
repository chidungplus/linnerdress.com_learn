<template>
    <section class="product-single__infomation">
        <div class="row">
            <div class="col-xs-12 col-sm-6 anh-sp">
                <img
                    width="768"
                    height="1024"
                    :src="cptImg"
                    class="attachment-full size-full wp-post-image lazyloaded"
                />
            </div>
            <div class="col-xs-12 col-sm-6 info-sp">
                <h1 class="entry-title">{{ product.name }}</h1>

                <div class="gia_mua_ban">
                    <div class="gia gia_ban">
                        <label>Giá bán:</label>
                        <span class="gach-ngang">{{ product.cost | toCurrency }}</span>
                        <span class="">{{ product.price | toCurrency }}</span>
                    </div>
                </div>
                <div class="product-single__addtocart">
                    <!-- <form
                        action=""
                        rel-script="product-single-script"
                        data-product-id=""
                        data-variants=""
                    > -->
                        <div class="product-single__options">
                            <div
                                rel-script="product-single-option-item"
                                class="product-single__option"
                            >
                                <div class="option-heading">
                                    <span class="option-heading__title"
                                        >Màu sắc:
                                        <span
                                            rel="product-option-title-color"
                                            class="text--bold"
                                            >{{ product.color.name }}</span
                                        ></span
                                    >
                                </div>
                                <div
                                    data-option-id="color"
                                    data-option-index="1"
                                    class="option-select option-select--color"
                                >
                                    <label
                                        class="
                                            option-select__item
                                            option-select__item--color
                                            tim
                                        "
                                        ><div class="option-select__inner">
                                            <input
                                                type="radio"
                                                name="color"
                                                value="tim"
                                                checked="checked"
                                                data-gallery=""
                                                data-title="Tím"
                                            />
                                            <span
                                                class="
                                                    checkmark checkmark--color
                                                    tim
                                                "
                                                style="
                                                    background-image: url('https://media.coolmate.me/cdn-cgi/image/width=160,height=160,quality=80,format=auto/uploads/November2022/mau-tim-1-new.jpg');
                                                "
                                            ></span></div
                                    ></label>
                                </div>
                            </div>
                            <div
                                rel-script="product-single-option-item"
                                :class="`product-single__option ${isError ? 'is-error' : ''}`"
                            >
                                <div class="option-heading">
                                    <span class="option-heading__title"
                                        >Kích thước:
                                        <span
                                            rel="product-option-title-size"
                                            class="text--bold"
                                        ></span
                                    ></span>
                                    <a
                                        href="#size-guide"
                                        rel-script="toggle-size-guide"
                                        class="option-heading__sizeguide"
                                    >
                                        Hướng dẫn chọn size
                                    </a>
                                </div>
                                <div
                                    data-option-id="size"
                                    data-option-index="2"
                                    class="option-select option-select--size"
                                >
                                    <label class="option-select__item" v-for="(size, idx) in sizes" :key="idx">
                                        <div class="option-select__inner">
                                            <input
                                                type="radio"
                                                name="size"
                                                :value="size.key"
                                                v-model="formData.sizeInput"
                                            />
                                            <span class="checkmark">{{ size.value }}</span>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="product-single__actions">
                            <div class="product-single__quantity">
                                <div
                                    rel-script="quantity-change"
                                    class="quantity"
                                >
                                    <span class="quantity__reduce" @click="count('reduce')">-</span>
                                    <input
                                        type="number"
                                        value="1"
                                        class="quantity__control"
                                        v-model="formData.quantity"
                                    />
                                    <span class="quantity__augure" @click="count('augure')">+</span>
                                </div>
                            </div>
                            <div class="product-single__button">
                                <button
                                    data-product-id="633e48dae0b15e05787570d6"
                                    data-variant-id=""
                                    data-quantity="1"
                                    rel-script="product-add-to-cart"
                                    class="btn"
                                    @click="onAddToCart"
                                    >
                                    Chọn kích thước
                                </button>
                            </div>
                        </div>
                    <!-- </form> -->
                </div>

                <div class="product-single__policy">
                    <div class="product-policy">
                        <div class="product-policy__item">
                            <div class="product-policy__icon">
                                <img
                                    src="https://www.coolmate.me/images/icons/icon4.svg"
                                    alt="Miễn phí vận chuyển"
                                />
                            </div>
                            <span class="product-policy__title">
                                Miễn phí vận chuyển <br />
                                mọi đơn hàng
                            </span>
                        </div>
                        <div class="product-policy__item">
                            <div class="product-policy__icon">
                                <img
                                    src="https://www.coolmate.me/images/icons/icon3.svg"
                                    alt="Đổi trả với số điện thoại"
                                />
                            </div>
                            <span class="product-policy__title">
                                Kiểm tra hàng <br />trước khi thanh toán
                            </span>
                        </div>

                        <div class="product-policy__item">
                            <div class="product-policy__icon">
                                <img
                                    src="https://www.coolmate.me/images/icons/icon6.svg"
                                    alt="Giao hàng"
                                />
                            </div>
                            <span class="product-policy__title">
                                Giao hàng nhanh <br />toàn quốc
                            </span>
                        </div>
                    </div>
                </div>

                <div class="box_lien_he">
                    <h2 class="box_title">Thông tin mua hàng</h2>
                    <div class="box_content">
                        <p class="hotline_2">
                            <label>Hotline: </label><span>035.303.2222</span>
                        </p>
                        <p>
                            <label>Địa chỉ: </label>Số 39, Ngõ 165 Thái Hà, Đống
                            Đa, Hà Nội.
                        </p>
                        <p><label>E-mail: </label>linnerdress@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
<script>
import { ASSET } from '@config/asset';

export default {
    name: 'SingleInfomation',
    props: {
        product: {
            default: () => {}
        }
    },
    data() {
        return {
            sizes: [],
            formData: {
                sizeInput: "",
                quantity: 1
            },
            isError: false,
            maxQty: 10
        }
    },
    created() {
        this.setSize();
    },
    computed: {
        cptImg() {
            return ASSET.IMG.THUMBNAIL(this.product.thumb.thumbnail);
        }
    },
    methods: {
        setSize() {
            this.sizes = [
                { key: 'm', value: 'M' },
                { key: 'l', value: 'L' },
                { key: 'xl', value: 'XL' }
            ]
        },
        onAddToCart() {
            if (!this.formData.sizeInput) {
                this.isError = true;
            }else {
                this.isError = false;
            }
        },
        count(calculation) {
            calculation == 'reduce' 
                ? (this.formData.quantity > 1 ? this.formData.quantity-- : this.formData.quantity)  
                : (this.formData.quantity < this.maxQty ? this.formData.quantity++ : this.formData.quantity);
        }
    }
}
</script>