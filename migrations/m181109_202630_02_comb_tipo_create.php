<?php

use yii\db\Migration;

class m181109_202630_02_comb_tipo_create extends Migration
{
    public function up()
    {
        $tableBase='comb_tipo';
        $tableName = $this->db->tablePrefix . $tableBase;
        $tableOptions = null;
        $driver = $this->db->driverName;

        if ($driver === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_spanish_ci ENGINE=InnoDB';
        }

        if (!$this->db->getTableSchema($tableName, true)) {
            $this->createTable($tableName, [
                'id'    => $this->primaryKey(),
                'clave' => $this->string(20)->notNull(),
                'descr' => $this->string(128),
            ]);


            $this->insert($tableName, ['clave'=>'DIESEL', 'descr'=>'DIESEL']);
            $this->insert($tableName, ['clave'=>'GASOLINA', 'descr'=>'GASOLINA']);

        }
        


    }

    public function down()
    {
        
        $tableBase='comb_tipo';
        $tableName = $this->db->tablePrefix . $tableBase;

        if ($this->db->getTableSchema($tableName, true)) {
            $this->dropTable($tableName);
        }

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