<?php

namespace app\modules\parque\models;

use Yii;

/**
 * This is the model class for table "uni_clase".
 *
 * @property int $id
 * @property string $nombre
 *
 * @property UniParque[] $uniParques
 */
class UniClase extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'uni_clase';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre'], 'required'],
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
            'nombre' => 'Nombre',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUniParques()
    {
        return $this->hasMany(UniParque::className(), ['id_clase' => 'id']);
    }
}
