<?php

use yii\db\Migration;

class m181110_031531_06_comb_registro_create extends Migration
{
    public function up()
    {
        $tableBase='comb_registro';
        $tableName = $this->db->tablePrefix . $tableBase;
        $tableOptions = null;
        $driver = $this->db->driverName;
        $rel1 = '';
        $rel2 = '';
        $rel3 = '';
        $rel4 = '';

        if ($driver === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_spanish_ci ENGINE=InnoDB';
        }
        if ($driver === 'sqlite') {
            $rel1 = ' REFERENCES uni_parque(id)';
            $rel2 = ' REFERENCES comb_medio(id)';
            $rel3 = ' REFERENCES comb_estacion(id)';
            $rel4 = ' REFERENCES rh_trab(clave)';
        }

        if (!$this->db->getTableSchema($tableName, true)) {
            $this->createTable($tableName, [
                'id'     => $this->primaryKey(),
                'id_unidad' => $this->integer()->unsigned()->notNull() . $rel1,
                'fecha'     => $this->date(),
                'id_medio'  => $this->integer()->unsigned()->notNull() . $rel2,
                'instrumento' => $this->string(12)->notNull(),
                'consecutivo'   => $this->string(4)->null(),
                'cancelado'     => $this->tinyInteger()->defaultValue(0),
                'id_estacion'   => $this->integer()->unsigned()->notNull() . $rel3,
                'importe'       => $this->float()->defaultValue(null),
                'odometro'      => $this->double()->null(),
                'litros'        => $this->float()->null(),
                'comprobante'   => $this->tinyInteger()->defaultValue(0),
                'clave_resp' => $this->integer()->unsigned()->notNull() . $rel4,
                'rendimiento'   => $this->double()->null(),
                'distancia'     => $this->float()->null(),
                'fec_registro'  => $this->date()->null(),
                'usuario'       => $this->integer()->unsigned()->defaultValue(null),
            ]);
            if ($driver === 'mysql') {
                $this->addForeignKey('FK_id_unidad', $tableName, 'id_unidad', 'uni_parque', '[id]', 'CASCADE', 'NO ACTION');
                $this->addForeignKey('FK_id_medio', $tableName, 'id_medio', 'comb_medio', '[id]', 'CASCADE', 'NO ACTION');
                $this->addForeignKey('FK_id_estacion', $tableName, 'id_estacion', 'comb_estacion', '[id]', 'CASCADE', 'NO ACTION');
                $this->addForeignKey('FK_id_resp', $tableName, 'id_resp', 'rh_trab', '[clave]', 'CASCADE', 'NO ACTION');
            }
        }
        
        // Insertar regsitros
        

    }

    public function down()
    {
        
        $tableBase='comb_registro';
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