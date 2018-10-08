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
        $this->createTable('rh_jornada', [
            'clave'         => $this->primaryKey(),
            'descr'         => $this->string(40)->notNull(),
            'clave_texto'    => $this->string(2)->notNull()
        ]);

        $this->insert('rh_jornada', ['clave'=>0, 'descr'=>'DIURNO', 'clave_texto'=>'00']);
        $this->insert('rh_jornada', ['clave'=>1, 'descr'=>'TURNO CONTINUO', 'clave_texto'=>'01']);
        $this->insert('rh_jornada', ['clave'=>2, 'descr'=>'RELEVO TURNO CONTINUO', 'clave_texto'=>'02']);
        $this->insert('rh_jornada', ['clave'=>3, 'descr'=>'TURNO FIJO CONTINUO', 'clave_texto'=>'03']);
        $this->insert('rh_jornada', ['clave'=>4, 'descr'=>'TURNO DISCONTINUO MIXTO', 'clave_texto'=>'04']);
        $this->insert('rh_jornada', ['clave'=>5, 'descr'=>'RELEVO TURNO-DIURNO', 'clave_texto'=>'05']);
        $this->insert('rh_jornada', ['clave'=>6, 'descr'=>'RELEVO DIURNO-TURNO', 'clave_texto'=>'06']);
        $this->insert('rh_jornada', ['clave'=>7, 'descr'=>'TURNO FIJO DIURNO', 'clave_texto'=>'07']);
        $this->insert('rh_jornada', ['clave'=>8, 'descr'=>'TURNO CONTINUO (5 DIAS)', 'clave_texto'=>'08']);
        $this->insert('rh_jornada', ['clave'=>9, 'descr'=>'TURNO CONTINUO (4 HOMBRES/PUESTO)', 'clave_texto'=>'09']);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('rh_jornada');
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
