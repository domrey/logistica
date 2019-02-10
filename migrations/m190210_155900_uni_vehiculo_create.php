<?php

use yii\db\Migration;
use app\commands\templates\MyDbMigration;


class m190210_155900_uni_vehiculo_create extends MyDbMigration
{
   protected $tableName='uni_vehiculo';
/*
    public function up()
    {

    }

    public function down()
    {

    }
*/

    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
      switch ($this->driver) {
        case 'sqlite':
          $this->_safeUp_sqlite();
          break;
        case 'mysql':
          $this->_safeUp_mysql();
          break;
        default:
      }
    }

    public function safeDown()
    {
      switch ($this->driver) {
        case 'sqlite':
          $this->_safeDown_sqlite();
          break;
        case 'mysql':
          $this->_safeDown_mysql();
          break;
        default:
      }
    }

    public function _safeUp_sqlite()
    {
        $this->createTable($this->tableName, [
            'id'            => $this->primaryKey(),
            'inmovilizado'  => $this->string(12),
            'alias'         => $this->string(15),
            'id_marca'      => 'UNSIGNED INT REFERENCES uni_marca(id)',
            'id_tipo'       => 'UNSIGNED INT REFERENCES uni_tipo(id)',
            'id_clase'      => 'UNSIGNED INT REFERENCES uni_clase(id)',
            'id_denom' => 'UNSIGNED INT REFERENCES uni_denominacion(id)',
            'id_aditamento' => 'UNSIGNED INT REFERENCES uni_aditamento(id)',
            'descr'         => $this->string(128),
            'modelo'        => $this->integer()->unsigned(),
            'serie'         => $this->string(30),
            'condicion'      => $this->string(25),
            'uso'           => $this->string(15)->notNull(),
            'activo'        => $this->tinyInteger(1)->notNull()->defaultValue(1),
            'propio'        => $this->tinyInteger(1)->notNull()->defaultValue(1),
            'propietario'   => $this->string(30),
            'comentarios'   => $this->string(256),
        ]);
        $this->createIndex('IDX_inmovilizado_vehiculo', $this->tableName, 'inmovilizado');
        $this->createIndex('IDX_alias_vehiculo', $this->tableName, 'alias');
        $this->insertRows();
    }

    public function _safeUp_mysql()
    {

    }

    public function _safeDown_sqlite()
    {

    }

    public function _safeDown_mysql()
    {

    }

    public function insertRows()
    {
        $this->insert($this->tableName, ['inmovilizado'=>'11183288', 'alias'=>'4890', 'id_marca'=>1, 'id_tipo'=>14, 'id_clase'=>3, 'id_denom'=>12, 'id_aditamento'=>9, 'descr'=>'GRUA', 'modelo'=>1982, 'serie'=>null, 'condicion'=>'BAJA', 'uso'=>'MTL', 'activo'=>0, 'propio'=>1, 'propietario'=>'PEMEX', 'comentarios'=>null]);
        $this->insert($this->tableName, ['inmovilizado'=>'211412232', 'alias'=>'4206', 'id_marca'=>20, 'id_tipo'=>13, 'id_clase'=>3, 'id_denom'=>5, 'id_aditamento'=>9, 'descr'=>'REMOLQUE UPV 16 M3', 'modelo'=>1988, 'serie'=>null, 'condicion'=>'MALO', 'uso'=>'LIQ', 'activo'=>1, 'propio'=>1, 'propietario'=>'PEMEX', 'comentarios'=>null]);
        $this->insert($this->tableName, ['inmovilizado'=>'1000000525', 'alias'=>'3572', 'id_marca'=>2, 'id_tipo'=>3, 'id_clase'=>2, 'id_denom'=>12, 'id_aditamento'=>1, 'descr'=>'CAMION C/BRAZO HDCO.', 'modelo'=>1997, 'serie'=>'3FEXF80C4WJA00846', 'condicion'=>'BAJA', 'uso'=>'MTL', 'activo'=>0, 'propio'=>1, 'propietario'=>'PEMEX', 'comentarios'=>null]);
        $this->insert($this->tableName, ['inmovilizado'=>'1000000533', 'alias'=>'4202', 'id_marca'=>3, 'id_tipo'=>12, 'id_clase'=>3, 'id_denom'=>11, 'id_aditamento'=>9, 'descr'=>'REMOLQUE 60 TON.', 'modelo'=>1985, 'serie'=>'FM10344', 'condicion'=>'MALO', 'uso'=>'LIQ', 'activo'=>1, 'propio'=>1, 'propietario'=>'PEMEX', 'comentarios'=>null]);
        $this->insert($this->tableName, ['inmovilizado'=>'1000000565', 'alias'=>'565', 'id_marca'=>4, 'id_tipo'=>3, 'id_clase'=>2, 'id_denom'=>4, 'id_aditamento'=>4, 'descr'=>'AUTOTANQUE CAP 10 M3 KODIAK', 'modelo'=>1997, 'serie'=>'3GCM7H1J7VM501135', 'condicion'=>'BAJA', 'uso'=>'LIQ', 'activo'=>0, 'propio'=>1, 'propietario'=>'PEMEX', 'comentarios'=>null]);
        $this->insert($this->tableName, ['inmovilizado'=>'1000000927', 'alias'=>'3496', 'id_marca'=>5, 'id_tipo'=>13, 'id_clase'=>3, 'id_denom'=>4, 'id_aditamento'=>4, 'descr'=>'UNIDAD DE PRESION VACIO', 'modelo'=>1976, 'serie'=>'192783', 'condicion'=>'BAJA', 'uso'=>'LIQ', 'activo'=>0, 'propio'=>1, 'propietario'=>'PEMEX', 'comentarios'=>null]);
        $this->insert($this->tableName, ['inmovilizado'=>'1000000928', 'alias'=>'3498', 'id_marca'=>5, 'id_tipo'=>6, 'id_clase'=>3, 'id_denom'=>1, 'id_aditamento'=>9, 'descr'=>'TIRO DIRECTO PETROLERO', 'modelo'=>1976, 'serie'=>'5050479', 'condicion'=>'MALO', 'uso'=>'MAN MTL', 'activo'=>1, 'propio'=>1, 'propietario'=>'PEMEX', 'comentarios'=>null]);
        $this->insert($this->tableName, ['inmovilizado'=>'1000000930', 'alias'=>'3560', 'id_marca'=>5, 'id_tipo'=>6, 'id_clase'=>3, 'id_denom'=>1, 'id_aditamento'=>9, 'descr'=>'TIRO DIRECTO PETROLERO', 'modelo'=>1978, 'serie'=>'198570', 'condicion'=>'MALO', 'uso'=>'MAN MTL', 'activo'=>1, 'propio'=>1, 'propietario'=>'PEMEX', 'comentarios'=>null]);
        $this->insert($this->tableName, ['inmovilizado'=>'1000000931', 'alias'=>'3562', 'id_marca'=>5, 'id_tipo'=>6, 'id_clase'=>3, 'id_denom'=>1, 'id_aditamento'=>9, 'descr'=>'TIRO DIRECTO PETROLERO', 'modelo'=>1976, 'serie'=>'198564', 'condicion'=>'MALO', 'uso'=>'MAN MTL', 'activo'=>1, 'propio'=>1, 'propietario'=>'PEMEX', 'comentarios'=>null]);
        $this->insert($this->tableName, ['inmovilizado'=>'1000000979', 'alias'=>'3930', 'id_marca'=>3, 'id_tipo'=>12, 'id_clase'=>3, 'id_denom'=>11, 'id_aditamento'=>9, 'descr'=>'REMOLQUE DA-3930', 'modelo'=>1986, 'serie'=>'FM-10441', 'condicion'=>'MALO', 'uso'=>'MTL', 'activo'=>1, 'propio'=>1, 'propietario'=>'PEMEX', 'comentarios'=>null]);
        $this->insert($this->tableName, ['inmovilizado'=>'1000000980', 'alias'=>'3938', 'id_marca'=>3, 'id_tipo'=>13, 'id_clase'=>3, 'id_denom'=>5, 'id_aditamento'=>9, 'descr'=>'UPV', 'modelo'=>1986, 'serie'=>'FM-12513', 'condicion'=>'BAJA', 'uso'=>'LIQ', 'activo'=>0, 'propio'=>1, 'propietario'=>'PEMEX', 'comentarios'=>null]);
        $this->insert($this->tableName, ['inmovilizado'=>'1000001048', 'alias'=>'3926', 'id_marca'=>6, 'id_tipo'=>12, 'id_clase'=>3, 'id_denom'=>11, 'id_aditamento'=>9, 'descr'=>'REMOLQUE DA-3926', 'modelo'=>1982, 'serie'=>'82PG02P170', 'condicion'=>'MALO', 'uso'=>'MTL', 'activo'=>1, 'propio'=>1, 'propietario'=>'PEMEX', 'comentarios'=>null]);
        $this->insert($this->tableName, ['inmovilizado'=>'1000001049', 'alias'=>'3928', 'id_marca'=>6, 'id_tipo'=>12, 'id_clase'=>3, 'id_denom'=>11, 'id_aditamento'=>9, 'descr'=>'REMOLQUE 30 TON.', 'modelo'=>1982, 'serie'=>'82PG02P172', 'condicion'=>'MALO', 'uso'=>'MTL', 'activo'=>1, 'propio'=>1, 'propietario'=>'PEMEX', 'comentarios'=>null]);
        $this->insert($this->tableName, ['inmovilizado'=>'1000001070', 'alias'=>'1070', 'id_marca'=>7, 'id_tipo'=>12, 'id_clase'=>3, 'id_denom'=>11, 'id_aditamento'=>9, 'descr'=>'REMOLQUE', 'modelo'=>1987, 'serie'=>'58456', 'condicion'=>'BAJA', 'uso'=>'MTL', 'activo'=>0, 'propio'=>1, 'propietario'=>'PEMEX', 'comentarios'=>null]);
        $this->insert($this->tableName, ['inmovilizado'=>'1000001075', 'alias'=>'1075', 'id_marca'=>7, 'id_tipo'=>9, 'id_clase'=>3, 'id_denom'=>11, 'id_aditamento'=>9, 'descr'=>'LOW-BOY', 'modelo'=>1987, 'serie'=>null, 'condicion'=>'BAJA', 'uso'=>'MTL', 'activo'=>0, 'propio'=>1, 'propietario'=>'PEMEX', 'comentarios'=>null]);
        $this->insert($this->tableName, ['inmovilizado'=>'1000001156', 'alias'=>'1156', 'id_marca'=>5, 'id_tipo'=>6, 'id_clase'=>3, 'id_denom'=>1, 'id_aditamento'=>9, 'descr'=>'TIRO DIRECTO PETROLERO', 'modelo'=>1979, 'serie'=>'198557', 'condicion'=>'BUENO', 'uso'=>'MAN MTL', 'activo'=>1, 'propio'=>1, 'propietario'=>'PEMEX', 'comentarios'=>null]);
        $this->insert($this->tableName, ['inmovilizado'=>'1000001982', 'alias'=>'1982', 'id_marca'=>5, 'id_tipo'=>5, 'id_clase'=>3, 'id_denom'=>2, 'id_aditamento'=>9, 'descr'=>'QUINTA RUEDA PETROLERA', 'modelo'=>1990, 'serie'=>'465816', 'condicion'=>'REGULAR', 'uso'=>'MAN MTL', 'activo'=>1, 'propio'=>1, 'propietario'=>'PEMEX', 'comentarios'=>null]);
        $this->insert($this->tableName, ['inmovilizado'=>'1000001987', 'alias'=>'1987', 'id_marca'=>5, 'id_tipo'=>5, 'id_clase'=>3, 'id_denom'=>2, 'id_aditamento'=>9, 'descr'=>'QUINTA RUEDA PETROLERA', 'modelo'=>1990, 'serie'=>'465811', 'condicion'=>'MALO', 'uso'=>'MAN MTL', 'activo'=>1, 'propio'=>1, 'propietario'=>'PEMEX', 'comentarios'=>null]);
        $this->insert($this->tableName, ['inmovilizado'=>'1000001997', 'alias'=>'3507', 'id_marca'=>5, 'id_tipo'=>5, 'id_clase'=>3, 'id_denom'=>2, 'id_aditamento'=>5, 'descr'=>'QUINTA RUEDA PETROLERA', 'modelo'=>1979, 'serie'=>'465805', 'condicion'=>'MALO', 'uso'=>'MAN MTL LIQ', 'activo'=>1, 'propio'=>1, 'propietario'=>'PEMEX', 'comentarios'=>null]);
        $this->insert($this->tableName, ['inmovilizado'=>'1000001998', 'alias'=>'3502', 'id_marca'=>5, 'id_tipo'=>5, 'id_clase'=>3, 'id_denom'=>2, 'id_aditamento'=>9, 'descr'=>'QUINTA RUEDA PETROLERA', 'modelo'=>1979, 'serie'=>'465817', 'condicion'=>'MALO', 'uso'=>'MAN MTL', 'activo'=>1, 'propio'=>1, 'propietario'=>'PEMEX', 'comentarios'=>null]);
        $this->insert($this->tableName, ['inmovilizado'=>'1000002015', 'alias'=>'3501', 'id_marca'=>5, 'id_tipo'=>5, 'id_clase'=>3, 'id_denom'=>2, 'id_aditamento'=>9, 'descr'=>'QUINTA RUEDA PETROLERA', 'modelo'=>1990, 'serie'=>'465818', 'condicion'=>'MALO', 'uso'=>'MAN MTL', 'activo'=>1, 'propio'=>1, 'propietario'=>'PEMEX', 'comentarios'=>null]);
        $this->insert($this->tableName, ['inmovilizado'=>'1000002086', 'alias'=>'3492', 'id_marca'=>8, 'id_tipo'=>3, 'id_clase'=>2, 'id_denom'=>4, 'id_aditamento'=>4, 'descr'=>'AUTOTANQUE CAP 8 M3', 'modelo'=>1990, 'serie'=>'150*4946C0', 'condicion'=>'BAJA', 'uso'=>'LIQ', 'activo'=>0, 'propio'=>1, 'propietario'=>'PEMEX', 'comentarios'=>null]);
        $this->insert($this->tableName, ['inmovilizado'=>'1000002090', 'alias'=>'3553', 'id_marca'=>8, 'id_tipo'=>3, 'id_clase'=>2, 'id_denom'=>12, 'id_aditamento'=>9, 'descr'=>'CHASIS PLAT. / BR. HIDR.', 'modelo'=>1997, 'serie'=>'1504964C0', 'condicion'=>'BAJA', 'uso'=>'MTL', 'activo'=>0, 'propio'=>1, 'propietario'=>'PEMEX', 'comentarios'=>null]);
        $this->insert($this->tableName, ['inmovilizado'=>'1000002405', 'alias'=>'2405', 'id_marca'=>23, 'id_tipo'=>9, 'id_clase'=>3, 'id_denom'=>11, 'id_aditamento'=>9, 'descr'=>'LOW-BOY', 'modelo'=>1977, 'serie'=>null, 'condicion'=>'BAJA', 'uso'=>'MTL', 'activo'=>0, 'propio'=>1, 'propietario'=>'PEMEX', 'comentarios'=>null]);
        $this->insert($this->tableName, ['inmovilizado'=>'1000002577', 'alias'=>'13206', 'id_marca'=>10, 'id_tipo'=>16, 'id_clase'=>2, 'id_denom'=>7, 'id_aditamento'=>9, 'descr'=>'UNIMOG', 'modelo'=>1992, 'serie'=>'WDB4271111W164836', 'condicion'=>'BAJA', 'uso'=>'PER', 'activo'=>0, 'propio'=>1, 'propietario'=>'PEMEX', 'comentarios'=>null]);
        $this->insert($this->tableName, ['inmovilizado'=>'1000002578', 'alias'=>'1211', 'id_marca'=>10, 'id_tipo'=>16, 'id_clase'=>2, 'id_denom'=>7, 'id_aditamento'=>9, 'descr'=>'UNIMOG', 'modelo'=>1990, 'serie'=>'WDB4271111W164929', 'condicion'=>'BAJA', 'uso'=>'PER', 'activo'=>0, 'propio'=>1, 'propietario'=>'PEMEX', 'comentarios'=>null]);
        $this->insert($this->tableName, ['inmovilizado'=>'1000008421', 'alias'=>'8421', 'id_marca'=>11, 'id_tipo'=>12, 'id_clase'=>3, 'id_denom'=>11, 'id_aditamento'=>9, 'descr'=>'REMOLQUE HIDROMEX PLATAFORMA MOD. HMP-28, 1981', 'modelo'=>1980, 'serie'=>'40242', 'condicion'=>'MALO', 'uso'=>'MTL', 'activo'=>1, 'propio'=>1, 'propietario'=>'PEMEX', 'comentarios'=>null]);
        $this->insert($this->tableName, ['inmovilizado'=>'1000008860', 'alias'=>'8860', 'id_marca'=>4, 'id_tipo'=>8, 'id_clase'=>1, 'id_denom'=>8, 'id_aditamento'=>9, 'descr'=>'MINI VAN', 'modelo'=>2001, 'serie'=>'1GNFG15W411151371', 'condicion'=>'BAJA', 'uso'=>'PER', 'activo'=>0, 'propio'=>1, 'propietario'=>'PEMEX', 'comentarios'=>null]);
        $this->insert($this->tableName, ['inmovilizado'=>'1000009531', 'alias'=>'13546', 'id_marca'=>4, 'id_tipo'=>13, 'id_clase'=>1, 'id_denom'=>7, 'id_aditamento'=>2, 'descr'=>'CASETA 350 R36003 PAQ E GMT 800 T/MAN', 'modelo'=>2002, 'serie'=>'3GBJC34RX2M100701', 'condicion'=>'BAJA', 'uso'=>'PER', 'activo'=>0, 'propio'=>1, 'propietario'=>'PEMEX', 'comentarios'=>null]);
        $this->insert($this->tableName, ['inmovilizado'=>'1000010287', 'alias'=>'10287', 'id_marca'=>4, 'id_tipo'=>13, 'id_clase'=>1, 'id_denom'=>7, 'id_aditamento'=>2, 'descr'=>'CASETA 350', 'modelo'=>2003, 'serie'=>'3GBJC34R73M102035', 'condicion'=>'BAJA', 'uso'=>'PER', 'activo'=>0, 'propio'=>1, 'propietario'=>'PEMEX', 'comentarios'=>null]);
        $this->insert($this->tableName, ['inmovilizado'=>'1000010298', 'alias'=>'10298', 'id_marca'=>4, 'id_tipo'=>7, 'id_clase'=>1, 'id_denom'=>8, 'id_aditamento'=>9, 'descr'=>'EXPRESS VAN 4 PTRAS AUT/15 PASAJEROS', 'modelo'=>2003, 'serie'=>'1GAHG39U631118373', 'condicion'=>'BAJA', 'uso'=>'PER', 'activo'=>0, 'propio'=>1, 'propietario'=>'PEMEX', 'comentarios'=>null]);
        $this->insert($this->tableName, ['inmovilizado'=>'1000010674', 'alias'=>'10674', 'id_marca'=>12, 'id_tipo'=>11, 'id_clase'=>2, 'id_denom'=>6, 'id_aditamento'=>3, 'descr'=>'CAMION PLATAF. REDILERO', 'modelo'=>2004, 'serie'=>'3HTMMAARX3N571051', 'condicion'=>'BAJA', 'uso'=>'MTL', 'activo'=>0, 'propio'=>1, 'propietario'=>'PEMEX', 'comentarios'=>null]);
        $this->insert($this->tableName, ['inmovilizado'=>'1000010748', 'alias'=>'10748', 'id_marca'=>12, 'id_tipo'=>5, 'id_clase'=>3, 'id_denom'=>5, 'id_aditamento'=>9, 'descr'=>'TRACTO-CAMION 9200 N14 370 435 HP T/FYKK', 'modelo'=>2003, 'serie'=>'3HTNEAHT23N056614', 'condicion'=>'MALO', 'uso'=>'LIQ MTL', 'activo'=>1, 'propio'=>1, 'propietario'=>'PEMEX', 'comentarios'=>null]);
        $this->insert($this->tableName, ['inmovilizado'=>'1000011159', 'alias'=>'11159', 'id_marca'=>13, 'id_tipo'=>1, 'id_clase'=>2, 'id_denom'=>9, 'id_aditamento'=>9, 'descr'=>'AUTOBUS VOLVO', 'modelo'=>2005, 'serie'=>'3CEJ2X51055003130', 'condicion'=>'MALO', 'uso'=>'PER', 'activo'=>1, 'propio'=>1, 'propietario'=>'PEMEX', 'comentarios'=>null]);
        $this->insert($this->tableName, ['inmovilizado'=>'1000011160', 'alias'=>'11160', 'id_marca'=>14, 'id_tipo'=>9, 'id_clase'=>3, 'id_denom'=>11, 'id_aditamento'=>9, 'descr'=>'PLATAFORMA TIPO CAMA BAJA CUELLO FIJO DE ENGANCHE', 'modelo'=>2005, 'serie'=>'3A9BL463551142007', 'condicion'=>'REGULAR', 'uso'=>'MTL', 'activo'=>1, 'propio'=>1, 'propietario'=>'PEMEX', 'comentarios'=>null]);
        $this->insert($this->tableName, ['inmovilizado'=>'1000011305', 'alias'=>'11305', 'id_marca'=>2, 'id_tipo'=>11, 'id_clase'=>1, 'id_denom'=>6, 'id_aditamento'=>3, 'descr'=>'PLATAFORMA CON REDILAS', 'modelo'=>2007, 'serie'=>'3FEKF36L77MA08833', 'condicion'=>'MALO', 'uso'=>'MTL', 'activo'=>1, 'propio'=>1, 'propietario'=>'PEMEX', 'comentarios'=>null]);
        $this->insert($this->tableName, ['inmovilizado'=>'1000011485', 'alias'=>'11485', 'id_marca'=>4, 'id_tipo'=>7, 'id_clase'=>1, 'id_denom'=>8, 'id_aditamento'=>9, 'descr'=>'EXPRESS VAN 4 PTRAS AUT/15 PASAJEROS', 'modelo'=>2009, 'serie'=>'1GAHG39K191117669', 'condicion'=>'BAJA', 'uso'=>'PER', 'activo'=>0, 'propio'=>1, 'propietario'=>'PEMEX', 'comentarios'=>null]);
        $this->insert($this->tableName, ['inmovilizado'=>'1000011486', 'alias'=>'11486', 'id_marca'=>4, 'id_tipo'=>7, 'id_clase'=>1, 'id_denom'=>8, 'id_aditamento'=>9, 'descr'=>'EXPRESS VAN 4 PTRAS AUT/15 PASAJEROS', 'modelo'=>2009, 'serie'=>'1GAHG39K591105184', 'condicion'=>'BAJA', 'uso'=>'PER', 'activo'=>0, 'propio'=>1, 'propietario'=>'PEMEX', 'comentarios'=>null]);
        $this->insert($this->tableName, ['inmovilizado'=>'1000011487', 'alias'=>'11487', 'id_marca'=>4, 'id_tipo'=>7, 'id_clase'=>1, 'id_denom'=>8, 'id_aditamento'=>9, 'descr'=>'EXPRESS VAN 4 PTRAS AUT/15 PASAJEROS', 'modelo'=>2009, 'serie'=>'1GAHG39K291105160', 'condicion'=>'BAJA', 'uso'=>'PER', 'activo'=>0, 'propio'=>1, 'propietario'=>'PEMEX', 'comentarios'=>null]);
        $this->insert($this->tableName, ['inmovilizado'=>'1000011488', 'alias'=>'11488', 'id_marca'=>4, 'id_tipo'=>7, 'id_clase'=>1, 'id_denom'=>8, 'id_aditamento'=>9, 'descr'=>'EXPRESS VAN 4 PTRAS AUT/15 PASAJEROS', 'modelo'=>2009, 'serie'=>'1GAHG39K191116201', 'condicion'=>'BAJA', 'uso'=>'PER', 'activo'=>0, 'propio'=>1, 'propietario'=>'PEMEX', 'comentarios'=>null]);
        $this->insert($this->tableName, ['inmovilizado'=>'1000012570', 'alias'=>'12570', 'id_marca'=>4, 'id_tipo'=>7, 'id_clase'=>1, 'id_denom'=>8, 'id_aditamento'=>9, 'descr'=>'VAN EXPRESS', 'modelo'=>2003, 'serie'=>'1GAHG39U031154348', 'condicion'=>'REGULAR', 'uso'=>'PER', 'activo'=>1, 'propio'=>1, 'propietario'=>'PEMEX', 'comentarios'=>null]);
        $this->insert($this->tableName, ['inmovilizado'=>'1000012615', 'alias'=>'12615', 'id_marca'=>12, 'id_tipo'=>5, 'id_clase'=>3, 'id_denom'=>3, 'id_aditamento'=>9, 'descr'=>'QUINTA RUEDA CON BRAZO HIDRAULICO', 'modelo'=>2004, 'serie'=>'3HSNEAPT54N088576', 'condicion'=>'REGULAR', 'uso'=>'MTL MAN', 'activo'=>1, 'propio'=>1, 'propietario'=>'PEMEX', 'comentarios'=>null]);
        $this->insert($this->tableName, ['inmovilizado'=>'1000014765', 'alias'=>'14765', 'id_marca'=>12, 'id_tipo'=>2, 'id_clase'=>2, 'id_denom'=>9, 'id_aditamento'=>9, 'descr'=>'UNIDAD DE TRANSPORTE DE PERSONAL (MICROBUS)', 'modelo'=>2008, 'serie'=>'3HVBZAAN38N694453', 'condicion'=>'REGULAR', 'uso'=>'PER', 'activo'=>1, 'propio'=>1, 'propietario'=>'PEMEX', 'comentarios'=>null]);
        $this->insert($this->tableName, ['inmovilizado'=>'1000015551', 'alias'=>'6838', 'id_marca'=>15, 'id_tipo'=>3, 'id_clase'=>2, 'id_denom'=>4, 'id_aditamento'=>4, 'descr'=>'AUTOTANQUE CAP 8M3', 'modelo'=>2008, 'serie'=>'3ALACYCS98DZ46211', 'condicion'=>'REGULAR', 'uso'=>'LIQ', 'activo'=>1, 'propio'=>1, 'propietario'=>'PEMEX', 'comentarios'=>null]);
        $this->insert($this->tableName, ['inmovilizado'=>'1000015552', 'alias'=>'6839', 'id_marca'=>15, 'id_tipo'=>3, 'id_clase'=>2, 'id_denom'=>4, 'id_aditamento'=>4, 'descr'=>'AUTOTANQUE CAP 8 M3', 'modelo'=>2008, 'serie'=>'3ALACYCS88DZ46216', 'condicion'=>'REGULAR', 'uso'=>'LIQ', 'activo'=>1, 'propio'=>1, 'propietario'=>'PEMEX', 'comentarios'=>null]);
        $this->insert($this->tableName, ['inmovilizado'=>'1000015633', 'alias'=>'15633', 'id_marca'=>12, 'id_tipo'=>5, 'id_clase'=>3, 'id_denom'=>3, 'id_aditamento'=>9, 'descr'=>'QUINTA RUEDA CARRETERA', 'modelo'=>2008, 'serie'=>'3HSCEAPT18N680280', 'condicion'=>'REGULAR', 'uso'=>'MTL', 'activo'=>1, 'propio'=>1, 'propietario'=>'PEMEX', 'comentarios'=>null]);
        $this->insert($this->tableName, ['inmovilizado'=>'1000016161', 'alias'=>'16161', 'id_marca'=>15, 'id_tipo'=>3, 'id_clase'=>2, 'id_denom'=>4, 'id_aditamento'=>4, 'descr'=>'CHASIS CABINA CON AUTOTANQUE CAP. 8 M3', 'modelo'=>2009, 'serie'=>'3ALACYCS29DAH5670', 'condicion'=>'REGULAR', 'uso'=>'LIQ', 'activo'=>1, 'propio'=>1, 'propietario'=>'PEMEX', 'comentarios'=>null]);
        $this->insert($this->tableName, ['inmovilizado'=>'1000016183', 'alias'=>'16183', 'id_marca'=>5, 'id_tipo'=>5, 'id_clase'=>3, 'id_denom'=>3, 'id_aditamento'=>1, 'descr'=>'QUINTA RUEDA CARRETERA', 'modelo'=>2009, 'serie'=>'3WKDD40XX9F826154', 'condicion'=>'REGULAR', 'uso'=>'MTL', 'activo'=>1, 'propio'=>1, 'propietario'=>'PEMEX', 'comentarios'=>null]);
        $this->insert($this->tableName, ['inmovilizado'=>'1000016185', 'alias'=>'16185', 'id_marca'=>5, 'id_tipo'=>5, 'id_clase'=>3, 'id_denom'=>3, 'id_aditamento'=>9, 'descr'=>'QUINTA RUEDA CARRETERA', 'modelo'=>2009, 'serie'=>'3WKDD40X79F826158', 'condicion'=>'REGULAR', 'uso'=>'MTL', 'activo'=>1, 'propio'=>1, 'propietario'=>'PEMEX', 'comentarios'=>null]);
        $this->insert($this->tableName, ['inmovilizado'=>'1000016192', 'alias'=>'16192', 'id_marca'=>15, 'id_tipo'=>2, 'id_clase'=>2, 'id_denom'=>9, 'id_aditamento'=>9, 'descr'=>'MICROBUS 25 PASAJEROS MOD. 2009', 'modelo'=>2009, 'serie'=>'4UZACRCS39CAK0492', 'condicion'=>'REGULAR', 'uso'=>'PER', 'activo'=>1, 'propio'=>1, 'propietario'=>'PEMEX', 'comentarios'=>null]);
        $this->insert($this->tableName, ['inmovilizado'=>'1000016193', 'alias'=>'16193', 'id_marca'=>15, 'id_tipo'=>2, 'id_clase'=>2, 'id_denom'=>9, 'id_aditamento'=>9, 'descr'=>'MICROBUS 25 PASAJEROS MOD. 2009', 'modelo'=>2009, 'serie'=>'4UZACRCS19CAK0491', 'condicion'=>'REGULAR', 'uso'=>'PER', 'activo'=>1, 'propio'=>1, 'propietario'=>'PEMEX', 'comentarios'=>null]);
        $this->insert($this->tableName, ['inmovilizado'=>'1000016202', 'alias'=>'16202', 'id_marca'=>16, 'id_tipo'=>5, 'id_clase'=>3, 'id_denom'=>2, 'id_aditamento'=>9, 'descr'=>'QUINTA RUEDA PETROLERA', 'modelo'=>2009, 'serie'=>'5KJJASAV6APAM1951', 'condicion'=>'REGULAR', 'uso'=>'MTL MAN', 'activo'=>1, 'propio'=>1, 'propietario'=>'PEMEX', 'comentarios'=>null]);
        $this->insert($this->tableName, ['inmovilizado'=>'1000016823', 'alias'=>'16823', 'id_marca'=>4, 'id_tipo'=>4, 'id_clase'=>1, 'id_denom'=>10, 'id_aditamento'=>9, 'descr'=>'DODGE RAM 1500 BASE MANUAL 4X2', 'modelo'=>2010, 'serie'=>'3D7C51EK1AG557050', 'condicion'=>'BAJA', 'uso'=>'SUP', 'activo'=>0, 'propio'=>1, 'propietario'=>'PEMEX', 'comentarios'=>null]);
        $this->insert($this->tableName, ['inmovilizado'=>'1000016824', 'alias'=>'16824', 'id_marca'=>4, 'id_tipo'=>4, 'id_clase'=>1, 'id_denom'=>10, 'id_aditamento'=>9, 'descr'=>'CAMIONETA TIPO PICK UP, RAM 1500 ST, 4 X 2', 'modelo'=>2010, 'serie'=>'3D7C51EK7AG557084', 'condicion'=>'BUENO', 'uso'=>'SUP', 'activo'=>1, 'propio'=>1, 'propietario'=>'PEMEX', 'comentarios'=>null]);
        $this->insert($this->tableName, ['inmovilizado'=>'1000016825', 'alias'=>'16825', 'id_marca'=>17, 'id_tipo'=>4, 'id_clase'=>1, 'id_denom'=>10, 'id_aditamento'=>9, 'descr'=>'CAMIONETA TIPO PICK UP, RAM 1500 ST, 4 X 2', 'modelo'=>2010, 'serie'=>'3D7C51EK0AG557024', 'condicion'=>'BAJA', 'uso'=>'SUP', 'activo'=>0, 'propio'=>1, 'propietario'=>'PEMEX', 'comentarios'=>null]);
        $this->insert($this->tableName, ['inmovilizado'=>'1000016830', 'alias'=>'16830', 'id_marca'=>17, 'id_tipo'=>4, 'id_clase'=>1, 'id_denom'=>10, 'id_aditamento'=>9, 'descr'=>'PICK-UP', 'modelo'=>2010, 'serie'=>'3D7C51EK2AG557042', 'condicion'=>'REGULAR', 'uso'=>'SUP', 'activo'=>1, 'propio'=>1, 'propietario'=>'PEMEX', 'comentarios'=>null]);
        $this->insert($this->tableName, ['inmovilizado'=>'1000016845', 'alias'=>'16845', 'id_marca'=>17, 'id_tipo'=>4, 'id_clase'=>1, 'id_denom'=>10, 'id_aditamento'=>9, 'descr'=>'DODGE RAM 1500 BASE MANUAL 4X2', 'modelo'=>2010, 'serie'=>'3D7C51EK4AG557043', 'condicion'=>'REGULAR', 'uso'=>'SUP', 'activo'=>1, 'propio'=>1, 'propietario'=>'PEMEX', 'comentarios'=>null]);
        $this->insert($this->tableName, ['inmovilizado'=>'1000017293', 'alias'=>'17293', 'id_marca'=>4, 'id_tipo'=>4, 'id_clase'=>1, 'id_denom'=>10, 'id_aditamento'=>9, 'descr'=>'PICK-UP CHEYENNE', 'modelo'=>null, 'serie'=>null, 'condicion'=>'REGULAR', 'uso'=>'SUP', 'activo'=>1, 'propio'=>1, 'propietario'=>'PEMEX', 'comentarios'=>null]);
        $this->insert($this->tableName, ['inmovilizado'=>'1000018118', 'alias'=>'18118', 'id_marca'=>18, 'id_tipo'=>8, 'id_clase'=>1, 'id_denom'=>8, 'id_aditamento'=>9, 'descr'=>'URVAN 15 PASAJEROS ', 'modelo'=>2010, 'serie'=>'JN1AE56S2AX013601', 'condicion'=>'BUENO', 'uso'=>'PER', 'activo'=>1, 'propio'=>1, 'propietario'=>'PEMEX', 'comentarios'=>null]);
        $this->insert($this->tableName, ['inmovilizado'=>'1000018123', 'alias'=>'18123', 'id_marca'=>18, 'id_tipo'=>8, 'id_clase'=>1, 'id_denom'=>8, 'id_aditamento'=>9, 'descr'=>'CAMIONETA TODO TIPO', 'modelo'=>2010, 'serie'=>'JN1AE56S3AX013588', 'condicion'=>'MALO', 'uso'=>'PER', 'activo'=>1, 'propio'=>1, 'propietario'=>'PEMEX', 'comentarios'=>null]);
        $this->insert($this->tableName, ['inmovilizado'=>'1000018342', 'alias'=>'18342', 'id_marca'=>21, 'id_tipo'=>4, 'id_clase'=>1, 'id_denom'=>10, 'id_aditamento'=>9, 'descr'=>'CAMIONETA PICK-UP 4 X 4', 'modelo'=>2011, 'serie'=>'1D7RW3GKXBS581034', 'condicion'=>'REGULAR', 'uso'=>'SUP', 'activo'=>1, 'propio'=>1, 'propietario'=>'PEMEX', 'comentarios'=>null]);
        $this->insert($this->tableName, ['inmovilizado'=>'1000018960', 'alias'=>'18960', 'id_marca'=>15, 'id_tipo'=>11, 'id_clase'=>2, 'id_denom'=>12, 'id_aditamento'=>1, 'descr'=>'CHASIS PLAT. / BR. HIDR.', 'modelo'=>2012, 'serie'=>'3ALHC5CVXCDBT9179', 'condicion'=>'BUENO', 'uso'=>'MAN MTL', 'activo'=>1, 'propio'=>1, 'propietario'=>'PEMEX', 'comentarios'=>null]);
        $this->insert($this->tableName, ['inmovilizado'=>'1000018988', 'alias'=>'18988', 'id_marca'=>12, 'id_tipo'=>13, 'id_clase'=>2, 'id_denom'=>7, 'id_aditamento'=>2, 'descr'=>'CAMION CON CASETA Y PLATAFORMA', 'modelo'=>2012, 'serie'=>'3HAMPAFLXCL615050', 'condicion'=>'BUENO', 'uso'=>'PER MTL', 'activo'=>1, 'propio'=>1, 'propietario'=>'PEMEX', 'comentarios'=>null]);
        $this->insert($this->tableName, ['inmovilizado'=>'1000018993', 'alias'=>'18993', 'id_marca'=>4, 'id_tipo'=>7, 'id_clase'=>1, 'id_denom'=>8, 'id_aditamento'=>9, 'descr'=>'EXPRESS VAN 4 PTRAS AUT/15 PASAJEROS', 'modelo'=>2012, 'serie'=>'1GAZG9FG7C1121076', 'condicion'=>'REGULAR', 'uso'=>'PER', 'activo'=>1, 'propio'=>1, 'propietario'=>'PEMEX', 'comentarios'=>null]);
        $this->insert($this->tableName, ['inmovilizado'=>'1000019154', 'alias'=>'19154', 'id_marca'=>14, 'id_tipo'=>12, 'id_clase'=>3, 'id_denom'=>11, 'id_aditamento'=>9, 'descr'=>'PLATAFORMA PLANA CON ROL TRASERO, MODELO 2012', 'modelo'=>2012, 'serie'=>'3A9BC5033C1142051', 'condicion'=>'BUENO', 'uso'=>'MTL', 'activo'=>1, 'propio'=>1, 'propietario'=>'PEMEX', 'comentarios'=>null]);
        $this->insert($this->tableName, ['inmovilizado'=>'1000019163', 'alias'=>'19163', 'id_marca'=>14, 'id_tipo'=>12, 'id_clase'=>3, 'id_denom'=>11, 'id_aditamento'=>9, 'descr'=>'PLATAFORMA PLANA CON ROL TRASERO, MODELO 2012', 'modelo'=>2012, 'serie'=>'3A9PC4034C1142060', 'condicion'=>'BUENO', 'uso'=>'MTL', 'activo'=>1, 'propio'=>1, 'propietario'=>'PEMEX', 'comentarios'=>null]);
        $this->insert($this->tableName, ['inmovilizado'=>'1000019165', 'alias'=>'19165', 'id_marca'=>14, 'id_tipo'=>12, 'id_clase'=>3, 'id_denom'=>11, 'id_aditamento'=>9, 'descr'=>'PLATAFORMA PLANA CON ROL TRASERO P/QUINTA RUEDA', 'modelo'=>2012, 'serie'=>'3A9PC4031C1142047', 'condicion'=>'BUENO', 'uso'=>'MTL', 'activo'=>1, 'propio'=>1, 'propietario'=>'PEMEX', 'comentarios'=>null]);
        $this->insert($this->tableName, ['inmovilizado'=>'1000019515', 'alias'=>'19515', 'id_marca'=>15, 'id_tipo'=>11, 'id_clase'=>2, 'id_denom'=>12, 'id_aditamento'=>1, 'descr'=>'CHASIS PLAT. / BR. HIDR.', 'modelo'=>2012, 'serie'=>'3ALHC5CVXCDBT9182', 'condicion'=>'BUENO', 'uso'=>'MTL', 'activo'=>1, 'propio'=>1, 'propietario'=>'PEMEX', 'comentarios'=>null]);
        $this->insert($this->tableName, ['inmovilizado'=>'1000020084', 'alias'=>'20084', 'id_marca'=>19, 'id_tipo'=>5, 'id_clase'=>3, 'id_denom'=>2, 'id_aditamento'=>9, 'descr'=>'QUINTA RUEDA PETROLERA', 'modelo'=>2014, 'serie'=>'1M2AX16Y5EM025913', 'condicion'=>'BUENO', 'uso'=>'MTL MAN', 'activo'=>1, 'propio'=>1, 'propietario'=>'PEMEX', 'comentarios'=>null]);
        $this->insert($this->tableName, ['inmovilizado'=>'1200015574', 'alias'=>'15574', 'id_marca'=>23, 'id_tipo'=>15, 'id_clase'=>5, 'id_denom'=>13, 'id_aditamento'=>9, 'descr'=>'MONTACARGA', 'modelo'=>1992, 'serie'=>null, 'condicion'=>'MALO', 'uso'=>'MTL', 'activo'=>1, 'propio'=>1, 'propietario'=>'PEMEX', 'comentarios'=>null]);
        $this->insert($this->tableName, ['inmovilizado'=>'1000010748-1', 'alias'=>'10748-1', 'id_marca'=>12, 'id_tipo'=>13, 'id_clase'=>2, 'id_denom'=>5, 'id_aditamento'=>5, 'descr'=>'UNIDAD DE PRESIÓN Y VACIO (REMOLQUE)', 'modelo'=>2003, 'serie'=>'3HTNEAHT23N056614', 'condicion'=>'MALO', 'uso'=>'LIQ', 'activo'=>1, 'propio'=>1, 'propietario'=>'PEMEX', 'comentarios'=>null]);
        $this->insert($this->tableName, ['inmovilizado'=>'1000016230', 'alias'=>'16230', 'id_marca'=>16, 'id_tipo'=>5, 'id_clase'=>3, 'id_denom'=>1, 'id_aditamento'=>9, 'descr'=>'TIRO DIRECTO PETROLERO', 'modelo'=>null, 'serie'=>null, 'condicion'=>'BUENO', 'uso'=>'MAN MTL', 'activo'=>1, 'propio'=>0, 'propietario'=>'PEMEX', 'comentarios'=>'PRESTADA DE REYNOSA']);
        $this->insert($this->tableName, ['inmovilizado'=>'1000009798', 'alias'=>'9798', 'id_marca'=>12, 'id_tipo'=>5, 'id_clase'=>3, 'id_denom'=>3, 'id_aditamento'=>9, 'descr'=>'QUINTA RUEDA', 'modelo'=>null, 'serie'=>null, 'condicion'=>'0', 'uso'=>'MTL', 'activo'=>1, 'propio'=>0, 'propietario'=>'PEMEX', 'comentarios'=>'PRESTADA POR OPERACION DE POZOS']);

    }
}
