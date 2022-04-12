<?php

use yii\db\Migration;

/**
 * Class m220412_005312_addStatusField
 */
class m220412_005312_addStatusField extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%propiedades}}', 'status', $this->integer()->defaultValue(1));

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220412_005312_addStatusField cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220412_005312_addStatusField cannot be reverted.\n";

        return false;
    }
    */
}
