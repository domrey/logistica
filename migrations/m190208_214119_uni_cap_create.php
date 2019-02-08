<?php

use yii\db\Migration;
use app\commands\templates\MyDbMigration;


class m190208_214119_uni_cap_create extends MyDbMigration
{
   protected $tableName='uni_cap';
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
            'id'   => $this->primaryKey(),
            'texto' => $this->string(10),
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
        $this->insert($this->tableName, ['texto'=>'40P']);
        $this->insert($this->tableName, ['texto'=>'25P']);
        $this->insert($this->tableName, ['texto'=>'8M3']);
        $this->insert($this->tableName, ['texto'=>'10M3']);
        $this->insert($this->tableName, ['texto'=>'16M3']);
        $this->insert($this->tableName, ['texto'=>'20M3']);
        $this->insert($this->tableName, ['texto'=>'30M3']);
        $this->insert($this->tableName, ['texto'=>'10T']);
        $this->insert($this->tableName, ['texto'=>'20T']);
        $this->insert($this->tableName, ['texto'=>'30T']);
        $this->insert($this->tableName, ['texto'=>'40T']);
        $this->insert($this->tableName, ['texto'=>'50T']);
        $this->insert($this->tableName, ['texto'=>'60T']);
        $this->insert($this->tableName, ['texto'=>'1.5T']);
        $this->insert($this->tableName, ['texto'=>'2.5T']);
        $this->insert($this->tableName, ['texto'=>'3.5T']);
        $this->insert($this->tableName, ['texto'=>'4.5T']);
    }
}
