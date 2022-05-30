<?php

use yii\db\Migration;

/**
 * Class m220529_010627_addTableLayoutCustom
 */
class m220529_010627_addTableLayoutCustom extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropTable('{{%templates_background_type}}');
        $this->dropForeignKey('template', '{{%user}}');
        $this->dropTable('{{%profile_templates}}');

        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%user_template_color}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->unique(),
            'color_1' => $this->string(),
            'color_2' => $this->string(),
            'color_3' => $this->string(),
            'color_4' => $this->string(),
            'text_color' => $this->string(),
        ], $tableOptions);

        $this->addColumn('{{%user}}', 'layout', $this->string()->defaultValue('corporate-view'));
        $this->addForeignKey('templateColor', '{{%user}}', 'template_id', '{{%user_template_color}}', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220529_010627_addTableLayoutCustom cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220529_010627_addTableLayoutCustom cannot be reverted.\n";

        return false;
    }
    */
}
