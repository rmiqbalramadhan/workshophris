<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LeaveSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="leave-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'lve_master_id') ?>

    <?= $form->field($model, 'prs_master_id') ?>

    <?= $form->field($model, 'start_date') ?>

    <?= $form->field($model, 'end_date') ?>

    <?= $form->field($model, 'day_count') ?>

    <?php // echo $form->field($model, 'return_date') ?>

    <?php // echo $form->field($model, 'leave_reason') ?>

    <?php // echo $form->field($model, 'balance') ?>

    <?php // echo $form->field($model, 'substitute_employee') ?>

    <?php // echo $form->field($model, 'remark') ?>

    <?php // echo $form->field($model, 'approved_id') ?>

    <?php // echo $form->field($model, 'superior_approved_id') ?>

    <?php // echo $form->field($model, 'activation_code') ?>

    <?php // echo $form->field($model, 'activation_expire') ?>

    <?php // echo $form->field($model, 'approved_superior_by') ?>

    <?php // echo $form->field($model, 'approved_superior_date') ?>

    <?php // echo $form->field($model, 'approved_hr_by') ?>

    <?php // echo $form->field($model, 'approved_hr_date') ?>

    <?php // echo $form->field($model, 'properties') ?>

    <?php // echo $form->field($model, 'change_log') ?>

    <?php // echo $form->field($model, 'leave_type_id') ?>

    <?php // echo $form->field($model, 'other_balance') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
