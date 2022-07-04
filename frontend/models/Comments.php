<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "comments".
 *
 * @property int $id
 * @property string|null $comment
 * @property string|null $nombre
 * @property string|null $correo
 * @property int|null $propiedad_id
 * @property string|null $date
 */
class Comments extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'comments';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['comment'], 'string'],
            [['propiedad_id'], 'integer'],
            [['date'], 'safe'],
            [['nombre', 'correo'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'comment' => 'Comentario',
            'nombre' => 'Nombre',
            'correo' => 'Correo',
            'propiedad_id' => 'Propiedad ID',
            'date' => 'Date',
        ];
    }
}
