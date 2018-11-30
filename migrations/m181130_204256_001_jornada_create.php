<?php

use yii\db\Migration;
use app\commands\templates\MyDbMigration;


class m181130_204256_001_jornada_create extends MyDbMigration
{

    protected $tableName='rh_jornada';
/*
    public function up()
    {

    }

    public function down()
    {

    }

*/ 
    // Use safeUp/safeDown to run migration code within a transaction

/*
     public function __construct()
     {
         parent::initDb();
     }
 */
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
            'clave'     => $this->primaryKey() . $this->comment('LLAVE PRIMARIA DE LA TABLA'),
            'descr'     => $this->string(40)->notNull() . $this->comment('DESCRIPCIÓN'),
            'clave_texto' => $this->string(2)->notNull() . $this->comment('CADENA QUE REPRESENTA LA CLAVE A 2 DIGITOS'),
        ]);
        $this->insertRows();
    }

    public function _safeUp_mysql()
    {
        echo ("El driver es $this->driver");
        $this->createTable($this->tableName, [
            'clave'     => $this->integer()->unsigned()->notNull()->comment('LLAVE PRIMARIA DE LA TABLA'),
            'descr'     => $this->string(40)->notNull() . $this->comment('DESCRIPCIÓN'),
            'clave_texto' => $this->string(2)->notNull() . $this->comment('CADENA QUE REPRESENTA LA CLAVE A 2 DIGITOS'),
        ]);

        // Crear las llaves foráneas e indices
        // 'clave' es la llave primaria de la tabla - no se auto-incrementa
        $this->addPrimaryKey('PK-clave', $this->tableName, 'clave');
        $this->insertRows();
    }

    public function _safeDown_sqlite()
    {
        $this->dropTable($this->tableName);
    }

    public function _safeDown_mysql()
    {
        //Eliminar claves e indices
        $this->dropPrimaryKey('PK-clave', $this->tableName);
        $this->dropTable($this->tableName);
    }

    public function insertRows()
    {
        $this->insert($this->tableName, ['clave'=>0, 'descr'=>'DIURNO', 'clave_texto'=>'00']);
        $this->insert($this->tableName, ['clave'=>1, 'descr'=>'TURNO CONTINUO', 'clave_texto'=>'01']);
        $this->insert($this->tableName, ['clave'=>2, 'descr'=>'RELEVO TURNO CONTINUO', 'clave_texto'=>'02']);
        $this->insert($this->tableName, ['clave'=>3, 'descr'=>'TURNO FIJO CONTINUO', 'clave_texto'=>'03']);
        $this->insert($this->tableName, ['clave'=>4, 'descr'=>'TURNO DISCONTINUO MIXTO', 'clave_texto'=>'04']);
        $this->insert($this->tableName, ['clave'=>5, 'descr'=>'RELEVO TURNO-DIURNO', 'clave_texto'=>'05']);
        $this->insert($this->tableName, ['clave'=>6, 'descr'=>'RELEVO DIURNO-TURNO', 'clave_texto'=>'06']);
        $this->insert($this->tableName, ['clave'=>7, 'descr'=>'TURNO FIJO DIURNO', 'clave_texto'=>'07']);
        $this->insert($this->tableName, ['clave'=>8, 'descr'=>'TURNO CONTINUO (5 DIAS)', 'clave_texto'=>'08']);
        $this->insert($this->tableName, ['clave'=>9, 'descr'=>'TURNO CONTINUO (4 HOMBRES/PUESTO)', 'clave_texto'=>'09']);
    }
}
