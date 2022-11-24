<template>
    <div class="box_san_pham">
        <div class="row product_list">
            <product 
                v-for="(item, index) in listProducts"
                v-bind:key="index"
                v-bind:keyItem="index"
            />
        </div>
    </div>
</template>
<script>
import Product from "@pages/Frontend/pages/Product/Section/item.vue";
export default {
    data: function () {
        return {
            listProducts: [
                '1',
                '2',
                '3',
                '4'
            ],
        };
    },
    name: "ProductList",
    components: {
        Product,
    },
};
</script>