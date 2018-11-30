<?php

use yii\db\Migration;
use app\commands\templates\MyDbMigration;


class m181130_214956_002_descanso_create extends MyDbMigration
{
   protected $tableName='rh_descanso';
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
        // crea la tabla de descansos para el motor sqlite
        $this->createTable ($this->tableName, [
            'clave'     => 'CHAR(2) NOT NULL PRIMARY KEY',
            'descr'     => $this->string(45)->notNull(),
            'valor'     => $this->integer()->unsigned()->notNull(),
            'abrevn'    => $this->string(10),
        ]);
        $this->insertRows();
    }

    public function _safeUp_mysql()
    {
        $this->createTable ($this->tableName, [
            'clave'     => $this->char(2)->notNull(),
            'descr'     => $this->string(45)->notNull(),
            'valor'     => $this->integer()->unsigned()->notNull(),
            'abrevn'    => $this->string(10),
        ]);
        $this->addPrimaryKey('PK-clave', $this->tableName, 'clave');
        $this->insertRows();
    }

    public function _safeDown_sqlite()
    {
        $this->dropTable($this->tableName);
    }

    public function _safeDown_mysql()
    {
        $this->dropPrimaryKey('PK-clave', $this->tableName);
        $this->dropTable($this->tableName);
    }


    public function insertRows()
    {
        $this->insert($this->tableName, ['clave'=>'L', 'descr'=>'LUNES', 'valor'=>64, 'abrevn'=>'1']);
        $this->insert($this->tableName, ['clave'=>'M', 'descr'=>'MARTES', 'valor'=>32, 'abrevn'=>'2']);
        $this->insert($this->tableName, ['clave'=>'X', 'descr'=>'MIERCOLES', 'valor'=>16, 'abrevn'=>'3']);
        $this->insert($this->tableName, ['clave'=>'J', 'descr'=>'JUEVES', 'valor'=>8, 'abrevn'=>'4']);
        $this->insert($this->tableName, ['clave'=>'V', 'descr'=>'VIERNES', 'valor'=>4, 'abrevn'=>'5']);
        $this->insert($this->tableName, ['clave'=>'S', 'descr'=>'SABADO', 'valor'=>2, 'abrevn'=>'6']);
        $this->insert($this->tableName, ['clave'=>'D', 'descr'=>'DOMINGO', 'valor'=>1, 'abrevn'=>'7']);
        $this->insert($this->tableName, ['clave'=>'SD', 'descr'=>'SAB. Y DOM.', 'valor'=>3, 'abrevn'=>'6,7']);
    }
}
