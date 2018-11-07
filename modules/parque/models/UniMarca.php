<?php

namespace app\modules\parque\models;

use Yii;

/**
 * This is the model class for table "uni_marca".
 *
 * @property int $id
 * @property string $nombre
 *
 * @property UniParque[] $uniParques
 */
class UniMarca extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'uni_marca';
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
    public function getUniParques()
    {
        return $this->hasMany(UniParque::className(), ['id_marca' => 'id']);
    }
}
