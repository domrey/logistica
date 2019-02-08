<?php

namespace app\modules\parque\models;

use Yii;

/**
 * This is the model class for table "uni_tipo".
 *
 * @property int $id
 * @property string $clave
 * @property string $nombre
 *
 * @property UniParque[] $uniParques
 */
class UniTipo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'uni_tipo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre'], 'required'],
            [['abrev'], 'string', 'max' => 15],
            [['nombre'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'abrev' => 'Abreviatura',
            'nombre' => 'Nombre',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUniParques()
    {
        return $this->hasMany(UniParque::className(), ['id_tipo' => 'id']);
    }
}
