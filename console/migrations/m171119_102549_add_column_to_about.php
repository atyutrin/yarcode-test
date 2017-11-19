<?php

use yii\db\Migration;

/**
 * Class m171119_102549_add_column_to_about
 */
class m171119_102549_add_column_to_about extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->addColumn('about', 'order', $this->integer());
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropColumn('about', 'order');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171119_102549_add_column_to_about cannot be reverted.\n";

        return false;
    }
    */
}
