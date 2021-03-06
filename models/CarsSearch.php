<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cars;

/**
 * CarsSearch represents the model behind the search form of `app\models\Cars`.
 */
class CarsSearch extends Cars
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'horsepower'], 'integer'],
            [['manufacturer', 'model', 'daterelease', 'transmission', 'capacity'], 'safe'],
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
        $query = Cars::find();

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
            'id' => $this->id,
            'horsepower' => $this->horsepower,
        ]);

        $query->andFilterWhere(['like', 'manufacturer', $this->manufacturer])
            ->andFilterWhere(['like', 'model', $this->model])
            ->andFilterWhere(['like', 'daterelease', $this->daterelease])
            ->andFilterWhere(['like', 'transmission', $this->transmission])
            ->andFilterWhere(['like', 'capacity', $this->capacity]);

        return $dataProvider;
    }
}
