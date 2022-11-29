<template>
    <main class="site-homepage">
        <div class="container">
            <div class="home_box">
                <h2 class="home_title">
                    <a
                        href="/danh-muc/vay-da-hoi-dai"
                        title="Váy dạ hội dài"
                        >Váy dạ hội dài</a
                    >
                </h2>
                <a
                    href="/danh-muc/vay-da-hoi-dai"
                    class="xem_them"
                    title="Váy dạ hội dài"
                    >Xem tất cả</a
                >
                <product-list/>
            </div>
        </div>
    </main>
</template>
<script>
    import ProductList from '@pages/Frontend/pages/Product/Section/list.vue';
    import { API } from '@config/route';
    export default {
        name : 'MainHome',
        components: {
            ProductList,
        },
        created() {
            this.onGetAll();
        },
        methods: {
            async onGetAll() {
                try {
                    const { data } = await axios.get(API.HOME_INDEX);
                    console.log(data);
                } catch (error) {
                    console.log(error);
                }
            }
        }
    }
</script>