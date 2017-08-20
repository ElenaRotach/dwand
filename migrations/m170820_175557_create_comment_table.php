<?php

use yii\db\Migration;

/**
 * Handles the creation of table `comment`.
 */
class m170820_175557_create_comment_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%comment}}', [
            'id' => $this->primaryKey(),
            'test' => $this->string(),
            'user_id' => $this->integer()
        ]);

        $this->createIndex(
            'idx-post-user_id',
            'comment',
            'user_id'
        );

        $this->addForeignKey(
            'fk-post-user_id',
            'comment',
            'user_id',
            'user',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('comment');
    }
}
