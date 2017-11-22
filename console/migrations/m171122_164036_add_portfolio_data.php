<?php

use yii\db\Migration;

/**
 * Class m171122_164036_add_portfolio_data
 */
class m171122_164036_add_portfolio_data extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->insert('project', [
            'title' => 'Round Icons',
            'subtitle' => 'Graphic Design',
            'description' => 'Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!',
            'picture' => 'roundicons.png',
            'date' => 'July 2014',
            'client' => 'Round Icons',
            'category' => 'Graphic Design',
        ]);

        $this->insert('project', [
            'title' => 'Treehouse',
            'subtitle' => 'Website Design',
            'description' => 'Startup Framework is a website builder for professionals. Startup Framework contains components and complex blocks (PSD+HTML Bootstrap themes and templates) which can easily be integrated into almost any design. All of these components are made in the same style, and can easily be integrated into projects, allowing you to create hundreds of solutions for your future projects.',
            'picture' => 'startup-framework.png',
        ]);

        $this->insert('project', [
            'title' => 'Startup Framework',
            'subtitle' => 'Website Design',
            'description' => 'Treehouse is a free PSD web template built by Mathavan Jaya. This is bright and spacious design perfect for people or startup companies looking to showcase their apps or other projects.',
            'picture' => 'treehouse.png',
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->truncateTable('project');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171122_164036_add_portfolio_data cannot be reverted.\n";

        return false;
    }
    */
}
