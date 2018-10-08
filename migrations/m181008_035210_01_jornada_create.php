<?php

use yii\db\Migration;

/**
 * Class m181008_035210_01_jornada_create
 */
class m181008_035210_01_jornada_create extends Migration
{
    /**
     * {@inheritdoc}
     */

    public function safeUp()
    {
       $tableName='rh_jornada';
       $tableOptions = null;
       $driver=$this->db->driverName;
       $pkColumn='';

        if ($driver === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_spanish_ci ENGINE=InnoDB';
            $pkColumn=$this->integer()->unsigned()->notNull();
        }
       if ($driver === 'sqlite') {
            $pkColumn=$this->primaryKey();
       }

        $this->createTable($tableName, [
//            'clave'         => $this->integer()->unsigned()->notNull(),
            'clave'         => $pkColumn,
            'descr'         => $this->string(40)->notNull(),
            'clave_texto'    => $this->string(2)->notNull()
            ]
         );

        if ($driver === 'mysql')
            $this->addPrimaryKey('pk-clave', $tableName, 'clave');

        $this->insert($tableName, ['clave'=>0, 'descr'=>'DIURNO', 'clave_texto'=>'00']);
        $this->insert($tableName, ['clave'=>1, 'descr'=>'TURNO CONTINUO', 'clave_texto'=>'01']);
        $this->insert($tableName, ['clave'=>2, 'descr'=>'RELEVO TURNO CONTINUO', 'clave_texto'=>'02']);
        $this->insert($tableName, ['clave'=>3, 'descr'=>'TURNO FIJO CONTINUO', 'clave_texto'=>'03']);
        $this->insert($tableName, ['clave'=>4, 'descr'=>'TURNO DISCONTINUO MIXTO', 'clave_texto'=>'04']);
        $this->insert($tableName, ['clave'=>5, 'descr'=>'RELEVO TURNO-DIURNO', 'clave_texto'=>'05']);
        $this->insert($tableName, ['clave'=>6, 'descr'=>'RELEVO DIURNO-TURNO', 'clave_texto'=>'06']);
        $this->insert($tableName, ['clave'=>7, 'descr'=>'TURNO FIJO DIURNO', 'clave_texto'=>'07']);
        $this->insert($tableName, ['clave'=>8, 'descr'=>'TURNO CONTINUO (5 DIAS)', 'clave_texto'=>'08']);
        $this->insert($tableName, ['clave'=>9, 'descr'=>'TURNO CONTINUO (4 HOMBRES/PUESTO)', 'clave_texto'=>'09']);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('rh-jornada');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181008_035210_01_jornada_create cannot be reverted.\n";

        return false;
    }
    */
}
