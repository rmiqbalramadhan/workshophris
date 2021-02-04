<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Experience */

$this->title = 'Update Experience: ' . $model->prs_experience_id;
$this->params['breadcrumbs'][] = ['label' => 'Experiences', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->prs_experience_id, 'url' => ['view', 'id' => $model->prs_experience_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="experience-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
