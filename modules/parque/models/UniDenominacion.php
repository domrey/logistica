<?php

namespace app\modules\parque\models;

use Yii;

/**
 * This is the model class for table "uni_denominacion".
 *
 * @property int $id
 * @property string $texto
 * @property string $descr
 *
 * @property UniVehiculo[] $uniVehiculos
 */
class UniDenominacion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'uni_denominacion';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['texto'], 'required'],
            [['texto'], 'string', 'max' => 20],
            [['descr'], 'string', 'max' => 80],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'texto' => 'Texto',
            'descr' => 'Descr',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUniVehiculos()
    {
        return $this->hasMany(UniVehiculo::className(), ['id_denom' => 'id']);
    }
}
