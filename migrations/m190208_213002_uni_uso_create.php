<?php

use yii\db\Migration;
use app\commands\templates\MyDbMigration;


class m190208_213002_uni_uso_create extends MyDbMigration
{
   protected $tableName='uni_uso';
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
            'clave'    => $this->string(5)->notNull(),
            'descr'     => $this->string(55),
        ]);

        $this->insertRows();
    }

    public function _safeUp_mysql()
    {

    }

    public function _safeDown_sqlite()
    {
        $this->dropTable($this->tableName);
    }

    public function _safeDown_mysql()
    {

    }

    public function insertRows()
    {
        $this->insert($this->tableName, ['clave'=>'', 'descr'=>'MTL']);
        $this->insert($this->tableName, ['clave'=>'', 'descr'=>'LIQ']);
        $this->insert($this->tableName, ['clave'=>'', 'descr'=>'MAN']);
        $this->insert($this->tableName, ['clave'=>'', 'descr'=>'PER']);
        $this->insert($this->tableName, ['clave'=>'', 'descr'=>'SUP']);
        $this->insert($this->tableName, ['clave'=>'', 'descr'=>'OT']);
    }
}
