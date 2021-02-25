<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ParamSchedule */

$this->title = 'Update Param Schedule: ' . $model->prm_shcedule_id;
$this->params['breadcrumbs'][] = ['label' => 'Param Schedules', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->prm_shcedule_id, 'url' => ['view', 'id' => $model->prm_shcedule_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="param-schedule-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
