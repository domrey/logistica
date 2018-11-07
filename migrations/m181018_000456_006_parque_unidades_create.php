<?php

use yii\db\Migration;

class m181018_000456_006_parque_unidades_create extends Migration
{
    public function up()
    {
        $tableBase='uni_parque';
        $tableName = $this->db->tablePrefix . $tableBase;
        $tableOptions = null;
        $driver = $this->db->driverName;
        $pkColumn = '';
        $rel1 = '';
        $rel2 = '';
        $rel3 = '';
        $rel4 = '';

        if ($driver === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_spanish_ci ENGINE=InnoDB';
            $pkColumn=$this->string(12)->notNull();
        }
        else if($driver === 'sqlite') {
            $pkColumn="VARCHAR(12) NOT NULL PRIMARY KEY";
            $rel1 = " REFERENCES uni_tipo(id)";
            $rel2 = " REFERENCES uni_subtipo(id)";
            $rel3 = " REFERENCES uni_marca(id)";
            $rel4 = " REFERENCES uni_clase(id)";
        }

        if (!$this->db->getTableSchema($tableName, true)) {
            $this->createTable($tableName, [
                'id'            => $this->primaryKey(),
                'inmovilizado'  => $this->string(12),
                'alias'         => $this->string(15),
                'id_tipo'       => $this->integer()->unsigned() . $rel1,
                'id_subtipo'    => $this->integer()->unsigned() . $rel2,
                'id_marca'      => $this->integer()->unsigned() . $rel3,
                'id_clase'      => $this->integer()->unsigned() . $rel4,
                'descr'         => $this->string(255),
                'modelo'        => $this->integer()->unsigned(),
                'serie'         => $this->string(40),
                'activo'        => $this->tinyInteger()->notNull()->defaultValue(1),
                'uso'           => $this->string(30),
                'propio'        => $this->tinyInteger()->notNull()->defaultValue(1),
                'propietario'   => $this->string(60),
            ]);

            if ($driver === 'mysql') {
                //$this->addPrimaryKey('PK_id_unidad', $tableName, 'id');
                $this->createIndex('IDX_inmovilizado_unidad', $tableName, 'inmovilizado');
                $this->createIndex('IDX_alias_unidad', $tableName, 'alias');

                $this->addForeignKey('FK_id_tipo', $tableName, 'id_tipo', 'uni_tipo', '[id]', 'CASCADE', 'NO ACTION');
                $this->addForeignKey('FK_id_subtipo', $tableName, 'id_subtipo', 'uni_subtipo', '[id]', 'CASCADE', 'NO ACTION');
                $this->addForeignKey('FK_id_marca', $tableName, 'id_marca', 'uni_marca', '[id]', 'CASCADE', 'NO ACTION');
                $this->addForeignKey('FK_id_clase', $tableName, 'id_clase', 'uni_clase', '[id]', 'CASCADE', 'NO ACTION');
            }

            $this->insert($tableName, ['inmovilizado'=>'1000000979', 'propio'=>1, 'propietario'=>'PEMEX', 'alias'=>'3930', 'id_tipo'=>9, 'id_subtipo'=>null, 'descr'=>'REMOLQUE DA-3930', 'modelo'=>1986, 'serie'=>'FM-10441', 'id_marca'=>3, 'activo'=>1, 'uso'=>'MTL', 'id_clase'=>5]);
$this->insert($tableName, ['inmovilizado'=>'1000001049', 'propio'=>1, 'propietario'=>'PEMEX', 'alias'=>'3928', 'id_tipo'=>5, 'id_subtipo'=>8, 'descr'=>'LOW-BOY PETROLERO 30 TON', 'modelo'=>1982, 'serie'=>'82PG02P172', 'id_marca'=>6, 'activo'=>1, 'uso'=>'MTL', 'id_clase'=>5]);
$this->insert($tableName, ['inmovilizado'=>'1000015633', 'propio'=>1, 'propietario'=>'PEMEX', 'alias'=>'15633', 'id_tipo'=>10, 'id_subtipo'=>9, 'descr'=>'QUINTA RUEDA CARRETERA – TRACTOCAMION', 'modelo'=>2008, 'serie'=>'3HSCEAPT18N680280', 'id_marca'=>12, 'activo'=>1, 'uso'=>'MAN, MTL', 'id_clase'=>3]);
$this->insert($tableName, ['inmovilizado'=>'1000016185', 'propio'=>1, 'propietario'=>'PEMEX', 'alias'=>'16185', 'id_tipo'=>10, 'id_subtipo'=>9, 'descr'=>'QUINTA RUEDA CARRETERA – TRACTOCAMION', 'modelo'=>2009, 'serie'=>'3WKDD40X79F826158', 'id_marca'=>5, 'activo'=>0, 'uso'=>'MAN, MTL', 'id_clase'=>3]);
$this->insert($tableName, ['inmovilizado'=>'1000016183', 'propio'=>1, 'propietario'=>'PEMEX', 'alias'=>'16183', 'id_tipo'=>10, 'id_subtipo'=>9, 'descr'=>'QUINTA RUEDA CARRETERA – TRACTOCAMION', 'modelo'=>2009, 'serie'=>'3WKDD40XX9F826154', 'id_marca'=>5, 'activo'=>0, 'uso'=>'MAN, MTL', 'id_clase'=>3]);
$this->insert($tableName, ['inmovilizado'=>'1000019515', 'propio'=>1, 'propietario'=>'PEMEX', 'alias'=>'19515', 'id_tipo'=>3, 'id_subtipo'=>3, 'descr'=>'PLATAFORMA BRAZO BIONICO', 'modelo'=>2012, 'serie'=>'3ALHC5CVXCDBT9182', 'id_marca'=>15, 'activo'=>1, 'uso'=>'MAN, MTL', 'id_clase'=>2]);
$this->insert($tableName, ['inmovilizado'=>'1000010287', 'propio'=>1, 'propietario'=>'PEMEX', 'alias'=>'10287', 'id_tipo'=>3, 'id_subtipo'=>6, 'descr'=>'CAMIONETA CHASIS 3.50 TON', 'modelo'=>2003, 'serie'=>'3GBJC34R73M102035', 'id_marca'=>4, 'activo'=>0, 'uso'=>'PER', 'id_clase'=>1]);
$this->insert($tableName, ['inmovilizado'=>'1000010298', 'propio'=>1, 'propietario'=>'PEMEX', 'alias'=>'10298', 'id_tipo'=>13, 'id_subtipo'=>11, 'descr'=>'EXPRESS VAN 4 PTRAS AUT/15 PASAJEROS', 'modelo'=>2003, 'serie'=>'1GAHG39U631118373', 'id_marca'=>4, 'activo'=>0, 'uso'=>'PER', 'id_clase'=>1]);
$this->insert($tableName, ['inmovilizado'=>'1000016161', 'propio'=>1, 'propietario'=>'PEMEX', 'alias'=>'16161', 'id_tipo'=>2, 'id_subtipo'=>2, 'descr'=>'CHASIS CABINA CON AUTOTANQUE CAP. 8 M3', 'modelo'=>2009, 'serie'=>'3ALACYCS29DAH5670', 'id_marca'=>15, 'activo'=>1, 'uso'=>'LIQ', 'id_clase'=>2]);
$this->insert($tableName, ['inmovilizado'=>'1000016202', 'propio'=>1, 'propietario'=>'PEMEX', 'alias'=>'16202', 'id_tipo'=>10, 'id_subtipo'=>8, 'descr'=>'TRACTOCAMION QUINTA RUEDA TIPO PETROLERO', 'modelo'=>2009, 'serie'=>'5KJJASAV6APAM1951', 'id_marca'=>16, 'activo'=>0, 'uso'=>'MAN, MTL', 'id_clase'=>3]);
$this->insert($tableName, ['inmovilizado'=>'1000011488', 'propio'=>1, 'propietario'=>'PEMEX', 'alias'=>'11488', 'id_tipo'=>13, 'id_subtipo'=>11, 'descr'=>'EXPRESS VAN 4 PTRAS AUT/15 PASAJEROS', 'modelo'=>2009, 'serie'=>'1GAHG39K191116201', 'id_marca'=>4, 'activo'=>0, 'uso'=>'PER', 'id_clase'=>1]);
$this->insert($tableName, ['inmovilizado'=>'1000016823', 'propio'=>1, 'propietario'=>'PEMEX', 'alias'=>'16823', 'id_tipo'=>8, 'id_subtipo'=>17, 'descr'=>'DODGE RAM 1500 BASE MANUAL 4X2', 'modelo'=>2010, 'serie'=>'3D7C51EK1AG557050', 'id_marca'=>4, 'activo'=>0, 'uso'=>'SUP', 'id_clase'=>1]);
$this->insert($tableName, ['inmovilizado'=>'1000018118', 'propio'=>1, 'propietario'=>'PEMEX', 'alias'=>'18118', 'id_tipo'=>13, 'id_subtipo'=>12, 'descr'=>'URVAN 15 PASAJEROS ', 'modelo'=>2010, 'serie'=>'JN1AE56S2AX013601', 'id_marca'=>18, 'activo'=>1, 'uso'=>'PER', 'id_clase'=>1]);
$this->insert($tableName, ['inmovilizado'=>'1000000931', 'propio'=>1, 'propietario'=>'PEMEX', 'alias'=>'3562', 'id_tipo'=>14, 'id_subtipo'=>8, 'descr'=>'TIRO DIRECTO PETROLERO', 'modelo'=>1976, 'serie'=>'198564', 'id_marca'=>5, 'activo'=>0, 'uso'=>'MAN', 'id_clase'=>3]);
$this->insert($tableName, ['inmovilizado'=>'1000001048', 'propio'=>1, 'propietario'=>'PEMEX', 'alias'=>'3926', 'id_tipo'=>9, 'id_subtipo'=>null, 'descr'=>'REMOLQUE DA-3926', 'modelo'=>1982, 'serie'=>'82PG02P170', 'id_marca'=>6, 'activo'=>1, 'uso'=>'MAN, MTL', 'id_clase'=>5]);
$this->insert($tableName, ['inmovilizado'=>'1000001070', 'propio'=>1, 'propietario'=>'PEMEX', 'alias'=>'1070', 'id_tipo'=>9, 'id_subtipo'=>null, 'descr'=>'REMOLQUE', 'modelo'=>1987, 'serie'=>'58456', 'id_marca'=>7, 'activo'=>0, 'uso'=>'MAN, MTL', 'id_clase'=>5]);
$this->insert($tableName, ['inmovilizado'=>'1000011159', 'propio'=>1, 'propietario'=>'PEMEX', 'alias'=>'11159', 'id_tipo'=>1, 'id_subtipo'=>1, 'descr'=>'AUTOBUS', 'modelo'=>2005, 'serie'=>'3CEJ2X51055003130', 'id_marca'=>13, 'activo'=>0, 'uso'=>'PER', 'id_clase'=>2]);
$this->insert($tableName, ['inmovilizado'=>'1000011486', 'propio'=>1, 'propietario'=>'PEMEX', 'alias'=>'11486', 'id_tipo'=>13, 'id_subtipo'=>11, 'descr'=>'EXPRESS VAN 4 PTRAS AUT/15 PASAJEROS', 'modelo'=>2009, 'serie'=>'1GAHG39K591105184', 'id_marca'=>4, 'activo'=>0, 'uso'=>'PER', 'id_clase'=>1]);
$this->insert($tableName, ['inmovilizado'=>'1000012615', 'propio'=>1, 'propietario'=>'PEMEX', 'alias'=>'12615', 'id_tipo'=>10, 'id_subtipo'=>3, 'descr'=>'QUINTA RUEDA CON BRAZO HIDRAULICO', 'modelo'=>2004, 'serie'=>'3HSNEAPT54N088576', 'id_marca'=>12, 'activo'=>0, 'uso'=>'MTL, EQU', 'id_clase'=>3]);
$this->insert($tableName, ['inmovilizado'=>'1000014765', 'propio'=>1, 'propietario'=>'PEMEX', 'alias'=>'14765', 'id_tipo'=>6, 'id_subtipo'=>16, 'descr'=>'UNIDAD DE TRANSPORTE DE PERSONAL (MICROBUS)', 'modelo'=>2008, 'serie'=>'3HVBZAAN38N694453', 'id_marca'=>12, 'activo'=>0, 'uso'=>'PER', 'id_clase'=>2]);
$this->insert($tableName, ['inmovilizado'=>'1000016192', 'propio'=>1, 'propietario'=>'PEMEX', 'alias'=>'16192', 'id_tipo'=>6, 'id_subtipo'=>16, 'descr'=>'MICROBUS 25 PASAJEROS MOD. 2009', 'modelo'=>2009, 'serie'=>'4UZACRCS39CAK0492', 'id_marca'=>15, 'activo'=>1, 'uso'=>'PER', 'id_clase'=>2]);
$this->insert($tableName, ['inmovilizado'=>'1000016193', 'propio'=>1, 'propietario'=>'PEMEX', 'alias'=>'16193', 'id_tipo'=>6, 'id_subtipo'=>16, 'descr'=>'MICROBUS 25 PASAJEROS MOD. 2009', 'modelo'=>2009, 'serie'=>'4UZACRCS19CAK0491', 'id_marca'=>15, 'activo'=>0, 'uso'=>'PER', 'id_clase'=>2]);
$this->insert($tableName, ['inmovilizado'=>'1000018123', 'propio'=>1, 'propietario'=>'PEMEX', 'alias'=>'18123', 'id_tipo'=>13, 'id_subtipo'=>12, 'descr'=>'URVAN 15 PASAJEROS ', 'modelo'=>2010, 'serie'=>'JN1AE56S3AX013588', 'id_marca'=>18, 'activo'=>0, 'uso'=>'PER', 'id_clase'=>1]);
$this->insert($tableName, ['inmovilizado'=>'1000000533', 'propio'=>1, 'propietario'=>'PEMEX', 'alias'=>'4202', 'id_tipo'=>5, 'id_subtipo'=>8, 'descr'=>'LOW-BOY PETROLERO 60 TON', 'modelo'=>1985, 'serie'=>'FM10344', 'id_marca'=>3, 'activo'=>1, 'uso'=>'MAN, MTL', 'id_clase'=>5]);
$this->insert($tableName, ['inmovilizado'=>'1000000565', 'propio'=>1, 'propietario'=>'PEMEX', 'alias'=>'565', 'id_tipo'=>2, 'id_subtipo'=>14, 'descr'=>'AUTOTANQUE KODIAK CAP 10 M3', 'modelo'=>1977, 'serie'=>'3GCM7H1J7VM501135', 'id_marca'=>4, 'activo'=>1, 'uso'=>'LIQ', 'id_clase'=>2]);
$this->insert($tableName, ['inmovilizado'=>'1000000980', 'propio'=>1, 'propietario'=>'PEMEX', 'alias'=>'3938', 'id_tipo'=>11, 'id_subtipo'=>null, 'descr'=>'UPV 20 M3', 'modelo'=>1986, 'serie'=>'FM-12513', 'id_marca'=>3, 'activo'=>0, 'uso'=>'LIQ', 'id_clase'=>2]);
$this->insert($tableName, ['inmovilizado'=>'1000001156', 'propio'=>1, 'propietario'=>'PEMEX', 'alias'=>'1156', 'id_tipo'=>14, 'id_subtipo'=>8, 'descr'=>'TIRO DIRECTO PETROLERO', 'modelo'=>1979, 'serie'=>'198557', 'id_marca'=>5, 'activo'=>1, 'uso'=>'MAN', 'id_clase'=>3]);
$this->insert($tableName, ['inmovilizado'=>'1000001997', 'propio'=>1, 'propietario'=>'PEMEX', 'alias'=>'3507', 'id_tipo'=>10, 'id_subtipo'=>8, 'descr'=>'QUINTA RUEDA PETROLERA', 'modelo'=>1979, 'serie'=>'465805', 'id_marca'=>5, 'activo'=>0, 'uso'=>'MAN, MTL', 'id_clase'=>3]);
$this->insert($tableName, ['inmovilizado'=>'1000002086', 'propio'=>1, 'propietario'=>'PEMEX', 'alias'=>'3492', 'id_tipo'=>2, 'id_subtipo'=>2, 'descr'=>'AUTOTANQUE CAP 8 M3', 'modelo'=>1990, 'serie'=>'150*4946C0', 'id_marca'=>8, 'activo'=>0, 'uso'=>'LIQ', 'id_clase'=>2]);
$this->insert($tableName, ['inmovilizado'=>'1000002577', 'propio'=>1, 'propietario'=>'PEMEX', 'alias'=>'13206', 'id_tipo'=>12, 'id_subtipo'=>null, 'descr'=>'UNIMOG', 'modelo'=>1992, 'serie'=>'WDB4271111W164836', 'id_marca'=>10, 'activo'=>0, 'uso'=>'PER', 'id_clase'=>2]);
$this->insert($tableName, ['inmovilizado'=>'1000002578', 'propio'=>1, 'propietario'=>'PEMEX', 'alias'=>'1211', 'id_tipo'=>12, 'id_subtipo'=>null, 'descr'=>'UNIMOG', 'modelo'=>1990, 'serie'=>'WDB4271111W164929', 'id_marca'=>10, 'activo'=>0, 'uso'=>'PER', 'id_clase'=>2]);
$this->insert($tableName, ['inmovilizado'=>'1000008421', 'propio'=>1, 'propietario'=>'PEMEX', 'alias'=>'8421', 'id_tipo'=>9, 'id_subtipo'=>null, 'descr'=>'REMOLQUE HIDROMEX PLATAFORMA MOD. HMP-28, 1981', 'modelo'=>1980, 'serie'=>'40242', 'id_marca'=>11, 'activo'=>1, 'uso'=>'MTL', 'id_clase'=>5]);
$this->insert($tableName, ['inmovilizado'=>'1000009531', 'propio'=>1, 'propietario'=>'PEMEX', 'alias'=>'13546', 'id_tipo'=>3, 'id_subtipo'=>6, 'descr'=>'R36003 PAQ E GMT 800 T/MAN', 'modelo'=>2002, 'serie'=>'3GBJC34RX2M100701', 'id_marca'=>4, 'activo'=>0, 'uso'=>'MTL', 'id_clase'=>1]);
$this->insert($tableName, ['inmovilizado'=>'1000010674', 'propio'=>1, 'propietario'=>'PEMEX', 'alias'=>'10674', 'id_tipo'=>3, 'id_subtipo'=>15, 'descr'=>'CAMION CHASIS CABINA CON PLATAFORMA 8 TON', 'modelo'=>2004, 'serie'=>'3HTMMAARX3N571051', 'id_marca'=>12, 'activo'=>0, 'uso'=>'MTL', 'id_clase'=>2]);
$this->insert($tableName, ['inmovilizado'=>'1000010748', 'propio'=>1, 'propietario'=>'PEMEX', 'alias'=>'10748', 'id_tipo'=>10, 'id_subtipo'=>9, 'descr'=>'TRACTO-CAMION 9200 N14 370 435 HP T/FYKK', 'modelo'=>2003, 'serie'=>'3HTNEAHT23N056614', 'id_marca'=>12, 'activo'=>0, 'uso'=>'LIQ, MAN, MTL', 'id_clase'=>3]);
$this->insert($tableName, ['inmovilizado'=>'1000011160', 'propio'=>1, 'propietario'=>'PEMEX', 'alias'=>'11160', 'id_tipo'=>5, 'id_subtipo'=>8, 'descr'=>'LOW-BOY PETROLERO', 'modelo'=>2005, 'serie'=>'3A9BL463551142007', 'id_marca'=>14, 'activo'=>1, 'uso'=>'MAN, MTL', 'id_clase'=>5]);
$this->insert($tableName, ['inmovilizado'=>'1000011485', 'propio'=>1, 'propietario'=>'PEMEX', 'alias'=>'11485', 'id_tipo'=>13, 'id_subtipo'=>11, 'descr'=>'EXPRESS VAN 4 PTRAS AUT/15 PASAJEROS', 'modelo'=>2009, 'serie'=>'1GAHG39K191117669', 'id_marca'=>4, 'activo'=>0, 'uso'=>'PER', 'id_clase'=>1]);
$this->insert($tableName, ['inmovilizado'=>'1000011487', 'propio'=>1, 'propietario'=>'PEMEX', 'alias'=>'11487', 'id_tipo'=>13, 'id_subtipo'=>11, 'descr'=>'EXPRESS VAN 4 PTRAS AUT/15 PASAJEROS', 'modelo'=>2009, 'serie'=>'1GAHG39K291105160', 'id_marca'=>4, 'activo'=>0, 'uso'=>'PER', 'id_clase'=>1]);
$this->insert($tableName, ['inmovilizado'=>'1000016824', 'propio'=>1, 'propietario'=>'PEMEX', 'alias'=>'16824', 'id_tipo'=>8, 'id_subtipo'=>17, 'descr'=>'DODGE RAM 1500', 'modelo'=>2010, 'serie'=>'3D7C51EK7AG557084', 'id_marca'=>4, 'activo'=>1, 'uso'=>'SUP', 'id_clase'=>1]);
$this->insert($tableName, ['inmovilizado'=>'1000016825', 'propio'=>1, 'propietario'=>'PEMEX', 'alias'=>'16825', 'id_tipo'=>8, 'id_subtipo'=>17, 'descr'=>'DODGE RAM 1500', 'modelo'=>2010, 'serie'=>'3D7C51EK0AG557024', 'id_marca'=>17, 'activo'=>0, 'uso'=>'SUP', 'id_clase'=>1]);
$this->insert($tableName, ['inmovilizado'=>'1000018960', 'propio'=>1, 'propietario'=>'PEMEX', 'alias'=>'18960', 'id_tipo'=>3, 'id_subtipo'=>3, 'descr'=>'PLATAFORMA BRAZO BIONICO', 'modelo'=>2012, 'serie'=>'3ALHC5CVXCDBT9179', 'id_marca'=>15, 'activo'=>1, 'uso'=>'MAN, MTL', 'id_clase'=>2]);
$this->insert($tableName, ['inmovilizado'=>'1000019163', 'propio'=>1, 'propietario'=>'PEMEX', 'alias'=>'19163', 'id_tipo'=>9, 'id_subtipo'=>null, 'descr'=>'REMOLQUE', 'modelo'=>2012, 'serie'=>'3A9PC4034C1142060', 'id_marca'=>14, 'activo'=>0, 'uso'=>'MTL', 'id_clase'=>5]);
$this->insert($tableName, ['inmovilizado'=>'1000002090', 'propio'=>1, 'propietario'=>'PEMEX', 'alias'=>'3553', 'id_tipo'=>3, 'id_subtipo'=>3, 'descr'=>'PLATAFORMA BRAZO BIONICO', 'modelo'=>1997, 'serie'=>'1504964C0', 'id_marca'=>8, 'activo'=>0, 'uso'=>'MAN, MTL', 'id_clase'=>2]);
$this->insert($tableName, ['inmovilizado'=>'1000015552', 'propio'=>1, 'propietario'=>'PEMEX', 'alias'=>'6839', 'id_tipo'=>2, 'id_subtipo'=>2, 'descr'=>'AUTOTANQUE 8M3', 'modelo'=>2008, 'serie'=>'3ALACYCS88DZ46216', 'id_marca'=>15, 'activo'=>0, 'uso'=>'LIQ', 'id_clase'=>2]);
$this->insert($tableName, ['inmovilizado'=>'1000000928', 'propio'=>1, 'propietario'=>'PEMEX', 'alias'=>'3498', 'id_tipo'=>14, 'id_subtipo'=>8, 'descr'=>'TIRO DIRECTO PETROLERO', 'modelo'=>1976, 'serie'=>'5050479', 'id_marca'=>5, 'activo'=>0, 'uso'=>'MAN', 'id_clase'=>3]);
$this->insert($tableName, ['inmovilizado'=>'1000002015', 'propio'=>1, 'propietario'=>'PEMEX', 'alias'=>'3501', 'id_tipo'=>10, 'id_subtipo'=>8, 'descr'=>'QUINTA RUEDA PETROLERA', 'modelo'=>1990, 'serie'=>'465818', 'id_marca'=>5, 'activo'=>0, 'uso'=>'MAN, MTL', 'id_clase'=>3]);
$this->insert($tableName, ['inmovilizado'=>'1000015551', 'propio'=>1, 'propietario'=>'PEMEX', 'alias'=>'6838', 'id_tipo'=>2, 'id_subtipo'=>2, 'descr'=>'AUTOTANQUE 8M3', 'modelo'=>2008, 'serie'=>'3ALACYCS98DZ46211', 'id_marca'=>15, 'activo'=>1, 'uso'=>'LIQ', 'id_clase'=>2]);
$this->insert($tableName, ['inmovilizado'=>'1000000927', 'propio'=>1, 'propietario'=>'PEMEX', 'alias'=>'3496', 'id_tipo'=>11, 'id_subtipo'=>null, 'descr'=>'UNIDAD DE PRESION VACIO 16 M3', 'modelo'=>1976, 'serie'=>'192783', 'id_marca'=>5, 'activo'=>0, 'uso'=>'LIQ', 'id_clase'=>3]);
$this->insert($tableName, ['inmovilizado'=>'1000000930', 'propio'=>1, 'propietario'=>'PEMEX', 'alias'=>'3560', 'id_tipo'=>14, 'id_subtipo'=>8, 'descr'=>'TIRO DIRECTO PETROLERO', 'modelo'=>1978, 'serie'=>'198570', 'id_marca'=>5, 'activo'=>0, 'uso'=>'MAN', 'id_clase'=>3]);
$this->insert($tableName, ['inmovilizado'=>'1000001987', 'propio'=>1, 'propietario'=>'PEMEX', 'alias'=>'1987', 'id_tipo'=>10, 'id_subtipo'=>8, 'descr'=>'QUINTA RUEDA PETROLERA', 'modelo'=>1990, 'serie'=>'465811', 'id_marca'=>5, 'activo'=>0, 'uso'=>'MAN', 'id_clase'=>3]);
$this->insert($tableName, ['inmovilizado'=>'1000001998', 'propio'=>1, 'propietario'=>'PEMEX', 'alias'=>'3502', 'id_tipo'=>10, 'id_subtipo'=>8, 'descr'=>'QUINTA RUEDA PETROLERA', 'modelo'=>1979, 'serie'=>'465817', 'id_marca'=>5, 'activo'=>0, 'uso'=>'MAN', 'id_clase'=>3]);
$this->insert($tableName, ['inmovilizado'=>'1000019154', 'propio'=>1, 'propietario'=>'PEMEX', 'alias'=>'19154', 'id_tipo'=>5, 'id_subtipo'=>8, 'descr'=>'CAMA BAJA', 'modelo'=>2012, 'serie'=>'3A9BC5033C1142051', 'id_marca'=>14, 'activo'=>1, 'uso'=>'MAN, MTL', 'id_clase'=>5]);
$this->insert($tableName, ['inmovilizado'=>'1000020084', 'propio'=>1, 'propietario'=>'PEMEX', 'alias'=>'20084', 'id_tipo'=>10, 'id_subtipo'=>8, 'descr'=>'QUINTA RUEDA PETROLERA', 'modelo'=>2014, 'serie'=>'1M2AX16Y5EM025913', 'id_marca'=>19, 'activo'=>1, 'uso'=>'MAN, MTL', 'id_clase'=>3]);
$this->insert($tableName, ['inmovilizado'=>'1000011305', 'propio'=>1, 'propietario'=>'PEMEX', 'alias'=>'11305', 'id_tipo'=>3, 'id_subtipo'=>15, 'descr'=>'PLATAFORMA CON REDILAS', 'modelo'=>2007, 'serie'=>'3FEKF36L77MA08833', 'id_marca'=>2, 'activo'=>0, 'uso'=>'MTL', 'id_clase'=>1]);
$this->insert($tableName, ['inmovilizado'=>'1000018993', 'propio'=>1, 'propietario'=>'PEMEX', 'alias'=>'18993', 'id_tipo'=>13, 'id_subtipo'=>11, 'descr'=>'EXPRESS VAN 4 PTRAS AUT/15 PASAJEROS', 'modelo'=>2012, 'serie'=>'1GAZG9FG7C1121076', 'id_marca'=>4, 'activo'=>0, 'uso'=>'PER', 'id_clase'=>1]);
$this->insert($tableName, ['inmovilizado'=>'1000018342', 'propio'=>1, 'propietario'=>'PEMEX', 'alias'=>'18342', 'id_tipo'=>8, 'id_subtipo'=>13, 'descr'=>'CAMIONETA PICK-UP 4 X 4', 'modelo'=>2011, 'serie'=>'1D7RW3GKXBS581034', 'id_marca'=>17, 'activo'=>1, 'uso'=>'SUP', 'id_clase'=>1]);
$this->insert($tableName, ['inmovilizado'=>'1000018988', 'propio'=>1, 'propietario'=>'PEMEX', 'alias'=>'18988', 'id_tipo'=>3, 'id_subtipo'=>7, 'descr'=>'CAMION CON CASETA Y PLATAFORMA', 'modelo'=>2012, 'serie'=>'3HAMPAFLXCL615050', 'id_marca'=>12, 'activo'=>0, 'uso'=>'PER', 'id_clase'=>2]);
$this->insert($tableName, ['inmovilizado'=>'1000008860', 'propio'=>1, 'propietario'=>'PEMEX', 'alias'=>'8860', 'id_tipo'=>13, 'id_subtipo'=>11, 'descr'=>'CAMIONETA TIPO VAN', 'modelo'=>2001, 'serie'=>'1GNFG15W411151371', 'id_marca'=>4, 'activo'=>0, 'uso'=>'PER', 'id_clase'=>1]);
$this->insert($tableName, ['inmovilizado'=>'1000019165', 'propio'=>1, 'propietario'=>'PEMEX', 'alias'=>'19165', 'id_tipo'=>9, 'id_subtipo'=>null, 'descr'=>'PLATAFORMA PLANA CON ROL TRASERO P/QUINTA RUEDA', 'modelo'=>2012, 'serie'=>'3A9PC4031C1142047', 'id_marca'=>14, 'activo'=>1, 'uso'=>null, 'id_clase'=>5]);
$this->insert($tableName, ['inmovilizado'=>'1000001982', 'propio'=>1, 'propietario'=>'PEMEX', 'alias'=>'1982', 'id_tipo'=>10, 'id_subtipo'=>8, 'descr'=>'QUINTA RUEDA PETROLERA', 'modelo'=>1990, 'serie'=>'465816', 'id_marca'=>5, 'activo'=>0, 'uso'=>'MAN', 'id_clase'=>3]);
$this->insert($tableName, ['inmovilizado'=>'11183288', 'propio'=>1, 'propietario'=>'PEMEX', 'alias'=>'4890', 'id_tipo'=>4, 'id_subtipo'=>null, 'descr'=>'GRUA', 'modelo'=>1982, 'serie'=>null, 'id_marca'=>1, 'activo'=>0, 'uso'=>'MAN', 'id_clase'=>4]);
$this->insert($tableName, ['inmovilizado'=>'211412232', 'propio'=>1, 'propietario'=>'PEMEX', 'alias'=>'4206', 'id_tipo'=>11, 'id_subtipo'=>null, 'descr'=>'UPV', 'modelo'=>1988, 'serie'=>null, 'id_marca'=>20, 'activo'=>1, 'uso'=>'LIQ', 'id_clase'=>5]);
$this->insert($tableName, ['inmovilizado'=>'1000010748-1', 'propio'=>1, 'propietario'=>'PEMEX', 'alias'=>'107481', 'id_tipo'=>11, 'id_subtipo'=>null, 'descr'=>'TANQUE DE PRESION Y VACIO 20M3 ', 'modelo'=>2003, 'serie'=>'3HTNEAHT23N056614', 'id_marca'=>12, 'activo'=>1, 'uso'=>'LIQ', 'id_clase'=>2]);
$this->insert($tableName, ['inmovilizado'=>'1000016230', 'propio'=>0, 'propietario'=>'PEMEX', 'alias'=>'16230', 'id_tipo'=>14, 'id_subtipo'=>8, 'descr'=>'TIRO DIRECTO PETROLERO', 'modelo'=>null, 'serie'=>null, 'id_marca'=>16, 'activo'=>0, 'uso'=>'MAN', 'id_clase'=>3]);
$this->insert($tableName, ['inmovilizado'=>'1000009798', 'propio'=>0, 'propietario'=>'PEMEX', 'alias'=>'9798', 'id_tipo'=>10, 'id_subtipo'=>null, 'descr'=>null, 'modelo'=>null, 'serie'=>null, 'id_marca'=>12, 'activo'=>1, 'uso'=>null, 'id_clase'=>3]);
$this->insert($tableName, ['inmovilizado'=>'1000017293', 'propio'=>1, 'propietario'=>'PEMEX', 'alias'=>'17293', 'id_tipo'=>8, 'id_subtipo'=>17, 'descr'=>null, 'modelo'=>null, 'serie'=>null, 'id_marca'=>4, 'activo'=>1, 'uso'=>'SUP', 'id_clase'=>1]);
$this->insert($tableName, ['inmovilizado'=>'1000016845', 'propio'=>1, 'propietario'=>'PEMEX', 'alias'=>'16845', 'id_tipo'=>8, 'id_subtipo'=>17, 'descr'=>'DODGE RAM 1500 BASE MANUAL 4X2', 'modelo'=>2010, 'serie'=>'3D7C51EK4AG557043', 'id_marca'=>17, 'activo'=>1, 'uso'=>'SUP', 'id_clase'=>1]);
$this->insert($tableName, ['inmovilizado'=>'1000000525', 'propio'=>1, 'propietario'=>'PEMEX', 'alias'=>'3572', 'id_tipo'=>3, 'id_subtipo'=>3, 'descr'=>'CAMION C/BRAZO HDCO.', 'modelo'=>1997, 'serie'=>'3FEXF80C4WJA00846', 'id_marca'=>2, 'activo'=>0, 'uso'=>'MAN, MTL', 'id_clase'=>2]);
$this->insert($tableName, ['inmovilizado'=>'1000001075', 'propio'=>1, 'propietario'=>'PEMEX', 'alias'=>'1075', 'id_tipo'=>5, 'id_subtipo'=>8, 'descr'=>'LOW-BOY', 'modelo'=>1987, 'serie'=>null, 'id_marca'=>7, 'activo'=>0, 'uso'=>'MTL', 'id_clase'=>5]);
$this->insert($tableName, ['inmovilizado'=>'1200015574', 'propio'=>1, 'propietario'=>'PEMEX', 'alias'=>'15574', 'id_tipo'=>7, 'id_subtipo'=>null, 'descr'=>'MONTACARGA', 'modelo'=>1992, 'serie'=>null, 'id_marca'=>9, 'activo'=>1, 'uso'=>'MTL', 'id_clase'=>4]);
$this->insert($tableName, ['inmovilizado'=>'1000016830', 'propio'=>1, 'propietario'=>'PEMEX', 'alias'=>'16830', 'id_tipo'=>8, 'id_subtipo'=>17, 'descr'=>'PICKUP', 'modelo'=>2010, 'serie'=>'3D7C51EK2AG557042', 'id_marca'=>17, 'activo'=>1, 'uso'=>'SUP', 'id_clase'=>1]);
$this->insert($tableName, ['inmovilizado'=>'1000012570', 'propio'=>1, 'propietario'=>'PEMEX', 'alias'=>'12570', 'id_tipo'=>13, 'id_subtipo'=>11, 'descr'=>'VAN EXPRESS', 'modelo'=>2003, 'serie'=>'1GAHG39U031154348', 'id_marca'=>4, 'activo'=>1, 'uso'=>null, 'id_clase'=>1]);
$this->insert($tableName, ['inmovilizado'=>'1000002405', 'propio'=>1, 'propietario'=>'PEMEX', 'alias'=>'2405', 'id_tipo'=>5, 'id_subtipo'=>8, 'descr'=>'LOW-BOY 50,000 KG', 'modelo'=>1977, 'serie'=>null, 'id_marca'=>9, 'activo'=>0, 'uso'=>'MTL, EQU, TBP', 'id_clase'=>5]);

        }
        


    }

    public function down()
    {
        
        $tableBase='uni_parque';
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