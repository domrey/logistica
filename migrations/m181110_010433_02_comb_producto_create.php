<?php

use yii\db\Migration;

class m181110_010433_02_comb_producto_create extends Migration
{
    public function up()
    {
        $tableBase='comb_producto';
        $tableName = $this->db->tablePrefix . $tableBase;
        $tableOptions = null;
        $driver = $this->db->driverName;
        $rel1 = '';

        if ($driver === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_spanish_ci ENGINE=InnoDB';
        }
        if ($driver === 'sqlite') {
            $rel1 = " REFERENCES comb_tipo(id)";
        }

        if (!$this->db->getTableSchema($tableName, true)) {
            $this->createTable($tableName, [
                'id'        => $this->primaryKey(),
                'id_tipo'   => $this->integer()->unsigned()->notNull() . $rel1,
                'nombre'    => $this->string(20)->notNull(),
                'descr'     => $this->string(128),
            ]);
            if ($driver === 'mysql') {
               $this->addForeignKey('FK_id_tipo_comb', $tableName, 'id_tipo', 'comb_tipo', 'id', 'CASCADE', 'NO ACTION');
            }


        }
        // insert registers
        $this->insert($tableName, ['id_tipo'=>1, 'nombre'=>'DIESEL', 'descr'=>'DIESEL']);
        $this->insert($tableName, ['id_tipo'=>2, 'nombre'=>'PREMIUM', 'descr'=>'GASOLINA PREMIUM']);
        $this->insert($tableName, ['id_tipo'=>2, 'nombre'=>'MANGA', 'descr'=>'GASOLINA MAGNA PLUS']);
    }

    public function down()
    {

        $tableBase='comb_producto';
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