<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('SdatRueUnidadEducativa', 'doctrine');

/**
 * BaseSdatRueUnidadEducativa
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $cod_ue_id
 * @property string $desc_ue
 * @property integer $sub_cea
 * @property integer $gestion_id
 * @property integer $operativo_id
 * @property integer $periodo_id
 * @property string $nombre_subcea
 * @property integer $multigrado
 * @property string $telefono1
 * @property string $telefono2
 * @property string $referencia_telefono2
 * @property string $fax
 * @property string $email
 * @property string $casilla
 * @property string $ci_director
 * @property string $director
 * @property integer $item_director
 * @property integer $cod_cerrada_id
 * @property integer $turno_id
 * @property timestamp $fecha_consolidacion
 * @property string $cod_le_id
 * @property integer $cod_org_curr_id
 * @property integer $cod_dependencia_id
 * @property integer $cod_convenio_id
 * @property integer $id_departamento
 * @property string $desc_departamento
 * @property integer $id_provincia
 * @property string $desc_provincia
 * @property integer $id_seccion
 * @property string $desc_seccion
 * @property integer $id_canton
 * @property string $desc_canton
 * @property string $id_localidad
 * @property string $desc_localidad
 * @property string $tipo_area
 * @property string $zona
 * @property string $direccion
 * @property integer $cod_distrito
 * @property string $distrito
 * @property string $ci_director_distrital
 * @property string $director_distrital
 * @property integer $cod_nucleo
 * @property string $desc_nucleo
 * @property ClaCerrada $ClaCerrada
 * @property ClaConvenios $ClaConvenios
 * @property ClaDependencia $ClaDependencia
 * @property ClaOrgCurricular $ClaOrgCurricular
 * @property ClaTurno $ClaTurno
 * @property Doctrine_Collection $CtrSieUnidadEducativaConsolidado
 * @property Doctrine_Collection $CtrSieUnidadEducativaConsolidado_4
 * @property Doctrine_Collection $CtrSieUnidadEducativaConsolidado_5
 * @property Doctrine_Collection $SdatSieAdministrativo
 * @property Doctrine_Collection $SdatSieAdministrativo_4
 * @property Doctrine_Collection $SdatSieAdministrativo_5
 * @property Doctrine_Collection $SdatSieCurso
 * @property Doctrine_Collection $SdatSieCurso_13
 * @property Doctrine_Collection $SdatSieCurso_14
 * @property Doctrine_Collection $SdatSieCursoespecial
 * @property Doctrine_Collection $SdatSieCursoespecial_8
 * @property Doctrine_Collection $SdatSieCursoespecial_9
 * @property Doctrine_Collection $SdatSieCursotecnica
 * @property Doctrine_Collection $SdatSieCursotecnica_8
 * @property Doctrine_Collection $SdatSieCursotecnica_9
 * @property Doctrine_Collection $SdatSieDocente
 * @property Doctrine_Collection $SdatSieDocente_5
 * @property Doctrine_Collection $SdatSieDocente_6
 * 
 * @method string                 getCodUeId()                            Returns the current record's "cod_ue_id" value
 * @method string                 getDescUe()                             Returns the current record's "desc_ue" value
 * @method integer                getSubCea()                             Returns the current record's "sub_cea" value
 * @method integer                getGestionId()                          Returns the current record's "gestion_id" value
 * @method integer                getOperativoId()                        Returns the current record's "operativo_id" value
 * @method integer                getPeriodoId()                          Returns the current record's "periodo_id" value
 * @method string                 getNombreSubcea()                       Returns the current record's "nombre_subcea" value
 * @method integer                getMultigrado()                         Returns the current record's "multigrado" value
 * @method string                 getTelefono1()                          Returns the current record's "telefono1" value
 * @method string                 getTelefono2()                          Returns the current record's "telefono2" value
 * @method string                 getReferenciaTelefono2()                Returns the current record's "referencia_telefono2" value
 * @method string                 getFax()                                Returns the current record's "fax" value
 * @method string                 getEmail()                              Returns the current record's "email" value
 * @method string                 getCasilla()                            Returns the current record's "casilla" value
 * @method string                 getCiDirector()                         Returns the current record's "ci_director" value
 * @method string                 getDirector()                           Returns the current record's "director" value
 * @method integer                getItemDirector()                       Returns the current record's "item_director" value
 * @method integer                getCodCerradaId()                       Returns the current record's "cod_cerrada_id" value
 * @method integer                getTurnoId()                            Returns the current record's "turno_id" value
 * @method timestamp              getFechaConsolidacion()                 Returns the current record's "fecha_consolidacion" value
 * @method string                 getCodLeId()                            Returns the current record's "cod_le_id" value
 * @method integer                getCodOrgCurrId()                       Returns the current record's "cod_org_curr_id" value
 * @method integer                getCodDependenciaId()                   Returns the current record's "cod_dependencia_id" value
 * @method integer                getCodConvenioId()                      Returns the current record's "cod_convenio_id" value
 * @method integer                getIdDepartamento()                     Returns the current record's "id_departamento" value
 * @method string                 getDescDepartamento()                   Returns the current record's "desc_departamento" value
 * @method integer                getIdProvincia()                        Returns the current record's "id_provincia" value
 * @method string                 getDescProvincia()                      Returns the current record's "desc_provincia" value
 * @method integer                getIdSeccion()                          Returns the current record's "id_seccion" value
 * @method string                 getDescSeccion()                        Returns the current record's "desc_seccion" value
 * @method integer                getIdCanton()                           Returns the current record's "id_canton" value
 * @method string                 getDescCanton()                         Returns the current record's "desc_canton" value
 * @method string                 getIdLocalidad()                        Returns the current record's "id_localidad" value
 * @method string                 getDescLocalidad()                      Returns the current record's "desc_localidad" value
 * @method string                 getTipoArea()                           Returns the current record's "tipo_area" value
 * @method string                 getZona()                               Returns the current record's "zona" value
 * @method string                 getDireccion()                          Returns the current record's "direccion" value
 * @method integer                getCodDistrito()                        Returns the current record's "cod_distrito" value
 * @method string                 getDistrito()                           Returns the current record's "distrito" value
 * @method string                 getCiDirectorDistrital()                Returns the current record's "ci_director_distrital" value
 * @method string                 getDirectorDistrital()                  Returns the current record's "director_distrital" value
 * @method integer                getCodNucleo()                          Returns the current record's "cod_nucleo" value
 * @method string                 getDescNucleo()                         Returns the current record's "desc_nucleo" value
 * @method ClaCerrada             getClaCerrada()                         Returns the current record's "ClaCerrada" value
 * @method ClaConvenios           getClaConvenios()                       Returns the current record's "ClaConvenios" value
 * @method ClaDependencia         getClaDependencia()                     Returns the current record's "ClaDependencia" value
 * @method ClaOrgCurricular       getClaOrgCurricular()                   Returns the current record's "ClaOrgCurricular" value
 * @method ClaTurno               getClaTurno()                           Returns the current record's "ClaTurno" value
 * @method Doctrine_Collection    getCtrSieUnidadEducativaConsolidado()   Returns the current record's "CtrSieUnidadEducativaConsolidado" collection
 * @method Doctrine_Collection    getCtrSieUnidadEducativaConsolidado4()  Returns the current record's "CtrSieUnidadEducativaConsolidado_4" collection
 * @method Doctrine_Collection    getCtrSieUnidadEducativaConsolidado5()  Returns the current record's "CtrSieUnidadEducativaConsolidado_5" collection
 * @method Doctrine_Collection    getSdatSieAdministrativo()              Returns the current record's "SdatSieAdministrativo" collection
 * @method Doctrine_Collection    getSdatSieAdministrativo4()             Returns the current record's "SdatSieAdministrativo_4" collection
 * @method Doctrine_Collection    getSdatSieAdministrativo5()             Returns the current record's "SdatSieAdministrativo_5" collection
 * @method Doctrine_Collection    getSdatSieCurso()                       Returns the current record's "SdatSieCurso" collection
 * @method Doctrine_Collection    getSdatSieCurso13()                     Returns the current record's "SdatSieCurso_13" collection
 * @method Doctrine_Collection    getSdatSieCurso14()                     Returns the current record's "SdatSieCurso_14" collection
 * @method Doctrine_Collection    getSdatSieCursoespecial()               Returns the current record's "SdatSieCursoespecial" collection
 * @method Doctrine_Collection    getSdatSieCursoespecial8()              Returns the current record's "SdatSieCursoespecial_8" collection
 * @method Doctrine_Collection    getSdatSieCursoespecial9()              Returns the current record's "SdatSieCursoespecial_9" collection
 * @method Doctrine_Collection    getSdatSieCursotecnica()                Returns the current record's "SdatSieCursotecnica" collection
 * @method Doctrine_Collection    getSdatSieCursotecnica8()               Returns the current record's "SdatSieCursotecnica_8" collection
 * @method Doctrine_Collection    getSdatSieCursotecnica9()               Returns the current record's "SdatSieCursotecnica_9" collection
 * @method Doctrine_Collection    getSdatSieDocente()                     Returns the current record's "SdatSieDocente" collection
 * @method Doctrine_Collection    getSdatSieDocente5()                    Returns the current record's "SdatSieDocente_5" collection
 * @method Doctrine_Collection    getSdatSieDocente6()                    Returns the current record's "SdatSieDocente_6" collection
 * @method SdatRueUnidadEducativa setCodUeId()                            Sets the current record's "cod_ue_id" value
 * @method SdatRueUnidadEducativa setDescUe()                             Sets the current record's "desc_ue" value
 * @method SdatRueUnidadEducativa setSubCea()                             Sets the current record's "sub_cea" value
 * @method SdatRueUnidadEducativa setGestionId()                          Sets the current record's "gestion_id" value
 * @method SdatRueUnidadEducativa setOperativoId()                        Sets the current record's "operativo_id" value
 * @method SdatRueUnidadEducativa setPeriodoId()                          Sets the current record's "periodo_id" value
 * @method SdatRueUnidadEducativa setNombreSubcea()                       Sets the current record's "nombre_subcea" value
 * @method SdatRueUnidadEducativa setMultigrado()                         Sets the current record's "multigrado" value
 * @method SdatRueUnidadEducativa setTelefono1()                          Sets the current record's "telefono1" value
 * @method SdatRueUnidadEducativa setTelefono2()                          Sets the current record's "telefono2" value
 * @method SdatRueUnidadEducativa setReferenciaTelefono2()                Sets the current record's "referencia_telefono2" value
 * @method SdatRueUnidadEducativa setFax()                                Sets the current record's "fax" value
 * @method SdatRueUnidadEducativa setEmail()                              Sets the current record's "email" value
 * @method SdatRueUnidadEducativa setCasilla()                            Sets the current record's "casilla" value
 * @method SdatRueUnidadEducativa setCiDirector()                         Sets the current record's "ci_director" value
 * @method SdatRueUnidadEducativa setDirector()                           Sets the current record's "director" value
 * @method SdatRueUnidadEducativa setItemDirector()                       Sets the current record's "item_director" value
 * @method SdatRueUnidadEducativa setCodCerradaId()                       Sets the current record's "cod_cerrada_id" value
 * @method SdatRueUnidadEducativa setTurnoId()                            Sets the current record's "turno_id" value
 * @method SdatRueUnidadEducativa setFechaConsolidacion()                 Sets the current record's "fecha_consolidacion" value
 * @method SdatRueUnidadEducativa setCodLeId()                            Sets the current record's "cod_le_id" value
 * @method SdatRueUnidadEducativa setCodOrgCurrId()                       Sets the current record's "cod_org_curr_id" value
 * @method SdatRueUnidadEducativa setCodDependenciaId()                   Sets the current record's "cod_dependencia_id" value
 * @method SdatRueUnidadEducativa setCodConvenioId()                      Sets the current record's "cod_convenio_id" value
 * @method SdatRueUnidadEducativa setIdDepartamento()                     Sets the current record's "id_departamento" value
 * @method SdatRueUnidadEducativa setDescDepartamento()                   Sets the current record's "desc_departamento" value
 * @method SdatRueUnidadEducativa setIdProvincia()                        Sets the current record's "id_provincia" value
 * @method SdatRueUnidadEducativa setDescProvincia()                      Sets the current record's "desc_provincia" value
 * @method SdatRueUnidadEducativa setIdSeccion()                          Sets the current record's "id_seccion" value
 * @method SdatRueUnidadEducativa setDescSeccion()                        Sets the current record's "desc_seccion" value
 * @method SdatRueUnidadEducativa setIdCanton()                           Sets the current record's "id_canton" value
 * @method SdatRueUnidadEducativa setDescCanton()                         Sets the current record's "desc_canton" value
 * @method SdatRueUnidadEducativa setIdLocalidad()                        Sets the current record's "id_localidad" value
 * @method SdatRueUnidadEducativa setDescLocalidad()                      Sets the current record's "desc_localidad" value
 * @method SdatRueUnidadEducativa setTipoArea()                           Sets the current record's "tipo_area" value
 * @method SdatRueUnidadEducativa setZona()                               Sets the current record's "zona" value
 * @method SdatRueUnidadEducativa setDireccion()                          Sets the current record's "direccion" value
 * @method SdatRueUnidadEducativa setCodDistrito()                        Sets the current record's "cod_distrito" value
 * @method SdatRueUnidadEducativa setDistrito()                           Sets the current record's "distrito" value
 * @method SdatRueUnidadEducativa setCiDirectorDistrital()                Sets the current record's "ci_director_distrital" value
 * @method SdatRueUnidadEducativa setDirectorDistrital()                  Sets the current record's "director_distrital" value
 * @method SdatRueUnidadEducativa setCodNucleo()                          Sets the current record's "cod_nucleo" value
 * @method SdatRueUnidadEducativa setDescNucleo()                         Sets the current record's "desc_nucleo" value
 * @method SdatRueUnidadEducativa setClaCerrada()                         Sets the current record's "ClaCerrada" value
 * @method SdatRueUnidadEducativa setClaConvenios()                       Sets the current record's "ClaConvenios" value
 * @method SdatRueUnidadEducativa setClaDependencia()                     Sets the current record's "ClaDependencia" value
 * @method SdatRueUnidadEducativa setClaOrgCurricular()                   Sets the current record's "ClaOrgCurricular" value
 * @method SdatRueUnidadEducativa setClaTurno()                           Sets the current record's "ClaTurno" value
 * @method SdatRueUnidadEducativa setCtrSieUnidadEducativaConsolidado()   Sets the current record's "CtrSieUnidadEducativaConsolidado" collection
 * @method SdatRueUnidadEducativa setCtrSieUnidadEducativaConsolidado4()  Sets the current record's "CtrSieUnidadEducativaConsolidado_4" collection
 * @method SdatRueUnidadEducativa setCtrSieUnidadEducativaConsolidado5()  Sets the current record's "CtrSieUnidadEducativaConsolidado_5" collection
 * @method SdatRueUnidadEducativa setSdatSieAdministrativo()              Sets the current record's "SdatSieAdministrativo" collection
 * @method SdatRueUnidadEducativa setSdatSieAdministrativo4()             Sets the current record's "SdatSieAdministrativo_4" collection
 * @method SdatRueUnidadEducativa setSdatSieAdministrativo5()             Sets the current record's "SdatSieAdministrativo_5" collection
 * @method SdatRueUnidadEducativa setSdatSieCurso()                       Sets the current record's "SdatSieCurso" collection
 * @method SdatRueUnidadEducativa setSdatSieCurso13()                     Sets the current record's "SdatSieCurso_13" collection
 * @method SdatRueUnidadEducativa setSdatSieCurso14()                     Sets the current record's "SdatSieCurso_14" collection
 * @method SdatRueUnidadEducativa setSdatSieCursoespecial()               Sets the current record's "SdatSieCursoespecial" collection
 * @method SdatRueUnidadEducativa setSdatSieCursoespecial8()              Sets the current record's "SdatSieCursoespecial_8" collection
 * @method SdatRueUnidadEducativa setSdatSieCursoespecial9()              Sets the current record's "SdatSieCursoespecial_9" collection
 * @method SdatRueUnidadEducativa setSdatSieCursotecnica()                Sets the current record's "SdatSieCursotecnica" collection
 * @method SdatRueUnidadEducativa setSdatSieCursotecnica8()               Sets the current record's "SdatSieCursotecnica_8" collection
 * @method SdatRueUnidadEducativa setSdatSieCursotecnica9()               Sets the current record's "SdatSieCursotecnica_9" collection
 * @method SdatRueUnidadEducativa setSdatSieDocente()                     Sets the current record's "SdatSieDocente" collection
 * @method SdatRueUnidadEducativa setSdatSieDocente5()                    Sets the current record's "SdatSieDocente_5" collection
 * @method SdatRueUnidadEducativa setSdatSieDocente6()                    Sets the current record's "SdatSieDocente_6" collection
 * 
 * @package    alternativa
 * @subpackage model
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseSdatRueUnidadEducativa extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('sdat_rue_unidad_educativa');
        $this->hasColumn('cod_ue_id', 'string', 8, array(
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
        $this->hasColumn('sub_cea', 'integer', 1, array(
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
        $this->hasColumn('nombre_subcea', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '50',
             ));
        $this->hasColumn('multigrado', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('telefono1', 'string', 8, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '8',
             ));
        $this->hasColumn('telefono2', 'string', 8, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '8',
             ));
        $this->hasColumn('referencia_telefono2', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '45',
             ));
        $this->hasColumn('fax', 'string', 8, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '8',
             ));
        $this->hasColumn('email', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '50',
             ));
        $this->hasColumn('casilla', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '45',
             ));
        $this->hasColumn('ci_director', 'string', 8, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '8',
             ));
        $this->hasColumn('director', 'string', 80, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '80',
             ));
        $this->hasColumn('item_director', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '1',
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
        $this->hasColumn('turno_id', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('fecha_consolidacion', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '25',
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
        $this->hasColumn('id_departamento', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('desc_departamento', 'string', 10, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '10',
             ));
        $this->hasColumn('id_provincia', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('desc_provincia', 'string', 25, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '25',
             ));
        $this->hasColumn('id_seccion', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('desc_seccion', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '50',
             ));
        $this->hasColumn('id_canton', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('desc_canton', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '45',
             ));
        $this->hasColumn('id_localidad', 'string', 6, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '6',
             ));
        $this->hasColumn('desc_localidad', 'string', 125, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '125',
             ));
        $this->hasColumn('tipo_area', 'string', 1, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('zona', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '50',
             ));
        $this->hasColumn('direccion', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '100',
             ));
        $this->hasColumn('cod_distrito', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('distrito', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '45',
             ));
        $this->hasColumn('ci_director_distrital', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '45',
             ));
        $this->hasColumn('director_distrital', 'string', 80, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '80',
             ));
        $this->hasColumn('cod_nucleo', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('desc_nucleo', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => 'N',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '45',
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

        $this->hasOne('ClaTurno', array(
             'local' => 'turno_id',
             'foreign' => 'id_turno'));

        $this->hasMany('CtrSieUnidadEducativaConsolidado', array(
             'local' => 'cod_ue_id',
             'foreign' => 'cod_ue_id'));

        $this->hasMany('CtrSieUnidadEducativaConsolidado as CtrSieUnidadEducativaConsolidado_4', array(
             'local' => 'sub_cea',
             'foreign' => 'sub_cea'));

        $this->hasMany('CtrSieUnidadEducativaConsolidado as CtrSieUnidadEducativaConsolidado_5', array(
             'local' => 'periodo_id',
             'foreign' => 'periodo_id'));

        $this->hasMany('SdatSieAdministrativo', array(
             'local' => 'cod_ue_id',
             'foreign' => 'cod_ue_id'));

        $this->hasMany('SdatSieAdministrativo as SdatSieAdministrativo_4', array(
             'local' => 'sub_cea',
             'foreign' => 'sub_cea_id'));

        $this->hasMany('SdatSieAdministrativo as SdatSieAdministrativo_5', array(
             'local' => 'periodo_id',
             'foreign' => 'periodo_id'));

        $this->hasMany('SdatSieCurso', array(
             'local' => 'cod_ue_id',
             'foreign' => 'cod_ue_id'));

        $this->hasMany('SdatSieCurso as SdatSieCurso_13', array(
             'local' => 'sub_cea',
             'foreign' => 'sub_cea_id'));

        $this->hasMany('SdatSieCurso as SdatSieCurso_14', array(
             'local' => 'periodo_id',
             'foreign' => 'periodo_id'));

        $this->hasMany('SdatSieCursoespecial', array(
             'local' => 'cod_ue_id',
             'foreign' => 'cod_ue_id'));

        $this->hasMany('SdatSieCursoespecial as SdatSieCursoespecial_8', array(
             'local' => 'sub_cea',
             'foreign' => 'sub_cea_id'));

        $this->hasMany('SdatSieCursoespecial as SdatSieCursoespecial_9', array(
             'local' => 'periodo_id',
             'foreign' => 'periodo_id'));

        $this->hasMany('SdatSieCursotecnica', array(
             'local' => 'cod_ue_id',
             'foreign' => 'cod_ue_id'));

        $this->hasMany('SdatSieCursotecnica as SdatSieCursotecnica_8', array(
             'local' => 'sub_cea',
             'foreign' => 'sub_cea_id'));

        $this->hasMany('SdatSieCursotecnica as SdatSieCursotecnica_9', array(
             'local' => 'periodo_id',
             'foreign' => 'periodo_id'));

        $this->hasMany('SdatSieDocente', array(
             'local' => 'cod_ue_id',
             'foreign' => 'cod_ue_id'));

        $this->hasMany('SdatSieDocente as SdatSieDocente_5', array(
             'local' => 'sub_cea',
             'foreign' => 'sub_cea_id'));

        $this->hasMany('SdatSieDocente as SdatSieDocente_6', array(
             'local' => 'periodo_id',
             'foreign' => 'periodo_id'));
    }
}