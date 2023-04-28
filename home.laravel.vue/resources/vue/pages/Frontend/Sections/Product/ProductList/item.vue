<template>
    <div class="block-item" v-if="productItemFirst">
        <div class="item-content">
            <div class="block-image">
                <router-link
                    :to="cptRoute.WEB.PRODUCT_DETAIL(product.id, product.permalink)"
                >
                    <!-- <div class="item-review-grid">
                        <div class="item-review">
                            <div class="item-review__video">
                                <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="10.5" cy="10.5" r="10.5" fill="black"
                                        fill-opacity="0.3"></circle>
                                    <path
                                        d="M15.25 10.567C15.5833 10.7594 15.5833 11.2406 15.25 11.433L7.75 15.7631C7.41667 15.9556 7 15.715 7 15.3301V6.66987C7 6.28497 7.41667 6.04441 7.75 6.23686L15.25 10.567Z"
                                        fill="white"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="badge-list">
                        <div class="on-save">
                            Giảm 30%
                        </div>
                    </div> -->
                    <div class="item-image">
                        <img 
                            alt=""
                            :src="cptImg"
                        />
                    </div>
                </router-link>
            </div>
            <div class="item-info">
                <div class="item-title">
                    {{ product.name }}
                </div>
                <div class="item-price">
                    <span class="price-promotion"> {{ productItemFirst.cost | toCurrency }} </span>
                    {{ productItemFirst.price | toCurrency }}
                </div>
            </div>
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