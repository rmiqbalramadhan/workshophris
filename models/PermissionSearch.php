<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Permission;

/**
 * PermissionSearch represents the model behind the search form of `app\models\Permission`.
 */
class PermissionSearch extends Permission
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pms_master_id', 'prs_master_id', 'permission_type_id', 'approved_id', 'superior_approved_id', 'activation_expire', 'approved_superior_by', 'approved_superior_date', 'approved_hr_by', 'approved_hr_date'], 'integer'],
            [['start_date', 'end_date', 'permission_reason', 'remark', 'activation_code', 'properties', 'change_log', 'document_link', 'created_at', 'updated_at'], 'safe'],
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
        $query = Permission::find();

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
            'pms_master_id' => $this->pms_master_id,
            'prs_master_id' => $this->prs_master_id,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'permission_type_id' => $this->permission_type_id,
            'approved_id' => $this->approved_id,
            'superior_approved_id' => $this->superior_approved_id,
            'activation_expire' => $this->activation_expire,
            'approved_superior_by' => $this->approved_superior_by,
            'approved_superior_date' => $this->approved_superior_date,
            'approved_hr_by' => $this->approved_hr_by,
            'approved_hr_date' => $this->approved_hr_date,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['ilike', 'permission_reason', $this->permission_reason])
            ->andFilterWhere(['ilike', 'remark', $this->remark])
            ->andFilterWhere(['ilike', 'activation_code', $this->activation_code])
            ->andFilterWhere(['ilike', 'properties', $this->properties])
            ->andFilterWhere(['ilike', 'change_log', $this->change_log])
            ->andFilterWhere(['ilike', 'document_link', $this->document_link]);

        return $dataProvider;
    }
}
