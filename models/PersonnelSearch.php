<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Personnel;

/**
 * PersonnelSearch represents the model behind the search form of `app\models\Personnel`.
 */
class PersonnelSearch extends Personnel
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['prs_master_id', 'gender_id', 'religion_id', 'user_id'], 'integer'],
            [['employee_code', 'employee_name', 'birth_place', 'birth_date', 'address', 'kab_kodya', 'province_name', 'pos_code', 'email', 'blood_type', 'handphone', 'photo_path', 'properties', 'change_log', 'attendance_id', 'telegram_id', 'bank_name', 'account_number', 'account_name'], 'safe'],
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
        $query = Personnel::find();

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
            'prs_master_id' => $this->prs_master_id,
            'birth_date' => $this->birth_date,
            'gender_id' => $this->gender_id,
            'religion_id' => $this->religion_id,
            'user_id' => $this->user_id,
        ]);

        $query->andFilterWhere(['ilike', 'employee_code', $this->employee_code])
            ->andFilterWhere(['ilike', 'employee_name', $this->employee_name])
            ->andFilterWhere(['ilike', 'birth_place', $this->birth_place])
            ->andFilterWhere(['ilike', 'address', $this->address])
            ->andFilterWhere(['ilike', 'kab_kodya', $this->kab_kodya])
            ->andFilterWhere(['ilike', 'province_name', $this->province_name])
            ->andFilterWhere(['ilike', 'pos_code', $this->pos_code])
            ->andFilterWhere(['ilike', 'email', $this->email])
            ->andFilterWhere(['ilike', 'blood_type', $this->blood_type])
            ->andFilterWhere(['ilike', 'handphone', $this->handphone])
            ->andFilterWhere(['ilike', 'photo_path', $this->photo_path])
            ->andFilterWhere(['ilike', 'properties', $this->properties])
            ->andFilterWhere(['ilike', 'change_log', $this->change_log])
            ->andFilterWhere(['ilike', 'attendance_id', $this->attendance_id])
            ->andFilterWhere(['ilike', 'telegram_id', $this->telegram_id])
            ->andFilterWhere(['ilike', 'bank_name', $this->bank_name])
            ->andFilterWhere(['ilike', 'account_number', $this->account_number])
            ->andFilterWhere(['ilike', 'account_name', $this->account_name]);

        return $dataProvider;
    }
}
