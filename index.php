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
                <li>Bazinga!</li>
            </ul>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>