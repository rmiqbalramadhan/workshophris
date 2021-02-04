<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\helpers\Html as KartikHtml;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PersonnelSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
?>
<div class="personnel-index">

<?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'prs_master_id',
            // 'employee_code',
            // 'employee_name',
            // 'birth_place',
            // 'birth_date',
            [
                'label' => 'Tanggal Lahir',
                'attribute' => function($model){
                    return $model->birth_place . ', ' . $model->birth_date . ' ' . Html::tag('span', $model->age . ' tahun', ['class' => 'label label-info']);
                    // return $model->birth_place . ', ' . $model->birth_date . ' ' . KartikHtml::bsLabel($model->age . ' tahun');
                    // return $model->birth_place . ', ' . $model->birth_date . ' ' . $model->age . ' tahun';
                },
                'format' => 'html',
            ],
            [
                'label' => 'Gender',
                'attribute' => 'gender.name',
            ],
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
