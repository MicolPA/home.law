<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "propiedades_extras_list".
 *
 * @property int $id
 * @property string|null $nombre
 * @property string|null $icon
 *
 * @property PropiedadesExtras[] $propiedadesExtras
 */
class PropiedadesExtrasList extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'propiedades_extras_list';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'icon'], 'string', 'max' => 255],
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
            'icon' => 'Icon',
        ];
    }

    /**
     * Gets query for [[PropiedadesExtras]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPropiedadesExtras()
    {
        return $this->hasMany(PropiedadesExtras::className(), ['extra_id' => 'id']);
    }
}
