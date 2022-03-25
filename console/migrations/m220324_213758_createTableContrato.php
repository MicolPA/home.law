<?php

use yii\db\Migration;

/**
 * Class m220324_213758_createTableContrato
 */
class m220324_213758_createTableContrato extends Migration
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

        $this->createTable('{{%propiedades_tipo_contrato}}', [
            'id' => $this->primaryKey(),
            'nombre' => $this->string(),
        ], $tableOptions);

        $this->insert('{{%propiedades_tipo_contrato}}', ['nombre' => "Venta"]);
        $this->insert('{{%propiedades_tipo_contrato}}', ['nombre' => "Alquiler"]);
        $this->addColumn('{{%propiedades}}', 'tipo_contrato_id', $this->integer()->defaultValue(null));
        $this->addForeignKey('contrato', '{{%propiedades}}', 'tipo_contrato_id', '{{%propiedades_tipo_contrato}}', 'id', 'CASCADE', 'CASCADE');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220324_213758_createTableContrato cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220324_213758_createTableContrato cannot be reverted.\n";

        return false;
    }
    */
}
