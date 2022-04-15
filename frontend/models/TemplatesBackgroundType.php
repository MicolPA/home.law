<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "templates_background_type".
 *
 * @property int $id
 * @property string|null $nombre
 */
class TemplatesBackgroundType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'templates_background_type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre'], 'string', 'max' => 255],
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
}
