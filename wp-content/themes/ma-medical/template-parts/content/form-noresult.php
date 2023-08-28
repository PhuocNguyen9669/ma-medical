
<?php
$searchKey = isset($_GET['key']) ? $_GET['key'] : '';
$searchTax = isset($_GET['tax']) ? $_GET['tax'] : '';
?>
<div class="formSearch noResult">
    <div class="inner">
        <div class="formSearchBox">
            <h3 class="formTitle">検索結果</h3>
            <h4 class="textLg">該当する医師は見つかりませんでした</h4>
            <p class="textSm">条件を変更して再度検索<br class="sp">してください</p>
            <ul class="areaSpecialized">
                <li><span class="label">専門分野:　</span><br class="sp"><span class="value"><?= $searchTax; ?></span></li>
                <li><span class="label">対応可能な疾患:　</span><br class="sp"><span class="value"><?= $searchKey; ?></span></li>
            </ul>
            <p class="btnSpecialized"><a href="<?php echo esc_url(home_url('/doctor-list')); ?>" class="hover">違う条件で再検索する</a></p>
        </div>
    </div>
</div>