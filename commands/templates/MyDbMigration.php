<?php
/**
 * This view is used by console/controllers/MigrateController.php
 * The following variables are available in this view:
 */
/* @var $className string the new migration class name */


namespace app\commands\templates;

use yii\db\Migration;
use Yii;

class MyDbMigration extends Migration
{

    protected $MySqlOptions = 'ENGINE=InnoDB CHARSET=utf8 COLLATE=utf8_spanish_ci';
    protected $MySqliteOptions = '';
    protected $dbOptions='';
    protected $driver='';

      	 
    public function dbTblExists($tableName)
    {
        return Yii::$app->db->getTableSchema($tableName, true);
    }

    private function initDb()
    {
      $this->driver=Yii::$app->db->driverName;
      switch($this->driver) {
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
        if ($this->driver==='mysql') {
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
      if ($this->dbTblExists($table)) {
        $this->dropTable($table);
      }

      if ($options==='mydboptions' || strpos($options, ' COMMENT ')==0) {
        $tOptions=$this->dbOptions;
        if (strpos($options, ' COMMENT ')===0) {
          $tOptions .= $options;
        }
        parent::createTable($table, $columns, $tOptions);
      }
      else {
        parent::createTable($table, $columns, $options);
      }
    }


}
