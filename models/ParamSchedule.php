<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hr.att_prm_schedule".
 *
 * @property int $prm_shcedule_id
 * @property string $code_name
 * @property string $description
 * @property string|null $check_in
 * @property string|null $check_out
 * @property string|null $rest_in
 * @property string|null $rest_out
 * @property int|null $dispense_minute
 * @property string|null $properties
 * @property string|null $change_log
 */
class ParamSchedule extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hr.att_prm_schedule';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['code_name', 'description'], 'required'],
            [['check_in', 'check_out', 'rest_in', 'rest_out', 'properties', 'change_log'], 'safe'],
            [['dispense_minute'], 'default', 'value' => null],
            [['dispense_minute'], 'integer'],
            [['code_name'], 'string', 'max' => 15],
            [['description'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'prm_shcedule_id' => 'Prm Shcedule ID',
            'code_name' => 'Code Name',
            'description' => 'Description',
            'check_in' => 'Check In',
            'check_out' => 'Check Out',
            'rest_in' => 'Rest In',
            'rest_out' => 'Rest Out',
            'dispense_minute' => 'Dispense Minute',
            'properties' => 'Properties',
            'change_log' => 'Change Log',
        ];
    }
}
