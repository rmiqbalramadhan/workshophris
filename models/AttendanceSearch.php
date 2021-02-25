<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Attendance;

/**
 * AttendanceSearch represents the model behind the search form of `app\models\Attendance`.
 */
class AttendanceSearch extends Attendance
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['att_attendance_log_id', 'status'], 'integer'],
            [['pin', 'nik', 'location', 'serial_number', 'date_time', 'type'], 'safe'],
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
        $query = Attendance::find();

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
            'att_attendance_log_id' => $this->att_attendance_log_id,
            'date_time' => $this->date_time,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['ilike', 'pin', $this->pin])
            ->andFilterWhere(['ilike', 'nik', $this->nik])
            ->andFilterWhere(['ilike', 'location', $this->location])
            ->andFilterWhere(['ilike', 'serial_number', $this->serial_number])
            ->andFilterWhere(['ilike', 'type', $this->type]);

        return $dataProvider;
    }
}
