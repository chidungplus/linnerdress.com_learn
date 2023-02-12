<template>
    <div class="ladiui form-group customer-tab">
        <label class="ladiui checkout-title-text">Thông tin giao hàng</label>
        <div class="pos-rel mt-16">
            <span class="ladiui label-sub">Họ và tên</span>
            <input
                class="ladiui form-control"
                name="name"
                placeholder="Nhập họ và tên khách hàng"
                v-model="formData.name"
            />
        </div>
        <div class="pos-rel mt-16">
            <span class="ladiui label-sub">Số điện thoại</span>
            <input
                class="ladiui form-control"
                name="phone"
                placeholder="Nhập số điện thoại"
                v-model="formData.phone"
            />
        </div>
        <div class="pos-rel mt-16">
            <span class="ladiui label-sub">Địa chỉ</span>
            <input
                class="ladiui form-control"
                name="address"
                placeholder="Nhập địa chỉ"
                v-model="formData.address"
            />
        </div>

        <div class="ladiui pos-rel mt-16">
            <span class="ladiui label-sub">Ghi chú</span>
            <textarea
                class="ladiui form-control"
                name="note"
                placeholder="Nhập nội dung ghi chú"
                v-model="formData.note"
            ></textarea>
            <div>
                <span class="valid-error"></span>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() { 
        return {
            formData: {
                name: '',
                phone: '',
                address: '',
                note: '',
            }
        }
    },
    watch: {
        formData: {
            handler(newCarts) {
                this.$emit('getDataShipping', this.formData);
            },
            deep: true
        }
       
    },
};
</script>

<style></style>
