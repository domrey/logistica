<?php

namespace app\modules\parque\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\parque\models\UniVehiculo;

/**
 * UniVehiculoSearch represents the model behind the search form of `app\modules\parque\models\UniVehiculo`.
 */
class UniVehiculoSearch extends UniVehiculo
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'modelo', 'activo', 'propio'], 'integer'],
            [['inmovilizado', 'alias', 'id_marca', 'id_tipo', 'id_clase', 'id_denom', 'id_aditamento', 'descr', 'serie', 'condicion', 'uso', 'propietario', 'comentarios'], 'safe'],
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
        $query = UniVehiculo::find();

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
            'modelo' => $this->modelo,
            'activo' => $this->activo,
            'propio' => $this->propio,
        ]);

        $query->andFilterWhere(['like', 'inmovilizado', $this->inmovilizado])
            ->andFilterWhere(['like', 'alias', $this->alias])
            ->andFilterWhere(['like', 'id_marca', $this->id_marca])
            ->andFilterWhere(['like', 'id_tipo', $this->id_tipo])
            ->andFilterWhere(['like', 'id_clase', $this->id_clase])
            ->andFilterWhere(['like', 'id_denom', $this->id_denom])
            ->andFilterWhere(['like', 'id_aditamento', $this->id_aditamento])
            ->andFilterWhere(['like', 'descr', $this->descr])
            ->andFilterWhere(['like', 'serie', $this->serie])
            ->andFilterWhere(['like', 'condicion', $this->condicion])
            ->andFilterWhere(['like', 'uso', $this->uso])
            ->andFilterWhere(['like', 'propietario', $this->propietario])
            ->andFilterWhere(['like', 'comentarios', $this->comentarios]);

        return $dataProvider;
    }
}
