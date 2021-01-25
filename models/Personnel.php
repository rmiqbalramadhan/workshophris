<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hr.prs_master".
 *
 * @property int $prs_master_id
 * @property string|null $employee_code
 * @property string $employee_name
 * @property string|null $birth_place
 * @property string|null $birth_date
 * @property int|null $gender_id
 * @property int|null $religion_id
 * @property string|null $address
 * @property string|null $kab_kodya
 * @property string|null $province_name
 * @property string|null $pos_code
 * @property string|null $email
 * @property string|null $blood_type
 * @property string|null $handphone
 * @property string|null $photo_path
 * @property int|null $user_id
 * @property string|null $properties
 * @property string|null $change_log
 * @property string|null $attendance_id
 * @property string|null $telegram_id
 * @property string|null $bank_name
 * @property string|null $account_number
 * @property string|null $account_name
 */
class Personnel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hr.prs_master';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['employee_name'], 'required'],
            [['birth_date', 'properties', 'change_log'], 'safe'],
            [['gender_id', 'religion_id', 'user_id'], 'default', 'value' => null],
            [['gender_id', 'religion_id', 'user_id'], 'integer'],
            [['address'], 'string'],
            [['employee_code', 'kab_kodya', 'handphone'], 'string', 'max' => 50],
            [['employee_name', 'email'], 'string', 'max' => 100],
            [['birth_place'], 'string', 'max' => 20],
            [['province_name'], 'string', 'max' => 150],
            [['pos_code'], 'string', 'max' => 5],
            [['blood_type'], 'string', 'max' => 10],
            [['photo_path', 'attendance_id', 'telegram_id', 'bank_name', 'account_number', 'account_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'prs_master_id' => 'Prs Master ID',
            'employee_code' => 'Employee Code',
            'employee_name' => 'Employee Name',
            'birth_place' => 'Birth Place',
            'birth_date' => 'Birth Date',
            'gender_id' => 'Gender ID',
            'religion_id' => 'Religion ID',
            'address' => 'Address',
            'kab_kodya' => 'Kab Kodya',
            'province_name' => 'Province Name',
            'pos_code' => 'Pos Code',
            'email' => 'Email',
            'blood_type' => 'Blood Type',
            'handphone' => 'Handphone',
            'photo_path' => 'Photo Path',
            'user_id' => 'User ID',
            'properties' => 'Properties',
            'change_log' => 'Change Log',
            'attendance_id' => 'Attendance ID',
            'telegram_id' => 'Telegram ID',
            'bank_name' => 'Bank Name',
            'account_number' => 'Account Number',
            'account_name' => 'Account Name',
        ];
    }
}
