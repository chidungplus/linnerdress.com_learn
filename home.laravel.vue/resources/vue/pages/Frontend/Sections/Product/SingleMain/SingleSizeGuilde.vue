<template>
    <div
        rel-script="size-guide-popup"
        class="popup popup-enter-active popup-enter-to"
        style="transition: all 0.3s ease 0s"
    >
        <div rel-script="size-guild-close" class="backdrop"></div>
        <div class="popup-body" style="touch-action: pan-x">
            <span rel-script="size-guild-close" class="close-popup">✕</span>
            <div class="popup__wrapper">
                <div class="size-guide">
                    <div class="size-guide__head">
                        <a
                            href="#size-suggestion"
                            rel-script="size-guide-tabs"
                            class="size-guide__switch"
                        >
                            Hướng dẫn chọn size
                        </a>
                        <a
                            href="#size-table"
                            rel-script="size-guide-tabs"
                            class="size-guide__switch is-current"
                        >
                            Bảng size
                        </a>
                    </div>
                    <div class="size-guide__content">
                        <div
                            id="size-suggestion"
                            data-height="162"
                            data-weight="53"
                            data-body="normal"
                            class="size-suggestion-content"
                            style="display: none"
                        >
                            <form
                                action=""
                                rel-script="size-suggestion"
                                data-sizechart="jogger-pants"
                            >
                                <div class="size-suggestion">
                                    <div
                                        rel-script="size-suggestion-field"
                                        class="size-suggestion__field"
                                    >
                                        <div class="size-suggestion__label">
                                            <span>Chiều cao</span>
                                            <span
                                                rel-script="size-suggestion-label"
                                                data-label="cm"
                                                class="size-suggestion__size"
                                                >162cm</span
                                            >
                                        </div>
                                        <input
                                            type="range"
                                            name="c-height"
                                            id="c-height"
                                            min="155"
                                            max="183"
                                            value="162"
                                            class="size-suggestion__control"
                                        />
                                    </div>
                                    <div
                                        rel-script="size-suggestion-field"
                                        class="size-suggestion__field"
                                    >
                                        <div class="size-suggestion__label">
                                            <span>Cân Nặng</span>
                                            <span
                                                rel-script="size-suggestion-label"
                                                data-label="kg"
                                                class="size-suggestion__size"
                                                >53kg</span
                                            >
                                        </div>
                                        <input
                                            type="range"
                                            name="c-weight"
                                            id="c-weight"
                                            min="48"
                                            max="84"
                                            value="53"
                                            class="size-suggestion__control"
                                        />
                                    </div>
                                    <div class="size-suggestion__body">
                                        <label
                                            class="
                                                size-suggestion__body-size
                                                thin
                                            "
                                            ><input
                                                type="radio"
                                                name="body"
                                                value="thin"
                                            />
                                            <span>Gầy</span></label
                                        >
                                        <label
                                            class="
                                                size-suggestion__body-size
                                                normal
                                            "
                                            ><input
                                                type="radio"
                                                name="body"
                                                value="normal"
                                                checked="checked"
                                            />
                                            <span>Bình thường</span></label
                                        >
                                        <label
                                            class="
                                                size-suggestion__body-size
                                                fat
                                            "
                                            ><input
                                                type="radio"
                                                name="body"
                                                value="fat"
                                            />
                                            <span>Hơi mập tẹo</span></label
                                        >
                                    </div>
                                    <div
                                        rel-script="size-suggestion-active"
                                        class="size-suggestion__active"
                                    >
                                        <span class="size-suggestion__label">
                                            Coolmate gợi ý bạn:
                                        </span>
                                        <div
                                            rel-script="size-suggestion-values"
                                            class="size-suggestion__values"
                                        >
                                            <div
                                                rel-script="shirt"
                                                data-unit="Áo"
                                                class="tshirt"
                                            >
                                                <span
                                                    style="
                                                        text-transform: uppercase;
                                                    "
                                                    >M</span
                                                >
                                                - Áo
                                            </div>
                                            <div
                                                rel-script="pant"
                                                data-unit="Quần"
                                                class="pant"
                                            >
                                                <span
                                                    style="
                                                        text-transform: uppercase;
                                                    "
                                                    >M</span
                                                >
                                                - Quần
                                            </div>
                                            <div
                                                rel-script="jeans"
                                                data-unit="Jeans"
                                                class="pant"
                                                style="display: none"
                                            >
                                                <span
                                                    style="
                                                        text-transform: uppercase;
                                                    "
                                                ></span>
                                                - Jeans
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div id="size-table" class="size-table" style="">
                            <div class="sizechart-table">
                                <table class="site-table one-whole mgb--10">
                                    <thead>
                                        <tr>
                                            <td><span>Size</span></td>
                                            <td><span>M</span></td>
                                            <td><span>L</span></td>
                                            <td><span>XL</span></td>
                                            <td><span>2XL</span></td>
                                            <td><span>3XL</span></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <span class="text--bold"
                                                    >Chiều cao</span
                                                >
                                            </td>
                                            <td>1m55 - 1m62</td>
                                            <td>1m63 - 1m69</td>
                                            <td>1m70 - 1m76</td>
                                            <td>1m77 - 1m83</td>
                                            <td>1m84 - 1m92</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="text--bold"
                                                    >Cân nặng</span
                                                >
                                            </td>
                                            <td>51kg - 59kg</td>
                                            <td>60kg - 68kg</td>
                                            <td>69kg - 77kg</td>
                                            <td>78kg - 84kg</td>
                                            <td>85kg - 90kg</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="text--bold"
                                                    >RỘNG CẠP 1/2</span
                                                >
                                            </td>
                                            <td>33</td>
                                            <td>35</td>
                                            <td>37</td>
                                            <td>39</td>
                                            <td>41</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="text--bold"
                                                    >RỘNG NGANG MÔNG 1/2</span
                                                >
                                            </td>
                                            <td>51</td>
                                            <td>53</td>
                                            <td>55</td>
                                            <td>57</td>
                                            <td>59</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="text--bold"
                                                    >VÒNG ĐÙI 1/2 (ĐO SÁT
                                                    ĐŨNG)</span
                                                >
                                            </td>
                                            <td>34</td>
                                            <td>34.5</td>
                                            <td>35</td>
                                            <td>35.5</td>
                                            <td>36</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="text--bold"
                                                    >DÀI QUẦN</span
                                                >
                                            </td>
                                            <td>94</td>
                                            <td>96</td>
                                            <td>98</td>
                                            <td>100</td>
                                            <td>102</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="size-table__description">
                                    <p>
                                        Trường hợp số đo của bạn nằm trong
                                        khoảng giữa các size với nhau:<br />
                                        Với áo thun, bạn hãy lựa chọn ưu tiên
                                        theo chiều cao<br />
                                        Ví dụ chiều cao của bạn theo size L
                                        nhưng cân nặng của bạn theo size M, Hãy
                                        chọn L.
                                    </p>
                                    <p>
                                        97% khách hàng của chúng tôi đã chọn
                                        đúng size theo cách này.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        name: 'ProductSingleSizeGuilde',
    }
</script>