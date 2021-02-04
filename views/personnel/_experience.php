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
        <?= Html::a('Create Experience', ['experience'], ['class' => 'btn btn-success']) ?>
    </p>

<?= GridView::widget([
    'dataProvider' => $dataProviderExperience,
    'columns' => [
        [
            'class' => 'yii\grid\SerialColumn',
        ],
        'experience_year',
        'experience_name',
        // [
        //     'label' => 'status',
        //     'attribute' => 'status.name',
        // ],
        'remark',
    ],
]) ?>


</div>
