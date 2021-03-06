<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('SdatSieAdministrativo', 'doctrine');

/**
 * BaseSdatSieAdministrativo
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $ci_docente_id
 * @property integer $gestion_id
 * @property string $cod_ue_id
 * @property integer $periodo_id
 * @property integer $operativo_id
 * @property integer $sub_cea_id
 * @property integer $cargo_id
 * @property integer $mes
 * @property integer $financiamiento_id
 * @property ClaFinanciamiento $ClaFinanciamiento
 * @property DatSieDocenteadministrativo $DatSieDocenteadministrativo
 * @property SdatRueUnidadEducativa $SdatRueUnidadEducativa
 * @property SdatRueUnidadEducativa $SdatRueUnidadEducativa_4
 * @property SdatRueUnidadEducativa $SdatRueUnidadEducativa_5
 * @property ClaCargo $ClaCargo
 * 
 * @method integer                     getCiDocenteId()                 Returns the current record's "ci_docente_id" value
 * @method integer                     getGestionId()                   Returns the current record's "gestion_id" value
 * @method string                      getCodUeId()                     Returns the current record's "cod_ue_id" value
 * @method integer                     getPeriodoId()                   Returns the current record's "periodo_id" value
 * @method integer                     getOperativoId()                 Returns the current record's "operativo_id" value
 * @method integer                     getSubCeaId()                    Returns the current record's "sub_cea_id" value
 * @method integer                     getCargoId()                     Returns the current record's "cargo_id" value
 * @method integer                     getMes()                         Returns the current record's "mes" value
 * @method integer                     getFinanciamientoId()            Returns the current record's "financiamiento_id" value
 * @method ClaFinanciamiento           getClaFinanciamiento()           Returns the current record's "ClaFinanciamiento" value
 * @method DatSieDocenteadministrativo getDatSieDocenteadministrativo() Returns the current record's "DatSieDocenteadministrativo" value
 * @method SdatRueUnidadEducativa      getSdatRueUnidadEducativa()      Returns the current record's "SdatRueUnidadEducativa" value
 * @method SdatRueUnidadEducativa      getSdatRueUnidadEducativa4()     Returns the current record's "SdatRueUnidadEducativa_4" value
 * @method SdatRueUnidadEducativa      getSdatRueUnidadEducativa5()     Returns the current record's "SdatRueUnidadEducativa_5" value
 * @method ClaCargo                    getClaCargo()                    Returns the current record's "ClaCargo" value
 * @method SdatSieAdministrativo       setCiDocenteId()                 Sets the current record's "ci_docente_id" value
 * @method SdatSieAdministrativo       setGestionId()                   Sets the current record's "gestion_id" value
 * @method SdatSieAdministrativo       setCodUeId()                     Sets the current record's "cod_ue_id" value
 * @method SdatSieAdministrativo       setPeriodoId()                   Sets the current record's "periodo_id" value
 * @method SdatSieAdministrativo       setOperativoId()                 Sets the current record's "operativo_id" value
 * @method SdatSieAdministrativo       setSubCeaId()                    Sets the current record's "sub_cea_id" value
 * @method SdatSieAdministrativo       setCargoId()                     Sets the current record's "cargo_id" value
 * @method SdatSieAdministrativo       setMes()                         Sets the current record's "mes" value
 * @method SdatSieAdministrativo       setFinanciamientoId()            Sets the current record's "financiamiento_id" value
 * @method SdatSieAdministrativo       setClaFinanciamiento()           Sets the current record's "ClaFinanciamiento" value
 * @method SdatSieAdministrativo       setDatSieDocenteadministrativo() Sets the current record's "DatSieDocenteadministrativo" value
 * @method SdatSieAdministrativo       setSdatRueUnidadEducativa()      Sets the current record's "SdatRueUnidadEducativa" value
 * @method SdatSieAdministrativo       setSdatRueUnidadEducativa4()     Sets the current record's "SdatRueUnidadEducativa_4" value
 * @method SdatSieAdministrativo       setSdatRueUnidadEducativa5()     Sets the current record's "SdatRueUnidadEducativa_5" value
 * @method SdatSieAdministrativo       setClaCargo()                    Sets the current record's "ClaCargo" value
 * 
 * @package    alternativa
 * @subpackage model
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseSdatSieAdministrativo extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('sdat_sie_administrativo');
        $this->hasColumn('ci_docente_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
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
        $this->hasColumn('cod_ue_id', 'string', 8, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '8',
             ));
        $this->hasColumn('periodo_id', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('operativo_id', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('sub_cea_id', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('cargo_id', 'integer', 2, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '2',
             ));
        $this->hasColumn('mes', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('financiamiento_id', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('ClaFinanciamiento', array(
             'local' => 'financiamiento_id',
             'foreign' => 'id_financiamiento'));

        $this->hasOne('DatSieDocenteadministrativo', array(
             'local' => 'ci_docente_id',
             'foreign' => 'ci'));

        $this->hasOne('SdatRueUnidadEducativa', array(
             'local' => 'cod_ue_id',
             'foreign' => 'cod_ue_id'));

        $this->hasOne('SdatRueUnidadEducativa as SdatRueUnidadEducativa_4', array(
             'local' => 'sub_cea_id',
             'foreign' => 'sub_cea'));

        $this->hasOne('SdatRueUnidadEducativa as SdatRueUnidadEducativa_5', array(
             'local' => 'periodo_id',
             'foreign' => 'periodo_id'));

        $this->hasOne('ClaCargo', array(
             'local' => 'cargo_id',
             'foreign' => 'id_cargo'));
    }
}