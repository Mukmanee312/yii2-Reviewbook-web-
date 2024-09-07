<?php

use yii\helpers\Html;

?>
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
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
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">BOOK</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                <li><a href= "site/nw", class="dropdown-item">นวนิยายแปล </a></li>
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
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">ReadAWeite</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                <li><a href="site/read" class="dropdown-item">Boy Lovely Room </a></li>
            </ul>
        </li>
    </ul>

    <!-- SEARCH FORM -->
            <nav class="navbar bg-body-tertiary">
                <div class="container-fluid">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </nav>
         
    

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <?= Html::a('<i class="fas fa-sign-out-alt"></i>', ['/site/logout'], ['data-method' => 'post', 'class' => 'nav-link']) ?>
        </li>

    </ul>
</nav>
<!-- /.navbar -->
