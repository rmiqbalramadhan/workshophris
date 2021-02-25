<?php

namespace app\models;

use Yii;
use yii\data\ActiveDataProvider;

/**
 * This is the model class for table "hr.att_schedule".
 *
 * @property int $att_schedule_id
 * @property string $prs_attendance_id
 * @property string|null $date_schedule
 * @property int|null $prm_schedule_id
 * @property string|null $properties
 * @property string|null $change_log
 */
class Schedule extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hr.att_schedule';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['prs_attendance_id'], 'required'],
            [['date_schedule', 'properties', 'change_log'], 'safe'],
            [['prm_schedule_id'], 'default', 'value' => null],
            [['prm_schedule_id'], 'integer'],
            [['prs_attendance_id'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'att_schedule_id' => 'Att Schedule ID',
            'prs_attendance_id' => 'Prs Attendance ID',
            'date_schedule' => 'Date Schedule',
            'prm_schedule_id' => 'Prm Schedule ID',
            'properties' => 'Properties',
            'change_log' => 'Change Log',
        ];
    }

    public function employeeTime(){
        $query = Schedule::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => [
                'defaultOrder' => ['date_schedule' => SORT_ASC]
            ]
        ]);

        $query->andFilterWhere([
            'date_schedule' => date("Y-m-d"),
        ]);

        return $dataProvider;
    }

    public function getNama()
    {
        return $this->hasOne(Personnel::className(), ['attendance_id' => 'prs_attendance_id']);
    }

    public function getSchedule()
    {
        return $this->hasOne(ParamSchedule::className(), ['prm_shcedule_id' => 'prm_schedule_id']);
    }
}
