<?php

namespace app\modules\parque\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\parque\models\UniParque;

/**
 * UniParqueSearch represents the model behind the search form of `app\modules\parque\models\UniParque`.
 */
class UniParqueSearch extends UniParque
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['inmovilizado', 'alias', 'descr', 'serie', 'uso', 'propietario'], 'safe'],
            [['id_tipo', 'id_subtipo', 'id_marca', 'id_clase', 'modelo', 'activo', 'propio'], 'integer'],
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
        $query = UniParque::find();

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
            'id_tipo' => $this->id_tipo,
            'id_subtipo' => $this->id_subtipo,
            'id_marca' => $this->id_marca,
            'id_clase' => $this->id_clase,
            'modelo' => $this->modelo,
            'activo' => $this->activo,
            'propio' => $this->propio,
        ]);

        $query->andFilterWhere(['like', 'inmovilizado', $this->inmovilizado])
            ->andFilterWhere(['like', 'alias', $this->alias])
            ->andFilterWhere(['like', 'descr', $this->descr])
            ->andFilterWhere(['like', 'serie', $this->serie])
            ->andFilterWhere(['like', 'uso', $this->uso])
            ->andFilterWhere(['like', 'propietario', $this->propietario]);

        return $dataProvider;
    }
}
