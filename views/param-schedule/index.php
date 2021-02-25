<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ParamScheduleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Param Schedules';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="param-schedule-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Param Schedule', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'prm_shcedule_id',
            'code_name',
            'description',
            'check_in',
            'check_out',
            //'rest_in',
            //'rest_out',
            //'dispense_minute',
            //'properties',
            //'change_log',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
