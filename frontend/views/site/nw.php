<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'นวนิยาย';
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- หน้านวนิยาย-->
<div align="center">
    <h2> หมวดนวนิยาย </h2><br>
</div>
<div class="row row-cols-1 row-cols-md-4 g-4">
    <div class="col">
        <div class="card h-100% " style="width: 20rem;">
            <img src="<?= Yii::$app->request->baseUrl ?>/img/Mockupเชิญรำสุรา1.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">เชิญร่ำสุรา </h5>
                <p class="card-text">ผู้เขียน: ถังจิ่วชิง </p>
                <a href="chen" <button type="button" class="btn btn-outline-info">รายละเอียดเพิ่มเติม</button></a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100% " style="width:20rem;">
            <img src="<?= Yii::$app->request->baseUrl ?>/img/Mockupเหรียญ1.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">เหรียญทองแดงปราบพิภพ </h5>
                <p class="card-text">ผู้เขียน: มู่ซูหลี่ </p>
                <a href="tong" <button type="button" class="btn btn-outline-info">รายละเอียดเพิ่มเติม</button></a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100% " style="width: 20rem;">
            <img src="<?= Yii::$app->request->baseUrl ?>/img/Mockupคำขอ.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">คำขอสุดท้ายจากผู้ตายถึงผม </h5>
                <p class="card-text">ผู้เขียน: Fujimaru </p>
                <a href="com" <button type="button" class="btn btn-outline-info">รายละเอียดเพิ่มเติม</button></a>
            </div>
        </div>
    </div>
</div>
<br />
<br />
<div align="center">
    <a href="<?=\yii\helpers\Url::home()?>" class="nav-link">Back</a>
</div>