<template>
    <div class="ladiui form-group customer-tab">
        <label class="ladiui checkout-title-text">Thông tin giao hàng</label>
        <div class="pos-rel mt-16">
            <span class="ladiui label-sub">Họ và tên</span>
            <input
                class="ladiui form-control"
                name="first_name"
                placeholder="Nhập họ và tên khách hàng"
                value="dũng"
            />
        </div>
        <div class="pos-rel mt-16">
            <span class="ladiui label-sub">Số điện thoại</span>
            <input
                class="ladiui form-control"
                name="phone"
                placeholder="Nhập số điện thoại"
                value="0965346910"
            />
        </div>
        <div class="pos-rel mt-16">
            <span class="ladiui label-sub">Địa chỉ</span>
            <input
                class="ladiui form-control"
                name="address"
                placeholder="Nhập địa chỉ"
                value="102 trần phú hà đông"
            />
        </div>

        <div class="ladiui pos-rel mt-16">
            <span class="ladiui label-sub">Ghi chú</span>
            <textarea
                class="ladiui form-control"
                name="note"
                placeholder="Nhập nội dung ghi chú"
            >d</textarea>
            <div>
                <span class="valid-error"></span>
            </div>
        </div>
    </div>
</template>

<script>
export default {};
</script>

<style></style>
