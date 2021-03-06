<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('ClaTipoBachillerato', 'doctrine');

/**
 * BaseClaTipoBachillerato
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_bachillerato
 * @property string $desc_bachillerato
 * @property Doctrine_Collection $CtrDplAutorizacion
 * 
 * @method integer             getIdBachillerato()     Returns the current record's "id_bachillerato" value
 * @method string              getDescBachillerato()   Returns the current record's "desc_bachillerato" value
 * @method Doctrine_Collection getCtrDplAutorizacion() Returns the current record's "CtrDplAutorizacion" collection
 * @method ClaTipoBachillerato setIdBachillerato()     Sets the current record's "id_bachillerato" value
 * @method ClaTipoBachillerato setDescBachillerato()   Sets the current record's "desc_bachillerato" value
 * @method ClaTipoBachillerato setCtrDplAutorizacion() Sets the current record's "CtrDplAutorizacion" collection
 * 
 * @package    alternativa
 * @subpackage model
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseClaTipoBachillerato extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('cla_tipo_bachillerato');
        $this->hasColumn('id_bachillerato', 'integer', 2, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '2',
             ));
        $this->hasColumn('desc_bachillerato', 'string', 65, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '65',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('CtrDplAutorizacion', array(
             'local' => 'id_bachillerato',
             'foreign' => 'bachillerato_id'));
    }
}