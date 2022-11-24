<template>
    <main class="product-single">
        <div id="content" class="site-content container clearfix">
            <div
                id="primary"
                class="col-xs-12 col-sm-offset-8 col-md-offset-9 content-area"
            >
        
            <product-single-infomation />

                
            </div>
        </div>
        <!-- <product-single-size-guilde/> -->
    </main>
</template>
<script>
import ProductSingleInfomation from './ProductSingleInfomation.vue'
import ProductSingleSizeGuilde from './ProductSingleSizeGuilde'
    export default {
        name: 'ProductSingle',
        components: {
            ProductSingleInfomation,
            ProductSingleSizeGuilde
        },
    }
</script>