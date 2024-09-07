<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'วรรณกรรมเรื่องสั้น';
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- หน้าวรรณกรรมเรืองสั้น-->
<div align="center">
    <h2> หมวดวรรณกรรมเรื่องสั้น </h2><br>
</div>
<div class="row row-cols-1 row-cols-md-4 g-4">
    <div class="col">
        <div class="card h-100% " style="width: 20rem;">
            <img src="<?= Yii::$app->request->baseUrl ?>/img/Mockupวัน.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">ถ้าวันหนึ่งนั้น...ฉันตาย </h5>
                <p class="card-text">ผู้เขียน: อีกยองเฮ </p>
                <a href="wun" <button type="button" class="btn btn-outline-info">รายละเอียดเพิ่มเติม</button></a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100% " style="width:20rem;">
            <img src="<?= Yii::$app->request->baseUrl ?>/img/Mockupรส.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">รสชาติของผลไม้ที่ยังไม่สุกงอม </h5>
                <p class="card-text">ผู้เขียน: โชนัมจู </p>
                <a href="rus" <button type="button" class="btn btn-outline-info">รายละเอียดเพิ่มเติม</button></a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100% " style="width:20rem;">
            <img src="<?= Yii::$app->request->baseUrl ?>/img/Mockupแพน.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">ปีเตอร์แพน (Peter Pan) </h5>
                <p class="card-text">ผู้เขียน: เจ.เอ็ม. แบร์รี่</p>
                <a href="peter" <button type="button" class="btn btn-outline-info">รายละเอียดเพิ่มเติม</button></a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100% " style="width:20rem;">
            <img src="<?= Yii::$app->request->baseUrl ?>/img/Mockupนก.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">ซาดาโกะกับนกกระเรียนพันตัว </h5>
                <p class="card-text">ผู้เขียน: Eleanor Coerr </p>
                <a href="sada" <button type="button" class="btn btn-outline-info">รายละเอียดเพิ่มเติม</button></a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100% " style="width:20rem;">
            <img src="<?= Yii::$app->request->baseUrl ?>/img/Mockupเจ้าชาย.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">เจ้าชายน้อย</h5>
                <p class="card-text">ผู้เขียน: อองตวน เดอ แซงเตกซูเปรี </p>
                <a href="lit" <button type="button" class="btn btn-outline-info">รายละเอียดเพิ่มเติม</button></a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100% " style="width:20rem;">
            <img src="<?= Yii::$app->request->baseUrl ?>/img/Mockupบรัดเลย์.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">บรัดเลย์ เด็กเกเรหลังห้องเรียน</h5>
                <p class="card-text">ผู้เขียน: Louis Sacha</p>
                <a href="bud" <button type="button" class="btn btn-outline-info">รายละเอียดเพิ่มเติม</button></a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100% " style="width:20rem;">
            <img src="<?= Yii::$app->request->baseUrl ?>/img/Mockupต้นส้ม.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">ต้นส้มแสนรัก  </h5>
                <p class="card-text">ผู้เขียน: โจเซ่ เมอโร เดอ วาสคอนเซลอส </p>
                <a href="tonkom" <button type="button" class="btn btn-outline-info">รายละเอียดเพิ่มเติม</button></a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100% " style="width:20rem;">
            <img src="<?= Yii::$app->request->baseUrl ?>/img/Mockupต้นส้ม3.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">ต้นส้มแสนรัก ขอให้ดวงอาทิตย์ส่องแสงอีกครั้ง </h5>
                <p class="card-text">ผู้เขียน: โจเซ่ เมอโร เดอ วาสคอนเซลอส </p>
                <a href="tonsom" <button type="button" class="btn btn-outline-info">รายละเอียดเพิ่มเติม</button></a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100% " style="width:20rem;">
            <img src="<?= Yii::$app->request->baseUrl ?>/img/Mockupรับฝาก.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">ศูนย์รับฝากความเสียใจ </h5>
                <p class="card-text">ผู้เขียน: ซื่ออี </p>
                <a href="son" <button type="button" class="btn btn-outline-info">รายละเอียดเพิ่มเติม</button></a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100% " style="width:20rem;">
            <img src="<?= Yii::$app->request->baseUrl ?>/img/Mockupอัลมอน.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">อัลมอนด์ ALMOND</h5>
                <p class="card-text">ผู้เขียน: Sohn Won-Pyung</p>
                <a href="almond" <button type="button" class="btn btn-outline-info">รายละเอียดเพิ่มเติม</button></a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100% " style="width: 20rem;">
            <img src="<?= Yii::$app->request->baseUrl ?>/img/Mockupสมอง.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">หากสมองฉันไม่ได้ฟั่นเฟือน </h5>
                <p class="card-text">ผู้เขียน: ยามาชิโระ อาซาโกะ (โอตสึ อิจิ)</p>
                <a href="smong" <button type="button" class="btn btn-outline-info">รายละเอียดเพิ่มเติม</button></a>
            </div>
        </div>
    </div>
</div>
<br />
<br />
<div align="center">
    <a href="<?=\yii\helpers\Url::home()?>" class="nav-link">Back</a>
</div>