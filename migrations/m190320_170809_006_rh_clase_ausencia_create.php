<?php

use yii\db\Migration;
use app\commands\templates\MyDbMigration;


class m190320_170809_006_rh_clase_ausencia_create extends MyDbMigration
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
            //'id' => 'INTEGER UNSIGNED NOT NULL AUTO_INCREMENT COMMENT \'ID del registro\'',
            //'id' => 'INTEGER UNSIGNED NOT NULL AUTO_INCREMENT',
            'clave' => 'CHAR(3) NOT NULL PRIMARY KEY',
            'descr' => 'VARCHAR(40) DEFAULT NULL',
        ]);
        $this->insertRows();
    }

    public function _safeUp_mysql()
    {
        $this->createTable($this->tableName, [
            //'id'    => $this->integer()->unsigned() . 'AUTO_INCREMENT',
            'clave' => $this->string(3)->notNull(),
            'descr' => $this->string(40)->notNull(),
        ]);
        $this->addPrimaryKey('PK_AUSENCIA_CLASE_CLAVE', $this->tableName, 'clave');
        //$this->addCommentOnColumn($this->tableName, 'id', 'ID del registro');
        $this->addCommentOnColumn($this->tableName, 'clave', 'Clave de la clase de ausencia');
        $this->addCommentOnColumn($this->tableName, 'descr', 'Descripción de la clase de ausencia');
        $this->addCommentOnTable($this->tableName, 'Tabla de clases de ausencias');
        $this->insertRows();
    }

    public function _safeDown_sqlite()
    {
        $this->dropTable($this->tableName);
    }

    public function _safeDown_mysql()
    {
        $this->dropPrimaryKey('PK_AUSENCIA_CLASE_CLAVE', $this->tableName);
        $this->dropTable($this->tableName);
    }

    public function insertRows()
    {
       $this->insert($this->tableName, ['clave'=>'CAP', 'descr'=>'AUSENCIA POR CAPACITACION']); 
       $this->insert($this->tableName, ['clave'=>'CLA', 'descr'=>'AUSENCIA POR CLAUSULA CONTRACTUAL']); 
       $this->insert($this->tableName, ['clave'=>'COM', 'descr'=>'AUSENCIA POR COMISION']); 
       $this->insert($this->tableName, ['clave'=>'FES', 'descr'=>'AUSENCIA POR FESTIVO']); 
       $this->insert($this->tableName, ['clave'=>'MED', 'descr'=>'AUSENCIA POR MEDICO']); 
       $this->insert($this->tableName, ['clave'=>'OTR', 'descr'=>'OTRAS AUSENCIAS']); 
       $this->insert($this->tableName, ['clave'=>'PER', 'descr'=>'AUSENCIA POR PERMISO']); 
       $this->insert($this->tableName, ['clave'=>'PMT', 'descr'=>'AUSENCIA POR PERMUTA']); 
       $this->insert($this->tableName, ['clave'=>'RHU', 'descr'=>'AUSENCIA OTORGADA POR RECURSOS HUMANOS']); 
       $this->insert($this->tableName, ['clave'=>'VAC', 'descr'=>'AUSENCIA POR VACACIONES']); 
       $this->insert($this->tableName, ['clave'=>'PLA', 'descr'=>'AUSENCIA POR MOTIVOS DE LA PLAZA']); 
    }
}
