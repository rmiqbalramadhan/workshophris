<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Permission */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="permission-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'prs_master_id')->textInput() ?>

    <?= $form->field($model, 'start_date')->textInput() ?>

    <?= $form->field($model, 'end_date')->textInput() ?>

    <?= $form->field($model, 'permission_type_id')->textInput() ?>

    <?= $form->field($model, 'permission_reason')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'remark')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'approved_id')->textInput() ?>

    <?= $form->field($model, 'superior_approved_id')->textInput() ?>

    <?= $form->field($model, 'activation_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'activation_expire')->textInput() ?>

    <?= $form->field($model, 'approved_superior_by')->textInput() ?>

    <?= $form->field($model, 'approved_superior_date')->textInput() ?>

    <?= $form->field($model, 'approved_hr_by')->textInput() ?>

    <?= $form->field($model, 'approved_hr_date')->textInput() ?>

    <?= $form->field($model, 'properties')->textInput() ?>

    <?= $form->field($model, 'change_log')->textInput() ?>

    <?= $form->field($model, 'document_link')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
