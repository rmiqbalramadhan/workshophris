<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Tree;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PersonnelSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
?>
<div class="personnel-index">

    <p>
        <?= Html::a('Create Status', ['status'], ['class' => 'btn btn-success']) ?>
    </p>

<?= GridView::widget([
    'dataProvider' => $dataProviderStatus,
    'columns' => [
        [
            'class' => 'yii\grid\SerialColumn',
        ],
        'start_date',
        'end_date',
        [
            'label' => 'status',
            'attribute' => 'status.name',
        ],
        'employment_letter',
    ],
]) ?>


</div>
