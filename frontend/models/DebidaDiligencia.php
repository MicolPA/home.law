<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "debida_diligencia".
 *
 * @property int $id
 * @property int|null $propiedad_id
 * @property int|null $debida_diligencia_list_id
 * @property int|null $user_id
 * @property string|null $date
 */
class DebidaDiligencia extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'debida_diligencia';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['propiedad_id', 'debida_diligencia_list_id', 'user_id'], 'integer'],
            [['date'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'propiedad_id' => 'Propiedad ID',
            'debida_diligencia_list_id' => 'Debida Diligencia List ID',
            'user_id' => 'User ID',
            'date' => 'Date',
        ];
    }
}
