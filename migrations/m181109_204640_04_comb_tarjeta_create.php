<?php

use yii\db\Migration;

class m181109_204640_04_comb_tarjeta_create extends Migration
{
    public function up()
    {
        $tableBase='comb_tarjeta';
        $tableName = $this->db->tablePrefix . $tableBase;
        $tableOptions = null;
        $driver = $this->db->driverName;

        if ($driver === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_spanish_ci ENGINE=InnoDB';
        }

        if (!$this->db->getTableSchema($tableName, true)) {
            $this->createTable($tableName, [
                'id'        => $this->primaryKey(),
                'id_unidad' => $this->integer()->unsigned()->notNull(),
                'numero'    => $this->integer()->unsigned()->notNull(),
                'nip'       => $this->tinyInteger(),
                'id_producto' => $this->integer()->unsigned()->notNull(),
                'vigencia'  => $this->date(),
                'clave_resp'=> $this->integer()->unsigned()->notNull(),
            
            ]);
        }
        


    }

    public function down()
    {
        
        $tableBase='comb_tarjeta';
        $tableName = $this->db->tablePrefix . $tableBase;

        if ($this->db->getTableSchema($tableName, true)) {
            $this->dropTable($tableName);
        }

        echo "m181109_204640_04_comb_tarjeta_create cannot be reverted.\n";
        return false;
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