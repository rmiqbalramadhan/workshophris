<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Career;

/**
 * CareerSearch represents the model behind the search form of `app\models\Career`.
 */
class CareerSearch extends Career
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['prs_career_id', 'prs_master_id', 'status_id', 'company_id', 'division_id', 'department_id', 'level_id', 'superior_id', 'job_title_id'], 'integer'],
            [['start_date', 'reason', 'employment_letter', 'properties', 'change_log'], 'safe'],
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
        $query = Career::find();

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
            'prs_career_id' => $this->prs_career_id,
            'prs_master_id' => $this->prs_master_id,
            'start_date' => $this->start_date,
            'status_id' => $this->status_id,
            'company_id' => $this->company_id,
            'division_id' => $this->division_id,
            'department_id' => $this->department_id,
            'level_id' => $this->level_id,
            'superior_id' => $this->superior_id,
            'job_title_id' => $this->job_title_id,
        ]);

        $query->andFilterWhere(['ilike', 'reason', $this->reason])
            ->andFilterWhere(['ilike', 'employment_letter', $this->employment_letter])
            ->andFilterWhere(['ilike', 'properties', $this->properties])
            ->andFilterWhere(['ilike', 'change_log', $this->change_log]);

        return $dataProvider;
    }
}
