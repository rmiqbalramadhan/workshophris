<?php
use mdm\admin\components\MenuHelper;
use yii\bootstrap\Nav;
use mdm\admin\components\Helper;
?>
<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?= \Yii::$app->user->identity->username; ?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- <?php
        $menuItems = [
            ['label' => 'Menu Yii2', 'options' => ['class' => 'header']],
            ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']],
            ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug']],
            ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
            ['label' => 'Manajemen Tree', 'url' => ['/tree'], 'visible' => Yii::$app->user->can('menu_tree')],
            ['label' => 'Manajemen Personnel', 'url' => ['/personnel']],
            ['label' => 'Dashboard Cuti', 'url' => ['/leave']],
            ['label' => 'Cuti', 'url' => ['/leave/list']],
            ['label' => 'Ijin', 'url' => ['/permission']],
            ['label' => 'Dashboard Ijin', 'url' => ['/permission/dashboard']],
            [
                'label' => 'Admin', 
                'url' => '#',
                'items' => [
                    [
                        'label' => 'Admin', 'url' => ['/admin'],
                    ],
                    [
                        'label' => 'Route', 'url' => ['/admin/route'],
                    ],
                    [
                        'label' => 'Permission', 'url' => ['/admin/permission'],
                    ],
                    [
                        'label' => 'Menu', 'url' => ['/admin/menu'],
                    ],
                    [
                        'label' => 'Role', 'url' => ['/admin/role'],
                    ],
                    [
                        'label' => 'Assignment', 'url' => ['/admin/assignment'],
                    ],
                    [
                        'label' => 'User', 'url' => ['/admin/user'],
                    ],
                ],
            ],
        ];
        $menuItems = Helper::filter($menuItems);

        echo Nav::widget([
            'options' => ['class' => 'sidebar-menu tree'],
            'items' => $menuItems,
        ]);
        ?> -->
        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Menu Yii2', 'options' => ['class' => 'header']],
                    ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']],
                    ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug']],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    ['label' => 'Manajemen Tree', 'url' => ['/tree'], 'visible' => Yii::$app->user->can('all_menu')],
                    ['label' => 'Manajemen Personnel', 'url' => ['/personnel']],
                    ['label' => 'Dashboard Cuti', 'url' => ['/leave']],
                    ['label' => 'Cuti', 'url' => ['/leave/list']],
                    ['label' => 'Ijin', 'url' => ['/permission'], 'visible' => Yii::$app->user->can('all_menu')],
                    ['label' => 'Dashboard Ijin', 'url' => ['/permission/dashboard']],
                    ['label' => 'Dashboard Kehadiran', 'url' => ['/attendance/dashboard'], 'visible' => Yii::$app->user->can('all_menu')],
                    [
                        'label' => 'Admin', 
                        'url' => '#',
                        'items' => [
                            [
                                'label' => 'Admin', 'url' => ['/admin'],
                            ],
                            [
                                'label' => 'Route', 'url' => ['/admin/route'],
                            ],
                            [
                                'label' => 'Permission', 'url' => ['/admin/permission'],
                            ],
                            [
                                'label' => 'Menu', 'url' => ['/admin/menu'],
                            ],
                            [
                                'label' => 'Role', 'url' => ['/admin/role'],
                            ],
                            [
                                'label' => 'Assignment', 'url' => ['/admin/assignment'],
                            ],
                            [
                                'label' => 'User', 'url' => ['/admin/user'],
                            ],
                        ],
                    ],
                    [
                        'label' => 'Some tools',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii'],],
                            ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'],],
                            [
                                'label' => 'Level One',
                                'icon' => 'circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Level Two', 'icon' => 'circle-o', 'url' => '#',],
                                    [
                                        'label' => 'Level Two',
                                        'icon' => 'circle-o',
                                        'url' => '#',
                                        'items' => [
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>
