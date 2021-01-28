<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Tree;

/* @var $this yii\web\View */
/* @var $model app\models\Status */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="status-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'prs_master_id')->textInput() ?>

    <?= $form->field($model, 'start_date')->textInput() ?>

    <?= $form->field($model, 'end_date')->textInput() ?>

    <!-- <?= $form->field($model, 'status_id')->textInput() ?> -->
    <?= $form->field($model, 'status_id')->dropdownList(Tree::getDropDownParameter('Status')) ?>

    <?= $form->field($model, 'employment_letter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'remark')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'properties')->textInput() ?>

    <?= $form->field($model, 'change_log')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
