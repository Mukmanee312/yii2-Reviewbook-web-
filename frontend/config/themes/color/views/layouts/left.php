<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="<?= Yii::$app->request->baseUrl ?>/img/1.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">ลอยลม</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= Yii::$app->request->baseUrl ?>/img/2.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Mukmaru</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <!-- href be escaped -->
        <!-- <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div> -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <?php
            echo \hail812\adminlte\widgets\Menu::widget([
                'items' => [
                    [  'label' => 'My Pages',
                        'icon' => 'user',
                        'badge' => '<span class="right badge badge-info">2</span>',
                        'items' => [
                            ['label' => 'ข้อมูลส่วนตัว ', 'icon' => 'pen','visible' => !Yii::$app->user->isGuest],
                            ['label' => 'ชั้นหนังสือของฉัน', 'icon' => 'book','visible' => !Yii::$app->user->isGuest],
//['label' => 'ลิสต์', 'icon' => 'list','visible' => !Yii::$app->user->isGuest],
                        ]
                    ],
                    //['label' => 'Home ', 'url' => ['site/a'], 'icon' => 'home','visible' => !Yii::$app->user->isGuest],
                    //['label' => 'About ', 'url' => ['site/about'], 'icon' => 'address-card','visible' => !Yii::$app->user->isGuest],

                    ['label' => 'ร้านของฉัน', 'header' => true],
                    //['label' => 'คำสั่งซื้อ', 'url' => ['site/fanfic'],'icon' => 'fire','visible' => !Yii::$app->user->isGuest],
                    ['label' => 'Product','url' => ['product/index'], 'icon' => 'bookmark','visible' => !Yii::$app->user->isGuest],
                    ['label' => 'Create', 'url' => ['product/create'], 'icon' => 'pen','visible' => !Yii::$app->user->isGuest],
                    ['label' => 'คะแนนสะสมของฉัน', 'icon' => 'bell','visible' => !Yii::$app->user->isGuest],
                    ['label' => 'คูปองของฉัน', 'icon' => 'bell','visible' => !Yii::$app->user->isGuest],
                    //['label' => 'คูปองของฉัน', 'header' => true],

                    //['label' => 'รายการที่ซื้อแล้ว ', 'icon' => 'clipboard','visible' => !Yii::$app->user->isGuest],
                    ['label' => 'ประวัติการสั่งซื้อ', 'icon' => 'file','visible' => !Yii::$app->user->isGuest],
                    //['label' => 'Pre-order ที่สั่งซื้อ', 'icon' => 'barcode','visible' => !Yii::$app->user->isGuest],
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