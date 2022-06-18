<?php

use yii\db\Migration;

/**
 * Class m220618_155813_addFieldVideo
 */
class m220618_155813_addFieldVideo extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->addColumn('{{%propiedades}}', 'video_url', $this->string()->defaultValue(null));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220618_155813_addFieldVideo cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220618_155813_addFieldVideo cannot be reverted.\n";

        return false;
    }
    */
}
