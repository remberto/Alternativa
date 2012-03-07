<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('VCentrosAlternativaCertificadasBachilleres', 'doctrine');

/**
 * BaseVCentrosAlternativaCertificadasBachilleres
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $gestion_id
 * @property string $desc_departamento
 * @property integer $cod_distrito
 * @property string $cod_ue
 * @property string $desc_ue
 * @property integer $calculated_column1
 * 
 * @method integer                                    getId()                 Returns the current record's "id" value
 * @method integer                                    getGestionId()          Returns the current record's "gestion_id" value
 * @method string                                     getDescDepartamento()   Returns the current record's "desc_departamento" value
 * @method integer                                    getCodDistrito()        Returns the current record's "cod_distrito" value
 * @method string                                     getCodUe()              Returns the current record's "cod_ue" value
 * @method string                                     getDescUe()             Returns the current record's "desc_ue" value
 * @method integer                                    getCalculatedColumn1()  Returns the current record's "calculated_column1" value
 * @method VCentrosAlternativaCertificadasBachilleres setId()                 Sets the current record's "id" value
 * @method VCentrosAlternativaCertificadasBachilleres setGestionId()          Sets the current record's "gestion_id" value
 * @method VCentrosAlternativaCertificadasBachilleres setDescDepartamento()   Sets the current record's "desc_departamento" value
 * @method VCentrosAlternativaCertificadasBachilleres setCodDistrito()        Sets the current record's "cod_distrito" value
 * @method VCentrosAlternativaCertificadasBachilleres setCodUe()              Sets the current record's "cod_ue" value
 * @method VCentrosAlternativaCertificadasBachilleres setDescUe()             Sets the current record's "desc_ue" value
 * @method VCentrosAlternativaCertificadasBachilleres setCalculatedColumn1()  Sets the current record's "calculated_column1" value
 * 
 * @package    alternativa
 * @subpackage model
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseVCentrosAlternativaCertificadasBachilleres extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('v_centros_alternativa_certificadas_bachilleres');
        $this->hasColumn('id', 'integer', 8, array(
             'type' => 'integer',
             'autoincrement' => true,
             'primary' => true,
             'length' => '8',
             ));
        $this->hasColumn('gestion_id', 'integer', 2, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '2',
             ));
        $this->hasColumn('desc_departamento', 'string', 10, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '10',
             ));
        $this->hasColumn('cod_distrito', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
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
        $this->hasColumn('desc_ue', 'string', 70, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '70',
             ));
        $this->hasColumn('calculated_column1', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '8',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}