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
        <?= Html::a('Create Education', ['education'], ['class' => 'btn btn-success']) ?>
    </p>

<?= GridView::widget([
    'dataProvider' => $dataProviderEducation,
    'columns' => [
        [
            'class' => 'yii\grid\SerialColumn',
        ],
        'education_year',
        'education_name',
        // [
        //     'label' => 'status',
        //     'attribute' => 'status.name',
        // ],
        'education_index',
        'remark',
    ],
]) ?>


</div>
