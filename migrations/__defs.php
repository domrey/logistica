<?php

	$tableName='';
        $tableOptions='';
        $driver=$this->db->driverName;
        $pkColumn='';
        $boolColumn='';
        $trueBoolColumn='';
	$falseBoolColumn='';

	if ($driver === 'mysql') {
            $tableOptions='CHARACTER SET utf COLLATE utf8_spanish_ci ENGINE=InnoDB';
            $pkColumn = $this->integer()->unsigned()->notNull();
            $boolColumn = ' TINYINT(1) NOT NULL';
            $trueBoolColumn = $boolColumn . " DEFAULT 1";
	    $falseBoolColumn = $boolColumn . " DEFAULT 0";
        }
        else {
            $pkColumn = " INTEGER UNSIGNED NOT NULL PRIMARY KEY";
            $trueBoolColumn=$this->smallInteger()->notNull()->defaultValue(1);
            $falseBoolColumn=$this->smallInteger()->notNull()->defaultValue(0);
        }
	

?>
