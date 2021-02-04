<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hr.prs_experience".
 *
 * @property int $prs_experience_id
 * @property int $prs_master_id
 * @property int $experience_year
 * @property string $experience_name
 * @property string $experience_certificate
 * @property string|null $remark
 * @property string|null $properties
 * @property string|null $change_log
 */
class Experience extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hr.prs_experience';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['prs_master_id', 'experience_year', 'experience_name', 'experience_certificate'], 'required'],
            [['prs_master_id', 'experience_year'], 'default', 'value' => null],
            [['prs_master_id', 'experience_year'], 'integer'],
            [['properties', 'change_log'], 'safe'],
            [['experience_name', 'experience_certificate'], 'string', 'max' => 100],
            [['remark'], 'string', 'max' => 150],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'prs_experience_id' => 'Prs Experience ID',
            'prs_master_id' => 'Prs Master ID',
            'experience_year' => 'Experience Year',
            'experience_name' => 'Experience Name',
            'experience_certificate' => 'Experience Certificate',
            'remark' => 'Remark',
            'properties' => 'Properties',
            'change_log' => 'Change Log',
        ];
    }
}
