<?php

use yii\db\Migration;
use app\commands\templates\MyDbMigration;


class m181218_224026_006_ausencia_clase_create extends MyDbMigration
{
   protected $tableName='rh_ausencia_clase';
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
            'id'    => 'INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT',
            'nombre'=> 'VARCHAR(50) NOT NULL',
            'descr' => 'VARCHAR(100)',
        ]);
        $this->insertRows();
    }

    public function _safeUp_mysql()
    {
        $this->createTable($this->tableName, [
            'id'        => $this->integer()->unsigned()->notNull()->comment('ID DE LA CLASE DE AUSENCIA'),
            'nombre'    => $this->string(50)->notNull()->comment('NOMBRE DE LA CLASE DE AUSENCIA'),
            'descr'     => $this->string(100)->comment('DESCRIPCION DE LA CLASE DE AUSENCIA'),
        ]);
        $this->addPrimaryKey('PK-ID', $this->tableName, 'id');
        $this->insertRows();
    }

    public function _safeDown_sqlite()
    {
        $this->dropTable($this->tableName);
    }

    public function _safeDown_mysql()
    {
        $this->dropPrimaryKey('PK_ID', $this->tableName);
        $this->dropTable($this->tableName);
    }

    public function insertRows()
    {
        $this->insert($this->tableName, ['id'=>1, 'nombre'=>'CLAUSULA', 'descr'=>'CLAUSULA CONTRACTUAL']);
        $this->insert($this->tableName, ['id'=>2, 'nombre'=>'COMISION', 'descr'=>'TRABAJOS FORANEOS']);
        $this->insert($this->tableName, ['id'=>3, 'nombre'=>'CREACION', 'descr'=>'CREACION DE PLAZA']);
        $this->insert($this->tableName, ['id'=>4, 'nombre'=>'RENOVACION', 'descr'=>'RENOVACION DE PLAZA']);
        $this->insert($this->tableName, ['id'=>5, 'nombre'=>'INVESTIGACION', 'descr'=>'A DISPOSICION DE RECURSOS HUMANOS']);
        $this->insert($this->tableName, ['id'=>6, 'nombre'=>'SANCION', 'descr'=>'SANCION ADMINISTRATIVA/SINDICAL']);
        $this->insert($this->tableName, ['id'=>7, 'nombre'=>'TERMINACION', 'descr'=>'TERMINACION DE RELACION LABORAL']);
        $this->insert($this->tableName, ['id'=>8, 'nombre'=>'OTROS', 'descr'=>'MOTIVOS DIVERSOS']);

    }
}
