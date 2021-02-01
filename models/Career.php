<?php

namespace app\models;

use Yii;
use yii\data\ActiveDataProvider;
use app\models\Tree;


/**
 * This is the model class for table "hr.prs_career".
 *
 * @property int $prs_career_id
 * @property int $prs_master_id
 * @property string $start_date
 * @property int $status_id
 * @property int $company_id
 * @property int $division_id
 * @property int|null $department_id
 * @property int $level_id
 * @property string|null $reason
 * @property int|null $superior_id
 * @property string|null $employment_letter
 * @property int $job_title_id
 * @property string|null $properties
 * @property string|null $change_log
 */
class Career extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hr.prs_career';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['prs_master_id', 'start_date', 'company_id', 'division_id', 'level_id'], 'required'],
            [['prs_master_id', 'status_id', 'company_id', 'division_id', 'department_id', 'level_id', 'superior_id', 'job_title_id'], 'default', 'value' => null],
            [['prs_master_id', 'status_id', 'company_id', 'division_id', 'department_id', 'level_id', 'superior_id', 'job_title_id'], 'integer'],
            [['start_date', 'properties', 'change_log'], 'safe'],
            [['reason', 'employment_letter'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'prs_career_id' => 'Prs Career ID',
            'prs_master_id' => 'Prs Master ID',
            'start_date' => 'Start Date',
            'status_id' => 'Status ID',
            'company_id' => 'Company ID',
            'division_id' => 'Division ID',
            'department_id' => 'Department ID',
            'level_id' => 'Level ID',
            'reason' => 'Reason',
            'superior_id' => 'Superior ID',
            'employment_letter' => 'Employment Letter',
            'job_title_id' => 'Job Title ID',
            'properties' => 'Properties',
            'change_log' => 'Change Log',
        ];
    }

    public function search2($id)
    {
        $query = Career::find();
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

    public function getCompany(){
        return $this->hasOne(Tree::class, ['id' => 'company_id']);
    }

    public function getDepartement(){
        return $this->hasOne(Tree::class, ['id' => 'department_id']);
    }

    
}
