<?php

use yii\db\Migration;

class m181010_194422_rh_ausencia_motivo_create extends Migration
{
    public function up()
    {
        $tableBase='rh_ausencia_motivo';
        $tableName = $this->db->tablePrefix . $tableBase;
        $tableOptions = null;
        $driver = $this->db->driverName;
        $rel1 = '';

        if ($driver === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_spanish_ci ENGINE=InnoDB';
            $rel1 = '';
        }
        else {
            $rel1 = " REFERENCES rh_ausencia_clase(id)";
        }

        if (!$this->db->getTableSchema($tableName, true)) {
            $this->createTable($tableName, [
                'id'        => $this->primaryKey(),
                'clave'     => $this->string(3)->notNull(),
                'nombre'    => $this->string(50)->notNull(),
                'descr'     => $this->string(100)->notNull(),
                'orden'     => $this->tinyInteger(1)->unsigned(),
                'id_clase'  => $this->integer()->unsigned()->notNull() .  $rel1,
            ]);
        

            $this->createIndex('IDX_clave', $tableName, 'clave');
    
            if ($driver === 'mysql') {         
                $this->addForeignKey('FK_id_clase', $tableName, 'id_clase', 'rh_ausencia_clase', ['id'], 'CASCADE', 'NO ACTION');
            }

            $this->insert('rh_ausencia_motivo', ['clave'=>'VAO', 'nombre'=>'VACACIONES ORDINARIAS', 'descr'=>'VACACIONES EXTEMPORANEAS', 'orden'=>4, 'id_clase'=>1]);
$this->insert('rh_ausencia_motivo', ['clave'=>'VAE', 'nombre'=>'VACACIONES EXTEMPORANEAS', 'descr'=>'PERMISO ECONOMICO', 'orden'=>12, 'id_clase'=>1]);
$this->insert('rh_ausencia_motivo', ['clave'=>'150', 'nombre'=>'PERMISO ECONOMICO', 'descr'=>'CLAUSULA POR PATERNIDAD', 'orden'=>1, 'id_clase'=>1]);
$this->insert('rh_ausencia_motivo', ['clave'=>'151', 'nombre'=>'PERMISO POR PATERNIDAD', 'descr'=>'PERMISO RENUNCIABLE', 'orden'=>13, 'id_clase'=>1]);
$this->insert('rh_ausencia_motivo', ['clave'=>'147', 'nombre'=>'PERMISO RENUNCIABLE', 'descr'=>'PERMISO 90 DIAS', 'orden'=>3, 'id_clase'=>1]);
$this->insert('rh_ausencia_motivo', ['clave'=>'148', 'nombre'=>'PERMISO 90 DIAS', 'descr'=>'PERMISO 6 AÑOS', 'orden'=>14, 'id_clase'=>1]);
$this->insert('rh_ausencia_motivo', ['clave'=>'149', 'nombre'=>'PERMISO 6 AÑOS', 'descr'=>'EXAMENES MEDICO', 'orden'=>15, 'id_clase'=>1]);
$this->insert('rh_ausencia_motivo', ['clave'=>'103', 'nombre'=>'EXAMENES MEDICO', 'descr'=>'ATENCION MEDICA', 'orden'=>6, 'id_clase'=>1]);
$this->insert('rh_ausencia_motivo', ['clave'=>'104', 'nombre'=>'ATENCION MEDICA', 'descr'=>'INCAPACIDAD MEDICA', 'orden'=>16, 'id_clase'=>1]);
$this->insert('rh_ausencia_motivo', ['clave'=>'106', 'nombre'=>'INCAPACIDAD MEDICA', 'descr'=>'COMISION ADMINISTRATIVA', 'orden'=>5, 'id_clase'=>1]);
$this->insert('rh_ausencia_motivo', ['clave'=>'COA', 'nombre'=>'COMISION ADMINISTRATIVA', 'descr'=>'COMISION SINDICAL', 'orden'=>2, 'id_clase'=>2]);
$this->insert('rh_ausencia_motivo', ['clave'=>'COS', 'nombre'=>'COMISION SINDICAL', 'descr'=>'ASCENSO DEFINITIVO', 'orden'=>17, 'id_clase'=>2]);
$this->insert('rh_ausencia_motivo', ['clave'=>'ASD', 'nombre'=>'ASCENSO DEFINITIVO', 'descr'=>'ASCENSO TEMPORAL', 'orden'=>18, 'id_clase'=>1]);
$this->insert('rh_ausencia_motivo', ['clave'=>'AST', 'nombre'=>'ASCENSO TEMPORAL', 'descr'=>'JUBILACION', 'orden'=>19, 'id_clase'=>1]);
$this->insert('rh_ausencia_motivo', ['clave'=>'JUB', 'nombre'=>'JUBILACION', 'descr'=>'LIQUIDACION', 'orden'=>20, 'id_clase'=>6]);
$this->insert('rh_ausencia_motivo', ['clave'=>'LIQ', 'nombre'=>'LIQUIDACION', 'descr'=>'DESPIDO', 'orden'=>21, 'id_clase'=>6]);
$this->insert('rh_ausencia_motivo', ['clave'=>'REC', 'nombre'=>'DESPIDO', 'descr'=>'PERMISO NEGOCIADO', 'orden'=>22, 'id_clase'=>6]);
$this->insert('rh_ausencia_motivo', ['clave'=>'NEG', 'nombre'=>'PERMISO NEGOCIADO', 'descr'=>'ATENCION MEDICA FORANEA', 'orden'=>23, 'id_clase'=>7]);
$this->insert('rh_ausencia_motivo', ['clave'=>'119', 'nombre'=>'ATENCION MEDICA FORANEA', 'descr'=>'CAPACITACION CONTRACTUAL', 'orden'=>24, 'id_clase'=>1]);
$this->insert('rh_ausencia_motivo', ['clave'=>'CAC', 'nombre'=>'CAPACITACION CONTRACTUAL', 'descr'=>'CAPACITACION PROFESIONAL', 'orden'=>7, 'id_clase'=>1]);
$this->insert('rh_ausencia_motivo', ['clave'=>'CAP', 'nombre'=>'CAPACITACION PROFESIONAL', 'descr'=>'FALTA INJUSTIFICADA', 'orden'=>25, 'id_clase'=>1]);
$this->insert('rh_ausencia_motivo', ['clave'=>'FI', 'nombre'=>'FALTA INJUSTIFICADA', 'descr'=>'AUSENCIA DESCONOCIDA', 'orden'=>8, 'id_clase'=>7]);
$this->insert('rh_ausencia_motivo', ['clave'=>'???', 'nombre'=>'AUSENCIA DESCONOCIDA', 'descr'=>'SANCION ADMINISTRATIVA', 'orden'=>0, 'id_clase'=>7]);
$this->insert('rh_ausencia_motivo', ['clave'=>'SAA', 'nombre'=>'SANCION ADMINISTRATIVA', 'descr'=>'SANCION SINDICAL', 'orden'=>26, 'id_clase'=>5]);
$this->insert('rh_ausencia_motivo', ['clave'=>'SAS', 'nombre'=>'SANCION SINDICAL', 'descr'=>'VACACIONES PRE-JUBILATORIAS', 'orden'=>27, 'id_clase'=>5]);
$this->insert('rh_ausencia_motivo', ['clave'=>'VAJ', 'nombre'=>'VACACIONES PRE-JUBILATORIAS', 'descr'=>'DISPOSICION DE PERSONAL', 'orden'=>28, 'id_clase'=>1]);
$this->insert('rh_ausencia_motivo', ['clave'=>'DDP', 'nombre'=>'DISPOSICION DE PERSONAL', 'descr'=>'PLAZA NUEVA', 'orden'=>11, 'id_clase'=>7]);
$this->insert('rh_ausencia_motivo', ['clave'=>'NUE', 'nombre'=>'PLAZA NUEVA', 'descr'=>'VENCIMIENTO DE PLAZA OD', 'orden'=>29, 'id_clase'=>3]);
$this->insert('rh_ausencia_motivo', ['clave'=>'VEN', 'nombre'=>'VENCIMIENTO DE PLAZA OD', 'descr'=>'PERMUTA DEF/TEMP', 'orden'=>10, 'id_clase'=>4]);
$this->insert('rh_ausencia_motivo', ['clave'=>'080', 'nombre'=>'PERMUTA CL. 80', 'descr'=>' PERMUTA DEF/TEMP ', 'orden'=>30, 'id_clase'=>1]);
        }

    }

    public function down()
    {
        
        $tableBase='rh_ausencia_motivo';
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