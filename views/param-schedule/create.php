<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ParamSchedule */

$this->title = 'Create Param Schedule';
$this->params['breadcrumbs'][] = ['label' => 'Param Schedules', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="param-schedule-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
