<?php

use yii\db\Migration;

/**
 * Class m220604_175326_createTablesDictamen
 */
class m220604_175326_createTablesDictamen extends Migration
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

        $this->createTable('{{%debida_diligencia_listado}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->unique(),
            'user_id' => $this->integer(),
            'date' => $this->dateTime(),
        ], $tableOptions);

        // $this->createTable('{{%debida_diligencia}}', [
        //     'id' => $this->primaryKey(),
        //     'propiedad_id' => $this->integer(),
        //     'debida_diligencia_list_id' => $this->integer(),
        //     'user_id' => $this->integer(),
        //     'date' => $this->dateTime(),
        // ], $tableOptions);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220604_175326_createTablesDictamen cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220604_175326_createTablesDictamen cannot be reverted.\n";

        return false;
    }
    */
}
