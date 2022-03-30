<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tasas_hipotecarias".
 *
 * @property int $id
 * @property string|null $nombre_banco
 * @property string|null $photo_url
 * @property float|null $tasa
 * @property string|null $duracion
 * @property string|null $correo
 * @property string|null $telefono
 * @property string|null $tasa_1
 * @property string|null $duracion_1
 * @property string|null $tasa_2
 * @property string|null $duracion_2
 * @property string|null $tasa_3
 * @property string|null $duracion_3
 * @property string|null $date
 */
class TasasHipotecarias extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tasas_hipotecarias';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tasa'], 'number'],
            [['date'], 'safe'],
            [['nombre_banco', 'photo_url', 'duracion', 'correo', 'telefono', 'tasa_1', 'duracion_1', 'tasa_2', 'duracion_2', 'tasa_3', 'duracion_3'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre_banco' => 'Nombre Banco',
            'photo_url' => 'Photo Url',
            'tasa' => 'Tasa',
            'duracion' => 'Duracion',
            'correo' => 'Correo',
            'telefono' => 'Telefono',
            'tasa_1' => 'Tasa  1',
            'duracion_1' => 'Duracion  1',
            'tasa_2' => 'Tasa  2',
            'duracion_2' => 'Duracion  2',
            'tasa_3' => 'Tasa  3',
            'duracion_3' => 'Duracion  3',
            'date' => 'Date',
        ];
    }
}
