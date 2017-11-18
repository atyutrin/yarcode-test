<?php

use yii\db\Migration;

/**
 * Class m171118_120744_create_tables
 */
class m171118_120744_create_tables extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('project', [
            'id' => $this->primaryKey(),
            'title' => $this->string(128)->notNull(),
            'subtitle' => $this->string(256)->notNull(),
            'description' => $this->text()->notNull(),
            'picture' => $this->string(128),
            'date' => $this->string(64),
            'client' => $this->string(64),
            'category' => $this->string(64)
        ], 'CHARACTER SET utf8 ENGINE=InnoDB');

        $this->createTable('about_record', [
            'id' => $this->primaryKey(),
            'date' => $this->string(64),
            'subtitle' => $this->string(128),
            'description' => $this->text(),
            'picture' => $this->string(128)
        ], 'CHARACTER SET utf8 ENGINE=InnoDB');
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('project');
        $this->dropTable('about_record');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171118_120744_create_tables cannot be reverted.\n";

        return false;
    }
    */
}
