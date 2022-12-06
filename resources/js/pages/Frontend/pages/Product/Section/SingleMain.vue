<template>
    <main class="product-single">
        <div id="content" class="site-content container clearfix">
            <div
                id="primary"
                class="col-xs-12 col-sm-offset-8 col-md-offset-9 content-area"
            >
                <single-infomation v-if="product" :product="product" />
                <single-description />
                <single-relate />
            </div>
        </div>
        <!-- <product-single-size-guilde/> -->
    </main>
</template>
<script>
import SingleInfomation from '@pages/Frontend/pages/Product/Section/SingleInfomation.vue';
import SingleDescription from '@pages/Frontend/pages/Product/Section/SingleDescription.vue';
import SingleRelate from '@pages/Frontend/pages/Product/Section/SingleRelate.vue';
import { ROUTES } from '@config/route';
// import ProductSingleSizeGuilde from './ProductSingleSizeGuilde'
export default {
    name: 'SingleMain',
    components: {
        SingleInfomation,
        SingleDescription,
        SingleRelate
    },
    data() {
        return {
            product: null
        }
    },
    created() {
        this.getProductDetail()
    },
    methods: {
        async getProductDetail() {
            try {
                const { data } = await axios.get(ROUTES.API.PRODUCT_DETAIL(this.$route.params.id));
                this.product = data;
            } catch (error) {
                console.log(error);
            }
        }
    }
}
</script>