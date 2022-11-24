<template>
    <div id="site-wrapper" class="site-wrapper has-topbar">
        <v-header />
        <product-single />
        <v-footer />
    </div>
</template>

<script>
    import VHeader from '@pages/Frontend/layouts/partials/Header.vue';
    import ProductSingle from '@pages/Frontend/pages/Product/Section/ProductSingle.vue';
    import VFooter from '@pages/Frontend/layouts/partials/Footer';
    export default {
        name: 'Single',
        components: {
            VHeader,
            ProductSingle,
            VFooter,
        },
    }
</script>