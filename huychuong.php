<?php $data["title"] = "Huy chương"; ?>
<?php require "template-parts/layouts/header.php"; ?>
<nav class="uk-navbar-container navbar__top" uk-navbar uk-sticky>
    <div class="uk-navbar-left">
        <a class="uk-navbar-toggle" href=".">
            <span class="navbar__top__icon navbar__top__icon--back" uk-icon="icon: arrow-left; ratio: 1"></span>
        </a>
    </div>
    <div class="uk-navbar-center">
        <div class="uk-navbar-item">
            <h1 class="uk-h1 navbar__top__title">Huy chương</h1>
        </div>
    </div>
    <div class="uk-navbar-right">
        <a class="uk-navbar-toggle" href="#offcanvas-overlay-thele-4" uk-toggle>
            <span class="navbar__top__icon navbar__top__icon--info" uk-icon="icon: calendar; ratio: 1"></span>
        </a>
    </div>
</nav>
<div class="" uk-height-viewport="expand: true">
    <div class="item__6 uk-background-default uk-height-min-small uk-section-xsmall">
        <div class="uk-container uk-container-expand">
            <div class="item__20">
                <h2 class="uk-h2 uk-text-center uk-margin-remove huychuong__title">HỆ THỐNG OBD MASTER</h2>
            </div>
            <div class="item__20">
                <div class="item__15">
                    <h2 class="uk-h2 bangxephangtong__title">Thống kê huy chương</h2>
                </div>
                <div class="item__15">
                    <div class="home__boxSpace uk-overflow-auto">
                        <table class="bangxephangtong__table uk-table uk-table-small uk-margin-remove-bottom">
                            <thead>
                            <tr>
                                <th>Đấu trường</th>
                                <th>Huy chương</th>
                                <th>Số lượng</th>
                                <th>Đã giao dịch</th>
                                <th>Còn lại</th>
                                <th>Table Heading</th>
                                <th>Table Heading</th>
                                <th>Table Heading</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php for ($i=0;$i<=5;$i++): ?>
                                <tr>
                                    <td>Đấu trường 1</td>
                                    <td>Vàng</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>Table Data</td>
                                    <td>Table Data</td>
                                    <td>Table Data</td>
                                </tr>
                            <?php endfor; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="item__15">
                    <div class="uk-text-center huychuong__txt">Bạn cần <b>5</b> huy chương Vàng ở <strong>Đấu trường Sói</strong> để có cơ hội bốc quà BMW 320i. Cố lên nhé!</div>
                </div>
            </div>
        </div>
    </div>
    <div class="item__6 uk-background-default uk-height-min-small uk-section-xsmall">
        <div class="uk-container uk-container-expand">
            <div class="item__15">
                <div class="uk-flex-middle uk-grid-small" uk-grid>
                    <div class="uk-width-expand">
                        <h2 class="uk-h2 bangxephangtong__title">Giao dịch đã thực hiện</h2>
                    </div>
                    <div class="uk-width-auto">

                    </div>
                </div>
            </div>
            <div class="item__15">
                <div class="home__boxSpace uk-overflow-auto">
                    <table class="bangxephangtong__table uk-table uk-table-small uk-margin-remove-bottom">
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th>Huy chương</th>
                            <th>Đấu trường</th>
                            <th>Số lượng</th>
                            <th>HT nhận</th>
                            <th>Table Heading</th>
                            <th>Table Heading</th>
                            <th>Table Heading</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php for ($i=0;$i<=5;$i++): ?>
                        <tr>
                            <td>1</td>
                            <td>Vàng</td>
                            <td>Đấu trường 1</td>
                            <td>1</td>
                            <td>HT A</td>
                            <td>Table Data</td>
                            <td>Table Data</td>
                            <td>Table Data</td>
                        </tr>
                        <?php endfor; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="offcanvas-overlay-thele-4" class="thele__offcanvas" uk-offcanvas="overlay: true">
    <div class="uk-offcanvas-bar thele__offcanvas__bar uk-flex uk-flex-column">
        <div class="thele__offcanvas__header uk-position-relative uk-text-center">
            <button class="uk-offcanvas-close uk-position-center-right thele__offcanvas__close" type="button" uk-close></button>
            <h3 class="uk-h3 thele__offcanvas__title">Cách đổi huy chương</h3>
        </div>
        <div class="thele__offcanvas__body uk-flex-auto uk-overflow-auto">
            <article class="uk-article">

            </article>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>