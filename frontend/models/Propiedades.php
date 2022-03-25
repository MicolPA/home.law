<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "propiedades".
 *
 * @property int $id
 * @property string|null $codigo
 * @property string|null $titulo_publicacion
 * @property int|null $tipo_propiedad
 * @property int|null $ubicacion_id
 * @property int|null $habitaciones
 * @property int|null $baños
 * @property string|null $detalles
 * @property int|null $created_by_user_id
 * @property int|null $user_id
 * @property int|null $galeria_id
 * @property string|null $fecha_publicacion
 * @property string|null $portada
 * @property string|null $extra_text
 * @property string|null $tags
 * @property float|null $precio
 * @property float|null $metros
 * @property float|null $pies
 * @property string|null $date
 *
 * @property PropiedadesTipo $tipoPropiedad
 * @property Ubicaciones $ubicacion
 */
class Propiedades extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'propiedades';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tipo_propiedad', 'ubicacion_id', 'habitaciones', 'baños', 'created_by_user_id', 'user_id', 'galeria_id'], 'integer'],
            [['detalles', 'extra_text', 'tags'], 'string'],
            [['fecha_publicacion', 'date'], 'safe'],
            [['precio', 'metros', 'pies'], 'number'],
            [['codigo', 'titulo_publicacion', 'portada'], 'string', 'max' => 255],
            [['tipo_propiedad'], 'exist', 'skipOnError' => true, 'targetClass' => PropiedadesTipo::className(), 'targetAttribute' => ['tipo_propiedad' => 'id']],
            [['ubicacion_id'], 'exist', 'skipOnError' => true, 'targetClass' => Ubicaciones::className(), 'targetAttribute' => ['ubicacion_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'codigo' => 'Código',
            'titulo_publicacion' => 'Titulo Públicacion',
            'tipo_propiedad' => 'Tipo Propiedad',
            'ubicacion_id' => 'Ubicación',
            'habitaciones' => 'Habitaciones',
            'baños' => 'Baños',
            'detalles' => 'Detalles',
            'created_by_user_id' => 'Usuario',
            'assigned_to_user_id' => 'Agente',
            'galeria_id' => 'Galeria ID',
            'fecha_publicacion' => 'Fecha Publicacion',
            'portada' => 'Portada',
            'extra_text' => 'Extra Text',
            'tags' => 'Tags',
            'precio' => 'Precio',
            'metros' => 'Metros',
            'pies' => 'Pies',
            'date' => 'Date',
        ];
    }

    /**
     * Gets query for [[TipoPropiedad]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTipoPropiedad()
    {
        return $this->hasOne(PropiedadesTipo::className(), ['id' => 'tipo_propiedad']);
    }

    /**
     * Gets query for [[Ubicacion]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUbicacion()
    {
        return $this->hasOne(Ubicaciones::className(), ['id' => 'ubicacion_id']);
    }
}
