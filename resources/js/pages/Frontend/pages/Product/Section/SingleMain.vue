<template>
    <main class="product-single">
        <div id="content" class="site-content container clearfix">
            <div
                id="primary"
                class="col-xs-12 col-sm-offset-8 col-md-offset-9 content-area"
            >
                <single-infomation />
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

// import ProductSingleSizeGuilde from './ProductSingleSizeGuilde'
    export default {
        name: 'SingleMain',
        components: {
            SingleInfomation,
            SingleDescription,
            SingleRelate
        },
    }
</script>