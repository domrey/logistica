<?php

use yii\db\Migration;
use app\commands\templates\MyDbMigration;


class m190208_211909_uni_aditamento_create extends MyDbMigration
{
   protected $tableName='uni_aditamento';
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
            'nombre'=> $this->string(30)->notNull(),
        ]);
        $this->createIndex('IDX_nombre_aditamento', $this->tableName, 'nombre');
        $this->insertRows();
    }

    public function _safeUp_mysql()
    {

    }

    public function _safeDown_sqlite()
    {
        $this->dropIndex('IDX_nombre_aditamento', $this->tableName);
        $this->dropTable($this->tableName);
    }

    public function _safeDown_mysql()
    {

    }

    public function insertRows()
    {
        $this->insert($this->tableName, ['nombre'=>'GRUA HIDRAULICA ARTICULADA']);
        $this->insert($this->tableName, ['nombre'=>'CASETA']);
        $this->insert($this->tableName, ['nombre'=>'REDILA']);
        $this->insert($this->tableName, ['nombre'=>'AUTOTANQUE']);
        $this->insert($this->tableName, ['nombre'=>'COMPRESOR']);
        $this->insert($this->tableName, ['nombre'=>'WINCHE']);
        $this->insert($this->tableName, ['nombre'=>'ROL']);
        $this->insert($this->tableName, ['nombre'=>'OTRO']);
        $this->insert($this->tableName, ['nombre'=>'NINGUNO']);
    }
}
