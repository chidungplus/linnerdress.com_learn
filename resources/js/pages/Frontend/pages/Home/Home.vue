<template>
  <div id="site-wrapper" class="site-wrapper has-topbar">
    <header-component />
    <main-component />
    <footer-component />
  </div>
</template>

<script>
import FooterComponent from "@pages/Frontend/layouts/partials/Footer";
import HeaderComponent from "@pages/Frontend/layouts/partials/Header.vue";
import MainComponent from "@pages/Frontend/pages/Home/Section/main.vue";
import { scroll } from "@helper/Scroll";
export default {
  name: "Home",
  components: {
    HeaderComponent,
    MainComponent,
    FooterComponent,
  },
  created() {
    scroll();
  },
};
</script>
