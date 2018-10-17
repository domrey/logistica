<?php

use yii\db\Migration;

class m181016_205232_003_parque_marca_create extends Migration
{
    public function up()
    {
        $tableBase='uni_marca';
        $tableName = $this->db->tablePrefix . $tableBase;
        $tableOptions = null;
        $driver = $this->db->driverName;

        if ($driver === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_spanish_ci ENGINE=InnoDB';
        }

        if (!$this->db->getTableSchema($tableName, true)) {
            $this->createTable($tableName, [
                'id'        => $this->primaryKey(),
                'nombre'    => $this->string(30)->notNull(),
            ]);

            $this->createIndex('IDX_marca_nombre', $tableName, 'nombre');

            $this->insert('uni_marca', ['nombre'=>'PH OMEGA']);
            $this->insert('uni_marca', ['nombre'=>'FORD']);
            $this->insert('uni_marca', ['nombre'=>'FRUEHAUF']);
            $this->insert('uni_marca', ['nombre'=>'CHEVROLET']);
            $this->insert('uni_marca', ['nombre'=>'KENWORTH']);
            $this->insert('uni_marca', ['nombre'=>'GOY']);
            $this->insert('uni_marca', ['nombre'=>'CODESI']);
            $this->insert('uni_marca', ['nombre'=>'DINA']);
            $this->insert('uni_marca', ['nombre'=>'HYSTER']);
            $this->insert('uni_marca', ['nombre'=>'MERCEDES BENZ']);
            $this->insert('uni_marca', ['nombre'=>'HIDROMEX ']);
            $this->insert('uni_marca', ['nombre'=>'INTERNATIONAL']);
            $this->insert('uni_marca', ['nombre'=>'VOLVO']);
            $this->insert('uni_marca', ['nombre'=>'LUGARTH']);
            $this->insert('uni_marca', ['nombre'=>'FREIGHTLINER']);
            $this->insert('uni_marca', ['nombre'=>'WESTERN STAR']);
            $this->insert('uni_marca', ['nombre'=>'DODGE']);
            $this->insert('uni_marca', ['nombre'=>'NISSAN']);
            $this->insert('uni_marca', ['nombre'=>'MACK']);
            $this->insert('uni_marca', ['nombre'=>'MHASA']);
            $this->insert('uni_marca', ['nombre'=>'DAKOTA']);
            $this->insert('uni_marca', ['nombre'=>'PROPIO']);
            $this->insert('uni_marca', ['nombre'=>'OTRO']);

        }
        


    }

    public function down()
    {
        
        $tableBase='uni_marca';
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