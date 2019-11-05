<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Marks;

/**
 * MarksSearch represents the model behind the search form of `app\models\Marks`.
 */
class MarksSearch extends Marks
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['marks_id'], 'integer'],
            [['marks'], 'safe'],
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
        $query = Marks::find();

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
            'marks_id' => $this->marks_id,
        ]);

        $query->andFilterWhere(['like', 'marks', $this->marks]);

        return $dataProvider;
    }
}
