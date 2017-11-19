<?php

use yii\db\Migration;

/**
 * Class m171119_101835_rename_about_record_table
 */
class m171119_101835_rename_about_record_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->renameTable('about_record', 'about');
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->renameTable('about', 'about_record');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171119_101835_rename_about_record_table cannot be reverted.\n";

        return false;
    }
    */
}
