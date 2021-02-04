<?php

namespace app\models;
use Yii;
use yii\data\ActiveDataProvider;
use app\models\Career;

Class CommonFunction extends \yii\db\ActiveRecord
{
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
}