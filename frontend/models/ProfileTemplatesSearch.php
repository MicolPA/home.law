<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\ProfileTemplates;

/**
 * ProfileTemplatesSearch represents the model behind the search form of `frontend\models\ProfileTemplates`.
 */
class ProfileTemplatesSearch extends ProfileTemplates
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'banner_background_type', 'body_background_type'], 'integer'],
            [['nombre', 'banner_background', 'body_background', 'body_color'], 'safe'],
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
        $query = ProfileTemplates::find();

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
            'banner_background_type' => $this->banner_background_type,
            'body_background_type' => $this->body_background_type,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'banner_background', $this->banner_background])
            ->andFilterWhere(['like', 'body_background', $this->body_background])
            ->andFilterWhere(['like', 'body_color', $this->body_color]);

        return $dataProvider;
    }
}
