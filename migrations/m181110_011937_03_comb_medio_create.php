<?php

use yii\db\Migration;

class m181110_011937_03_comb_medio_create extends Migration
{
    public function up()
    {
        $tableBase='comb_medio';
        $tableName = $this->db->tablePrefix . $tableBase;
        $tableOptions = null;
        $driver = $this->db->driverName;

        if ($driver === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_spanish_ci ENGINE=InnoDB';
        }

        if (!$this->db->getTableSchema($tableName, true)) {
            $this->createTable($tableName, [
                'id'        => $this->primaryKey(),
                'nombre'    => $this->string(20)->notNull(),
                'descr'     => $this->string(128),
            ]);
        }

        $this->insert($tableName, ['nombre'=>'VALERA', 'descr'=>'TALONARIO DE VALES']);
        $this->insert($tableName, ['nombre'=>'FACTURA', 'descr'=>'FACTURAS POR CARGAS FORANEAS']);
        $this->insert($tableName, ['nombre'=>'TARJETA', 'descr'=>'TARJETA ELECTRONICA']);
        

    }

    public function down()
    {
        
        $tableBase='comb_medio';
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