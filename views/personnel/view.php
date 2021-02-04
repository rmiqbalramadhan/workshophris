<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\bootstrap\Tabs;

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
            // 'prs_master_id',
            'employee_code',
            'employee_name',
            [
                'label' => 'Company',
                'attribute' => function($model){
                    return $model->lastCareer->company->name ?? "";
                }
            ],
            [
                'label' => 'Departemen',
                'attribute' => function($model){
                    return $model->lastCareer->departement->name ?? "";
                }
            ],
            // 'birth_place',
            // 'birth_date',
            // 'gender_id',
            // 'religion_id',
            // 'address:ntext',
            // 'kab_kodya',
            // 'province_name',
            // 'pos_code',
            // 'email:email',
            // 'blood_type',
            // 'handphone',
            // 'photo_path',
            // 'user_id',
            // 'properties',
            // 'change_log',
            // 'attendance_id',
            // 'telegram_id',
            // 'bank_name',
            // 'account_number',
            // 'account_name',
        ],
    ]) ?>

    <?php
        echo Tabs::widget([
            'items' => [
                [
                    'label' => 'Detail',
                    'content' => $this->render('_detail', ['model' => $model]),
                    'active' => true,
                ],
                [
                    'label' => 'Career',
                    'content' => $this->render('_career', ['dataProviderCareer' => $dataProviderCareer, 'model' => $model]),
                ],
                [
                    'label' => 'Status',
                    'content' => $this->render('_status', ['dataProviderStatus' => $dataProviderStatus, 'model' => $model]),
                ],
                [
                    'label' => 'Family',
                    'content' => $this->render('_family', ['dataProviderStatus' => $dataProviderStatus, 'model' => $model]),
                ],
                [
                    'label' => 'Education',
                    // 'content' => $this->render('_education', ['dataProviderStatus' => $dataProviderStatus, 'model' => $model]),
                ],
                [
                    'label' => 'Experience',
                    // 'content' => $this->render('_experience', ['dataProviderStatus' => $dataProviderStatus, 'model' => $model]),
                ],
            ]
        ]);
    ?>

</div>
