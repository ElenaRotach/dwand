<?php

use yii\db\Migration;

class m170820_153235_add_column_from_post extends Migration
{
    public function up()
    {
        $this->addColumn('{{%post}}', 'views', $this->integer()->comment('просмотры'));
    }

    public function down()
    {
        $this->dropColumn('{{%post}}', 'views');
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
