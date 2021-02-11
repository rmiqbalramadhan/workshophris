<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Tabs;
use yii\helpers\Url;


/* @var $this yii\web\View */
/* @var $searchModel app\models\LeaveSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Leaves';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="leave-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php echo $this->render('/personnel/_searchp', ['model' => $searchModel]); ?>
    
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'employee_code',
            'employee_name',
            // 'lve_master_id',
            // 'prs_master_id',
            // 'start_date',
            // 'end_date',
            // 'day_count',
            //'return_date',
            //'leave_reason',
            //'balance',
            //'substitute_employee',
            //'remark',
            //'approved_id',
            //'superior_approved_id',
            //'activation_code',
            //'activation_expire',
            //'approved_superior_by',
            //'approved_superior_date',
            //'approved_hr_by',
            //'approved_hr_date',
            //'properties',
            //'change_log',
            //'leave_type_id',
            //'other_balance',
            //'created_at',
            //'updated_at',

            [
                'class' => 'yii\grid\ActionColumn',
                'urlCreator' => function( $action, $model, $key, $index ){

                    if ($action == "view") {

                        return Url::to(['/personnel/view', 'id' => $key]);

                    }
                    if ($action == "update") {

                        return Url::to(['/personnel/update', 'id' => $key]);

                    }
                    if ($action == "delete") {

                        return Url::to(['/personnel/view', 'id' => $key]);

                    }

                }
            ],
        ],
    ]); ?>


</div>
