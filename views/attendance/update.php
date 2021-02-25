<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Attendance */

$this->title = 'Update Attendance: ' . $model->att_attendance_log_id;
$this->params['breadcrumbs'][] = ['label' => 'Attendances', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->att_attendance_log_id, 'url' => ['view', 'id' => $model->att_attendance_log_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="attendance-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
