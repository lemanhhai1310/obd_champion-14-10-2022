<?php $data["title"] = "Trang chủ"; ?>
<?php $isHome = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<nav class="uk-navbar-container uk-navbar-transparent uk-position-top" uk-navbar>
    <div class="uk-navbar-left">
        <a uk-toggle="target: #offcanvas-reveal" class="uk-navbar-toggle home__menu" uk-navbar-toggle-icon href="#" aria-label="Open Menu"></a>
    </div>
</nav>
<div class="home__bxh uk-section-small uk-background-norepeat uk-background-center-center uk-background-cover" data-src="images/Rectangle93.png" uk-img>
    <div class="uk-container uk-container-expand uk-text-center">
        <div class="uk-cover-container uk-display-inline-block">
            <img src="images/image15.png" alt="" uk-cover="">
            <canvas width="251" height="149"></canvas>
            <div class="uk-padding-small uk-position-cover">
                <div class="uk-position-center home__bxh__txt">
                    Bảng xếp hạng <br>
                    <span>OBD Champion</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="home__content uk-section-xsmall uk-padding-remove-bottom" uk-height-viewport="expand: true">
    <div class="uk-container uk-container-expand">
        <div class="item__24">
            <form class="home__content__search uk-search uk-search-default uk-width-1-1">
                <span class="home__content__search__icon" uk-search-icon></span>
                <input class="home__content__search__input uk-search-input uk-form-large" type="search" placeholder="Nhập tên hệ thống">
            </form>
        </div>
        <div class="item__24">
            <div class="home__boxSpace uk-overflow-auto home__overflow__scrollbar">
                <ul class="home__content__tab uk-subnav uk-flex-nowrap" uk-switcher="connect: .switcher-container">
                    <li><a href="#">Bảng xếp hạng</a></li>
                    <li><a href="#">Đấu trường</a></li>
                    <li><a href="#">Giải thưởng</a></li>
                </ul>
            </div>
        </div>
        <div class="">
            <ul class="uk-switcher switcher-container">
                <li>
                    <div class="uk-overflow-auto home__boxSpace home__overflow__scrollbar home__overflow__boxshadow uk-section-small">
                        <div class="uk-child-width-auto uk-grid-match uk-grid-12 uk-flex-nowrap home__overflow__grid" uk-grid>
                            <?php
                            $data = array(
                                array(
                                    'img' => 'images/dau-truong-1.png',
                                    'txt' => 'Đấu trường 1',
                                ),
                                array(
                                    'img' => 'images/dau-truong-2.png',
                                    'txt' => 'Đấu trường 2',
                                ),
                                array(
                                    'img' => 'images/dau-truong-3.png',
                                    'txt' => 'Đấu trường 3',
                                ),
                                array(
                                    'img' => 'images/dau-truong-4.png',
                                    'txt' => 'Đấu trường 4',
                                ),
                                array(
                                    'img' => 'images/dau-truong-5.png',
                                    'txt' => 'Đấu trường 5',
                                ),
                                array(
                                    'img' => 'images/dau-truong-6.png',
                                    'txt' => 'Đấu trường 6',
                                ),
                                array(
                                    'img' => 'images/dau-truong-7.png',
                                    'txt' => 'Đấu trường 7',
                                ),
                            );
                            foreach ($data as $k=>$v): ?>
                            <div class="home__overflow__column">
                                <div class="uk-card uk-card-default home__content__card">
                                    <div class="item__24 home__content__card__avartar uk-cover-container uk-border-circle">
                                        <img src="<?= $v['img'] ?>" alt="" uk-cover="">
                                        <canvas width="200" height="200"></canvas>
                                    </div>
                                    <div class="item__24">
                                        <div class="item__12 home__content__card__title"><?= $v['txt'] ?></div>
                                        <div class="item__12 home__content__card__txt">400 chiến binh</div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </li>
                <li>Hello again!</li>
                <li>
                    <?php require "template-parts/boloc.php"; ?>
                    <div class="uk-section-xsmall">
                        <div class="uk-container uk-container-expand">
                            <div class="item__24">
                                <div class="uk-grid-small uk-child-width-1-3 uk-grid-match" uk-grid>
                                    <div class="uk-width-1-1">
                                        <h2 class="uk-h2 uk-text-center giaithuong__title">Đấu trường 5</h2>
                                    </div>
                                    <?php
                                    $data = array(
                                        array(
                                            'img' => 'images/folder/5.1.png',
                                            'txt' => '15 triệu đồng',
                                            'percent' => '25%',
                                        ),
                                        array(
                                            'img' => 'images/folder/5.2.png',
                                            'txt' => '15 triệu đồng',
                                            'percent' => '25%',
                                        ),
                                        array(
                                            'img' => 'images/folder/5.3.png',
                                            'txt' => '30 triệu đồng',
                                            'percent' => '25%',
                                        ),
                                        array(
                                            'img' => 'images/folder/5.4.png',
                                            'txt' => '60 triệu đồng',
                                            'percent' => '24%',
                                        ),
                                        array(
                                            'img' => 'images/folder/5.5.png',
                                            'txt' => '600 triệu đồng',
                                            'percent' => '1%',
                                        ),
                                    );
                                    foreach ($data as $k=>$v): ?>
                                        <div class="<?= ($k<2)?'uk-width-1-2':'' ?>">
                                            <div class="giaithuong__box2 item__10 uk-card uk-card-default uk-padding-small uk-text-center uk-flex uk-flex-column">
                                                <div class="item__10">
                                                    <div class="giaithuong__box2__Boximg uk-flex-inline uk-margin-auto uk-cover-container">
                                                        <img class="" src="<?= $v['img'] ?>" alt="" uk-cover="">
                                                        <canvas width="88" height="128"></canvas>
                                                    </div>
                                                </div>
                                                <div class="item__10">
                                                    <div class="item__4 <?= ($k<2)?'giaithuong__box2__txt1':'giaithuong__box2__txt2' ?>"><?= $v['txt'] ?></div>
                                                    <div class="item__4 giaithuong__box1__txt"><?= $v['percent'] ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <?php require "template-parts/dautruong.php"; ?>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
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