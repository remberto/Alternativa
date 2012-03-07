<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('ClaOperativo', 'doctrine');

/**
 * BaseClaOperativo
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_operativo
 * @property string $desc_operativo
 * @property integer $cod_org_curr_id
 * @property ClaOrgCurricular $ClaOrgCurricular
 * @property Doctrine_Collection $DatSieOperativos
 * 
 * @method integer             getIdOperativo()      Returns the current record's "id_operativo" value
 * @method string              getDescOperativo()    Returns the current record's "desc_operativo" value
 * @method integer             getCodOrgCurrId()     Returns the current record's "cod_org_curr_id" value
 * @method ClaOrgCurricular    getClaOrgCurricular() Returns the current record's "ClaOrgCurricular" value
 * @method Doctrine_Collection getDatSieOperativos() Returns the current record's "DatSieOperativos" collection
 * @method ClaOperativo        setIdOperativo()      Sets the current record's "id_operativo" value
 * @method ClaOperativo        setDescOperativo()    Sets the current record's "desc_operativo" value
 * @method ClaOperativo        setCodOrgCurrId()     Sets the current record's "cod_org_curr_id" value
 * @method ClaOperativo        setClaOrgCurricular() Sets the current record's "ClaOrgCurricular" value
 * @method ClaOperativo        setDatSieOperativos() Sets the current record's "DatSieOperativos" collection
 * 
 * @package    alternativa
 * @subpackage model
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseClaOperativo extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('cla_operativo');
        $this->hasColumn('id_operativo', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('desc_operativo', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '45',
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
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('ClaOrgCurricular', array(
             'local' => 'cod_org_curr_id',
             'foreign' => 'cod_org_curr'));

        $this->hasMany('DatSieOperativos', array(
             'local' => 'id_operativo',
             'foreign' => 'operativo_id'));
    }
}