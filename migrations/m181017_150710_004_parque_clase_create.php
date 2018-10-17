<?php

use yii\db\Migration;

class m181017_150710_004_parque_clase_create extends Migration
{
    public function up()
    {
        $tableBase='uni_clase';
        $tableName = $this->db->tablePrefix . $tableBase;
        $tableOptions = null;
        $driver = $this->db->driverName;

        if ($driver === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_spanish_ci ENGINE=InnoDB';
        }

        if (!$this->db->getTableSchema($tableName, true)) {
            $this->createTable($tableName, [
                'id'    => $this->primaryKey(),
                'nombre'=> $this->string(20)->notNull(),
            ]);

            $this->createIndex ('IDX_parque_clase', $tableName, 'nombre');

            
            $this->insert('uni_clase', ['nombre'=>'LIGERO']);
            $this->insert('uni_clase', ['nombre'=>'SEMI-PESADO']);
            $this->insert('uni_clase', ['nombre'=>'PESADO']);
            $this->insert('uni_clase', ['nombre'=>'MANIOBRAS']);
            $this->insert('uni_clase', ['nombre'=>'REMOLQUE']);

        }
        


    }

    public function down()
    {
        
        $tableBase='uni_clase';
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