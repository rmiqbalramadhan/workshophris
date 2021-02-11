<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Leave */

$this->title = $model->lve_master_id;
$this->params['breadcrumbs'][] = ['label' => 'Leaves', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="leave-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->lve_master_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->lve_master_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'lve_master_id',
            'prs_master_id',
            'start_date',
            'end_date',
            'day_count',
            'return_date',
            'leave_reason',
            'balance',
            'substitute_employee',
            'remark',
            'approved_id',
            'superior_approved_id',
            'activation_code',
            'activation_expire',
            'approved_superior_by',
            'approved_superior_date',
            'approved_hr_by',
            'approved_hr_date',
            'properties',
            'change_log',
            'leave_type_id',
            'other_balance',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
