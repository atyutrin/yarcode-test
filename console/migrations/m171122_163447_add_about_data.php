<?php

use yii\db\Migration;

/**
 * Class m171122_163447_add_about_data
 */
class m171122_163447_add_about_data extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->insert('about', [
            'date' => '2009-2011',
            'subtitle' => 'Our Humble Beginnings',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!',
            'picture' => '1.jpg',
            'order' => '0'
        ]);

        $this->insert('about', [
            'date' => 'MARCH 2011',
            'subtitle' => 'An Agency is Born',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!',
            'picture' => '2.jpg',
            'order' => '1'
        ]);

        $this->insert('about', [
            'date' => 'DECEMBER 2012',
            'subtitle' => 'Transition to Full Service',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!',
            'picture' => '3.jpg',
            'order' => '2'
        ]);

        $this->insert('about', [
            'date' => 'JULY 2014',
            'subtitle' => 'Phase Two Expansion',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!',
            'picture' => '4.jpg',
            'order' => '3'
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->truncateTable('about');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171122_163447_add_about_data cannot be reverted.\n";

        return false;
    }
    */
}
