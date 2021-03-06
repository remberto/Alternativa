<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('DatRdeEstudianteNewRude', 'doctrine');

/**
 * BaseDatRdeEstudianteNewRude
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $codigo_rude
 * @property string $cod_ue
 * @property integer $numero
 * @property integer $base
 * 
 * @method integer                 getId()          Returns the current record's "id" value
 * @method string                  getCodigoRude()  Returns the current record's "codigo_rude" value
 * @method string                  getCodUe()       Returns the current record's "cod_ue" value
 * @method integer                 getNumero()      Returns the current record's "numero" value
 * @method integer                 getBase()        Returns the current record's "base" value
 * @method DatRdeEstudianteNewRude setId()          Sets the current record's "id" value
 * @method DatRdeEstudianteNewRude setCodigoRude()  Sets the current record's "codigo_rude" value
 * @method DatRdeEstudianteNewRude setCodUe()       Sets the current record's "cod_ue" value
 * @method DatRdeEstudianteNewRude setNumero()      Sets the current record's "numero" value
 * @method DatRdeEstudianteNewRude setBase()        Sets the current record's "base" value
 * 
 * @package    alternativa
 * @subpackage model
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseDatRdeEstudianteNewRude extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('dat_rde_estudiante_new_rude');
        $this->hasColumn('id', 'integer', 8, array(
             'type' => 'integer',
             'autoincrement' => true,
             'primary' => true,
             'length' => '8',
             ));
        $this->hasColumn('codigo_rude', 'string', 18, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '18',
             ));
        $this->hasColumn('cod_ue', 'string', 8, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '8',
             ));
        $this->hasColumn('numero', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('base', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'default' => '2',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}