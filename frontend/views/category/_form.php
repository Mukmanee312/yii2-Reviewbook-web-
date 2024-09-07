<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Category $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="category-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'author')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'publisher')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'category')->dropDownList([ 'นวนิยาย' => 'นวนิยาย', 'วรรณกรรมแปลร่วมสมัย' => 'วรรณกรรมแปลร่วมสมัย', 'วรรณกรรมแปลสะท้อนชีวิตและสังคม' => 'วรรณกรรมแปลสะท้อนชีวิตและสังคม', 'วรรณกรรม/เรื่องสั้น' => 'วรรณกรรม/เรื่องสั้น', 'วรรณกรรมไทย' => 'วรรณกรรมไทย', 'นิยายแปล' => 'นิยายแปล', 'จิตวิทยา/พัฒนาตนเอง' => 'จิตวิทยา/พัฒนาตนเอง', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'img_path')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
