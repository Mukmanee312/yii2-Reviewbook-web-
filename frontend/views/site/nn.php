<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'นิยายแปล';
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- หน้านิยายแปล-->
<div align="center">
    <h2> หมวดนิยายแปล </h2><br>
</div>
<div class="row row-cols-1 row-cols-md-4 g-5">
    <div class="col">
        <div class="card h-100% " style="width: 20rem;">
            <img src="<?= Yii::$app->request->baseUrl ?>/img/Mockupคนหาย.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">คนที่หายไป ใครที่กลับมา </h5>
                <p class="card-text">ผู้เขียน: Kanae Minato</p>
                <a href="cont" <button type="button" class="btn btn-outline-info">รายละเอียดเพิ่มเติม</button></a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100% " style="width:20rem;">
            <img src="<?= Yii::$app->request->baseUrl ?>/img/Mockupคดี.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">คดีฆาตกรรมบนเนินอิบาริงะโอกะ </h5>
                <p class="card-text">ผู้เขียน: Kanae Minato</p>
                <a href="cadee" <button type="button" class="btn btn-outline-info">รายละเอียดเพิ่มเติม</button> </a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100% " style="width: 20rem;">
            <img src="<?= Yii::$app->request->baseUrl ?>/img/Mockupตาย.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">ไปตายด้วยกันไหม </h5>
                <p class="card-text">ผู้เขียน: Ubukata</p>
                <a href="go" <button type="button" class="btn btn-outline-info">รายละเอียดเพิ่มเติม</button></a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100% " style="width:20rem;">
            <img src="<?= Yii::$app->request->baseUrl ?>/img/Mockupปีศาจ.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">ปีศาจยามวิกาล </h5>
                <p class="card-text">ผู้เขียน: Yoru Sumino</p>
                <a href="pe" <button type="button" class="btn btn-outline-info">รายละเอียดเพิ่มเติม</button></a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100% " style="width:20rem;">
            <img src="<?= Yii::$app->request->baseUrl ?>/img/Mockupนักสืบ.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">คำสาปยอดนักสืบ</h5>
                <p class="card-text">ผู้เขียน: Keigo Higashino </p>
                <a href="sob" <button type="button" class="btn btn-outline-info">รายละเอียดเพิ่มเติม</button></a>
            </div>
        </div>
    </div>
</div>
<br />
<br />
<div align="center">
    <a href="<?=\yii\helpers\Url::home()?>" class="nav-link">Back</a>
</div>