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
                    ),
                    array(
                        'txt' => 'BXH',
                        'icon' => 'bxh',
                    ),
                    array(
                        'txt' => 'Đấu trường',
                        'icon' => 'dautruong',
                    ),
                    array(
                        'txt' => 'Thể lệ',
                        'icon' => 'thele',
                    ),
                    array(
                        'txt' => 'Tài khoản',
                        'icon' => 'taikhoan',
                    ),
                );
                foreach ($data as $k=>$v): ?>
                <li class="<?= ($k==0)?'uk-active':'' ?>">
                    <a href="">
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
</div>
<!--/app-->
</body>
</html>