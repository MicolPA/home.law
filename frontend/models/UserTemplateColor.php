<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "user_template_color".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $color_1
 * @property string|null $color_2
 * @property string|null $color_3
 * @property string|null $color_4
 *
 * @property User[] $users
 */
class UserTemplateColor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user_template_color';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'color_1', 'color_2', 'color_3', 'color_4'], 'string', 'max' => 255],
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
            'color_1' => 'Color  1',
            'color_2' => 'Color  2',
            'color_3' => 'Color  3',
            'color_4' => 'Color  4',
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
