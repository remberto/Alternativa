<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('DatRueUnidadEducativa', 'doctrine');

/**
 * BaseDatRueUnidadEducativa
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $cod_ue
 * @property string $desc_ue
 * @property integer $rue_ue
 * @property timestamp $fecha_resolucion
 * @property string $nro_resolucion
 * @property string $obs_rue
 * @property string $des_ue_antes
 * @property string $cod_le_id
 * @property integer $cod_org_curr_id
 * @property integer $cod_dependencia_id
 * @property integer $cod_convenio_id
 * @property integer $cod_cerrada_id
 * @property timestamp $fecha_creacion
 * @property ClaCerrada $ClaCerrada
 * @property ClaConvenios $ClaConvenios
 * @property ClaDependencia $ClaDependencia
 * @property ClaOrgCurricular $ClaOrgCurricular
 * @property DatIfrJurisdiccionGeografica $DatIfrJurisdiccionGeografica
 * @property Doctrine_Collection $CtrRdeEstudiante
 * @property Doctrine_Collection $CtrRdeEstudiante2
 * @property Doctrine_Collection $CtrRdeInscripcion
 * @property Doctrine_Collection $CtrRdeTraslados
 * @property Doctrine_Collection $CtrSieUnidadEducativa
 * @property Doctrine_Collection $CtrSieUnidadEducativaConsolidado
 * @property Doctrine_Collection $DatAltCursooferta
 * @property Doctrine_Collection $DatEdaEvento
 * @property Doctrine_Collection $DatJueApoyo
 * @property Doctrine_Collection $DatJueInscritos
 * @property Doctrine_Collection $DatOpePeticion
 * @property Doctrine_Collection $DatOpeUnidadEducativa
 * @property Doctrine_Collection $DatRdeInscripcion
 * @property Doctrine_Collection $DatRiesgos
 * @property Doctrine_Collection $DatRueAcreditacion
 * @property Doctrine_Collection $DatRueNivel
 * @property Doctrine_Collection $DatRueSubcentro
 * @property Doctrine_Collection $DatSieUnidadEducativa
 * @property Doctrine_Collection $HisRdeInscripcion
 * @property Doctrine_Collection $RelUsuarioUe
 * @property Doctrine_Collection $SeqInscripcionTecnicaUeRango
 * @property Doctrine_Collection $SeqInscripcionUe
 * @property Doctrine_Collection $SeqInscripcionUeRango
 * @property Doctrine_Collection $TskMsgUnidadEducativa
 * 
 * @method string                       getCodUe()                            Returns the current record's "cod_ue" value
 * @method string                       getDescUe()                           Returns the current record's "desc_ue" value
 * @method integer                      getRueUe()                            Returns the current record's "rue_ue" value
 * @method timestamp                    getFechaResolucion()                  Returns the current record's "fecha_resolucion" value
 * @method string                       getNroResolucion()                    Returns the current record's "nro_resolucion" value
 * @method string                       getObsRue()                           Returns the current record's "obs_rue" value
 * @method string                       getDesUeAntes()                       Returns the current record's "des_ue_antes" value
 * @method string                       getCodLeId()                          Returns the current record's "cod_le_id" value
 * @method integer                      getCodOrgCurrId()                     Returns the current record's "cod_org_curr_id" value
 * @method integer                      getCodDependenciaId()                 Returns the current record's "cod_dependencia_id" value
 * @method integer                      getCodConvenioId()                    Returns the current record's "cod_convenio_id" value
 * @method integer                      getCodCerradaId()                     Returns the current record's "cod_cerrada_id" value
 * @method timestamp                    getFechaCreacion()                    Returns the current record's "fecha_creacion" value
 * @method ClaCerrada                   getClaCerrada()                       Returns the current record's "ClaCerrada" value
 * @method ClaConvenios                 getClaConvenios()                     Returns the current record's "ClaConvenios" value
 * @method ClaDependencia               getClaDependencia()                   Returns the current record's "ClaDependencia" value
 * @method ClaOrgCurricular             getClaOrgCurricular()                 Returns the current record's "ClaOrgCurricular" value
 * @method DatIfrJurisdiccionGeografica getDatIfrJurisdiccionGeografica()     Returns the current record's "DatIfrJurisdiccionGeografica" value
 * @method Doctrine_Collection          getCtrRdeEstudiante()                 Returns the current record's "CtrRdeEstudiante" collection
 * @method Doctrine_Collection          getCtrRdeEstudiante2()                Returns the current record's "CtrRdeEstudiante2" collection
 * @method Doctrine_Collection          getCtrRdeInscripcion()                Returns the current record's "CtrRdeInscripcion" collection
 * @method Doctrine_Collection          getCtrRdeTraslados()                  Returns the current record's "CtrRdeTraslados" collection
 * @method Doctrine_Collection          getCtrSieUnidadEducativa()            Returns the current record's "CtrSieUnidadEducativa" collection
 * @method Doctrine_Collection          getCtrSieUnidadEducativaConsolidado() Returns the current record's "CtrSieUnidadEducativaConsolidado" collection
 * @method Doctrine_Collection          getDatAltCursooferta()                Returns the current record's "DatAltCursooferta" collection
 * @method Doctrine_Collection          getDatEdaEvento()                     Returns the current record's "DatEdaEvento" collection
 * @method Doctrine_Collection          getDatJueApoyo()                      Returns the current record's "DatJueApoyo" collection
 * @method Doctrine_Collection          getDatJueInscritos()                  Returns the current record's "DatJueInscritos" collection
 * @method Doctrine_Collection          getDatOpePeticion()                   Returns the current record's "DatOpePeticion" collection
 * @method Doctrine_Collection          getDatOpeUnidadEducativa()            Returns the current record's "DatOpeUnidadEducativa" collection
 * @method Doctrine_Collection          getDatRdeInscripcion()                Returns the current record's "DatRdeInscripcion" collection
 * @method Doctrine_Collection          getDatRiesgos()                       Returns the current record's "DatRiesgos" collection
 * @method Doctrine_Collection          getDatRueAcreditacion()               Returns the current record's "DatRueAcreditacion" collection
 * @method Doctrine_Collection          getDatRueNivel()                      Returns the current record's "DatRueNivel" collection
 * @method Doctrine_Collection          getDatRueSubcentro()                  Returns the current record's "DatRueSubcentro" collection
 * @method Doctrine_Collection          getDatSieUnidadEducativa()            Returns the current record's "DatSieUnidadEducativa" collection
 * @method Doctrine_Collection          getHisRdeInscripcion()                Returns the current record's "HisRdeInscripcion" collection
 * @method Doctrine_Collection          getRelUsuarioUe()                     Returns the current record's "RelUsuarioUe" collection
 * @method Doctrine_Collection          getSeqInscripcionTecnicaUeRango()     Returns the current record's "SeqInscripcionTecnicaUeRango" collection
 * @method Doctrine_Collection          getSeqInscripcionUe()                 Returns the current record's "SeqInscripcionUe" collection
 * @method Doctrine_Collection          getSeqInscripcionUeRango()            Returns the current record's "SeqInscripcionUeRango" collection
 * @method Doctrine_Collection          getTskMsgUnidadEducativa()            Returns the current record's "TskMsgUnidadEducativa" collection
 * @method DatRueUnidadEducativa        setCodUe()                            Sets the current record's "cod_ue" value
 * @method DatRueUnidadEducativa        setDescUe()                           Sets the current record's "desc_ue" value
 * @method DatRueUnidadEducativa        setRueUe()                            Sets the current record's "rue_ue" value
 * @method DatRueUnidadEducativa        setFechaResolucion()                  Sets the current record's "fecha_resolucion" value
 * @method DatRueUnidadEducativa        setNroResolucion()                    Sets the current record's "nro_resolucion" value
 * @method DatRueUnidadEducativa        setObsRue()                           Sets the current record's "obs_rue" value
 * @method DatRueUnidadEducativa        setDesUeAntes()                       Sets the current record's "des_ue_antes" value
 * @method DatRueUnidadEducativa        setCodLeId()                          Sets the current record's "cod_le_id" value
 * @method DatRueUnidadEducativa        setCodOrgCurrId()                     Sets the current record's "cod_org_curr_id" value
 * @method DatRueUnidadEducativa        setCodDependenciaId()                 Sets the current record's "cod_dependencia_id" value
 * @method DatRueUnidadEducativa        setCodConvenioId()                    Sets the current record's "cod_convenio_id" value
 * @method DatRueUnidadEducativa        setCodCerradaId()                     Sets the current record's "cod_cerrada_id" value
 * @method DatRueUnidadEducativa        setFechaCreacion()                    Sets the current record's "fecha_creacion" value
 * @method DatRueUnidadEducativa        setClaCerrada()                       Sets the current record's "ClaCerrada" value
 * @method DatRueUnidadEducativa        setClaConvenios()                     Sets the current record's "ClaConvenios" value
 * @method DatRueUnidadEducativa        setClaDependencia()                   Sets the current record's "ClaDependencia" value
 * @method DatRueUnidadEducativa        setClaOrgCurricular()                 Sets the current record's "ClaOrgCurricular" value
 * @method DatRueUnidadEducativa        setDatIfrJurisdiccionGeografica()     Sets the current record's "DatIfrJurisdiccionGeografica" value
 * @method DatRueUnidadEducativa        setCtrRdeEstudiante()                 Sets the current record's "CtrRdeEstudiante" collection
 * @method DatRueUnidadEducativa        setCtrRdeEstudiante2()                Sets the current record's "CtrRdeEstudiante2" collection
 * @method DatRueUnidadEducativa        setCtrRdeInscripcion()                Sets the current record's "CtrRdeInscripcion" collection
 * @method DatRueUnidadEducativa        setCtrRdeTraslados()                  Sets the current record's "CtrRdeTraslados" collection
 * @method DatRueUnidadEducativa        setCtrSieUnidadEducativa()            Sets the current record's "CtrSieUnidadEducativa" collection
 * @method DatRueUnidadEducativa        setCtrSieUnidadEducativaConsolidado() Sets the current record's "CtrSieUnidadEducativaConsolidado" collection
 * @method DatRueUnidadEducativa        setDatAltCursooferta()                Sets the current record's "DatAltCursooferta" collection
 * @method DatRueUnidadEducativa        setDatEdaEvento()                     Sets the current record's "DatEdaEvento" collection
 * @method DatRueUnidadEducativa        setDatJueApoyo()                      Sets the current record's "DatJueApoyo" collection
 * @method DatRueUnidadEducativa        setDatJueInscritos()                  Sets the current record's "DatJueInscritos" collection
 * @method DatRueUnidadEducativa        setDatOpePeticion()                   Sets the current record's "DatOpePeticion" collection
 * @method DatRueUnidadEducativa        setDatOpeUnidadEducativa()            Sets the current record's "DatOpeUnidadEducativa" collection
 * @method DatRueUnidadEducativa        setDatRdeInscripcion()                Sets the current record's "DatRdeInscripcion" collection
 * @method DatRueUnidadEducativa        setDatRiesgos()                       Sets the current record's "DatRiesgos" collection
 * @method DatRueUnidadEducativa        setDatRueAcreditacion()               Sets the current record's "DatRueAcreditacion" collection
 * @method DatRueUnidadEducativa        setDatRueNivel()                      Sets the current record's "DatRueNivel" collection
 * @method DatRueUnidadEducativa        setDatRueSubcentro()                  Sets the current record's "DatRueSubcentro" collection
 * @method DatRueUnidadEducativa        setDatSieUnidadEducativa()            Sets the current record's "DatSieUnidadEducativa" collection
 * @method DatRueUnidadEducativa        setHisRdeInscripcion()                Sets the current record's "HisRdeInscripcion" collection
 * @method DatRueUnidadEducativa        setRelUsuarioUe()                     Sets the current record's "RelUsuarioUe" collection
 * @method DatRueUnidadEducativa        setSeqInscripcionTecnicaUeRango()     Sets the current record's "SeqInscripcionTecnicaUeRango" collection
 * @method DatRueUnidadEducativa        setSeqInscripcionUe()                 Sets the current record's "SeqInscripcionUe" collection
 * @method DatRueUnidadEducativa        setSeqInscripcionUeRango()            Sets the current record's "SeqInscripcionUeRango" collection
 * @method DatRueUnidadEducativa        setTskMsgUnidadEducativa()            Sets the current record's "TskMsgUnidadEducativa" collection
 * 
 * @package    alternativa
 * @subpackage model
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseDatRueUnidadEducativa extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('dat_rue_unidad_educativa');
        $this->hasColumn('cod_ue', 'string', 8, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '8',
             ));
        $this->hasColumn('desc_ue', 'string', 70, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '70',
             ));
        $this->hasColumn('rue_ue', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('fecha_resolucion', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '25',
             ));
        $this->hasColumn('nro_resolucion', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '45',
             ));
        $this->hasColumn('obs_rue', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '45',
             ));
        $this->hasColumn('des_ue_antes', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '45',
             ));
        $this->hasColumn('cod_le_id', 'string', 8, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '8',
             ));
        $this->hasColumn('cod_org_curr_id', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('cod_dependencia_id', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('cod_convenio_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('cod_cerrada_id', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('fecha_creacion', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '25',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('ClaCerrada', array(
             'local' => 'cod_cerrada_id',
             'foreign' => 'cod_cerrada'));

        $this->hasOne('ClaConvenios', array(
             'local' => 'cod_convenio_id',
             'foreign' => 'cod_convenios'));

        $this->hasOne('ClaDependencia', array(
             'local' => 'cod_dependencia_id',
             'foreign' => 'cod_dependencia'));

        $this->hasOne('ClaOrgCurricular', array(
             'local' => 'cod_org_curr_id',
             'foreign' => 'cod_org_curr'));

        $this->hasOne('DatIfrJurisdiccionGeografica', array(
             'local' => 'cod_le_id',
             'foreign' => 'cod_le'));

        $this->hasMany('CtrRdeEstudiante', array(
             'local' => 'cod_ue',
             'foreign' => 'cod_ue_id'));

        $this->hasMany('CtrRdeEstudiante2', array(
             'local' => 'cod_ue',
             'foreign' => 'cod_ue_id'));

        $this->hasMany('CtrRdeInscripcion', array(
             'local' => 'cod_ue',
             'foreign' => 'cod_ue_procedencia_id'));

        $this->hasMany('CtrRdeTraslados', array(
             'local' => 'cod_ue',
             'foreign' => 'cod_ue_id_origen'));

        $this->hasMany('CtrSieUnidadEducativa', array(
             'local' => 'cod_ue',
             'foreign' => 'cod_ue_id'));

        $this->hasMany('CtrSieUnidadEducativaConsolidado', array(
             'local' => 'cod_ue',
             'foreign' => 'cod_ue_id'));

        $this->hasMany('DatAltCursooferta', array(
             'local' => 'cod_ue',
             'foreign' => 'cod_ue_id'));

        $this->hasMany('DatEdaEvento', array(
             'local' => 'cod_ue',
             'foreign' => 'cod_ue_id'));

        $this->hasMany('DatJueApoyo', array(
             'local' => 'cod_ue',
             'foreign' => 'cod_ue_id'));

        $this->hasMany('DatJueInscritos', array(
             'local' => 'cod_ue',
             'foreign' => 'cod_ue_id'));

        $this->hasMany('DatOpePeticion', array(
             'local' => 'cod_ue',
             'foreign' => 'codigo_ue'));

        $this->hasMany('DatOpeUnidadEducativa', array(
             'local' => 'cod_ue',
             'foreign' => 'cod_ue_id'));

        $this->hasMany('DatRdeInscripcion', array(
             'local' => 'cod_ue',
             'foreign' => 'cod_ue_procedencia_id'));

        $this->hasMany('DatRiesgos', array(
             'local' => 'cod_ue',
             'foreign' => 'codigo_ue_id'));

        $this->hasMany('DatRueAcreditacion', array(
             'local' => 'cod_ue',
             'foreign' => 'cod_ue_id'));

        $this->hasMany('DatRueNivel', array(
             'local' => 'cod_ue',
             'foreign' => 'cod_ue_id'));

        $this->hasMany('DatRueSubcentro', array(
             'local' => 'cod_ue',
             'foreign' => 'cod_ue_id'));

        $this->hasMany('DatSieUnidadEducativa', array(
             'local' => 'cod_ue',
             'foreign' => 'cod_ue_id'));

        $this->hasMany('HisRdeInscripcion', array(
             'local' => 'cod_ue',
             'foreign' => 'cod_ue_procedencia_id'));

        $this->hasMany('RelUsuarioUe', array(
             'local' => 'cod_ue',
             'foreign' => 'cod_ue_id'));

        $this->hasMany('SeqInscripcionTecnicaUeRango', array(
             'local' => 'cod_ue',
             'foreign' => 'cod_ue_id'));

        $this->hasMany('SeqInscripcionUe', array(
             'local' => 'cod_ue',
             'foreign' => 'cod_ue_id'));

        $this->hasMany('SeqInscripcionUeRango', array(
             'local' => 'cod_ue',
             'foreign' => 'cod_ue_id'));

        $this->hasMany('TskMsgUnidadEducativa', array(
             'local' => 'cod_ue',
             'foreign' => 'cod_ue'));
    }
}