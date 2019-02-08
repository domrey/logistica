<?php

use yii\db\Migration;
use app\commands\templates\MyDbMigration;


class m190208_174702_uni_marca_create extends MyDbMigration
{
   protected $tableName='uni_marca';
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
            'nombre'    => $this->string(30)->notNull(),
        ]);
        $this->createIndex('IDX_nombre_marca', $this->tableName, 'nombre');
        $this->insertRows();
    }

    public function _safeUp_mysql()
    {

    }

    public function _safeDown_sqlite()
    {
        $this->dropIndex('IDX_nombre_marca', $this->tableName);
        $this->dropTable($this->tableName);
    }

    public function _safeDown_mysql()
    {

    }

    public function insertRows()
    {
         $this->insert($this->tableName, ['nombre'=>'PH OMEGA']);
         $this->insert($this->tableName, ['nombre'=>'FORD']);
         $this->insert($this->tableName, ['nombre'=>'FRUEHAUF']);
         $this->insert($this->tableName, ['nombre'=>'CHEVROLET']);
         $this->insert($this->tableName, ['nombre'=>'KENWORTH']);
         $this->insert($this->tableName, ['nombre'=>'GOY']);
         $this->insert($this->tableName, ['nombre'=>'CODESI']);
         $this->insert($this->tableName, ['nombre'=>'DINA']);
         $this->insert($this->tableName, ['nombre'=>'HYSTER']);
         $this->insert($this->tableName, ['nombre'=>'MERCEDES BENZ']);
         $this->insert($this->tableName, ['nombre'=>'HIDROMEX ']);
         $this->insert($this->tableName, ['nombre'=>'INTERNATIONAL']);
         $this->insert($this->tableName, ['nombre'=>'VOLVO']);
         $this->insert($this->tableName, ['nombre'=>'LUGARTH']);
         $this->insert($this->tableName, ['nombre'=>'FREIGHTLINER']);
         $this->insert($this->tableName, ['nombre'=>'WESTERN STAR']);
         $this->insert($this->tableName, ['nombre'=>'DODGE']);
         $this->insert($this->tableName, ['nombre'=>'NISSAN']);
         $this->insert($this->tableName, ['nombre'=>'MACK']);
         $this->insert($this->tableName, ['nombre'=>'MHASA']);
         $this->insert($this->tableName, ['nombre'=>'DAKOTA']);
         $this->insert($this->tableName, ['nombre'=>'PROPIA']);
         $this->insert($this->tableName, ['nombre'=>'OTRA']);
         $this->insert($this->tableName, ['nombre'=>'DESCONOCIDA']);
    }
}
