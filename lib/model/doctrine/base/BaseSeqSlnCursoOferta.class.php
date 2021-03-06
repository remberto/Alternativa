<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('SeqSlnCursoOferta', 'doctrine');

/**
 * BaseSeqSlnCursoOferta
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $gestion_id
 * @property string $cod_ue_id
 * @property integer $id_curso_oferta
 * 
 * @method integer           getGestionId()       Returns the current record's "gestion_id" value
 * @method string            getCodUeId()         Returns the current record's "cod_ue_id" value
 * @method integer           getIdCursoOferta()   Returns the current record's "id_curso_oferta" value
 * @method SeqSlnCursoOferta setGestionId()       Sets the current record's "gestion_id" value
 * @method SeqSlnCursoOferta setCodUeId()         Sets the current record's "cod_ue_id" value
 * @method SeqSlnCursoOferta setIdCursoOferta()   Sets the current record's "id_curso_oferta" value
 * 
 * @package    alternativa
 * @subpackage model
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseSeqSlnCursoOferta extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('seq_sln_curso_oferta');
        $this->hasColumn('gestion_id', 'integer', 2, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '2',
             ));
        $this->hasColumn('cod_ue_id', 'string', 8, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '8',
             ));
        $this->hasColumn('id_curso_oferta', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '4',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}