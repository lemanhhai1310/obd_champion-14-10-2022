<?php $data["title"] = "Login"; ?>
<?php require "template-parts/layouts/header.php"; ?>
<div uk-height-viewport="expand: true">
    <div class="uk-height-min-medium uk-flex uk-flex-middle uk-background-norepeat uk-background-center-center uk-background-cover" data-src="images/bg_login.png" uk-img>
        <div class="uk-width-1-1 uk-section-xsmall uk-text-center">
            <img src="images/logo.png" alt="">
        </div>
    </div>
    <div class="uk-section login__card uk-background-default" uk-height-viewport="expand: true">
        <div class="uk-container uk-container-expand">
            <div class="uk-text-center">
                <img src="images/logo_login.png" alt="">
            </div>
            <div class="item__24">
                <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon login__icon login__icon--user" uk-icon="icon: user"></span>
                    <input class="login__input uk-input uk-form-large" type="text" placeholder="Tên đăng nhập">
                </div>
            </div>
            <div class="item__16">
                <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon login__icon login__icon--lock" uk-icon="icon: lock"></span>
                    <input class="login__input uk-input uk-form-large" type="password" placeholder="Mật khẩu">
                </div>
            </div>
            <div class="item__30">
                <button type="button" class="bottomfixed__btn uk-button uk-button-secondary uk-width-1-1 uk-button-large">
                    Đăng nhập
                </button>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>