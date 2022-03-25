<?php

use yii\db\Migration;

/**
 * Class m220323_031506_main_tables
 */
class m220323_031506_main_tables extends Migration
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

        $this->createTable('{{%propiedades}}', [
            'id' => $this->primaryKey(),
            'codigo' => $this->string(),
            'titulo_publicacion' => $this->string(),
            'tipo_propiedad' => $this->integer(),
            'ubicacion_id' => $this->integer(),
            'habitaciones' => $this->integer(),
            'parqueos' => $this->integer(),
            'baños' => $this->integer(),
            'detalles' => $this->text(),
            'created_by_user_id' => $this->integer(),
            'assigned_to_user_id' => $this->integer(),
            'galeria_id' => $this->integer(),
            'fecha_publicacion' => $this->dateTime(),
            'portada' => $this->string(),
            'extra_text' => $this->text(),
            'tags' => $this->text(),
            'precio' => $this->float(),
            'metros' => $this->float(),
            'pies' => $this->float(),
            'date' => $this->dateTime(),
        ], $tableOptions);

        $this->createTable('{{%propiedades_galeria}}', [
            'id' => $this->primaryKey(),
            'foto_2' => $this->string(),
            'foto_3' => $this->string(),
            'foto_4' => $this->string(),
            'foto_5' => $this->string(),
            'foto_6' => $this->string(),
            'foto_7' => $this->string(),
            'foto_8' => $this->string(),
            'foto_9' => $this->string(),
            'foto_10' => $this->string(),
            'foto_11' => $this->string(),
            'foto_12' => $this->string(),
        ], $tableOptions);

        $this->createTable('{{%propiedades_tipo}}', [
            'id' => $this->primaryKey(),
            'nombre' => $this->string(),
        ], $tableOptions);

        $this->createTable('{{%ubicaciones}}', [
            'id' => $this->primaryKey(),
            'nombre' => $this->string(),
            'portada' => $this->string(),
        ], $tableOptions);

        $this->createTable('{{%propiedades_extras}}', [
            'id' => $this->primaryKey(),
            'extra_id' => $this->integer(),
            'propiedad_id' => $this->integer(),
        ], $tableOptions);

        $this->createTable('{{%propiedades_extras_list}}', [
            'id' => $this->primaryKey(),
            'nombre' => $this->string(),
            'icon' => $this->string(),
        ], $tableOptions);

        $this->createTable('{{%tasas_hipotecarias}}', [
            'id' => $this->primaryKey(),
            'nombre_banco' => $this->string(),
            'photo_url' => $this->string(),
            'tasa' => $this->float(),
            'duracion' => $this->string(),
            'correo' => $this->string(),
            'telefono' => $this->string(),
            'tasa_1' => $this->string(),
            'duracion_1' => $this->string(),
            'tasa_2' => $this->string(),
            'duracion_2' => $this->string(),
            'tasa_3' => $this->string(),
            'duracion_3' => $this->string(),
            'date' => $this->dateTime(),
        ], $tableOptions);

         $this->createTable('{{%constantes}}', [
            'id' => $this->primaryKey(),
            'nombre' => $this->string(),
            'contenido' => $this->text(),
        ], $tableOptions);


        $this->addForeignKey('tipo', '{{%propiedades}}', 'tipo_propiedad', '{{%propiedades_tipo}}', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('ubicacion', '{{%propiedades}}', 'ubicacion_id', '{{%ubicaciones}}', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('extra', '{{%propiedades_extras}}', 'extra_id', '{{%propiedades_extras_list}}', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220323_031506_main_tables cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220323_031506_main_tables cannot be reverted.\n";

        return false;
    }
    */
}
