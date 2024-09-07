<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'วรรณกรรมไทย';
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- หน้าวรรณกรรมไทย-->
<div align="center">
    <h2> หมวดวรรณกรรมไทย </h2><br>
</div>
<div class="row row-cols-1 row-cols-md-4 g-4">
    <div class="col">
        <div class="card h-100% " style="width: 20rem;">
            <img src="<?= Yii::$app->request->baseUrl ?>/img/Mockupเผา.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">แล้วความรักก็ถูกเผาเป็นเถ้าบุหรี่</h5>
                <p class="card-text">ผู้เขียน: ชลกร เจ </p>
                <a href="lew" <button type="button" class="btn btn-outline-info">รายละเอียดเพิ่มเติม</button></a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100% " style="width:20rem;">
            <img src="<?= Yii::$app->request->baseUrl ?>/img/Mockupเกิดขึ้น.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">เกิดขึ้น รักอยู่ ดับไป </h5>
                <p class="card-text">ผู้เขียน: ปารณีย์ ประภาพรพิพัฒน์ </p>
                <a href="gad" <button type="button" class="btn btn-outline-info">รายละเอียดเพิ่มเติม</button></a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100% " style="width:20rem;">
            <img src="<?= Yii::$app->request->baseUrl ?>/img/Mockupเศษ.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">เศษหนึ่งส่วนเศร้า </h5>
                <p class="card-text">ผู้เขียน: Marry D. Minor </p>
                <a href="one" <button type="button" class="btn btn-outline-info">รายละเอียดเพิ่มเติม</button></a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100% " style="width: 20rem;">
            <img src="<?= Yii::$app->request->baseUrl ?>/img/Mockupเมษา.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">เมษาลาตะวัน </h5>
                <p class="card-text">ผู้เขียน: September's Blue </p>
                <a href="ta" <button type="button" class="btn btn-outline-info">รายละเอียดเพิ่มเติม</button></a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100% " style="width:20rem;">
            <img src="<?= Yii::$app->request->baseUrl ?>/img/Mockupกะทิ.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">ความสุขของกะทิ</h5>
                <p class="card-text">ผู้เขียน: งามพรรณ เวชชาชีวะ </p>
                <a href="hap" <button type="button" class="btn btn-outline-info">รายละเอียดเพิ่มเติม</button></a>
            </div>
        </div>
    </div>

</div>
<br />
<br />
<div align="center">
    <a href="<?=\yii\helpers\Url::home()?>" class="nav-link">Back</a>
</div>