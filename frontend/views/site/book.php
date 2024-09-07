<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'book';
$this->params['breadcrumbs'][] = $this->title;
?>
<div align="center">
    <h2> หนังสือทั้งหมด</h2>
</div>
<br />
<br />
<div class="container">
    <div class="row">
        <?php 
        foreach ($model as $data) { ?>
        <div class="col-sm-8 col-md-4 col-xl-4">
            <div align="center">
                <div class="card" style="width: 20rem;">
                    <img class="card-img-top" src="<?= Yii::$app->request->baseUrl ?>/<?=$data ->img_path ?>"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?=$data ->name  ?>
                            <span class="badge badge-info">New</span>
                        </h5>
                        <p class="card-text">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><?=$data ->publisher ?></li>
                            <li class="list-group-item"><?=$data ->category ?></li>
                        </ul>
                        </p>
                    </div>

                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<br />
<br />
<div align="center">
    <a href="<?=\yii\helpers\Url::home()?>" class="nav-link">Back</a>
</div>