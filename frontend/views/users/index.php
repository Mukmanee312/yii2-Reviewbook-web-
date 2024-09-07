<?php

use common\models\Users;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var common\models\UsersSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Users', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id:text:รหัสผู้ใช้งาน',
            'username:text:ชื่อผู้ใช้งาน',
            'fname:text:ชื่อ',
            'lname:text:นามสกุล',
            //'role',
            //ปรับแต่ง column เองจร้
            [
                'label'=> 'บทบาท',
                'format'=> 'html',
                'value'=> function($model){
                    if($model->role == 0){
                        return '
                        <div align="center">
                        Admin <br>
                        <font style="colar:#FF0000;">
                        <i class="fas fa-users"></i>
                        </font>
                        </div>';
                    }else if($model->role ==1){
                        return '<div align="center">
                        <i class="fas fa-user"></i>
                        </div>';
                    }else{
                        return '<div align="center">
                        <i class="fas fa-user-tie"></i>
                        </div>';
                    }
                    return $model->role;
                },
                
            ],
            'tel_no:text:เบอร์โทร',
            //'role',
            //'auth_key',
            //'password_hash',
            //'password_reset_token',
            'email:email:อีเมล์:',
            //'status',
            //'isActive',
            //'created_by_user_id',
            //'updated_by_user_id',
            //'created_at',
            //'updated_at',
            //'verification_token',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Users $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
