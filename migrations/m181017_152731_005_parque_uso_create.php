<?php

use yii\db\Migration;

class m181017_152731_005_parque_uso_create extends Migration
{
    public function up()
    {
        $tableBase='uni_uso';
        $tableName = $this->db->tablePrefix . $tableBase;
        $tableOptions = null;
        $driver = $this->db->driverName;

        if ($driver === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_spanish_ci ENGINE=InnoDB';
        }

        if (!$this->db->getTableSchema($tableName, true)) {
            $this->createTable($tableName, [
                'id'        => $this->primaryKey(),
                'nombre'    => $this->string(3)->notNull(),
            ]);

            $this->createIndex('IDX_uso_nombre', $tableName, 'nombre');
            
            $this->insert('uni_uso', ['nombre'=>'MTL']);
            $this->insert('uni_uso', ['nombre'=>'LIQ']);
            $this->insert('uni_uso', ['nombre'=>'MAN']);
            $this->insert('uni_uso', ['nombre'=>'PER']);
            $this->insert('uni_uso', ['nombre'=>'SUP']);

        }
        


    }

    public function down()
    {
        
        $tableBase='uni_uso';
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