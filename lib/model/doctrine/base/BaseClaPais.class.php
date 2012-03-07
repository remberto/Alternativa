<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('ClaPais', 'doctrine');

/**
 * BaseClaPais
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_pais
 * @property string $desc_pais
 * @property string $desc_abreviada
 * @property Doctrine_Collection $ClaDepartamento
 * @property Doctrine_Collection $DatRdeEstudiante
 * @property Doctrine_Collection $HisRdeEstudiante
 * 
 * @method integer             getIdPais()           Returns the current record's "id_pais" value
 * @method string              getDescPais()         Returns the current record's "desc_pais" value
 * @method string              getDescAbreviada()    Returns the current record's "desc_abreviada" value
 * @method Doctrine_Collection getClaDepartamento()  Returns the current record's "ClaDepartamento" collection
 * @method Doctrine_Collection getDatRdeEstudiante() Returns the current record's "DatRdeEstudiante" collection
 * @method Doctrine_Collection getHisRdeEstudiante() Returns the current record's "HisRdeEstudiante" collection
 * @method ClaPais             setIdPais()           Sets the current record's "id_pais" value
 * @method ClaPais             setDescPais()         Sets the current record's "desc_pais" value
 * @method ClaPais             setDescAbreviada()    Sets the current record's "desc_abreviada" value
 * @method ClaPais             setClaDepartamento()  Sets the current record's "ClaDepartamento" collection
 * @method ClaPais             setDatRdeEstudiante() Sets the current record's "DatRdeEstudiante" collection
 * @method ClaPais             setHisRdeEstudiante() Sets the current record's "HisRdeEstudiante" collection
 * 
 * @package    alternativa
 * @subpackage model
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseClaPais extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('cla_pais');
        $this->hasColumn('id_pais', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('desc_pais', 'string', 35, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '35',
             ));
        $this->hasColumn('desc_abreviada', 'string', 4, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('ClaDepartamento', array(
             'local' => 'id_pais',
             'foreign' => 'pais_id'));

        $this->hasMany('DatRdeEstudiante', array(
             'local' => 'id_pais',
             'foreign' => 'pais_nac_id'));

        $this->hasMany('HisRdeEstudiante', array(
             'local' => 'id_pais',
             'foreign' => 'pais_nac_id'));
    }
}