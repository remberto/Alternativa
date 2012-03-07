<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('TmpSieCurso', 'doctrine');

/**
 * BaseTmpSieCurso
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $cod_ue_id
 * 
 * @method integer     getId()        Returns the current record's "id" value
 * @method string      getCodUeId()   Returns the current record's "cod_ue_id" value
 * @method TmpSieCurso setId()        Sets the current record's "id" value
 * @method TmpSieCurso setCodUeId()   Sets the current record's "cod_ue_id" value
 * 
 * @package    alternativa
 * @subpackage model
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseTmpSieCurso extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('tmp_sie_curso');
        $this->hasColumn('id', 'integer', 8, array(
             'type' => 'integer',
             'autoincrement' => true,
             'primary' => true,
             'length' => '8',
             ));
        $this->hasColumn('cod_ue_id', 'string', 8, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
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