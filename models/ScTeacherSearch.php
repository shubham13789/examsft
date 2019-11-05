<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ScTeacher;

/**
 * ScTeacherSearch represents the model behind the search form of `app\models\ScTeacher`.
 */
class ScTeacherSearch extends ScTeacher
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sct_id', 'sc_id', 't_id'], 'integer'],
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
        $query = ScTeacher::find();

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
            'sct_id' => $this->sct_id,
            'sc_id' => $this->sc_id,
            't_id' => $this->t_id,
        ]);

        return $dataProvider;
    }
}
