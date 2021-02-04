<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Education;

/**
 * EducationSearch represents the model behind the search form of `app\models\Education`.
 */
class EducationSearch extends Education
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['prs_education_id', 'prs_master_id', 'education_year', 'education_index'], 'integer'],
            [['education_name', 'education_certificate', 'remark', 'properties', 'change_log'], 'safe'],
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
        $query = Education::find();

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
            'prs_education_id' => $this->prs_education_id,
            'prs_master_id' => $this->prs_master_id,
            'education_year' => $this->education_year,
            'education_index' => $this->education_index,
        ]);

        $query->andFilterWhere(['ilike', 'education_name', $this->education_name])
            ->andFilterWhere(['ilike', 'education_certificate', $this->education_certificate])
            ->andFilterWhere(['ilike', 'remark', $this->remark])
            ->andFilterWhere(['ilike', 'properties', $this->properties])
            ->andFilterWhere(['ilike', 'change_log', $this->change_log]);

        return $dataProvider;
    }
}
