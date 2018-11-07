<?php

namespace app\modules\parque\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\parque\models\CombRegistro;

/**
 * CombRegistroSearch represents the model behind the search form of `app\modules\parque\models\CombRegistro`.
 */
class CombRegistroSearch extends CombRegistro
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_unidad', 'comprobante', 'clave_trab', 'id_estacion', 'usuario'], 'integer'],
            [['unidad', 'fecha', 'medio', 'instrumento', 'consecutivo', 'fec_registro'], 'safe'],
            [['odometro', 'litros', 'importe'], 'number'],
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
        $query = CombRegistro::find();

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
            'id_unidad' => $this->id_unidad,
            'fecha' => $this->fecha,
            'odometro' => $this->odometro,
            'litros' => $this->litros,
            'importe' => $this->importe,
            'comprobante' => $this->comprobante,
            'clave_trab' => $this->clave_trab,
            'id_estacion' => $this->id_estacion,
            'fec_registro' => $this->fec_registro,
            'usuario' => $this->usuario,
        ]);

        $query->andFilterWhere(['like', 'unidad', $this->unidad])
            ->andFilterWhere(['like', 'medio', $this->medio])
            ->andFilterWhere(['like', 'instrumento', $this->instrumento])
            ->andFilterWhere(['like', 'consecutivo', $this->consecutivo]);

        return $dataProvider;
    }
}
