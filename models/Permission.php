<?php

namespace app\models;

use Yii;
use yii\data\ActiveDataProvider;

/**
 * This is the model class for table "hr.pms_master".
 *
 * @property int $pms_master_id
 * @property int $prs_master_id
 * @property string $start_date
 * @property string $end_date
 * @property int $permission_type_id
 * @property string|null $permission_reason
 * @property string|null $remark
 * @property int|null $approved_id
 * @property int|null $superior_approved_id
 * @property string|null $activation_code
 * @property int|null $activation_expire
 * @property int|null $approved_superior_by
 * @property int|null $approved_superior_date
 * @property int|null $approved_hr_by
 * @property int|null $approved_hr_date
 * @property string|null $properties
 * @property string|null $change_log
 * @property string|null $document_link
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class Permission extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hr.pms_master';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['prs_master_id', 'start_date', 'end_date', 'permission_type_id'], 'required'],
            [['prs_master_id', 'permission_type_id', 'approved_id', 'superior_approved_id', 'activation_expire', 'approved_superior_by', 'approved_superior_date', 'approved_hr_by', 'approved_hr_date'], 'default', 'value' => null],
            [['prs_master_id', 'permission_type_id', 'approved_id', 'superior_approved_id', 'activation_expire', 'approved_superior_by', 'approved_superior_date', 'approved_hr_by', 'approved_hr_date'], 'integer'],
            [['start_date', 'end_date', 'properties', 'change_log', 'created_at', 'updated_at'], 'safe'],
            [['permission_reason'], 'string', 'max' => 300],
            [['remark'], 'string', 'max' => 250],
            [['activation_code'], 'string', 'max' => 100],
            [['document_link'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'pms_master_id' => 'Pms Master ID',
            'prs_master_id' => 'Prs Master ID',
            'start_date' => 'Start Date',
            'end_date' => 'End Date',
            'permission_type_id' => 'Permission Type ID',
            'permission_reason' => 'Permission Reason',
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
            'document_link' => 'Document Link',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function requested()
    {
        $query = Permission::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => [
                'defaultOrder' => ['start_date' => SORT_ASC]
            ]
        ]);

        $query->andFilterWhere([
            'approved_id' => 1,
            'superior_approved_id' => 1
        ]);

        return $dataProvider;
    }

    public function approved()
    {
        $query = Permission::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => [
                'defaultOrder' => ['start_date' => SORT_ASC]
            ]
        ]);

        $query->andFilterWhere([
            'approved_id' => 2,
            'superior_approved_id' => 2
        ]);

        return $dataProvider;
    }

    public function rejected()
    {
        $query = Permission::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => [
                'defaultOrder' => ['start_date' => SORT_ASC]
            ]
        ]);

        $query->andFilterWhere([
            'approved_id' => 3,
            'superior_approved_id' => 3
        ]);

        return $dataProvider;
    }

    public function approve($id)
    {
        $model = Permission::findOne($id);
        $model->approved_id = 2;
        $model->superior_approved_id = 2;
        $model->save();
        return true;
    }

    public function reject($id)
    {
        $model = Permission::findOne($id);
        $model->approved_id = 3;
        $model->superior_approved_id = 3;
        $model->save();
        return true;
    }
}
