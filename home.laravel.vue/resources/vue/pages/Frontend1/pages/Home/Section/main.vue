<template>
    <main class="site-homepage">
        <div class="container">
            <div class="home_box" v-for="(category, index) in categories" :key="index">
                <fragment v-if="category.products.length > 0">
                    <h2 class="home_title">
                        <router-link
                            :to="`/categories/${category.permalink}`"
                            title="Váy dạ hội dài"
                            >{{ category.name }}
                        </router-link>
                    </h2>
                    <a
                        href="/danh-muc/vay-da-hoi-dai"
                        class="xem_them"
                        title="Váy dạ hội dài"
                        >Xem tất cả</a
                    >
                    <product-list :products="category.products"/>
                </fragment>
            </div>
        </div>
    </main>
</template>
<script>
import ProductList from '@pages/Frontend/pages/Product/Section/list.vue';
import { ROUTES } from '@config/route';

export default {
    name : 'MainHome',
    components: {
        ProductList,
    },
    data() {
        return {
            categories: []
        }
    },
    created() {
        this.onGetAll();
    },
    methods: {
        async onGetAll() {
            try {
                const { data } = await axios.get(ROUTES.API.HOME_INDEX);
                this.categories = data?.data;
            } catch (error) {
                console.log(error);
            }
        }
    }
}
</script>