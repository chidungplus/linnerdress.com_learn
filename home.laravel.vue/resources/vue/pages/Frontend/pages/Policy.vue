<template>
    <fragment>
        <header-component />
        <main>
            <section id="policy">
                <div class="container">
                    <h1>Chính sách của chúng tôi</h1>
                    <p>
                        Đổi trả hàng: Chúng tôi cam kết đổi trả hàng trong vòng 30 ngày kể từ ngày mua hàng, với điều kiện sản phẩm không bị hư hỏng và vẫn còn nguyên tem mác.
                    </p>
                    <p>
                        Chất lượng sản phẩm: Chúng tôi cam kết sản phẩm được bán trên trang web đều là sản phẩm chất lượng và được làm từ các nguyên liệu tốt nhất. Nếu quý khách hàng nhận được sản phẩm bị lỗi hoặc không đúng mô tả, xin vui lòng liên hệ với chúng tôi để được hỗ trợ và giải quyết.
                    </p>
                    <p>
                        An toàn thông tin: Chúng tôi cam kết bảo mật thông tin của khách hàng và sử dụng các phương thức thanh toán an toàn để đảm bảo sự bảo vệ thông tin tài khoản của quý khách hàng.
                    </p>
                    <p>
                        Phí vận chuyển: Chúng tôi tính phí vận chuyển dựa trên khoảng cách và khối lượng của sản phẩm. Quý khách hàng có thể xem chi tiết phí vận chuyển trong trang thanh toán.
                    </p>
                    <p>
                        Chăm sóc khách hàng: Chúng tôi luôn sẵn sàng hỗ trợ và tư vấn cho quý khách hàng trong quá trình chọn lựa sản phẩm và mua hàng. Nếu quý khách hàng có bất kỳ thắc mắc hay yêu cầu nào, xin vui lòng liên hệ với chúng tôi qua email hoặc hotline để được hỗ trợ.
                    </p>
                    <p>
                        Chúng tôi hy vọng rằng chính sách của chúng tôi sẽ giúp quý khách hàng cảm thấy yên tâm và tin tưởng khi mua sắm trên trang web của chúng tôi.
                    </p>
                </div>
            </section>
        </main>
        <footer-component />
    </fragment>
</template>

<script>
import FooterComponent from "@pages/Frontend/layouts/partials/Footer";
import HeaderComponent from "@pages/Frontend/layouts/partials/Header.vue";
export default {
    name: "Policy",
    components: {
        HeaderComponent,
        FooterComponent,
    },
};
</script>
