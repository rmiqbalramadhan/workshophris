<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ParamScheduleSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="param-schedule-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'prm_shcedule_id') ?>

    <?= $form->field($model, 'code_name') ?>

    <?= $form->field($model, 'description') ?>

    <?= $form->field($model, 'check_in') ?>

    <?= $form->field($model, 'check_out') ?>

    <?php // echo $form->field($model, 'rest_in') ?>

    <?php // echo $form->field($model, 'rest_out') ?>

    <?php // echo $form->field($model, 'dispense_minute') ?>

    <?php // echo $form->field($model, 'properties') ?>

    <?php // echo $form->field($model, 'change_log') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
