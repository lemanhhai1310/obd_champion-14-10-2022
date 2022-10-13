<?php $data["title"] = "Trang chủ"; ?>
<?php $isHome = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<nav class="uk-navbar-container uk-navbar-transparent uk-position-top" uk-navbar>
    <div class="uk-navbar-left">
        <a uk-toggle="target: #offcanvas-reveal" class="uk-navbar-toggle home__menu" uk-navbar-toggle-icon href="#" aria-label="Open Menu"></a>
    </div>
</nav>
<div class="home__bxh uk-section-small uk-background-norepeat uk-background-center-center uk-background-cover" data-src="images/Rectangle93.png" uk-img>
    <div class="uk-container uk-text-center">
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
<div class="uk-background-primary" uk-height-viewport="expand: true">

</div>
<?php require "template-parts/layouts/footer.php"; ?>