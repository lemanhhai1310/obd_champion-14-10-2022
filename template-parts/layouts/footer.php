</div>
<!--/app__container-->
<?php if (isset($isHome)): ?>
    <nav class="navigation__navbarMenu uk-position-bottom uk-position-fixed uk-navbar uk-navbar-container" uk-navbar>
        <div class="uk-navbar-left uk-flex-1">
            <ul class="uk-navbar-nav uk-flex-1 uk-child-width-expand">
                <?php
                $data = array(
                    array(
                        'txt' => 'Trang chủ',
                        'icon' => 'home',
                        'url' => '.',
                    ),
                    array(
                        'txt' => 'BXH',
                        'icon' => 'bxh',
                        'url' => 'bangxephangtong.php',
                    ),
                    array(
                        'txt' => 'Đấu trường',
                        'icon' => 'dautruong',
                        'url' => '',
                    ),
                    array(
                        'txt' => 'Thể lệ',
                        'icon' => 'thele',
                        'url' => 'thele.php',
                    ),
                    array(
                        'txt' => 'Tài khoản',
                        'icon' => 'taikhoan',
                        'url' => '',
                    ),
                );
                foreach ($data as $k=>$v): ?>
                <li class="<?= ($k==0)?'uk-active':'' ?>">
                    <a href="<?= $v['url'] ?>">
                        <div>
                            <span class="navigation__navbarMenu__icon navigation__navbarMenu__icon--<?= $v['icon'] ?>"></span>
                            <div class="uk-navbar-subtitle navigation__navbarMenu__subtitle"><?= $v['txt'] ?></div>
                        </div>
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </nav>
<?php endif; ?>

<?php if (isset($bottomFixed)): ?>
<div class="bottomfixed uk-section-xsmall uk-background-default uk-position-bottom uk-position-fixed">
    <div class="uk-container">
        <a href="kiemtrathuhang.php" class="bottomfixed__btn uk-button uk-button-secondary uk-width-1-1 uk-button-large">
            Kiểm tra thứ hạng
        </a>
    </div>
</div>
<?php endif; ?>
</div>
<!--/app-->
</body>
</html>