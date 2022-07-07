<?php

use yii\db\Migration;

/**
 * Class m220706_233431_createTableView
 */
class m220706_233431_createTableView extends Migration
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

        $this->createTable('{{%log_visitas}}', [
            'id' => $this->primaryKey(),
            'propiedad_id' => $this->integer(),
            'perfil_agente' => $this->integer(),
            'agente_id' => $this->integer(),
            'dispositivo_ip' => $this->string(),
        ], $tableOptions);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220706_233431_createTableView cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220706_233431_createTableView cannot be reverted.\n";

        return false;
    }
    */
}
