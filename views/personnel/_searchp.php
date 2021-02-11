<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PersonnelSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="personnel-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <!-- <?= $form->field($model, 'prs_master_id') ?> -->

    <!-- <?= $form->field($model, 'employee_code') ?> -->

    <?= $form->field($model, 'employee_name') ?>

    <!-- <?= $form->field($model, 'birth_place') ?> -->

    <!-- <?= $form->field($model, 'birth_date') ?> -->

    <?php // echo $form->field($model, 'gender_id') ?>

    <?php // echo $form->field($model, 'religion_id') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'kab_kodya') ?>

    <?php // echo $form->field($model, 'province_name') ?>

    <?php // echo $form->field($model, 'pos_code') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'blood_type') ?>

    <?php // echo $form->field($model, 'handphone') ?>

    <?php // echo $form->field($model, 'photo_path') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <?php // echo $form->field($model, 'properties') ?>

    <?php // echo $form->field($model, 'change_log') ?>

    <?php // echo $form->field($model, 'attendance_id') ?>

    <?php // echo $form->field($model, 'telegram_id') ?>

    <?php // echo $form->field($model, 'bank_name') ?>

    <?php // echo $form->field($model, 'account_number') ?>

    <?php // echo $form->field($model, 'account_name') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
