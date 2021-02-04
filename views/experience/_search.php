<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ExperienceSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="experience-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'prs_experience_id') ?>

    <?= $form->field($model, 'prs_master_id') ?>

    <?= $form->field($model, 'experience_year') ?>

    <?= $form->field($model, 'experience_name') ?>

    <?= $form->field($model, 'experience_certificate') ?>

    <?php // echo $form->field($model, 'remark') ?>

    <?php // echo $form->field($model, 'properties') ?>

    <?php // echo $form->field($model, 'change_log') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
