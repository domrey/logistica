<?php

use yii\db\Migration;

class m181110_012910_04_comb_estacion_create extends Migration
{
    public function up()
    {
        $tableBase='comb_estacion';
        $tableName = $this->db->tablePrefix . $tableBase;
        $tableOptions = null;
        $driver = $this->db->driverName;

        if ($driver === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_spanish_ci ENGINE=InnoDB';
        }

        if (!$this->db->getTableSchema($tableName, true)) {
            $this->createTable($tableName, [
                'id'    => $this->primaryKey(),
                'clave' => $this->string(10)->notNull(),
                'nombre'=> $this->string(50),
                'rfc'   => $this->string(13),
                'descr' => $this->string(80),
                'lugar' => $this->string(50),
                'domicilio' => $this->string(255),
            ]);
        }

        $this->insert($tableName, ['clave'=>'656', 'nombre'=>'GASOLINERA LOS TORITOS, S.A. DE C.V.', 'rfc'=>null, 'descr'=>null, 'lugar'=>null, 'domicilio'=>'SAN MIGUEL MECATEPEC, TIHUATLAN']);
        $this->insert($tableName, ['clave'=>'2Y2', 'nombre'=>'GASOLINERA SERVIMAG SA DE CV', 'rfc'=>'GSE0407092Y2', 'descr'=>null, 'lugar'=>null, 'domicilio'=>'ALAMO']);
        $this->insert($tableName, ['clave'=>'7F1', 'nombre'=>'HIDROCARBUROS LA MARQUESILLA SA DE CV', 'rfc'=>'HMA0705037F1', 'descr'=>null, 'lugar'=>null, 'domicilio'=>'MATA VERDE, VERACRUZ']);
        $this->insert($tableName, ['clave'=>'J48', 'nombre'=>'TECNOGASOLINERA SA DE CV', 'rfc'=>'TEC100909J48', 'descr'=>null, 'lugar'=>null, 'domicilio'=>'BOSQUES DE CIRUELOS NO. 130 202, BOSQUES DE LAS LOMAS. MIGUEL HIDALGO, CIUDAD DE MEXICO']);
        $this->insert($tableName, ['clave'=>'L98', 'nombre'=>'GRUPO GASOLINERO TAMPOCO S.A. DE C.V.', 'rfc'=>null, 'descr'=>null, 'lugar'=>null, 'domicilio'=>'ALDAMA']);
        $this->insert($tableName, ['clave'=>'NU7', 'nombre'=>'SERVICIO DE COMBUSTIBLES RAYMEL S.A. DE C.V.', 'rfc'=>'SCR000404NU7', 'descr'=>null, 'lugar'=>null, 'domicilio'=>'CD. DEL CARMEN, CAMPECHE']);
        $this->insert($tableName, ['clave'=>'NY5', 'nombre'=>'CELEGAS S.A. DE C.V.', 'rfc'=>'CEL100226NY5', 'descr'=>null, 'lugar'=>null, 'domicilio'=>'LA MANCHA ACTOPAN, VER.']);
        $this->insert($tableName, ['clave'=>'UK8', 'nombre'=>'JORGE GUTIERREZ JIMENEZ', 'rfc'=>'GUJJ610829UK8', 'descr'=>null, 'lugar'=>null, 'domicilio'=>'AUTOPISTA PIRAMIDES TULANCINGO No. 261 Col . LOS AUTOS, CP 43780, SINGUILUCAN, HIDALGO, MEXICO']);
        $this->insert($tableName, ['clave'=>'73A', 'nombre'=>'GASOLINERIA FOY DE ALAMO, S.A. DE C.V.', 'rfc'=>'GFA93011573A', 'descr'=>null, 'lugar'=>null, 'domicilio'=>'CARR. NAL. TIHUATLAN-ALAMO-ALAZAN']);
        $this->insert($tableName, ['clave'=>'6T6', 'nombre'=>'GASOLINERA LOS PINOS SA DE CV', 'rfc'=>'GPI9212216T6', 'descr'=>null, 'lugar'=>null, 'domicilio'=>'HUACHINANGO, PUEBLA']);
        $this->insert($tableName, ['clave'=>'BA0', 'nombre'=>'OGSA S.A. DE C.V.', 'rfc'=>'OGS980421BA0', 'descr'=>null, 'lugar'=>null, 'domicilio'=>'COATZACOALCOS, VERACRUZ']);
        $this->insert($tableName, ['clave'=>'FK4', 'nombre'=>'SERVICIO PALMA SOLA S.A. DE C.V.', 'rfc'=>'SPS730710FK4', 'descr'=>null, 'lugar'=>null, 'domicilio'=>'PALMASOLA, VERACRUZ']);
        $this->insert($tableName, ['clave'=>'4B2', 'nombre'=>'COMPAÑIA SANTA MARIA, SA DE CV', 'rfc'=>'SMA0112284B2', 'descr'=>null, 'lugar'=>null, 'domicilio'=>'TULANCINGO DE BRAVO, TULANCINGO HIDALGO']);
        $this->insert($tableName, ['clave'=>'HM1', 'nombre'=>'AUTO SERVICIO JANO S.A. DE C.V.', 'rfc'=>'ASJ060127HM1', 'descr'=>null, 'lugar'=>null, 'domicilio'=>'RI TUXPAN 57 LOS RIOS VERACRUZ']);
        $this->insert($tableName, ['clave'=>'864', 'nombre'=>'SERVICIO NAUTLA SA DE CV', 'rfc'=>'SNA930209864', 'descr'=>null, 'lugar'=>null, 'domicilio'=>'XICOTENCATL NO. 816, FLORES MAGON , VERACRUZ']);
        $this->insert($tableName, ['clave'=>'9W9', 'nombre'=>'GRUPO EMPRESARIAL SIGAS, S.A. DE C.V.', 'rfc'=>'GES1502169W9', 'descr'=>null, 'lugar'=>null, 'domicilio'=>'CARR. MEXICO-TULANCINGO KM 73+340 S/N, LOS SAUCOS, SINGUILUCAN HIDALGO , MEX. 43780']);
        $this->insert($tableName, ['clave'=>'6X2', 'nombre'=>'SERVICIO OZULUAMA S.A. DE C.V.', 'rfc'=>'SOZ9707226X2', 'descr'=>null, 'lugar'=>null, 'domicilio'=>'CARR. TUXPAN-TAMPICO KM 126+532.8 S/N, OZULUAMA VER.']);
        $this->insert($tableName, ['clave'=>'11363', 'nombre'=>'DESCONOCIDO', 'rfc'=>null, 'descr'=>null, 'lugar'=>null, 'domicilio'=>'CARR. NAL. MEXICO-TUXPAN KM 213 S/N CENTRO, TIHUATLAN VER.']);
        $this->insert($tableName, ['clave'=>'MR3', 'nombre'=>'GASOLINERA FOY TREBOL, S.A. DE C.V.', 'rfc'=>'GFT060908MR3', 'descr'=>null, 'lugar'=>null, 'domicilio'=>'NO. ESTACION 11363 CARRETERA NACIONAL MEXICO-TUXPAN KM 213 S/N CENTRO, TIHUATLAN, VERACRUZ']);
        $this->insert($tableName, ['clave'=>'UM7', 'nombre'=>'SERVICIO ATLANGATEPEC, S.A. DE C.V', 'rfc'=>'SAT990412UM7', 'descr'=>null, 'lugar'=>null, 'domicilio'=>' CARR. FED. APIZACO-TLAXCO KM. 9, ATLANGATEPEC, TLAXCALA, MEXICO']);
        $this->insert($tableName, ['clave'=>'RG1', 'nombre'=>'SERVICIO LAS ARBOLEDAS S.A. DE C.V.', 'rfc'=>'SAR990323RG1', 'descr'=>null, 'lugar'=>null, 'domicilio'=>'NO. ESTACION 05494 CLAVE PEMEX 0000108963']);
        $this->insert($tableName, ['clave'=>'L66', 'nombre'=>null, 'rfc'=>'CTN020531L66', 'descr'=>null, 'lugar'=>null, 'domicilio'=>null]);
        $this->insert($tableName, ['clave'=>'Q70', 'nombre'=>null, 'rfc'=>'ESS081204Q70', 'descr'=>null, 'lugar'=>null, 'domicilio'=>null]);
        $this->insert($tableName, ['clave'=>'S19', 'nombre'=>null, 'rfc'=>'LGA090312S19', 'descr'=>null, 'lugar'=>null, 'domicilio'=>null]);
        $this->insert($tableName, ['clave'=>'M54', 'nombre'=>null, 'rfc'=>'OSP000113M54', 'descr'=>null, 'lugar'=>null, 'domicilio'=>null]);
        $this->insert($tableName, ['clave'=>'232', 'nombre'=>null, 'rfc'=>'AAE100430232', 'descr'=>null, 'lugar'=>null, 'domicilio'=>null]);
        $this->insert($tableName, ['clave'=>'UW5', 'nombre'=>null, 'rfc'=>'GFA091207UW5', 'descr'=>null, 'lugar'=>null, 'domicilio'=>null]);
        $this->insert($tableName, ['clave'=>'8S9', 'nombre'=>'PETRO SAV MINA SA DE CV', 'rfc'=>'PSM1002028S9', 'descr'=>null, 'lugar'=>null, 'domicilio'=>'GUERRERO NO 717 CENTRO, MINA NUEVO LEON. 01 81 19-46-27-98']);



    }

    public function down()
    {
        
        $tableBase='comb_estacion';
        $tableName = $this->db->tablePrefix . $tableBase;

        if ($this->db->getTableSchema($tableName, true)) {
            $this->dropTable($tableName);
        }

    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}