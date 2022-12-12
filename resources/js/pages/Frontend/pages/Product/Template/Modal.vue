<template>
	<fragment v-if="isNotEmpty(lastCart)">
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
								{{ `${product.color.name} / ${lastCart.sizeInput}` }}
							</span>
							<span class="notify-product__prices">
								<span>{{ product.price | toCurrency }}</span>
							</span>
						</div>
						</div>
					</div>
					<a href="/cart" class="btn btn--outline btn--small">Xem giỏ hàng</a>
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
			if (this.lastCart?.product?.thumb) {
				return ASSET.IMG.THUMBNAIL(this.lastCart?.product?.thumb?.thumbnail);
			}
			return "/admin_assets/images/lJgCRketCQAgpg3CpQiJrnMloxqLgDB36pVvc3jZ.jpeg";
		},
	},
	data() {
		return {
            lastCart: {},
            product: {},
            isActive: false,
		};
	},
	watch: {
		carts: {
			handler(newVal) {
				this.isActive = true;
				this.lastCart = [...newVal].pop()[0];
				this.product = this.lastCart?.product
				setTimeout(() => {
					this.isActive = false;
				}, 2000);
			},
			deep: true,
		},
	},
	methods: {
		isNotEmpty(obj) {
			return obj.length !== 0;
		}
	}
};
</script>

<style></style>
