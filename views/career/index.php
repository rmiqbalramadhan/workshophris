<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CareerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Careers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="career-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Career', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'prs_career_id',
            'prs_master_id',
            'start_date',
            'status_id',
            'company_id',
            //'division_id',
            //'department_id',
            //'level_id',
            //'reason',
            //'superior_id',
            //'employment_letter',
            //'job_title_id',
            //'properties',
            //'change_log',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
