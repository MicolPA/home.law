<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "ofertas_propiedades".
 *
 * @property int $id
 * @property string|null $pdf_url
 * @property string|null $date
 * @property int|null $agent_id
 * @property int|null $status_id
 * @property string|null $status_updated_date
 *
 * @property OfertasStatus $status
 */
class OfertasPropiedades extends \yii\db\ActiveRecord
{

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ofertas_propiedades';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date', 'status_updated_date'], 'safe'],
            [['agent_id', 'status_id'], 'integer'],
            [['pdf_url'], 'string', 'max' => 255],
            [['status_id'], 'exist', 'skipOnError' => true, 'targetClass' => OfertasStatus::className(), 'targetAttribute' => ['status_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pdf_url' => 'Pdf Url',
            'date' => 'Fecha',
            'agent_id' => 'Agent ID',
            'status_id' => 'Status ID',
            'status_updated_date' => 'Status Updated Date',
        ];
    }

    /**
     * Gets query for [[Status]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStatus()
    {
        return $this->hasOne(OfertasStatus::className(), ['id' => 'status_id']);
    }
}
