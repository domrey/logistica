<?php

use yii\db\Migration;

class m181010_202753_rh_ausencia_create extends Migration
{
    public function up()
    {
        $tableBase='rh_ausencia';
        $tableName = $this->db->tablePrefix . $tableBase;
        $tableOptions = null;
        $driver = $this->db->driverName;

        if ($driver === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_spanish_ci ENGINE=InnoDB';
        }
        else {
            $rel1 = " REFERENCES rh_trab(clave)";
            $rel2 = " REFERENCES rh_plaza(id)";
            $rel3 = " REFERENCES rh_ausencia_motivo(id)";
        }

        if (!$this->db->getTableSchema($tableName, true)) {
            $this->createTable($tableName, [
                'id'            => $this->primaryKey(),
                'clave_trab'    => $this->integer()->unsigned()->notNull() . $rel1,
                'id_plaza'      => $this->integer()->unsigned()->notNull() . $rel2,
                'clave_plaza'   => $this->string(20)->notNull(),
                'id_motivo'     => $this->integer()->unsigned()->notNull() . $rel3,
                'clave_motivo'  => $this->char(3),
                'fec_inicio'    => $this->date()->notNull(),
                'fec_termino'   => $this->date()->notNull(),
                'fec_reanuda'   => $this->date(),
                'req_cobertura' => $this->tinyInteger(1)->defaultValue(0),
                'doc'           => $this->string(80),
                'descr'         => $this->text(),
                'referencia'    => $this->string(80),
            ]);

            $this->createIndex('IDX_clave_motivo', $tableName, 'clave_motivo');
            $this->createIndex('IDX_clave_plaza_ausencia', $tableName, 'clave_plaza');

            $this->addForeignKey('FK_clave_trab', $tableName, 'clave_trab', 'rh_trab', ['clave'], 'CASCADE', 'NO ACTION');
            $this->addForeignKey('FK_id_plaza', $tableName, 'id_plaza', 'rh_plaza', ['id'], 'CASCADE', 'NO ACTION');
            $this->addForeignKey('FK_id_motivo', $tableName, 'id_motivo', 'rh_ausencia_motivo', ['id'], 'CASCADE', 'NO ACTION');
        }
        


    }

    public function down()
    {
        
        $tableBase='rh_ausencia';
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