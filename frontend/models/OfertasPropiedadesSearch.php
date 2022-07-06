<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\OfertasPropiedades;

/**
 * OfertasPropiedadesSearch represents the model behind the search form of `\frontend\models\OfertasPropiedades`.
 */
class OfertasPropiedadesSearch extends OfertasPropiedades
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'agent_id', 'status_id'], 'integer'],
            [['pdf_url', 'date', 'status_updated_date'], 'safe'],
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
        $query = OfertasPropiedades::find()->orderBy(['date' => SORT_DESC]);

        if (Yii::$app->user->identity->role_id != 1) {
            $agent_id = Yii::$app->user->identity->id;
        }

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
            'date' => $this->date,
            'agent_id' => $this->agent_id,
            'status_id' => $this->status_id,
            'status_updated_date' => $this->status_updated_date,
        ]);

        $query->andFilterWhere(['like', 'pdf_url', $this->pdf_url]);

        return $dataProvider;
    }
}
