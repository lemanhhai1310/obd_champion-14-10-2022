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
<?php require "template-parts/boloc.php"; ?>
<div class="uk-section-xsmall">
    <div class="uk-container uk-container-expand">
        <div class="item__24">
            <div class="uk-grid-small uk-child-width-1-3 uk-grid-match" uk-grid>
                <div class="uk-width-1-1">
                    <div class="uk-position-relative">
                        <h2 class="uk-h2 uk-text-center giaithuong__title">Đấu trường 1</h2>
                        <a href="" uk-tooltip="Giải phụ" class="giaithuong__iconGift uk-position-center-right"></a>
                    </div>
                </div>
                <?php
                $data = array(
                    array(
                        'img' => 'images/folder/1.1.png',
                        'txt' => '3 triệu đồng',
                        'percent' => '25%',
                    ),
                    array(
                        'img' => 'images/folder/1.2.png',
                        'txt' => '3 triệu đồng',
                        'percent' => '25%',
                    ),
                    array(
                        'img' => 'images/folder/1.3.png',
                        'txt' => '5 triệu đồng',
                        'percent' => '25%',
                    ),
                    array(
                        'img' => 'images/folder/1.4.png',
                        'txt' => '7 triệu đồng',
                        'percent' => '24%',
                    ),
                    array(
                        'img' => 'images/folder/1.5.png',
                        'txt' => '100 triệu đồng',
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
<?php require "template-parts/layouts/footer.php"; ?>