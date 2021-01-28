<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

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
