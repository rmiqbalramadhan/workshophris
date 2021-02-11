<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Leave;

/**
 * LeaveSearch represents the model behind the search form of `app\models\Leave`.
 */
class LeaveSearch extends Leave
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['lve_master_id', 'prs_master_id', 'day_count', 'balance', 'approved_id', 'superior_approved_id', 'activation_expire', 'approved_superior_by', 'approved_hr_by', 'leave_type_id', 'other_balance'], 'integer'],
            [['start_date', 'end_date', 'return_date', 'leave_reason', 'substitute_employee', 'remark', 'activation_code', 'approved_superior_date', 'approved_hr_date', 'properties', 'change_log', 'created_at', 'updated_at'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Leave::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'lve_master_id' => $this->lve_master_id,
            'prs_master_id' => $this->prs_master_id,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'day_count' => $this->day_count,
            'return_date' => $this->return_date,
            'balance' => $this->balance,
            'approved_id' => $this->approved_id,
            'superior_approved_id' => $this->superior_approved_id,
            'activation_expire' => $this->activation_expire,
            'approved_superior_by' => $this->approved_superior_by,
            'approved_superior_date' => $this->approved_superior_date,
            'approved_hr_by' => $this->approved_hr_by,
            'approved_hr_date' => $this->approved_hr_date,
            'leave_type_id' => $this->leave_type_id,
            'other_balance' => $this->other_balance,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['ilike', 'leave_reason', $this->leave_reason])
            ->andFilterWhere(['ilike', 'substitute_employee', $this->substitute_employee])
            ->andFilterWhere(['ilike', 'remark', $this->remark])
            ->andFilterWhere(['ilike', 'activation_code', $this->activation_code])
            ->andFilterWhere(['ilike', 'properties', $this->properties])
            ->andFilterWhere(['ilike', 'change_log', $this->change_log]);

        return $dataProvider;
    }
}
