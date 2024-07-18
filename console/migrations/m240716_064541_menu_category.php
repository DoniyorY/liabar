<?php

use yii\db\Migration;

/**
 * Class m240716_064541_menu_category
 */
class m240716_064541_menu_category extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('menu_category', [
            'id' => $this->primaryKey(),
            'type_id'=>$this->integer(),
            'name_ru' => $this->string()->notNull(),
            'name_en' => $this->string()->notNull(),
            'name_uz' => $this->string()->defaultValue(null),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240716_064541_menu_category cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240716_064541_menu_category cannot be reverted.\n";

        return false;
    }
    */
}
