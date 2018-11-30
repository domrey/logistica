<?php
/**
 * This view is used by console/controllers/MigrateController.php
 * The following variables are available in this view:
 */
/* @var $className string the new migration class name */


namespace yii\db;

use yii\db\Migration;


class MyDbMigration extends Migration
{

    protected $MySqlOptions = 'ENGINE=InnoDB CHARSET=utf8 COLLATE=utf8_spanish_ci';
    protected $MySqliteOptions = '';
    protected $dbOptions='';
    protected $dbTblPrefix='';

    public function dbType()
    {
      list($type) = explode(':', $this->db->connectionString);
      return $type;
    }

    public function dbPrefixOfTables()
    {
      return $this->db->tablePrefix;
    }

    public function dbTblExists($tableName)
    {
        return $this->db->getTableSchema($tableName, true);
    }

    private function initDb()
    {
      $this->dbTblPrefix=$this->dbPrefixOfTables();
      switch($this->dbType()) {
        case 'mysql':
          $this->dbOptions=$this->MySqlOptions;
          break;
        case 'sqlite':
          $this->dbOptions=$this->MySqliteOptions;
          break;
      }
    }

    public function comment($comment)
    {
        if ($this->dbType()==='mysql') {
          return ' COMMENT ' . $this->db->quoteValue($comment);
        }
    }


    public function __construct()
    {
      $this->initDb();
    }


    public function createTable($table, $columns, $options="mydboptions")
    {
      // First check if table already exists, if so drop it
      if ($this->dbTblExists($this->dbTblPrefix . $table)) {
        $this->dropTable($table);
      }

      if ($options==='mydboptions' || strpos($options, ' COMMENT ')==0) {
        $tOptions=$this->dbOptions;
        if (strpos($options, ' COMMENT ')===0) {
          $tOptions .= $options;
        }
        parent::createTable($this->dbTblPrefix.$table, $columns, $tOptions);
      }
      else {
        parent::createTable($this->dbTblPrefix.$table, $columns, $options);
      }
    }


}
