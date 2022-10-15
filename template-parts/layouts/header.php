<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="REFRESH" content="1800"/>
    <title><?= /** @var TYPE_NAME  */
        (isset($data['title'])) ? $data['title'] : ''; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <!--CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.15.10/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="style.css?v=<?php echo(time()) ?>">

    <!--JS-->
    <script src="https://cdn.jsdelivr.net/npm/@shinsenter/defer.js/dist/defer_plus.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.15.10/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.15.10/dist/js/uikit-icons.min.js"></script>
    <script src="js/app.js?v=<?php echo(time()) ?>"></script>
</head>
<body class="<?= (isset($isHome))?'isHome':'' ?><?= (isset($bottomFixed))?'bottomFixed':'' ?>">
<?php require "template-parts/commons/facebook_chat.php"; ?>
<?php if (isset($isHome)): ?>
    <div id="offcanvas-reveal" class="offcanvas" uk-offcanvas="mode: reveal; overlay: false">
        <div class="uk-offcanvas-bar offcanvas__bar uk-flex uk-flex-column">
            <div class="uk-flex-auto">
                <ul class="uk-nav-default offcanvas__nav" uk-nav>
                    <li><a href="#"><span class="uk-margin-small-right offcanvas__nav__icon offcanvas__nav__icon--profile" uk-icon="icon: user"></span> Profile</a></li>
                    <li><a href="bangxephangtong.php"><span class="uk-margin-small-right offcanvas__nav__icon offcanvas__nav__icon--bxh" uk-icon="icon: table"></span> Bảng xếp hạng</a></li>
                    <li><a href="#"><span class="uk-margin-small-right offcanvas__nav__icon offcanvas__nav__icon--dautruong" uk-icon="icon: thumbnails"></span> Đấu trường</a></li>
                    <li><a href="giaithuong.php"><span class="uk-margin-small-right offcanvas__nav__icon offcanvas__nav__icon--giaithuong" uk-icon="icon: bell"></span> Giải thưởng</a></li>
                    <li><a href="thele.php"><span class="uk-margin-small-right offcanvas__nav__icon offcanvas__nav__icon--thele" uk-icon="icon: file-text"></span> Thể lệ</a></li>
                    <li><a href="#"><span class="uk-margin-small-right offcanvas__nav__icon offcanvas__nav__icon--thele" uk-icon="icon: file-text"></span> Cách đổi huy chương</a></li>
                </ul>
            </div>
            <div>
                <a href="" class="uk-link-toggle uk-offcanvas-close offcanvas__back">Trang chủ <span class="uk-margin-small-left offcanvas__nav__icon offcanvas__nav__icon--back" uk-icon="icon: file-text"></span></a>
            </div>

        </div>
    </div>
<?php endif; ?>
<!--app-->
<div id="app" class="app uk-offcanvas-content uk-position-relative">
    <!--app__container-->
    <div class="app__container" uk-height-viewport="expand: true">
