<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Permission */

$this->title = $model->pms_master_id;
$this->params['breadcrumbs'][] = ['label' => 'Permissions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="permission-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->pms_master_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->pms_master_id], [
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
            'pms_master_id',
            'prs_master_id',
            'start_date',
            'end_date',
            'permission_type_id',
            'permission_reason',
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
            'document_link',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
