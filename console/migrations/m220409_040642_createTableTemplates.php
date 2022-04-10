<?php

use yii\db\Migration;

/**
 * Class m220409_040642_createTableTemplates
 */
class m220409_040642_createTableTemplates extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%profile_templates}}', [
            'id' => $this->primaryKey(),
            'nombre' => $this->string(),
            'banner_background_type' => $this->integer(),
            'banner_background' => $this->string(),
            'body_background' => $this->string(),
            'body_background_type' => $this->integer(),
            'body_color' => $this->string(),
        ], $tableOptions);

        $this->createTable('{{%templates_background_type}}', [
            'id' => $this->primaryKey(),
            'nombre' => $this->string(),
        ], $tableOptions);

        $this->addColumn('{{%user}}', 'descripcion', $this->text()->defaultValue(null));
        $this->addColumn('{{%user}}', 'template_id', $this->integer()->defaultValue(null));
        $this->addColumn('{{%user}}', 'video_url', $this->string()->defaultValue(null));
        $this->addColumn('{{%user}}', 'video_platform', $this->string()->defaultValue(null));
        $this->addColumn('{{%user}}', 'instagram', $this->string()->defaultValue(null));
        $this->addColumn('{{%user}}', 'facebook', $this->string()->defaultValue(null));
        $this->addColumn('{{%user}}', 'twitter', $this->string()->defaultValue(null));
        $this->addColumn('{{%user}}', 'whatsapp', $this->string()->defaultValue(null));
        
        $this->addForeignKey('template', '{{%user}}', 'template_id', '{{%profile_templates}}', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220409_040642_createTableTemplates cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220409_040642_createTableTemplates cannot be reverted.\n";

        return false;
    }
    */
}
