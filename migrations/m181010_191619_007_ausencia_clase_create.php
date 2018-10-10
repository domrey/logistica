<?php

use yii\db\Migration;

class m181010_191619_007_ausencia_clase_create extends Migration
{
    public function up()
    {
        $tableBase='rh_ausencia_clase';
        $tableName = $this->db->tablePrefix . $tableBase;
        $tableOptions = null;
        $driver = $this->db->driverName;

        if ($driver === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_spanish_ci ENGINE=InnoDB';
        }

        if (!$this->db->getTableSchema($tableName, true)) {
            $this->createTable($tableName, [
                'id'        =>$this->primaryKey(),
                'nombre'    =>$this->string(50)->notNull(),
                'descr'     =>$this->string(100)
            ]);
        }

        $this->createIndex('IDX_nombre', $tableName, 'nombre');

        $this->insert($tableName, ['nombre'=>'CLAUSULA', 'descr'=>'CLAUSULA CONTRACTUAL']);
        $this->insert($tableName, ['nombre'=>'COMISION', 'descr'=>'TRABAJOS FORANEOS']);
        $this->insert($tableName, ['nombre'=>'CREACION', 'descr'=>'CREACION DE PLAZA']);
        $this->insert($tableName, ['nombre'=>'RENOVACION', 'descr'=>'RENOVACION DE PLAZA']);
        $this->insert($tableName, ['nombre'=>'SANCION', 'descr'=>'SANCION ADMINISTRATIVA/SINDICAL']);
        $this->insert($tableName, ['nombre'=>'TERMINACION', 'descr'=>'TERMINACION DE RELACION LABORAL']);
        $this->insert($tableName, ['nombre'=>'OTROS', 'descr'=>'MOTIVOS DIVERSOS']);

    }

    public function down()
    {
        
        $tableBase='rh_ausencia_clase';
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