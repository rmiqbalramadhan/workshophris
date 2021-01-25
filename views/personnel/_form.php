<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Personnel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="personnel-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'employee_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'employee_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'birth_place')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'birth_date')->textInput() ?>

    <?= $form->field($model, 'gender_id')->textInput() ?>

    <?= $form->field($model, 'religion_id')->textInput() ?>

    <?= $form->field($model, 'address')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'kab_kodya')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'province_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pos_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'blood_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'handphone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'photo_path')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'properties')->textInput() ?>

    <?= $form->field($model, 'change_log')->textInput() ?>

    <?= $form->field($model, 'attendance_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telegram_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bank_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'account_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'account_name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
