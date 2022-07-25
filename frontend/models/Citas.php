<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "citas".
 *
 * @property int $id
 * @property string|null $client_name
 * @property int|null $user_id
 * @property int|null $agente_id
 * @property string|null $date
 */
class Citas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'citas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'agente_id'], 'integer'],
            [['date'], 'safe'],
            [['client_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'client_name' => 'Client Name',
            'user_id' => 'User ID',
            'agente_id' => 'Agente ID',
            'date' => 'Date',
        ];
    }
}
