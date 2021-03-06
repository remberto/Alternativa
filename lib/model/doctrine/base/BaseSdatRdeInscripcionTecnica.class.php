<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('SdatRdeInscripcionTecnica', 'doctrine');

/**
 * BaseSdatRdeInscripcionTecnica
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $inscripcion_id
 * @property integer $gestion_id
 * @property string $codigo_rude_id
 * @property integer $num_matricula
 * @property string $cod_ue_id
 * @property integer $periodo_id
 * @property integer $sub_cea_id
 * @property integer $grado_id
 * @property integer $ciclo_id
 * @property integer $nivel_id
 * @property string $paralelo
 * @property integer $turno_id
 * @property integer $curso_oferta_id
 * @property integer $estado_matricula_inicio_id
 * @property integer $estado_matricula_fin_id
 * @property integer $observacion_id
 * @property string $observacion
 * @property timestamp $fecha_inscripcion
 * @property string $apreciacion_id
 * @property DatRdeEstudiante $DatRdeEstudiante
 * @property ClaEstadoMatricula $ClaEstadoMatricula
 * @property ClaEstadoMatricula $ClaEstadoMatricula_3
 * @property SdatSieCursotecnica $SdatSieCursotecnica
 * @property SdatSieCursotecnica $SdatSieCursotecnica_5
 * @property SdatSieCursotecnica $SdatSieCursotecnica_6
 * @property SdatSieCursotecnica $SdatSieCursotecnica_7
 * @property SdatSieCursotecnica $SdatSieCursotecnica_8
 * @property SdatSieCursotecnica $SdatSieCursotecnica_9
 * @property SdatSieCursotecnica $SdatSieCursotecnica_10
 * @property SdatSieCursotecnica $SdatSieCursotecnica_11
 * @property SdatSieCursotecnica $SdatSieCursotecnica_12
 * 
 * @method integer                   getInscripcionId()              Returns the current record's "inscripcion_id" value
 * @method integer                   getGestionId()                  Returns the current record's "gestion_id" value
 * @method string                    getCodigoRudeId()               Returns the current record's "codigo_rude_id" value
 * @method integer                   getNumMatricula()               Returns the current record's "num_matricula" value
 * @method string                    getCodUeId()                    Returns the current record's "cod_ue_id" value
 * @method integer                   getPeriodoId()                  Returns the current record's "periodo_id" value
 * @method integer                   getSubCeaId()                   Returns the current record's "sub_cea_id" value
 * @method integer                   getGradoId()                    Returns the current record's "grado_id" value
 * @method integer                   getCicloId()                    Returns the current record's "ciclo_id" value
 * @method integer                   getNivelId()                    Returns the current record's "nivel_id" value
 * @method string                    getParalelo()                   Returns the current record's "paralelo" value
 * @method integer                   getTurnoId()                    Returns the current record's "turno_id" value
 * @method integer                   getCursoOfertaId()              Returns the current record's "curso_oferta_id" value
 * @method integer                   getEstadoMatriculaInicioId()    Returns the current record's "estado_matricula_inicio_id" value
 * @method integer                   getEstadoMatriculaFinId()       Returns the current record's "estado_matricula_fin_id" value
 * @method integer                   getObservacionId()              Returns the current record's "observacion_id" value
 * @method string                    getObservacion()                Returns the current record's "observacion" value
 * @method timestamp                 getFechaInscripcion()           Returns the current record's "fecha_inscripcion" value
 * @method string                    getApreciacionId()              Returns the current record's "apreciacion_id" value
 * @method DatRdeEstudiante          getDatRdeEstudiante()           Returns the current record's "DatRdeEstudiante" value
 * @method ClaEstadoMatricula        getClaEstadoMatricula()         Returns the current record's "ClaEstadoMatricula" value
 * @method ClaEstadoMatricula        getClaEstadoMatricula3()        Returns the current record's "ClaEstadoMatricula_3" value
 * @method SdatSieCursotecnica       getSdatSieCursotecnica()        Returns the current record's "SdatSieCursotecnica" value
 * @method SdatSieCursotecnica       getSdatSieCursotecnica5()       Returns the current record's "SdatSieCursotecnica_5" value
 * @method SdatSieCursotecnica       getSdatSieCursotecnica6()       Returns the current record's "SdatSieCursotecnica_6" value
 * @method SdatSieCursotecnica       getSdatSieCursotecnica7()       Returns the current record's "SdatSieCursotecnica_7" value
 * @method SdatSieCursotecnica       getSdatSieCursotecnica8()       Returns the current record's "SdatSieCursotecnica_8" value
 * @method SdatSieCursotecnica       getSdatSieCursotecnica9()       Returns the current record's "SdatSieCursotecnica_9" value
 * @method SdatSieCursotecnica       getSdatSieCursotecnica10()      Returns the current record's "SdatSieCursotecnica_10" value
 * @method SdatSieCursotecnica       getSdatSieCursotecnica11()      Returns the current record's "SdatSieCursotecnica_11" value
 * @method SdatSieCursotecnica       getSdatSieCursotecnica12()      Returns the current record's "SdatSieCursotecnica_12" value
 * @method SdatRdeInscripcionTecnica setInscripcionId()              Sets the current record's "inscripcion_id" value
 * @method SdatRdeInscripcionTecnica setGestionId()                  Sets the current record's "gestion_id" value
 * @method SdatRdeInscripcionTecnica setCodigoRudeId()               Sets the current record's "codigo_rude_id" value
 * @method SdatRdeInscripcionTecnica setNumMatricula()               Sets the current record's "num_matricula" value
 * @method SdatRdeInscripcionTecnica setCodUeId()                    Sets the current record's "cod_ue_id" value
 * @method SdatRdeInscripcionTecnica setPeriodoId()                  Sets the current record's "periodo_id" value
 * @method SdatRdeInscripcionTecnica setSubCeaId()                   Sets the current record's "sub_cea_id" value
 * @method SdatRdeInscripcionTecnica setGradoId()                    Sets the current record's "grado_id" value
 * @method SdatRdeInscripcionTecnica setCicloId()                    Sets the current record's "ciclo_id" value
 * @method SdatRdeInscripcionTecnica setNivelId()                    Sets the current record's "nivel_id" value
 * @method SdatRdeInscripcionTecnica setParalelo()                   Sets the current record's "paralelo" value
 * @method SdatRdeInscripcionTecnica setTurnoId()                    Sets the current record's "turno_id" value
 * @method SdatRdeInscripcionTecnica setCursoOfertaId()              Sets the current record's "curso_oferta_id" value
 * @method SdatRdeInscripcionTecnica setEstadoMatriculaInicioId()    Sets the current record's "estado_matricula_inicio_id" value
 * @method SdatRdeInscripcionTecnica setEstadoMatriculaFinId()       Sets the current record's "estado_matricula_fin_id" value
 * @method SdatRdeInscripcionTecnica setObservacionId()              Sets the current record's "observacion_id" value
 * @method SdatRdeInscripcionTecnica setObservacion()                Sets the current record's "observacion" value
 * @method SdatRdeInscripcionTecnica setFechaInscripcion()           Sets the current record's "fecha_inscripcion" value
 * @method SdatRdeInscripcionTecnica setApreciacionId()              Sets the current record's "apreciacion_id" value
 * @method SdatRdeInscripcionTecnica setDatRdeEstudiante()           Sets the current record's "DatRdeEstudiante" value
 * @method SdatRdeInscripcionTecnica setClaEstadoMatricula()         Sets the current record's "ClaEstadoMatricula" value
 * @method SdatRdeInscripcionTecnica setClaEstadoMatricula3()        Sets the current record's "ClaEstadoMatricula_3" value
 * @method SdatRdeInscripcionTecnica setSdatSieCursotecnica()        Sets the current record's "SdatSieCursotecnica" value
 * @method SdatRdeInscripcionTecnica setSdatSieCursotecnica5()       Sets the current record's "SdatSieCursotecnica_5" value
 * @method SdatRdeInscripcionTecnica setSdatSieCursotecnica6()       Sets the current record's "SdatSieCursotecnica_6" value
 * @method SdatRdeInscripcionTecnica setSdatSieCursotecnica7()       Sets the current record's "SdatSieCursotecnica_7" value
 * @method SdatRdeInscripcionTecnica setSdatSieCursotecnica8()       Sets the current record's "SdatSieCursotecnica_8" value
 * @method SdatRdeInscripcionTecnica setSdatSieCursotecnica9()       Sets the current record's "SdatSieCursotecnica_9" value
 * @method SdatRdeInscripcionTecnica setSdatSieCursotecnica10()      Sets the current record's "SdatSieCursotecnica_10" value
 * @method SdatRdeInscripcionTecnica setSdatSieCursotecnica11()      Sets the current record's "SdatSieCursotecnica_11" value
 * @method SdatRdeInscripcionTecnica setSdatSieCursotecnica12()      Sets the current record's "SdatSieCursotecnica_12" value
 * 
 * @package    alternativa
 * @subpackage model
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseSdatRdeInscripcionTecnica extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('sdat_rde_inscripcion_tecnica');
        $this->hasColumn('inscripcion_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('gestion_id', 'integer', 2, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '2',
             ));
        $this->hasColumn('codigo_rude_id', 'string', 18, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '18',
             ));
        $this->hasColumn('num_matricula', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('cod_ue_id', 'string', 8, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '8',
             ));
        $this->hasColumn('periodo_id', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('sub_cea_id', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('grado_id', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('ciclo_id', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('nivel_id', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('paralelo', 'string', 2, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '2',
             ));
        $this->hasColumn('turno_id', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('curso_oferta_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('estado_matricula_inicio_id', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('estado_matricula_fin_id', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('observacion_id', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('observacion', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '255',
             ));
        $this->hasColumn('fecha_inscripcion', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '25',
             ));
        $this->hasColumn('apreciacion_id', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '255',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('DatRdeEstudiante', array(
             'local' => 'codigo_rude_id',
             'foreign' => 'codigo_rude'));

        $this->hasOne('ClaEstadoMatricula', array(
             'local' => 'estado_matricula_fin_id',
             'foreign' => 'id_estado_matricula'));

        $this->hasOne('ClaEstadoMatricula as ClaEstadoMatricula_3', array(
             'local' => 'estado_matricula_inicio_id',
             'foreign' => 'id_estado_matricula'));

        $this->hasOne('SdatSieCursotecnica', array(
             'local' => 'cod_ue_id',
             'foreign' => 'cod_ue_id'));

        $this->hasOne('SdatSieCursotecnica as SdatSieCursotecnica_5', array(
             'local' => 'periodo_id',
             'foreign' => 'periodo_id'));

        $this->hasOne('SdatSieCursotecnica as SdatSieCursotecnica_6', array(
             'local' => 'sub_cea_id',
             'foreign' => 'sub_cea_id'));

        $this->hasOne('SdatSieCursotecnica as SdatSieCursotecnica_7', array(
             'local' => 'grado_id',
             'foreign' => 'grado_id'));

        $this->hasOne('SdatSieCursotecnica as SdatSieCursotecnica_8', array(
             'local' => 'ciclo_id',
             'foreign' => 'ciclo_id'));

        $this->hasOne('SdatSieCursotecnica as SdatSieCursotecnica_9', array(
             'local' => 'nivel_id',
             'foreign' => 'nivel_id'));

        $this->hasOne('SdatSieCursotecnica as SdatSieCursotecnica_10', array(
             'local' => 'paralelo',
             'foreign' => 'paralelo'));

        $this->hasOne('SdatSieCursotecnica as SdatSieCursotecnica_11', array(
             'local' => 'turno_id',
             'foreign' => 'turno_id'));

        $this->hasOne('SdatSieCursotecnica as SdatSieCursotecnica_12', array(
             'local' => 'curso_oferta_id',
             'foreign' => 'curso_oferta_id'));
    }
}