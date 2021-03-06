<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('ClaEstadoArchivo', 'doctrine');

/**
 * BaseClaEstadoArchivo
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $desc_estado
 * @property Doctrine_Collection $DatOpePeticion
 * 
 * @method integer             getId()             Returns the current record's "id" value
 * @method string              getDescEstado()     Returns the current record's "desc_estado" value
 * @method Doctrine_Collection getDatOpePeticion() Returns the current record's "DatOpePeticion" collection
 * @method ClaEstadoArchivo    setId()             Sets the current record's "id" value
 * @method ClaEstadoArchivo    setDescEstado()     Sets the current record's "desc_estado" value
 * @method ClaEstadoArchivo    setDatOpePeticion() Sets the current record's "DatOpePeticion" collection
 * 
 * @package    alternativa
 * @subpackage model
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseClaEstadoArchivo extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('cla_estado_archivo');
        $this->hasColumn('id', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('desc_estado', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '45',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('DatOpePeticion', array(
             'local' => 'id',
             'foreign' => 'respuesta'));
    }
}