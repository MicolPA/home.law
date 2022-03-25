<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "propiedades_extras".
 *
 * @property int $id
 * @property int|null $extra_id
 * @property int|null $propiedad_id
 *
 * @property PropiedadesExtrasList $extra
 */
class PropiedadesExtras extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'propiedades_extras';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['extra_id', 'propiedad_id'], 'integer'],
            [['extra_id'], 'exist', 'skipOnError' => true, 'targetClass' => PropiedadesExtrasList::className(), 'targetAttribute' => ['extra_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'extra_id' => 'Extra ID',
            'propiedad_id' => 'Propiedad ID',
        ];
    }

    /**
     * Gets query for [[Extra]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getExtra()
    {
        return $this->hasOne(PropiedadesExtrasList::className(), ['id' => 'extra_id']);
    }
}
