<?php

namespace app\modules\parque\models;

use Yii;
use app\modules\rh\models\RhTrab;

/**
 * This is the model class for table "comb_registro".
 *
 * @property int $id
 * @property int $id_unidad
 * @property string $unidad
 * @property string $fecha
 * @property double $odometro
 * @property double $litros
 * @property double $importe
 * @property int $comprobante
 * @property string $medio
 * @property string $instrumento
 * @property string $consecutivo
 * @property int $clave_trab
 * @property int $id_estacion
 * @property string $fec_registro
 * @property int $usuario
 *
 * @property RhTrab $claveTrab
 * @property UniParque $unidad0
 */
class CombRegistro extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'comb_registro';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_unidad', 'unidad', 'fecha', 'odometro', 'litros', 'medio', 'instrumento', 'clave_trab'], 'required'],
            [['id_unidad', 'comprobante', 'clave_trab', 'id_estacion', 'usuario'], 'integer'],
            [['fecha', 'fec_registro'], 'safe'],
            [['odometro', 'litros', 'importe'], 'number'],
            [['unidad'], 'string', 'max' => 15],
            [['medio'], 'string', 'max' => 1],
            [['instrumento'], 'string', 'max' => 20],
            [['consecutivo'], 'string', 'max' => 10],
            [['clave_trab'], 'exist', 'skipOnError' => true, 'targetClass' => RhTrab::className(), 'targetAttribute' => ['clave_trab' => 'clave']],
            [['id_unidad'], 'exist', 'skipOnError' => true, 'targetClass' => UniParque::className(), 'targetAttribute' => ['id_unidad' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_unidad' => 'Id Unidad',
            'unidad' => 'Unidad',
            'fecha' => 'Fecha',
            'odometro' => 'Odometro',
            'litros' => 'Litros',
            'importe' => 'Importe',
            'comprobante' => 'Comprobante',
            'medio' => 'Medio',
            'instrumento' => 'Instrumento',
            'consecutivo' => 'Consecutivo',
            'clave_trab' => 'Clave Trab',
            'id_estacion' => 'Id Estacion',
            'fec_registro' => 'Fec Registro',
            'usuario' => 'Usuario',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClaveTrab()
    {
        return $this->hasOne(RhTrab::className(), ['clave' => 'clave_trab']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUnidad0()
    {
        return $this->hasOne(UniParque::className(), ['id' => 'id_unidad']);
    }
}
