<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'New book';
$this->params['breadcrumbs'][] = $this->title;
?>
<div align="center">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
        integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous">
    </script>
    <div class="col-md-12 col-xs-12">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-80" src="<?= Yii::$app->request->baseUrl ?>/img//ปกเว็บ4.png" alt="devbanban">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-80" src="<?= Yii::$app->request->baseUrl ?>/img/ปกเว็บ2.png" alt="devbanban">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-80" src="<?= Yii::$app->request->baseUrl ?>/img/ปกเว็บ (1).png"
                        alt="devbanban">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-80" src="<?= Yii::$app->request->baseUrl ?>/img/ปกเว็บ (2).png"
                        alt="devbanban">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-80" src="<?= Yii::$app->request->baseUrl ?>/img/ปกเว็บ (3).png"
                        alt="devbanban">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
<br />
    <div align="center">
        <h2> ใหม่มาแรง</h2>
    </div>
    <br />
    <br />
    <div class="contrainer">
        <div class="row">
            <?php
        foreach ($model as $data) {
        ?>
            <div class="col-sm-9 col-md-4 col-xl-3 ">
                <div align="center">
                    <div class="card-deck">
                        <div class="card">
                            <img class="card-img-top" src="<?= yii::$app->request->baseUrl ?>/<?= $data->img_path ?>"
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
            </div>
            <?php
        }
        ?>
        </div>
    </div>
    <br />
    <br />
    <div align="center">
        <a href="<?=\yii\helpers\Url::home()?>" class="nav-link">Back</a>
    </div>