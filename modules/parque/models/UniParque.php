<?php

namespace app\modules\parque\models;

use Yii;

/**
 * This is the model class for table "uni_parque".
 *
 * @property string $inmovilizado
 * @property string $alias
 * @property int $id_tipo
 * @property int $id_subtipo
 * @property int $id_marca
 * @property int $id_clase
 * @property string $descr
 * @property int $modelo
 * @property string $serie
 * @property int $activo
 * @property string $uso
 * @property int $propio
 * @property string $propietario
 *
 * @property UniClase $clase
 * @property UniMarca $marca
 * @property UniSubtipo $subtipo
 * @property UniTipo $tipo
 */
class UniParque extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'uni_parque';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['alias'], 'required'],
            [['id_tipo', 'id_subtipo', 'id_marca', 'id_clase', 'modelo', 'activo', 'propio'], 'integer'],
            [['inmovilizado', 'alias'], 'string', 'max' => 12],
            [['descr'], 'string', 'max' => 255],
            [['serie'], 'string', 'max' => 40],
            [['uso'], 'string', 'max' => 30],
            [['propietario'], 'string', 'max' => 60],
            [['alias'], 'unique'],
            [['id_clase'], 'exist', 'skipOnError' => true, 'targetClass' => UniClase::className(), 'targetAttribute' => ['id_clase' => 'id']],
            [['id_marca'], 'exist', 'skipOnError' => true, 'targetClass' => UniMarca::className(), 'targetAttribute' => ['id_marca' => 'id']],
            [['id_subtipo'], 'exist', 'skipOnError' => true, 'targetClass' => UniSubtipo::className(), 'targetAttribute' => ['id_subtipo' => 'id']],
            [['id_tipo'], 'exist', 'skipOnError' => true, 'targetClass' => UniTipo::className(), 'targetAttribute' => ['id_tipo' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'inmovilizado' => 'Inmovilizado',
            'alias' => 'Alias',
            'id_tipo' => 'Id Tipo',
            'id_subtipo' => 'Id Subtipo',
            'id_marca' => 'Id Marca',
            'id_clase' => 'Id Clase',
            'descr' => 'Descr',
            'modelo' => 'Modelo',
            'serie' => 'Serie',
            'activo' => 'Activo',
            'uso' => 'Uso',
            'propio' => 'Propio',
            'propietario' => 'Propietario',
        ];
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
    public function getMarca()
    {
        return $this->hasOne(UniMarca::className(), ['id' => 'id_marca']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubtipo()
    {
        return $this->hasOne(UniSubtipo::className(), ['id' => 'id_subtipo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTipo()
    {
        return $this->hasOne(UniTipo::className(), ['id' => 'id_tipo']);
    }
}
