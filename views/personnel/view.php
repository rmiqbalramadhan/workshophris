<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Personnel */

$this->title = $model->prs_master_id;
$this->params['breadcrumbs'][] = ['label' => 'Personnels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="personnel-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->prs_master_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->prs_master_id], [
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
            'prs_master_id',
            'employee_code',
            'employee_name',
            'birth_place',
            'birth_date',
            'gender_id',
            'religion_id',
            'address:ntext',
            'kab_kodya',
            'province_name',
            'pos_code',
            'email:email',
            'blood_type',
            'handphone',
            'photo_path',
            'user_id',
            'properties',
            'change_log',
            'attendance_id',
            'telegram_id',
            'bank_name',
            'account_number',
            'account_name',
        ],
    ]) ?>

</div>
