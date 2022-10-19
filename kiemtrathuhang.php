<?php $data["title"] = "Kiểm tra thứ hạng"; ?>
<?php require "template-parts/layouts/header.php"; ?>
<nav class="uk-navbar-container navbar__top" uk-navbar uk-sticky>
    <div class="uk-navbar-left">
        <a class="uk-navbar-toggle" href="bangxephangtong.php">
            <span class="navbar__top__icon navbar__top__icon--back" uk-icon="icon: arrow-left; ratio: 1"></span>
        </a>
    </div>
    <div class="uk-navbar-right uk-flex-auto" style="gap: 0;">
        <div class="uk-navbar-item uk-flex-1">
            <input class="uk-input kiemtrathuhang__input" type="text" placeholder="" value="Hệ thống A">
        </div>
        <a class="uk-navbar-toggle" href="#" uk-tooltip="Bạn chỉ được so sánh xếp hạng với các hệ thống có thứ hạng gần kề với thứ hạng hiện tại">
            <span class="navbar__top__icon navbar__top__icon--info" uk-icon="icon: calendar; ratio: 1"></span>
        </a>
    </div>
</nav>
<div class="uk-section-xsmall uk-background-default" uk-height-viewport="expand: true">
    <div class="uk-container uk-container-expand">
        <div class="item__24">
            <div class="item__12">
                <div class="uk-position-relative kiemtrathuhang__box1" data-txt="VS.">
                    <div class="uk-child-width-expand uk-grid-large" uk-grid>
                        <div>
                            <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                <select>
                                    <option value="">Tên HT muốn so sánh</option>
                                    <option selected value="1">Hệ thống A</option>
                                </select>
                                <button class="uk-width-1-1 kiemtrathuhang__btnSelect uk-button uk-button-default" type="button" tabindex="-1">
                                    <span class="line-clamp-1"></span>
                                    <span class="uk-position-center-right" uk-icon="icon: chevron-down"></span>
                                </button>
                            </div>
                            <input hidden class="uk-input kiemtrathuhang__input kiemtrathuhang__input--c1" type="text" placeholder="Tên HT muốn so sánh" value="Hệ thống A">
                        </div>
                        <div>
                            <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                <select id="dynamic_select">
                                    <option value="">Tên HT muốn so sánh</option>
                                    <option value="sosanhxephang.php">Hệ thống B</option>
                                </select>
                                <button class="uk-width-1-1 kiemtrathuhang__btnSelect uk-button uk-button-default" type="button" tabindex="-1">
                                    <span class="line-clamp-1"></span>
                                    <span class="uk-position-center-right" uk-icon="icon: chevron-down"></span>
                                </button>
                            </div>
                            <script>
                                $(function(){
                                    // bind change event to select
                                    $('#dynamic_select').on('change', function () {
                                        var url = $(this).val(); // get selected value
                                        if (url) { // require a URL
                                            window.location = url; // redirect
                                        }
                                        return false;
                                    });
                                });
                            </script>
                            <input hidden class="uk-input kiemtrathuhang__input kiemtrathuhang__input--c1" type="text" placeholder="Tên HT muốn so sánh" value="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="item__12">
                <div class="uk-position-relative kiemtrathuhang__box1 kiemtrathuhang__box1--c1">
                    <div class="uk-child-width-expand uk-grid-large" uk-grid>
                        <div>
                            <div class="uk-inline uk-width-1-1">
                                <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: calendar"></span>
                                <input class="uk-input kiemtrathuhang__input kiemtrathuhang__input--c1" type="date" placeholder="Chọn ngày" value="">
                            </div>
                        </div>
                        <div>
                            <div class="uk-inline uk-width-1-1">
                                <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: calendar"></span>
                                <input class="uk-input kiemtrathuhang__input kiemtrathuhang__input--c1" type="date" placeholder="Chọn ngày" value="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item__24">
            <div class="kiemtrathuhang__box">
                <div class="kiemtrathuhang__box__item">
                    <span class="uk-margin-small-right thele__nav__icon thele__nav__icon--x1" uk-icon="icon: table"></span> <span>1.200 điểm kinh nghiệm</span>
                </div>
                <div class="kiemtrathuhang__box__item">
                    <span class="uk-margin-small-right thele__nav__icon thele__nav__icon--x2" uk-icon="icon: table"></span> Đấu trường 1
                </div>
                <div class="kiemtrathuhang__box__item">
                    <span class="uk-margin-small-right thele__nav__icon thele__nav__icon--x3" uk-icon="icon: table"></span> Thứ hạng: <span>123</span>/400
                </div>
                <div class="kiemtrathuhang__box__item">
                    <span class="uk-margin-small-right thele__nav__icon thele__nav__icon--x4" uk-icon="icon: table"></span> Bạn cần x.xxx ĐKN mỗi ngày để lên Đấu trường 2
                </div>
            </div>
        </div>
        <div class="item__24">
            <div class="item__15">
                <div class="uk-text-center huychuong__txt">Bạn còn kém <b>15.234</b> ĐKN để vượt qua vị trí <strong>TOP 1</strong>, cố lên nhé!</div>
            </div>
            <div class="item__15">
                <img src="images/tg_image_984022450.jpeg" alt="">
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>