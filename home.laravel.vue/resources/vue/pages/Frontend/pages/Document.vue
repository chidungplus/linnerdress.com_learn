<template>
    <fragment>
        <header-component />
        <div>Document</div>
        <footer-component />
    </fragment>
</template>

<script>
import FooterComponent from "@pages/Frontend/layouts/partials/Footer";
import HeaderComponent from "@pages/Frontend/layouts/partials/Header.vue";
export default {
    name: "Document",
    components: {
        HeaderComponent,
        FooterComponent,
    },
};
</script>
