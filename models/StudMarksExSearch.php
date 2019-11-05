<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\StudMarksEx;

/**
 * StudMarksExSearch represents the model behind the search form of `app\models\StudMarksEx`.
 */
class StudMarksExSearch extends StudMarksEx
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['stud_marks_ex', 'stud_id', 'marks_id', 'ex_id'], 'integer'],
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
        $query = StudMarksEx::find();

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
            'stud_marks_ex' => $this->stud_marks_ex,
            'stud_id' => $this->stud_id,
            'marks_id' => $this->marks_id,
            'ex_id' => $this->ex_id,
        ]);

        return $dataProvider;
    }
}
