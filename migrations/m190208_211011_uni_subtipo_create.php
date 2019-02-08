<?php

use yii\db\Migration;
use app\commands\templates\MyDbMigration;


class m190208_211011_uni_subtipo_create extends MyDbMigration
{
   protected $tableName='uni_subtipo';
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
            'nombre'    => $this->string(20)->notNull(),
        ]);
        $this->createIndex('IDX_nombre_subtipo', $this->tableName, 'nombre');
        $this->insertRows();
    }

    public function _safeUp_mysql()
    {

    }

    public function _safeDown_sqlite()
    {
        $this->dropIndex('IDX_nombre_subtipo', $this->tableName);
        $this->dropTable($this->tableName);
    }

    public function _safeDown_mysql()
    {

    }

    public function insertRows()
    {
       $this->insert($this->tableName, ['nombre'=>'PETROLERO']);
       $this->insert($this->tableName, ['nombre'=>'CARRETERO']);
       $this->insert($this->tableName, ['nombre'=>'CAB1']);
       $this->insert($this->tableName, ['nombre'=>'CAB1.5']);
       $this->insert($this->tableName, ['nombre'=>'CAB2.5']);
    }
}
