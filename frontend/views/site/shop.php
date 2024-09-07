<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'shop';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container text-center">
    <h2>
        <p class="card-text">รวม!! แหล่งช้อปปิ้งหนังสือออนไลน์ที่ LOY LOM สั่งบ่อยที่สุด</p>
    </h2>
    <br>
    <div class="row">
        <div class="col-sm-12 col-md-2 col-xl-3">
            <div class="card" style="width: 15rem;">
                <img src="<?= Yii::$app->request->baseUrl ?>/img/naiin.png" class="card-img-top" alt="Naiin">
                <div class="card-body">
                    <h4><p class="card-text">Naiin</p></h4>
                    <a href="https://www.naiin.com/" <button type="button"
                        class="btn btn-outline-info">ไปยังร้านค้า</button></a>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-2 col-xl-3">
            <div class="card" style="width: 15rem;">
                <img src="<?= Yii::$app->request->baseUrl ?>/img/readery.png" class="card-img-top" alt="Readery">
                <div class="card-body">
                    <h4><p class="card-text">Readery</p></h4>
                    <a href="https://readery.co/" <button type="button"
                        class="btn btn-outline-info">ไปยังร้านค้า</button></a>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-2 col-xl-3">
            <div class="card" style="width: 15rem;">
                <img src="<?= Yii::$app->request->baseUrl ?>/img/amrin.png" class="card-img-top" alt="Amarin">
                <div class="card-body">
                    <h4><p class="card-text">Amarinbooks</p></h4>
                    <a href="https://amarinbooks.com/" <button type="button"
                        class="btn btn-outline-info">ไปยังร้านค้า</button></a>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-2 col-xl-3">
            <div class="card" style="width: 15rem;">
                <img src="<?= Yii::$app->request->baseUrl ?>/img/seed.png" class="card-img-top" alt="Se-ed">
                <div class="card-body">
                    <h4><p class="card-text">Se-ed</p></h4>
                    <a href="https://www.se-ed.com/" <button type="button"
                        class="btn btn-outline-info">ไปยังร้านค้า</button></a>
                </div>
            </div>
        </div>
    </div>
</div>