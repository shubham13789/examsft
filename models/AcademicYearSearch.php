<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\AcademicYear;

/**
 * AcademicYearSearch represents the model behind the search form of `app\models\AcademicYear`.
 */
class AcademicYearSearch extends AcademicYear
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ac_id', 'year'], 'integer'],
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
        $query = AcademicYear::find();

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
            'ac_id' => $this->ac_id,
            'year' => $this->year,
        ]);

        return $dataProvider;
    }
}
