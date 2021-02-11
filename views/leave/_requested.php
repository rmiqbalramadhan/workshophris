<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Tree;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PersonnelSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
?>
<div class="personnel-index">

<?= GridView::widget([
    'dataProvider' => $dataProviderRequested,
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
    ],
]) ?>


</div>
