<?php

namespace app\modules\parque\models;

use Yii;

/**
 * This is the model class for table "uni_vehiculo".
 *
 * @property int $id
 * @property string $inmovilizado
 * @property string $alias
 * @property string $id_marca
 * @property string $id_tipo
 * @property string $id_clase
 * @property string $id_denom
 * @property string $id_aditamento
 * @property string $descr
 * @property int $modelo
 * @property string $serie
 * @property string $condicion
 * @property string $uso
 * @property int $activo
 * @property int $propio
 * @property string $propietario
 * @property string $comentarios
 *
 * @property UniAditamento $aditamento
 * @property UniDenominacion $denom
 * @property UniClase $clase
 * @property UniTipo $tipo
 * @property UniMarca $marca
 */
class UniVehiculo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'uni_vehiculo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_marca', 'id_tipo', 'id_clase', 'id_denom', 'id_aditamento'], 'string'],
            [['modelo', 'activo', 'propio'], 'integer'],
            [['uso'], 'required'],
            [['inmovilizado'], 'string', 'max' => 12],
            [['alias', 'uso'], 'string', 'max' => 15],
            [['descr'], 'string', 'max' => 128],
            [['serie', 'propietario'], 'string', 'max' => 30],
            [['condicion'], 'string', 'max' => 25],
            [['comentarios'], 'string', 'max' => 256],
            [['id_aditamento'], 'exist', 'skipOnError' => true, 'targetClass' => UniAditamento::className(), 'targetAttribute' => ['id_aditamento' => 'id']],
            [['id_denom'], 'exist', 'skipOnError' => true, 'targetClass' => UniDenominacion::className(), 'targetAttribute' => ['id_denom' => 'id']],
            [['id_clase'], 'exist', 'skipOnError' => true, 'targetClass' => UniClase::className(), 'targetAttribute' => ['id_clase' => 'id']],
            [['id_tipo'], 'exist', 'skipOnError' => true, 'targetClass' => UniTipo::className(), 'targetAttribute' => ['id_tipo' => 'id']],
            [['id_marca'], 'exist', 'skipOnError' => true, 'targetClass' => UniMarca::className(), 'targetAttribute' => ['id_marca' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'inmovilizado' => 'Inmovilizado',
            'alias' => 'Alias',
            'id_marca' => 'Id Marca',
            'id_tipo' => 'Id Tipo',
            'id_clase' => 'Id Clase',
            'id_denom' => 'Id Denom',
            'id_aditamento' => 'Id Aditamento',
            'descr' => 'Descr',
            'modelo' => 'Modelo',
            'serie' => 'Serie',
            'condicion' => 'Condicion',
            'uso' => 'Uso',
            'activo' => 'Activo',
            'propio' => 'Propio',
            'propietario' => 'Propietario',
            'comentarios' => 'Comentarios',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAditamento()
    {
        return $this->hasOne(UniAditamento::className(), ['id' => 'id_aditamento']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDenom()
    {
        return $this->hasOne(UniDenominacion::className(), ['id' => 'id_denom']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClase()
    {
        return $this->hasOne(UniClase::className(), ['id' => 'id_clase']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTipo()
    {
        return $this->hasOne(UniTipo::className(), ['id' => 'id_tipo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMarca()
    {
        return $this->hasOne(UniMarca::className(), ['id' => 'id_marca']);
    }
}
