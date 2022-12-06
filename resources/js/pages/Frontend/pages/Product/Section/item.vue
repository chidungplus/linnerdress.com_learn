<template>
    <div class="col-xs-6 col-sm-3 item">
        <div class="pro-item">
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
                    <span class="gach-ngang">{{ product.cost | toCurrency }}</span>
                    <span class="">{{ product.price | toCurrency }}</span>
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
            return ASSET.IMG.THUMBNAIL(this.product.thumb.thumbnail);
        }
    }
};
</script>