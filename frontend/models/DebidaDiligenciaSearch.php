<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\DebidaDiligencia;

/**
 * DebidaDiligenciaSearch represents the model behind the search form of `frontend\models\DebidaDiligencia`.
 */
class DebidaDiligenciaSearch extends DebidaDiligencia
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'propiedad_id', 'debida_diligencia_list_id', 'user_id'], 'integer'],
            [['date'], 'safe'],
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
        $query = DebidaDiligencia::find();

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
            'propiedad_id' => $this->propiedad_id,
            'debida_diligencia_list_id' => $this->debida_diligencia_list_id,
            'user_id' => $this->user_id,
            'date' => $this->date,
        ]);

        return $dataProvider;
    }
}
