<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'วรรณกรรมแปลร่วมสมัย';
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- หน้าวรรณกรรมแปลร่วมสมัย-->
<div align="center">
    <h2>หมวดวรรณกรรมแปลร่วมสมัย </h2><br>
</div>
<div class="row row-cols-1 row-cols-md-4 g-4">
    <div class="col">
        <div class="card h-100% " style="width: 20rem;">
            <img src="<?= Yii::$app->request->baseUrl ?>/img/Mockupบ้าน.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">บ้านวิกล คนประหลาด </h5>
                <p class="card-text">ผู้เขียน: อุเก็ตสึ</p>
                <a href="ban" <button type="button" class="btn btn-outline-info">รายละเอียดเพิ่มเติม</button></a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100% " style="width:20rem;">
            <img src="<?= Yii::$app->request->baseUrl ?>/img/Mockupวัย.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">ขอให้วัยเยาว์ของเราเป็นนิรันดร์ </h5>
                <p class="card-text">ผู้เขียน: สตีเฟน ซบอสกี้</p>
                <a href="wui" <button type="button" class="btn btn-outline-info">รายละเอียดเพิ่มเติม</button></a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100% " style="width: 20rem;">
            <img src="<?= Yii::$app->request->baseUrl ?>/img/Mockupร้าน.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">ร้านมหัศจรรย์สำหรับคนไม่หยุดฝัน </h5>
                <p class="card-text">ผู้เขียน: อีมีเย</p>
                <a href="ran" <button type="button" class="btn btn-outline-info">รายละเอียดเพิ่มเติม</button></a>
            </div>
        </div>
    </div>
</div>
<br />
<br />
<div align="center">
    <a href="<?=\yii\helpers\Url::home()?>" class="nav-link">Back</a>
</div>