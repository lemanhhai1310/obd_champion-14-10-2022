<?php $data["title"] = "Thể lệ"; ?>
<?php require "template-parts/layouts/header.php"; ?>
<nav class="uk-navbar-container navbar__top" uk-navbar uk-sticky>
    <div class="uk-navbar-left">
        <a class="uk-navbar-toggle" href=".">
            <span class="navbar__top__icon navbar__top__icon--back" uk-icon="icon: arrow-left; ratio: 1"></span>
        </a>
    </div>
    <div class="uk-navbar-center">
        <div class="uk-navbar-item">
            <h1 class="uk-h1 navbar__top__title">Thể lệ</h1>
        </div>
    </div>
    <div class="uk-navbar-right">

    </div>
</nav>
<ul class="uk-nav-default thele__nav" uk-nav>
    <li class="thele__nav__li"><a class="thele__nav__a" href="#offcanvas-overlay-thele-1" uk-toggle><span class="uk-margin-small-right thele__nav__icon thele__nav__icon--c1" uk-icon="icon: table"></span> Đối tượng tham gia</a></li>
    <li class="thele__nav__li"><a class="thele__nav__a" href="#offcanvas-overlay-thele-2" uk-toggle><span class="uk-margin-small-right thele__nav__icon thele__nav__icon--c2" uk-icon="icon: thumbnails"></span> Điều kiện xét duyệt</a></li>
    <li class="thele__nav__li"><a class="thele__nav__a" href="#offcanvas-overlay-thele-3" uk-toggle><span class="uk-margin-small-right thele__nav__icon thele__nav__icon--c3" uk-icon="icon: trash"></span> Cách xét điểm kinh nghiệm</a></li>
    <li class="thele__nav__li"><a class="thele__nav__a" href="#offcanvas-overlay-thele-4" uk-toggle><span class="uk-margin-small-right thele__nav__icon thele__nav__icon--c4" uk-icon="icon: trash"></span> Huy chương</a></li>
    <li class="thele__nav__li"><a class="thele__nav__a" href="#offcanvas-overlay-thele-5" uk-toggle><span class="uk-margin-small-right thele__nav__icon thele__nav__icon--c5" uk-icon="icon: trash"></span> Giải phụ</a></li>
</ul>

<div id="offcanvas-overlay-thele-1" class="thele__offcanvas" uk-offcanvas="overlay: true">
    <div class="uk-offcanvas-bar thele__offcanvas__bar uk-flex uk-flex-column">
        <div class="thele__offcanvas__header uk-position-relative uk-text-center">
            <button class="uk-offcanvas-close uk-position-center-right thele__offcanvas__close" type="button" uk-close></button>
            <h3 class="uk-h3 thele__offcanvas__title">Đối tượng tham gia</h3>
        </div>
        <div class="thele__offcanvas__body uk-flex-auto uk-overflow-auto">
            <article class="uk-article">
                <ul class="uk-list uk-list-circle">
                    <li>OBD Ads và đối tác</li>
                    <li>Khối nhà máy</li>
                    <li>Khối thời trang</li>
                    <li>Khối bất động sản</li>
                </ul>
            </article>
        </div>
    </div>
</div>
<div id="offcanvas-overlay-thele-2" class="thele__offcanvas" uk-offcanvas="overlay: true">
    <div class="uk-offcanvas-bar thele__offcanvas__bar uk-flex uk-flex-column">
        <div class="thele__offcanvas__header uk-position-relative uk-text-center">
            <button class="uk-offcanvas-close uk-position-center-right thele__offcanvas__close" type="button" uk-close></button>
            <h3 class="uk-h3 thele__offcanvas__title">Điều kiện xét duyệt</h3>
        </div>
        <div class="thele__offcanvas__body uk-flex-auto uk-overflow-auto">
            <article class="uk-article">
                <ul class="uk-list uk-list-circle">
                    <li>Xếp hạng đấu trường: Căn cứ vào kết quả kinh doanh của tháng trước đó</li>
                    <li>Xếp hạng giải đấu: Tổ chức giải đấu và trao huy chương theo tuần</li>
                </ul>
                <p>VD: Kết quả kinh doanh tháng 7 sẽ là cơ sở xét duyệt Cấp độ đấu trường bạn sẽ tham gia giải thưởng OBD Champion tháng 8</p>
                <p>Kết quả kinh doanh mỗi tuần trong tháng 8 sẽ là cơ sở để xét duyệt Giải thưởng.</p>
                <p>Như vậy, Tháng 8 bạn sẽ được xét thưởng 4 lần.</p>
            </article>
        </div>
    </div>
