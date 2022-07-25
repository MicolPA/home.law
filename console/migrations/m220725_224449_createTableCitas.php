<?php

use yii\db\Migration;

/**
 * Class m220725_224449_createTableCitas
 */
class m220725_224449_createTableCitas extends Migration
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

        $this->createTable('{{%citas}}', [
            'id' => $this->primaryKey(),
            'client_name' => $this->string(),
            'user_id' => $this->integer(),
            'agente_id' => $this->integer(),
            'date' => $this->dateTime(),
        ], $tableOptions);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220725_224449_createTableCitas cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220725_224449_createTableCitas cannot be reverted.\n";

        return false;
    }
    */
}
