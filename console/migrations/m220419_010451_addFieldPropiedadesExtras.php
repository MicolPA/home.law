<?php

use yii\db\Migration;

/**
 * Class m220419_010451_addFieldPropiedadesExtras
 */
class m220419_010451_addFieldPropiedadesExtras extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%propiedades_extras_list}}', 'is_filtro', $this->integer()->defaultValue(0));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220419_010451_addFieldPropiedadesExtras cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220419_010451_addFieldPropiedadesExtras cannot be reverted.\n";

        return false;
    }
    */
}
