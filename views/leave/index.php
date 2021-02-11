<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Tabs;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LeaveSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Leaves';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="leave-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Leave', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php
        echo Tabs::widget([
            'items' => [
                [
                    'label' => 'Requested',
                    'content' => $this->render('_requested', ['dataProviderRequested' => $dataProviderRequested]),
                    // 'active' => true,
                ],
                [
                    'label' => 'Approved',
                    'content' => $this->render('_approved', ['dataProviderApproved' => $dataProviderApproved]),
                ],
                [
                    'label' => 'Rejected',
                    'content' => $this->render('_rejected', ['dataProviderRejected' => $dataProviderRejected]),
                ],
            ]
        ]);
    ?>
    
    <!-- <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'lve_master_id',
            'prs_master_id',
            'start_date',
            'end_date',
            'day_count',
            //'return_date',
            //'leave_reason',
            //'balance',
            //'substitute_employee',
            //'remark',
            //'approved_id',
            //'superior_approved_id',
            //'activation_code',
            //'activation_expire',
            //'approved_superior_by',
            //'approved_superior_date',
            //'approved_hr_by',
            //'approved_hr_date',
            //'properties',
            //'change_log',
            //'leave_type_id',
            //'other_balance',
            //'created_at',
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?> -->


</div>
