<?php

namespace app\models;

use Yii;
use yii\data\ActiveDataProvider;

/**
 * This is the model class for table "hr.prs_status".
 *
 * @property int $prs_status_id
 * @property int $prs_master_id
 * @property string|null $start_date
 * @property string|null $end_date
 * @property int|null $status_id
 * @property string|null $employment_letter
 * @property string|null $remark
 * @property string|null $properties
 * @property string|null $change_log
 */
class Status extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hr.prs_status';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['prs_master_id'], 'required'],
            [['prs_master_id', 'status_id'], 'default', 'value' => null],
            [['prs_master_id', 'status_id'], 'integer'],
            [['start_date', 'end_date', 'properties', 'change_log'], 'safe'],
            [['employment_letter'], 'string', 'max' => 100],
            [['remark'], 'string', 'max' => 150],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'prs_status_id' => 'Prs Status ID',
            'prs_master_id' => 'Prs Master ID',
            'start_date' => 'Start Date',
            'end_date' => 'End Date',
            'status_id' => 'Status ID',
            'employment_letter' => 'Employment Letter',
            'remark' => 'Remark',
            'properties' => 'Properties',
            'change_log' => 'Change Log',
        ];
    }

    public function search2($id)
    {
        $query = Status::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => [
                'defaultOrder' => ['start_date' => SORT_ASC]
            ]
        ]);

        $query->andFilterWhere([
            'prs_master_id' => $id
        ]);

        return $dataProvider;
    }
}
