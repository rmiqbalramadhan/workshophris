<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tree".
 *
 * @property int $id
 * @property int|null $root
 * @property int $lft
 * @property int $rgt
 * @property int $lvl
 * @property string $name
 * @property string|null $icon
 * @property int $icon_type
 * @property bool $active
 * @property bool $selected
 * @property bool $disabled
 * @property bool $readonly
 * @property bool $visible
 * @property bool $collapsed
 * @property bool $movable_u
 * @property bool $movable_d
 * @property bool $movable_l
 * @property bool $movable_r
 * @property bool $removable
 * @property bool $removable_all
 * @property bool $child_allowed
 */
class Tree extends \kartik\tree\models\Tree
{
    use \kartik\tree\models\TreeTrait {
        isDisabled as parentIsDisabled; // note the alias
    }
 
    /**
     * @var string the classname for the TreeQuery that implements the NestedSetQueryBehavior.
     * If not set this will default to `kartik	ree\models\TreeQuery`.
     */
    public static $treeQueryClass; // change if you need to set your own TreeQuery
 
    /**
     * @var bool whether to HTML encode the tree node names. Defaults to `true`.
     */
    public $encodeNodeNames = true;
 
    /**
     * @var bool whether to HTML purify the tree node icon content before saving.
     * Defaults to `true`.
     */
    public $purifyNodeIcons = true;
 
    /**
     * @var array activation errors for the node
     */
    public $nodeActivationErrors = [];
 
    /**
     * @var array node removal errors
     */
    public $nodeRemovalErrors = [];
 
    /**
     * @var bool attribute to cache the `active` state before a model update. Defaults to `true`.
     */
    public $activeOrig = true;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tree';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['root', 'lft', 'rgt', 'lvl', 'icon_type'], 'default', 'value' => null],
            [['root', 'lft', 'rgt', 'lvl', 'icon_type'], 'integer'],
            //'lft', 'rgt', 'lvl', this removed due to this reason https://github.com/kartik-v/yii2-tree-manager/issues/61
            [['name'], 'required'],
            [['active', 'selected', 'disabled', 'readonly', 'visible', 'collapsed', 'movable_u', 'movable_d', 'movable_l', 'movable_r', 'removable', 'removable_all', 'child_allowed'], 'boolean'],
            [['name'], 'string', 'max' => 60],
            [['icon'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'root' => 'Root',
            'lft' => 'Lft',
            'rgt' => 'Rgt',
            'lvl' => 'Lvl',
            'name' => 'Name',
            'icon' => 'Icon',
            'icon_type' => 'Icon Type',
            'active' => 'Active',
            'selected' => 'Selected',
            'disabled' => 'Disabled',
            'readonly' => 'Readonly',
            'visible' => 'Visible',
            'collapsed' => 'Collapsed',
            'movable_u' => 'Movable U',
            'movable_d' => 'Movable D',
            'movable_l' => 'Movable L',
            'movable_r' => 'Movable R',
            'removable' => 'Removable',
            'removable_all' => 'Removable All',
            'child_allowed' => 'Child Allowed',
        ];
    }

    public static function getDropDownParameter($type, $exception = [])
    {
        $list = [];
        $searchType = Tree::find()->where(['name' => $type])->one();

        $parameters = $searchType->children(1)->andWhere(['active' => 1])->all();
        foreach ($parameters as $parameter)
        {
            if (!in_array($parameter->name, $exception))
                $list[$parameter->id] = $parameter->name;
        }

        return $list;
    }
}
