<template>
    <div class="col-xs-6 col-sm-3 item">
        <div class="pro-item" v-if="productItemFirst">
            <div class="pro-thum">
                <router-link
                    :to="cptRoute.WEB.PRODUCT_DETAIL(product.id, product.permalink)"
                >
                    <img
                        width="270"
                        height="325"
                        :src="cptImg"
                        class="
                            attachment-product-thumb
                            size-product-thumb
                            wp-post-image
                            lazyloaded
                        "
                        alt=""
                        loading="lazy"
                    />
                </router-link>
            </div>

            <div class="pro-name">
                <h2>
                    <router-link
                        :to="cptRoute.WEB.PRODUCT_DETAIL(product.id, product.permalink)"
                    >
                        {{ product.name }}
                    </router-link>
                </h2>
            </div>
            <div class="gia_mua_ban">
                <div class="gia gia_ban">
                    <label>Giá bán:</label>
                    <span class="gach-ngang">{{ productItemFirst.cost | toCurrency }}</span>
                    <span class="">{{ productItemFirst.price | toCurrency }}</span>
                </div>
            </div>
            <div class="pro-label"></div>
        </div>
    </div>
</template>
<script>
import { ROUTES } from '@config/route';
import { ASSET } from '@config/asset';

export default {
    name: "Product",
    data() {
        return {
            productItemFirst: {}
        }
    },
    props: {
        product: {
            default: () => {},
        },
    },
    computed: {
        cptRoute() {
            return ROUTES;
        },
        cptImg() {
            if (this.productItemFirst?.thumbnail?.path) {
                // return ASSET.IMG.THUMBNAIL([...this.productItemFirst?.gallery?.images].shift().path);
                return this.productItemFirst?.thumbnail?.path;
                //[...this.productItemFirst?.thumbnail?.path].shift().path;
            }
            return 'admin_assets/images/lJgCRketCQAgpg3CpQiJrnMloxqLgDB36pVvc3jZ.jpeg';
        },
    },
    created() {
        this.productItemFirst = [...this.product?.product_items].shift();
    }
};
</script>