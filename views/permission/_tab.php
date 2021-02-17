<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use app\models\Tree;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PersonnelSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
?>
<?php
    $url = Url::to(['permission/approval']);
    $js = <<< JS
            $('.approval').on('click', function(e){
                e.preventDefault();
                var id = $(this).data('id');
                var method = $(this).data('method');
                $.ajax({
                    url: '{$url}',
                    type: 'post',
                    data: {id: id , method:method},
                    success: function (data) {
                        $.pjax.reload({container:"#countries"});
                }
            });
        }); 
JS;
    $this->registerJs($js);
?>
<div class="personnel-index">

<?php Pjax::begin(['id' => 'countries']) ?>
<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        [
            'class' => 'yii\grid\SerialColumn',
        ],
        [
            'label' => 'Action',
            'value' => function($data){
                return 
                    Html::button('Approve', ['class' => 'btn btn-success approval', 'data-id' => $data->pms_master_id, 'data-method' => 2]).
                    Html::button('Reject', ['class' => 'btn btn-warning approval', 'data-id' => $data->pms_master_id, 'data-method' => 3]);
            },
            'format' => 'raw',
            
        ],
        'start_date',
        'end_date',
        'permission_type_id',
        'permission_reason',
    ],
]) ?>
<?php Pjax::end() ?>


</div>
