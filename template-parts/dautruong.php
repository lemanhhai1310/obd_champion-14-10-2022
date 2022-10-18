<div class="item__24">
    <?php
    $data = array(
        array(
            'img' => 'images/dau-truong-1.png',
            'txt' => 'Đấu trường 1',
            'href' => 'dautruong1.php',
            'value' => '118 triệu đồng',
        ),
        array(
            'img' => 'images/dau-truong-2.png',
            'txt' => 'Đấu trường 2',
            'href' => 'dautruong2.php',
            'value' => '227 triệu đồng',
        ),
        array(
            'img' => 'images/dau-truong-3.png',
            'txt' => 'Đấu trường 3',
            'href' => 'dautruong3.php',
            'value' => '359 triệu đồng',
        ),
        array(
            'img' => 'images/dau-truong-4.png',
            'txt' => 'Đấu trường 4',
            'href' => 'dautruong4.php',
            'value' => '480 triệu đồng',
        ),
        array(
            'img' => 'images/dau-truong-5.png',
            'txt' => 'Đấu trường 5',
            'href' => 'dautruong5.php',
            'value' => '720 triệu đồng',
        ),
        array(
            'img' => 'images/dau-truong-6.png',
            'txt' => 'Đấu trường 6',
            'href' => 'dautruong6.php',
            'value' => '980 triệu đồng',
        ),
        array(
            'img' => 'images/dau-truong-7.png',
            'txt' => 'Đấu trường 7',
            'href' => 'dautruong7.php',
            'value' => '1470 triệu đồng',
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
                    <div class="item__8 giaithuong__box1__txt"><?= $v['value'] ?></div>
                </div>
                <div class="uk-width-auto">
                    <a href="<?= $v['href'] ?>" class="giaithuong__box1__btn uk-button uk-button-primary uk-button-small uk-border-pill">Xem</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>