<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "ofertas_status".
 *
 * @property int $id
 * @property string|null $name
 *
 * @property OfertasPropiedades[] $ofertasPropiedades
 */
class OfertasStatus extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ofertas_status';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    /**
     * Gets query for [[OfertasPropiedades]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOfertasPropiedades()
    {
        return $this->hasMany(OfertasPropiedades::className(), ['status_id' => 'id']);
    }
}
