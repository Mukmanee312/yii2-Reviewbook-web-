<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
<h1><?= Html::encode($this->title) ?></h1>

    <p>This is the About page. I pull an all-night to create it. I'm glad it"s finally finished!!!. </p>

    <code><?= __FILE__ ?></code>
</div>
