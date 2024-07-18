<?php

use yii\db\Migration;

/**
 * Class m240716_064818_menu
 */
class m240716_064818_menu extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('menu', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer(),
            'title_ru' => $this->string()->notNull(),
            'title_en' => $this->string()->notNull(),
            'title_uz' => $this->string()->defaultValue(null),
            'short_ru' => $this->string()->notNull(),
            'short_en' => $this->string()->notNull(),
            'short_uz' => $this->string()->defaultValue(null),
            'price' => $this->integer()->notNull(),
            'created' => $this->integer()->notNull(),
            'status' => $this->integer()->notNull(),
            'country' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240716_064818_menu cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240716_064818_menu cannot be reverted.\n";

        return false;
    }
    */
}
