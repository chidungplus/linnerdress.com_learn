<template>
    <fragment>
        <header-component />
        <main>
            <section id="about">
                <div class="container">
                    <h1>Giới thiệu</h1>
                    <p>
                        Chào mừng đến với Linnerdress - nơi cung cấp cho bạn những bộ váy dạ hội sang trọng và đẳng cấp.
                    </p>
                    <p>
                        Chúng tôi hiểu rằng mỗi người phụ nữ đều muốn trở thành người đẹp nhất và tự tin nhất trong bất kỳ sự kiện nào mình tham gia. Vì thế, Linnerdress đã được tạo ra với mục đích giúp bạn tìm kiếm những bộ váy dạ hội tuyệt đẹp, phù hợp với phong cách và cá tính của riêng bạn.
                    </p>
                    <p>
                        Chúng tôi luôn đảm bảo chất lượng và sự đa dạng về kiểu dáng, màu sắc và kích cỡ để đáp ứng nhu cầu của khách hàng. Từ những chiếc váy dài, xoè đến những chiếc váy ngắn, đơn giản hay phức tạp, chúng tôi cam kết sẽ đem lại cho bạn sự hài lòng tuyệt đối.
                    </p>
                    <p>
                        Đội ngũ nhân viên chuyên nghiệp của chúng tôi luôn sẵn sàng hỗ trợ và tư vấn cho bạn trong quá trình chọn lựa sản phẩm. Chúng tôi tin rằng, với sự đam mê và tâm huyết của mình, Linnerdress sẽ trở thành địa chỉ tin cậy và lý tưởng cho những khách hàng yêu thích thời trang và sự sang trọng.
                    </p>
                    <p>
                        Hãy ghé thăm Linnerdress ngay hôm nay để tìm cho mình chiếc váy dạ hội hoàn hảo và trở thành người phụ nữ tự tin nhất trong sự kiện sắp tới của bạn!
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
    name: "About",
    components: {
        HeaderComponent,
        FooterComponent,
    },
};
</script>
