<?php

use yii\db\Migration;
use app\commands\templates\MyDbMigration;


class m190208_190938_uni_tipo_create extends MyDbMigration
{
   protected $tableName='uni_tipo';
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
            'id'    => $this->primaryKey(),
            'nombre'=> $this->string(20)->notNull(),
            'abrev' => $this->string(15),
        ]);
        $this->createIndex('IDX_nombre_tipo', $this->tableName, 'nombre');
        $this->insertRows();
    }

    public function _safeUp_mysql()
    {

    }

    public function _safeDown_sqlite()
    {
        $this->dropIndex ('IDX_nombre_tipo', $this->tableName);
        $this->dropTable ($this->tableName);
    }

    public function _safeDown_mysql()
    {

    }


    public function insertRows()
    {
        $this->insert($this->tableName, ['nombre'=>'AUTOBUS', 'ABREV'=>'BUS']);
        $this->insert($this->tableName, ['nombre'=>'MICROBUS', 'ABREV'=>'MICRO']);
        $this->insert($this->tableName, ['nombre'=>'CHASIS/CABINA', 'ABREV'=>'CHAS/CAB']);
        $this->insert($this->tableName, ['nombre'=>'PICK-UP', 'ABREV'=>'PICK-UP']);
        $this->insert($this->tableName, ['nombre'=>'QUINTA RUEDA', 'ABREV'=>'QRDA']);
        $this->insert($this->tableName, ['nombre'=>'TIRO DIRECTO', 'ABREV'=>'TD']);
        $this->insert($this->tableName, ['nombre'=>'VAN', 'ABREV'=>'VAN']);
        $this->insert($this->tableName, ['nombre'=>'MINIVAN', 'ABREV'=>'MVAN']);
        $this->insert($this->tableName, ['nombre'=>'LOWBOY', 'ABREV'=>'LB']);
        $this->insert($this->tableName, ['nombre'=>'REMOLQUE', 'ABREV'=>'REM']);
        $this->insert($this->tableName, ['nombre'=>'PLATAFORMA/CABINA', 'ABREV'=>'PLAT/CAB']);
        $this->insert($this->tableName, ['nombre'=>'PLANA', 'ABREV'=>'PLAT']);
        $this->insert($this->tableName, ['nombre'=>'UPV', 'ABREV'=>'UPV']);
        $this->insert($this->tableName, ['nombre'=>'GRUA', 'ABREV'=>'GRUA']);
        $this->insert($this->tableName, ['nombre'=>'MONTACARGA', 'ABREV'=>'MCARGA']);
        $this->insert($this->tableName, ['nombre'=>'UNIMOG', 'ABREV'=>'UNI']);
    }
}
