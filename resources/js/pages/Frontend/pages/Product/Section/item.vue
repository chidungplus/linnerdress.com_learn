<template>
    <div class="col-xs-6 col-sm-3 item">
        <div class="pro-item">
            <div class="pro-thum">
                <router-link
                    :to="{
                        name: 'product-single',
                        params: {
                            permalink: 'this-is-permalink',
                            title: 'Váy Dạ Hội',
                        },
                    }"
                >
                    <img
                        width="270"
                        height="325"
                        src="https://linnerdress.com/storage/images/UiunuPmoVfGAvusjlW61UB8vL333hRTxCp1ocDxW_450x600.jpg"
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
                        :to="{
                            name: 'product-single',
                            params: {
                                id: '/san-pham/permalink',
                                title: 'Váy Dạ Hội',
                            },
                        }"
                    >
                        Váy Dạ Hội Dài VD185 - Trắng
                    </router-link>
                </h2>
            </div>
            <div class="gia_mua_ban">
                <div class="gia gia_ban">
                    <label>Giá bán:</label>
                    <span class="gach-ngang">2,500,000đ</span>
                    <span class="">1,489,000đ</span>
                </div>
            </div>
            <div class="pro-label"></div>
        </div>
    </div>
</template>
<script>
export default {
    props: {
        keyItem: {
            type: Number,
            default: null,
        },
    },
    name: "Product",
};
</script>