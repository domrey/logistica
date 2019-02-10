<?php

namespace app\modules\parque\models;

use Yii;

/**
 * This is the model class for table "uni_aditamento".
 *
 * @property int $id
 * @property string $nombre
 *
 * @property UniVehiculo[] $uniVehiculos
 */
class UniAditamento extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'uni_aditamento';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre'], 'required'],
            [['nombre'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUniVehiculos()
    {
        return $this->hasMany(UniVehiculo::className(), ['id_aditamento' => 'id']);
    }
}
