<template>
    <fragment>
        <header-component />
        <main-component />
        <footer-component />
    </fragment>
</template>

<script>
import FooterComponent from "@pages/Frontend/layouts/partials/Footer";
import HeaderComponent from "@pages/Frontend/layouts/partials/Header.vue";
import MainComponent from "@pages/Frontend/Sections/Home/main.vue";
export default {
    name: "Home",
    components: {
        HeaderComponent,
        MainComponent,
        FooterComponent,
    },
};
</script>
