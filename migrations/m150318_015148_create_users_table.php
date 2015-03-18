<?php

use yii\db\Schema;
use yii\db\Migration;

class m150318_015148_create_users_table extends Migration
{
    public function up()
    {
        $this->createTable('users', [
            'id' => 'pk',
            'name' => Schema::TYPE_STRING . '(16) NOT NULL',
            'password' => Schema::TYPE_STRING . '(60)',
        ]);
    }

    public function down()
    {
        $this->dropTable('users');
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
