<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PersonnelSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
?>
<div class="personnel-index">

    <p>
        <?= Html::a('Create Career', ['career'], ['class' => 'btn btn-success']) ?>
    </p>

<?= GridView::widget([
    'dataProvider' => $dataProviderCareer,
    'columns' => [
        [
            'class' => 'yii\grid\SerialColumn',
        ],
        'start_date',
        'status_id',
        [
            'label' => 'Company',
            'attribute' => 'company.name',
        ],
        'level_id',
        'employment_letter',
    ],
]) ?>


</div>
