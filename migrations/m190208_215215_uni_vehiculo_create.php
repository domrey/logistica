<?php

use yii\db\Migration;
use app\commands\templates\MyDbMigration;


class m190208_215215_uni_vehiculo_create extends MyDbMigration
{
   protected $tableName='uni_vehiculo';
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
            'id'            => $this->primaryKey(),
            'inmovilizado'  => $this->string(12),
            'alias'         => $this->string(15),
            'id_marca'      =>
            'id_tipo'       =>
            'id_subtipo'    =>
            'id_clase'      =>
            'id_cap'        =>
            'descr'         =>
            'denominacion'  =>
            'modelo'        =>
            'serie'         =>
            'uso'           =>
            'activo'        =>
            'propio'        =>
            'propietario'   =>
        ]);
    }

    public function _safeUp_mysql()
    {

    }

    public function _safeDown_sqlite()
    {

    }

    public function _safeDown_mysql()
    {

    }
}
