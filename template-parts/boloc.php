<div class="uk-section-xsmall uk-background-default">
    <div class="uk-container uk-container-expand">
        <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
            <select id="dynamic_select">
                <option value="">Chọn đấu trường</option>
                <option <?= ($_GET['link'] == 'dautruong1.php'?'selected':'') ?> value="dautruong1.php?link=dautruong1.php">Đấu trường 1</option>
                <option <?= ($_GET['link'] == 'dautruong2.php'?'selected':'') ?> value="dautruong2.php?link=dautruong2.php">Đấu trường 2</option>
                <option <?= ($_GET['link'] == 'dautruong3.php'?'selected':'') ?> value="dautruong3.php?link=dautruong3.php">Đấu trường 3</option>
                <option <?= ($_GET['link'] == 'dautruong4.php'?'selected':'') ?> value="dautruong4.php?link=dautruong4.php">Đấu trường 4</option>
                <option <?= ($_GET['link'] == 'dautruong5.php'?'selected':'') ?> value="dautruong5.php?link=dautruong5.php">Đấu trường 5</option>
                <option <?= ($_GET['link'] == 'dautruong6.php'?'selected':'') ?> value="dautruong6.php?link=dautruong6.php">Đấu trường 6</option>
                <option <?= ($_GET['link'] == 'dautruong7.php'?'selected':'') ?> value="dautruong7.php?link=dautruong7.php">Đấu trường 7</option>
            </select>
            <button class="giaithuong__selectBtn uk-button uk-text-left uk-position-relative uk-button-default uk-button-large uk-width-1-1" type="button" tabindex="-1">
                <span></span>
                <span class="uk-position-small uk-position-center-right" uk-icon="icon: chevron-down"></span>
            </button>
        </div>
    </div>
</div>

<script>
    $(function(){
        // bind change event to select
        $('#dynamic_select').on('change', function () {
            var url = $(this).val(); // get selected value
            if (url) { // require a URL
                window.location = url; // redirect
            }
            return false;
        });
    });
</script>