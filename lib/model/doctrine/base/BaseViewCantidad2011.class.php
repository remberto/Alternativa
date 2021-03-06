<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('ViewCantidad2011', 'doctrine');

/**
 * BaseViewCantidad2011
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $id_departamento
 * @property string $desc_departamento
 * @property integer $gestion_id
 * @property integer $cod_distrito
 * @property string $distrito
 * @property string $tipo
 * @property string $cod_ue
 * @property string $desc_ue
 * @property integer $cod_org_curr_id
 * @property integer $calculated_column1
 * 
 * @method integer          getId()                 Returns the current record's "id" value
 * @method integer          getIdDepartamento()     Returns the current record's "id_departamento" value
 * @method string           getDescDepartamento()   Returns the current record's "desc_departamento" value
 * @method integer          getGestionId()          Returns the current record's "gestion_id" value
 * @method integer          getCodDistrito()        Returns the current record's "cod_distrito" value
 * @method string           getDistrito()           Returns the current record's "distrito" value
 * @method string           getTipo()               Returns the current record's "tipo" value
 * @method string           getCodUe()              Returns the current record's "cod_ue" value
 * @method string           getDescUe()             Returns the current record's "desc_ue" value
 * @method integer          getCodOrgCurrId()       Returns the current record's "cod_org_curr_id" value
 * @method integer          getCalculatedColumn1()  Returns the current record's "calculated_column1" value
 * @method ViewCantidad2011 setId()                 Sets the current record's "id" value
 * @method ViewCantidad2011 setIdDepartamento()     Sets the current record's "id_departamento" value
 * @method ViewCantidad2011 setDescDepartamento()   Sets the current record's "desc_departamento" value
 * @method ViewCantidad2011 setGestionId()          Sets the current record's "gestion_id" value
 * @method ViewCantidad2011 setCodDistrito()        Sets the current record's "cod_distrito" value
 * @method ViewCantidad2011 setDistrito()           Sets the current record's "distrito" value
 * @method ViewCantidad2011 setTipo()               Sets the current record's "tipo" value
 * @method ViewCantidad2011 setCodUe()              Sets the current record's "cod_ue" value
 * @method ViewCantidad2011 setDescUe()             Sets the current record's "desc_ue" value
 * @method ViewCantidad2011 setCodOrgCurrId()       Sets the current record's "cod_org_curr_id" value
 * @method ViewCantidad2011 setCalculatedColumn1()  Sets the current record's "calculated_column1" value
 * 
 * @package    alternativa
 * @subpackage model
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseViewCantidad2011 extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('view_cantidad_2011');
        $this->hasColumn('id', 'integer', 8, array(
             'type' => 'integer',
             'autoincrement' => true,
             'primary' => true,
             'length' => '8',
             ));
        $this->hasColumn('id_departamento', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('desc_departamento', 'string', 10, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '10',
             ));
        $this->hasColumn('gestion_id', 'integer', 2, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '2',
             ));
        $this->hasColumn('cod_distrito', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('distrito', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '45',
             ));
        $this->hasColumn('tipo', 'string', 2, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '2',
             ));
        $this->hasColumn('cod_ue', 'string', 8, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '8',
             ));
        $this->hasColumn('desc_ue', 'string', 70, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '70',
             ));
        $this->hasColumn('cod_org_curr_id', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('calculated_column1', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '8',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}