</div>
<div id="offcanvas-overlay-thele-3" class="thele__offcanvas" uk-offcanvas="overlay: true">
    <div class="uk-offcanvas-bar thele__offcanvas__bar uk-flex uk-flex-column">
        <div class="thele__offcanvas__header uk-position-relative uk-text-center">
            <button class="uk-offcanvas-close uk-position-center-right thele__offcanvas__close" type="button" uk-close></button>
            <h3 class="uk-h3 thele__offcanvas__title">Cách xét điểm kinh nghiệm</h3>
        </div>
        <div class="thele__offcanvas__body uk-flex-auto uk-overflow-auto">
            <article class="uk-article">
                <p>Điểm kinh nghiệm (ĐKN) sẽ được tính theo công thức:</p>
                <ul class="uk-list uk-list-circle">
                    <li>Giá trị ĐKN = [(Doanh thu xuất hàng x 1) + (Lợi nhuận ước chừng x 10)] / (a + b)/z <br> Trong đó: a,b,z là hằng số giúp mã hóa Giá trị ĐKN.</li>
                </ul>
                <p>> Kết quả kinh doanh tháng gần nhất sẽ là cơ sở để xét duyệt Điểm kinh nghiệm (ĐKN)</p>
                <p>> Nếu HT con có ĐKN cao nhất lớn hơn tổng ĐKN của những HT còn lại trong một HT mẹ thì ĐKN của HT mẹ = ĐKN của những HT con còn lại x 2 và HT con có ĐKN cao nhất đó sẽ được tham gia Đấu trường với mức ĐKN hiện tại.</p>

                <p>> Ví dụ:</p>
                <p>HT mẹ A có 3 HT con: HT B (ĐKN = 10.000), HT C (ĐKN = 4.000), HT D (ĐKN = 2.000), thì ĐKN của HT A sẽ = (4.000 + 2.000) x 2 = 12.000 và được tham gia ở cấp độ Đấu trường tương ứng với 12.000 ĐKN.</p>
                <p>HT con B sẽ được tham gia ở cấp độ Đấu trường tương ứng với 10.000 ĐKN.</p>
                <p>1 ĐKN tương ứng với 1 triệu đồng, tương tự 3.000 ĐKN tương ứng với 3 tỷ đồng.</p>
            </article>
        </div>
    </div>
</div>
<div id="offcanvas-overlay-thele-4" class="thele__offcanvas" uk-offcanvas="overlay: true">
    <div class="uk-offcanvas-bar thele__offcanvas__bar uk-flex uk-flex-column">
        <div class="thele__offcanvas__header uk-position-relative uk-text-center">
            <button class="uk-offcanvas-close uk-position-center-right thele__offcanvas__close" type="button" uk-close></button>
            <h3 class="uk-h3 thele__offcanvas__title">Huy chương</h3>
        </div>
        <div class="thele__offcanvas__body uk-flex-auto uk-overflow-auto">
            <article class="uk-article">
                <h5 class="uk-h5">Cách tính Huy chương:</h5>
                <p>Ban tổ chức sẽ căn cứ vào Giá trị ĐKN các hệ thống đạt được mỗi tuần để xếp hạng và trao Huy chương.</p>
                <p>Chu kì tuần sẽ được tính từ Thứ 7 tuần trước đến Thứ 6 tuần tiếp theo.</p>
                <p>Mỗi Đấu trường sẽ có 3 giải: Nhất - Nhì - Ba:</p>
                <ul class="uk-list">
                    <li>- Giải Nhất nhận được 01 huy chương Vàng;</li>
                    <li>- Giải Nhì nhận được 01 huy chương Bạc;</li>
                    <li>- Giải Ba nhận được 01 huy chương Đồng.</li>
                </ul>
                <p>Nếu số lượng đội tham gia Đấu trường nhỏ hơn hoặc bằng với số lượng Giải thưởng thì giải thấp nhất sẽ không được tính.</p>
                <h6 class="uk-h6">Ví dụ:</h6>
                <p>Đấu trường 7 có 2 đội tham gia, thì sẽ chỉ tính Giải Nhất. Nếu có 3 đội tham gia thì sẽ chỉ tính Giải Nhất và Giải Nhì.</p>
                <h5 class="uk-h5">Cách đổi Huy chương:</h5>
                <ul class="uk-list uk-list-circle">
                    <li>4 Huy chương Vàng sẽ đổi được 1 hộp quà (Box vàng) trong đấu trường đó</li>
                    <li>2 Huy chương Bạc sẽ đổi được 1 Huy chương Vàng cùng hạng</li>
                    <li>2 Huy chương Vàng ở các hạng thấp sẽ đổi được 1 Huy chương Vàng ở hạng cao hơn liền kề</li>
                    <li>1 Huy chương Vàng ở hạng cao hơn sẽ đổi được 1 Huy chương Vàng ở các hạng thấp hơn bất kỳ</li>
                </ul>
                <p>Các huy chương có thể được mua bán, trao đổi, cho - tặng giữa các hệ thống. Mỗi hệ thống tối đa chỉ được giao dịch 1 huy chương mỗi tháng.</p>
            </article>
        </div>
    </div>
</div>
<div id="offcanvas-overlay-thele-5" class="thele__offcanvas" uk-offcanvas="overlay: true">
    <div class="uk-offcanvas-bar thele__offcanvas__bar uk-flex uk-flex-column">
        <div class="thele__offcanvas__header uk-position-relative uk-text-center">
            <button class="uk-offcanvas-close uk-position-center-right thele__offcanvas__close" type="button" uk-close></button>
            <h3 class="uk-h3 thele__offcanvas__title">Giải phụ</h3>
        </div>
        <div class="thele__offcanvas__body uk-flex-auto uk-overflow-auto">
            <article class="uk-article">
                <p>Nhằm mục đích giúp giải đấu OBD Champion thêm Hấp Dẫn, Hoàng Tráng, Kịch Tính hơn BTC sẽ bổ sung thêm Giải Gia tốc vào cơ cấu giải thưởng.</p>
                <h5 class="uk-h5">Thể lệ:</h5>
                <ul class="uk-list uk-list-circle">
                    <li>Dành cho những hộ kinh doanh/hệ thống có thứ hạng vượt qua được nhiều hộ kinh doanh/hệ thống nhất trong bảng xếp hạng tuần tại đấu trường đang tham gia</li>
                    <li>Chỉ dành riêng cho Đấu trường 1 và 2</li>
                    <li>Giải thưởng được xét duyệt và trao thưởng hàng tuần</li>
                </ul>
            </article>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>