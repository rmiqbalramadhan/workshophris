<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Leave */

$this->title = 'Update Leave: ' . $model->lve_master_id;
$this->params['breadcrumbs'][] = ['label' => 'Leaves', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->lve_master_id, 'url' => ['view', 'id' => $model->lve_master_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="leave-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
