<?php

use yii\db\Migration;

/**
 * Class m240726_060446_edit_menu_country_ru
 */
class m240726_060446_edit_menu_country_ru extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('menu','country_ru','varchar(255) NULL');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240726_060446_edit_menu_country_ru cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240726_060446_edit_menu_country_ru cannot be reverted.\n";

        return false;
    }
    */
}
