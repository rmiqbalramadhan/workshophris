<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use app\models\Tree;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PersonnelSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
?>
<div class="personnel-index">

    <p>
        <?= Html::a('Create Leave', ['/leave/create', 'prs_master_id' => $model->prs_master_id], ['class' => 'btn btn-success']) ?>
    </p>

<?= GridView::widget([
    'dataProvider' => $dataProviderLeave,
    'columns' => [
        [
            'class' => 'yii\grid\SerialColumn',
        ],
        'start_date',
        'end_date',
        'approved_id',
        'superior_approved_id',
        'leave_reason',
        'substitute_employee',
        [
            'class' => 'yii\grid\ActionColumn',
                'header'=>'Action',
                'template' => "{print}",
                'buttons' => [
                    'print' => function ($url, $model, $key){
                        return Html::a('<span class="glyphicon glyphicon-print"></span>', $url);
                    },
                ],
                'urlCreator' => function( $action, $model, $key, $index ){
                    if ($action === 'print') {
                        return Url::to(['/leave/print', 'id' => $key]);
                    }
                },
        ],
    ],
]) ?>


</div>
