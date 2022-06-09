<?php

use yii\db\Migration;

/**
 * Class m220609_185028_createTableDiligencia
 */
class m220609_185028_createTableDiligencia extends Migration
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

        $this->createTable('{{%debida_diligencia}}', [
            'id' => $this->primaryKey(),
            'propiedad_id' => $this->integer(),
            'debida_diligencia_list_id' => $this->integer(),
            'user_id' => $this->integer(),
            'date' => $this->dateTime(),
        ], $tableOptions);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220609_185028_createTableDiligencia cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220609_185028_createTableDiligencia cannot be reverted.\n";

        return false;
    }
    */
}
