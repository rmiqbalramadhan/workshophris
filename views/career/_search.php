<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CareerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="career-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'prs_career_id') ?>

    <?= $form->field($model, 'prs_master_id') ?>

    <?= $form->field($model, 'start_date') ?>

    <?= $form->field($model, 'status_id') ?>

    <?= $form->field($model, 'company_id') ?>

    <?php // echo $form->field($model, 'division_id') ?>

    <?php // echo $form->field($model, 'department_id') ?>

    <?php // echo $form->field($model, 'level_id') ?>

    <?php // echo $form->field($model, 'reason') ?>

    <?php // echo $form->field($model, 'superior_id') ?>

    <?php // echo $form->field($model, 'employment_letter') ?>

    <?php // echo $form->field($model, 'job_title_id') ?>

    <?php // echo $form->field($model, 'properties') ?>

    <?php // echo $form->field($model, 'change_log') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
