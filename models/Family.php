<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hr.prs_family".
 *
 * @property int $prs_family_id
 * @property int $prs_master_id
 * @property string $full_name
 * @property int|null $relation_id
 * @property string|null $birth_place
 * @property string|null $birth_date
 * @property int|null $gender_id
 * @property string|null $remark
 * @property string|null $properties
 * @property string|null $change_log
 */
class Family extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hr.prs_family';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['prs_master_id', 'full_name'], 'required'],
            [['prs_master_id', 'relation_id', 'gender_id'], 'default', 'value' => null],
            [['prs_master_id', 'relation_id', 'gender_id'], 'integer'],
            [['birth_date', 'properties', 'change_log'], 'safe'],
            [['full_name', 'birth_place'], 'string', 'max' => 50],
            [['remark'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'prs_family_id' => 'Prs Family ID',
            'prs_master_id' => 'Prs Master ID',
            'full_name' => 'Full Name',
            'relation_id' => 'Relation ID',
            'birth_place' => 'Birth Place',
            'birth_date' => 'Birth Date',
            'gender_id' => 'Gender ID',
            'remark' => 'Remark',
            'properties' => 'Properties',
            'change_log' => 'Change Log',
        ];
    }
}
