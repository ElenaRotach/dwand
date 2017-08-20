<?php

use yii\db\Migration;

class m170819_084814_create_post extends Migration
{
    public function up()
    {
        $this->createTable('post',[
            'id' => $this->primaryKey(),
            'title' =>$this->string(),
            'description' => $this->text(),
            'user_id' => $this->integer()
        ]);
    }


    public function down()
    {
        $this->dropTable('post');
    }
}
