<?php

use yii\db\Migration;

class m181110_021022_05_comb_tarjeta_create extends Migration
{
    public function up()
    {
        $tableBase='comb_tarjeta';
        $tableName = $this->db->tablePrefix . $tableBase;
        $tableOptions = null;
        $driver = $this->db->driverName;
        $rel1 = '';

        if ($driver === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_spanish_ci ENGINE=InnoDB';
        }

        if ($driver === 'sqlite') {
            $rel1 = ' REFERENCES uni_parque(id) ';
            $rel2 = ' REFERENCES comb_producto(id) ';
            $rel3 = ' REFERENCES rh_trab(clave) ';

        }

        if (!$this->db->getTableSchema($tableName, true)) {
            $this->createTable($tableName, [
                'id'        => $this->primaryKey(),
                'id_unidad' => $this->integer()->unsigned()->notNull() . $rel1,
                'numero'    => $this->integer()->unsigned()->notNull(),
                'nip'       => $this->tinyInteger()->unsigned(),
                'id_producto' => $this->integer()->unsigned()->notNull() . $rel2,
                'vigencia'  => $this->date(),
                'clave_resp' => $this->integer()->unsigned()->notNull() . $rel3,
                'clave_co1' => $this->integer()->unsigned(),
                'clave_co2' => $this->integer()->unsigned(),
                'dotacion'  => $this->float()->notNull(),
                'activa'    => $this->tinyInteger()->notNull()->defaultValue(1),
                'fec_actualizacion' => $this->date(),
            ]);
            if ($driver === 'mysql') {
                $this->addForeignKey('FK_id_unidad', $tableName, 'id_unidad', 'uni_parque', 'id', 'CASCADE', 'NO ACTION');
                $this->addForeignKey('FK_id_producto', $tableName, 'id_producto', 'comb_producto', 'id', 'CASCADE', 'NO ACTION');
                $this->addForeignKey('FK_id_producto', $tableName, 'clave_resp', 'rh_trab', 'clave', 'CASCADE', 'NO ACTION');
            }
        }
        
        // Insertar registros
        $this->insert('comb_tarjeta', ['id_unidad'=>39, 'numero'=>655041, 'nip'=>8970, 'id_producto'=>3, 'vigencia'=>'2020-05-16', 'clave_resp'=>434039, 'clave_co1'=>210154, 'clave_co2'=>null, 'dotacion'=>360, 'activa'=>1, 'fec_actualizacion'=>null]);
        $this->insert('comb_tarjeta', ['id_unidad'=>41, 'numero'=>655052, 'nip'=>3832, 'id_producto'=>1, 'vigencia'=>'2020-05-16', 'clave_resp'=>210154, 'clave_co1'=>203376, 'clave_co2'=>204126, 'dotacion'=>1260, 'activa'=>1, 'fec_actualizacion'=>null]);
        $this->insert('comb_tarjeta', ['id_unidad'=>10, 'numero'=>654995, 'nip'=>2400, 'id_producto'=>1, 'vigencia'=>'2020-05-16', 'clave_resp'=>333892, 'clave_co1'=>210154, 'clave_co2'=>null, 'dotacion'=>900, 'activa'=>1, 'fec_actualizacion'=>null]);
        $this->insert('comb_tarjeta', ['id_unidad'=>21, 'numero'=>655191, 'nip'=>6716, 'id_producto'=>1, 'vigencia'=>'2020-05-16', 'clave_resp'=>210154, 'clave_co1'=>652482, 'clave_co2'=>313919, 'dotacion'=>400, 'activa'=>1, 'fec_actualizacion'=>null]);
        $this->insert('comb_tarjeta', ['id_unidad'=>7, 'numero'=>654974, 'nip'=>2057, 'id_producto'=>3, 'vigencia'=>'2020-05-16', 'clave_resp'=>312224, 'clave_co1'=>null, 'clave_co2'=>null, 'dotacion'=>238, 'activa'=>1, 'fec_actualizacion'=>null]);
        $this->insert('comb_tarjeta', ['id_unidad'=>60, 'numero'=>655189, 'nip'=>3488, 'id_producto'=>1, 'vigencia'=>'2020-05-19', 'clave_resp'=>210154, 'clave_co1'=>null, 'clave_co2'=>null, 'dotacion'=>540, 'activa'=>1, 'fec_actualizacion'=>null]);
        $this->insert('comb_tarjeta', ['id_unidad'=>53, 'numero'=>655056, 'nip'=>5240, 'id_producto'=>1, 'vigencia'=>'2020-05-16', 'clave_resp'=>435741, 'clave_co1'=>210154, 'clave_co2'=>null, 'dotacion'=>1100, 'activa'=>1, 'fec_actualizacion'=>null]);
        $this->insert('comb_tarjeta', ['id_unidad'=>4, 'numero'=>654994, 'nip'=>7491, 'id_producto'=>1, 'vigencia'=>'2020-05-16', 'clave_resp'=>434039, 'clave_co1'=>null, 'clave_co2'=>null, 'dotacion'=>4900, 'activa'=>1, 'fec_actualizacion'=>null]);
        $this->insert('comb_tarjeta', ['id_unidad'=>27, 'numero'=>655175, 'nip'=>3703, 'id_producto'=>1, 'vigencia'=>'2020-05-16', 'clave_resp'=>210154, 'clave_co1'=>203376, 'clave_co2'=>204126, 'dotacion'=>600, 'activa'=>1, 'fec_actualizacion'=>null]);
        $this->insert('comb_tarjeta', ['id_unidad'=>47, 'numero'=>654985, 'nip'=>4686, 'id_producto'=>1, 'vigencia'=>'2020-05-16', 'clave_resp'=>327144, 'clave_co1'=>null, 'clave_co2'=>null, 'dotacion'=>700, 'activa'=>0, 'fec_actualizacion'=>null]);
        $this->insert('comb_tarjeta', ['id_unidad'=>9, 'numero'=>654991, 'nip'=>1307, 'id_producto'=>1, 'vigencia'=>'2020-05-16', 'clave_resp'=>462962, 'clave_co1'=>null, 'clave_co2'=>null, 'dotacion'=>238, 'activa'=>1, 'fec_actualizacion'=>null]);
        $this->insert('comb_tarjeta', ['id_unidad'=>28, 'numero'=>654964, 'nip'=>2916, 'id_producto'=>1, 'vigencia'=>'2020-05-16', 'clave_resp'=>178194, 'clave_co1'=>null, 'clave_co2'=>null, 'dotacion'=>550, 'activa'=>1, 'fec_actualizacion'=>null]);
        $this->insert('comb_tarjeta', ['id_unidad'=>5, 'numero'=>654993, 'nip'=>1155, 'id_producto'=>1, 'vigencia'=>'2020-05-16', 'clave_resp'=>633190, 'clave_co1'=>null, 'clave_co2'=>null, 'dotacion'=>5800, 'activa'=>1, 'fec_actualizacion'=>null]);
        $this->insert('comb_tarjeta', ['id_unidad'=>57, 'numero'=>655054, 'nip'=>4519, 'id_producto'=>1, 'vigencia'=>'2020-05-16', 'clave_resp'=>461572, 'clave_co1'=>null, 'clave_co2'=>null, 'dotacion'=>238, 'activa'=>1, 'fec_actualizacion'=>null]);
        $this->insert('comb_tarjeta', ['id_unidad'=>55, 'numero'=>655185, 'nip'=>5668, 'id_producto'=>3, 'vigencia'=>'2020-05-10', 'clave_resp'=>258993, 'clave_co1'=>328901, 'clave_co2'=>312224, 'dotacion'=>400, 'activa'=>1, 'fec_actualizacion'=>null]);
        $this->insert('comb_tarjeta', ['id_unidad'=>56, 'numero'=>655133, 'nip'=>1602, 'id_producto'=>3, 'vigencia'=>'2020-05-16', 'clave_resp'=>593898, 'clave_co1'=>null, 'clave_co2'=>null, 'dotacion'=>245, 'activa'=>1, 'fec_actualizacion'=>null]);
        $this->insert('comb_tarjeta', ['id_unidad'=>12, 'numero'=>655040, 'nip'=>4560, 'id_producto'=>3, 'vigencia'=>'2020-05-16', 'clave_resp'=>28762, 'clave_co1'=>null, 'clave_co2'=>null, 'dotacion'=>430, 'activa'=>1, 'fec_actualizacion'=>null]);
        $this->insert('comb_tarjeta', ['id_unidad'=>6, 'numero'=>655055, 'nip'=>8560, 'id_producto'=>1, 'vigencia'=>'2020-05-16', 'clave_resp'=>307452, 'clave_co1'=>null, 'clave_co2'=>null, 'dotacion'=>2350, 'activa'=>1, 'fec_actualizacion'=>null]);
        $this->insert('comb_tarjeta', ['id_unidad'=>13, 'numero'=>655183, 'nip'=>2997, 'id_producto'=>3, 'vigencia'=>'2020-05-16', 'clave_resp'=>395224, 'clave_co1'=>312224, 'clave_co2'=>557767, 'dotacion'=>238, 'activa'=>1, 'fec_actualizacion'=>null]);
        $this->insert('comb_tarjeta', ['id_unidad'=>35, 'numero'=>654976, 'nip'=>6648, 'id_producto'=>1, 'vigencia'=>'2020-05-16', 'clave_resp'=>633190, 'clave_co1'=>490746, 'clave_co2'=>null, 'dotacion'=>800, 'activa'=>1, 'fec_actualizacion'=>null]);
        $this->insert('comb_tarjeta', ['id_unidad'=>3, 'numero'=>654989, 'nip'=>2223, 'id_producto'=>1, 'vigencia'=>'2020-05-16', 'clave_resp'=>203376, 'clave_co1'=>490746, 'clave_co2'=>null, 'dotacion'=>3200, 'activa'=>1, 'fec_actualizacion'=>null]);
        $this->insert('comb_tarjeta', ['id_unidad'=>66, 'numero'=>655104, 'nip'=>8737, 'id_producto'=>3, 'vigencia'=>'2020-05-16', 'clave_resp'=>200953, 'clave_co1'=>null, 'clave_co2'=>null, 'dotacion'=>300, 'activa'=>1, 'fec_actualizacion'=>null]);
        $this->insert('comb_tarjeta', ['id_unidad'=>14, 'numero'=>654963, 'nip'=>6579, 'id_producto'=>1, 'vigencia'=>'2020-05-16', 'clave_resp'=>434039, 'clave_co1'=>210154, 'clave_co2'=>null, 'dotacion'=>238, 'activa'=>1, 'fec_actualizacion'=>null]);
        $this->insert('comb_tarjeta', ['id_unidad'=>17, 'numero'=>654955, 'nip'=>8366, 'id_producto'=>1, 'vigencia'=>'2020-05-16', 'clave_resp'=>204126, 'clave_co1'=>null, 'clave_co2'=>null, 'dotacion'=>238, 'activa'=>1, 'fec_actualizacion'=>null]);
        $this->insert('comb_tarjeta', ['id_unidad'=>67, 'numero'=>798386, 'nip'=>null, 'id_producto'=>3, 'vigencia'=>'2020-01-01', 'clave_resp'=>379073, 'clave_co1'=>null, 'clave_co2'=>null, 'dotacion'=>238, 'activa'=>1, 'fec_actualizacion'=>null]);
        $this->insert('comb_tarjeta', ['id_unidad'=>47, 'numero'=>785322, 'nip'=>null, 'id_producto'=>1, 'vigencia'=>'2021-04-13', 'clave_resp'=>327144, 'clave_co1'=>null, 'clave_co2'=>null, 'dotacion'=>238, 'activa'=>1, 'fec_actualizacion'=>null]);

        

    }

    public function down()
    {
        
        $tableBase='comb_tarjeta';
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