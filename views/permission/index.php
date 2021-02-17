<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PermissionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Permissions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="permission-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Permission', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'pms_master_id',
            'prs_master_id',
            'employee_name',
            // 'start_date',
            // 'end_date',
            // 'permission_type_id',
            //'permission_reason',
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
            //'document_link',
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
                        return Url::to(['/personnel/delete', 'id' => $key]);
                    }
                }
            ],
        ],
    ]); ?>


</div>
