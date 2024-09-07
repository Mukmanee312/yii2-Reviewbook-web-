<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'จิตวิทยา/พัฒนาตนเอง';
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- หน้าจิตวิทยา-->
<div align="center">
    <h2> หมวดจิตวิทยา และพัฒนาตนเอง </h2><br>
</div>
<div class="row row-cols-1 row-cols-md-4 g-4">
    <div class="col">
        <div class="card h-100% " style="width: 20rem;">
            <img src="<?= Yii::$app->request->baseUrl ?>/img/Mockupคาเฟ่.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">คาเฟ่สำหรับคนหลงทาง</h5>
                <p class="card-text">ผู้เขียน: จอห์น พี. สเตรเลกกี </p>
                <a href="cafe" <button type="button" class="btn btn-outline-info">รายละเอียดเพิ่มเติม</button></a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100% " style="width:20rem;">
            <img src="<?= Yii::$app->request->baseUrl ?>/img/Mockupเมจิก.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Into the magic shop </h5>
                <p class="card-text">ผู้เขียน: James R. Doty, M.D. </p>
                <a href="into" <button type="button" class="btn btn-outline-info">รายละเอียดเพิ่มเติม</button></a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100% " style="width:20rem;">
            <img src="<?= Yii::$app->request->baseUrl ?>/img/Mockupโต.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">โตขึ้นมาเป็นความสุข </h5>
                <p class="card-text">ผู้เขียน: คิดมาก </p>
                <a href="glow" <button type="button" class="btn btn-outline-info">รายละเอียดเพิ่มเติม</button></a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100% " style="width: 20rem;">
            <img src="<?= Yii::$app->request->baseUrl ?>/img/Mockupพลัง.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">พลังของคนที่กล้าทำอะไรคนเดียว </h5>
                <p class="card-text">ผู้เขียน: Tokio Godo </p>
                <a href="power" <button type="button" class="btn btn-outline-info">รายละเอียดเพิ่มเติม</button></a>
            </div>
        </div>
    </div>
</div>
<br />
<br />
<div align="center">
    <a href="<?=\yii\helpers\Url::home()?>" class="nav-link">Back</a>
</div>