<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Tabs;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LeaveSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Permission';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="permission-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Permission', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php
        echo Tabs::widget([
            'items' => [
                [
                    'label' => 'Requested',
                    'content' => $this->render('_tab', ['dataProvider' => $dataProviderRequested]),
                ],
                [
                    'label' => 'Approved',
                    'content' => $this->render('_tab', ['dataProvider' => $dataProviderApproved]),
                ],
                [
                    'label' => 'Rejected',
                    'content' => $this->render('_tab', ['dataProvider' => $dataProviderRejected]),
                ],
            ]
        ]);
    ?>
    
</div>
