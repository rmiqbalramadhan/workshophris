<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Permission */

$this->title = 'Update Permission: ' . $model->pms_master_id;
$this->params['breadcrumbs'][] = ['label' => 'Permissions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pms_master_id, 'url' => ['view', 'id' => $model->pms_master_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="permission-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
