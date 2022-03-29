<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Propiedades;

/**
 * PropiedadesSearch represents the model behind the search form of `frontend\models\Propiedades`.
 */
class PropiedadesSearch extends Propiedades
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'tipo_propiedad', 'ubicacion_id', 'habitaciones', 'baños', 'created_by_user_id', 'assigned_to_user_id', 'galeria_id'], 'integer'],
            [['codigo', 'titulo_publicacion', 'detalles', 'fecha_publicacion', 'portada', 'extra_text', 'tags', 'date'], 'safe'],
            [['precio', 'metros', 'pies'], 'number'],
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
        $query = Propiedades::find();

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
            'tipo_propiedad' => $this->tipo_propiedad,
            'ubicacion_id' => $this->ubicacion_id,
            'habitaciones' => $this->habitaciones,
            'baños' => $this->baños,
            'created_by_user_id' => $this->created_by_user_id,
            'assigned_to_user_id' => $this->assigned_to_user_id,
            'galeria_id' => $this->galeria_id,
            'fecha_publicacion' => $this->fecha_publicacion,
            'precio' => $this->precio,
            'metros' => $this->metros,
            'pies' => $this->pies,
            'date' => $this->date,
        ]);

        $query->andFilterWhere(['like', 'codigo', $this->codigo])
            ->andFilterWhere(['like', 'titulo_publicacion', $this->titulo_publicacion])
            ->andFilterWhere(['like', 'detalles', $this->detalles])
            ->andFilterWhere(['like', 'portada', $this->portada])
            ->andFilterWhere(['like', 'extra_text', $this->extra_text])
            ->andFilterWhere(['like', 'tags', $this->tags]);

        return $dataProvider;
    }
}