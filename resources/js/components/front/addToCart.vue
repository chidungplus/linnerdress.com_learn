<template>
    <div class="product-single__addtocart">
        <form
            action=""
            rel-script="product-single-script"
            data-product-id=""
            data-variants=""
        >
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
                                >Tím</span
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
                                option-select__item option-select__item--color
                                tim
                            "
                        >
                            <div class="option-select__inner">
                                <input
                                    type="radio"
                                    name="color"
                                    value="tim"
                                    checked="checked"
                                    data-gallery=""
                                    data-title="Tím"
                                />
                                <span
                                    class="checkmark checkmark--color tim"
                                    style="
                                        background-image: url('https://media.coolmate.me/cdn-cgi/image/width=160,height=160,quality=80,format=auto/uploads/November2022/mau-tim-1-new.jpg');
                                    "
                                ></span>
                            </div>
                        </label>
                    </div>
                </div>
                <div
                    rel-script="product-single-option-item"
                    class="product-single__option is-error"
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
                        <label class="option-select__item m">
                            <div class="option-select__inner">
                                <input
                                    type="radio"
                                    name="size"
                                    value="m"
                                    data-title="M"
                                />
                                <span class="checkmark">M</span>
                            </div>
                        </label>
                        <label class="option-select__item l">
                            <div class="option-select__inner">
                                <input
                                    type="radio"
                                    name="size"
                                    value="l"
                                    data-title="L"
                                />
                                <span class="checkmark">L</span>
                            </div>
                        </label>
                        <label class="option-select__item xl">
                            <div class="option-select__inner">
                                <input
                                    type="radio"
                                    name="size"
                                    value="xl"
                                    data-title="XL"
                                />
                                <span class="checkmark">XL</span>
                            </div>
                        </label>
                    </div>
                </div>
            </div>
            <div class="product-single__actions">
                <div class="product-single__quantity">
                    <div rel-script="quantity-change" class="quantity">
                        <a href="#" class="quantity__reduce">-</a>
                        <input
                            type="number"
                            value="1"
                            max="99"
                            min="1"
                            class="quantity__control"
                        />
                        <a href="#" class="quantity__augure">+</a>
                    </div>
                </div>
                <div class="product-single__button">
                    <a
                        href="#"
                        data-product-id="633e48dae0b15e05787570d6"
                        data-variant-id=""
                        data-quantity="1"
                        rel-script="product-add-to-cart"
                        class="btn"
                        >Chọn kích thước
                    </a>
                </div>
            </div>
        </form>
    </div>
</template>

<script>

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
        
    },
    created() {
        // this.getCart();
    },
    watch: {
       
    },
    methods: {
  
    },
    name: "ProductSingleAddToCart",
};
</script>