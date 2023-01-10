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
            <div class="col-xs-12 col-sm-6 info-sp" v-if="cptProductItemExist">
                <h1 class="entry-title">{{ productItemSelect.name }}</h1>

                <div class="gia_mua_ban">
                    <div class="gia gia_ban">
                        <label>Giá bán:</label>
                        <span class="gach-ngang">{{ productItemSelect.cost | toCurrency }}</span>
                        <span class="">{{ productItemSelect.price | toCurrency }}</span>
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
                                        <!-- <span
                                            rel="product-option-title-color"
                                            class="text--bold"
                                            >{{ product.color.name }}</span
                                        > -->
                                    </span>
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
                                        "
                                        v-for="(color, idx) in colors"
                                        :key="idx"
                                        ><div class="option-select__inner">
                                            <input
                                                type="radio"
                                                name="color"
                                                v-model="formData.color"
                                                data-gallery=""
                                                :value="color.product_item_id"
                                                @change="changeColorProductItem(color.product_item_id)"
                                            />
                                            <span
                                                class="checkmark checkmark--color"
                                                v-bind:style="{ backgroundImage: 'url(' + color.path + ')' }"
                                            ></span>
                                        </div
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
                                                :value="size.size"
                                                v-model="formData.sizeInput"
                                            />
                                            <span class="checkmark">{{ size.size }}</span>
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
                                    {{ textButton }}
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
        <div class="product-button-fixed">
            <button rel-script="product-button-add-to-cart" class="btn" @click="onAddToCart">
                {{ textButton }}
            </button>
        </div>
    </section>
</template>
<script>
import { ASSET } from '@config/asset';
import { scroll } from "@helper/Scroll";
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
            colors: [],
            formData: {
                sizeInput: "",
                quantity: 1,
                product: this.product,
                color: ""
            },
            isError: false,
            maxQty: 10,
            textButton: 'Chọn kích thước',
            productItemSelect: {},
            localProduct: {}
        }
    },
    created() {
        scroll();
        this.localProduct = {...this.product};
        this.productItemSelect = [...this.localProduct?.product_items].shift();
        this.setupData();
    },
    // watch: {
    //     formData: {
    //         handler(newVal) {
    //             if (newVal !== "") {
    //                 this.textButton = `Chọn ${this.product.color.name} / ${this.formData.sizeInput}`;
    //                 this.isError = false;
    //             };
    //         },
    //         deep: true
    //     }
    // },
    computed: {
        cptImg() {
            if (this.productItemSelect?.gallery?.images) {
                // return ASSET.IMG.THUMBNAIL(this.product?.thumb?.thumbnail);
                return [...this.productItemSelect?.gallery?.images].shift().path;
            }
            return '/admin_assets/images/lJgCRketCQAgpg3CpQiJrnMloxqLgDB36pVvc3jZ.jpeg';
        },
        cptProductItemExist() {
            return Object.keys(this.productItemSelect).length > 0;
        }
    },
    methods: {
        setupData() {
            this.colors = [...this.localProduct?.product_items.map(productItem => {
                return {
                    'product_item_id': productItem.id,
                    'path': productItem?.color_avatar?.path
                }
            })];
            this.sizes = this.productItemSelect?.sizes;
        },
        onAddToCart() {
            if (!this.formData.sizeInput) {
                this.isError = true;
                $('html, body').animate({
                    scrollTop: $('.col-xs-12.col-sm-6.anh-sp').height() + $('.info-sp .entry-title').height()
                }, 300);
            }else {
                const data = {...this.formData};
                const currentCarts = JSON.parse(localStorage.getItem('carts')) || [];
                localStorage.setItem('carts', JSON.stringify([...currentCarts, data]));           
                this.$store.dispatch('addCart', JSON.parse(localStorage.getItem('carts')));
            }
        },
        count(calculation) {
            calculation == 'reduce' 
                ? (this.formData.quantity > 1 ? this.formData.quantity-- : this.formData.quantity)  
                : (this.formData.quantity < this.maxQty ? this.formData.quantity++ : this.formData.quantity);
        },
        changeColorProductItem(id) {
            this.productItemSelect = this.localProduct.product_items.find(productItem => productItem.id == id);
            this.sizes = this.productItemSelect?.sizes;
        }
    }
}
</script>