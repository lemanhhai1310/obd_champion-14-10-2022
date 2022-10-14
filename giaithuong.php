<?php $data["title"] = "Giải thưởng"; ?>
<?php require "template-parts/layouts/header.php"; ?>
<nav class="uk-navbar-container navbar__top" uk-navbar uk-sticky>
    <div class="uk-navbar-left">
        <a class="uk-navbar-toggle" href=".">
            <span class="navbar__top__icon navbar__top__icon--back" uk-icon="icon: arrow-left; ratio: 1"></span>
        </a>
    </div>
    <div class="uk-navbar-center">
        <div class="uk-navbar-item">
            <h1 class="uk-h1 navbar__top__title">Giải thưởng</h1>
        </div>
    </div>
    <div class="uk-navbar-right">

    </div>
</nav>
<div class="uk-section-xsmall uk-background-default">
    <div class="uk-container">
        <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
            <select>
                <option value="">Chọn đấu trường</option>
                <option value="1">Option 01</option>
                <option value="2">Option 02</option>
                <option value="3">Option 03</option>
                <option value="4">Option 04</option>
            </select>
            <button class="giaithuong__selectBtn uk-button uk-text-left uk-position-relative uk-button-default uk-button-large uk-width-1-1" type="button" tabindex="-1">
                <span></span>
                <span class="uk-position-small uk-position-center-right" uk-icon="icon: chevron-down"></span>
            </button>
        </div>
    </div>
</div>
<div class="uk-section-xsmall">
    <div class="uk-container">
        <div class="item__24">
            <div class="uk-grid-small uk-child-width-1-3 uk-grid-match" uk-grid>
                <div class="uk-width-1-1">
                    <h2 class="uk-h2 uk-text-center giaithuong__title">Đấu trường 5</h2>
                </div>
                <?php
                $data = array(
                    array(
                        'img' => 'images/Group1.png',
                        'txt' => '150 triệu đồng',
                        'percent' => '24%',
                    ),
                    array(
                        'img' => 'images/Group2.png',
                        'txt' => '1.200 triệu đồng',
                        'percent' => '1%',
                    ),
                    array(
                        'img' => 'images/Group3.png',
                        'txt' => '30 triệu đồng',
                        'percent' => '25%',
                    ),
                    array(
                        'img' => 'images/Group4.png',
                        'txt' => '30 triệu đồng',
                        'percent' => '25%',
                    ),
                    array(
                        'img' => 'images/Group5.png',
                        'txt' => '60 triệu đồng',
                        'percent' => '25%',
                    ),
                );
                foreach ($data as $k=>$v): ?>
                <div class="<?= ($k<2)?'uk-width-1-2':'' ?>">
                    <div class="giaithuong__box2 uk-card uk-card-default uk-padding-small uk-text-center uk-flex uk-flex-column">
                        <div class="uk-flex-auto uk-flex uk-flex-middle uk-flex-center">
                            <img src="<?= $v['img'] ?>" alt="">
                        </div>
                        <div>
                            <div class="item__4 <?= ($k<2)?'giaithuong__box2__txt1':'giaithuong__box2__txt2' ?>"><?= $v['txt'] ?></div>
                            <div class="item__4 giaithuong__box1__txt"><?= $v['percent'] ?></div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="item__24">
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
            <div class="item__12 uk-padding-small uk-background-default giaithuong__box1">
                <div class="uk-flex-middle uk-grid-small" uk-grid>
                    <div class="uk-width-auto">
                        <div class="uk-cover-container uk-border-circle">
                            <img src="<?= $v['img'] ?>" alt="" uk-cover="">
                            <canvas width="56" height="56"></canvas>
                        </div>
                    </div>
                    <div class="uk-width-expand">
                        <div class="item__8 giaithuong__box1__title"><?= $v['txt'] ?></div>
                        <div class="item__8 giaithuong__box1__txt">460 triệu đồng</div>
                    </div>
                    <div class="uk-width-auto">
                        <a href="" class="giaithuong__box1__btn uk-button uk-button-primary uk-button-small uk-border-pill">Xem</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>