<template>
	<fragment v-if="isActive">
		<div :class="`notify ${isActive ? 'is-active success' : ''}`">
			<a class="notify__close">x</a>
			<div class="notify__wrapper">
				<div class="notify__content">
					<h4 class="notify__message"></h4>
					<div class="notify__product">
						<div class="notify-product">
						<div class="notify-product__thumbnail">
							<img :src="cptImg" alt="Quần nỉ nam Jogger Casual co giãn" />
						</div>
						<div class="notify-product__content">
							<span class="notify-product__title">
								{{ product.name }}
							</span>
							<span class="notify-product__option">
								{{ `${product.color_value} /${product.size_value}` }}
							</span>
							<span class="notify-product__prices">
								<span>{{ product.price | toCurrency }}</span>
							</span>
						</div>
						</div>
					</div>
					<router-link
						:to="{ 
							name: 'cart', 
						}"
						class="btn btn--outline btn--small"
					>
					Xem giỏ hàng
					</router-link>
					</div>
			</div>
		</div>
	</fragment>
</template>

<script>
import { mapGetters } from "vuex";
import { ASSET } from '@config/asset';
export default {
	computed: {
		...mapGetters(["carts"]),
		cptImg() {
			if (this.lastCart?.productItemSelect?.gallery?.images) {
				// return ASSET.IMG.THUMBNAIL([...this.lastCart?.productItemSelect?.gallery?.images].pop().path);
				return [...this.lastCart?.productItemSelect?.gallery?.images].shift().path;
			}
			return "/admin_assets/images/lJgCRketCQAgpg3CpQiJrnMloxqLgDB36pVvc3jZ.jpeg";
		},
		
	},
	data() {
		return {
            lastCart: {},
            product: {},
            sizeInput: "",
            isActive: false,
		};
	},
	watch: {
		carts: {
			handler(newVal) {
				this.isActive = true;
				this.lastCart = [...newVal].pop();
                // console.log(this.lastCart);
				this.product = this.lastCart?.productItemSelect;
				setTimeout(() => {
					this.isActive = false;
				}, 2000);
			},
			deep: true,
		},
	},
};
</script>

<style></style>
