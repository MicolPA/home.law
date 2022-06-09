<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "debida_diligencia_listado".
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $user_id
 * @property string|null $date
 */
class DebidaDiligenciaListado extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'debida_diligencia_listado';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id'], 'integer'],
            [['date'], 'safe'],
            [['name'], 'string', 'max' => 255],
            [['name'], 'unique'],
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
            'user_id' => 'User ID',
            'date' => 'Date',
        ];
    }
}
