<?php

use yii\db\Migration;
use app\commands\templates\MyDbMigration;


class m190210_155833_uni_denominacion_create extends MyDbMigration
{
   protected $tableName='uni_denominacion';
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
        $this->createTable($this->tableName, [
            'id'        => $this->primaryKey(),
            'texto'     => $this->string(20)->notNull(),
            'descr'     => $this->string(80),
        ]);
        $this->createIndex('IDX_texto_denominacion', $this->tableName, 'texto');
        $this->insertRows();
    }

    public function _safeUp_mysql()
    {

    }

    public function _safeDown_sqlite()
    {
        $this->dropIndex('IDX_texto_denominacion', $this->tableName);
        $this->dropTable($this->tableName);
    }

    public function _safeDown_mysql()
    {

    }

    public function insertRows()
    {
        $this->insert($this->tableName, 
            ['texto'=>'TIRO DIRECTO PETROLERO', 'descr'=>'UNIDAD CON WINCHE Y PLATAFORMA PARA MANIOBRAS PETROLERAS']);
        $this->insert($this->tableName, 
            ['texto'=>'QUINTA RUEDA PETROLERA', 'descr'=>'UNIDAD CON WINCHE Y DISCO QUINTA RUEDA PARA TRANSPORTE Y/O MANIOBRAS']);
        $this->insert($this->tableName, 
            ['texto'=>'QUINTA RUEDA CARRETERA', 'descr'=>'UNIDAD TRACTO-CAMION CON DISCO QUINTA RUEDA PARA TRANSPORTE Y/O MANIOBRAS']);
        $this->insert($this->tableName, 
            ['texto'=>'AUTOTANQUE', 'descr'=>'UNIDAD EQUIPADA CON PIPA PARA EL TRANSPORTE DE LIQUIDOS']);
        $this->insert($this->tableName, 
            ['texto'=>'UPV', 'descr'=>'UNIDAD EQUIPADA CON PIPA Y COMPRESOR PARA SUCCIONAR LIQUIDOS']);
        $this->insert($this->tableName, ['texto'=>'REDILA', 'descr'=>'UNIDAD CON REDILAS O JAULA PARA TRANSPORTE DE MATERIALES']);
        $this->insert($this->tableName, ['texto'=>'CASETA', 'descr'=>'UNIDAD CON CASETA PARA EL TRANSPORTE DE PERSONAL']);
        $this->insert($this->tableName, ['texto'=>'VAN', 'descr'=>'UNIDAD TIPO VAN PARA EL TRANSPORTE DE PERSONAL']);
        $this->insert($this->tableName, ['texto'=>'BUS', 'descr'=>'UNIDAD TIPO AUTOBUS/MICROBUS PARA EL TRANSPORTE DE PERSONAL']);
        $this->insert($this->tableName, ['texto'=>'PICKUP', 'descr'=>'UNIDAD TIPO CAMIONETA PICK-UP PARA EL TRANSPORTE DE PERSONAL Y SUPERVISION DE ACTIVIDADES']);
        $this->insert($this->tableName, ['texto'=>'PLATAFORMA', 'descr'=>'REMOLQUE TIPO PLATAFORMA PARA ACOPLARSE A TRACTO-CAMION Y  PARA EL TRANSPORTE DE MATERIALES']);
        $this->insert($this->tableName, ['texto'=>'GRUA', 'descr'=>'GRUAS/EQUIPOS PARA IZAJES']);
        $this->insert($this->tableName, ['texto'=>'CARGAS', 'descr'=>'EQUIPOS PARA TRANSPORTE Y/O ACOMODO DE CARGAS']);
    }
}
