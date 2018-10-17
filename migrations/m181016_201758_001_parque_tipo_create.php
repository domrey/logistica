<?php

use yii\db\Migration;

class m181016_201758_001_parque_tipo_create extends Migration
{
    public function up()
    {
        $tableBase='uni_tipo';
        $tableName = $this->db->tablePrefix . $tableBase;
        $tableOptions = null;
        $driver = $this->db->driverName;

        if ($driver === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_spanish_ci ENGINE=InnoDB';
        }

        if (!$this->db->getTableSchema($tableName, true)) {
            $this->createTable($tableName, [
                'id'        => $this->primaryKey(),
                'clave'     => $this->string(10)->notNull(),
                'nombre'    => $this->string(20)->notNull()
            ]);
        }

        $this->createIndex('IDX_clave_tipo_unidad', $tableName, 'clave');
        
        $this->insert('uni_tipo', ['clave'=>'BUS', 'nombre'=>'AUTOBUS']);
        $this->insert('uni_tipo', ['clave'=>'ATANQUE', 'nombre'=>'AUTOTANQUE']);
        $this->insert('uni_tipo', ['clave'=>'CHASIS', 'nombre'=>'CHASIS-CABINA']);
        $this->insert('uni_tipo', ['clave'=>'GRUA', 'nombre'=>'GRUA']);
        $this->insert('uni_tipo', ['clave'=>'LB', 'nombre'=>'LOW BOY']);
        $this->insert('uni_tipo', ['clave'=>'MICRO', 'nombre'=>'MICROBUS']);
        $this->insert('uni_tipo', ['clave'=>'MCARGA', 'nombre'=>'MONTACARGA']);
        $this->insert('uni_tipo', ['clave'=>'PICKUP', 'nombre'=>'PICK UP']);
        $this->insert('uni_tipo', ['clave'=>'PLAT', 'nombre'=>'PLATAFORMA']);
        $this->insert('uni_tipo', ['clave'=>'QR', 'nombre'=>'QUINTA RUEDA']);
        $this->insert('uni_tipo', ['clave'=>'UPV', 'nombre'=>'UPV']);
        $this->insert('uni_tipo', ['clave'=>'UNIMOG', 'nombre'=>'UNIMOG']);
        $this->insert('uni_tipo', ['clave'=>'VAN', 'nombre'=>'VAN']);
        $this->insert('uni_tipo', ['clave'=>'TD', 'nombre'=>'TIRO DIRECTO']);
        $this->insert('uni_tipo', ['clave'=>'REM', 'nombre'=>'REMOLQUE']);


    }

    public function down()
    {
        
        $tableBase='uni_tipo';
        $tableName = $this->db->tablePrefix . $tableBase;

        if ($this->db->getTableSchema($tableName, true)) {
//            $this->db->dropIndex('IDX_clave_tipo_unidad', $tableName);
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