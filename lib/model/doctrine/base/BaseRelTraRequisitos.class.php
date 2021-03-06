<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('RelTraRequisitos', 'doctrine');

/**
 * BaseRelTraRequisitos
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $proceso_id
 * @property integer $requisito_id
 * @property integer $opcional
 * @property integer $componente_id
 * @property ClaComponente $ClaComponente
 * @property ClaTraProceso $ClaTraProceso
 * @property ClaRequisitos $ClaRequisitos
 * 
 * @method integer          getProcesoId()     Returns the current record's "proceso_id" value
 * @method integer          getRequisitoId()   Returns the current record's "requisito_id" value
 * @method integer          getOpcional()      Returns the current record's "opcional" value
 * @method integer          getComponenteId()  Returns the current record's "componente_id" value
 * @method ClaComponente    getClaComponente() Returns the current record's "ClaComponente" value
 * @method ClaTraProceso    getClaTraProceso() Returns the current record's "ClaTraProceso" value
 * @method ClaRequisitos    getClaRequisitos() Returns the current record's "ClaRequisitos" value
 * @method RelTraRequisitos setProcesoId()     Sets the current record's "proceso_id" value
 * @method RelTraRequisitos setRequisitoId()   Sets the current record's "requisito_id" value
 * @method RelTraRequisitos setOpcional()      Sets the current record's "opcional" value
 * @method RelTraRequisitos setComponenteId()  Sets the current record's "componente_id" value
 * @method RelTraRequisitos setClaComponente() Sets the current record's "ClaComponente" value
 * @method RelTraRequisitos setClaTraProceso() Sets the current record's "ClaTraProceso" value
 * @method RelTraRequisitos setClaRequisitos() Sets the current record's "ClaRequisitos" value
 * 
 * @package    alternativa
 * @subpackage model
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseRelTraRequisitos extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('rel_tra_requisitos');
        $this->hasColumn('proceso_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('requisito_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('opcional', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('componente_id', 'integer', 1, array(
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
        $this->hasOne('ClaComponente', array(
             'local' => 'componente_id',
             'foreign' => 'id_componente'));

        $this->hasOne('ClaTraProceso', array(
             'local' => 'proceso_id',
             'foreign' => 'id_proceso'));

        $this->hasOne('ClaRequisitos', array(
             'local' => 'requisito_id',
             'foreign' => 'id_requisito'));
    }
}