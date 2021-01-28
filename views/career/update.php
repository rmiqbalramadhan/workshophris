<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Career */

$this->title = 'Update Career: ' . $model->prs_career_id;
$this->params['breadcrumbs'][] = ['label' => 'Careers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->prs_career_id, 'url' => ['view', 'id' => $model->prs_career_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="career-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
