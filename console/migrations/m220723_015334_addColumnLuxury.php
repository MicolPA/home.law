<?php

use yii\db\Migration;

/**
 * Class m220723_015334_addColumnLuxury
 */
class m220723_015334_addColumnLuxury extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%propiedades}}', 'isLuxury', $this->integer()->defaultValue(0));

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220723_015334_addColumnLuxury cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220723_015334_addColumnLuxury cannot be reverted.\n";

        return false;
    }
    */
}
