<?php

use yii\db\Migration;

/**
 * Class m240726_052449_menu_edit_country
 */
class m240726_052449_menu_edit_country extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->renameColumn('{{%menu}}', 'country', 'country_ru');
        $this->addColumn('{{%menu}}', 'country_en', 'varchar(255) NULL');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240726_052449_menu_edit_country cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240726_052449_menu_edit_country cannot be reverted.\n";

        return false;
    }
    */
}
