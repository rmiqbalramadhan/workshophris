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
        <?= Html::a('Create Family', ['/family/create'], ['class' => 'btn btn-success']) ?>
    </p>

<?= GridView::widget([
    'dataProvider' => $dataProviderFamily,
    'columns' => [
        [
            'class' => 'yii\grid\SerialColumn',
        ],
        'full_name',
        [
            'label' => 'Hubungan',
            'attribute' => 'relasi.name',
        ],
        'birth_place',
        'birth_date',
        [
            'label' => 'Jenis Kelamin',
            'attribute' => 'gender.name',
        ],
    ],
]) ?>


</div>
