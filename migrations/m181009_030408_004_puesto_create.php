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

        if ($driver === 'mysql') {
            $tableOptions='CHARACTER SET utf COLLATE utf8_spanish_ci ENGINE=InnoDB';
            $pkColumn = $this->integer()->unsigned()->notNull();
        }
        else {
            $pkColumn = " INTEGER UNSIGNED NOT NULL PRIMARY KEY";
        }

        $this->createTable($tableName, [
            'clave'         =>,
            'descr'         =>,
            'nombre'        =>,
            'puesto_stps'   =>,
            'clave_stps'    =>,
            'activo'        =>,
            'id_rev'        =>,
            'id_reg_cont'   =>,
            'nivel'         =>,
            'familia'       =>,
            'labores'       =>,
            'regimen'       =>,
            'clasif'        =>
        ]);


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $tableName='rh_puesto';

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
