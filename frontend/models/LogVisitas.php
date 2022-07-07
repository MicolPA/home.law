<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "log_visitas".
 *
 * @property int $id
 * @property int|null $propiedad_id
 * @property int|null $perfil_agente
 * @property int|null $agente_id
 * @property string|null $dispositivo_ip
 */
class LogVisitas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'log_visitas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['propiedad_id', 'perfil_agente', 'agente_id'], 'integer'],
            [['dispositivo_ip'], 'string', 'max' => 50],
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
            'perfil_agente' => 'Perfil Agente',
            'agente_id' => 'Agente ID',
            'dispositivo_ip' => 'Dispositivo Ip',
        ];
    }
}
