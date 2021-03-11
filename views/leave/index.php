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
    
    <?php \insolita\wgadminlte\LteBox::begin([
        'type'=>\insolita\wgadminlte\LteConst::TYPE_INFO,
        'isSolid'=>true,
        // 'boxTools'=>'<button class="btn btn-success btn-xs create_button" ><i class="fa fa-plus-circle"></i> Add</button>',
        // 'tooltip'=>'this tooltip description',
        'title'=>'Leave Employee Info',
        // 'footer'=>'total 44 active users',
    ])?>

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
    <?php \insolita\wgadminlte\LteBox::end()?>
</div>
