<?php

use yii\helpers\Html;
use yii\grid\GridView;
use kartik\tree\TreeView;
use kartik\tree\TreeViewInput;
use app\models\Tree;

echo TreeView::widget([
    // single query fetch to render the tree
    'query'             => Tree::find()->addOrderBy('root, lft'), 
    'headingOptions'    => ['label' => 'Categories'],
    'isAdmin'           => true,                       // optional (toggle to enable admin mode)
    'displayValue'      => 1,                           // initial display value
    //'softDelete'      => true,                        // normally not needed to change
    //'cacheSettings'   => ['enableCache' => true]      // normally not needed to change
    'fontAwesome' => true,
]);
echo TreeViewInput::widget([
    // single query fetch to render the tree
    'query'             => Tree::find()->addOrderBy('root, lft'), 
    'headingOptions'    => ['label' => 'Categories'],
    'name'              => 'kv-product',    // input name
    'value'             => '1,2,3',         // values selected (comma separated for multiple select)
    'asDropdown'        => true,            // will render the tree input widget as a dropdown.
    'multiple'          => true,            // set to false if you do not need multiple selection
    'fontAwesome'       => true,            // render font awesome icons
    'rootOptions'       => [
        'label' => '<i class="fa fa-tree"></i>', 
        'class'=>'text-success'
    ],                                      // custom root label
    //'options'         => ['disabled' => true],
]);

/* @var $this yii\web\View */
/* @var $searchModel app\models\TreeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Trees';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tree-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tree', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'root',
            'lft',
            'rgt',
            'lvl',
            //'name',
            //'icon',
            //'icon_type',
            //'active:boolean',
            //'selected:boolean',
            //'disabled:boolean',
            //'readonly:boolean',
            //'visible:boolean',
            //'collapsed:boolean',
            //'movable_u:boolean',
            //'movable_d:boolean',
            //'movable_l:boolean',
            //'movable_r:boolean',
            //'removable:boolean',
            //'removable_all:boolean',
            //'child_allowed:boolean',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
