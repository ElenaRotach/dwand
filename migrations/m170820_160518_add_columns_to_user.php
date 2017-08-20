<?php

use yii\db\Migration;

class m170820_160518_add_columns_to_user extends Migration
{
    public function up()
    {
        $this->addColumn('{{%user}}', 'avatar', $this->string()->comment('просмотры'));
    }

    public function down()
    {
        $this->dropColumn('{{%user}}', 'avatar');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
