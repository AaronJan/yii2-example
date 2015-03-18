<?php

use yii\db\Schema;
use yii\db\Migration;

class m150318_020443_create_messages_table extends Migration
{
    public function up()
    {
        $this->createTable('messages', [
            'id' => 'pk',
            'user_id' => Schema::TYPE_INTEGER,
            'content' => Schema::TYPE_STRING . '(500) NOT NULL',
        ]);
    }

    public function down()
    {
        $this->dropTable('messages');
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
