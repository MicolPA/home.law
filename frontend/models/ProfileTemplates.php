<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "profile_templates".
 *
 * @property int $id
 * @property string|null $nombre
 * @property int|null $banner_background_type
 * @property string|null $banner_background
 * @property string|null $body_background
 * @property int|null $body_background_type
 * @property string|null $body_color
 *
 * @property User[] $users
 */
class ProfileTemplates extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'profile_templates';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['banner_background_type', 'body_background_type'], 'integer'],
            [['nombre', 'banner_background', 'body_background', 'body_color'], 'string', 'max' => 255],
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
            'banner_background_type' => 'Banner Background Type',
            'banner_background' => 'Banner Background',
            'body_background' => 'Body Background',
            'body_background_type' => 'Body Background Type',
            'body_color' => 'Body Color',
        ];
    }

    /**
     * Gets query for [[Users]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(User::className(), ['template_id' => 'id']);
    }
}
