<?php

use yii\db\Migration;

/**
 * Class m181008_105014_002_descanso_create
 */
class m181008_105014_002_descanso_create extends Migration
{
    /**
     * {@inheritdoc}
     */
    private $tblName='rh_descanso';

    public function safeUp()
    {
        $this->createTable($tblName, [
            'clave'     => $this->char(2)->primaryKey(),
            'descr'     => $this->string(45)->notNull(),
            'valor'     => $this->integer()->unsigned()->notNull(),
            'abrevn'    => $this->string(10)
        ],
        'ENGINE=InnoDB DEFAULT CHARACTER SET=utf8 COLLATE=utf8_spanish_ci'
        );

        $this->insert($tblName, ['clave'=>'L', 'descr'=>'LUNES', 'valor'=>64, 'abrevn'=>'1']);
        $this->insert($tblName, ['clave'=>'M', 'descr'=>'MARTES', 'valor'=>32, 'abrevn'=>'2']);
        $this->insert($tblName, ['clave'=>'X', 'descr'=>'MIERCOLES', 'valor'=>16, 'abrevn'=>'3']);
        $this->insert($tblName, ['clave'=>'J', 'descr'=>'JUEVES', 'valor'=>8, 'abrevn'=>'4']);
        $this->insert($tblName, ['clave'=>'V', 'descr'=>'VIERNES', 'valor'=>4, 'abrevn'=>'5']);
        $this->insert($tblName, ['clave'=>'S', 'descr'=>'SABADO', 'valor'=>2, 'abrevn'=>'6']);
        $this->insert($tblName, ['clave'=>'D', 'descr'=>'DOMINGO', 'valor'=>1, 'abrevn'=>'7']);
        $this->insert($tblName, ['clave'=>'SD', 'descr'=>'SAB. Y DOM.', 'valor'=>3, 'abrevn'=>'6,7']);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable($tblName);
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181008_105014_002_descanso_create cannot be reverted.\n";

        return false;
    }
    */
}
