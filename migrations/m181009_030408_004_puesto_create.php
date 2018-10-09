<?php

use yii\db\Migration;

/**
 * Class m181009_030408_004_puesto_create
 */
class m181009_030408_004_puesto_create extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableName='rh_puesto';
        $tableOptions='';
        $driver=$this->db->driverName;
        $pkColumn='';
        $boolColumn='';

        if ($driver === 'mysql') {
            $tableOptions='CHARACTER SET utf COLLATE utf8_spanish_ci ENGINE=InnoDB';
            $pkColumn = $this->integer()->unsigned()->notNull();
            $boolColumn = ' TINYINT(1) NOT NULL';
            $trueBoolColumn = $boolColumn . " DEFAULT 1";
        }
        else {
            $pkColumn = " INTEGER UNSIGNED NOT NULL PRIMARY KEY";
        }

        $this->createTable($tableName, [
            'clave'         => $pkColumn,
            'descr'         => $this->string(110)->notNull(),
            'nombre'        => $this->string(80),
            'puesto_stps'   => $this->string(110),
            'clave_stps'    => $this->integer->unsigned(),
            'activo'        => $trueBoolColumn,
            'id_rev'        => $this->smallInt()->unsigned->null(),
            'id_reg_cont'   => $this->smallInt()->unsigned->null(),
            'nivel'         => $this->smallInt()->unsigned->notNull(),
            'familia'       => $this->smallInt()->unsigned->notNull(),
            'labores'       => $this->smallInt()->unsigned->notNull(),
            'regimen'       => $this->char(1)->notNull(),
            'clasif'        => $this->string(8)->notNull()
        ]);

        if ($driver === 'mysql') {
            $this->addPrimaryKey('pk-clave', $tableName, 'clave');
        }

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $tableBase = 'rh_puesto';
        $tableName=$this->db->tablePrefix . $tableBase;

        //if ($this->db->schema->getTable($tableName, true))
        if (Yii::app()->db->schema->getTable($tableName, true))
            $this->dropTable($tableName);
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181009_030408_004_puesto_create cannot be reverted.\n";

        return false;
    }
    */
}
