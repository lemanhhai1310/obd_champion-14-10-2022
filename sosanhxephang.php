<?php $data["title"] = "So sánh Xếp hạng"; ?>
<?php require "template-parts/layouts/header.php"; ?>
<nav class="uk-navbar-container navbar__top" uk-navbar uk-sticky>
    <div class="uk-navbar-left">
        <a class="uk-navbar-toggle" href="kiemtrathuhang.php">
            <span class="navbar__top__icon navbar__top__icon--back" uk-icon="icon: arrow-left; ratio: 1"></span>
        </a>
    </div>
    <div class="uk-navbar-center">
        <div class="uk-navbar-item">
            <h1 class="uk-h1 navbar__top__title">So sánh Xếp hạng</h1>
        </div>
    </div>
    <div class="uk-navbar-right">

    </div>
</nav>
<div class="uk-section-xsmall uk-background-default" uk-height-viewport="expand: true">
    <div class="uk-container uk-container-expand">
        <div class="item__20">
            <div class="item__12">
                <div class="uk-position-relative kiemtrathuhang__box1" data-txt="VS.">
                    <div class="uk-child-width-expand uk-grid-large" uk-grid>
                        <div>
                            <input class="uk-input kiemtrathuhang__input kiemtrathuhang__input--c1" type="text" placeholder="Tên HT muốn so sánh" value="Hệ thống A">
                        </div>
                        <div>
                            <input class="uk-input kiemtrathuhang__input kiemtrathuhang__input--c1" type="text" placeholder="Tên HT muốn so sánh" value="Hệ thống B">
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
        <div class="item__20">
            <div class="item__15">
                <div class="uk-text-center sosanhxephang__txt">Hệ thống A VS. Hệ thống B</div>
            </div>
            <div class="item__15">
                <img src="images/tg_image_2163058100.jpeg" alt="">
            </div>
        </div>
    </div>
</div>
<div class="uk-section-xsmall" uk-height-viewport="expand: true">
    <div class="uk-container uk-container-expand">
        <div class="item__15">
            <h2 class="uk-h2 bangxephangtong__title">So sánh với các Hệ thống khác</h2>
        </div>
        <div class="item__15">
            <div class="item__12 sosanhxephang__box" data-txt="VS.">
                <div class="uk-grid-divider sosanhxephang__divider uk-child-width-expand" uk-grid>
                    <div>
                        <div class="uk-text-center uk-padding-small">
                            <div class="item__4">
                                <div class="uk-cover-container uk-flex-inline uk-border-circle uk-margin-auto">
                                    <img src="images/lemanhhai_anhthe.jpg" alt="" uk-cover="">
                                    <canvas width="46" height="46"></canvas>
                                </div>
                            </div>
                            <div class="item__4">
                                <div class="sosanhxephang__box__txt">Hệ thống A</div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-text-center uk-padding-small">
                            <div class="item__4">
                                <div class="uk-cover-container uk-flex-inline uk-border-circle uk-margin-auto">
                                    <img src="images/lemanhhai_anhthe.jpg" alt="" uk-cover="">
                                    <canvas width="46" height="46"></canvas>
                                </div>
                            </div>
                            <div class="item__4">
                                <div class="sosanhxephang__box__txt">Hệ thống C</div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="" class="uk-position-cover"></a>
            </div>
            <div class="item__12 sosanhxephang__box" data-txt="VS.">
                <div class="uk-grid-divider sosanhxephang__divider uk-child-width-expand" uk-grid>
                    <div>
                        <div class="uk-text-center uk-padding-small">
                            <div class="item__4">
                                <div class="uk-cover-container uk-flex-inline uk-border-circle uk-margin-auto">
                                    <img src="images/lemanhhai_anhthe.jpg" alt="" uk-cover="">
                                    <canvas width="46" height="46"></canvas>
                                </div>
                            </div>
                            <div class="item__4">
                                <div class="sosanhxephang__box__txt">Hệ thống A</div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-text-center uk-padding-small">
                            <div class="item__4">
                                <div class="uk-cover-container uk-flex-inline uk-border-circle uk-margin-auto">
                                    <img src="images/lemanhhai_anhthe.jpg" alt="" uk-cover="">
                                    <canvas width="46" height="46"></canvas>
                                </div>
                            </div>
                            <div class="item__4">
                                <div class="sosanhxephang__box__txt">Hệ thống C</div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="" class="uk-position-cover"></a>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>