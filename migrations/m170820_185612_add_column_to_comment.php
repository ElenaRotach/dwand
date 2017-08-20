<?php

use yii\db\Migration;

class m170820_185612_add_column_to_comment extends Migration
{
    public function up()
    {
        $this->addColumn('{{%comment}}', 'post_id', $this->integer());
        $this->createIndex(
            'idx-post',
            'comment',
            'post_id'
        );

        $this->addForeignKey(
            'fk-post',
            'comment',
            'post_id',
            'post',
            'id',
            'CASCADE'
        );
    }

    public function down()
    {
        $this->dropColumn('{{%comment}}', 'post_id');
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
