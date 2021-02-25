<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ParamSchedule */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="param-schedule-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'code_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'check_in')->textInput() ?>

    <?= $form->field($model, 'check_out')->textInput() ?>

    <?= $form->field($model, 'rest_in')->textInput() ?>

    <?= $form->field($model, 'rest_out')->textInput() ?>

    <?= $form->field($model, 'dispense_minute')->textInput() ?>

    <?= $form->field($model, 'properties')->textInput() ?>

    <?= $form->field($model, 'change_log')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
