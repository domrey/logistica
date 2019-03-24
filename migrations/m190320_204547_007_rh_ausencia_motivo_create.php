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
            'clave' =>  $this->string(6)->notNull()->primaryKey(),
            'descr' => $this->string(40)->notNull(),
            'orden' => $this->tinyInteger()->null(),
        ]);
        $this->insertRows();
    }

    public function _safeDown_sqlite()
    {

    }

    public function _safeDown_mysql()
    {

    }

    public function insertRows()
    {
        
    }
}
