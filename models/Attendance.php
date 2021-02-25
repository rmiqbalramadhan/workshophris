<?php

namespace app\models;

use Yii;
use yii\data\ActiveDataProvider;

/**
 * This is the model class for table "hr.att_attendance_log".
 *
 * @property int $att_attendance_log_id
 * @property string $pin
 * @property string $nik
 * @property string $location
 * @property string $serial_number
 * @property string|null $date_time
 * @property string $type
 * @property int|null $status
 */
class Attendance extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hr.att_attendance_log';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pin', 'nik', 'location', 'serial_number', 'type'], 'required'],
            [['date_time'], 'safe'],
            [['status'], 'default', 'value' => null],
            [['status'], 'integer'],
            [['pin', 'nik'], 'string', 'max' => 15],
            [['location'], 'string', 'max' => 50],
            [['serial_number'], 'string', 'max' => 100],
            [['type'], 'string', 'max' => 25],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'att_attendance_log_id' => 'Att Attendance Log ID',
            'pin' => 'Pin',
            'nik' => 'Nik',
            'location' => 'Location',
            'serial_number' => 'Serial Number',
            'date_time' => 'Date Time',
            'type' => 'Type',
            'status' => 'Status',
        ];
    }

    public function attendanceTime(){
        $query = Attendance::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => [
                'defaultOrder' => ['date_time' => SORT_DESC]
            ]
        ]);

        $query->andFilterWhere([
            'date(date_time)' => date("Y-m-d"),
        ]);

        return $dataProvider;
    }

    public function getAttendance()
    {
        return $this->hasOne(Personnel::className(), ['attendance_id' => 'pin']);
    }
}
