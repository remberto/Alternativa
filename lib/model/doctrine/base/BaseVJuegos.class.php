<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('VJuegos', 'doctrine');

/**
 * BaseVJuegos
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $desc_departamento
 * @property string $abr_circunscripcion
 * @property string $desc_circunscripcion
 * @property string $distrito
 * @property string $cod_ue
 * @property string $desc_ue
 * @property string $desc_disciplina
 * @property string $desc_prueba
 * @property integer $calculated_column1
 * 
 * @method integer getId()                   Returns the current record's "id" value
 * @method string  getDescDepartamento()     Returns the current record's "desc_departamento" value
 * @method string  getAbrCircunscripcion()   Returns the current record's "abr_circunscripcion" value
 * @method string  getDescCircunscripcion()  Returns the current record's "desc_circunscripcion" value
 * @method string  getDistrito()             Returns the current record's "distrito" value
 * @method string  getCodUe()                Returns the current record's "cod_ue" value
 * @method string  getDescUe()               Returns the current record's "desc_ue" value
 * @method string  getDescDisciplina()       Returns the current record's "desc_disciplina" value
 * @method string  getDescPrueba()           Returns the current record's "desc_prueba" value
 * @method integer getCalculatedColumn1()    Returns the current record's "calculated_column1" value
 * @method VJuegos setId()                   Sets the current record's "id" value
 * @method VJuegos setDescDepartamento()     Sets the current record's "desc_departamento" value
 * @method VJuegos setAbrCircunscripcion()   Sets the current record's "abr_circunscripcion" value
 * @method VJuegos setDescCircunscripcion()  Sets the current record's "desc_circunscripcion" value
 * @method VJuegos setDistrito()             Sets the current record's "distrito" value
 * @method VJuegos setCodUe()                Sets the current record's "cod_ue" value
 * @method VJuegos setDescUe()               Sets the current record's "desc_ue" value
 * @method VJuegos setDescDisciplina()       Sets the current record's "desc_disciplina" value
 * @method VJuegos setDescPrueba()           Sets the current record's "desc_prueba" value
 * @method VJuegos setCalculatedColumn1()    Sets the current record's "calculated_column1" value
 * 
 * @package    alternativa
 * @subpackage model
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseVJuegos extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('v_juegos');
        $this->hasColumn('id', 'integer', 8, array(
             'type' => 'integer',
             'autoincrement' => true,
             'primary' => true,
             'length' => '8',
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
        $this->hasColumn('abr_circunscripcion', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '45',
             ));
        $this->hasColumn('desc_circunscripcion', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '100',
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
        $this->hasColumn('desc_disciplina', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '255',
             ));
        $this->hasColumn('desc_prueba', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '45',
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