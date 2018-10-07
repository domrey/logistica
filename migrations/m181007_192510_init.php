<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m181007_192510_init
 */
class m181007_192510_init extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        return $this->createTable('user', [
            'id' => Schema::TYPE_PK,
            'email' => Schema::TYPE_STRING,
            'password' => Schema::TYPE_STRING,
            'name'=>Schema::TYPE_STRING,
            'created_at'=>Schema::TYPE_INTEGER,
            'updated_at'=>Schema::TYPE_INTEGER
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        return $this->dropTable('user');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181007_192510_init cannot be reverted.\n";

        return false;
    }
    */
}
