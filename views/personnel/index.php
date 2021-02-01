<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PersonnelSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Personnels';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="personnel-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Personnel', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'prs_master_id',
            'employee_code',
            'employee_name',
            // 'birth_place',
            // 'birth_date',
            //'gender_id',
            //'religion_id',
            //'address:ntext',
            //'kab_kodya',
            //'province_name',
            //'pos_code',
            //'email:email',
            //'blood_type',
            //'handphone',
            //'photo_path',
            //'user_id',
            //'properties',
            //'change_log',
            //'attendance_id',
            //'telegram_id',
            //'bank_name',
            //'account_number',
            //'account_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
