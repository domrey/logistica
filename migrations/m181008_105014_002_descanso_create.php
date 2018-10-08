<?php

use yii\db\Migration;

/**
 * Class m181008_105014_002_descanso_create
 */
class m181008_105014_002_descanso_create extends Migration
{
    /**
     * {@inheritdoc}
     */

    public function safeUp()
    {
        $tableName='rh_descanso';
        $tableOptions=null;
        $driver = $this->db->driverName;
        $pkColumn = '';

        if ($driver === 'mysql') {
            $tableOptions='CHARACTER SET utf COLLATE utf_spanish_ci ENGINE=InnoDB';
            //$pkColumn = $this->char(2)->notNull();
        }

        $this->createTable($tableName, [
            //'clave'     => $this->char(2)->primaryKey(),
            'clave'     => $this->char(2)->notNull(),
            'descr'     => $this->string(45)->notNull(),
            'valor'     => $this->integer()->unsigned()->notNull(),
            'abrevn'    => $this->string(10)
        ]);

        if ($driver === "mysql") {
            $this->addPrimaryKey('pk-clave', $tableName, 'clave');
        }

        $this->insert($tableName, ['clave'=>'L', 'descr'=>'LUNES', 'valor'=>64, 'abrevn'=>'1']);
        $this->insert($tableName, ['clave'=>'M', 'descr'=>'MARTES', 'valor'=>32, 'abrevn'=>'2']);
        $this->insert($tableName, ['clave'=>'X', 'descr'=>'MIERCOLES', 'valor'=>16, 'abrevn'=>'3']);
        $this->insert($tableName, ['clave'=>'J', 'descr'=>'JUEVES', 'valor'=>8, 'abrevn'=>'4']);
        $this->insert($tableName, ['clave'=>'V', 'descr'=>'VIERNES', 'valor'=>4, 'abrevn'=>'5']);
        $this->insert($tableName, ['clave'=>'S', 'descr'=>'SABADO', 'valor'=>2, 'abrevn'=>'6']);
        $this->insert($tableName, ['clave'=>'D', 'descr'=>'DOMINGO', 'valor'=>1, 'abrevn'=>'7']);
        $this->insert($tableName, ['clave'=>'SD', 'descr'=>'SAB. Y DOM.', 'valor'=>3, 'abrevn'=>'6,7']);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $tableName = 'rh_descanso';

        $this->dropTable($tableName);
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181008_105014_002_descanso_create cannot be reverted.\n";

        return false;
    }
    */
}
