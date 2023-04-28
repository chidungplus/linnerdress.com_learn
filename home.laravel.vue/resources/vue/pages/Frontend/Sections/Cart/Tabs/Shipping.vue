<template>
    <div class="customer">
        <label class="checkout-title-text">Thông tin giao hàng</label>
        <div class="pos-rel mt-16">
            <span class="label-sub">Họ và tên</span>
            <input 
                name="name" 
                placeholder="Nhập họ và tên khách hàng" 
                class="form-control" 
                v-model="formData.name"
            />
        </div>
        <div class="pos-rel mt-16">
            <span class="label-sub">Số điện thoại</span>
            <input 
                name="phone" 
                placeholder="Nhập số điện thoại" 
                class="form-control" 
                v-model="formData.phone"
            />
        </div>
        <div class="pos-rel mt-16">
            <span class="label-sub">Địa chỉ</span>
            <input 
                name="address" 
                placeholder="Nhập địa chỉ" 
                class="form-control" 
                v-model="formData.address"
            />
        </div>
        <div class="pos-rel mt-16">
            <span class="label-sub">Ghi chú</span>
            <textarea 
                name="note" 
                placeholder="Nhập nội dung ghi chú" 
                class="form-control"
                v-model="formData.note"
            ></textarea>
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
    created() {
        this.setupData()
    },
    watch: {
        formData: {
            handler(newCarts) {
                this.$emit('getDataShipping', this.formData);
            },
            deep: true
        }
       
    },
    methods: {
        setupData() {
            const shipping = JSON.parse(localStorage.getItem('shipping'));
            if (Object.keys(shipping)) {
                this.formData = {
                    name: shipping.name,
                    phone: shipping.phone,
                    address: shipping.address,
                    note: shipping.note,
                }
            }
        }
    }
};
</script>