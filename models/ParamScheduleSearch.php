<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ParamSchedule;

/**
 * ParamScheduleSearch represents the model behind the search form of `app\models\ParamSchedule`.
 */
class ParamScheduleSearch extends ParamSchedule
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['prm_shcedule_id', 'dispense_minute'], 'integer'],
            [['code_name', 'description', 'check_in', 'check_out', 'rest_in', 'rest_out', 'properties', 'change_log'], 'safe'],
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
        $query = ParamSchedule::find();

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
            'prm_shcedule_id' => $this->prm_shcedule_id,
            'check_in' => $this->check_in,
            'check_out' => $this->check_out,
            'rest_in' => $this->rest_in,
            'rest_out' => $this->rest_out,
            'dispense_minute' => $this->dispense_minute,
        ]);

        $query->andFilterWhere(['ilike', 'code_name', $this->code_name])
            ->andFilterWhere(['ilike', 'description', $this->description])
            ->andFilterWhere(['ilike', 'properties', $this->properties])
            ->andFilterWhere(['ilike', 'change_log', $this->change_log]);

        return $dataProvider;
    }
}
