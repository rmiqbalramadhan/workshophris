<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Tabs;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LeaveSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Attendance';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="permission-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Attendance', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <div class="container">
        <div class="row">
            <div class="col-sm-4">
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'columns' => [
                    [
                        'class' => 'yii\grid\SerialColumn',
                    ],
                    [
                        'label' => 'Pin',
                        'attribute' => 'attendance.employee_name',
                    ],
                    'nik',
                    [
                        'label' => 'Waktu',
                        'value' => function($data){
                            return Yii::$app->formatter->asTime($data->date_time);
                        },
                    ],
                ],
            ]) ?>
            </div>
            <div class="col-sm-8">
            
            </div>
        </div>
    </div>
    <?= GridView::widget([
        'dataProvider' => $dataProviderSchedule,
        'columns' => [
            [
                'class' => 'yii\grid\SerialColumn',
            ],
            [
                'label' => 'Nama',
                'attribute' => 'nama.employee_name'
            ],
            'date_schedule',
            [
                'label' => 'Schedule',
                'attribute' => 'schedule.code_name'
            ],
        ],
    ]) ?>
    

</div>
