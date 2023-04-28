<template>
    <div class="box_san_pham">
        <div class="row product_list">
            <product
                v-for="(product, index) in products"
                :key="index"
                :product="product"
            />
        </div>
    </div>
</template>
<script>
import Product from "@pages/Frontend/pages/Product/Section/item.vue";
export default {
    data: function () {
        return {};
    },
    name: "ProductList",
    components: {
        Product,
    },
    props: {
        products: {
            default: () => []
        }
    }
};
</script>