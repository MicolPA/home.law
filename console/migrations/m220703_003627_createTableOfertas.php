<?php

use yii\db\Migration;

/**
 * Class m220703_003627_createTableOfertas
 */
class m220703_003627_createTableOfertas extends Migration
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

        $this->createTable('{{%ofertas_propiedades}}', [
            'id' => $this->primaryKey(),
            'pdf_url' => $this->string(),
            'date' => $this->dateTime(),
            'monto' => $this->integer(),
            'agent_id' => $this->integer(),
            'propiedad_id' => $this->integer(),
            'status_id' => $this->integer()->defaultValue(1),
            'status_updated_date' => $this->dateTime(),
        ], $tableOptions);


        $this->createTable('{{%ofertas_status}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
        ], $tableOptions);

        $this->createTable('{{%comments}}', [
            'id' => $this->primaryKey(),
            'comment' => $this->text(),
            'nombre' => $this->string(),
            'correo' => $this->string(),
            'propiedad_id' => $this->integer(),
            'date' => $this->dateTime(),
        ], $tableOptions);

        $this->addForeignKey('statusOferta', '{{%ofertas_propiedades}}', 'status_id', '{{%ofertas_status}}', 'id', 'CASCADE', 'CASCADE');

        $this->insert('{{%ofertas_status}}', ['name' => "Pendiente"]);
        $this->insert('{{%ofertas_status}}', ['name' => "Aprobada"]);
        $this->insert('{{%ofertas_status}}', ['name' => "Rechazada"]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220703_003627_createTableOfertas cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220703_003627_createTableOfertas cannot be reverted.\n";

        return false;
    }
    */
}
