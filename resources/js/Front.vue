<template>
    <div>
        <!-- <header-front /> -->
        <router-view></router-view>
        <!-- <footer-front /> -->
    </div>   
</template>

<script>
    import HeaderFront from './components/Front/Header';
    import FooterFront from './components/Front/Footer';
    export default {
        name: 'App',
        components: {
            HeaderFront,
            FooterFront,
        },
    }
</script>