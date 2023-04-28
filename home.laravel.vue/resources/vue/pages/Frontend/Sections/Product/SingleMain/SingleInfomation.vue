<template>
    <!-- <section class="product-single__infomation">
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
                        <div class="product-single__options">
                            <div
                                rel-script="product-single-option-item"
                                class="product-single__option"
                            >
                                <div class="option-heading">
                                    <span class="option-heading__title"
                                        >Màu sắc : 
                                        <span
                                            rel="product-option-title-color"
                                            class="text--bold"
                                            > {{ this.formData.color }}</span
                                        >
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
                                                :value="color.value"
                                                @change="changeColor(color.value)"
                                            />
                                            <span
                                                class="checkmark checkmark--color"
                                                v-bind:style="{ backgroundImage: 'url(' + color.avatar + ')' }"
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
                                    <label :class="`option-select__item ${addClassDisableSize(size)}`" v-for="(size, idx) in sizes" :key="idx">
                                        <div class="option-select__inner">
                                            <input
                                                type="radio"
                                                name="size"
                                                :value="size.value"
                                                v-model="formData.size"
                                                @change="changeSize(size.value)"
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
                                    :disabled="isDisableButton"
                                >
                                    {{ textButton }}
                                </button>
                            </div>
                        </div>
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
    </section> -->
    <section id="product-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-single__wrapper">
                        <div class="product-single__images">
                            <div class="thumbnail-slide">
                                <div class="thumbnail-list">
                                    <div class="thumbail-item" v-for="(thumb, idx) in this.productItemSelect?.gallery?.images" :key="idx">
                                        <img 
                                            :src="thumb?.path"
                                            alt=""
                                        />
                                    </div>
                                </div>
                            </div>
                            <div class="image-box">
                                <img 
                                    alt=""
                                    :src="cptImg"
                                />
                            </div>
                        </div>
                        <div class="product-single__info">
                            <div class="product-title">
                                <h1>{{ productItemSelect.name }}</h1>
                            </div>
                            <div class="product-price">
                                <span class="price-promotion"> {{ productItemSelect.cost | toCurrency }} </span>
                                {{ productItemSelect.price | toCurrency }}
                            </div>
                            <div class="size-guilde">
                                <a href="#">
                                    <svg width="30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                        data-inject-url="https://cdn.kiwisizing.com/icons/tape3.min.svg?v=5-inject2"
                                        class="kiwi-svg kiwi-injectable" crossorigin="Anonymous">
                                        <path
                                            d="M498.983 247.322h-56.407c-42.522 0-78.102-19.96-78.102-43.4v-8.678c0-43.4-79.837-78.102-182.237-78.102S0 151.864 0 195.254v121.492c0 43.4 79.837 78.102 182.237 78.102 81.8 0 149.198-22.152 173.006-53.183 14.65 21.223 47.693 35.827 87.333 35.827h56.407c6.942 0 13.017-6.075 13.017-12.15V260.34c0-6.942-6.075-13.017-13.017-13.017zM182.237 134.508c97.193 0 164.88 32.108 164.88 60.746S279.43 256 182.237 256s-164.88-32.108-164.88-60.746 67.688-60.746 164.88-60.746zM321.085 348.25v-14.148c0-5.207-3.47-8.678-8.678-8.678s-8.678 3.47-8.678 8.678v22.693c-7.782 3.247-16.496 6.23-26.034 8.866v-22.88c0-5.207-3.47-8.678-8.678-8.678s-8.678 3.47-8.678 8.678v26.034a11.67 11.67 0 0 0 .05 1.036c-8.233 1.73-16.944 3.207-26.085 4.4v-22.78c0-5.207-3.47-8.678-8.678-8.678s-8.678 3.47-8.678 8.678v24.62a414.49 414.49 0 0 1-26.034 1.326V360.15c0-5.207-3.47-8.678-8.678-8.678s-8.678 3.47-8.678 8.678v17.268a414.53 414.53 0 0 1-26.034-1.326v-24.62c0-5.207-3.47-8.678-8.678-8.678s-8.678 3.47-8.678 8.678v22.78c-9.14-1.183-17.852-2.66-26.085-4.4a10.94 10.94 0 0 0 .051-1.036V342.78c0-5.207-3.47-8.678-8.678-8.678s-8.678 3.47-8.678 8.678v22.88c-9.538-2.635-18.252-5.62-26.034-8.866V334.1c0-5.207-3.47-8.678-8.678-8.678s-8.678 3.47-8.678 8.678v14.148c-16.7-9.767-26.034-20.874-26.034-31.504V229.1c6.853 6.23 15.663 12.006 26.083 17.2-.03.334-.05.675-.05 1.025v34.712c0 5.207 3.47 8.678 8.678 8.678s8.678-3.47 8.678-8.678V253.82l1.832.693.278.1c7.457 2.75 15.452 5.244 23.924 7.448v19.974c0 5.207 3.47 8.678 8.678 8.678s8.678-3.47 8.678-8.678V266.03c8.334 1.664 17.028 3.068 26.034 4.186V299.4c0 5.207 3.47 8.678 8.678 8.678s8.678-3.47 8.678-8.678v-27.407a423.36 423.36 0 0 0 14.133.893l.252.012 6.598.255.17.005 4.88.12v17.443c0 5.207 3.47 8.678 8.678 8.678s8.678-3.47 8.678-8.678v-17.44l5.052-.126 6.85-.267a423.36 423.36 0 0 0 14.133-.893v27.407c0 5.207 3.47 8.678 8.678 8.678s8.678-3.47 8.678-8.678v-29.174c9.006-1.12 17.7-2.522 26.034-4.186v16.004c0 5.207 3.47 8.678 8.678 8.678s8.678-3.47 8.678-8.678V262.06c8.47-2.204 16.465-4.698 23.92-7.447l.282-.102 1.83-.692v28.216c0 5.207 3.47 8.678 8.678 8.678s8.678-3.47 8.678-8.678v-34.712c0-.35-.018-.7-.05-1.025 10.42-5.193 19.23-10.97 26.083-17.2v87.647c-.001 10.63-9.335 21.737-26.035 31.504zm121.5 11.886c-9.1 0-17.858-.92-26.034-2.582v-32.13c0-5.207-3.47-8.678-8.678-8.678s-8.678 3.47-8.678 8.678v27.164c-20.8-7.906-34.712-21.196-34.712-35.842v-77.48c4.914 4.44 10.754 8.424 17.356 11.852v30.915c0 5.207 3.47 8.678 8.678 8.678s8.678-3.47 8.678-8.678v-23.776c5.484 1.744 11.287 3.163 17.356 4.22v19.557c0 5.207 3.47 8.678 8.678 8.678s8.678-3.47 8.678-8.678v-17.597c2.854.156 5.747.24 8.678.24h8.678v95.458h-8.678zm52.068 0H468.6v-95.458h26.034v95.458zm-312.406-130.17c34.712 0 69.424-12.15 69.424-34.712s-34.712-34.712-69.424-34.712-69.424 12.15-69.424 34.712 34.712 34.712 69.424 34.712zm0-52.068c32.108 0 52.068 11.28 52.068 17.356s-19.96 17.356-52.068 17.356-52.068-11.28-52.068-17.356 19.96-17.356 52.068-17.356z">
                                        </path>
                                    </svg>
                                    Hướng dẫn chọn size
                                </a>
                            </div>
                            <div class="product-single__button">
                                <div 
                                    :class="`add-to-cart ${isDisableButton ? 'is-disable' : ''}`"
                                    @click="onAddToCart"
                                >
                                {{ textButton }}
                                </div>
                                
                            </div>
                            <hr class="product-single__separator">
                            <div class="variant-picker__color">
                                <div class="variant-color__heading">
                                    <div class="text-subdued">Màu sắc:</div>
                                    <span>{{ this.formData.color }}</span>
                                </div>
                                <div class="variant-color__option">
                                    <label class="option-select__item" v-for="(color, idx) in colors" :key="idx">
                                        <div class="option-select__inner">
                                            <input 
                                                type="radio"
                                                name="color"
                                                v-model="formData.color"
                                                :value="color.value"
                                                @change="changeColor(color.value)"
                                            />
                                            <span 
                                                class="checkmark" 
                                                v-bind:style="{ backgroundImage: 'url(' + color.avatar + ')' }"
                                            ></span>
                                        </div>
                                    </label>
                    
                                </div>
                            </div>
                            <div :class="`variant-picker__size ${isError ? 'is-error' : ''}`">
                                <div class="variant-size__heading">
                                    <div class="text-subdued">Kích cỡ:</div>
                                    <span>{{ this.formData.size }}</span>
                                </div>
                                <div class="variant-size__option">
                                    <label :class="`option-select__item ${addClassDisableSize(size)}`" v-for="(size, idx) in sizes" :key="idx">
                                        <div class="option-select__inner">
                                            <input 
                                                type="radio"
                                                name="size"
                                                :value="size.value"
                                                v-model="formData.size"
                                                @change="changeSize(size.value)"
                                            />
                                            <span class="checkmark">{{ size.value }}</span>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="product-info__text">
                                <div class="prose">
                                    <ul>
                                        <li>Chất vải kim sa cao cấp, được may lót bên trong là lớp thun lạnh co giãn</li>
                                        <li>Phom tôn dáng, mặc che khuyết điểm cho các chị yêu có phần chưa thon gọn</li>
                                        <li>Giặt khô + là hơi nước để sản phẩm luôn như mới nhé các chị yêu</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                color: "",
                size: "",
                product_item_id: "",
                quantity: 1,
            },
            isError: false,
            maxQty: 1,
            textButton: 'Chọn kích thước',
            productItemSelect: {},
            localProduct: {},
            // disableSizeClass: '',
            isDisableButton: false
        }
    },
    created() {
        scroll();
        this.localProduct = {...this.product};
        // this.productItemSelect = [...this.localProduct?.product_items].shift();
        this.setupData();
    },
    // watch: {
    //     formData: {
    //         handler(newVal) {
    //             if (newVal.sizeInput !== "") {
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
        },
        // cptDisableSizeClass() {
        //     return this.disableSizeClass;
        // }
    },
    methods: {
        setupData() {
            // this.colors = [...this.localProduct?.product_items.map(productItem => {
            //     return {
            //         'product_item_id': productItem.id,
            //         'path': productItem?.avatar?.path
            //     }
            // })];
            this.colors = [...this.localProduct?.colors];
            this.sizes = this.colors?.[0]?.sizes;
            this.formData.color = this.colors?.[0]?.value;
            this.formData.product_item_id = this.sizes?.[0]?.product_item_id;
            this.productItemSelect = this.localProduct.product_items.find(productItem => productItem.id == this.formData.product_item_id);
        },
        onAddToCart() {
            if (!this.formData.size) {
                this.isError = true;
                // $('html, body').animate({
                //     scrollTop: $('.col-xs-12.col-sm-6.anh-sp').height() + $('.info-sp .entry-title').height()
                // }, 300);
            }else {
                this.formData.productItemSelect = this.productItemSelect;
                const data = {...this.formData};
                const currentCarts = JSON.parse(localStorage.getItem('carts')) || [];
                const existingCart = currentCarts.find(cart => cart.product_item_id === data.product_item_id);      
                existingCart ?  existingCart.quantity += data.quantity : currentCarts.push(data);
                localStorage.setItem('carts', JSON.stringify([...currentCarts]));           
                this.$store.dispatch('addCart', JSON.parse(localStorage.getItem('carts')));
            }
        },
        changeColor(value) {
            this.isError = false;
            const color = this.colors.find(color => color.value == value);
            this.sizes = color?.sizes;
            this.formData.color = value;
            // this.formData.size = this.sizes?.[0]?.value;
            this.formData.size = "";
            this.formData.product_item_id = this.sizes?.[0]?.product_item_id;
            this.productItemSelect = this.localProduct.product_items.find(productItem => productItem.id == this.formData.product_item_id);
            this.isDisableButton = false;
            this.setTextButton('Chọn kích thước');
        },
        changeSize(val) {
            this.isError = false;
            const size = this.sizes.find(size => size.value === val);
            this.formData.product_item_id = size?.product_item_id;
            this.productItemSelect = this.localProduct.product_items.find(productItem => productItem.id == this.formData.product_item_id);

            if (this.productItemSelect?.quantity === 0) {
                this.setTextButton('Loại này đang hết hàng');
                this.formData.quantity = 0;
                this.isDisableButton = true;
                this.maxQty = 0;
            }else {
                this.maxQty = this.productItemSelect?.quantity;
                this.formData.quantity = 1;
                this.isDisableButton = false;
                this.setTextButton(`Chọn ${this.productItemSelect?.color?.name} / ${this.formData.size}`)
            }
        },
        count(calculation) {
            calculation == 'reduce' 
                ? (this.formData.quantity > 1 ? this.formData.quantity-- : this.formData.quantity)  
                : (this.formData.quantity < this.maxQty ? this.formData.quantity++ : this.formData.quantity);
        },
        setTextButton(text) {
            this.textButton = text;
        },
        addClassDisableSize(size) {
            return size?.quantity === 0 ? 'is-disabled' : "";
        },
    }
}
</script>