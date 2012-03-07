<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('ClaFinanciamiento', 'doctrine');

/**
 * BaseClaFinanciamiento
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_financiamiento
 * @property string $desc_financiamiento
 * @property integer $tipo_financiamiento_id
 * @property string $abrv_financiamiento
 * @property ClaTipoFinanciamiento $ClaTipoFinanciamiento
 * @property Doctrine_Collection $DatSieAdministrativo
 * @property Doctrine_Collection $DatSieCurso
 * @property Doctrine_Collection $DatSieDocente
 * @property Doctrine_Collection $SdatSieAdministrativo
 * @property Doctrine_Collection $SdatSieCurso
 * @property Doctrine_Collection $SdatSieDocente
 * 
 * @method integer               getIdFinanciamiento()       Returns the current record's "id_financiamiento" value
 * @method string                getDescFinanciamiento()     Returns the current record's "desc_financiamiento" value
 * @method integer               getTipoFinanciamientoId()   Returns the current record's "tipo_financiamiento_id" value
 * @method string                getAbrvFinanciamiento()     Returns the current record's "abrv_financiamiento" value
 * @method ClaTipoFinanciamiento getClaTipoFinanciamiento()  Returns the current record's "ClaTipoFinanciamiento" value
 * @method Doctrine_Collection   getDatSieAdministrativo()   Returns the current record's "DatSieAdministrativo" collection
 * @method Doctrine_Collection   getDatSieCurso()            Returns the current record's "DatSieCurso" collection
 * @method Doctrine_Collection   getDatSieDocente()          Returns the current record's "DatSieDocente" collection
 * @method Doctrine_Collection   getSdatSieAdministrativo()  Returns the current record's "SdatSieAdministrativo" collection
 * @method Doctrine_Collection   getSdatSieCurso()           Returns the current record's "SdatSieCurso" collection
 * @method Doctrine_Collection   getSdatSieDocente()         Returns the current record's "SdatSieDocente" collection
 * @method ClaFinanciamiento     setIdFinanciamiento()       Sets the current record's "id_financiamiento" value
 * @method ClaFinanciamiento     setDescFinanciamiento()     Sets the current record's "desc_financiamiento" value
 * @method ClaFinanciamiento     setTipoFinanciamientoId()   Sets the current record's "tipo_financiamiento_id" value
 * @method ClaFinanciamiento     setAbrvFinanciamiento()     Sets the current record's "abrv_financiamiento" value
 * @method ClaFinanciamiento     setClaTipoFinanciamiento()  Sets the current record's "ClaTipoFinanciamiento" value
 * @method ClaFinanciamiento     setDatSieAdministrativo()   Sets the current record's "DatSieAdministrativo" collection
 * @method ClaFinanciamiento     setDatSieCurso()            Sets the current record's "DatSieCurso" collection
 * @method ClaFinanciamiento     setDatSieDocente()          Sets the current record's "DatSieDocente" collection
 * @method ClaFinanciamiento     setSdatSieAdministrativo()  Sets the current record's "SdatSieAdministrativo" collection
 * @method ClaFinanciamiento     setSdatSieCurso()           Sets the current record's "SdatSieCurso" collection
 * @method ClaFinanciamiento     setSdatSieDocente()         Sets the current record's "SdatSieDocente" collection
 * 
 * @package    alternativa
 * @subpackage model
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseClaFinanciamiento extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('cla_financiamiento');
        $this->hasColumn('id_financiamiento', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('desc_financiamiento', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '45',
             ));
        $this->hasColumn('tipo_financiamiento_id', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('abrv_financiamiento', 'string', 3, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '3',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('ClaTipoFinanciamiento', array(
             'local' => 'tipo_financiamiento_id',
             'foreign' => 'id_tipo_financiamiento'));

        $this->hasMany('DatSieAdministrativo', array(
             'local' => 'id_financiamiento',
             'foreign' => 'financiamiento_id'));

        $this->hasMany('DatSieCurso', array(
             'local' => 'id_financiamiento',
             'foreign' => 'fin_des_escolar'));

        $this->hasMany('DatSieDocente', array(
             'local' => 'id_financiamiento',
             'foreign' => 'financiamiento_id'));

        $this->hasMany('SdatSieAdministrativo', array(
             'local' => 'id_financiamiento',
             'foreign' => 'financiamiento_id'));

        $this->hasMany('SdatSieCurso', array(
             'local' => 'id_financiamiento',
             'foreign' => 'fin_des_escolar'));

        $this->hasMany('SdatSieDocente', array(
             'local' => 'id_financiamiento',
             'foreign' => 'financiamiento_id'));
    }
}