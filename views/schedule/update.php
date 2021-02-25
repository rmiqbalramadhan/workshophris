<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Schedule */

$this->title = 'Update Schedule: ' . $model->att_schedule_id;
$this->params['breadcrumbs'][] = ['label' => 'Schedules', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->att_schedule_id, 'url' => ['view', 'id' => $model->att_schedule_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="schedule-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
