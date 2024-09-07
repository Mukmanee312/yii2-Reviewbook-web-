
<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'วรรณกรรมแปลสะท้อนชีวิตและสังคม';
$this->params['breadcrumbs'][] = $this->title;
?><!-- หน้าวรรณกรรมแปลสะท้อนชีวิตและสังคม-->
<div align="center">
    <h2> หมวดวรรณกรรมแปลสะท้อนสังคม </h2><br>
</div>
<div class="row row-cols-1 row-cols-md-4 g-4">
    <div class="col">
        <div class="card h-100% " style="width: 20rem;">
            <img src="<?= Yii::$app->request->baseUrl ?>/img/Mockupบริการ.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">บริการสุดท้ายแด่ผู้ตาย เก็บกวาดความแตกสลายของชีวิต</h5>
                <p class="card-text">ผู้เขียน: คิมวัน</p>
                <a href="kim" <button type="button" class="btn btn-outline-info">รายละเอียดเพิ่มเติม</button></a>
            </div>
        </div>
    </div>
</div>
<br />
<br />
<div align="center">
    <a href="<?=\yii\helpers\Url::home()?>" class="nav-link">Back</a>
</div>