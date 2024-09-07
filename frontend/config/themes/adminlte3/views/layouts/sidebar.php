
<aside class="main-sidebar sidebar-black  elevation-4" style="background-color: #F0EDD4;">
    <!-- Brand Logo -->
    <a href="<?=Yii::$app->homeUrl?>" class="brand-link">
        <img src="<?= Yii::$app->request->baseUrl ?>/img/1.png" alt="loylomLogo"  class="brand-image img-circle elevation-3" style="opacity: .5">
        <span class="brand-text font-weight-light">LOY LOM</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" >
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= Yii::$app->request->baseUrl ?>/img/2.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info" >
                <a href="#" class="d-block">Mukmaru</a>
            </div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2" >
            <?php
            echo \hail812\adminlte\widgets\Menu::widget([
                'items' => [
                    [  'label' => 'My Pages',
                        'icon' => 'user',
                        'badge' => '<span class="right badge " style="background-color: #FEA1A1;"  >2</span>  ',
                        'items' => [
                            ['label' => 'ข้อมูลส่วนตัว ', 'icon' => 'pen','visible' => !Yii::$app->user->isGuest],
                            ['label' => 'ชั้นหนังสือของฉัน', 'icon' => 'book','visible' => !Yii::$app->user->isGuest],

                        ]
                    ],
                    ['label' => 'ร้านของฉัน', 'header' => true],
                    ['label' => 'ผู้ใช้', 'url' => ['users/index'], 'icon' => 'users','visible' => !Yii::$app->user->isGuest],
                    [  'label' => 'คลังหนังสือ',
                        'icon' => 'box',
                        'badge' => '<span class="right badge " style="background-color: #FEA1A1;"  >3</span>  ',
                        'items' => [
                            ['label' => 'รายการหนังสือ ', 'url' => ['product/index'],'icon' => 'book','visible' => !Yii::$app->user->isGuest],
                            ['label' => 'สร้างเล่มใหม่', 'url' => ['product/create'], 'icon' => 'pen','visible' => !Yii::$app->user->isGuest],
                            ['label' => 'หนังสือ','url' => ['site/book'], 'icon' => 'book','visible' => !Yii::$app->user->isGuest],

                        ]
                    ],
                    ['label' => 'คะแนนสะสมของฉัน', 'icon' => 'star','visible' => !Yii::$app->user->isGuest],
                    ['label' => 'คูปองของฉัน', 'icon' => 'credit-card','visible' => !Yii::$app->user->isGuest],
                    ['label' => 'ประวัติการสั่งซื้อ', 'icon' => 'file','visible' => !Yii::$app->user->isGuest],
                    ['label' => 'การตั้งค่า', 'header' => true],
                    ['label' => 'ตั้งค่าการแสดงผล ', 'icon' => 'sun','visible' => !Yii::$app->user->isGuest],
                    ['label' => 'ตั้งค่าประสิทธิภาพ ', 'icon' => 'tv','visible' => !Yii::$app->user->isGuest],
                    ['label' => 'ตั้งค่าการเป็นส่วนตัว ', 'icon' => 'lock','visible' => !Yii::$app->user->isGuest],
                    ['label' => 'ตั้งค่าความปลอดภัย', 'icon' => 'key','visible' => !Yii::$app->user->isGuest],
                    ['label' => 'การเข้าสู่ระบบ', 'header' => true],
                    ['label' => 'Login', 'url' => ['site/login'], 'icon' => 'sign-in-alt', 'visible' => Yii::$app->user->isGuest],

                    
                    
                ],
            ]);
            ?>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
  