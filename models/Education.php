<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hr.prs_education".
 *
 * @property int $prs_education_id
 * @property int $prs_master_id
 * @property int $education_year
 * @property string $education_name
 * @property int|null $education_index
 * @property string|null $education_certificate
 * @property string|null $remark
 * @property string|null $properties
 * @property string|null $change_log
 */
class Education extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hr.prs_education';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['prs_master_id', 'education_year', 'education_name'], 'required'],
            [['prs_master_id', 'education_year', 'education_index'], 'default', 'value' => null],
            [['prs_master_id', 'education_year', 'education_index'], 'integer'],
            [['properties', 'change_log'], 'safe'],
            [['education_name', 'education_certificate'], 'string', 'max' => 100],
            [['remark'], 'string', 'max' => 150],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'prs_education_id' => 'Prs Education ID',
            'prs_master_id' => 'Prs Master ID',
            'education_year' => 'Education Year',
            'education_name' => 'Education Name',
            'education_index' => 'Education Index',
            'education_certificate' => 'Education Certificate',
            'remark' => 'Remark',
            'properties' => 'Properties',
            'change_log' => 'Change Log',
        ];
    }
}
