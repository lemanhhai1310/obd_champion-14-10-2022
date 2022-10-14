<?php $data["title"] = "Bảng xếp hạng tổng - Option 2"; ?>
<?php $bottomFixed = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<nav class="uk-navbar-container navbar__top" uk-navbar uk-sticky>
    <div class="uk-navbar-left">
        <a class="uk-navbar-toggle" href=".">
            <span class="navbar__top__icon navbar__top__icon--back" uk-icon="icon: arrow-left; ratio: 1"></span>
        </a>
    </div>
    <div class="uk-navbar-center">
        <div class="uk-navbar-item">
            <h1 class="uk-h1 navbar__top__title">Bảng xếp hạng ngày</h1>
        </div>
    </div>
    <div class="uk-navbar-right">
        <a class="uk-navbar-toggle" href="#">
            <span class="navbar__top__icon navbar__top__icon--calendar" uk-icon="icon: calendar; ratio: 1"></span>
        </a>
    </div>
</nav>
<div class="" uk-height-viewport="expand: true">
    <div class="item__6 uk-background-default uk-height-min-small uk-section-xsmall">
        <div class="uk-container uk-container-expand">
            <div class="item__15">
                <h2 class="uk-h2 bangxephangtong__title">Xếp hạng</h2>
            </div>
            <div class="item__15">
                <div class="home__boxSpace">
                    <img src="images/tg_image_3389858155.jpeg" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="item__6 uk-background-default uk-height-min-small uk-section-xsmall">
        <div class="uk-container uk-container-expand">
            <div class="item__15">
                <div class="uk-flex-middle uk-grid-small" uk-grid>
                    <div class="uk-width-expand">
                        <h2 class="uk-h2 bangxephangtong__title">Danh sách</h2>
                    </div>
                    <div class="uk-width-auto">
                        <form class="uk-search uk-search-default bangxephangtong__search">
                            <span class="bangxephangtong__search__icon" uk-search-icon></span>
                            <input class="uk-search-input bangxephangtong__search__input" type="search" placeholder="Nhập tên hệ thống">
                        </form>
                    </div>
                </div>
            </div>
            <div class="item__15">
                <div class="home__boxSpace">
                    <table class="bangxephangtong__table uk-table uk-table-small uk-margin-remove-bottom">
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th>Cộng đồng</th>
                            <th>Hệ thống</th>
                            <th>Nhánh</th>
                            <th>ĐKN</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Cộng đồng F99</td>
                            <td>Eagle Brand</td>
                            <td>Tên nhánh</td>
                            <td>15.000</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Cộng đồng S10</td>
                            <td>Eagle Brand</td>
                            <td>Tên nhánh</td>
                            <td>15.000</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>