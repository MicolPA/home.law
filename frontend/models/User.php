<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $username
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $photo_url
 * @property string $auth_key
 * @property int $role_id
 * @property string $password_hash
 * @property string|null $password_reset_token
 * @property string $email
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 * @property string|null $verification_token
 * @property int|null $template_id
 * @property string|null $video_url
 * @property string|null $video_platform
 * @property string|null $instagram
 * @property string|null $facebook
 * @property string|null $twitter
 * @property string|null $whatsapp
 *
 * @property Roles $role
 * @property ProfileTemplates $template
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'auth_key', 'password_hash', 'email', 'created_at', 'updated_at'], 'required'],
            [['role_id', 'status', 'created_at', 'updated_at', 'template_id'], 'integer'],
            [['username', 'first_name', 'last_name', 'photo_url', 'password_hash', 'password_reset_token', 'email', 'verification_token', 'video_url', 'video_platform', 'instagram', 'facebook', 'twitter', 'whatsapp'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['username'], 'unique'],
            [['email'], 'unique'],
            [['password_reset_token'], 'unique'],
            [['role_id'], 'exist', 'skipOnError' => true, 'targetClass' => Roles::className(), 'targetAttribute' => ['role_id' => 'id']],
            [['template_id'], 'exist', 'skipOnError' => true, 'targetClass' => ProfileTemplates::className(), 'targetAttribute' => ['template_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'photo_url' => 'Photo Url',
            'auth_key' => 'Auth Key',
            'role_id' => 'Role ID',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Email',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'verification_token' => 'Verification Token',
            'template_id' => 'Template ID',
            'video_url' => 'Video Url',
            'video_platform' => 'Video Platform',
            'instagram' => 'Instagram',
            'facebook' => 'Facebook',
            'twitter' => 'Twitter',
            'whatsapp' => 'Whatsapp',
        ];
    }

    /**
     * Gets query for [[Role]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRole()
    {
        return $this->hasOne(Roles::className(), ['id' => 'role_id']);
    }

    /**
     * Gets query for [[Template]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTemplate()
    {
        return $this->hasOne(ProfileTemplates::className(), ['id' => 'template_id']);
    }
}
