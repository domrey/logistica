<?php

use yii\db\Migration;

class m181016_204024_002_parque_subtipo_create extends Migration
{
    public function up()
    {
        $tableBase='uni_subtipo';
        $tableName = $this->db->tablePrefix . $tableBase;
        $tableOptions = null;
        $driver = $this->db->driverName;

        if ($driver === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_spanish_ci ENGINE=InnoDB';
        }

        if (!$this->db->getTableSchema($tableName, true)) {
            $this->createTable($tableName, [
                'id'    => $this->primaryKey(),
                'nombre'=> $this->string(20)->notNull()
            ]);

            $this->createIndex('IDX_unidad_subtipo', $tableName, 'nombre');


            $this->insert('uni_subtipo', ['nombre'=>'40 PAS']);
            $this->insert('uni_subtipo', ['nombre'=>'8M3']);
            $this->insert('uni_subtipo', ['nombre'=>'BRAZO HIDRAULICO']);
            $this->insert('uni_subtipo', ['nombre'=>'PLATAFORMA-350']);
            $this->insert('uni_subtipo', ['nombre'=>'PLATAFORMA-600']);
            $this->insert('uni_subtipo', ['nombre'=>'CASETA 3500']);
            $this->insert('uni_subtipo', ['nombre'=>'CASETA F-600']);
            $this->insert('uni_subtipo', ['nombre'=>'PETROLERO(A)']);
            $this->insert('uni_subtipo', ['nombre'=>'CARRETERO(A)']);
            $this->insert('uni_subtipo', ['nombre'=>'16M3']);
            $this->insert('uni_subtipo', ['nombre'=>'EXPRESS']);
            $this->insert('uni_subtipo', ['nombre'=>'URVAN']);
            $this->insert('uni_subtipo', ['nombre'=>'CABINA DOBLE']);
            $this->insert('uni_subtipo', ['nombre'=>'10M3']);
            $this->insert('uni_subtipo', ['nombre'=>'REDILAS']);
            $this->insert('uni_subtipo', ['nombre'=>'25 PAS']);
            $this->insert('uni_subtipo', ['nombre'=>'CABINA SENCILLA']);
            $this->insert('uni_subtipo', ['nombre'=>'CASETA F-4500']);
            $this->insert('uni_subtipo', ['nombre'=>'TRANSIT']);

        }
        


    }

    public function down()
    {
        
        $tableBase='uni_subtipo';
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