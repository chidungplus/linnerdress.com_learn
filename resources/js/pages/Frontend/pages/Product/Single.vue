<template>
    <div id="site-wrapper" class="site-wrapper has-topbar">
        <header-component />
        <single-main />
        <footer-component />
        <!-- <button-add-to-cart /> -->
    </div>
</template>

<script>
import HeaderComponent from '@pages/Frontend/layouts/partials/Header.vue';
import SingleMain from '@pages/Frontend/pages/Product/Section/SingleMain.vue';
import FooterComponent from '@pages/Frontend/layouts/partials/Footer';
// import ButtonAddToCart from '@pages/Frontend/pages/Product/Section/buttonAddToCart.vue';
// import { scroll } from "@helper/Scroll";
export default {
    name: 'Single',
    components: {
        HeaderComponent,
        SingleMain,
        FooterComponent,
        // ButtonAddToCart       
    },
	// created() {
	// 	scroll();
	// }
}
</script>