<?php

use yii\db\Migration;
use app\commands\templates\MyDbMigration;


class m190320_204547_007_rh_ausencia_motivo_create extends MyDbMigration
{
   protected $tableName='rh_ausencia_motivo';
/*
    public function up()
    {

    }

    public function down()
    {

    }
*/

    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
      switch ($this->driver) {
        case 'sqlite':
          $this->_safeUp_sqlite();
          break;
        case 'mysql':
          $this->_safeUp_mysql();
          break;
        default:
      }
    }

    public function safeDown()
    {
      switch ($this->driver) {
        case 'sqlite':
          $this->_safeDown_sqlite();
          break;
        case 'mysql':
          $this->_safeDown_mysql();
          break;
        default:
      }
    }

    public function _safeUp_sqlite()
    {

    }

    public function _safeUp_mysql()
    {
        $this->createTable($this->tableName, [
            'clave' =>  $this->string(6)->notNull(),
            'descr' => $this->string(40)->notNull(),
            'orden' => $this->tinyInteger()->null(),
        ]);
        $this->addPrimaryKey('PK_AUSENCIA_MOTIVO_CLAVE', $this->tableName, ['clave']);
        $this->createIndex('IDX_AUSENCIA_MOTIVO_ORDEN', $this->tableName, ['orden']);
        $this->addCommentOnColumn($this->tableName, 'clave', 'CLAVE DEL TIPO DE AUSENCIA');
        $this->addCommentOnColumn($this->tableName, 'descr', 'DESCRIPCION DEL TIPO DE AUSENCIA');
        $this->addCommentOnColumn($this->tableName, 'orden', 'ORDEN EN QUE SE MUESTRAN EN DROPBOXES');
        $this->addCommentOnTable($this->tableName, 'TABLA DE TIPOS DE AUSENCIAS');
        $this->insertRows();
    }

    public function _safeDown_sqlite()
    {

    }

    public function _safeDown_mysql()
    {
        $this->dropPrimaryKey('PK_AUSENCIA_MOTIVO_CLAVE', $this->tableName);
        $this->dropIndex('IDX_AUSENCIA_MOTIVO_ORDEN', $this->tableName);
        $this->dropTable($this->tableName);
    }

    public function insertRows()
    {
       $this->insert($this->tableName, ['clave'=>'CAP001', 'descr'=>'CAPACITACION CONTRACTUAL', 'orden'=>4]);
       $this->insert($this->tableName, ['clave'=>'CAP002', 'descr'=>'CAPACITACION PROFESIONAL', 'orden'=>31]);
       $this->insert($this->tableName, ['clave'=>'CLA001', 'descr'=>'POR MATERNIDAD (CL. 90)', 'orden'=>18]);
       $this->insert($this->tableName, ['clave'=>'CLA002', 'descr'=>'POR PATERNIDAD (CL. 151)', 'orden'=>19]);
       $this->insert($this->tableName, ['clave'=>'COM001', 'descr'=>'COMISION ADMINISTRATIVA', 'orden'=>1]);
       $this->insert($this->tableName, ['clave'=>'COM002', 'descr'=>'COMISION SINDICAL', 'orden'=>20]);
       $this->insert($this->tableName, ['clave'=>'FES001', 'descr'=>'FESTIVO CONTRACTUAL (CL. 139)', 'orden'=>24]);
       $this->insert($this->tableName, ['clave'=>'FES002', 'descr'=>'FESTIVO OBLIGATORIO (CL. 138)', 'orden'=>25]);
       $this->insert($this->tableName, ['clave'=>'MED001', 'descr'=>'INCAPACIDAD MEDICA PLANTA (CL.104)', 'orden'=>7]);
       $this->insert($this->tableName, ['clave'=>'MED002', 'descr'=>'INCAPACIDAD MEDICA EXTERNA (CL. 119)', 'orden'=>8]);
       $this->insert($this->tableName, ['clave'=>'MED003', 'descr'=>'ASISTENCIA MEDICINA PREVENTIVA (CL. 103)', 'orden'=>9]);
       $this->insert($this->tableName, ['clave'=>'MED004', 'descr'=>'INCAPACIDAD MEDICA TRANSITORIOS (CL. 106)', 'orden'=>10]);
       $this->insert($this->tableName, ['clave'=>'MED005', 'descr'=>'INCAPACIDAD POR ACCIDENTE DE TRABAJO (CL. 123)', 'orden'=>30]);
       $this->insert($this->tableName, ['clave'=>'MED006', 'descr'=>'INCAPACIDAD POR ACCIDENTE EN VACACIONES (CL. 144)', 'orden'=>26]);
       $this->insert($this->tableName, ['clave'=>'MED007', 'descr'=>'POR ENFERMEDAD ORDINARIA (CL. 122)', 'orden'=>12]);
       $this->insert($this->tableName, ['clave'=>'MED008', 'descr'=>'POR ENFERMEDAD PROFESIONAL (CL. 121)', 'orden'=>27]);
       $this->insert($this->tableName, ['clave'=>'OTR001', 'descr'=>'AUSENCIA DESCONOCIDA', 'orden'=>11]);
       $this->insert($this->tableName, ['clave'=>'PER001', 'descr'=>'PERMISO ECONOMICO (CL. 150)', 'orden'=>2]);
       $this->insert($this->tableName, ['clave'=>'PER002', 'descr'=>'PERMISO RENUNCIABLE (CL. 147)', 'orden'=>3]);
       $this->insert($this->tableName, ['clave'=>'PER003', 'descr'=>'PERMISO 90 DIAS RENUNCIABLE (CL. 148)', 'orden'=>21]);
       $this->insert($this->tableName, ['clave'=>'PER004', 'descr'=>'PERMISO POLITICO (CL. 149)', 'orden'=>22]);
       $this->insert($this->tableName, ['clave'=>'PMT001', 'descr'=>'PERMUTA (CL. 80)', 'orden'=>13]);
       $this->insert($this->tableName, ['clave'=>'RHU001', 'descr'=>'FALTA INJUSTIFICADA', 'orden'=>5]);
       $this->insert($this->tableName, ['clave'=>'RHU002', 'descr'=>'DISPOSICION DE PERSONAL', 'orden'=>23]);
       $this->insert($this->tableName, ['clave'=>'RHU003', 'descr'=>'RECISION DE CONTRATO (CL. 27)', 'orden'=>33]);
       $this->insert($this->tableName, ['clave'=>'RHU004', 'descr'=>'RECISION DE CONTRATO PREVIA INVESTIGACION (CL. 30)', 'orden'=>29]);
       $this->insert($this->tableName, ['clave'=>'RHU005', 'descr'=>'RECISION DE CONTRATO POR FALTAS (CL. 29)', 'orden'=>32]);
       $this->insert($this->tableName, ['clave'=>'TER001', 'descr'=>'TERMINACION VOLUNTARIA (CL. 23)', 'orden'=>14]);
       $this->insert($this->tableName, ['clave'=>'TER002', 'descr'=>'JUBILACION (CL. 134)', 'orden'=>15]); 
       $this->insert($this->tableName, ['clave'=>'TER003', 'descr'=>'FALLECIMIENTO', 'orden'=>16]); 
       $this->insert($this->tableName, ['clave'=>'VAC001', 'descr'=>'VACACIONES CONTRACTUALES (CL. 140)', 'orden'=>6]); 
       $this->insert($this->tableName, ['clave'=>'VAC002', 'descr'=>'VACACIONES PRE-JUBILATORIAS', 'orden'=>17]); 
    }
}
