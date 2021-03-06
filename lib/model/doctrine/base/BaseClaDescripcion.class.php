<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('ClaDescripcion', 'doctrine');

/**
 * BaseClaDescripcion
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $desc_descripcion
 * @property string $abr_descripcion
 * @property Doctrine_Collection $DatJueApoyo
 * 
 * @method integer             getId()               Returns the current record's "id" value
 * @method string              getDescDescripcion()  Returns the current record's "desc_descripcion" value
 * @method string              getAbrDescripcion()   Returns the current record's "abr_descripcion" value
 * @method Doctrine_Collection getDatJueApoyo()      Returns the current record's "DatJueApoyo" collection
 * @method ClaDescripcion      setId()               Sets the current record's "id" value
 * @method ClaDescripcion      setDescDescripcion()  Sets the current record's "desc_descripcion" value
 * @method ClaDescripcion      setAbrDescripcion()   Sets the current record's "abr_descripcion" value
 * @method ClaDescripcion      setDatJueApoyo()      Sets the current record's "DatJueApoyo" collection
 * 
 * @package    alternativa
 * @subpackage model
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseClaDescripcion extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('cla_descripcion');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => true,
             'length' => '4',
             ));
        $this->hasColumn('desc_descripcion', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '45',
             ));
        $this->hasColumn('abr_descripcion', 'string', 45, array(
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
        $this->hasMany('DatJueApoyo', array(
             'local' => 'id',
             'foreign' => 'descripcion_id'));
    }
}