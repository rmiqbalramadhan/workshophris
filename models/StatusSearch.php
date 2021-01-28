<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Status;

/**
 * StatusSearch represents the model behind the search form of `app\models\Status`.
 */
class StatusSearch extends Status
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['prs_status_id', 'prs_master_id', 'status_id'], 'integer'],
            [['start_date', 'end_date', 'employment_letter', 'remark', 'properties', 'change_log'], 'safe'],
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
        $query = Status::find();

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
            'prs_status_id' => $this->prs_status_id,
            'prs_master_id' => $this->prs_master_id,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'status_id' => $this->status_id,
        ]);

        $query->andFilterWhere(['ilike', 'employment_letter', $this->employment_letter])
            ->andFilterWhere(['ilike', 'remark', $this->remark])
            ->andFilterWhere(['ilike', 'properties', $this->properties])
            ->andFilterWhere(['ilike', 'change_log', $this->change_log]);

        return $dataProvider;
    }
}
