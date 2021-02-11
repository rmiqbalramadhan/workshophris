<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;
use yii\data\ActiveDataProvider;


/**
 * This is the model class for table "hr.lve_master".
 *
 * @property int $lve_master_id
 * @property int $prs_master_id
 * @property string $start_date
 * @property string $end_date
 * @property int $day_count
 * @property string|null $return_date
 * @property string|null $leave_reason
 * @property int|null $balance
 * @property string|null $substitute_employee
 * @property string|null $remark
 * @property int|null $approved_id
 * @property int|null $superior_approved_id
 * @property string|null $activation_code
 * @property int|null $activation_expire
 * @property int|null $approved_superior_by
 * @property string|null $approved_superior_date
 * @property int|null $approved_hr_by
 * @property string|null $approved_hr_date
 * @property string|null $properties
 * @property string|null $change_log
 * @property int|null $leave_type_id
 * @property int|null $other_balance
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class Leave extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hr.lve_master';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['prs_master_id', 'start_date', 'end_date', 'day_count'], 'required'],
            [['prs_master_id', 'day_count', 'balance', 'approved_id', 'superior_approved_id', 'activation_expire', 'approved_superior_by', 'approved_hr_by', 'leave_type_id', 'other_balance'], 'default', 'value' => null],
            [['prs_master_id', 'day_count', 'balance', 'approved_id', 'superior_approved_id', 'activation_expire', 'approved_superior_by', 'approved_hr_by', 'leave_type_id', 'other_balance'], 'integer'],
            [['start_date', 'end_date', 'return_date', 'approved_superior_date', 'approved_hr_date', 'properties', 'change_log', 'created_at', 'updated_at'], 'safe'],
            [['leave_reason'], 'string', 'max' => 300],
            [['substitute_employee'], 'string', 'max' => 50],
            [['remark'], 'string', 'max' => 250],
            [['activation_code'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'lve_master_id' => 'Lve Master ID',
            'prs_master_id' => 'Prs Master ID',
            'start_date' => 'Start Date',
            'end_date' => 'End Date',
            'day_count' => 'Day Count',
            'return_date' => 'Return Date',
            'leave_reason' => 'Leave Reason',
            'balance' => 'Balance',
            'substitute_employee' => 'Substitute Employee',
            'remark' => 'Remark',
            'approved_id' => 'Approved ID',
            'superior_approved_id' => 'Superior Approved ID',
            'activation_code' => 'Activation Code',
            'activation_expire' => 'Activation Expire',
            'approved_superior_by' => 'Approved Superior By',
            'approved_superior_date' => 'Approved Superior Date',
            'approved_hr_by' => 'Approved Hr By',
            'approved_hr_date' => 'Approved Hr Date',
            'properties' => 'Properties',
            'change_log' => 'Change Log',
            'leave_type_id' => 'Leave Type ID',
            'other_balance' => 'Other Balance',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'created_at',
                'updatedAtAttribute' => 'updated_at',
                'value' => new Expression('NOW()'),
            ],
        ];
    }

    public function search2($id)
    {
        $query = Leave::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => [
                'defaultOrder' => ['lve_master_id' => SORT_ASC]
            ]
        ]);

        $query->andFilterWhere([
            'prs_master_id' => $id
        ]);

        return $dataProvider;
    }

    public function requested()
    {
        $query = Leave::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => [
                'defaultOrder' => ['start_date' => SORT_ASC]
            ],
        ]);

        $query->andFilterWhere([
            'superior_approved_id' => 1
        ]);

        return $dataProvider;
        
    }

    public function approved()
    {
        $query = Leave::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => [
                'defaultOrder' => ['start_date' => SORT_ASC]
            ],
        ]);

        $query->andFilterWhere([
            'superior_approved_id' => 2
        ]);

        return $dataProvider;
    }

    public function rejected()
    {
        $query = Leave::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => [
                'defaultOrder' => ['start_date' => SORT_ASC]
            ],
        ]);

        $query->andFilterWhere([
            'superior_approved_id' => 3
        ]);

        return $dataProvider;
    }
}
