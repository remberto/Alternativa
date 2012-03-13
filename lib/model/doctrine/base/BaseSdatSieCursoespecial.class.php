<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('SdatSieCursoespecial', 'doctrine');

/**
 * BaseSdatSieCursoespecial
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $cod_ue_id
 * @property integer $sub_cea_id
 * @property integer $gestion_id
 * @property integer $operativo_id
 * @property integer $periodo_id
 * @property integer $nivel_id
 * @property integer $ciclo_id
 * @property integer $grado_id
 * @property string $paralelo
 * @property integer $discapacidad_id
 * @property integer $multigrado
 * @property integer $turno_id
 * @property integer $desayuno_escolar
 * @property integer $fin_des_escolar
 * @property integer $nro_materias
 * @property integer $consolidado
 * @property DatEspDiscapacidad $DatEspDiscapacidad
 * @property ClaFinanciamiento $ClaFinanciamiento
 * @property ClaGrado $ClaGrado
 * @property ClaGrado $ClaGrado_4
 * @property ClaGrado $ClaGrado_5
 * @property ClaTurno $ClaTurno
 * @property SdatRueUnidadEducativa $SdatRueUnidadEducativa
 * @property SdatRueUnidadEducativa $SdatRueUnidadEducativa_8
 * @property SdatRueUnidadEducativa $SdatRueUnidadEducativa_9
 * 
 * @method string                 getCodUeId()                  Returns the current record's "cod_ue_id" value
 * @method integer                getSubCeaId()                 Returns the current record's "sub_cea_id" value
 * @method integer                getGestionId()                Returns the current record's "gestion_id" value
 * @method integer                getOperativoId()              Returns the current record's "operativo_id" value
 * @method integer                getPeriodoId()                Returns the current record's "periodo_id" value
 * @method integer                getNivelId()                  Returns the current record's "nivel_id" value
 * @method integer                getCicloId()                  Returns the current record's "ciclo_id" value
 * @method integer                getGradoId()                  Returns the current record's "grado_id" value
 * @method string                 getParalelo()                 Returns the current record's "paralelo" value
 * @method integer                getDiscapacidadId()           Returns the current record's "discapacidad_id" value
 * @method integer                getMultigrado()               Returns the current record's "multigrado" value
 * @method integer                getTurnoId()                  Returns the current record's "turno_id" value
 * @method integer                getDesayunoEscolar()          Returns the current record's "desayuno_escolar" value
 * @method integer                getFinDesEscolar()            Returns the current record's "fin_des_escolar" value
 * @method integer                getNroMaterias()              Returns the current record's "nro_materias" value
 * @method integer                getConsolidado()              Returns the current record's "consolidado" value
 * @method DatEspDiscapacidad     getDatEspDiscapacidad()       Returns the current record's "DatEspDiscapacidad" value
 * @method ClaFinanciamiento      getClaFinanciamiento()        Returns the current record's "ClaFinanciamiento" value
 * @method ClaGrado               getClaGrado()                 Returns the current record's "ClaGrado" value
 * @method ClaGrado               getClaGrado4()                Returns the current record's "ClaGrado_4" value
 * @method ClaGrado               getClaGrado5()                Returns the current record's "ClaGrado_5" value
 * @method ClaTurno               getClaTurno()                 Returns the current record's "ClaTurno" value
 * @method SdatRueUnidadEducativa getSdatRueUnidadEducativa()   Returns the current record's "SdatRueUnidadEducativa" value
 * @method SdatRueUnidadEducativa getSdatRueUnidadEducativa8()  Returns the current record's "SdatRueUnidadEducativa_8" value
 * @method SdatRueUnidadEducativa getSdatRueUnidadEducativa9()  Returns the current record's "SdatRueUnidadEducativa_9" value
 * @method SdatSieCursoespecial   setCodUeId()                  Sets the current record's "cod_ue_id" value
 * @method SdatSieCursoespecial   setSubCeaId()                 Sets the current record's "sub_cea_id" value
 * @method SdatSieCursoespecial   setGestionId()                Sets the current record's "gestion_id" value
 * @method SdatSieCursoespecial   setOperativoId()              Sets the current record's "operativo_id" value
 * @method SdatSieCursoespecial   setPeriodoId()                Sets the current record's "periodo_id" value
 * @method SdatSieCursoespecial   setNivelId()                  Sets the current record's "nivel_id" value
 * @method SdatSieCursoespecial   setCicloId()                  Sets the current record's "ciclo_id" value
 * @method SdatSieCursoespecial   setGradoId()                  Sets the current record's "grado_id" value
 * @method SdatSieCursoespecial   setParalelo()                 Sets the current record's "paralelo" value
 * @method SdatSieCursoespecial   setDiscapacidadId()           Sets the current record's "discapacidad_id" value
 * @method SdatSieCursoespecial   setMultigrado()               Sets the current record's "multigrado" value
 * @method SdatSieCursoespecial   setTurnoId()                  Sets the current record's "turno_id" value
 * @method SdatSieCursoespecial   setDesayunoEscolar()          Sets the current record's "desayuno_escolar" value
 * @method SdatSieCursoespecial   setFinDesEscolar()            Sets the current record's "fin_des_escolar" value
 * @method SdatSieCursoespecial   setNroMaterias()              Sets the current record's "nro_materias" value
 * @method SdatSieCursoespecial   setConsolidado()              Sets the current record's "consolidado" value
 * @method SdatSieCursoespecial   setDatEspDiscapacidad()       Sets the current record's "DatEspDiscapacidad" value
 * @method SdatSieCursoespecial   setClaFinanciamiento()        Sets the current record's "ClaFinanciamiento" value
 * @method SdatSieCursoespecial   setClaGrado()                 Sets the current record's "ClaGrado" value
 * @method SdatSieCursoespecial   setClaGrado4()                Sets the current record's "ClaGrado_4" value
 * @method SdatSieCursoespecial   setClaGrado5()                Sets the current record's "ClaGrado_5" value
 * @method SdatSieCursoespecial   setClaTurno()                 Sets the current record's "ClaTurno" value
 * @method SdatSieCursoespecial   setSdatRueUnidadEducativa()   Sets the current record's "SdatRueUnidadEducativa" value
 * @method SdatSieCursoespecial   setSdatRueUnidadEducativa8()  Sets the current record's "SdatRueUnidadEducativa_8" value
 * @method SdatSieCursoespecial   setSdatRueUnidadEducativa9()  Sets the current record's "SdatRueUnidadEducativa_9" value
 * 
 * @package    alternativa
 * @subpackage model
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseSdatSieCursoespecial extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('sdat_sie_cursoespecial');
        $this->hasColumn('cod_ue_id', 'string', 8, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '8',
             ));
        $this->hasColumn('sub_cea_id', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('gestion_id', 'integer', 2, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '2',
             ));
        $this->hasColumn('operativo_id', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '1',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('periodo_id', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('nivel_id', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('ciclo_id', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('grado_id', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('paralelo', 'string', 2, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '2',
             ));
        $this->hasColumn('discapacidad_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('multigrado', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('turno_id', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('desayuno_escolar', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('fin_des_escolar', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('nro_materias', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('consolidado', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('DatEspDiscapacidad', array(
             'local' => 'discapacidad_id',
             'foreign' => 'discapacidad_id'));

        $this->hasOne('ClaFinanciamiento', array(
             'local' => 'fin_des_escolar',
             'foreign' => 'id_financiamiento'));

        $this->hasOne('ClaGrado', array(
             'local' => 'grado_id',
             'foreign' => 'id_grado'));

        $this->hasOne('ClaGrado as ClaGrado_4', array(
             'local' => 'ciclo_id',
             'foreign' => 'ciclo_id'));

        $this->hasOne('ClaGrado as ClaGrado_5', array(
             'local' => 'nivel_id',
             'foreign' => 'nivel_id'));

        $this->hasOne('ClaTurno', array(
             'local' => 'turno_id',
             'foreign' => 'id_turno'));

        $this->hasOne('SdatRueUnidadEducativa', array(
             'local' => 'cod_ue_id',
             'foreign' => 'cod_ue_id'));

        $this->hasOne('SdatRueUnidadEducativa as SdatRueUnidadEducativa_8', array(
             'local' => 'sub_cea_id',
             'foreign' => 'sub_cea'));

        $this->hasOne('SdatRueUnidadEducativa as SdatRueUnidadEducativa_9', array(
             'local' => 'periodo_id',
             'foreign' => 'periodo_id'));
    }
}