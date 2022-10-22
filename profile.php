<?php $data["title"] = "Profile"; ?>
<?php require "template-parts/layouts/header.php"; ?>
<nav class="uk-navbar-container navbar__top" uk-navbar uk-sticky>
    <div class="uk-navbar-left">
        <a class="uk-navbar-toggle" href=".">
            <span class="navbar__top__icon navbar__top__icon--back" uk-icon="icon: arrow-left; ratio: 1"></span>
        </a>
    </div>
    <div class="uk-navbar-center">
        <div class="uk-navbar-item">
            <h1 class="uk-h1 navbar__top__title">Profile</h1>
        </div>
    </div>
    <div class="uk-navbar-right">

    </div>
</nav>
<ul class="uk-nav-default thele__nav profile__nav" uk-nav>
    <li class="thele__nav__li"><a class="thele__nav__a uk-flex-center" href="#"><span class="uk-margin-small-right thele__nav__icon thele__nav__icon--c1" uk-icon="icon: table"></span> Hệ thống <b>AVG</b></a></li>
    <li class="thele__nav__li"><a class="thele__nav__a" href="#"><span class="uk-margin-small-right thele__nav__icon thele__nav__icon--c2" uk-icon="icon: thumbnails"></span> Đấu trường: 1</a></li>
    <li class="thele__nav__li"><a class="thele__nav__a" href="#"><span class="uk-margin-small-right thele__nav__icon thele__nav__icon--c3" uk-icon="icon: trash"></span> Điểm kinh nghiệm ngày: 100</a></li>
    <li class="thele__nav__li"><a class="thele__nav__a" href="#"><span class="uk-margin-small-right thele__nav__icon thele__nav__icon--c4" uk-icon="icon: trash"></span> Thứ hạng ngày: 10</a></li>
    <li class="thele__nav__li">
        <a class="thele__nav__a" href="#" uk-icon="icon: arrow-right">
            Đăng xuất
        </a>
    </li>
</ul>
<?php require "template-parts/layouts/footer.php"; ?>