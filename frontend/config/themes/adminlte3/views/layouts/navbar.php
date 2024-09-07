<?php

use yii\helpers\Html;

?>

<ul class="nav justify-content-center" style="background-color: #5C8984;">
    <div align="center">
        <div class="image">
            <img src="<?= Yii::$app->request->baseUrl ?>/img/ปกloylom.png" width="90%" height="auto" alt="User Image">
        </div>
    </div>
</ul>


<?php



?>
<!-- Navbar -->
<nav class="main-header navbar navbar-expand  navbar-dark" style="background-color: #5C8984;">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="<?=\yii\helpers\Url::home()?>" class="nav-link">Home</a>
        </li>

        <li class="nav-item d-none d-sm-inline-block">
            <a href="site/new" class="nav-link">New Book</a>
        </li>

        </li>
        <li class="nav-item dropdown">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                class="nav-link dropdown-toggle">BOOK</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                <li><a href="site/nw" , class="dropdown-item">นวนิยายแปล </a></li>
                <li><a href="site/nn" class="dropdown-item">นิยายแปล</a></li>
                <li><a href="site/nm" class="dropdown-item">วรรณกรรมแปลร่วมสมัย</a></li>
                <li><a href="site/nb" class="dropdown-item">วรรณกรรมแปลสะท้อนชีวิตและสังคม </a></li>
                <li><a href="site/nx" class="dropdown-item"> วรรณกรรม/เรื่องสั้น</a></li>
                <li><a href="site/nz" class="dropdown-item">วรรณกรรมไทย </a></li>
                <li><a href="site/na" class="dropdown-item"> จิตวิทยา/พัฒนาตนเอง</a></li>

            </ul>
            </a>
        </li>

        <li class="nav-item dropdown">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                class="nav-link dropdown-toggle">ReadAWeite</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                <li><a href="site/read" class="dropdown-item">Boy Lovely Room </a></li>
            </ul>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="site/shop" class="nav-link">Shop Online</a>
        </li>
    </ul>


    <!-- SEARCH FORM -->
    <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn " style="background-color: #F0EDD4;" type="submit">Search</button>
    </form>



    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item d-none d-sm-inline-block">
            <a href="site/about" class="nav-link">About</a>
        </li>
        <li class="nav-item">
            <?= Html::a('<i class="fas fa-sign-out-alt"></i>', ['/site/logout'], ['data-method' => 'post', 'class' => 'nav-link']) ?>
        </li>
        

    </ul>
</nav>
<!-- /.navbar -->

